<?php
    include_once('crud.php');
    $obj = new crudop();
    $id = $_GET['id'];
    $name = $_GET['nm'];
    $address = $_GET['ad'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Php oop</title>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"/>
    </head>
    <body>
        <div class="w3-card-4">
        <form  method="POST" action="<?php $_PHP_SELF ?>">
            Name : <input type="text" class="w3-input" name="name" value="<?php echo "$name"; ?>" autofocus placeholder="Enter your address"/>
            Address: <input type="text" class="w3-input" name="address" value="<?php echo "$address"; ?>" placeholder="Enter your address"/>
            <div class="w3-center"><input class="w3-btn w3-red" type="submit" name="submit"/></div>
        </form>
    </div>
    </body>
</html>
<?php
    if(isset($_POST['submit'])){
        $nm = $_POST['name'];
        $ad = $_POST['address'];
        $obj -> edit($id,$nm,$ad);
    }
   
?>