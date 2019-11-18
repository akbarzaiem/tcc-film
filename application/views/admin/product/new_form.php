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

				<div class="card mb-3">
					<div class="card-header">
						<center><h5><b>PENAMBAHAN DAFTAR PENGAJAR DIKLAT BIDANG TEKNIS DAN FUNGSIONAL</b><h5></center>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/product/add') ?>" method="post" enctype="multipart/form-data" >



						<div class="form-group">
									<label><b>Genre</b><font color="red">*</font></label>
									<select id="select_gol" name="genre" class="form-control" required >
										<option>Pilih Genre</option>
										<option name="genre" value="Action">Action</option>
										<option name="genre" value="Comedy">Comedy</option>
										<option name="genre" value="Horror">Horror</option>
										<option name="genre" value="War">War</option>
									</select>
								</div>


							<div class="form-group">
								<label for="name"><b>Judul Film</b><font color="red">*</font></label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="namafilm" placeholder="Tulis Judul Film " required  />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name"><b>Nama Director</b><font color="red">*</font></label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="nama" placeholder="Tulis nama " required  />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>

							
					
							<div class="form-group">
								<label for="price"><b>Tanggal Rilis</b><font color="red">*</font></label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="date" name="price" data-date placeholder="Tulis tanggal lahir" id="price" />
								 
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>


							<div class="form-group">
									<label><b>Negara</b><font color="red">*</font></label>
									<select id="select_gol" name="gol" class="form-control" required >
										<option>Pilih Negara</option>
										<option name="gol" value="Amerika">Amerika</option>
										<option name="gol" value="Indonesia">Indonesia</option>
										<option name="gol" value="Thailand">Thailand</option>
										<option name="gol" value="Eropa">Eropa</option>
									</select>
								</div>

							<div class="form-group">
								<label for="name"><b>Unggah Dokumen</b><font color="red">*</font></label>
								<input class="form-control-file <?php echo form_error('price') ? 'is-invalid':'' ?>"
								 type="file" name="image" />
								<div class="invalid-feedback">
									<?php echo form_error('image') ?>
								</div>
								<font color=green size=3>Berformat : jpg / png / pdf / docx / xlsx
								</color></font>
							</div>

						

			

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						<font color="red">* required fields</font>
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
		<script type="text/javascript">

		 $("input").on("change", function() {
   			 this.setAttribute(
     	   "data-date",
        	moment(this.value, "YYYY-MM-DD")
        	.format( this.getAttribute("data-date-format") )
    		)
		}).trigger("change")
			$('select[name="id_kabupaten"]').on('change', function(){
				$.ajax({
					type : 'POST', 
					url  : '<?php echo site_url('main/kota'); ?>', 
					data : {
						id_kabupaten : $(this).val()
					}, 
					success : function(option){
						$('select[name="kota"]').html(option); 
					}
				}); 
			});
		</script>



</body>

</html>