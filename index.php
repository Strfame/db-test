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
        
        $DB = testDB::getInstance();                
        $DB->connect('localhost', 'root', '1111', 'dictionary');
                
        
        ?>
    </body>
</html>
