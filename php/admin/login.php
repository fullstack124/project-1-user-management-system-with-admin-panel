<?php

include "../../connection/config.php";
session_start();

if(isset($_POST['username'])  || isset($_POST['password'])){
    $username=$_POST['username'];
    $password=sha1($_POST['password']);

    $sql="SELECT * FROM admins WHERE username ='{$username}' AND password='{$password}'";
    $run_sql=mysqli_query($conn,$sql);

    if(mysqli_num_rows($run_sql) > 0){
        while($row=mysqli_fetch_assoc($run_sql)){
            $id=$row['id'];
            $email=$row['username'];

            $_SESSION['admin_id']=$id;
            $_SESSION['admin_email']=$email;

            echo 1;
        }
    }else{
      echo 0;
    }
}
