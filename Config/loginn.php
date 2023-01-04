<?php
$conn = mysqli_connect("localhost", "root", "", "lintastravel");

if (isset($_POST["login"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $querygetakun = "SELECT * FROM userss WHERE email = '$email'";
    $getakun = mysqli_query($conn, $querygetakun);
    $row = mysqli_fetch_assoc($getakun);
    if ( $password == $row["password"]){
        $_SESSION["newlogin"] = true;
        if (isset($_POST["remember"])){
            setcookie('id', $row["id"], strtotime('+7 days'), '/');
            header("Location: ../pages/Homepageafter.php");
            exit;
        }else{
            $_SESSION["sementara"] = $row["id"];
            header("Location: ../pages/Homepageafter.php");
            exit;
        }
    }else{
        echo"
        <script>
                gagal.style.display = 'block'
        </script>
        ";
    }
}
?>