<?php

session_start();
require '../funcions.php';
 if( !isset($_SESSION["login"])){
 	header("location: ../login.php");
 }elseif (!isset($_SESSION["user"])) {
 		header("location: ../admin/");
 }
 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Booking</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<style type="text/css">
		body{
			background-position: 50% 100%;
		}

		select{
			font-size: 11pt;
		}		

		h1{
			text-align: center;
			font-weight: 300;
		}
		 
		.tulisan_login{
			
			/*membuat semua huruf menjadi kapital*/
			text-transform: uppercase;
			font-style: Smoolthan;
			font-size: 13pt;
		}
		 
		.kotak_login{

			width: 350px;
			/*meletakkan form ke tengah*/
			margin: 200px auto;
			padding: 30px 20px;
			
		}
		 
		table{
			width: 100%;
		}
		ul{
			list-style-type:none;
		}
		 
		.form_login{
			border-radius: 15px;
			/*membuat lebar form penuh*/
			box-sizing : border-box;
			width: 100%;
			padding: 10px 20px;
			font-size: 11pt;
			margin-bottom: 20px;
		}

		.tulisan{
			text-align: 11pt;
		}
		 
		.tombol_login{
			border-radius: 30px;
			margin-left:  0px;
			background: #31708F;
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

	<div class="header">Welcome!</div>
	<div class= "menu">
	 	<ul>
	 		<li><a href="index.php"><img src="../css/busz.png" style="margin-top:7px;width:20px;height:20px"></a></li>
			<li><a href="booking.php">Ekonomi</a></li>
			<li><a href="#">Eksekutif</a></li>
			<li><a href="#">Royal</a></li>
			<li><a href="#">jadwal</a></li>
		</ul>
	</div>

	
	<form action="kursi.php" method="post">
		<div class="kotak_login">
		<h1>Order Tiket</h1>
		<table>
			<tr>
				<td class="tulisan_login">From</td>
				<td class="tulisan_login">To</td>
			</tr>
			<tr>
				<td><select name="asal" class="form_login">
					<option value="Gorontalo">Gororntalo</option>
					
				</select></td>
				<td><select name="tujuan" class="form_login">
					<option value="manado">Manado</option>
					
				</select></td>
			</tr>
			<tr>
				<td class="tulisan_login">Keberangkatan</td>
			</tr>
			<tr>
				<td><select name="keberangkatan" class="form_login">
					<option value="pagi">Pagi</option>
					<option value="siang">Siang</option>
				</select></td>
			</tr>
		</table>
		<button type="submit" name="cek" class="tombol_login">NEXT</button>
	</form>
	</div>
</body>
</html>