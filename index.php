<?php
ob_start();
require __DIR__ . "/vendor/autoload.php";

/**
 * BOOTSTRAP
 */

use Source\Core\Session;
use CoffeeCode\Router\Router;

$session = new Session();
$route = new Router(url(), "@");

/**
 * Home ROUTES
 */
$route->namespace("Source\App");
$route->get("/", "WebController@home");
$route->get("/filmes", "WebController@films");
$route->get("/filmes/{slug}", "WebController@film");
$route->get("/noticias", "WebController@news");
$route->get("/noticias/{slug}", "WebController@news_single");
$route->get("/sobre", "WebController@about");
$route->get("/contato", "WebController@contact");
$route->post("/contato", "WebController@contact");


/**
 * ERROR ROUTES [400, 404,405, 501]
 */
$route->namespace("Source\App")->group("/ops");
$route->get("/{errcode}", "ErrorController@error");

/**
 * ROUTE
 */
$route->dispatch();


/**
 * ERROR REDIRECT
 */
if ($route->error()) {
    $route->redirect("/ops/{$route->error()}");
}

ob_end_flush();
