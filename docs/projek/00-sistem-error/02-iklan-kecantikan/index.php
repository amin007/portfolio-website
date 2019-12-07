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
<!--
https://pixabay.com/photos/soap-horsetail-salt-blossom-bloom-2333412/
-->
<div class="row" style="background:#F4F9FD">
	<div class="col-12 text-center"><img src="images/soap-2333412_640.jpg">
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
	<div class="col-12 text-center"><img width="70%" src="https://cdn.pixabay.com/photo/2018/03/10/07/09/wellness-3213367_960_720.jpg">
	</div><!-- / class="col-12" -->
</div><!-- / class="row" -->
<!-- ////////////////////////////////////////////////////////////////////////////////////////// -->

<br>
<footer class="text-center">
Image by <a href="https://pixabay.com/users/silviarita-3142410/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=2333412">silviarita</a> from <a href="https://pixabay.com/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=2333412">Pixabay</a>
</footer>
<?php
dibawah();
// jquery di sini
dibodyhtml();
?>