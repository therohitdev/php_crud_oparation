<?php
    include_once('crud.php');
    $obj = new crudop();
    $obj -> display();
    echo mysqli_error();
    echo "<div class='w3-center'><a href='index.html' class='w3-card-4 w3-black w3-hover-green w3-button'>Insert Data</a></div>";
?>