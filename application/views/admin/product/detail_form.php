<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>


	<?php
		$product->price = date('d-m-Y', strtotime($product->price)); //date format
	?>

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
								<label for="name"><b>Nomor Urut Input</b></label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="name" placeholder="Nomor Dokumen" value="<?php echo $product->id ?>" disabled="disabled" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>

							
							<div class="form-group">
								<label for="diklat"><b>Genre</b></label>
								<textarea class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
								 name="diklat" placeholder="" disabled="disabled"><?php echo $product->genre ?></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('description') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name"><b>Nama Film</b></label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="jdiklat" placeholder="" value="<?php echo $product->namafilm?>" disabled="disabled" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>

						
							<div class="form-group">
								<label for="name"><b>Dokumen</b></label>
								<br>
							<td>
								<img src="<?php echo base_url('upload/product/'.$product->image) ?>" width="250" />
							</td>
							</div>
							
							
								<h6><?php echo $product->image; ?></h6>
							

                            <a href="<?php echo base_url().'index.php/admin/products/lakukan_download/'.$product->id.''; ?>" class="btn btn-lg">
                            <i class="fa fa-download"></i> Download file</a></h1>

						</form>

					</div>

				

				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->

		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
