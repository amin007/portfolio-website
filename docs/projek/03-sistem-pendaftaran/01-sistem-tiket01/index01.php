<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>03-Sistem Pendaftaran</title>
<!-- link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet" type="text/css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" -->
<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">

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
<div class="container">
<div class="row"><?php
date_default_timezone_set('Asia/Kuala_Lumpur');
for($kira = 1; $kira <= 48; $kira++):
echo "\n";?>
<!-- //////////////////////////////////////////////////////////////////////////////////////// -->
<div class="col-3">
	<div class="card">
	<div class="card-body">
		<p class="card-text"><small>Kaunter PADU</small></p>
		<p class="card-text">No. Anda:<br><h3><?php
		echo $kira?></h3></p>
	</div>
	</div>
</div><!-- / class="col-md-3 col-sm-6" -->
<!-- //////////////////////////////////////////////////////////////////////////////////////// -->
<?php
// <p class="card-text">SILA DUDUK. ANDA AKAN DILAYAN SEBENTAR LAGI.</p>
// <p class="card-text"><small> echo date("d/m/Y h:i a") </small></p>
endfor;
echo "\n";
?>
</div><!-- / class="row" -->
</div><!-- / class="container" -->

<!--
# masukkan js dan jquery di bawah ini
###########################################################################################
-->
</body>
</html>