<?php

include "../../connection/config.php";

if(isset($_GET['id'])){

    $sql="DELETE FROM users WHERE id='{$_GET['id']}'";

    $run_sql=mysqli_query($conn,$sql);
    if($run_sql){
        header('location:/admin/dashboard.php');
    }else{
        header('location:/admin/dashboard.php');
    }
}
