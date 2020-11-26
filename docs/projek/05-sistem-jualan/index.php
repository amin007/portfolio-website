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
function gaya01daa($dirlist)
{
	echo '<!-- //////////////////////////////////////////////////////////////////////////////////////// -->';
	foreach($dirlist as $key02 => $value):
	if ($value['type'] == 'dir'):
		$nama = substr($value['name'],5);
		$nama = substr($nama,0,-1);
		$nama = ucwords(strtolower($nama));
		echo "\n" . '<div class="col-md-3 col-sm-6">'
		. "\n\t" . '<div class="card">'
		. "\n\t" . '<div class="card-body">'
		. "\n\t\t" . '<h5 class="card-title fo-weight-bold">' . $nama . '</h5>'
		. "\n\t\t" . '<a href="' . $value['name']
		. '"><h6 class="card-subtitle mb-2 text-muted">' . $nama . ' Daa</h6></a>'
		. "\n\t\t" . '<p class="card-text">Sistem Yang Lengkap</p>'
		. "\n\t" . '</div>'
		. "\n\t" . '</div>'
		. "\n" . '</div><!-- / class="col-md-3 col-sm-6" -->'
		. "\n" . '<!-- //////////////////////////////////////////////////////////////////////////////////////// -->';
	else:echo '';endif;
	endforeach;
	#
}
#--------------------------------------------------------------------------------------------------
function list_files($tajuk)
{
	//$failIni = basename($_SERVER['PHP_SELF']);
	$dirlist = getFileList("./");
	diatas($tajuk);
	echo "\n<hr><table><tr><td valign=\"top\">";
	foreach($dirlist as $key02 => $value):
		if ($value['type'] == 'dir'):
			echo "\n" . pautan($value['name'],$value['name']) . '';
		else:echo '';endif;
	endforeach;
	echo "\n\n</td><td valign=\"top\">\n";
	foreach(getIdea() as $name => $web):
		echo "\n" . pautan($name,$web); endforeach;
	echo "\n</td></tr></table>\n";
	gaya01daa($dirlist);
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
<h1>$tajuk</h1>

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
###################################################################################################
list_files('Senarai Projek');
#--------------------------------------------------------------------------------------------------