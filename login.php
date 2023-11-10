<?php 
session_start();
include 'database/dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0"
    />
    <title>PROGREEN WebRevamp</title>

    <link rel="shortcut icon" href="assets/img/favicon.png" />

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

    <link
      rel="stylesheet"
      href="assets/plugins/fontawesome/css/fontawesome.min.css"
    />
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css" />

    <link rel="stylesheet" href="assets/css/style.css" />
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.min.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="main-wrapper login-body">
      <div class="login-wrapper">
        <div class="container">
          <div class="d-flex justify-content-center">
            <img
              class="img-fluid mb-lg-n0"
              src="assets/img/logo_0.png"
              alt="Logo"
            />
          </div>
          <div class="loginbox">
            <div class="login-right">
              <div class="login-right-wrap">
                <h1>Welcome</h1>
                <p class="account-subtitle">Access to your portal</p>
                <form method="post">
                  <div class="form-group">
                    <label class="form-control-label">Username</label>
                    <input type="text" class="form-control" name="user" placeholder="Enter username" required />
                  </div>
                  <div class="form-group">
                    <label class="form-control-label">Password</label>
                    <div class="pass-group">
                      <input type="password" class="form-control pass-input" name="pass" required />
                      <span class="fas fa-eye toggle-password"></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-6">
                        <div class="custom-control custom-checkbox">
                          <input
                            type="checkbox"
                            class="custom-control-input"
                            id="cb1"
                          />
                          <label class="custom-control-label" for="cb1"
                            >Remember me</label
                          >
                        </div>
                      </div>
                      <div class="col-6 text-right">
                        <a class="forgot-link" href="forgot-password.php"
                          >Forgot Password ?</a
                        >
                      </div>
                    </div>
                  </div>
                  <button
                    class="btn btn-lg btn-block btn-primary"
                    type="submit"
                    name="login"
                  >
                    Login
                  </button>
                  <div class="login-or">
                    <span class="or-line"></span>
                    <span class="span-or">or</span>
                  </div>
                   
                  <div class="social-login mb-3">
                    <span>Login with</span>
                    <a href="#" class="facebook"
                      ><i class="fab fa-facebook-f"></i></a
                    ><a href="#" class="google"
                      ><i class="fab fa-google"></i
                    ></a>
                  </div>

                  <div class="text-center dont-have">
                    Don't have an account yet?
                    <a href="register.php">Register</a>
                  </div>
                </form>
                <?php
    if (isset($_POST['login'])) {
        $username = mysqli_real_escape_string($con, $_POST['user']);
        $password = mysqli_real_escape_string($con, $_POST['pass']);
        
        // Hash the password
        $password = md5($password);
    
        $admin_query = mysqli_query($con, "SELECT * FROM admin WHERE password='$password' AND username='$username'");
        $row_admin = mysqli_fetch_array($admin_query);
        $num_row_admin = mysqli_num_rows($admin_query);
    
        if ($num_row_admin > 0) {
            // If the user is an admin, redirect to admin dashboard
            $_SESSION['user_id'] = $row_admin['user_id'];
            $_SESSION['user_firstname'] = "Admin"; // Set a default name for admin
            $_SESSION['user_lastname'] = "";
            header('location: dashboard.php');
        } else {
            $employee_query = mysqli_query($con, "SELECT * FROM employee WHERE username='$username' AND password='$password'");
            $row_employee = mysqli_fetch_array($employee_query);
            $num_row_employee = mysqli_num_rows($employee_query);
    
            if ($num_row_employee > 0) {
                // If the user is an employee, redirect to employee dashboard
                $_SESSION['employee_id'] = $row_employee['employeeID'];
                $_SESSION['user_firstname'] = $row_employee['firstName']; // Store first name in the session
                $_SESSION['user_lastname'] = $row_employee['lastName']; // Store last name in the session
                $_SESSION['user_id'] = $row_employee['employeeID'];
                header("Location: employee/index-employee.php");
                exit();
            } else {
                // If neither admin nor employee, redirect back to the login page
                header("Location: login.php");
                echo "<div class='alert alert-danger' role='alert'>Wrong Password or Username</div>";

            }
        }
    }
?>


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="assets/js/jquery-3.5.1.min.js"></script>

    <script src="assets/js/popper.min.js"></script>
    

    <script src="assets/js/feather.min.js"></script>

    <script src="assets/js/script.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
