<?php
include_once 'header.php';
error_reporting(0);
?>

<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">

    <!-- Row -->
    <div class="row">
        <!-- Datatables -->
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h4 class="m-0 font-weight-bold text-primary"><i class="fas fa-download"></i> Pemasukan</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Pemasukan</li>
                    </ol>
                </div>
                <div class="table-responsive p-3">
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal" id="#myBtn"><i class="fas fa-plus"></i> Tambah Pemasukan</button>
                    <!-- <a href="tambah.php" class="btn btn-primary btn-sm">tambah</a> -->
                    <p>
                    <table class="table align-items-center table-flush text-xs" id="dataTable">

                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Tgl Transaksi</th>
                                <th>Produk</th>
                                <th>Harga</th>
                                <th>Qty</th>
                                <th>Subtotal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php
                            $sql = mysqli_query($con, "SELECT * FROM tbl_pemasukan");
                            $no  = 1;
                            while ($data = mysqli_fetch_array($sql)) {
                                $subtotal = $data['stok'] * $data['harga'];
                                $total = $total + $subtotal;
                            ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $data['tgl_pemasukan']; ?></td>
                                    <td><?= $data['produk']; ?></td>
                                    <td><?= $data['harga']; ?></td>
                                    <td><?= $data['stok']; ?></td>
                                    <td><?= 'Rp. ' . number_format($subtotal, 0, ',', '.'); ?></td>
                                    <td>
                                        <button type="button" class="btn btn-primary text-xs btn-sm" data-toggle="modal" data-target="#exampleModalEdit<?= $data['id_pemasukan']; ?>"><i class="fa fa-edit"></i> Update</button>
                                        <a href="query.php?pemasukan_del=<?= $data['id_pemasukan']; ?>" type="button" class="btn btn-danger text-xs btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><i class="fa fa-trash"></i> Hapus</a>
                                    </td>
                                </tr>

                                <!-- Modal Edit Pemasukan-->
                                <div class="modal fade" id="exampleModalEdit<?= $data['id_pemasukan']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Form Update User</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="query.php" method="POST">

                                                    <?php
                                                    $id  = $data['id_pemasukan'];
                                                    $row = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM tbl_pemasukan WHERE id_pemasukan='$id'"));
                                                    ?>

                                                    <input type="hidden" name="id_pemasukan" value="<?= $row['id_pemasukan']; ?>">

                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Tgl Transaksi</label>
                                                        <div class="col-sm-9">
                                                            <input type="date" class="form-control form-control-sm" name="tgl_transaksi" required value="<?= $row['tgl_pemasukan']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Produk</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control form-control-sm" name="produk" required value="<?= $row['produk']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Harga</label>
                                                        <div class="col-sm-9">
                                                            <input type="number" class="form-control form-control-sm" name="harga" required value="<?= $row['harga']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">Stok</label>
                                                        <div class="col-sm-9">
                                                            <input type="number" class="form-control form-control-sm" name="stok" required value="<?= $row['stok']; ?>">
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label"></label>
                                                        <div class="col-sm-9">
                                                            <button type="submit" name="pemasukan_update" class="btn btn-primary btn-sm"><i class="fas fa-check"></i> Simpan</button>
                                                            <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Modal Edit Pemasukan -->
                            <?php
                            }
                            ?>
                        </tbody>
                        <tfoot>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>TOTAL</th>
                            <th><?= 'Rp. ' . number_format($total, 0, ',', '.'); ?></th>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--Row-->

    <!-- Modal Tambah Pemasukan-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Input Pemasukan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="query.php" method="POST">
                        <div class="form-group row" hidden>
                            <label class="col-sm-3 col-form-label">Id Pemasukan</label>
                            <div class="col-sm-9">
                                <input type="number" min="1" class="form-control form-control-sm" name="id_pemasukan">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tgl Transaksi</label>
                            <div class="col-sm-9">
                                <input type="date" min="1" class="form-control form-control-sm" name="tgl_pemasukan" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama Produk</label>
                            <div class="col-sm-9">
                                <input type="text" min="1" class="form-control form-control-sm" name="produk" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Harga</label>
                            <div class="col-sm-9">
                                <input type="number" min="1" class="form-control form-control-sm" name="harga" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Jumlah</label>
                            <div class="col-sm-9">
                                <input type="number" min="1" class="form-control form-control-sm" name="stok" required>
                            </div>
                        </div>

                        <hr>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                                <button type="submit" name="pemasukan_add" class="btn btn-primary btn-sm"><i class="fas fa-check"></i> Simpan</button>
                                <button type="reset" class="btn btn-success btn-sm"><i class="fa fa-sync-alt"></i> Reset</button>
                                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Tambah Pemasukan -->



</div>
<!---Container Fluid-->

<?php include_once 'footer.php'; ?>