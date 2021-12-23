<div class="container">
    <h1 class="text-center"> Masukkan Data </h1>


    <form method="post" action="<?= base_url('bolpoin/upload') ?>" enctype="multipart/form-data" autocomplete="off">

        <div class="form-group">
            <label>Nama Barang</label>
            <input type="text" name="nama_barang" class="form-control" placeholder="Masukkan Nama Barang">
        </div>


        <div class="form-group">
            <label>Deskripsi Barang</label>
            <textarea id="deskripsi" name="deskripsi_barang"></textarea><br>
            <script src="<?php echo base_url(); ?>assets/plugins/ckeditor/ckeditor.js"></script>
            <script>
                CKEDITOR.replace('deskripsi');
            </script>

            <div class="form-group">
                <label>Harga Barang</label>
                <input type="number" name="harga_barang" class="form-control" placeholder="Masukkan Harga" required="">
            </div>
            <div class="form-group">
                <label>Foto</label>
                <input type="file" name="gambar" class="form-control" required="">
            </div>


            <button type="submit" class="btn btn-primary">Submit </button>
        </div>


    </form>
</div>