<?php

error_reporting(E_ALL);
include "include/app.php";


//dodao sam komentar - Vlado
App::setCss('main');
App::setTitle('Index');
App::template(['manu','header','index','footer']);



?>