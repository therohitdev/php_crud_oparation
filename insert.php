<?php
    include_once('crud.php');

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $address = $_POST['address'];

        $obj = new crudop();
        $obj -> insert($name,$address);
    }
?>
