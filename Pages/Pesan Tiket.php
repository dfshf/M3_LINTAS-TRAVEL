<!DOCTYPE html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lintas Travel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../Asset/index.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script> 
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a href="Homepage.php">
                <img src="../Images/logo-lintas.png" width="100">
              </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
              <div class="dropdown">
            <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Login
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="Loginuser.php">Login User</a></li>
              <li><a class="dropdown-item" href="Loginpage.php">Login Admin</a></li>
            </ul>
          </div>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link" href="Homepage.php">Tentang Kami</a>
              <a class="nav-link" href="Homepage.php">Fasilitas Kendaraan</a>
              <a class="nav-link" href="Homepage.php">Jadwal Keberangkatan</a>
              <a class="nav-link" href="Pesan Tiket.php">Pesan Tiket</a>
            </div>
          </div>
        </div>
      </nav>

      <section id="reservation">
        <div class="p-5">
          <h2 class="text-center"> Pesan Tiket</h2>
        <form action="../Config/tiket.php" method="POST" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name ="email">
          </div>
          <div class="mb-3">
            <label for="name" class="form-label">Nama Lengkap</label>
            <input type="name" class="form-control" id="name" name = "name" >
          </div>
          <div class="mb-3">
            <label for="nohp" class="form-label">No. HP</label>
            <input type="nohp" class="form-control" id="nohp" name = "nohp">
          </div>
          <div class="mb-3">
            <label for="keberangkatan" class="form-label">Keberangkatan</label>
            <select class="form-select" aria-label="Default select example" name = "keberangkatan" id = "">
                <option selected>Pilih rute keberangkatan</option>
                <option value="BSD -> Bandung">BSD -> Bandung</option>
                <option value="Bandung -> BSD">Bandung -> BSD</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="keberangkatan" class="form-label">Jam Keberangkatan</label>
            <select class="form-select" aria-label="Default select example" name = "jam" type = "time" id = "" >
                <option value="06.00">06.00</option>
                <option value="09.00">09.00</option>
                <option value="11.00">11.00</option>
                <option value="15.00">15.00</option>
                <option value="17.00">17.00</option>
                <option value="19.00">19.00</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="date" class="form-label">Tanggal Keberangkatan</label>
            <input type="date" class="form-control" name = "date" value="<?php echo date('Y-m-d'); ?>" id="date">
          </div>
          <div class="mb-3">
          <label for="keberangkatan" class="form-label">Pilih Kursi</label>
            <div class = "duduk" >
                <img src="../Images/denahduduk.jpg" alt="" height = "400 px">
                <br><br>
            </div>
            <select class="form-select" aria-label="Default select example" name = "kursi" id = "" >
                <option value="Kursi 1">Kursi 1</option>
                <option value="Kursi 2">Kursi 2</option>
                <option value="Kursi 4">Kursi 4</option>
                <option value="Kursi 5">Kursi 5</option>
                <option value="Kursi 7">Kursi 7</option>
                <option value="Kursi 8">Kursi 8</option>
                <option value="Kursi 14">Kursi 14</option>
            </select>
          </div>
          <div class="mb-3 visually-hidden" >
            <label for="status pembayaran" class="form-label">Status Pembayaran (Default is Pending)</label>
            <select name = "status" id ="" class="form-select">
               <option selected value="Pending" read only >Pending</option>
            </select>
          </div>
            <br><br>
          <button type="submit" class="btn btn-primary">Pesan</button>
        </form>
        
        <br><br>
        </div>
    </section>

    <footer>
        <br> <br>
        <center>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#footer">
          Copyright 2022 Lintas Shuttle
        </button>
  
        <!-- Modal -->
        <div class="modal fade" id="footer" tabindex="-1" aria-labelledby="footerLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="footerLabel">Copyright</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
  
              <div class="modal-body">
                <p> Lintas Shuttle </p>
                <p> 2022</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        </center>
      </footer>
</body>