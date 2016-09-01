<?php


error_reporting(E_ALL);
require_once "../include/app.php";



$admins = DB::select('*', 'admin_users');
print_r($admins); exit;

App::setTitle('Admins');
App::setCss(['main']);
App::template(['header', 'admins', 'msg']);


?>