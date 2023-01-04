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
        <a href="#home">
            <img src="../Images/logo-lintas.png" width="100">
          </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" href="Homepage.php">Log Out</a>
          <a class="nav-link" href="Homepage admin.php">Data Pelanggan</a>
          <a class="nav-link" href="Homepage admin.php">Info Statistik</a>
        </div>
      </div>
    </div>
  </nav>
  <?php
        include '../Config/Connector.php';
    
        $id_penumpang = $_GET['id_penumpang'];
        $db1 = mysqli_query($conn, "SELECT * FROM penumpang WHERE id_penumpang = '$id_penumpang'");
        while($db = mysqli_fetch_array($db1)){
    ?>
    
    <section>
      <form action="../Config/update.php?id_penumpang=<?php echo $db['id_penumpang']?>" method="POST" enctype="multipart/form-data">
      <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" readonly class="form-control" id="email" name ="email"
            value="<?php echo $db['email'];?>" id="email">
          </div>
          <div class="mb-3">
            <label for="name" class="form-label">Nama Lengkap</label>
            <input type="name" readonly class="form-control" id="name" name = "name" 
            value="<?php echo $db['nama'];?>" id="nama">
          </div>
          <div class="mb-3">
            <label for="nohp" class="form-label">No. HP</label>
            <input type="nohp" readonly class="form-control" id="nohp" name = "nohp"
            value="<?php echo $db['nomor'];?>" id="nomor">
          </div>
          <div class="mb-3">
            <label for="keberangkatan" class="form-label">Keberangkatan</label>
            <input type="text" readonly class="form-control" name = "keberangkatan" 
            value="<?php echo $db['keberangkatan'];?>" id="keberangkatan">
          </div>
          <div class="mb-3">
            <label for="keberangkatan" class="form-label">Jam Keberangkatan</label>
            <input type="text" readonly class="form-control" name = "jam" 
            value="<?php echo $db['jam'];?>" id="jam">
          </div>
          <div class="mb-3">
            <label for="date" class="form-label">Tanggal Keberangkatan</label>
            <input type="date" readonly class="form-control" name = "date" value="<?php echo $db['tanggal']; ?>" id="date">
          </div>
          <div class="mb-3">
          <label for="keberangkatan" class="form-label">Pilih Kursi</label>
            <input type="text" readonly class="form-control" name = "kursi" 
            value="<?php echo $db['kursi'];?>" id="kursi">
          </div>
          <div class="mb-3" >
            <label for="status pembayaran" class="form-label">Pembayaran</label>
            <select name = "status" id ="" class="form-select">
                <option selected value=""></option>
                <option  value="Lunas">Lunas</option>
                <option  value="Pending">Pending</option>
              </select>
          </div>
            <button class="btn btn-primary" type="submit">Update</button>
            <?php
              }
              ?>
        </form>
    </section>
    </body>