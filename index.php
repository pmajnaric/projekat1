<?php
include "include/app.php";

Error_reporting(E_ALL);
//dodao sam komentar - Vlado

App::setCss('main');
App::setTitle('Index');
App::template(['header','index','footer']);



?>