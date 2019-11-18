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
                        <center><h5><b>DATA DAFTAR PERTELAAHAN ARSIP (DPA) PER SEKSI</b><h5></center>
                    </div>
 
    <?php
        foreach($products as $product){
            $seksi[] = $product->seksi;
            $id_seksi[] = (float) $product->id_seksi;
        }
    ?>
</head>
<?php

      
        $tanggal= mktime(date("m"),date("d"),date("Y"));
        echo "Tanggal : <b>".date("d-M-Y", $tanggal)."</b> ";
        date_default_timezone_set('Asia/Jakarta');
        $jam=date("H:i:s");
        echo "Pukul : <b>". $jam." "."</b>";
?> 
 <br>
 <br>
 
    <canvas id="canvas" width="1000" height="280"></canvas>
 <br>
    <!--Load chart js-->
    <script type="text/javascript" src="<?php echo base_url().'assets/chartjs/chart.min.js'?>"></script>
    <script>
       
            var lineChartData = {
                labels : <?php echo json_encode($seksi);?>,
                datasets : [
                     
                    {
                        fillColor: "rgba(60,141,188,0.9)",
                        strokeColor: "rgba(60,141,188,0.8)",
                        pointColor: "#3b8bba",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(152,235,239,1)",
                        data : <?php echo json_encode($id_seksi);?>
                        
                    }
                    
 
                ]
                 
            }


        var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);
            options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
        
    </script>
    <font color=red size=3>Angka setelah koma tidak dipakai / tidak dibaca (PADA GRAFIK DIATAS)<color></font>
</body>
<br><br>
<table border="1" cellpadding="10">
   <tr>
        <td><center><b>Seksi</b></center></td>
        <td><center><b>Jumlah</b></center></td>
    </tr>


    <tr>
        <td><?php echo json_encode($seksi);?> </td>
        <td><?php echo json_encode($id_seksi);?> </td>
    </tr>
</table>
<?php $this->load->view("admin/_partials/scrolltop.php") ?>
    <?php $this->load->view("admin/_partials/modal.php") ?>

    <?php $this->load->view("admin/_partials/js.php") ?>
    
    <script>
function deleteConfirm(url){
    $('#btn-delete').attr('href', url);
    $('#deleteModal').modal();
}

</html>