<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>Login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="../asset/vendor/aos/aos.css" rel="stylesheet">
    <link href="../asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../asset/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../asset/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../asset/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../asset/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../asset/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <style>
    <?php include '../asset/login.css'; ?>
  </style>
</head>

  <body>
<!-- Login Start -->
<div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-6" style="margin-left: -12px;">
            <img src="<?php echo "../Images/loginn.jpg" ?>" alt="login" width="730px" height="800px">
            </div>
            <div class="col-md-4">
                <h1 class="titleLogin mb-5 fw-bold">
                    Login
                </h1>
                <form method="POST" action="../Config/loginn.php">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?php if(isset($_COOKIE['email_cookies'])){ echo $_COOKIE['email_cookies'];};?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password" value="<?php if(isset($_COOKIE['password_cookies'])){ echo $_COOKIE['password_cookies'];};?>">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember" <?php if(isset($_COOKIE["checkbox_cookies"])) { ?> checked <?php } ?>>
                        <label class="form-check-label" for="exampleCheck1">Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-primary" name="login">Login</button>
                    <h5 class="forRegister fw-light mt-2">Anda belum punya akun? <a href="Register.php">Daftar</a></h5>
                </form>
            </div>
        </div>
    </div>
<!-- Login End -->

</html>