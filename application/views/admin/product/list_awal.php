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

	<?php $this->load->view("admin/_partials/navbar2.php") ?>
	<div id="wrapper">

		

		<div id="content-wrapper">

			<div class="container-fluid">

				
			
				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
					<b><center><h3>KUMPULAN FILM</h3></center></b>
					<br>
						
						<div style="text-align: center;">
		<img src="<?php echo base_url('gambar/roll.png') ?>" width="300" />
		<br> <br>
		<!-- <p><font size="6" face="Garamond">free</font></p>
		 -->
		</div>						
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Nomor</th>
										<th>Judul Film</th>
										<th>Genre</th>
										<th>Detail</th>
									</tr>
								</thead>
								<tbody>
								
									<?php foreach ($products as $product): ?>
									<tr>
										<td width="150">
											<?php echo $product->id ?>
										</td>
										<td width="150">
											<?php echo $product->namafilm ?>
										</td>
										<td width="150">
											<?php echo $product->genre ?>
										</td>
								
										<td width="300">
										<a href="<?php echo site_url('admin/products/detail_awal/'.$product->product_id) ?>"
										class="btn btn-small text-success"> <i class="fa fa-info"></i><font color=green> Detail</color></a>
											
										
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
			

	<div class="container-fluid">

				
			
				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
					<div class="copyright text-center my-auto">
      <span><b>Copyright © Film free <?php echo " ". Date('Y') ?></b></span>
    </div>
					<br>
						
						<div style="text-align: center;">
		
		
		</div>
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
