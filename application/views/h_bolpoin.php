<!-- Begin Page Content -->
<div class="container-fluid">
    <?php echo $this->session->flashdata('message'); ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <!-- decl -->
            <form class="form-inline mr-auto w-100 navbar-search">
                <?php echo form_open('bolpoin/search') ?>
                <input type="text" name="keyword" class="form-control bg-light border-0 small" placeholder="Search">&emsp;
                <button type="submit" class="btn btn-success">Search</button>
                <?php echo form_close() ?>
        </div>
        </form>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h2 class="m-0 font-weight-bold text-primary">Data Barang</h2>
                <a href="<?php echo base_url('bolpoin/tambah'); ?>" class="btn btn-primary btn-sm float-right">Tambah Data</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" width="100%" id="dataTable" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Barang</th>
                                <th>Deskripsi Barang</th>
                                <th>Harga Barang</th>
                                <th>Foto</th>
                                <th>Action</th>

                            </tr>
                        </thead>

                        <?php
                        $no = 1;
                        foreach ($bolpoin as $item) { ?>
                            <tbody>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $item->nama_barang ?></td>
                                    <td><?= $item->deskripsi_barang ?></td>
                                    <td>Rp. <?= $item->harga_barang ?></td>
                                    <td>
                                        <img src="<?= base_url('uploads/' . $item->gambar) ?>" width="70px" height="50px">

                                    </td>
                                    <td>
                                        <a href="<?php echo base_url('bolpoin/update/' . $item->id_barang) ?>" class="btn btn-small text-warning"><i class="fas fa-edit"></i> Edit</a>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-small text-danger" data-toggle="modal" data-target="#exampleModal"> <i class="fas fa-trash"></i>
                                            Hapus
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Peringatan !</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body float-left">
                                                        <div class="float-left">
                                                            Yakin mau dihapus ?
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <a href="<?= base_url('bolpoin/delete/' . $item->id_barang) ?>" class="btn btn-danger">Hapus</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                            </tbody>
                        <?php } ?>
                    </table>

                </div>
            </div>
        </div>
                        </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->