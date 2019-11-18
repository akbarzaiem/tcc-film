<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Arsip Digital Dinsos DIY</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body{
	font-family: sans-serif;
	background:  #90EE90;
}
 
h1{
	text-align: center;
	/*ketebalan font*/
	font-weight: 300;
}
 
.tulisan_login{
	text-align: center;
	/*membuat semua huruf menjadi kapital*/
	text-transform: uppercase;
}
 
.kotak_login{
	width: 350px;
	background: white;
	/*meletakkan form ke tengah*/
	margin: 60px auto;
	padding: 30px 20px;
}
 
label{
	font-size: 11pt;
}
 
.form_login{
	/*membuat lebar form penuh*/
	box-sizing : border-box;
	width: 100%;
	padding: 10px;
	font-size: 11pt;
	margin-bottom: 20px;
}
 
.tombol_login{
	background: #46de4b;
	color: white;
	font-size: 11pt;
	width: 100%;
	border: none;
	border-radius: 3px;
	padding: 10px 20px;
}
 
.link{
	color: #232323;
	text-decoration: none;
	font-size: 10pt;
}


	</style>
</head>
<body>

<br>

<div style="text-align: center;">
<img src="<?php echo base_url('gambar/roll.png') ?>" width="120" />

<br>

<br>
<b><font size="4" face="Garamond">Kumpulan Film Free</font></b>
<br> <br> <br>
<b><font size="5" face="Garamond"> ADMIN  </b></font>

<div class="kotak_login">
	<p class="tulisan_login"><font size="4" face="Cambria">Silahkan login</font></p>
 
	<form action="" method="post">	
		<label><font size="3" face="Cambria">Username</font></label>
		<input type="text" name="username" class="form_login" placeholder="Masukkan Username ">
 
		<label><font size="3" face="Cambria">Password</font></label>
		<input type="text" name="password" class="form_login" placeholder="Masukkan Password ">
 
		<input type="submit" class="tombol_login" name= "Login" value="Login" >
 
		<br/>
		<br/>
	</form>
	
</div>




</body>
</html>



