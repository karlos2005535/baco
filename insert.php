<?php include("header.php") ?>

<form method="POST" action="fungsi.php?insert" class='form'>
<div class="field">
    <span class="label">ID </span>
    <input name="id">
</div>    
<div class="field">
    <span class="label">nama </span>
    <input name="nama">
</div>
<div class="field">
    <span class="label">kategori </span>
    <input name="kategori">
</div>
<div class="field">
   <span class="label"> stok </span>
    <input name="stok">
</div>
<div class="field">
   <span class="label"> harga </span>
    <input name="harga">
</div>
<div class="field">
   <span class="label"> Status </span>
    <input name="status">
</div>

<button>simpan</button>

</form>
<?php include("footer.php") ?>
