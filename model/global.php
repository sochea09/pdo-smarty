<?php
/**
 * Created by PhpStorm.
 * User: tsc
 * Date: 1/23/16
 * Time: 4:06 PM
 */
abstract class Model
{
    protected function RunQuery($sql, $inputs = null)
    {
        $pdo = PDO2::getInstance();

        if (is_null($inputs)) {
            $stmt = $pdo->query($sql);
        } else {
            try {
                $stmt = $pdo->prepare($sql);

                if ($stmt) {
                    $stmt->execute($inputs);
                } else {
                    print_r('Unable to prepare the query');
                }
            } catch (PDOException $e) {
                print_r($e->getMessage());
                exit(0);
            }
        }
        return $stmt;
    }

    protected function UpdateQuery($table, $data){
        $pdo = PDO2::getInstance();

        $params = [];
        $fields = [];
        $id = [];

        foreach($data as $key => $val){
            $params[':'.$key.''] = $val;
            array_push($fields, $key.'=:'.$key);
            if($key[0])
                array_push($id, $key.'=:'.$key);
        }

        $id = array_slice($fields,0,1);
        $fields = array_slice($fields, 1);

        $sql = "UPDATE ".$table." SET ".implode(', ', $fields)." WHERE ".implode('', $id)."";

        $stmt = $pdo->prepare($sql);
        $stmt = $stmt->execute($params);

        return $stmt;
    }
}