<?php
session_start();
if(isset($_SESSION['admin_id'])){
  header('location:/admin/dashboard.php');
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
    <div class="d-lg-flex half">
      <div class="contents order-2 order-md-1">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7">
              <div class="mb-4">
                <h3>Sign In</h3>
                <p class="mb-4">
                  Lorem ipsum dolor sit amet elit. Sapiente sit aut eos
                  consectetur adipisicing.
                </p>
              </div>
              <form action="#" method="post">
                <div class="form-group first">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" id="username" />
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" />
                </div>

                

                <input
                  type="submit"
                  value="Log In"
                  id="admin_login"
                  class="btn btn-block btn-primary"
                />

              </form>
            </div>
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
