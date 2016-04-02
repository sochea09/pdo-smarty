<?php
/************************************** NE PAS TOUCHER **********************************************/
/**/
/**/ include('database.php');
/**/
/**/ // Chemins à utiliser pour accéder aux vues/modeles/librairies
/**/ define('MVC_ROOT',             $_SERVER['DOCUMENT_ROOT'].'/../');
/**/ define('ROOT',                 $_SERVER['SERVER_NAME'].'/');
/**/ define('CONTROLLER_ROOT',      MVC_ROOT.'controller/');

$module = !empty($_GET['module']) ? $_GET['module'] : 'page';

/**/ define('MODEL', 			    MVC_ROOT.'model/');
/**/ define('HELPER', 			    MVC_ROOT.'helper/');
/**/ define('LAYOUT', 			    MVC_ROOT.'view/layout/');
/**/ define('VIEW',    		        MVC_ROOT.'view/'.$module.'/');
/**/ define('VIEW_GLOBAL', 	        MVC_ROOT.'view/');
/**/ define('VIEW_REUSABLE', 	    MVC_ROOT.'view/reusable/');
/**/ define('CONTROLLER',    	    MVC_ROOT.'controller/'.$module.'/');
/**/ define('CONTROLLER_GLOBAL',    MVC_ROOT.'controller/');
/**/ define('LIB',    			    MVC_ROOT.'lib/');
/**/ define('CONFIG',    		    MVC_ROOT.'config/');
/**/ define('IMG',    			    MVC_ROOT.'public/images/');
/**/ define('WWW',    			    MVC_ROOT.'public/');
/**/ define('STORAGE',    		    MVC_ROOT.'storage/');
/**/

/**/
/*********************************** FIN NE PAS TOUCHER **********************************************/