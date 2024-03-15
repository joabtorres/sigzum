<?php

namespace Source\App;

use Source\Core\Connect;
use Source\Core\Controller;
use Source\Models\Auth;
use Source\Support\Message;

/**
 * Class HomeController Controller
 *
 * @package Source\App
 * @author  Joab T. Alencar <contato@joabtorres.com.br>
 * @version 1.0
 */

class UserController extends Controller
{
    /** @var User */
    private $user;
    /**
     * UserController construct
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
    public function register(): void
    {
        echo 'controler  de usuário registro';
    }
    public function serach(?array $data): void
    {
        echo 'controler  de consulta usuários';
    }
}
