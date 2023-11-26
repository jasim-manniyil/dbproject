<?php
    $user=$_POST['user'];
    $password=$_POST['password'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];

    $conn = new mysqli('localhost','root','','mydb' );
    if($conn->connect_error)
    {
        die('Connection failed : '. $conn->connect_error);
    }
    else
    {
        $stmt = $conn->prepare("INSERT INTO user(user,password,gender,address) VALUES (?,?,?,?)"); 
        $stmt->bind_param("ssss",$user,$password,$gender,$address);
        $stmt->execute();
        header("Location: login.html");
        $stmt->close(); 

    }

?>  