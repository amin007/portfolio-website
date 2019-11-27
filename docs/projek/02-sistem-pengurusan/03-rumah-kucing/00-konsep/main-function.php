<?php
#------------------------------------------------------------------------------------------
function diatas($tajuk = 'List Folder')
{
	?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title><?php echo $tajuk ?></title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" rel="stylesheet" type="text/css">
<style type="text/css">
table.excel {
	border-style:ridge;
	border-width:1;
	border-collapse:collapse;
	font-family:sans-serif;
	font-size:11px;
}
table.excel thead th, table.excel tbody th {
	background:#CCCCCC;
	border-style:ridge;
	border-width:1;
	text-align: center;
	vertical-align: top;
}
table.excel tbody th { text-align:center; vertical-align: top; }
table.excel tbody td { vertical-align:bottom; }
table.excel tbody td 
{ 
	padding: 0 3px; border: 1px solid #aaaaaa;
	background:#ffffff;
}
/* ============================================================================================= */
/* https://stackoverflow.com/questions/15988373/how-do-i-add-a-font-awesome-icon-to-input-field */
.carilah {
	display: inline-block;
	text-align: center;
	vertical-align: middle;
	-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;
	user-select: none;
	background-color: transparent;
	border: 1px solid transparent;
	//font-size: 1rem;
	//line-height: 1.5;
	border-radius: 0.25rem;
	transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
	/* **************************************************************************************** */
	//height: 32px;width: 32px;
	color: white;
}
input[type="submit"] {
	font-family: "Font Awesome 5 Free", "FontAwesome";
	font-size: 1.3333333333333333em;
	font-weight: 900;
}
footer {
	border-top: 1px solid;
	padding: 10px 0;
}
</style>
</head>
<body>
<?php
}
#------------------------------------------------------------------------------------------
function navbar()
{
	# warna Thistle #d8bfd8;
	?><!-- mula - nav atas sekali ---------------------------------------------------------------------------------------------- -->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#d8bfd8;">
	<a class="navbar-brand" href="#anjung">Anjung</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
	aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>
	<a class="navbar-brand" href="#keluar">
		<i class="fas fa-door-open"></i>Keluar</a>
	<!-- sempadan 1 +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
		<li class="nav-item active"><a class="nav-link" href="#"><i class="fas fa-scroll"></i>Halaman</a></li>
		<li class="nav-item"><a class="nav-link" href="#">Link</a></li>
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
			data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			Dropdown</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="#">Action</a>
				<a class="dropdown-item" href="#">Another action</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="#">Something else here</a>
			</div><!-- /  class="dropdown-menu" -->
		</li>
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
			<i class="fas fa-filter"></i>Cari</a>
			<ul class="dropdown-menu">
			<li><a class="dropdown-item" href="#cari/tentang/msic/1">Msic</a></li>
			<li><a class="dropdown-item" href="#cari/tentang/produk/1">Produk</a></li>
			<li class="dropdown-divider"></li>
			<li><a class="dropdown-item" href="#cari/tentang/johor/2">Lokaliti Johor</a></li>
			<li><a class="dropdown-item" href="#cari/tentang/malaysia/2">Lokaliti Malaysia</a></li>
			</ul>
		</li>
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
				<i class="fas fa-chart-line"></i>Laporan
			</a>
			<ul class="dropdown-menu">
			<li><a class="dropdown-item" href="#laporan/bulanan">
				<i class="fas fa-chart-pie"></i>Laporan Bulanan</a></li>
			<li class="divider"></li>
			</ul>
		</li>
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
				<i class="fas fa-question-circle"></i>Bantuan
			</a>
			<ul class="dropdown-menu">
			<li><a class="dropdown-item" href="#forum/perdana">Forum</a></li>
			<li><a class="dropdown-item" href="#mesej/utama">Email</a></li>
			</ul>
		</li>
		<li class="nav-item"><a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a></li>
		</ul>
	<!-- sempadan 2 +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
			<!-- borang cari tajuk -->
			<form class="form-inline my-2" action="#cari/tajuk" method="POST">
				<input type="submit" class="carilah bg-info" value="&#xf002;">
				<input type="text" name="cari" placeholder="Cari Tajuk" class="form-control">
			</form>
	<!-- sempadan 3 +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
	</div>
</nav><br>
<!-- tamat - nav atas sekali ---------------------------------------------------------------------------------------------- -->
<?php
}
#------------------------------------------------------------------------------------------
function notakaki()
{
	## warna Thistle #d8bfd8;
	?><footer id="footer" style="background-color:#d8bfd8;border-style:hidden;">
<!-- div class="container" -->
	<div class="row">
		<div class="col-1"></div>
		<div class="col-1"><!-- div class="col-6 col-md-6 col-lg-3 column" -->
			<h6>Information</h6>
			<ul class="list-unstyled">
			<li><a class="btn btn-info text-white" href="http://themes.guide/#freebies">Free Themes</a></li>
			<li><a class="btn btn-info text-white" href="http://themes.guide/#themes">Pro Themes</a></li>
			<li><a class="btn btn-info text-white" href="http://themes.guide/#about">Benefits</a></li>
			</ul>
		</div><!-- / class="col-6" -->
		<div class="col-6">
			<h6>Apa Itu Crownfunding?</h6>
			<p align="justify">Daripada <a target="_blank"
			class="btn btn-secondary rounded-pill"
			href="https://ms.wikipedia.org/wiki/Dana_khalayak">Wikipedia</a>.
Pendanaan khalayak, pendanaan awam atau biayasama (Bahasa Inggeris: crowdfunding) ditakrifkan sebagai suatu amalan pendanaan sebuah projek atau perusahaan melalui kutipan jumlah wang yang kecil dari sejumlah ramai orang, biasanya menggunakan medium Internet. 

Ia merupakan suatu bentuk sumber khalayak dan kewangan alternatif.

Kaedah ini telah digunakan untuk mendana pelbagai jenis keusahawanan beruntung (for-profit entrepreneurship) seperti projek-projek kesenian dan kreatif, perbelanjaan tampungan perubatan, perlancongan, mahupun projek keusahawanan sosial yang bertumpukan masyarakat.

Terdapat anggaran yang dibuat pada tahun 2015 bahawa sebanyak sekitar AS$34 bilion telah diperolehi dengan cara ini.</p>
		</div><!-- / class="col-6" -->
		<div class="col-3"><!-- / div class="col-3 col-lg-3 column text-left" -->
			<h6>Follow</h6>
			<ul class="list-unstyled">
			<li><a target="_blank" href="https://www.facebook.com/amin007.ledang" 
				class="btn btn-secondary rounded-pill">
				<i class="fab fa-facebook"></i>: amin007.ledang</a></li>
			<li><a target="_blank" href="https://www.twitter.com/amin007_ledang"
				class="btn btn-secondary rounded-pill">
				<i class="fab fa-twitter-square"></i>: amin007_ledang</a></li>
			<li><a target="_blank" href="https://www.youtube.com/user/amin007ledang"
				class="btn btn-secondary rounded-pill">
				<i class="fab fa-youtube"></i>: amin007ledang</a></li>
			<li><a target="_blank" href="https://instagram.com/aminledang"
				class="btn btn-secondary rounded-pill">
				<i class="fab fa-instagram"></i>: aminledang</a></li>
			<li><a class="btn btn-secondary rounded-pill">
				<i class="fab fa-snapchat"></i>: amin007ledang</a></li>
			</ul>
		</div><!-- / class="col-6" -->
	</div><!-- / class="row" -->
<!-- / class="container pt-3" -->
<div class="container pt-0">
	<p class="small text-right">
	Made by ThemesGuide &copy;2018. MIT License.
	<br>Ubahsuai oleh Amin Ledang &copy;2019.</p>
</div><!-- / class="container pt-5" -->
</footer> 
<?php
}
#------------------------------------------------------------------------------------------
function dibawah()
{
	?>
<!--
# masukkan js dan jquery di bawah ini 
########################################################################################### -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
<?php
}
#------------------------------------------------------------------------------------------
function semakGenap($number)
{
	# https://www.geeksforgeeks.org/php-check-number-even-odd/
	# PHP code to check whether the number
	# is Even or Odd in Normal way
	$data = null;
	if($number % 2 == 0)
	{
		//echo "Even";
		$data = 'genap';
	}
	else
	{
		//echo "Odd";
		$data = 'ganjil';
	}
	#
	return $data;
}
#------------------------------------------------------------------------------------------
