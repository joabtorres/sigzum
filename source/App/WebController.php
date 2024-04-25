<?php

namespace Source\App;

use Source\Core\Connect;
use Source\Core\Controller;
use Source\Core\View;
use Source\Models\Category;
use Source\Models\Film;
use Source\Models\News;
use Source\Support\Email;
use stdClass;

/**
 * Class WebController Controller
 *
 * @package Source\App
 * @author  Joab T. Alencar <contato@joabtorres.com.br>
 * @version 1.0
 */
class WebController extends Controller
{
    /**
     * WebController construct
     */
    public function __construct()
    {
        Connect::getInstance();
        parent::__construct(__DIR__ . "/../../themes/" . CONF_VIEW_THEME . "/");
    }
    /**
     * home function
     * @return void
     */
    public function home(): void
    {
        $head = $this->seo->render(
            CONF_SITE_NAME . " - " . CONF_SITE_TITLE,
            CONF_SITE_DESC,
            url(),
            theme("/assets/images/share.jpg")
        );
        echo $this->view->render("home", [
            "head" => $head,
            "films" => (new Film())->find()->fetch(true)
        ]);
    }
    /**
     * home function
     * @return void
     */
    public function films(): void
    {
        $head = $this->seo->render(
            CONF_SITE_NAME . " - " . CONF_SITE_TITLE,
            CONF_SITE_DESC,
            url(),
            theme("/assets/images/share.jpg")
        );
        echo $this->view->render("films", [
            "head" => $head,
            "films" => (new Film())->find()->fetch(true)
        ]);
    }
    /**
     * home function
     * @return void
     */
    public function film(array $data): void
    {
        $data = filter_var_array($data, FILTER_SANITIZE_SPECIAL_CHARS);
        $film = (new Film)->find("slug = :slug", "slug={$data['slug']}")->fetch();
        if (!$film) {
            redirect("404");
        }
        $head = $this->seo->render(
            CONF_SITE_NAME . " - " . CONF_SITE_TITLE,
            CONF_SITE_DESC,
            url(),
            theme("/assets/images/share.jpg")
        );
        echo $this->view->render("film-single", [
            "head" => $head,
            "film" => $film
        ]);
    }
    /**
     * home function
     * @return void
     */
    public function news_single(array $data): void
    {

        $data = filter_var_array($data, FILTER_SANITIZE_SPECIAL_CHARS);
        $news = (new News)->find("slug = :slug", "slug={$data['slug']}")->fetch();
        if (!$news) {
            redirect("404");
        }
        $head = $this->seo->render(
            CONF_SITE_NAME . " - " . CONF_SITE_TITLE,
            CONF_SITE_DESC,
            url(),
            theme("/assets/images/share.jpg")
        );
        echo $this->view->render("news-single", [
            "head" => $head,
            "news" => $news
        ]);
    }
    /**
     * home function
     * @return void
     */
    public function news(): void
    {
        $head = $this->seo->render(
            CONF_SITE_NAME . " - " . CONF_SITE_TITLE,
            CONF_SITE_DESC,
            url(),
            theme("/assets/images/share.jpg")
        );
        echo $this->view->render("news", [
            "head" => $head,
            "news" => (new News())->find()->fetch(true)
        ]);
    }
    /**
     * home function
     * @return void
     */
    public function about(): void
    {
        $head = $this->seo->render(
            CONF_SITE_NAME . " - " . CONF_SITE_TITLE,
            CONF_SITE_DESC,
            url(),
            theme("/assets/images/share.jpg")
        );
        echo $this->view->render("about", [
            "head" => $head
        ]);
    }
    /**
     * home function
     * @return void
     */
    public function contact(array $data): void
    {
        if (!empty($data["csrf"])) {
            $data = filter_var_array($data, FILTER_SANITIZE_SPECIAL_CHARS);
            if (empty($data["name"]) || empty($data["email"]) || empty($data["phone"]) || empty($data["message"])) {
                $json["message"] = $this->message->error("Preencha todos os campos obrigatórios.")->render();
                echo json_encode($json);
                return;
            }
            if (!is_email($data['email'])) {
                $json["message"] = $this->message->warning("Por favor, informe um e-mail válido.")->render();
                echo json_encode($json);
                return;
            }

            $senderEmail = new \stdClass();
            $senderEmail->name = $data['name'];
            $senderEmail->email = $data['email'];
            $senderEmail->phone = $data['phone'];
            $senderEmail->message = $data['message'];

            if ($this->sendEmail($senderEmail)) {
                $json['message'] = $this->message->success("E-mail enviado com sucesso, obrigado por entrar em contato \o/")->render();
            } else {
                $json['message'] = $this->message->error("Não foi possível enviar o e-mail, serviço temporariamente indisponível :(")->render();
            }
            echo json_encode($json);
            return;
        }

        $head = $this->seo->render(
            CONF_SITE_NAME . " - " . CONF_SITE_TITLE,
            CONF_SITE_DESC,
            url(),
            theme("/assets/images/share.jpg")
        );
        echo $this->view->render("contact", [
            "head" => $head
        ]);
    }
    /**
     * sendEmail function - função responsavel para enviar o e-mail do contato
     *
     * @param stdClass $senderEmail
     * @return boolean
     */
    private function sendEmail(stdClass $senderEmail): bool
    {
        $view = (new View(__DIR__ . "/../../shared/views/email"));
        $message = $view->render("message", [
            "sender" => $senderEmail
        ]);

        $response = (new Email)->bootstrap(
            "Website " . CONF_SITE_NAME . " mensagem de: " . $senderEmail->name,
            $message,
            CONF_MAIL_DESTINATARY,
            CONF_SITE_NAME
        )->send();

        return $response;
    }
}
