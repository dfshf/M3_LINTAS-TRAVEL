<?php 

    session_start();
    
    require './connector.php';
    
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    

    $data = mysqli_query($conn,"SELECT * FROM admin WHERE Email='$email' and Password ='$password'");
    
    $cek = mysqli_num_rows($data);
    
    if($cek > 0){
        $_SESSION['Email'] = $email;
        $_SESSION['status'] = "login";
        header("location: ../Pages/Homepage admin.php");
    }else{
        header("location: ../Pages/Homepage admin.php");
    }
?>