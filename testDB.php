<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of testDB
 *
 * @author stefan
 */
class testDB {
    private static $instance = NULL;
    
    static function getInstance() {
        if (self::$instance === NULL) {
            self::$instance = new testDB();
        }
        return self::$instance;        
    }
    
    private function __construct() {
        
    }

    public function connect($host, $user, $password, $database) {   
       $mysqlCon = mysqli_connect($host, $user, $password, $database);
        if($mysqlCon) {
            var_dump(self::$instance);
        } else {
            echo 'Connected Failed.';
        }
    }  
}
