<?php include("header.php"); ?>

<a href="insert.php" class="btn btn-green">Add</a>

<!-- Form Search -->
<form method="get" style="margin-bottom: 20px;">
    <input type="text" name="search" placeholder="Cari produk..." value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
    <button type="submit" class="btn btn-blue">Search</button>
</form>

<!-- Form Sort -->
<form method="get" style="margin-bottom: 20px;">
    <label for="sort">Sort:</label>
    <select name="sort" id="sort">
        <option value="">Pilih Urutan..</option>
        <option value="asc" <?php echo (isset($_GET['sort']) && $_GET['sort'] == 'asc') ? 'selected' : ''; ?>>Stok Terendah</option>
        <option value="desc" <?php echo (isset($_GET['sort']) && $_GET['sort'] == 'desc') ? 'selected' : ''; ?>>Stok Terbanyak</option>
    </select>
    <button type="submit" class="btn btn-blue">Sort</button>
</form>

<nav>
    <ul id="navigation"></ul>
</nav>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>Nama</th>
            <th>Kategori</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Ambil parameter pencarian
        $searchQuery = isset($_GET['search']) ? $_GET['search'] : '';

        // Ambil parameter sort
        $sortOrder = isset($_GET['sort']) ? $_GET['sort'] : '';

        // Query dengan pencarian
        $sql = "SELECT * FROM tb_produk";
        
        // Kondisi untuk pencarian
        if (!empty($searchQuery)) {
            $searchQuery = $koneksi->real_escape_string($searchQuery);
            $sql .= " WHERE Nama LIKE '%$searchQuery%' OR Kategori LIKE '%$searchQuery%'";
        }

        // Menambahkan urutan (sort) berdasarkan stok
        if ($sortOrder) {
            $sql .= " ORDER BY Stok " . ($sortOrder == 'asc' ? 'ASC' : 'DESC');
        }

        $results = $koneksi->query($sql);
        if ($results->num_rows > 0) {
            foreach ($results as $value) {
        ?>
            <tr>
                <td><?php echo $value["No"]; ?></td>
                <td><?php echo $value["ID"]; ?></td>
                <td><?php echo $value["Nama"]; ?></td>
                <td><?php echo $value["Kategori"]; ?></td>
                <td><?php echo $value["Stok"]; ?></td>
                <td><?php echo $value["Harga"]; ?></td>
                <td><?php echo $value["Status"]; ?></td>
                <td>
                    <a href="edit.php?No=<?php echo $value["No"]; ?>" class="btn btn-blue">Edit</a>
                    <a href="fungsi.php?delete&No=<?php echo $value["No"]; ?>" class="btn btn-red">Delete</a>
                </td>
            </tr>
        <?php
            }
        } else {
            echo "<tr><td colspan='8'>Tidak ada data ditemukan</td></tr>";
        }
        ?>
    </tbody>
</table>

<?php include("footer.php"); ?>


