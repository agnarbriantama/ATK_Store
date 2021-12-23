<div class="container">
	<h1 class="text-center"> Edit Kategori </h1>


	<form method="post"  action="<?= base_url('kategori/update_kategori/' . $item->id_kategori) ?>" enctype="multipart/form-data" autocomplete="off">

		<div class="form-group">
			<label>Nama Kategori</label>
			<input type="text" name="nama_kategori" class="form-control" placeholder="Masukkan Nama Kategori" value="<?= $item->nama_kategori ?>">
		</div>

			<button type="submit" class="btn btn-primary">Edit </button>
		
	</form>
</div>
