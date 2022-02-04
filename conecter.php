<?php
    $conne = new mysqli('localhost', 'root', '' ,'e_classe_db');
    
    if($conne->connect_error){
        die('connection failed:' . $conne -> connect_error);
    }
?>
