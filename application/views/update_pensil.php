<div class="container">
    <h1 class="text-center"> Edit Data Pensil </h1>
    <form method="post" action="<?= base_url('pensil/edit_data/' . $item->id_barang) ?>" enctype="multipart/form-data" autocomplete="off">

        <div class="form-group">
            <label>Nama Barang</label>
            <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang" value="<?= $item->nama_barang ?>">
        </div>


        <div class="form-group">
            <label>Deskripsi Barang</label>
            <textarea id="deskripsi" name="deskripsi_barang"><?= $item->deskripsi_barang ?></textarea><br>
            <script src="<?php echo base_url(); ?>assets/plugins/ckeditor/ckeditor.js"></script>
            <script>
                CKEDITOR.replace('deskripsi');
            </script>

            <div class="form-group">
                <label>Harga Barang</label>
                <input type="number" name="harga_barang" class="form-control" placeholder="Harga Barang" value="<?= $item->harga_barang ?>">
            </div>

            <div class="form-group">
                <?php
                if ($item->gambar == '') { ?>
                    <label>Belum Ada Gambar</label><br>
                <?php } else { ?>
                    <img src="<?php echo base_url('uploads/' . $item->gambar) ?>" width="80px"><br>
                <?php } ?>
                <label>Foto</label>
                <input type="file" name="gambar" class="form-control">

            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </div>



    </form>
</div>