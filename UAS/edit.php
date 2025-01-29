
<?php
 include("header.php");
 $select = $koneksi->query("select*from tb_produk where No={$_GET['No']}");
 $tb_produk = mysqli_fetch_assoc($select);
  ?>

<form method="POST" action="fungsi.php?update" class='form'>
<input type="hidden" name="No" $value="<?php echo $_GET['No'] ?>">

<div class="field">
    <span class="label">ID </span>
    <input name="id" value="<?php echo $tb_produk['ID'] ?>">
</div>
<div class="field">
    <span class="label">nama </span>
    <input name="nama" value="<?php echo $tb_produk['Nama'] ?>">
</div>
<div class="field">
    <span class="label"> kategori</span>
    <input name="kategori" value="<?php echo $tb_produk['Kategori'] ?>">
</div>
<div class="field">
   <span class="label"> stok </span>
    <input name="stok" value="<?php echo $tb_produk['Stok'] ?>">
</div>

<div class="field">
<span class="label"> harga </span>
<input name="harga" value="<?php echo $tb_produk['Harga'] ?>">  
</div>

<div class="field">
<span class="label"> status </span>
<input name="status" value="<?php echo $tb_produk['Status'] ?>">  
</div>

<button>Simpan</button>

</form>
<?php include("footer.php") ?>
