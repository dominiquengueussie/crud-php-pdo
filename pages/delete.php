<?php
require 'bd.php';
require_once 'header.php';

$id = $_GET['id'];
$request = $con->prepare("DELETE FROM person WHERE id = :id");
if($request->execute([':id' => $id])){
    header('location:../index.php');
};

?>