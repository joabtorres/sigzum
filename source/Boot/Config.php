<?php

/**
 * DATABASE
 */
define("CONF_DB_HOST", "localhost");
define("CONF_DB_USER", "root");
define("CONF_DB_PASS", "");
define("CONF_DB_NAME", "sigzum_db");

/**
 * PROJECT URLs
 */
define("CONF_URL_BASE", "https://www.sigzum.com.br");
define("CONF_URL_TEST", "https://www.localhost/sigzum");
define("CONF_URL_ADMIN", "/admin");

/**
 * SITE
 */
define("CONF_SITE_NAME", "SIGZUM");
define("CONF_SITE_VERSION", "1.0");
define("CONF_SITE_TITLE", "Gerencie seus documentos de forma simples e fácil");
define("CONF_SITE_DESC", "A Aplicação é responsável por criar, organizar e gerenciar atividades internas da gestão da empresa, sendo necessário adicionar novos modulos de acordo com a necessidade.");
define("CONF_SITE_LANG", "pt_BR");
define("CONF_SITE_DOMAIN", "sigzum.zumtelecom.com.br");
define("CONF_SITE_ADDR_STREET", "Tv. Vítor Campos");
define("CONF_SITE_ADDR_NUMBER", "220");
define("CONF_SITE_ADDR_COMPLEMENT", "Bairro Centro");
define("CONF_SITE_ADDR_CITY", "Itaituba");
define("CONF_SITE_ADDR_STATE", "PA");
define("CONF_SITE_ADDR_ZIPCODE", "68180-070");


/**
 * SOCIAL
 */
define("CONF_SOCIAL_TWITTER_CREATOR", "");
define("CONF_SOCIAL_TWITTER_PUBLISHER", "");
define("CONF_SOCIAL_FACEBOOK_APP", "");
define("CONF_SOCIAL_FACEBOOK_PAGE", "");
define("CONF_SOCIAL_INSTAGRAM_PAGE", "");
define("CONF_SOCIAL_YOUTUBE_PAGE", "");

/**
 * DATES
 */
define("CONF_DATE_BR", "d/m/Y H:i:s");
define("CONF_DATE_APP", "Y-m-d H:i:s");

/**
 * PASSWORD
 */
define("CONF_PASSWD_MIN_LEN", 8);
define("CONF_PASSWD_MAX_LEN", 40);
define("CONF_PASSWD_ALGO", PASSWORD_DEFAULT);
define("CONF_PASSWD_OPTION", ["cost" => 10]);

/**
 * MESSAGE
 */
define("CONF_MESSAGE_CLASS", "mt-2 mb-2 alert alert-dismissible fade show");
define("CONF_MESSAGE_INFO", "bg-info");
define("CONF_MESSAGE_INFO_ICON", "<i class='fa-solid fa-circle-info'></i>");
define("CONF_MESSAGE_SUCCESS", "bg-success");
define("CONF_MESSAGE_SUCCESS_ICON", "<i class='fa-solid fa-check'></i>");
define("CONF_MESSAGE_WARNING", "bg-warning");
define("CONF_MESSAGE_WARNING_ICON", "<i class='fa-solid fa-triangle-exclamation'></i>");
define("CONF_MESSAGE_ERROR", "bg-danger");
define("CONF_MESSAGE_ERROR_ICON", "<i class='fa-solid fa-xmark'></i>");

/**
 * VIEW
 */
define("CONF_VIEW_PATH", __DIR__ . "/../../shared/views");
define("CONF_VIEW_EXT", "php");
define("CONF_VIEW_THEME", "sigzum");

/**
 * UPLOAD
 */
define("CONF_UPLOAD_DIR", "storage");
define("CONF_UPLOAD_IMAGE_DIR", "images");
define("CONF_UPLOAD_FILE_DIR", "files");
define("CONF_UPLOAD_MEDIA_DIR", "medias");

/**
 * IMAGES
 */
define("CONF_IMAGE_CACHE", CONF_UPLOAD_DIR . "/" . CONF_UPLOAD_IMAGE_DIR . "/cache");
define("CONF_IMAGE_SIZE", 2000);
define("CONF_IMAGE_QUALITY", ["jpg" => 75, "png" => 5]);

/**
 * MAIL
 */
define("CONF_MAIL_HOST", "smtp.sendgrid.net");
define("CONF_MAIL_PORT", "587");
define("CONF_MAIL_USER", "apikey");
define("CONF_MAIL_PASS", "");
define("CONF_MAIL_SENDER", ["name" => "Joab T. Alencar", "address" => "contato@joabtorres.com.br"]);
define("CONF_MAIL_SUPPORT", "contato@joabtorres.com.br");
define("CONF_MAIL_OPTION_LANG", "br");
define("CONF_MAIL_OPTION_HTML", true);
define("CONF_MAIL_OPTION_AUTH", true);
define("CONF_MAIL_OPTION_SECURE", "tls");
define("CONF_MAIL_OPTION_CHARSET", "utf-8");
