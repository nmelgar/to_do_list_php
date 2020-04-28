<?php

// creates the connection with the database
$db = new mysqli;

$db->connect('localhost', 'iClient', 'password', 'crud', '3306' ,'');

if(!$db){

    echo "success";
}

?>