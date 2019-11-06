<?php
include '../../../../ParsedownAminLedang.php';
#-------------------------------------------------------------------------------------------------
function diatas($tajuk = 'List Folder')
{
print <<<END
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>$tajuk</title>
<link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" type="text/css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" type="text/css">

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
</style>
</head>
<body>

END;
}
#---------------------------------------------------------------------------------------------------
function dibawah()
{
	print <<<END

<!-- Footer
================================================== -->
<!-- footer class="footer">
	<div class="container">
		<span class="label label-info">
		&copy; Hak Cipta Terperihara 2016. Theme Asal Bootstrap Twitter
		</span>
	</div>
</footer -->

<!-- khas untuk jquery dan js2 lain
================================================== -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script -->
</body>
</html>
END;
}
#-------------------------------------------------------------------------------------------------
function bukafailutama($url)
{
	$membukaFail = fopen($url, "rb");
	$saizFail = 8192; //$saizFail = filesize($url);
	if (FALSE === $membukaFail) { exit("Gagal membuka aliran ke $url"); }
	$dataFail = '';
	while (!feof($membukaFail)) { $dataFail .= fread($membukaFail, $saizFail); }
		return array($membukaFail,$dataFail);
}
#-------------------------------------------------------------------------------------------------
#-------------------------------------------------------------------------------------------------
# cari baris pertama dalam fail readme.md
$tajukDaa = file('readme.md')[0];
list($a,$tajuk) = explode('# ',$tajukDaa);
# cari data dalam fail readme,md
$Parsedown = new Parsedown();
list($membukaFail,$dataFail) = bukafailutama('readme.md');
# papar kandungan readme.md dalam bentuk html
//echo $Parsedown->text('Hello _Parsedown_!'); # prints: <p>Hello <em>Parsedown</em>!</p>
echo diatas($tajuk);
echo $Parsedown->text($dataFail);
echo dibawah();