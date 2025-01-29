<?php
if (isset($_GET["insert"])) {
    insert();
} else if (isset($_GET["update"])) {
    update();
} else if (isset($_GET["delete"])) {
    delete();
}

function insert() {
    require("connection.php");

    // Persiapkan query dengan placeholder untuk menghindari SQL injection
    $stmt = $koneksi->prepare("INSERT INTO tb_produk (id, nama, kategori, stok, harga, status) VALUES (?, ?, ?, ?, ?, ?)");

    // Bind parameter
    $stmt->bind_param("sssiis", $_POST['id'], $_POST['nama'], $_POST['kategori'], $_POST['stok'], $_POST['harga'], $_POST['status']);

    // Eksekusi query
    if ($stmt->execute()) {
        echo "Insert berhasil";
    } else {
        echo "Insert gagal: " . $stmt->error;
    }

    // Tutup statement dan redirect
    $stmt->close();
    header("location: index.php");
}

function update() {
    require("connection.php");

    // Persiapkan query untuk update
    $stmt = $koneksi->prepare("UPDATE tb_produk SET nama = ?, kategori = ?, stok = ?, harga = ?, status = ? WHERE id = ?");

    // Bind parameter
    $stmt->bind_param("ssiiss", $_POST['nama'], $_POST['kategori'], $_POST['stok'], $_POST['harga'], $_POST['status'], $_POST['id']);

    // Eksekusi query
    if ($stmt->execute()) {
        echo "Update berhasil";
    } else {
        echo "Update gagal: " . $stmt->error;
    }

    // Tutup statement dan redirect
    $stmt->close();
    header("location: index.php");
}

function delete() {
    require("connection.php");

    // Persiapkan query untuk delete
    $stmt = $koneksi->prepare("DELETE FROM tb_produk WHERE No = ?");

    // Bind parameter
    $stmt->bind_param("i", $_GET['No']);

    // Eksekusi query
    if ($stmt->execute()) {
        echo "Delete berhasil";
    } else {
        echo "Delete gagal: " . $stmt->error;
    }

    // Tutup statement dan redirect
    $stmt->close();
    header("location: index.php");
}
?>
