<div class="container">
	<h1 class="text-center"> Masukkan Kategori </h1>


	<form method="post"  action="<?= base_url('kategori/add_kategori') ?>" enctype="multipart/form-data" autocomplete="off">

		<div class="form-group">
			<label>Nama Kategori</label>
			<input type="text" name="nama_kategori" class="form-control" placeholder="Masukkan Nama Kategori">
		</div>

			<button type="submit" class="btn btn-primary">Submit </button>
		
	</form>
</div>
