<?php 
    include 'Connector.php';
    
    $id_penumpang = $_GET['id_penumpang'] ;
    $email = $_POST['email'];
    $name = $_POST['name'];
    $number = $_POST['nohp'];
    $keberangkatan = $_POST['keberangkatan'];
    $jam = $_POST['jam'];
    $date = $_POST['date'];
    $kursi = $_POST['kursi'];
    $bayar = $_POST['status'];
    

    $db = "UPDATE penumpang SET  email = '$email', nama = '$name', nomor = '$number', keberangkatan = '$keberangkatan',
    jam = '$jam', tanggal = '$date', kursi = '$kursi', pembayaran = '$bayar'
    WHERE id_penumpang = '$id_penumpang'";
    mysqli_query($conn,$db);
    
    header("location: ../Pages/Homepage admin.php");
 
?>