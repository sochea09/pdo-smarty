<?php
/**
 * Created by PhpStorm.
 * User: tsc
 * Date: 1/22/16
 * Time: 11:15 PM
 */
/**/ if ($_SERVER['SERVER_NAME'] == 'pdo-smarty.dev'){
/**/ 	define('SQL_DSN',      'mysql:dbname=pdo_smarty;host=localhost');
/**/ 	define('SQL_USERNAME', 'root');
/**/ 	define('SQL_PASSWORD', 'tsc');
/**/ }else{
/**/    define('SQL_DSN',      'mysql:dbname=pdo_smarty;host=localhost');
/**/ 	define('SQL_USERNAME', 'root');
/**/ 	define('SQL_PASSWORD', '');
/**/ }