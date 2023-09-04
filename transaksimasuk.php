<h2>Transaksi masuk</h2>

<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Advanced Tables
                <a href="index.php?halaman=tambahtransaksimasuk" class="btn btn-primary">Tambah Transaksi Masuk</a>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Stok Masuk</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $hasil = $koneksi->query("SELECT * FROM data_transaksi LEFT JOIN barang ON data_transaksi.id_nama_barang = barang.id_barang WHERE status_transaksi = 'masuk'");

                            $nomor = 1;
                            while ($data = $hasil->fetch_assoc()) {
                            ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $data["nama_barang"] ?></td>
                                    <td><?= $data["qty_barang_transaksi"] ?></td>
                                    <td><?= $data["tanggal_transaksi"] ?></td>
                                </tr>
                            <?php $nomor++;
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--End Advanced Tables -->
    </div>
</div>