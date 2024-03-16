<?php

namespace Source\App;

use Source\Core\Connect;
use Source\Core\Controller;
use Source\Models\Auth;
use Source\Models\Company;
use Source\Models\Publicity;
use Source\Models\Sector;
use Source\Models\Status;
use Source\Support\Message;
use Source\Support\Pager;

/**
 * Class PublicityController Controller
 *
 * @package Source\App
 * @author  Joab T. Alencar <contato@joabtorres.com.br>
 * @version 1.0
 */

class PublicityController extends Controller
{
    /** @var User */
    private $user;
    /**
     * PublicityController construct
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
     * graphic function - grafico estatistico
     *
     * @param array $data
     * @return void
     */
    public function graphic(array $data): void
    {
        echo "página em desenvolvimento";
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
            $json["redirect"] = url("publicity/{$type}/{$search}/{$date_start}/{$date_final}/{$order}/1");
            echo json_encode($json);
            return;
        }

        $sql_query = "id > 0";
        $sql_params = null;
        if ($type != "type" && $search != "search") {
            $sql_query = "company LIKE '%{$search}%'";
        }

        if ($date_start != "start" && $date_final != "final") {
            $sql_query .= " AND created_at BETWEEN :date_start AND :date_final";
            $sql_params .= "date_start={$date_start}&date_final={$date_final} 23:59:58";
        }

        $publicity = (new Publicity)->find($sql_query, $sql_params);
        $pager = new Pager(url("/publicity/{$type}/{$search}/{$date_start}/{$date_final}/{$order}/"));
        $pager->pager($publicity->count(), 30, $page);

        $head = $this->seo->render(
            "Setores - " . CONF_SITE_TITLE,
            CONF_SITE_DESC,
            url(),
            theme("/assets/images/share.jpg")
        );
        echo $this->view->render("publicity\search", [
            "head" => $head,
            "publicities" => $publicity->limit($pager->limit())
                ->offset($pager->offset())
                ->order("date {$order}")
                ->fetch(true),
            "publicityTotal" => $publicity->count(),
            "paginator" => $pager->render()
        ]);
    }
    /**
     * Undocumented function
     *
     * @param array $data
     * @return void
     */
    public function register(array $data): void
    {
        if (!empty($data["csrf"])) {

            $publicity = (new Publicity)->bootstrap(
                $data["status_id"],
                $this->user->id,
                $data["company"],
                $data["date"],
                $data["description"],
                $data["date_start"],
                $data["date_end"]
            );

            if (!$publicity->save()) {
                $json['message'] = $publicity->message()->render();
                echo json_encode($json);
                return;
            }
        }


        $head = $this->seo->render(
            "Novo Usuário - " . CONF_SITE_TITLE,
            CONF_SITE_DESC,
            url(),
            theme("/assets/images/share.jpg")
        );
        echo $this->view->render("publicity/register", [
            "head" => $head,
            "status" => (new Status)->find()->fetch(true)
        ]);
    }
}
