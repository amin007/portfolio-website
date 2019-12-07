<?php
require 'main-function.php';
diatas();
diheadbody();

$data = content();
$data0 = $data[0];
$data1 = $data[1];
$data2 = $data[2];
?>

<br><br><br>
<!-- ////////////////////////////////////////////////////////////////////////////////////////// -->
<div class="row">
	<div class="col-12 bg-success text-center"><img width="50%" src="https://cdn.pixabay.com/photo/2017/09/07/19/38/soap-2726371_960_720.jpg">
	</div><!-- / class="col-12" -->
</div><!-- / class="row" -->
<!-- ////////////////////////////////////////////////////////////////////////////////////////// -->
<br><br><br>
<!-- ////////////////////////////////////////////////////////////////////////////////////////// -->
<div class="container">
<div class="row">
	<div class="col-1"></div><!-- / class="col-1" -->
	<div class="col-3">
		<?php echo "<strong class=\"text-uppercase\">$data0</strong>"
		. "<br><em class=\"text-capitalize\">$data1</em>" ?>
	</div><!-- / class="col-3" -->
	<div class="col-7 text-justify"><?php echo $data2 ?>
	</div><!-- / class="col-8" -->
</div><!-- / class="row" -->
</div><!-- / class="container" -->
<!-- ////////////////////////////////////////////////////////////////////////////////////////// -->
<br><br><br>
<!-- ////////////////////////////////////////////////////////////////////////////////////////// -->
<div class="container">
<div class="row">
	<div class="col-6">
		<img width="100%"
		src="https://cdn.pixabay.com/photo/2015/08/25/03/51/toner-906142_960_720.jpg">
	</div><!-- / class="col-6" -->
	<div class="col-6">
		<img width="100%" height="100%"
		src="https://cdn.pixabay.com/photo/2017/09/07/19/43/soap-2726387_960_720.jpg">
	</div><!-- / class="col-6" -->
</div><!-- / class="row" -->
</div><!-- / class="container" -->
<!-- ////////////////////////////////////////////////////////////////////////////////////////// -->
<br><br><br>
<!-- ////////////////////////////////////////////////////////////////////////////////////////// -->
<div class="row">
	<div class="col-12 bg-success text-center"><img width="90%" src="https://cdn.pixabay.com/photo/2018/03/10/07/09/wellness-3213367_960_720.jpg">
	</div><!-- / class="col-12" -->
</div><!-- / class="row" -->
<!-- ////////////////////////////////////////////////////////////////////////////////////////// -->

<?php
dibawah();
// jquery di sini
dibodyhtml();
?>