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
		A collection of free, <a href="https://github.com/ThemesGuide/bootstrap-themes" target="_new">open-source</a> themes to give your Bootstrap 4 projects a 
		<strong>unique, custom</strong> style. Simply download the <code>theme.css</code> file for any theme, and include it after the standard
		<code>bootstrap.css</code> in your project's HTML templates. Each theme also includes
		example layout templates to demonstrate Bootstrap 4 elements, components, and content integration.
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
<pre>
<?php
//print_r(senaraiKempen());
//foreach():
?>
</pre>
<!-- ==============================================================================================
-->

<!-- untuk menubar bawah
=============================================================================================== -->
<?php notakaki(); ?>
<!-- ==============================================================================================
-->

<?php
dibawah();