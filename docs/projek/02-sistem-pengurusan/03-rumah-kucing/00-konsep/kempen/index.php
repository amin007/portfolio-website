<?php
include '../main-function.php';
include 'function.php';
$tajuk = 'Kempen Derma';
diatas($tajuk);
?>

<!-- untuk menubar atas
=============================================================================================== -->
<?php navbar(); ?>
<!-- ==============================================================================================
-->

<!-- untuk konten tengah
=============================================================================================== -->
<section class="bg-light" id="themes">
<div class="container">
<!-- ////////////////////////////////////////////////////////////////////////////////////////// -->
<div class="row">
	<div class="col-xl-8 py-3">
		<h1 class="display-3 mb-0"><?php echo $tajuk ?></h1>
		<p class="lead text-justify">
		Berikut adalah kempen derma untuk kucing.
		</p>
	</div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////////////////// -->
<?php
$senarai = senaraiKempen();
foreach($senarai as $myTable => $row):
foreach($row as $key => $data):
	//echo $data1 . '<br>';
	//echo $row[$key]['tajuk'] . '<br>';
	# pilih konten
	konten01($row,$key,$data);
endforeach;
endforeach;
?>
<!-- ////////////////////////////////////////////////////////////////////////////////////////// -->
</div>
</section>
<!-- ==============================================================================================
tamat untuk konten tengah -->

<!-- untuk menubar bawah
=============================================================================================== -->
<?php
notakaki();
dibawah();