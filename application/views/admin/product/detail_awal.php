<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

	<?php
		$product->price = date('d-m-Y', strtotime($product->price)); //date format
	?>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar2.php") ?>
	<div id="wrapper">

		

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

						<a href="<?php echo site_url('admin/products/awal') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/product/edit') ?>" method="post" enctype="multipart/form-data">

							<input type="hidden" name="id" value="<?php echo $product->product_id?>" />

							<td>
								<center><img src="<?php echo base_url('upload/product/'.$product->image) ?>" width="250" /></center>
							</td>


                           <!--  <div class="form-group">
								<label for="name"><b>Nomor<b></label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="name" placeholder="Nomor Dokumen" value="<?php echo $product->id ?>" disabled="disabled" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div> -->

							<div class="form-group">
								<label for="name"><b>Judul Film</b></label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="jdiklat" placeholder="" value="<?php echo $product->namafilm ?>" disabled="disabled" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="diklat"><b>Genre<b></label>
								<textarea class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
								 name="diklat" placeholder="" disabled="disabled"><?php echo $product->genre ?></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('description') ?>
								</div>
							</div>

							

							<div class="form-group">
								<label for="name">Nama Director</label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="jdiklat" placeholder="" value="<?php echo $product->nama ?>" disabled="disabled" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="price">Tanggal Rilis</label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>
								 type="date" name="price"  placeholder="Tanggal Dokumen" value="<?php echo $product->price ?>" disabled="disabled" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>



							<div class="form-group">
								<label for="diklat"><b>Negara<b></label>
								<textarea class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
								 name="diklat" placeholder="" disabled="disabled"><?php echo $product->gol ?></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('description') ?>
								</div>
							</div>


							<!-- <div class="form-group">
								<label for="name">Dokumen</label>
								<br>
							<td>
								<img src="<?php echo base_url('upload/product/'.$product->image) ?>" width="250" />
							</td>
							</div> -->
							
							
								
							

                           <!--  <a href="<?php echo base_url().'index.php/admin/products/lakukan_download/'.$product->id.''; ?>" class="btn btn-lg">
                            <i class="fa fa-download"></i> Download file</a></h1> -->


							<center><h3><a class="fa fa-download" href="<?=base_url()?>index.php/admin/products/download/"> DOWNLOAD
							</h3></a></center>


							
								
							<br><br>
						</form>

					</div>

				

				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
			

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->

		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
