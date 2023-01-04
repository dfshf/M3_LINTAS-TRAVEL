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
          <a class="nav-link" href="#jadwal">Data Pelanggan</a>
          <a class="nav-link" href="#info">Info Statistik</a>
        </div>
      </div>
    </div>
  </nav>

  <section id="jadwal" style="background-color:aliceblue ;">
      <br>
      <h2 style="text-align:center"> Data Pelanggan</h2>
      <br>
      <?php
                    include '../Config/Connector.php';

                    $db = mysqli_query($conn, "SELECT * FROM penumpang");
                ?>
        <div class ="tabel">
            <table class="table table-hover table-bordered">
                <thead>
                <tr style="background-color:darkseagreen">
                    <th scope="col">ID Pelanggan</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Keberangkatan</th>
                    <th scope="col">Jam Keberangkatan</th>
                    <th scope="col">Kursi</th>
                    <th scope="col">Pembayaran</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                    
                </tr>
                </thead>
                <tbody>
                <tr>
                  <?php
                      while($select = mysqli_fetch_array($db)) {
                        echo "<tr>";
                        echo "<td>" . $select['id_penumpang'] . "</td>";
                        echo "<td>" . $select['nama'] . "</td>";
                        echo "<td>" . $select['keberangkatan'] . "</td>";
                        echo "<td>" . $select['jam'] . "</td>";
                        echo "<td>" . $select['kursi'] . "</td>";
                        echo "<td>" . $select['pembayaran'] . "</td>";
                        echo "<td> <a href='Update User.php?id_penumpang=" . $select['id_penumpang'] . "'>Update</a> </td>";
                        echo "<td> <a href='../Config/delete.php?id_penumpang=" . $select['id_penumpang'] . "'>Delete</a> </td>";
                        echo "</tr>";
                    }
                    ?>
                </tr>
                </tbody>
            </table>
        </div>
    </section>
    
    <section id="info">
        <br>
        <h3 style="text-align:center"> Info Statistik Hari Ini</h3>
        <div class="mb-3">
          <p> Banyak Pengunjung Hari Ini:</p>
          <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div class="mb-3">
          <p> Banyak Tiket Terbeli Hari ini:</p>
          <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div class="mb-3">
          <p> Banyak Tiket Terbeli Dalam Kurun 3 Hari:</p>
          <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </section>