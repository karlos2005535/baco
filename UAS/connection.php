<?php
    $koneksi = mysqli_connect("localhost","root", "","warehouse");
    if(!$koneksi) {
        die("connection error".mysqli_connect_error());
    }
    ?>