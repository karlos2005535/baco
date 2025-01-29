<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StorageSaja.id</title>
    <div id="notification" class="notification">
        <p id="notificationMessage"></p>
        <button id="closeNotification" class="close">Tutup</button>
    </div>
    
</div>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Rubik:ital,wght@0,300..900;1,300..900&family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <style>
        body{
            margin: 0;
            padding: 0;
            font-family: "Poppins", serif;
        }
          {
            font-family: Arial, sans-serif; /* Ganti dengan font yang Anda inginkan */
            background-color: #4169E1;
            text-align: center; /* Menjadikan teks di setiap card berada di tengah */
           }
        
            {
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
    }

.whatsapp-container {
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 1000;
}

.whatsapp-button {
    display: flex;
    align-items: center;
    background-color: #25d366;
    color: white;
    font-size: 16px;
    padding: 10px 20px;
    border-radius: 50px;
    text-decoration: none;
    box-shadow: 0px 4px 8px #25d366(0, 0, 0, 0.2);
}

        header{
            background-color: #17a2b8;
            text-align: center;
            padding: 5px;
            color: white;
        }
        .content{
            padding: 20px;
        }
        table{
            width: 100%;
            background-color: rgba(0,0,0,.03);
            border-top: 1px solid rgba(0,0,0,.125);
            border-left: 1px solid rgba(0,0,0,.125);
        }
        th,td{
            border-right: 1px solid rgba(0,0,0,.125);
            border-bottom: 1px solid rgba(0,0,0,.125);
            padding: 10px;
        }
        .btn{
            padding: 10px;
            border: none;
            border-radius: 5px;
            color: white;
            display: inline-block;
            margin-bottom: 10px;
            text-decoration: none;
        }
       .btn-green{
            background-color: green;
        }
        .btn-blue{
            background-color: blue;
        }
        .btn-red{
            background-color: red;
        }
        .field{
        padding: 10px;
    }
    .field .label{
        display: block;
    }
    .field input{
        padding: 10px;
        display: block;
    }
    .field select{
        padding: 10px;
        font-size: 16px;
    }
    .field textarea{
        padding: 10px;
        width: 100px;
    }
.navbar {
  display: flex;
  flex-wrap: wrap;
  justify-content: center; 
  align-items: center; 
  background-color: #f0f0f0; 
  padding: 10px;
}

.navbar a {
  color: #333;
  text-decoration: none;
  padding: 10px;
}
.container {
    display: flex;
    flex-wrap: wrap; /* Membungkus elemen agar tidak keluar layar */
    gap: 20px; /* Spasi antar elemen */
    justify-content: center; /* Pusatkan konten */
}

.card {
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  background: #ADD8E6;
  padding: 20px;
  width: 40%;
  max-width: 500px;
  transition: transform 0.5s ease, box-shadow 0.5s ease; /* Animasi smooth untuk transformasi */

}
.card:hover {
  transform: scale(1.05); /* Membesarkan card sedikit */
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Memberikan bayangan yang lebih besar */
}

.card-icon {
  font-size: 48px; 
  margin-bottom: 10px;
}

.card-title {
  font-size: 24px;
  margin-bottom: 10px;
}

.card-description {
  font-size: 16px;
}
/*untuk baggian branda*/
nav ul {
    list-style: none;
    padding: 10px;
    display: flex;

        
}

nav ul li {
    margin-right: 10px;
}

nav ul li a {
    text-decoration: none; 
    font-weight: bold; 
    justify-content: flex-start; /* Menempatkan elemen-elemen di kiri */

}

ul li a:hover {
    color: #f39c12;
    margin-right: 10px;
    padding: 0;
}

nav ul li a:hover {
    text-decoration: underline;
}

main {
    padding: 10px;
    text-align: right; 
}

/* Gaya untuk notifikasi */
.notification {
    display: none; 
    position: fixed;
    top: 10px;
    right: 20px;
    background-color: #FFFFFF;
    color: black;
    padding: 20px;
    border-radius: 30px;
    box-shadow: #000000;
    font-size: 16px;
    width: 500px;
    font-family: "Poppins", serif;
    
}
.notification {
    width: calc(50% - 50px); /* Sesuaikan ukuran dengan layar */
    max-width: 500px; /* Tetapkan lebar maksimum */
}
/* Tombol Tutup */
.close {
    background-color:rgb(54, 54, 244);
    border: none;
    color: white;
    padding: 5px 10px;
    cursor: pointer;
    border-radius: 5px;
    font-size: 14px;
}

