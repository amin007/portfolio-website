<!-- mula - input tengah ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<div class="form-group row">
	<div class="col-1"></div>
	<div class="col-8">
		<pre class="input-group-text">
		Contoh Borang Bersama Input</pre>
	</div>
</div>
<!-- sempadan input tengah  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<div class="row">
<div class="col-1"></div>
<div class="col-2">
	<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		<a class="nav-link active" href="#pelapor" id="pelapor-tab" aria-controls="pelapor"
		data-toggle="pill"  role="tab" aria-selected="true">Maklumat Pelapor</a>
		<a class="nav-link" href="#dilapor" id="dilapor-tab" aria-controls="dilapor"
		data-toggle="pill" role="tab" aria-selected="false">Maklumat Dilapor</a>
	</div>
</div><!-- / class="col-3" -->
<div class="col-9">
	<div class="tab-content" id="v-pills-tabContent">
		<div class="tab-pane fade show active" role="tabpanel" id="pelapor" aria-labelledby="pelapor-tab"><?php
		include '01-tukang-lapor.php';
		?></div>
		<div class="tab-pane fade" role="tabpanel" id="dilapor" aria-labelledby="dilapor-tab"><?php
		include '02-yang-dilapor.php';
		?></div>
	</div><!-- / class="tab-content" id="v-pills-tabContent" -->
</div><!-- / class="col-9" -->
</div><!-- / class="row" -->
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
