<?php
/**
 * Created by PhpStorm.
 * User: tsc
 * Date: 4/2/16
 * Time: 9:56 AM
 */

class Post extends Model{

    function getPost(){

        $sql = "SELECT * FROM POST";

        $stmt  = $this->RunQuery($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function postPost($data = array()){
        $fields = [];
        $inputs = [];
        foreach($data as $key => $val){
            array_push($fields, $key);
            array_push($inputs, $val);
        }

        $sql = "INSERT INTO POST (".implode(', ', $fields).") VALUES(?, ?, ?, ?)";

        $stmt = $this->RunQuery($sql, $inputs);

        if($stmt->rowCount() > 0)
            return true;
        else
            return false;
    }

    function findById($id){
        $sql = "SELECT * FROM POST WHERE id=:id";

        $input = array('id' => $id);

        $stmt = $this->RunQuery($sql, $input);

        $rowCount = $stmt->rowCount();

        if($rowCount > 0)
            return $stmt->fetch(PDO::FETCH_ASSOC);
        else
            return $rowCount;
    }

    function postUpdatePost($data){

        $stmt = $this->UpdateQuery('POST', $data);

        if($stmt)
            return true;
        else
            return false;
    }

    function postDeletePost($id){
        if($id) {
            $sql = "DELETE FROM POST WHERE id=:id";
            $input = ['id' => $id];

            $stmt = $this->RunQuery($sql, $input);

            if ($stmt)
                return true;
            else
                return false;
        }
    }
}