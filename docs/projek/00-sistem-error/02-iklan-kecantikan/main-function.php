<?php
#--------------------------------------------------------------------------------------------------
/*
https://cdn.pixabay.com/photo/2015/08/25/03/51/toner-906142_960_720.jpg
https://cdn.pixabay.com/photo/2017/09/07/19/43/soap-2726387_960_720.jpg
https://cdn.pixabay.com/photo/2017/09/07/19/46/soap-2726394_960_720.jpg
https://images.unsplash.com/photo-1556217257-aa1d0c385e62?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80
*/
#--------------------------------------------------------------------------------------------------
function content()
{
	$data[] = 'pepsi';

	$data[] = 'sosial media posts';

	$data[] = 'Pepsi in Pakistan is very versatile when it come to sosial media posting. There are
several pillors under which they work. Most of them are engagamennd related like
music, cricket, refreashment posts. Also they are main sponser of bigger music
platform Pakistan Idol. Showcasing some of Pepsi posts.';

	return $data;
}
#--------------------------------------------------------------------------------------------------
function diatasAsal($tajuk = 'List Folder')
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
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" type="text/css">
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
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" type="text/css">
<?php
}
#------------------------------------------------------------------------------------------
function diheadbody()
{
	?>
</head>
<body>
<?php
}
#------------------------------------------------------------------------------------------
function navbar()
{
}
#------------------------------------------------------------------------------------------
function notakaki()
{
	?><footer id="footer" class="bg-info text-white">
<div class="container pt-3">
	<div class="row">
		<div class="col-6 col-md-6 col-lg-3 column">
			<h6>Information</h6>
			<ul class="list-unstyled">
			<li><a class="btn btn-info text-white" href="http://themes.guide/#freebies">Free Themes</a></li>
			<li><a class="btn btn-info text-white" href="http://themes.guide/#themes">Pro Themes</a></li>
			<li><a class="btn btn-info text-white" href="http://themes.guide/#about">Benefits</a></li>
			</ul>
		</div>
		<div class="col-6">
			<h6>Apa Itu Crownfunding?</h6>
			<p align="justify">Daripada <a target="_blank"
			class="btn btn-secondary rounded-pill"
			href="https://ms.wikipedia.org/wiki/Dana_khalayak">Wikipedia</a>.
Pendanaan khalayak, pendanaan awam atau biayasama (Bahasa Inggeris: crowdfunding) ditakrifkan sebagai suatu amalan pendanaan sebuah projek atau perusahaan melalui kutipan jumlah wang yang kecil dari sejumlah ramai orang, biasanya menggunakan medium Internet. 

Ia merupakan suatu bentuk sumber khalayak dan kewangan alternatif.

Kaedah ini telah digunakan untuk mendana pelbagai jenis keusahawanan beruntung (for-profit entrepreneurship) seperti projek-projek kesenian dan kreatif, perbelanjaan tampungan perubatan, perlancongan, mahupun projek keusahawanan sosial yang bertumpukan masyarakat.

Terdapat anggaran yang dibuat pada tahun 2015 bahawa sebanyak sekitar AS$34 bilion telah diperolehi dengan cara ini.</p>
		</div>
		<div class="col-6 col-lg-3 column text-left">
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
		</div>
	</div>
</div>
<div class="container pt-5">
	<p class="small text-right">
	Made by ThemesGuide &copy;2018. MIT License.
	<br>Ubahsuai oleh Amin Ledang &copy;2019.</p>
</div>
</footer>
<?php
}
#------------------------------------------------------------------------------------------
#------------------------------------------------------------------------------------------
function dibawah()
{
	?>
<!--
# masukkan js dan jquery di bawah ini
########################################################################################### -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<?php
}
#------------------------------------------------------------------------------------------
function dibodyhtml()
{
	?>
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
#--------------------------------------------------------------------------------------------------
function teksNombor($data)
{
	//$rest = substr("abcdef", 2, -1);  // returns "cde"
	$data = substr($data,2);
	$data = str_replace(",", "", $data);

	return $data;
}
#--------------------------------------------------------------------------------------------------
function noBulat($data)
{
	$data = round($data);

	return $data;
}
#--------------------------------------------------------------------------------------------------
###################################################################################################
#--------------------------------------------------------------------------------------------------
#--------------------------------------------------------------------------------------------------