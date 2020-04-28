<?php
include'db.php';   
// the 'id' inside [] can be changed for whatever, but needs to be changed  
//after the ? mark on the href of the delete button
$id = $_GET['id'];

$sql = "delete from tasks where id = '$id'";

$val = $db->query($sql);

if($val){

    header('location: index.php');
};

?>