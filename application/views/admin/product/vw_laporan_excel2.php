 <?php
 
 header("Content-type: application/vnd-ms-excel");
 
 header("Content-Disposition: attachment; filename=$title.xls");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");
 
 ?>
 
 <table border="1" width="100%">
  DAFTAR PENGAJAR DIKLAT BIDANG TEKNIS DAN FUNGSIONAL
  <br>
  <br>
 <?php

        echo "Diunduh pada : ";
        $tanggal= mktime(date("m"),date("d"),date("Y"));
        echo "Tanggal : <b>".date("d-M-Y", $tanggal)."</b> ";
        date_default_timezone_set('Asia/Jakarta');
        $jam=date("H:i:s");
        echo "Pukul : <b>". $jam." "."</b>";
?> 
<br> <br>
      <thead>
 
           <tr>
 
                    <th>Nomor</th>
                    <th>Diklat</th>
                    <th>Jenis Diklat</th>
                    <th>Nama</th>
                    <th>NIP</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Golongan</th>
                    <th>Jabatan</th>
                    <th>Instansi</th>
                    <th>Alamat</th>
                    <th>Nomor HP</th>
                    <th>Bank</th>
                    <th>Rekening</th>
           </tr>
 
      </thead>
 
      <tbody>
 
          <?php  foreach($products as $product) { ?>
 
           <tr>
 
                <td><?php echo $product->id; ?></td>
                <td><?php echo $product->diklat; ?></td>
                <td><?php echo $product->jdiklat; ?></td>
                <td><?php echo $product->nama; ?></td>
                <td><?php echo $product->nip; ?></td>
                <td><?php echo $product->tempat; ?></td>
                <td><?php echo $product->price; ?></td>
                <td><?php echo $product->gol; ?></td>
                <td><?php echo $product->jabatan; ?></td>
                <td><?php echo $product->instansi; ?></td>
                <td><?php echo $product->alamat; ?></td>
                 <td><?php echo $product->hp; ?></td>
                <td><?php echo $product->bank; ?></td>
                <td><?php echo $product->rekening; ?></td>
 
 
           </tr>
    <?php  } ?>

      </tbody>
 
 </table>


