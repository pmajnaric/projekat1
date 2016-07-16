<?php

error_reporting(E_ALL);
include "include/app.php";


//dodao sam komentar - Vlado
App::setCss('bootstrap','font-awesome.min','style');
App::setTitle('Index');
App::template(['header','index','footer']);



?>