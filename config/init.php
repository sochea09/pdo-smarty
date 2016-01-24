<?php
date_default_timezone_set('UTC');
ini_set('session.use_trans_sid', false);

session_start();

include $_SERVER['DOCUMENT_ROOT'].'/../config/constants.php';
include LIB.'pdo2.php';

include MODEL.'global.php';

if($_SERVER['SERVER_NAME'] == '10.0.20.11'){
    $_SERVER['SERVER_NAME'] = 'pdo-smarty.dev';
}


define('SERVER_NAME', $_SERVER['SERVER_NAME']);
define('CURRENT_URL',$_SERVER["REQUEST_URI"]);

// SMARTY
require(LIB.'/vendor/smarty/libs/Smarty.class.php');
$smarty = new Smarty();

// Config Smarty
//$smarty->force_compile = true;
$smarty->setTemplateDir(VIEW);
$smarty->setCompileDir(STORAGE.'smarty/templates_c');
$smarty->setCacheDir(MVC_ROOT.'smarty/cache');
$smarty->setConfigDir(MVC_ROOT.'smarty/configs');

include CONTROLLER_ROOT.'global.php';

$smarty->assign('SERVER_NAME', SERVER_NAME);
$smarty->assign('MVC_ROOT', MVC_ROOT);


$smarty->assign('VIEW', VIEW);
$smarty->assign('VIEW_GLOBAL', VIEW_GLOBAL);
$smarty->assign('VIEW_REUSABLE', VIEW_REUSABLE);
$smarty->assign('IMG', IMG);

?>