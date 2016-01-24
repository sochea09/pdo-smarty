<?php
//echo  $_SERVER['HTTP_REFERER'];
//exit;
// Initialisation
include $_SERVER['DOCUMENT_ROOT'].'/../config/init.php';

if (is_file(WWW.'/maintenance.php')){

    if (getIP() == '85.170.150.245'){
        $maintenance = 'MAINTENANCE';
    }
    else{
        include WWW.'/maintenance.php';
        exit;
    }
}

// Début de la tamporisation de sortie
ob_start();

// Si un module est specifié, on regarde s'il existe
if (!empty($_GET['module'])) {
    $action = (!empty($_GET['action'])) ? $_GET['action'].'.php' : 'default.php';
    $action = str_replace('-', '_', $action);

    if (is_file(CONTROLLER.$action)) {

        include CONTROLLER.$action;

        // Sinon, on affiche la page d'accueil !
    } else {
        //old
        //header('location:/');
        //include CONTROLLERS_ROOT.'default/accueil.php';

        //header('location:/');
        //include CONTROLLERS_ROOT.'actualite/default.php';
    }

// Module non specifié ou invalide ? On affiche le module par defaut
} else {
    $_GET['module'] = 'page';
    $_GET['action'] = 'default';
    include CONTROLLER_ROOT.'page/default.php';
}

$contenu = ob_get_clean();

if (isset($maintenance))
    echo $maintenance;

echo $contenu;
