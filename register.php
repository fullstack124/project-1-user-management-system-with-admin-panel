<?php
include 'includes/header.php';
session_start();
if(isset($_SESSION['id'])){
  header('location:home.php');
}
?>
<div class="d-lg-flex half">
  <div class="bg order-1 order-md-2" style="background-image: url('images/bg_1.jpg')"></div>
  <div class="contents order-2 order-md-1">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-7">
          <div class="mb-4">
            <h3>Sign Up</h3>
            <p class="mb-4">
              Lorem ipsum dolor sit amet elit. Sapiente sit aut eos
              consectetur adipisicing.
            </p>
          </div>
          <form>
            <div class="form-group first">
              <label for="username">Username</label>
              <input type="text" class="form-control" id="username" />
            </div>
            <div class="form-group first">
              <label for="username">Email</label>
              <input type="text" class="form-control" id="email" />
            </div>
            <div class="form-group last mb-3">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" />
            </div>

            <input type="button" value="Sign Up" class="btn btn-block btn-primary" id="register" />

            <span class="d-block text-center my-4 text-muted">&mdash; or &mdash;</span>

            <div class="social-login">
              <a href="#" class="facebook btn d-flex justify-content-center align-items-center">
                <span class="icon-facebook mr-3"></span> Login with Facebook
              </a>
              <a href="#" class="twitter btn d-flex justify-content-center align-items-center">
                <span class="icon-twitter mr-3"></span> Login with Twitter
              </a>
              <a href="#" class="google btn d-flex justify-content-center align-items-center">
                <span class="icon-google mr-3"></span> Login with Google
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