<?php

include "../connection/config.php";
session_start();
if(!isset($_SESSION['admin_id'])){
  header('location:/admin/index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="../fonts/icomoon/style.css" />

    <link rel="stylesheet" href="../css/owl.carousel.min.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" />

    <!-- Style -->
    <link rel="stylesheet" href="../css/style.css" />

    <title>Login #6</title>
  </head>
  <body>
        <div class="container" style="margin-top: 40px;">
          <div class="row d-flex justify-content-center">
            <div class="col-12">
                <div class="table-responsive">
                    <h3 class="my-4">Users</h3>
                    <a href="../php/admin/logout.php" class="nav-link">Logout</a>
                    <table class="table table-bordered">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Delete</th>
                        </tr>
                        <tbody>
                          <?php
                          $sql="SELECT * FROM users ORDER BY id";
                          $run_sql=mysqli_query($conn,$sql);
                          if(mysqli_num_rows($run_sql) > 0){
                            while($row=mysqli_fetch_assoc($run_sql)){
                              ?>
                                <tr>
                              <th><?php echo $row['id']?></th>
                            <th><?php echo $row['name']?></th>
                            <th><?php echo $row['email']?></th>
                            <th>
                              <a href='../php/admin/delete.php?id=<?php echo $row['id']?>' class="btn btn-success">Delete</a>
                            </th>
                            </tr>
                              <?php
                            }
                          }
                          
                          ?>
                        </tbody>
                    </table>
                </div>
            </div>
          </div>
        </div>

    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
  </body>
</html>
