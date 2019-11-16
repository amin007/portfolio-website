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
<h1><?php echo $tajuk ?></h1>
<section class="bg-light" id="themes">
<div class="container">
<!-- ////////////////////////////////////////////////////////////////////////////////////////// -->
<div class="row">
	<div class="col-xl-8 py-3">
		<h1 class="display-3 mb-0">Themes</h1>
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
foreach($row as $key => $data1):
	$a = semakGenap($key);
	$susunGambar = ($a == 'genap') ? 'text-md-right':'text-md-left';
	$no = ($key+1) . '0';
	$urlGambar = "https://placekitten.com/g/$no/$no";
	//echo $data1 . '<br>';
	//echo $row[$key]['tajuk'] . '<br>';
?>
<div class="row py-5 border-bottom">
	<div class="col-md-5 py-2 text-center <?php echo $susunGambar ?>">
		<a href="./signal"><img class="img-fluid rounded shadow wow fadeIn"
		src="<?php echo $urlGambar ?>" alt="Screenshot <?php echo $a ?>"></a>
	</div>
	<div class="col-md-7 py-2">
		<h2 class="my-1"><a href="./signal"><?php echo $row[$key]['tajuk'] ?></a></h2>
		<p>Like sailing yacht flags in a busy harbor.<br></p>
		<p><span class="h5" style="font-family:'Comfortaa'">Comfortaa</span> is the font family.</p>
		<small class="text-muted">Color palette</small>
		<h5>
			<span class="badge badge-pill" style="background-color:#FF304F;" title="#FF304F">&nbsp;</span>
			<span class="badge badge-pill" style="background-color:#CACACA;" title="#CACACA">&nbsp;</span>
			<span class="badge badge-pill" style="background-color:#015668;" title="#015668">&nbsp;</span>
			<span class="badge badge-pill" style="background-color:#06648C;" title="#06648C">&nbsp;</span>
			<span class="badge badge-pill" style="background-color:#0F81C7;" title="#0F81C7">&nbsp;</span>
			<span class="badge badge-pill" style="background-color:#0DE2EA;" title="#0DE2EA">&nbsp;</span>
			<span class="badge badge-pill" style="background-color:#ececec;" title="#ececec">&nbsp;</span>
			<span class="badge badge-pill" style="background-color:#222222;" title="#222222">&nbsp;</span>
		</h5>
	</div><!-- / class="col-md-7 py-2" -->
</div><!-- / class="row py-5 border-bottom" -->
<?php
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