 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <div class="col-12">
                <img src="<?php echo base_url('uploads/' . $item->gambar) ?>" width="500px" height="400px" class="product-image" alt="Product Image">
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="my-3"><?= $item->nama_barang ?></h3>
              <p><?= $item->deskripsi_barang ?></p>

              <hr>
              <?php 
                    echo form_open('belanja/add');
                    echo form_hidden('id', $item->id_barang);
                    echo form_hidden('price', $item->harga_barang);
                    echo form_hidden('name', $item->nama_barang);
                    echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
               ?>
              <div class="bg-gray text-dark py-2 px-3 mt-4">
                <h2 class="mb-0">
                  Rp. <?= number_format($item->harga_barang)?>
                </h2>
               <div class="mt-4">
                <div class="row">
                   <div class="col-sm-2">
                    <input type="number" class="form-control" name="qty" value="1" min="1" >
                   </div>
                  <div class="col-sm-8">
                     <button type="submit" class="btn btn-primary btn-lg btn-flat">
                  <i class="fas fa-cart-plus fa-lg mr-2"></i>
                  Add to Cart
                </button> 
                  </div>
                </div>
                <?php echo form_close(); ?>
              <!-- -->
            </div>
          </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>