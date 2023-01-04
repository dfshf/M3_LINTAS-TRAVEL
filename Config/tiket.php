<?php 
    include 'connector.php';
    
    $id_penumpang = rand();
    $email = $_POST['email'];
    $name = $_POST['name'];
    $number = $_POST['nohp'];
    $keberangkatan = $_POST['keberangkatan'];
    $jam = $_POST['jam'];
    $date = $_POST['date'];
    $kursi = $_POST['kursi'];
    $bayar = $_POST['status'];
    

    $db = "INSERT INTO penumpang (id_penumpang,email,nama,nomor,keberangkatan,jam,tanggal,kursi,pembayaran)
    VALUES ('$id_penumpang','$email','$name','$number','$keberangkatan','$jam','$date','$kursi','$bayar')";
    mysqli_query($conn,$db);
    
    header("location: ../Pages/Homepage.php");
 
?>