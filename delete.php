<?php
    include_once('crud.php');
    $id = $_GET['id'];
    $obj = new crudop();
    $obj -> delete($id);
    header('location:display.php');
?>