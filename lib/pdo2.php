<?php

/**
 * //db connection class using singleton pattern
 * @author frank ty
 */

class PDO2 extends PDO {

    private static $_instance;

    //private construct – class cannot be instatiated externally.
    public function __construct( ) {

    }
    // End of PDO2::__construct() */

    /* Singleton */
    public static function getInstance() {

        if (!isset(self::$_instance)) {

            try {
                self::$_instance = new PDO(SQL_DSN, SQL_USERNAME, SQL_PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            }
            catch (Exception $e){
                echo 'Problem connecting to the database.';
                exit;
            }
        }
        return self::$_instance;
    }
    // End of PDO2::getInstance() */

    //to TRULY ensure there is only 1 instance, you'll have to disable object cloning
/*     public function __clone()
     {
         return false;
     }
     public function __wakeup()
     {
         return false;
     }
*/

}

// end of file */