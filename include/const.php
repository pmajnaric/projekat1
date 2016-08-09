<?php
$host_name = gethostname();
if ($host_name == 'vlado-Inspiron-N5110')
{
    define('DB_NAME', 'projekat1');
    define('DB_HOST','localhost');
    define('DB_USERNAME','root');
    define('DB_PASSWORD','46f8463e9903fdb04d5c1c11f96ae278');
    define('DB_TABLENAME','users_admin');
}
else
{
    define('DB_NAME', 'projekat1');
    define('DB_HOST','localhost');
    define('DB_USERNAME','root');
    define('DB_PASSWORD','');
    define('DB_TABLENAME','users_admin');
}



?>
