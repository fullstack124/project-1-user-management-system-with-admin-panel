<?php
include 'includes/header.php';
session_start();
if(!isset($_SESSION['id'])){
  header('location:index.php');
}
?>
<div class="d-lg-flex half">
  <div class="bg order-1 order-md-2" style="background-image: url('images/bg_1.jpg')"></div>
  <div class="contents order-2 order-md-1">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-7">
          <form action="#" method="post">
            <div class="social-login">
              <h1 class="text-center"><?php echo $_SESSION['email']?></h1>
              <a href="/php/logout.php" class="facebook btn d-flex justify-content-center align-items-center"> Logout
              </a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
include 'includes/footer.php';
?>