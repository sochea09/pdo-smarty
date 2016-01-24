<?php
/**
 * Created by PhpStorm.
 * User: tsc
 * Date: 1/23/16
 * Time: 2:07 PM
 */

    function debug($arr){
        echo '<pre>';
        print_r($arr);
        echo '</pre>';
    }

    function redirectBack(){
        header('location:javascript://history.go(-1)');
    }