<!DOCTYPE html>
<html lang="en">



<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

</style>
<body id="page-top">

<?php
$price = 'Day: %d Month: %m Year: %Y ';
?>

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				
			
				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo base_url('index.php/admin/products/export_excel') ?>" class="btn btn-success btn-md">Export ke Excel</a>
					<br>
						
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Nomor</th>
										<th>Genre</th>
										<th>Judul Film</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
								
									<?php foreach ($products as $product): ?>
									<tr>
										<td width="150">
											<?php echo $product->id ?>
										</td>
										<td width="150">
											<?php echo $product->genre ?>
										</td>
										<td width="150">
											<?php echo $product->namafilm ?>
										</td>
								
										<td width="300">
										<a href="<?php echo site_url('admin/products/detail/'.$product->product_id) ?>"
										class="btn btn-small text-success"> <i class="fa fa-info"></i><font color=green> Detail</color></a>
											<a href="<?php echo site_url('admin/products/edit/'.$product->product_id) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('admin/products/delete/'.$product->product_id) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
											 <a href="<?php echo base_url('index.php/admin/products/export_excel2/'.$product->product_id) ?>"
										class="btn btn-small text-success"> <i class="fa fa-download"></i><font color=green> Download Data</color></a>

										</td>
									</tr>
									
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
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
	<?php $this->load->view("admin/_partials/modal.php") ?>

    <?php $this->load->view("admin/_partials/js.php") ?>
    
    <script>
function deleteConfirm(url){
	$('#btn-delete').attr('href', url);
	$('#deleteModal').modal();
}
</script>


</body>

</html>
