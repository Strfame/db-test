<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
//        phpinfo();        
        include 'testDB.php';
        
//        $DB = testDB::getInstance();                
//        $connect = $DB->connect('localhost', 'root', '1111', 'dictionary');
        
        $mysqli = new mysqli('localhost', 'root', '1111', 'dictionary');
        
            
            $group = $mysqli->query('SELECT * FROM groups');                 
            $groupArray = array();
            while( $row = $group->fetch_assoc()) {
                $groupArray[] = $row;
            }
                        
            echo json_encode($groupArray);
       
        ?>
    </body>
</html>
