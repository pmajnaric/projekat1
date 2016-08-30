<<<<<<< HEAD
=======
<?php

error_reporting(E_ALL);

require_once "../include/app.php";
//include "../template/msg.tpl.php"; //sta ce ovo ovde, na kraju ide template i zbog ovoga ti se pre docutype pojave poruke a to ne sme, ovo sam prebacio u template, i nemoj da vuces css i template sa front


>>>>>>> 36a2ae9fee7ebb6becfe0a6e7f9fce81777a7776



<?php
error_reporting(E_ALL);
require_once "../include/app.php";
//include "../template/msg.tpl.php"; //sta ce ovo ovde, na kraju ide template i zbog ovoga ti se pre docutype pojave poruke a to ne sme, ovo sam prebacio u template, i nemoj da vuces css i template sa front
//Dooobroo :))

$admin_users= new Admin_users();

if(!$admin_users->is_logged())
{
	header ("Location: login.php ");
	exit();
}

App::setTitle('Admin-login');
App::setCss(['main']);
App::template(['header', 'menu', 'msg']);
<<<<<<< HEAD
=======



>>>>>>> 36a2ae9fee7ebb6becfe0a6e7f9fce81777a7776


?>