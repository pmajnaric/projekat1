<?php


error_reporting(E_ALL);
require_once "../include/app.php";





App::setTitle('Admins');
App::setCss(['main']);
App::template(['header', 'admins', 'msg']);


?>