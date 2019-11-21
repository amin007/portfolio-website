<?php
include '../../../main-function.php';
//include 'function.php';
$tajuk = 'Kempen Derma';
diatas($tajuk);
?>

<!-- untuk menubar atas
=============================================================================================== -->
<?php //navbar(); ?>
<!-- ==============================================================================================
-->

<!-- untuk konten tengah
=============================================================================================== -->
<!-- mula - borang utama ---------------------------------------------------------------------------------------------- -->
<form method="POST" action="" class="form-horizontal">
<!-- mula - input tengah ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<div class="form-group row">
	<div class="col-1"></div>
	<div class="col-8">
		<pre class="input-group-text">
		Contoh Borang Bersama Input</pre>
	</div>
</div>
<!-- sempadan input tengah  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<div class="form-group row">
	<div class="col-1"></div>
	<div class="col-sm-6">
		<div class="input-group input-group-lg">
			<span class="input-group-prepend"><span class="input-group-text">
				nama penuh
			</span></span>
			<input type="text" class="form-control" placeholder="nama anda">
		</div>
	</div>
</div>
<!-- sempadan input tengah  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<div class="form-group row">
	<div class="col-1"></div>
	<div class="col-sm-6">
		<div class="input-group input-group-lg"><!-- style="background-color: #e9ecef;" -->
			<span class="input-group-prepend"><span class="input-group-text">
				nombor telefon
			</span></span>
			<input type="text" class="form-control" placeholder="no tel anda">
		</div>
	</div>
</div>
<!-- sempadan input tengah  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<div class="form-group row">
	<div class="col-1"></div>
	<div class="col-sm-6">
		<div class="input-group input-group-lg">
			<span class="input-group-prepend"><span class="input-group-text">
				email anda
			</span></span>
			<input type="text" class="form-control" placeholder="email anda">
		</div>
	</div>
</div>
<!-- sempadan input tengah  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<div class="form-group row">
	<div class="col-1"></div>
	<div class="col-sm-6">
		<div class="input-group input-group-lg">
			<span class="input-group-prepend"><span class="input-group-text">
				alamat rumah
			</span></span>
			<input type="text" class="form-control" placeholder="email anda">
		</div>
	</div>
</div>
<!-- sempadan input tengah  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<div class="form-group row">
	<div class="col-1"></div>
	<div class="col-sm-6">
		<div class="input-group input-group-sm">
			<span class="input-group-prepend"><span class="input-group-text">
				tarikh
			</span></span>
			<input type="date" class="form-control date-picker"
			placeholder="Cth: 2014-05-01" id="date" data-date-format="yyyy/mm/dd" />
		</div>
	</div>
</div>
<!-- sempadan input tengah  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<div class="form-group row">
	<div class="col-1"></div>
	<div class="col-sm-6">
		<div class="input-group input-group">
			<span class="input-group-prepend"><span class="input-group-text">
				gambar
			</span></span>
			<input type="file" class="form-control" id="exampleFormControlFile1">
		</div>
	</div>
</div>
<!-- sempadan input tengah  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<div class="form-group row">
	<div class="col-1"></div>
	<div class="col-sm-6">
		<p class="form-control-static text-info">{contoh-data}</p>
	</div>
</div>
<!-- sempadan input tengah  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<div class="form-group row">
	<div class="col-1"></div>
	<div class="col-sm-8 input-group-text">
		<div class="input-group input-group-lg">
			<span class="input-group-prepend "><span class="input-group-text
			border border-secondary rounded-lg">
			Contoh Borang Bersama Input Submit</span></span>
			<input type="hidden" name="jadual" value="@jadual">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-primary btn-large">
			<input type="reset" name="Reset" value="Reset" class="btn btn-secondary btn-large">
		</div>
	</div>
</div>
<!-- tamat - input tengah  ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
</form>
<!-- tamat - borang utama ---------------------------------------------------------------------------------------------- -->
<!-- ==============================================================================================
tamat untuk konten tengah -->

<!-- untuk menubar bawah
=============================================================================================== -->
<?php
notakaki();
dibawah();