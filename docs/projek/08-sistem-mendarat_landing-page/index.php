<?php
#--------------------------------------------------------------------------------------------------
/*
$fileList = glob('/*.*');
foreach($fileList as $filename)
{
	# Use the is_file function to make sure that it is not a directory.
	if(is_file($filename))
	{
		echo $filename . '<br>';
	}
}
*/
#--------------------------------------------------------------------------------------------------
function getFileList($dir)
{
	# array to hold return value
	$retval = [];
	# add trailing slash if missing
	if(substr($dir, -1) != "/") { $dir .= "/"; }
	# open pointer to directory and read list of files
	$d = @dir($dir) or die("getFileList: Failed opening directory {$dir} for reading");
	while(FALSE !== ($entry = $d->read()))
	{
		# skip hidden files
		if($entry[0] == ".") continue;
		if(is_dir("{$dir}{$entry}"))
		{
			$retval[] = [
			'name' => "{$dir}{$entry}/",
			'type' => filetype("{$dir}{$entry}"),
			'size' => 0,
			'lastmod' => filemtime("{$dir}{$entry}")
			];
		}
		elseif(is_readable("{$dir}{$entry}"))
		{
			$retval[] = [
			'name' => "{$dir}{$entry}",
			'type' => mime_content_type("{$dir}{$entry}"),
			'size' => filesize("{$dir}{$entry}"),
			'lastmod' => filemtime("{$dir}{$entry}")
			];
		}
	}

	$d->close();
	return $retval;
}
#--------------------------------------------------------------------------------------------------
function pautan($name,$web)
{
	$icon1 = '<i class="fas fa-globe-asia fa-spin"></i>';
	$icon2 = '<i class="far fa-folder fa-spin"></i>';
	$icon = ($name != $web) ? $icon1 : $icon2;
	return '&nbsp;&nbsp;' . $icon
	. '<a target="_blank" href="' . $web . '">'
	. $name . '</a><hr>';
}
#--------------------------------------------------------------------------------------------------
function paparBersih($name)
{
	$papar = preg_replace('/\.\/([^\/]+)\//', '$1 ', $name);
	$papar = ucfirst($papar);
	return $papar;
}
#--------------------------------------------------------------------------------------------------
function pautanBiasa($name,$web)
{
	return '<a target="_blank" href="' . $web . '">'
	. '<h6 class="card-subtitle mb-2 text-muted">Klik Projek '
	. paparBersih($name) . '</h6></a>';
}
#--------------------------------------------------------------------------------------------------
function list_files($tajuk)
{
	//$failIni = basename($_SERVER['PHP_SELF']);
	$dirlist = getFileList("./");
	diatas($tajuk);
	//keterangan02();
	keterangan03();
	#--------------------------------------------------------------------------------------------------
	echo "\r\n<br><br>\r\n";
	echo "\n". '<div class="container">' . "\n" . '<div class="row">';
	#--------------------------------------------------------------------------------------------------
		foreach($dirlist as $key02 => $value):
		if ($value['type'] == 'dir'):
			//echo "\n" . pautan($value['name'],$value['name']) . '';
			echo "\n" . '<!-- //////////////////////////////////////////////////////////////////////////////////////// -->'
			. "\n\t" . '<div class="col-md-3 col-sm-6">'
			. "\n\t" . '<div class="card">'
			. "\n\t" . '<div class="card-body">'
			. "\n\t\t" . '<h5 class="card-title fo-weight-bold">Projek ' . paparBersih($value['name']) .'</h5>'
			. "\n\t\t" . pautanBiasa($value['name'],$value['name'])
			. "\n\t\t" . '<p class="card-text">Apabila kita minta AI atau LLM cadangkan untuk kita</p>'
			. "\n\t" . '</div>'
			. "\n\t" . '</div>'
			. "\n\t" . '</div><!-- / class="col-md-3 col-sm-6" -->';
	else:echo '';endif;
	endforeach;
	#--------------------------------------------------------------------------------------------------
	echo "\n\t" . '</div><!-- / class="row" -->' . "\n". '</div><!-- / class="container" -->';
	#--------------------------------------------------------------------------------------------------
	echo "\n\t" . '<!-- menu tengah bawah --><br>'
	. "\n\t" . '<!-- Footer'
	. "\n\t" . '================================================== -->'
	. "\n\t" . '<nav class="navbar navbar-light">'
	. "\n\t\t" . '<span class="label label-info bg-secondary text-white">&copy; Hak Cipta Terperihara 2019.'
	. 'Theme Asal Bootstrap Twitter </span>'
	. "\n\t\t" . '<span class="label label-info bg-secondary text-white">PHP version: 7.2.2</span>'
	. "\n\t" . '</nav>';
	#--------------------------------------------------------------------------------------------------
	echo "\r\n\r\n";
	echo '<div class="container">';
	echo "\n<hr><table><tr><td valign=\"top\">";
	foreach($dirlist as $key02 => $value):
		if ($value['type'] == 'dir'):
			echo "\n" . pautan($value['name'],$value['name']) . '';
		else:echo '';endif;
	endforeach;
	echo "\n\n</td><td valign=\"top\">\n";
	foreach(getIdea() as $name => $web):
		echo "\n" . pautan($name,$web); endforeach;
	echo "\n</td></tr></table>";
	echo '</div><!-- / class="container" -->';
	dibawah();
}
#--------------------------------------------------------------------------------------------------
function getIdea()
{
	$papar = array(
		'[Test Download]'=>'//fast.com',
		'[Kalendar]'=>'https://www.mysumber.com/cuti-umum.html',
		'[jQuery]'=>'http://jquery.com',
		'[Bootstrap]'=>'http://getbootstrap.com',
		'[animate.css]'=>'https://daneden.github.io/animate.css',
		'[Sweet Alert]'=>'http://t4t5.github.io/sweetalert',
		'[FontAwesome]'=>'http://fortawesome.github.io/Font-Awesome',
		'[backstretch]'=>'http://srobbin.com/jquery-plugins/backstretch',
		'[jQuery.Form]'=>'http://malsup.com/jquery/form',
		'[Pixabay]'=>'https://pixabay.com',
		'[Unslpash]'=>'https://unsplash.com',
	);

	return $papar;
}
#--------------------------------------------------------------------------------------------------
function diatas($tajuk)
{
print <<<END
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>$tajuk</title>
<link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" type="text/css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">

<style type="text/css">
table.excel {
	border-style:ridge;
	border-width:1;
	border-collapse:collapse;
	font-family:sans-serif;
	font-size:11px;
}
table.excel thead th, table.excel tbody th {
	background:#CCCCCC;
	border-style:ridge;
	border-width:1;
	text-align: center;
	vertical-align: top;
}
table.excel tbody th { text-align:center; vertical-align: top; }
table.excel tbody td { vertical-align:bottom; }
table.excel tbody td
{
	padding: 0 3px; border: 1px solid #aaaaaa;
	background:#ffffff;
}
</style>
</head>
<body>
<!-- menu tengah atas --><br>
<h1><a class="btn btn-outline-secondary btn-lg rounded-pill"
href="https://amin007.github.io/portfolio-website/">
<small>Kembali ke pangkal jalan</small></a></h1>

END;
}
#--------------------------------------------------------------------------------------------------
function dibawah()
{
	print <<<END

<!-- Footer
================================================== -->
<!-- footer class="footer">
	<div class="container">
		<span class="label label-info">
		&copy; Hak Cipta Terperihara 2019. Theme Asal Bootstrap Twitter
		</span>
	</div>
</footer -->

<!-- khas untuk jquery dan js2 lain
================================================== -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<!-- script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script -->
<!-- script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script -->
</body>
</html>
END;
}
#--------------------------------------------------------------------------------------------------
function keterangan02()
{
	print <<<END
<div class="container">
<div id="accordion">
	<blockquote class="blockquote">
		<h1>Amin Ledang: 08-sistem-mendarat_landing-page</h1>
		<p> Disini saya senaraikan projek-projek website yang pernah saya buat </p>
	</blockquote>

	<div class="card">
		<div class="card-header">
			<a class="card-link" data-toggle="collapse" href="#maksud01">
			Apakah yang dinamakan <strong>sistem mendarat </strong> /
			<em>landing page</em>
			</a>
		</div><!-- / class="card-header" -->
		<div id="maksud01" class="collapse show" data-parent="#accordion">
		<div class="card-body">
<!-- //////////////////////////////////////////////////////////////////////////////////////// -->
<p><span class="font-weight-bold">Definisi:</span>
dokumen elektronik pd paparan skrin komputer (biasanya mengandungi teks, grafik, imej, bunyi dsb)
tentang sesuatu institusi, organisasi, persatuan, individu dsb yg dapat dicapai me­lalui Internet.
<span class="font-weight-bold">(Kamus Dewan Edisi Keempat)</span></p>
<p><span class="font-weight-bold">Definisi:</span>
dokumen elektronik pd paparan skrin komputer, biasanya mengandungi teks, grafik, imej, bunyi dsb ttg
sesuatu institusi, organisasi, persatuan, individu dsb yg dpt dicapai melalui Internet.
<span class="font-weight-bold">(Kamus Pelajar Edisi Kedua)</span></p>
<!-- //////////////////////////////////////////////////////////////////////////////////////// -->
		</div><!-- / class="card-body" -->
		</div><!-- / class="collapsed *" -->
	</div><!-- / class="card" -->
<!-- //////////////////////////////////////////////////////////////////////////////////////// -->
	<div class="card">
		<div class="card-header">
			<a class="card-link" data-toggle="collapse" href="#maksud02">
			Apakah maksud <strong>sistem mendarat </strong> /
			<em>landing page</em> pada Wikipedia
			</a>
		</div><!-- / class="card-header" -->
		<div id="maksud02" class="collapse" data-parent="#accordion">
		<div class="card-body">
<!-- //////////////////////////////////////////////////////////////////////////////////////// -->

<p><span class="font-weight-bold">Pengurusan</span> Dalam pemasaran dalam talian, halaman pendaratan, kadangkala dikenali sebagai "halaman tangkapan petunjuk", "halaman harta tunggal", "halaman statik", "halaman picit" atau "halaman destinasi", ialah halaman web tunggal yang muncul sebagai tindak balas kepada mengklik pada hasil carian yang dioptimumkan enjin carian, promosi pemasaran, e-mel pemasaran atau iklan dalam talian.[1] Halaman pendaratan biasanya akan memaparkan salinan jualan terarah yang merupakan lanjutan logik iklan, hasil carian atau pautan. Halaman pendaratan digunakan untuk penjanaan petunjuk. Tindakan yang diambil oleh pelawat pada halaman pendaratan ialah perkara yang menentukan kadar penukaran pengiklan. Halaman pendaratan mungkin merupakan sebahagian daripada tapak mikro atau satu halaman dalam tapak web utama organisasi.

Halaman pendaratan sering dikaitkan dengan media sosial, kempen e-mel, kempen pemasaran enjin carian, artikel berkualiti tinggi atau "akaun gabungan" untuk meningkatkan keberkesanan iklan. Matlamat umum halaman pendaratan adalah untuk menukar pelawat tapak kepada jualan atau petunjuk. Jika matlamatnya adalah untuk mendapatkan petunjuk, halaman pendaratan akan menyertakan beberapa kaedah untuk pelawat menghubungi syarikat, biasanya nombor telefon atau borang pertanyaan. Jika jualan diperlukan, halaman pendaratan biasanya akan mempunyai pautan untuk diklik oleh pelawat, yang kemudiannya akan menghantar mereka ke troli beli-belah atau kawasan pembayaran. Dengan menganalisis aktiviti yang dijana oleh URL yang dipautkan, pemasar boleh menggunakan kadar klik lalu dan kadar penukaran untuk menentukan kejayaan iklan.[2]
<footer class="blockquote-footer">Dari laman web <cite title="Source Title">
<a target="_blank" href="https://en.wikipedia.org/wiki/Landing_page">Wikipedia</a></cite></footer>

<!-- //////////////////////////////////////////////////////////////////////////////////////// -->
		</div><!-- / class="card-body" -->
		</div><!-- / class="collapsed *" -->
	</div><!-- / class="card" -->
</div><!-- / id="accordion" -->
</div><!-- / class="container" -->
END;
}
#--------------------------------------------------------------------------------------------------
function keterangan03()
{
	print <<<END
<!-- //////////////////////////////////////////////////////////////////////////////////////// -->
<div class="container">
	<blockquote class="blockquote">
		<h1>Amin Ledang: 08-sistem-mendarat_landing-page</h1>
		<p> Disini saya senaraikan projek-projek website yang pernah saya buat </p>
		<p> Saya juga tanya AI dan LLM macam mana hendak buat website berkenaan </p>
	</blockquote>

	<div class="accordion" id="accordionPanelsStayOpenExample">
	<!-- //////////////////////////////////////////////////////////////////////////////////////// -->
	<div class="accordion-item">
		<h2 class="accordion-header">
			<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#maksud01"
			aria-expanded="true" aria-controls="maksud01">
			Apakah yang dinamakan &nbsp;<strong> sistem mendarat </strong>&nbsp;/&nbsp;<em>landing page</em>
		</button>
		</h2>
		<div id="maksud01" class="accordion-collapse collapse show">
			<div class="accordion-body">
				<p><span class="font-weight-bold">Definisi:</span>
				dokumen elektronik pd paparan skrin komputer (biasanya mengandungi teks, grafik, imej, bunyi dsb)
				tentang sesuatu institusi, organisasi, persatuan, individu dsb yg dapat dicapai me­lalui Internet.
				<span class="font-weight-bold">(Kamus Dewan Edisi Keempat)</span></p>
				<p><span class="font-weight-bold">Definisi:</span>
				dokumen elektronik pd paparan skrin komputer, biasanya mengandungi teks, grafik, imej, bunyi dsb ttg
				sesuatu institusi, organisasi, persatuan, individu dsb yg dpt dicapai melalui Internet.
				<span class="font-weight-bold">(Kamus Pelajar Edisi Kedua)</span></p>
			</div><!-- / class="accordion-body" -->
		</div><!-- / class="accordion-collapse collapse show" -->
	</div><!-- / class="accordion-item" -->
	<!-- //////////////////////////////////////////////////////////////////////////////////////// -->
	<div class="accordion-item">
		<h2 class="accordion-header">
			<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#maksud02"
			aria-expanded="false" aria-controls="maksud02">
			Apakah maksud &nbsp;<strong> sistem mendarat </strong>&nbsp;/&nbsp;<em>landing page</em>&nbsp;pada Wikipedia
			</button>
		</h2>
		<div id="maksud02" class="accordion-collapse collapse">
			<div class="accordion-body">
				<p><span class="font-weight-bold">Pengurusan</span> Dalam pemasaran dalam talian, halaman pendaratan, kadangkala dikenali sebagai "halaman tangkapan petunjuk", "halaman harta tunggal", "halaman statik", "halaman picit" atau "halaman destinasi", ialah halaman web tunggal yang muncul sebagai tindak balas kepada mengklik pada hasil carian yang dioptimumkan enjin carian, promosi pemasaran, e-mel pemasaran atau iklan dalam talian.[1] Halaman pendaratan biasanya akan memaparkan salinan jualan terarah yang merupakan lanjutan logik iklan, hasil carian atau pautan. Halaman pendaratan digunakan untuk penjanaan petunjuk. Tindakan yang diambil oleh pelawat pada halaman pendaratan ialah perkara yang menentukan kadar penukaran pengiklan. Halaman pendaratan mungkin merupakan sebahagian daripada tapak mikro atau satu halaman dalam tapak web utama organisasi.

				Halaman pendaratan sering dikaitkan dengan media sosial, kempen e-mel, kempen pemasaran enjin carian, artikel berkualiti tinggi atau "akaun gabungan" untuk meningkatkan keberkesanan iklan. Matlamat umum halaman pendaratan adalah untuk menukar pelawat tapak kepada jualan atau petunjuk. Jika matlamatnya adalah untuk mendapatkan petunjuk, halaman pendaratan akan menyertakan beberapa kaedah untuk pelawat menghubungi syarikat, biasanya nombor telefon atau borang pertanyaan. Jika jualan diperlukan, halaman pendaratan biasanya akan mempunyai pautan untuk diklik oleh pelawat, yang kemudiannya akan menghantar mereka ke troli beli-belah atau kawasan pembayaran. Dengan menganalisis aktiviti yang dijana oleh URL yang dipautkan, pemasar boleh menggunakan kadar klik lalu dan kadar penukaran untuk menentukan kejayaan iklan.[2]

				<footer class="blockquote-footer">Dari laman web <cite title="Source Title">
				<a target="_blank" href="https://en.wikipedia.org/wiki/Landing_page">Wikipedia</a></cite></footer>

			</div><!-- / class="accordion-body" -->
		</div><!-- / class="accordion-collapse collapse show" -->
	</div><!-- / class="accordion-item" -->
	<!-- //////////////////////////////////////////////////////////////////////////////////////// -->
	<div class="accordion-item">
		<h2 class="accordion-header">
			<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#maksud03"
			aria-expanded="false" aria-controls="maksud03">
			Apakah maksud &nbsp;<strong> sistem mendarat </strong>&nbsp;/&nbsp;<em>landing page</em>&nbsp;pada website lain
			</button>
		</h2>
		<div id="maksud03" class="accordion-collapse collapse">
			<div class="accordion-body">
			...
			</div><!-- / class="accordion-body" -->
		</div><!-- / class="accordion-collapse collapse show" -->
	</div><!-- / class="accordion-item" -->
	<!-- //////////////////////////////////////////////////////////////////////////////////////// -->
	</div><!-- / class="accordion" -->

	<br><br>
	<blockquote class="blockquote">
		<p> Saya juga tanya AI dan LLM macam mana hendak buat website berkenaan </p>
		<p> Arahan yang saya beri adakah :</p>
		<code>ok, buat landing page untuk amin007.org
		<br>
		<br>gunakan bootstrap 5.3 yang baru. tambah juga Font Awesome.
		<br>Unicode pulak dalam kod html
		<br>
		<br>bisnes yang bakal saya buat adalah
		<br>+++
		<br>Motto : Mengubah Ilham Menjadi Kenyataan
		<br>Keterangan Bisnes : Kami menjalankan perniagaan jualan runcit, terutamanya melalui platform dalam talian,
		<br>merangkumi:- komputer, peralatan dan aksesori komputer, perisian, aplikasi mudah alih, serta
		<br>peralatan telekomunikasi dan elektronik, buku, alat tulis, serta produk bakeri dan konfeksi,
		<br>termasuk kuih tradisional dan kuih raya
		<br>
		<br>Selain itu, kami menyediakan pelbagai perkhidmatan, termasuk:-
		<br>- Pengaturcaraan komputer dan pembangunan aplikasi mudah alih
		<br>- Latihan komputer - Penyelidikan dan pembangunan dalam teknologi maklumat dan komunikasi (ICT)
		<br>- Khidmat nasihat pembangunan aplikasi dan penyelesaian perisian
		<br>- Penulisan bebas untuk pelbagai industri, dengan penggunaan teknologi seperti kecerdasan buatan (AI) dan automasi
		<br>
		<br>+++ jadi ada idea macam mana nak kekalkan minat saya dalam programming dan tunjukkan pada orang lain
		<br>yang saya mampu buat website jualan untuk mereka
		</code>
	</blockquote>

</div><!-- / class="container" --><hr>
<!-- //////////////////////////////////////////////////////////////////////////////////////// -->
END;
}
#--------------------------------------------------------------------------------------------------
###################################################################################################
list_files('Senarai Projek');
#--------------------------------------------------------------------------------------------------