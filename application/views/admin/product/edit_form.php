<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>


<body id="page-top">



	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				
				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('admin/products/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/product/edit') ?>" method="post" enctype="multipart/form-data">

							<input type="hidden" name="id" value="<?php echo $product->product_id?>" />

							<div class="form-group">
								<label for="name"><b>Nomor Dokumen</b></label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="name" placeholder="Nomor Dokumen" value="<?php echo $product->id ?>" disabled="disabled" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>

								<div class="form-group">
									<label><b>Diklat</b><font color="red">*</font></label>
									<select  name="diklat" class="form-control">
										<option>Pilih Diklat</option>
										<option <?php if($product->diklat=='Teknis'){echo "selected"; } ?> value='Teknis'>Teknis</option>
										<option <?php if($product->diklat=='Fungsional'){echo "selected"; } ?> value='Fungsional'>Fungsional</option>										
									</select>
								</div>

							<div class="form-group">
								<label for="jdiklat"><b>Jenis Diklat</b><font color="red">*</font></label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="jdiklat" placeholder="Edit Jenis Diklat" value="<?php echo $product->jdiklat ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>



							<div class="form-group">
								<label for="name"><b>Nama</b><font color="red">*</font></label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="nama" placeholder="Edit nama" value="<?php echo $product->nama ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name"><b>NIP</b><font color="red">*</font></label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="nip" placeholder="Edit NIP" value="<?php echo $product->nip ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>


							<div class="form-group">
								<label for="name"><b>Tempat Lahir</b><font color="red">*</font></label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="tempat" placeholder="Edit tempat lahir " value="<?php echo $product->tempat ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
							</div>


							<div class="form-group">
								<label for="price"><b>Tanggal Lahir</b><font color="red">*</font></label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="date" name="price"  placeholder="Edit tanggal lahir" value="<?php echo $product->price ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>


							<div class="form-group">
									<label><b>Pangkat / Golongan</b><font color="red">*</font></label>
									<select  name="gol" class="form-control">
										<option>Pilih Pangkat / Golongan</option>
										<option <?php if($product->gol=='Juru Muda (I/a)'){echo "selected"; } ?> value='Juru Muda (I/a)'>Juru Muda (I/a)</option>
										<option <?php if($product->gol=='Juru Muda Tingkat I (I/b)'){echo "selected"; } ?> value='Juru Muda Tingkat I (I/b)'>Juru Muda Tingkat I (I/b)</option>
										<option <?php if($product->gol=='Juru (I/c)'){echo "selected"; } ?> value='Juru (I/c)'>Juru (I/c)</option>
										<option <?php if($product->gol=='Juru Tingkat I(I/d)'){echo "selected"; } ?> value='Juru Tingkat I(I/d)'>Juru Tingkat I(I/d)</option>

										<option <?php if($product->gol=='Pengatur Muda (II/a)"'){echo "selected"; } ?> value='Pengatur Muda (II/a)"'>Pengatur Muda (II/a)"</option>
										<option <?php if($product->gol=='Juru Muda Tingkat I (II/b)'){echo "selected"; } ?> value='Juru Muda Tingkat I (II/b)'>Juru Muda Tingkat I (II/b)</option>
										<option <?php if($product->gol=='Pengatur (II/c)'){echo "selected"; } ?> value='Pengatur (II/c)'>Pengatur (II/c)</option>
										<option <?php if($product->gol=='Pengatur Tingkat I(II/d)'){echo "selected"; } ?> value='Pengatur Tingkat I(II/d)'>Pengatur Tingkat I(II/d)</option>

										<option <?php if($product->gol=='Penata Muda (III/a)'){echo "selected"; } ?> value='Penata Muda (III/a)'>Penata Muda (III/a)</option>
										<option <?php if($product->gol=='Penata Muda Tingkat I (III/b)'){echo "selected"; } ?> value='Penata Muda Tingkat I (III/b)'>Juru Muda Tingkat I (II/b)</option>
										<option <?php if($product->gol=='Penata (III/c)'){echo "selected"; } ?> value='Penata (III/c)'>Penata (III/c)</option>
										<option <?php if($product->gol=='Penata Tingkat I(III/d)'){echo "selected"; } ?> value='Penata Tingkat I(III/d)'>Penata Tingkat I(III/d)</option>


										<option <?php if($product->gol=='Pembina (IV/a)'){echo "selected"; } ?> value='Pembina (IV/a)'>Pembina (IV/a)</option>
										<option <?php if($product->gol=='Pembina Tingkat I (IV/b)'){echo "selected"; } ?> value='Pembina Tingkat I (IV/b)'>Pembina Tingkat I (IV/b)</option>
										<option <?php if($product->gol=='Pembina Utama Muda (IV/c)'){echo "selected"; } ?> value='Pembina Utama Muda (IV/c)'>Pembina Utama Muda (IV/c)</option>
										<option <?php if($product->gol=='Pembina Utama Madya (IV/d)'){echo "selected"; } ?> value='Pembina Utama Madya (IV/d)'>Pembina Utama Madya (IV/d)</option>
										<option <?php if($product->gol=='Pembina Utama (IV/e)'){echo "selected"; } ?> value='Pembina Utama (IV/e)'>Pembina Utama (IV/e)</option>
									</select>
								</div>

							<div class="form-group">
								<label for="name"><b>Jabatan</b><font color="red">*</font></label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="jabatan" placeholder="Edit jabatan" value="<?php echo $product->jabatan ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name"><b>Instansi</b><font color="red">*</font></label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="instansi" placeholder="Edit instansi" value="<?php echo $product->instansi ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name"><b>Alamat</b><font color="red">*</font></label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="alamat" placeholder="Edit alamat" value="<?php echo $product->alamat ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name"><b>Nomor Telpon / Rumah</b><font color="red">*</font></label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="hp" placeholder="Edit Nomor Telpon / Rumah" value="<?php echo $product->hp ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>

							<div class="form-group">
									<label><b>Bank</b><font color="red">*</font></label>
									<select  name="bank" class="form-control">
										<option>Pilih Nama Bank</option>
										<option <?php if($product->bank=='Bank Mandiri'){echo "selected"; } ?> value='Bank Mandiri'>Bank Mandiri</option>
										<option <?php if($product->bank=='Bank Negara Indonesia (BNI)'){echo "selected"; } ?> value='Bank Negara Indonesia (BNI)'>Bank Negara Indonesia (BNI)</option>
										<option <?php if($product->bank=='Bank Rakyat Indonesia (BRI)'){echo "selected"; } ?> value='Bank Rakyat Indonesia (BRI)'>Bank Rakyat Indonesia (BRI)</option>
										<option <?php if($product->bank=='Bank Tabungan Negara (BTN)'){echo "selected"; } ?> value='Bank Tabungan Negara (BTN)'>Bank Tabungan Negara (BTN)</option>
										<option <?php if($product->bank=='Bank Rakyat Indonesia Agroniaga'){echo "selected"; } ?> value='Bank Rakyat Indonesia Agroniaga'>Bank Rakyat Indonesia Agroniaga</option>
										<option <?php if($product->bank=='Bank Pembangunan Daerah Daerah Istimewa Yogyakarta (BPD DIY)'){echo"selected"; } ?> value='Bank Pembangunan Daerah Daerah Istimewa Yogyakarta (BPD DIY)'>Bank Pembangunan Daerah Daerah Istimewa Yogyakarta (BPD DIY)</option>
									</select>
								</div>

							<div class="form-group">
								<label for="name"><b>Nomor Rekening</b><font color="red">*</font></label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="rekening" placeholder="Edit nomor rekening" value="<?php echo $product->rekening ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>


							<div class="form-group">
								<label for="name"><b>Dokumen</b></label>
								<input class="form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>"
								 type="file" name="image" />
								<input type="hidden" name="old_image" value="<?php echo $product->image ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('image') ?>
								</div>
							</div>


							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				

			</div>
			<!-- /.content-wrapper --><?php $this->load->view("admin/_partials/footer.php") ?>

		</div>
		<!-- /#wrapper -->

		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>


		<!-- jquery -->
		<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>
		<!-- ajax -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		
		<script type="text/javascript">
			$(document).ready(function(){

  			let select_bidang = $('#select_bidang')
  			let select_seksi = $('#select_seksi')
  			select_bidang.on('change',function(){
  				
  				let num = select_bidang.find(":selected").text().substr(0,1).toLowerCase()
  				$("#select_seksi > option").each(function() {
  					if(this.text.includes(num) && num != 'p'){

   					 $(this).css('display','block')

  					}else{

  						$(this).css('display','none') 
  					}
				});
  			})

});

		</script>

</body>

</html>
