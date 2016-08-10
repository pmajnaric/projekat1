<?php

error_reporting(E_ALL);

require_once "../include/app.php";
include "../template/msg.tpl.php";





$admin_users= new Admin_users();

if(!$admin_users->is_logged())
{
	header ("Location: login.php ");
	exit();
}




App::setTitle('Admin-login');
App::setCss(['main']);
App::template(['header']);





?>