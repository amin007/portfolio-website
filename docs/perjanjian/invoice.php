<?php
require 'main-function.php';
diatas();
diheadbody();

$data = content();
$data0 = $data[0];
$data1 = $data[1];
$data2 = $data[2];
?>
<br>
<!-- ////////////////////////////////////////////////////////////////////////////////////////// -->
<div class="row">
	<div class="col-1 text-center"><img src="fail/svg/tanjung-ledang.svg">
	</div><!-- / class="col-12" -->
</div><!-- / class="row" -->
<!-- ////////////////////////////////////////////////////////////////////////////////////////// -->
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

<br>
<footer class="text-center">
<a href="https://pixabay.com/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=2333412">Pixabay</a>
</footer>
<?php
dibawah();
// jquery di sini
dibodyhtml();
?>