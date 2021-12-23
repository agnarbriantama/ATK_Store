<!-- Kontainer -->
<div class="container-fluid">
  <?php echo $this->session->flashdata('pesan'); ?>
<!-- decl -->
<div class="form-inline mr-auto w-100 navbar-search">
  <?php echo form_open('user_pensil/search') ?>
        <input type="text" name="keyword" class="form-control bg-light border-2 small" placeholder="Search">&emsp;
        <button type="submit" class="btn btn-success">Search</button>
        <?php echo form_close() ?> </div>
  </div>
<div class="card-deck">
  <?php 
  foreach ($pensil as $item) { ?>
    <!-- div 1 -->
    <div class="col-md-4 py-3">
      <?php
      echo form_open('belanja/add');
      echo form_hidden('id', $item->id_barang);
      echo form_hidden('qty', 1);
      echo form_hidden('price', $item->harga_barang);
      echo form_hidden('name', $item->nama_barang);
      echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
      ?>
      <!-- div 2 -->
  <div class="card">
    <img src="<?= base_url('uploads/'.$item->gambar) ?>" class="card-img-top" height="250px">
    <div class="card-body">
      <h5 class="card-title"><b><?= $item->nama_barang ?>&emsp; </b> </h5>
      <h5 class="card-text"><span class="badge badge-success"> Rp. <?= $item->harga_barang ?></span></h5>
     <button class="btn btn-success"> Beli </button>
     <a href="<?= base_url('user_pensil/detail/').$item->id_barang ?>" class="btn btn-primary"> Detail </a>
     <!-- card body -->
     </div>
     <?php echo form_close(); ?>
     <!-- div 2 -->
     </div>
     <!-- div 1 -->
  </div>
  <!-- div deck -->
  
  <?php } ?>
</div>
  <!-- kontainer -->
</div>

