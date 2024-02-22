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
</head>
<body>
<div class="row"><?php
date_default_timezone_set('Asia/Kuala_Lumpur');
for($kira = 1; $kira <= 54; $kira++):
echo "\n";?>
<!-- //////////////////////////////////////////////////////////////////////////////////////// -->
<div class="col-2">
	<div class="card">
		<p class="text-center"><small>Kaunter PADU</small></p>
		<div class="card-body">
			<h1 class="text-center"><strong><?php echo $kira?></strong></h1>
		</div><!-- / class="card-body" -->
	</div><!-- / class="card" -->
</div><!-- / class="col-md-3 col-sm-6" -->
<!-- //////////////////////////////////////////////////////////////////////////////////////// -->
<?php
// <p class="card-text">SILA DUDUK. ANDA AKAN DILAYAN SEBENTAR LAGI.</p>
// <p class="card-text"><small> echo date("d/m/Y h:i a") </small></p>
endfor;
echo "\n";
?>
</div><!-- / class="row" -->

<!--
# masukkan js dan jquery di bawah ini
###########################################################################################
-->
</body>
</html>