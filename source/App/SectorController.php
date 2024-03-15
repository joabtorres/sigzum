<?php

namespace Source\App;

use Source\Core\Connect;
use Source\Core\Controller;
use Source\Models\Auth;
use Source\Models\Company;
use Source\Models\Sector;
use Source\Support\Message;
use Source\Support\Pager;

/**
 * Class CompanyController Controller
 *
 * @package Source\App
 * @author  Joab T. Alencar <contato@joabtorres.com.br>
 * @version 1.0
 */
class SectorController extends Controller
{
    /** @var User */
    private $user;
    /**
     * SectorController construct
     */
    public function __construct()
    {
        Connect::getInstance();
        parent::__construct(__DIR__ . "/../../themes/" . CONF_VIEW_THEME . "/");
        //RESTRIÇÃO
        if (!$this->user = Auth::user()) {
            (new Message())->warning("Efetue login para acessar o sistema.")->flash();
            redirect("/entrar");
        }
    }
    /**
     * search function
     *
     * @return void
     */
    public function search(?array $data): void
    {
        $data = filter_var_array($data, FILTER_SANITIZE_SPECIAL_CHARS);
        $type = !empty($data["type"]) ? $data["type"] : "type";
        $search = !empty($data["search"]) && !empty($type) ? $data["search"] : "search";
        $date_start = !empty($data["date_start"]) ? $data["date_start"] : "start";
        $date_final = !empty($data["date_final"]) ? $data["date_final"] : "end";
        $order = !empty($data["order"]) ? ($data["order"] == "DESC" ? "DESC" : "ASC") : "ASC";
        $page = !empty($data["page"]) ? $data["page"] : 1;
        if (!empty($data["csrf"])) {
            if ($date_start != "start") {
                list($day, $month, $year) = explode("/", $date_start);
                $date_start = "{$year}-{$month}-{$day}";
            }
            if ($date_final != "end") {
                list($day, $month, $year) = explode("/", $date_final);
                $date_final = "{$year}-{$month}-{$day}";
            }
            $json["redirect"] = url("sector/{$type}/{$search}/{$date_start}/{$date_final}/{$order}/1");
            echo json_encode($json);
            return;
        }

        $sql_query = "id > 0";
        $sql_params = null;
        if ($type != "type" && $search != "search") {
            $sql_query = "name LIKE '%{$search}%'";
        }

        if ($date_start != "start" && $date_final != "final") {
            $sql_query .= " AND created_at BETWEEN :date_start AND :date_final";
            $sql_params .= "date_start={$date_start}&date_final={$date_final} 23:59:58";
        }

        $sectors = (new Sector)->find($sql_query, $sql_params);
        $pager = new Pager(url("/sector/{$type}/{$search}/{$date_start}/{$date_final}/{$order}/"));
        $pager->pager($sectors->count(), 30, $page);

        $head = $this->seo->render(
            "Setores - " . CONF_SITE_TITLE,
            CONF_SITE_DESC,
            url(),
            theme("/assets/images/share.jpg")
        );
        echo $this->view->render("sector\search", [
            "head" => $head,
            "sectors" => $sectors->limit($pager->limit())
                ->offset($pager->offset())
                ->order("id {$order}")
                ->fetch(true),
            "sectorTotal" => $sectors->count(),
            "paginator" => $pager->render(),
            "companies" => (new Company)->find()->fetch(true)
        ]);
    }
    /**
     * register function
     *
     * @param array $data
     * @return void
     */
    public function register(array $data): void
    {
        if (!empty($data["csrf"])) {
            if (empty($data["name"])) {
                $json["message"] = $this->message->error("Informe o nome completo do setor.")->render();
                echo json_encode($json);
                return;
            }

            $sector = (new Sector)->bootstrap(
                $data["company"],
                $data["name"],
                $data["abbreviation"]
            );
            if (!$sector->save()) {
                $json["message"] = $sector->message()->render();
                echo json_encode($json);
                return;
            }
            $this->message->success("Cadastro realizado com sucesso!")->flash();
            $json["redirect"] = url("sector");
            echo json_encode($json);
        }
    }
    /**
     * update function
     *
     * @param array $data
     * @return void
     */
    public function update(array $data): void
    {
        if (!empty($data["csrf"])) {
            if (empty($data["name"])) {
                $json["message"] = $this->message->error("Informe o nome completo do setor.")->render();
                echo json_encode($json);
                return;
            }
            $sectorUpdate = (new Sector)->findById($data["id"]);
            $sectorUpdate->name = $data["name"];
            $sectorUpdate->company_id = $data["company"];
            $sectorUpdate->abbreviation = $data["abbreviation"];

            if (!$sectorUpdate->save()) {
                $json["message"] = $sectorUpdate->message()->render();
                echo json_encode($json);
                return;
            }
            $json["message"] = $this->message->success("Alteração realizada com sucesso!")->render();
            echo json_encode($json);
            return;
        }

        $sector = (new Sector)->findById($data["id"]);
        if (!$sector) {
            $this->message->warning("Oops {$this->user->first_name}! Você tentou acessar um registro inexistente no banco de dados.")->flash();
            redirect("sector");
            return;
        }
        $head = $this->seo->render(
            "Editar setores - " . CONF_SITE_TITLE,
            CONF_SITE_DESC,
            url(),
            theme("/assets/images/share.jpg")
        );
        echo $this->view->render("sector/edit", [
            "head" => $head,
            "sector" => $sector,
            "companies" => (new Company)->find()->fetch(true)
        ]);
    }
    /**
     * remove function
     *
     * @param array $data
     * @return void
     */
    public function remove(array $data): void
    {
        $sector = (new Sector)->find("id = :id", "id={$data["id"]}")->fetch();
        var_dump($sector);
        if (!$sector) {
            $this->message->warning("Ooops {$this->user->first_name}! Você tentou excluir um registro inexistente do banco de dados.")->flash();
        } else {
            $sector->destroy();
            $this->message->success("Registro removido com sucesso!")->flash();
        }
        redirect("sector");
    }
}
