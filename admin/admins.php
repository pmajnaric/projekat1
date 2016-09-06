<?php


error_reporting(E_ALL);
require_once "../include/app.php";

$admins = App::DB()->select("*","admin_users","");
App::addTplVar('admins', $admins);

App::setTitle('Admins');
App::setCss(['main']);
App::template(['header', 'menu', 'admins', 'msg']);


?>