<h1 class="mt-4"> kategori buku</h1>
<div class="row">
	<div class="col-md-12">
		<a href="?page=kategori_tambah" class="btn btn-primary">Tambah Data</a>
		<table class= "table  table-bordered" id="dataTable" width="100%" cellspacing="0">
			<tr>
				<th>No</th>
				<th>Nama Kategori</th>
				<th>Aksi</th>
			</tr>
			<?php

			$i = 1;
			$query = mysqli_query($koneksi, "SELECT * FROM kategori");
			while($data = mysqli_fetch_array($query)) :
				?>

			<tr>
				<td><?= $i++ ?></td>
				<td> <?=$data ['kategori'];?></td>
				<td>
				<a href="" class="btn btn-info">Ubah</a>
				<a class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		<?php endwhile; ?>
		</table>