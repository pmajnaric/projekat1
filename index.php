<?php

error_reporting(E_ALL);
include "include/app.php";


//dodao sam komentar - Vlado
App::setCss(['main','responsive']);
App::setTitle('Index');
App::template(['header','manu','index','footer']);



?>