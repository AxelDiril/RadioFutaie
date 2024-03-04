<?php
    define('DNS', 'mysql:host=localhost;port=3306;dbname=metallica');
    define('LOGIN', 'metallica');
    define ('PASSWORD', 'uToh5aish7ch');
    $options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
                     PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,
                     PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8");
?>
