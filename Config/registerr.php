<?php require('../config/connector.php');

$conn = mysqli_connect("localhost", "root", "", "lintastravel");

if (isset($_POST["submit"])){
    if (($_POST["password"]) == ($_POST["repass"])){
        $nama = $_POST["nama"];
        $email = $_POST["email"];
        $nohp = $_POST["nohp"];
        $password = mysqli_real_escape_string($conn, $_POST["password"]);
        $query = "INSERT userss
        VALUES
        ('', '$nama', '$email', '$password', '$nohp')
        ";
        mysqli_query($conn, $query);
        if (mysqli_affected_rows($conn) > 0) {
            $_SESSION["sukses"] = "berhasil";
            echo "
            <script>
                document.location.href = '../pages/Loginuser.php';
            </script>
            ";
        } else {
            echo "
            <script>
                gagal.style.display = 'block'
            </script>
            ";
        }
    } else {
        echo"
        <script>
                gagal.style.display = 'block'
        </script>
        ";
    }
}
?>