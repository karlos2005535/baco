
<body>

  <main>
    <form id="payment-form">
      <!-- Input Nominal Pembayaran -->
      <div class="field">
        <label for="nominal">Nominal Pembayaran:</label>
        <input type="number" id="nominal" placeholder="Masukkan nominal pembayaran" required>
      </div>

      <!-- Input Tanggal dan Waktu Pembayaran -->
      <div class="field">
        <label for="datetime">Tanggal dan Waktu Pembayaran:</label>
        <input type="datetime-local" id="datetime" required>
      </div>

      <!-- Pilihan Transaksi -->
      <div class="field">
        <label for="transaction-type">Pilih Metode Transaksi:</label>
        <select id="transaction-type" required>
          <option value="" disabled selected>Pilih metode</option>
          <option value="QRIS">QRIS</option>
          <option value="Bank Transfer">Bank Transfer</option>
          <option value="Kartu Kredit">Kartu Kredit</option>
          <option value="E-Wallet">E-Wallet</option>
        </select>
      </div>

      <!-- Tombol Kirim -->
      <button type="button" id="submit-payment">Proses Pembayaran</button>
    </form>

    <!-- Hasil Input -->
    <div id="payment-output" class="output"></div>
  </main>

  <script src="js/payment.js"></script>
</body>
</html>
<style>
/* Reset Styles */
body {
  margin: 0;
  padding: 0;
  font-family: Arial, sans-serif;
  background-color: #f4f4f4;
  color: #333;
}

main {
  max-width: 600px;
  margin: 20px auto;
  background: white;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.field {
  margin-bottom: 15px;
}

.field label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
}

.field input,
.field select {
  width: 100%;
  padding: 10px;
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

button {
  width: 100%;
  background-color: #28a745;
  color: white;
  border: none;
  padding: 10px;
  font-size: 18px;
  border-radius: 4px;
  cursor: pointer;
  border-radius: 5px; 
}

button:hover {
  background-color: #218838;
}

.output {
  margin-top: 20px;
  padding: 15px;
  background: #e9ecef;
  border-radius: 4px;
  display: none;
  font-size: 16px;
  color: #333;
}
</style>

<script>
    // Ambil elemen yang diperlukan
const nominalInput = document.getElementById('nominal');
const datetimeInput = document.getElementById('datetime');
const transactionTypeSelect = document.getElementById('transaction-type');
const submitButton = document.getElementById('submit-payment');
const outputDiv = document.getElementById('payment-output');

// Fungsi untuk memproses pembayaran
submitButton.addEventListener('click', function () {
  // Validasi input
  const nominal = nominalInput.value;
  const datetime = datetimeInput.value;
  const transactionType = transactionTypeSelect.value;

  if (!nominal || !datetime || !transactionType) {
    alert('Harap mengisi semua data sebelum melanjutkan!');
    return;
  }

  // Tampilkan hasil pembayaran
  outputDiv.style.display = 'block';
  outputDiv.innerHTML = `
    <h3>Detail Pembayaran</h3>
    <p><strong>Nominal:</strong> Rp ${parseInt(nominal).toLocaleString()}</p>
    <p><strong>Tanggal dan Waktu:</strong> ${new Date(datetime).toLocaleString()}</p>
    <p><strong>Metode Transaksi:</strong> ${transactionType}</p>
  `;
});

</script>