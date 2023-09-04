<?php

$hasil = $koneksi->query("SELECT * FROM barang WHERE id_barang='$_GET[id]'");
$data = $hasil->fetch_assoc();

$hasil = $koneksi->query("SELECT * FROM satuan_barang");
while ($perdata = $hasil->fetch_assoc()) {
    $satuan[] = $perdata;
}
?>
<form action="" method="post">
    <div class="form-group">
        <label for="">Nama Barang</label>
        <input class="form-control" type="text" name="nama" id="" value="<?= $data['nama_barang']; ?>">
    </div>
    <div class="form-group">
        <label for="">Stok Barang</label>
        <input class="form-control" type="number" name="stok" id="" value="<?= $data['stok_barang']; ?>" disabled>
    </div>
    <div class="form-group">
        <label for="">Harga Barang (RP)</label>
        <input class="form-control" type="number" name="harga" id="" value="<?= $data['harga_barang']; ?>">
    </div>
    <div class="form-group">
        <label for="">Ukuran Barang</label>
        <input class="form-control" type="number" name="ukuran" id="" value="<?= $data['ukuran_barang']; ?>">
    </div>
    <div class="form-group">
        <label for="">Satuan Barang</label>
        <select name="id_satuan" id="" class="form-control">
            <option value="">Pilih satuan</option>

            <?php foreach ($satuan as $data) {
            ?>
                <option value="<?= $data["id_satuan"]; ?>">
                    <?= $data["satuan_barang"]; ?>
                </option>
            <?php } ?>
        </select>
    </div>

    <button class="btn btn-primary" name="edit">Edit</button>
</form>

<?php
if (isset($_POST["edit"])) {
    $koneksi->query("UPDATE `barang` SET `nama_barang`='$_POST[nama]',`ukuran_barang`='$_POST[ukuran]',`id_satuan_barang`='$_POST[id_satuan]',`harga_barang`='$_POST[harga]' WHERE id_barang='$_GET[id]'");

    echo '<div class="alert alert-info">Data berhasil dirubah</div>';
    echo '<meta http-equiv="refresh" content="1;url=index.php?halaman=barang">';
}

?>