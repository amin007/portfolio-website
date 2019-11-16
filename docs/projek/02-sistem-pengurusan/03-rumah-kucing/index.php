<?php
include '../../../../ParsedownAminLedang.php';
#-------------------------------------------------------------------------------------------------
function bukafailutama($url)
{
	$membukaFail = fopen($url, "rb");
	$saizFail = 8192; //$saizFail = filesize($url);
	if (FALSE === $membukaFail) { exit("Gagal membuka aliran ke $url"); }
	$dataFail = '';
	while (!feof($membukaFail)) { $dataFail .= fread($membukaFail, $saizFail); }
		return array($membukaFail,$dataFail);
}
#-------------------------------------------------------------------------------------------------
#-------------------------------------------------------------------------------------------------
$Parsedown = new Parsedown();

list($membukaFail,$dataFail) = bukafailutama('readme.md');
//echo $Parsedown->text('Hello _Parsedown_!'); # prints: <p>Hello <em>Parsedown</em>!</p>
echo $Parsedown->text($dataFail);