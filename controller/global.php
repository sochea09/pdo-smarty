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

    //Function to check if the request is an AJAX request
    function is_ajax() {
        return $_SERVER['REQUEST_METHOD'] === 'POST';
    }