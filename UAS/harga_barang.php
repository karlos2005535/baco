<?php include ("header.php")?>

<!-- Form untuk menambah barang -->
<div class="add-item-form">
    <h3>Biaya Penyimpanan</h3>
    <form id="item-form">
        <!-- Input ID Barang Manual -->
        <input type="text" id="id-barang" placeholder="ID Barang" required>
        <input type="text" id="nama-barang" placeholder="Nama Barang" required>
        <input type="text" id="volume-penyimpanan" placeholder="Volume Penyimpanan (m³)" required>
        
        <!-- Dropdown untuk memilih tipe barang -->
        <select id="tipe-barang" required>
            <option value="" disabled selected>Pilih Tipe Barang</option>
            <option value="Elektronik">Elektronik</option>
            <option value="Pakaian">Pakaian</option>
            <option value="Makanan">Makanan</option>
            <option value="Peralatan Rumah Tangga">Peralatan Rumah Tangga</option>
        </select>
        
        <!-- Menampilkan harga otomatis berdasarkan tipe -->
        <input type="text" id="harga-barang" placeholder="Harga" readonly required>
        
        <input type="text" id="status-barang" placeholder="Status" required>
        <button type="submit" class="btn btn-green">Cek</button>
    </form>
</div>

<nav>
    <ul id="navigation"></ul>
</nav>

<!-- Tabel untuk menampilkan barang -->
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>Nama</th>
            <th>Volume Penyimpanan (m³)</th>
            <th>Stock</th>
            <th>Harga</th>
            <th>Status</th>
            <th>Time</th>
        </tr>
    </thead>
    <tbody id="tabel-barang">
        <!-- Data barang akan ditambahkan di sini menggunakan JavaScript -->
    </tbody>
</table>

<?php include ("footer.php")?>
<style>
    
</style>

<script>
// Menentukan harga otomatis berdasarkan tipe barang
const hargaPerTipe = {
    "Elektronik": 100000,
    "Pakaian": 50000,
    "Makanan": 20000,
    "Peralatan Rumah Tangga": 75000
};

document.getElementById("tipe-barang").addEventListener("change", function() {
    const tipe = this.value;
    const hargaInput = document.getElementById("harga-barang");
    
    if (hargaPerTipe[tipe]) {
        hargaInput.value = hargaPerTipe[tipe];
    } else {
        hargaInput.value = '';
    }
});

let no = 1; // Menambahkan nomor otomatis

document.getElementById("item-form").addEventListener("submit", function(event) {
    event.preventDefault(); // Mencegah form dari submit standar

    // Ambil nilai dari input
    const idBarang = document.getElementById("id-barang").value;
    const namaBarang = document.getElementById("nama-barang").value;
    const volumePenyimpanan = document.getElementById("volume-penyimpanan").value;
    const tipeBarang = document.getElementById("tipe-barang").value;
    const hargaBarang = document.getElementById("harga-barang").value;
    const statusBarang = document.getElementById("status-barang").value;
    const currentTime = new Date().toLocaleString();
    // Buat elemen baris baru
    const tr = document.createElement("tr");

    // Buat elemen td untuk setiap data barang
    tr.innerHTML = `
        <td>${no}</td>
        <td>${idBarang}</td> <!-- ID yang dimasukkan pengguna -->
        <td>${namaBarang}</td>
        <td>${volumePenyimpanan} m³</td> <!-- Menambahkan satuan m³ -->
        <td>Stok Baru</td> <!-- Placeholder stok -->
        <td>${hargaBarang}</td>
        <td>${statusBarang}</td>
        <td>${currentTime}</td> <!-- Waktu saat item ditambahkan -->
    `;

    // Menambahkan baris ke dalam tabel
    document.getElementById("tabel-barang").appendChild(tr);

    // Tambah nomor untuk item berikutnya
    no++;

    // Kosongkan form setelah menambah
    document.getElementById("item-form").reset();
    document.getElementById("harga-barang").value = ''; // Reset harga
});
</script>
