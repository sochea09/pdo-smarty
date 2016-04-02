<?php

/**
 * Created by PhpStorm.
 * User: tsc
 * Date: 3/30/16
 * Time: 10:28 PM
 */
class Role extends Model
{
    function listRoles(){

        $sql = "SELECT * FROM ROLE";

        $stmt  = $this->RunQuery($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}