<?php
/**
 * Created by PhpStorm.
 * User: tsc
 * Date: 1/23/16
 * Time: 4:44 PM
 */
class User extends Model
{

    function getUser(){

        $sql = "SELECT * FROM USERS";

        $stmt  = $this->RunQuery($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    function postUser($data = array()){

        $fields = [];
        $inputs = [];
        foreach($data as $key => $val){
            array_push($fields, $key);
            array_push($inputs, $val);
        }

        $sql = "INSERT INTO USERS (".implode(', ', $fields).") VALUES(?, ?, ?, ?)";

        $stmt = $this->RunQuery($sql, $inputs);

        if($stmt->rowCount() > 0)
            return true;
        else
            return false;
    }

    function postUpdateUser($data){

        $stmt = $this->UpdateQuery('USERS', $data);

        if($stmt)
            return true;
        else
            return false;
    }

    function postDeleteUser($id){
        if($id) {
            $sql = "DELETE FROM USERS WHERE usr_id=:id";
            $input = ['id' => $id];

            $stmt = $this->RunQuery($sql, $input);

            if ($stmt)
                return true;
            else
                return false;
        }
    }

    function findById($id){
        $sql = "SELECT * FROM USERS WHERE usr_id=:id";

        $input = array('id' => $id);

        $stmt = $this->RunQuery($sql, $input);

        $rowCount = $stmt->rowCount();

        if($rowCount > 0)
            return $stmt->fetch(PDO::FETCH_ASSOC);
        else
            return $rowCount;
    }

    function postLogin($email, $password){
        $sql = "SELECT * FROM USERS WHERE usr_email=? AND usr_password=?";
        $inputs = [$email, $password];

        $stmt = $this->RunQuery($sql, $inputs);

        $rowCount = $stmt->rowCount();
        if($rowCount > 0)
            return $stmt->fetch(PDO::FETCH_ASSOC);
        else
            return false;
    }

}