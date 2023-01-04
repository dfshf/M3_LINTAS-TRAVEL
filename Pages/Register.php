<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>Register</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="asset/vendor/aos/aos.css" rel="stylesheet">
    <link href="asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="asset/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="asset/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="asset/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="asset/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <style>
    <?php include 'asset/style/index.css'; ?>
  </style>
</head>

  <body>
    <!-- Login Start -->
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-6" style="margin-left: -12px;">
            <img src="<?php echo "../Images/loginn.jpg" ?>" alt="login" width="730px" height="800px">
            </div>
            <div class="col-md-4 mt-4">
                <h1 class="titleLogin mb-3 fw-bold">
                    Register
                </h1>
                <form method="POST" action="../config/registerr.php">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Name</label>
                        <input type="text" class="form-control" id="exampleInputName" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputTelpon" class="form-label">Nomor handphone</label>
                        <input type="text" class="form-control" id="exampleInputTelpon" name="nohp" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputKonfirmasi" class="form-label">Konfirmasi password</label>
                        <input type="password" class="form-control" id="exampleInputKonfirmasi" name="repass" required>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Register</button>
                    <h5 class="forRegister fw-light mt-2">Anda sudah punya akun? <a href="Loginuser.php">Login</a></h5>
                </form>
            </div>
        </div>
    </div>

</body>

</html>