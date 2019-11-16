<?php
#------------------------------------------------------------------------------------------
function senaraiKempen($tajuk = 'kucing')
{
	$data[$tajuk] = array(
		array(
			'tajuk'=>'Kucing 1',
			'gambar'=>'gambar kucing 1',
			'kempen_target'=>'10000',
			'kempen_capai'=>'500',
			'kempen_bil'=>'5',
			),
		array(
			'tajuk'=>'Kucing 2',
			'gambar'=>'gambar kucing 2',
			'kempen_target'=>'10000',
			'kempen_capai'=>'500',
			'kempen_bil'=>'5',
			),
		array(
			'tajuk'=>'Kucing 3',
			'gambar'=>'gambar kucing 1',
			'kempen_target'=>'10000',
			'kempen_capai'=>'500',
			'kempen_bil'=>'5',
			),
		array(
			'tajuk'=>'Kucing 4',
			'gambar'=>'gambar kucing 1',
			'kempen_target'=>'10000',
			'kempen_capai'=>'500',
			'kempen_bil'=>'5',
			),
		array(
			'tajuk'=>'Kucing 5',
			'gambar'=>'gambar kucing 1',
			'kempen_target'=>'10000',
			'kempen_capai'=>'500',
			'kempen_bil'=>'5',
			),
		array(
			'tajuk'=>'Kucing 6',
			'gambar'=>'gambar kucing 1',
			'kempen_target'=>'10000',
			'kempen_capai'=>'500',
			'kempen_bil'=>'5',
			),
		array(
			'tajuk'=>'Kucing 7',
			'gambar'=>'gambar kucing 1',
			'kempen_target'=>'10000',
			'kempen_capai'=>'500',
			'kempen_bil'=>'5',
			),
		array(
			'tajuk'=>'Kucing 8',
			'gambar'=>'gambar kucing 1',
			'kempen_target'=>'10000',
			'kempen_capai'=>'500',
			'kempen_bil'=>'5',
			),
		array(
			'tajuk'=>'Kucing 9',
			'gambar'=>'gambar kucing 1',
			'kempen_target'=>'10000',
			'kempen_capai'=>'500',
			'kempen_bil'=>'5',
			),
		array(
			'tajuk'=>'Kucing 10',
			'gambar'=>'gambar kucing 1',
			'kempen_target'=>'10000',
			'kempen_capai'=>'500',
			'kempen_bil'=>'5',
			),
	);
	#
	return $data;
}
#------------------------------------------------------------------------------------------
function konten01($row,$key,$data)
{
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
}
#------------------------------------------------------------------------------------------
