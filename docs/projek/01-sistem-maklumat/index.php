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
	keterangan01();
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
function keterangan01()
{
	print <<<END
<div class="container">
<div id="accordion">
	<blockquote class="blockquote">
		<h1>Amin Ledang: 01-Sistem Maklumat</h1>
		<p> Disini saya senaraikan projek-projek website yang pernah saya buat </p>
	</blockquote>

	<div class="card">
		<div class="card-header">
			<a class="card-link" data-toggle="collapse" href="#maksud01">
			Apakah yang dinamakan <strong>sistem maklumat</strong> /
			<em>infomation system</em>
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
			Apakah maksud <strong>sistem maklumat</strong> /
			<em>infomation system</em> pada Wikipedia
			</a>
		</div><!-- / class="card-header" -->
		<div id="maksud02" class="collapse" data-parent="#accordion">
		<div class="card-body">
<!-- //////////////////////////////////////////////////////////////////////////////////////// -->
<p><span class="font-weight-bold">Sistem maklumat</span>ialah sejenis sistem yang berkaitan dengan pengumpulan, pemasukan, penyimpanan, pemprosesan, pengeluaran, dan penyebaran maklumat.<footer class="blockquote-footer">Dari laman web <cite title="Source Title">
<a target="_blank" href="https://ms.wikipedia.org/wiki/Pengurusan">Wikipedia</a></cite></footer></p>

<p><span class="font-weight-bold">Sistem maklumat (IS)</span> adalah sistem formal, sosioteknik, dan organisasi yang direka untuk mengumpul, memproses, menyimpan dan mengedarkan maklumat. [1] Dalam perspektif sosioteknik, sistem maklumat disusun oleh empat komponen: tugas, orang, struktur (atau peranan), dan teknologi. [2]</p>

<p><span class="font-weight-bold">Sistem maklumat komputer</span> adalah sistem yang terdiri daripada orang dan komputer yang memproses atau menafsirkan maklumat. [3] [4] [5] [6] Istilah ini juga kadang-kadang digunakan dalam deria yang lebih terhad untuk merujuk kepada hanya perisian yang digunakan untuk menjalankan pangkalan data berkomputer atau merujuk kepada sistem komputer sahaja.</p>

<p><span class="font-weight-bold">Sistem Maklumat</span> adalah kajian akademik sistem dengan rujukan khusus untuk maklumat dan rangkaian pelengkap perkakasan dan perisian yang digunakan oleh orang dan organisasi untuk mengumpul, menyaring, memproses, membuat dan mengedarkan data. Penekanan diletakkan pada sistem maklumat yang mempunyai sempadan, pengguna, pemproses, penyimpanan, input, output dan rangkaian komunikasi yang ditetapkan. [7]</p>

<p>Mana-mana sistem maklumat khusus bertujuan untuk menyokong operasi, pengurusan dan membuat keputusan. [8] [9] Sistem maklumat adalah teknologi maklumat dan komunikasi (ICT) yang digunakan oleh organisasi, dan juga cara orang berinteraksi dengan teknologi ini untuk menyokong proses perniagaan. [10]</p>

<p>Beberapa penulis membuat perbezaan yang jelas antara sistem maklumat, sistem komputer, dan proses perniagaan. Sistem maklumat biasanya merangkumi komponen ICT tetapi tidak semata-mata peduli dengan ICT, malah memberi tumpuan kepada penggunaan teknologi maklumat akhir. Sistem maklumat juga berbeza daripada proses perniagaan. Sistem maklumat membantu untuk mengawal prestasi proses perniagaan. [11]</p>

<p>Mengubah [12] [13] berpendapat untuk kelebihan melihat sistem maklumat sebagai jenis sistem kerja khas. Sistem kerja adalah sistem di mana manusia atau mesin melakukan proses dan aktiviti menggunakan sumber untuk menghasilkan produk atau perkhidmatan khusus untuk pelanggan. Sistem maklumat adalah sistem kerja yang kegiatannya ditumpukan untuk menangkap, menghantar, menyimpan, mengambil, memanipulasi dan memaparkan maklumat. [14]</p>

<p>Oleh itu, sistem maklumat saling berkaitan dengan sistem data di satu pihak dan sistem aktiviti di pihak yang lain. Sistem maklumat adalah satu bentuk sistem komunikasi di mana data mewakili dan diproses sebagai bentuk ingatan sosial. Sistem maklumat juga boleh dianggap sebagai bahasa separuh formal yang menyokong membuat keputusan dan tindakan manusia.</p>

<p>Sistem maklumat merupakan fokus utama kajian untuk informatik organisasi. [15]
<footer class="blockquote-footer">Dari laman web <cite title="Source Title">
<a target="_blank" href="https://en.wikipedia.org/wiki/Information_system">Wikipedia</a></cite></footer></p>
<!-- //////////////////////////////////////////////////////////////////////////////////////// -->
		</div><!-- / class="card-body" -->
		</div><!-- / class="collapsed *" -->
	</div><!-- / class="card" -->
<!-- //////////////////////////////////////////////////////////////////////////////////////// -->
	<div class="card">
		<div class="card-header">
			<a class="card-link" data-toggle="collapse" href="#maksud03">
			Apakah maksud <strong>sistem maklumat</strong> /
			<em>infomation system</em> pada laman web lain
			</a>
		</div><!-- / class="card-header" -->
		<div id="maksud03" class="collapse" data-parent="#accordion">
		<div class="card-body">
<!-- //////////////////////////////////////////////////////////////////////////////////////// -->
<p>Pengurusan Sistem Maklumat</p>
<p><span class="font-weight-bold">Sistem</span> ditakrifkan sebagai satu set elemen yang dihubungkan bersama bagi memenuhi objektif yang sama.Subsistem adalah sebahagian daripada sistem yang besar.Dalam sesebuah pengurusan, organisasi adalah sistem.Konsep sistem bagi pengurusan sistem maklumat adalah mengoptimumkan output organisasi dengan menghubungkan subsistem melalui perantaraan pertukaran maklumat.</p>

<p><span class="font-weight-bold">Data</span> adalah fakta-fakta dan nombor-nombor yang tidak digunakan dalam proses membuat keputusan.Biasanya diperolehi daripada rekod-rekod sejarah yang dirakamkan dan difailkan tanpa niat untuk mengambilnya bagi membuat keputusan.</p>

<p><span class="font-weight-bold">Maklumat</span> terdiri daripada data yang diambil dan kemudiannya diproses bagi tujuan mendapatkan maklumat, membuat  kesimpulan /asas bagi membuat ramalan dan keputusan.</p>

<p><span class="font-weight-bold">Pengurusan</span> terdiri daripada proses/ aktiviti yang menerangkan apakah yang pengurus perlu lakukan terhadap operasi organisasi.</p>

<ul class="list-group">
<li class="list-group-item active">Terdapat 4 proses dalam aktiviti pengurusan.</li>
<li class="list-group-item">1. Perancangan - dilakukan dengan menetapkan strategi dan matlamat dan memilih tindakan yang terbaik.</li>
<li class="list-group-item">2. Mengorganisasi – dilakukan ke atas tugas-tugas yang perlu bagi perancangan operasi.</li>
<li class="list-group-item">3. Memula – tanggungjawab diagih kepada mereka yang diberikan kuasa.</li>
<li class="list-group-item">4. Mengawal – prestasi kerja dikawal dengan ementapkan piawaian prestasi dan melakukan penyimpangan piawaian.</li>
</ul><!-- / class="list-group" --><br>

<p><span class="font-weight-bold">Sistem Maklumat</span> adalah satu set komponen yang dihubungkan antara satu sama lain untuk penerimaan, pemprosesan, penyebaran dan simpanan data untuk menyokong proses kawalan dan membuat keputusan di dalam organisasi.</p>

<p><span class="font-weight-bold">Pengurusan Sistem Maklumat</span> merupakan satu sistem untuk menukar data dari sumber-sumber dalaman dan luaran kepada maklumat dan menyampaikan maklumat itu dalam bentuk yang sesuai kepada semua pengurus untuk setiap tahap pengurusan supaya mereka dapat membuat keputusan yang efektif untuk perancangan, pengarahan dan pengawalan yang dipertanggungjawabkan kepada mereka.<footer class="blockquote-footer">Dari laman web <cite title="Source Title">
<a target="_blank" href="http://www.angelfire.com/linux/hypermedia/Bab1.html">CUSTOM</a></cite></footer></p>
<!-- //////////////////////////////////////////////////////////////////////////////////////// -->
		</div><!-- / class="card-body" -->
		</div><!-- / class="collapsed *" -->
	</div><!-- / class="card" -->
</div><!-- / id="accordion" -->
</div><!-- / class="container" -->
END;
}
###################################################################################################
list_files('Senarai Projek');
#--------------------------------------------------------------------------------------------------