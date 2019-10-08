<?php
    /*This file for database and logics */
    echo "<link rel='stylesheet' href='https://w3schools.com/w3css/4/w3.css'/>";

    define('host','localhost');
    define('user','pmauser');
    define('pwd','Rohit1998@');
    define('db','learn');


    class crudop{
        function __construct(){
            $this ->  conn = new mysqli(host,user,pwd,db);
            if(!$this->conn){
                die("Error in databse : ->". mysqli_connect_error());
            }
        }

        function insert($name1,$address){
                $sql = "INSERT INTO student VALUES(NULL,'$name1','$address')";
                $insert = $this->conn->query($sql);
                if($insert){
                    echo"<script>alert('data inserted');</script>";
                    header('location:index.html');
                }
        }

        function display(){
            $sql = "SELECT * FROM student";
            $data = $this->conn->query($sql);
            $showdata .= "<table class='w3-table-all w3-hoverable w3-center w3-card-4 w3-margin'>
            <tr>
                <th>Id</th><th>Name</th><th>Address</th><th>Edit</th><th>Delete</th>
            </tr>";
            while($row = mysqli_fetch_assoc($data)){
                $id = $row['id'];
                $nm = $row['name'];
                $ad = $row['address'];
                $showdata .= "<tr>
                <td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['address']."</td>".
                "<td><a href='edit.php?id=$id&nm=$nm&ad=$ad' class='w3-btn w3-hover-red w3-black'>Edit</a></td>". 
                "<td><a href='delete.php?id=$id' class='w3-btn w3-black w3-hover-red'>Delete</a></td>".
                "</tr>";
            }
            echo $showdata;
        }
        
        function delete($id){
            $sql = "DELETE FROM student WHERE id = $id";
            $data = $this->conn->query($sql);
            if($data){
                echo "<script>alert('deleted');</script>";
            }
        }

        function edit($id,$name,$address){
            $sql = "UPDATE student
                    SET
                        name = '$name',
                        address = '$address'
                    WHERE
                        id = '$id'
                    ";
            $data = $this->conn->query($sql);
            if($data){
                echo "succesful edited";
                header('location:display.php');
            }
        }
    }
?>