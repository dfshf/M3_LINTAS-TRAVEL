<?php
    require './Connector.php';

    $id_penumpang = $_GET['id_penumpang'];

    mysqli_query($conn, "DELETE FROM penumpang WHERE id_penumpang = $id_penumpang");
    header("location: ../Pages/Homepage admin.php");
?>