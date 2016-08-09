<?php
error_reporting(E_ALL);

require_once "../include/app.php";
include "../template/msg.tpl.php";





$admin_users= new Admin_users();



if(isset($_POST['submit']))
{
	
	$username=!empty($_POST['username']) ? $_POST['username'] : "";
	$password=!empty($_POST['password']) ? $_POST['password'] : "";

if($admin_users->login($username, $password))
{
	header("Location:home.php");

}else {
	
	Msg::setErr("Neuspesno logovanje!");
	
}
	
}




App::setTitle('Admin');
App::setCss(['main']);
App::template(['header','login']);





?>