.close:hover {
    background-color:rgb(22, 42, 228);
}
/* Gaya untuk tombol pembayaran */ 
.button {
  display: inline-block;
  padding: 10px 10px;
  font-size: 12px;
  color: white; /* Warna teks */
  background-color: #007bff; /* Warna latar belakang */
  text-decoration: none; /* Hilangkan garis bawah */
  border-radius: 5px; /* Sudut melengkung */
  border: none; /* Hilangkan border */
  cursor: pointer; /* Ubah kursor menjadi pointer */
  transition: background-color 0.3s ease; /* Animasi transisi */
}

.button:hover {
  background-color: #0056b3; /* Warna saat hover */
}

.button:active {
  background-color: #b22222; /* Warna saat tombol ditekan */
}
@media screen and (max-width: 768px) {
}
</style>


<script>
    
    // Array notifikasi dengan pesan-pesan berbeda
const notifications =
 [
    "Penawaran Spesial! Dapatkan diskon 20% untuk penyimpanan barang!",
    "Pembaruan Status: Barang Anda telah berhasil disimpan di gudang.",
    "Pengingat: Jangan lupa untuk mengecek stok barang Anda setiap minggu.",
    "Kami sedang mengerjakan sistem baru untuk efisiensi gudang. Mohon bersabar!"
];

// Ambil elemen-elemen yang dibutuhkan
let notification = document.getElementById('notification');
let notificationMessage = document.getElementById('notificationMessage');
let closeNotification = document.getElementById('closeNotification');

// Fungsi untuk menampilkan notifikasi
function showNotification(message) {
    notificationMessage.textContent = message;
    notification.style.display = 'block';  
}

// Fungsi untuk menutup notifikasi
closeNotification.addEventListener('click', function() {
    notification.style.display = 'none';
});

// Fungsi untuk memilih dan menampilkan notifikasi secara acak
function randomNotification() {
    // Pilih pesan acak dari array notifications
    const randomIndex = Math.floor(Math.random() * notifications.length);
    showNotification(notifications[randomIndex]);
}

// Menampilkan notifikasi secara acak saat halaman dimuat
window.onload = function() {
    randomNotification();  // Menampilkan notifikasi acak saat halaman dimuat
    setTimeout(function() {
        notification.style.display = 'none';  // Menyembunyikan notifikasi setelah 5 detik
    }, 5000);
};

</script>

<body>
    <?php
    require("connection.php");
    ?>
    <header><h1> Gudang kami</h1> 
    <nav>
        <ul>
        <li><a href="index.php" class="nav-link" data-page="branda">Beranda</a></li>
            <li><a href="branda.php" class="nav-link" data-page="tentang-kami">Tentang Kami</a></li>
            <li><a href="harga_barang.php" class="nav-link" data-page="biaya-penyimpanan">Biaya Penyimpanan</a></li>
        </ul>
    </nav> 
    </header> 
    <div class="content">
    
    <div class="container">
  <div class="card">
    <i class="card-icon"></i>
    <h2 class="card-title">Keunggulan Operasional</h2>
    <p class="card-description">Sistem Gudang Pintar untuk Bisnis Tanpa Batas</p>
  </div>
  <div class="card">
    <i class="card-icon"></i>
    <h2 class="card-title">Keunggulan Operasional</h2>
    <p class="card-description">Cek Stok Real-Time, Ambil Keputusan Tepat!</p>
  </div>
  <div class="card">
    <i class="card-icon"></i>
    <h2 class="card-title">Keunggulan Operasional</h2>
    <p class="card-description">Kelola Gudang dengan Efisien, Tingkatkan Produktivitas.</p>
  </div>
  </div>

    <div class="whatsapp-container">
        <a href="https://wa.me/081338130138" class="whatsapp-button" target="_blank">
        Hubungi Kami di WhatsApp
        </a>
    </div>
    <div class="content">