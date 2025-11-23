<?php
// index.php - satu fail untuk semua khidmat dan produk
###################################################################################################
require 'fungsi_global.php';
###################################################################################################
#--------------------------------------------------------------------------------------------------
# Senarai laluan yang sah (route mapping)
#--------------------------------------------------------------------------------------------------
$laluanSah = [
	// Khidmat
	'khidmat/pengaturcaraan'       => 'khidmat_pengaturcaraan',
	'khidmat/aplikasi'             => 'khidmat_aplikasi',
	'khidmat/latihan-ict'          => 'khidmat_latihan_ict',
	'khidmat/penyelidikan'         => 'khidmat_penyelidikan',
	'khidmat/ai'                   => 'khidmat_ai',
	'khidmat/nasihat-perisian'     => 'khidmat_nasihat_perisian',
	'khidmat/penulisan-profesional'=> 'khidmat_penulisan_profesional',
	// Produk jualan runcit
	'barang/komputer-aksesori'     => 'barang_komputer_aksesori',
	'barang/buku-alat-tulis'       => 'barang_buku_alat_tulis',
	'barang/bakeri-kuih'           => 'barang_bakeri_kuih',
];

#--------------------------------------------------------------------------------------------------
# Dapatkan REQUEST_URI dan bersihkan
#--------------------------------------------------------------------------------------------------
$uri = ltrim($_SERVER['QUERY_STRING'], '?/');
#--------------------------------------------------------------------------------------------------
# debug
//semakPembolehubah($_SERVER['REQUEST_URI'],'REQUEST_URI');
//semakPembolehubah($_SERVER['QUERY_STRING'],'QUERY_STRING');
//semakPembolehubah($uri,'uri');
#--------------------------------------------------------------------------------------------------
# Semak laluan dan panggil fungsi yang sesuai
#--------------------------------------------------------------------------------------------------
if (array_key_exists($uri, $laluanSah))
{
	$fungsi = $laluanSah[$uri];
	// Pastikan fungsi wujud sebelum dipanggil
	if (function_exists($fungsi)):
		$fungsi(); // panggil fungsi berkaitan
		semakPembolehubah($fungsi,'fungsi');
	else:
		echo '<h1>require</h1>';
		require "fungsi/{$fungsi}.php"; // atau include fail berasingan
	endif;
}
else
{
	// Laluan tidak dijumpai atau laman utama
	require 'mendarat002.php';// halaman utama / 404
}
#--------------------------------------------------------------------------------------------------
# Contoh fungsi-fungsi (letakkan di bahagian bawah fail atau fail berasingan)
#--------------------------------------------------------------------------------------------------
function khidmat_pengaturcaraan()
{
	echo "<h1>Khidmat Pengaturcaraan</h1>"
	. "<p>Kami menawarkan perkhidmatan pengajaran pembangunan perisian.</p>";
	//require 'template/khidmat_pengaturcaraan.php';
}
#--------------------------------------------------------------------------------------------------
function khidmat_aplikasi()
{
	echo "<h1>Khidmat Aplikasi</h1>"
	. "<p>Kami menawarkan perkhidmatan pembangunan perisian mengikut keperluan anda.</p>";
	//require 'template/khidmat_aplikasi.php';
}
#--------------------------------------------------------------------------------------------------
function khidmat_latihan_ict()
{
	echo "<h1>Latihan ICT</h1><p>Kursus dan bengkel teknologi maklumat.</p>";
	//require 'template/latihan_ict.php';
}
#--------------------------------------------------------------------------------------------------
function khidmat_penyelidikan()
{
	echo "<h1>penyelidikan dan pembangunan</h1>"
	. "<p></p>";
	//require 'template/penyelidikan_rnd.php';
}
#--------------------------------------------------------------------------------------------------
function khidmat_ai()
{
	echo "<h1>R&D Kepintaran Buatan</h1>"
	. "<p></p>";
	//require 'template/penyelidikan_ai.php';
}
#--------------------------------------------------------------------------------------------------
function khidmat_nasihat_perisian()
{
	echo "<h1>khidmat nasihat perisian</h1>";
	//require 'template/khidmat_nasihat_perisian.php';
}
#--------------------------------------------------------------------------------------------------
function khidmat_penulisan_profesional()
{
	echo "<h1>khidmat penulisan profesional</h1>";
	//require 'template/khidmat_penulisan_profesional.php';
}
#--------------------------------------------------------------------------------------------------
function barang_komputer_aksesori()
{
	echo "<h1>Aksesori Komputer</h1>";
	//require 'template/barang_komputer.php';
}
#--------------------------------------------------------------------------------------------------
function barang_buku_alat_tulis()
{
	echo "<h1>barang_buku_alat_tulis</h1>";
	//require 'template/barang_buku_alat_tulis.php';
}
#--------------------------------------------------------------------------------------------------
function barang_bakeri_kuih()
{
	echo "<h1>barang_bakeri_kuih</h1>";
	//require 'template/barang_bakeri_kuih.php';
}
#--------------------------------------------------------------------------------------------------