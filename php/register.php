<?php

include "../connection/config.php";

if(isset($_POST['username']) || isset($_POST['email']) || isset($_POST['password'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=sha1($_POST['password']);

    $sql="SELECT * FROM users WHERE email ='{$email}'";
    $run_sql=mysqli_query($conn,$sql);

    if(mysqli_num_rows($run_sql) > 0){
        echo 2;
    }else{
        $insert="INSERT INTO users (name,email,password) VALUES ('{$username}','{$email}','{$password}')";

        if(mysqli_query($conn,$insert)){
            echo 1;
        }else{
            echo 0;
        }
    }
}
