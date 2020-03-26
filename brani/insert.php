<?php

    include 'connect.php';
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telp = $_POST['telp'];
    $saran = $_POST['saran']
    mysqli_query($conn, "INSERT INTO saran
    VALUES('','$nama','$email','$telp','saran')");

?>