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
		if($entry{0} == ".") continue;
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
function list_files($tajuk)
{
	//$failIni = basename($_SERVER['PHP_SELF']);
	$dirlist = getFileList("./");
	diatas($tajuk);
	keterangan02();
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
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" type="text/css">

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
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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
		<h1>Amin Ledang: 02-Sistem Pengurusan</h1>
		<p> Disini saya senaraikan projek-projek website yang pernah saya buat </p>
	</blockquote>

	<div class="card">
		<div class="card-header">
			<a class="card-link" data-toggle="collapse" href="#maksud01">
			Apakah yang dinamakan <strong>sistem pengurusan</strong> /
			<em>management system</em>
			</a>
		</div><!-- / class="card-header" -->
		<div id="maksud01" class="collapse show" data-parent="#accordion">
		<div class="card-body">
<!-- //////////////////////////////////////////////////////////////////////////////////////// -->
<p><span class="font-weight-bold">Definisi:</span>
<span class="font-weight-bold">(Kamus Dewan Edisi Keempat)</span></p>
<p><span class="font-weight-bold">Definisi:</span>
<span class="font-weight-bold">(Kamus Pelajar Edisi Kedua)</span></p>
<!-- //////////////////////////////////////////////////////////////////////////////////////// -->
		</div><!-- / class="card-body" -->
		</div><!-- / class="collapsed *" -->
	</div><!-- / class="card" -->
<!-- //////////////////////////////////////////////////////////////////////////////////////// -->
	<div class="card">
		<div class="card-header">
			<a class="card-link" data-toggle="collapse" href="#maksud02">
			Apakah maksud <strong>sistem pengurusan</strong> /
			<em>management system</em> pada Wikipedia
			</a>
		</div><!-- / class="card-header" -->
		<div id="maksud02" class="collapse" data-parent="#accordion">
		<div class="card-body">
<!-- //////////////////////////////////////////////////////////////////////////////////////// -->

<p><span class="font-weight-bold">Pengurusan</span> terdiri daripada pengarahan dan pengawalan sebuah kumpulan yang terdiri daripada satu atau lebih orang atau entiti untuk tujuan menyeleraskan dan mengharmonikan kumpulan tersebut untuk mencapai sesuatu matlamat. Ia seringnya merangkumi penggunaan sumber-sumber manusia, kewangan, dan teknologi, serta juga sumber alam semula jadi. Pengurusan juga boleh merujuk kepada seorang atau sekumpulan orang yang menjalankan fungsi pengurusan.</p>

<p>Kata kerja "mengurus" datangnya daripada perkataan bahasa Itali, maneggiare (menangani - khususnya, seekor kuda), yang pada dirinya diterbitkan daripada perkataan Latin, manus (tangan). Perkataan bahasa Perancis, mesnagement (kemudiannya ménagement), telah banyak mempengaruhi perkembangan maksud perkataan bahasa Inggeris, management pada abad-abad ke-17 dan ke-18.</p>
<footer class="blockquote-footer">Dari laman web <cite title="Source Title">
<a target="_blank" href="https://ms.wikipedia.org/wiki/Pengurusan">Wikipedia</a></cite></footer>

<!-- //////////////////////////////////////////////////////////////////////////////////////// -->
		</div><!-- / class="card-body" -->
		</div><!-- / class="collapsed *" -->
	</div><!-- / class="card" -->
</div><!-- / id="accordion" -->
</div><!-- / class="container" -->
END;
}
#--------------------------------------------------------------------------------------------------
###################################################################################################
list_files('Senarai Projek');
#--------------------------------------------------------------------------------------------------