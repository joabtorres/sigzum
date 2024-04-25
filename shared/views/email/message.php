<?php $this->layout("_theme", ["title" => "Contato via formulário " . CONF_SITE_NAME . " | " . CONF_SITE_TITLE . ""]); ?>
<h3>Você tem uma nova mensagem! </h3>
<p><b>Nome:</b> <?= $sender->name ?></p>
<p><b>E-mail:</b> <?= $sender->email ?></p>
<p><b>Telefone:</b> <?= $sender->phone ?></p>
<p><b>Mensagem:</b> </p>
<p><i><?= $sender->message ?></i></p>
<p></p>