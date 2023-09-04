<h2>Data Barang</h2>
<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Advanced Tables
                <a href="index.php?halaman=tambahbarang" class="btn btn-primary">Tambah Barang</a>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Barang</th>
                                <th>Stok</th>
                                <th>Ukuran</th>
                                <th>Satuan</th>
                                <th>Harga (RP)</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            
                                $hasil = $koneksi->query("SELECT * FROM barang LEFT JOIN satuan_barang ON barang.id_satuan_barang = satuan_barang.id_satuan");

                                $nomor = 1;
                                while ($data = $hasil->fetch_assoc()) {
                            ?>
                            <tr>
                                <td><?= $nomor ?></td>
                                <td><?= $data["nama_barang"] ?></td>
                                <td><?= $data["stok_barang"] ?></td>
                                <td><?= $data["ukuran_barang"] ?></td>
                                <td><?= $data["satuan_barang"] ?></td>
                                <td><?= $data["harga_barang"] ?></td>
                                <td>
                                    <a href="index.php?halaman=hapusbarang&id=<?= $data['id_barang'] ?>" class="btn btn-danger">Hapus</a>
                                    <a href="index.php?halaman=editbarang&id=<?= $data['id_barang'] ?>" class="btn btn-warning">Edit</a>
                                </td>
                            </tr>
                            <?php $nomor++; } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--End Advanced Tables -->
    </div>
</div>