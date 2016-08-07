<?php
error_reporting(E_ALL);

require_once "../include/app.php";
include "../template/msg.tpl.php";





$admin_users= new Admin_users();



if(isset($_GET['submit']))
{
	
	$username=!empty($_GET['username']) ? $_GET['username'] : "";
	$password=!empty($_GET['password']) ? $_GET['password'] : "";

if($admin_users->login($username, $password))
{
	header:("Location:index.php");
	exit;
}else {
	
	Msg::setErr("Neuspesno logovanje!");
	
}

}


App::setTitle('Admin');
App::setCss(['main']);
App::template(['header','login']);





?>