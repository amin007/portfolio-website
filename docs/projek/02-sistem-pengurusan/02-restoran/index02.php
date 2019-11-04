<?php
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
//echo "\n";
$tajukDaa = file('readme.md')[0];
list($a,$tajuk) = explode('# ',$tajukDaa);
echo '<!DOCTYPE html>
<html>
<title>' . trim($tajuk) . '</title>

<xmp theme="united" style="display:none;">';//*/

list($membukaFail,$dataFail) = bukafailutama('readme.md');
echo $dataFail . "\n";
echo '</xmp>

<script src="http://strapdownjs.com/v/0.2/strapdown.js"></script>
</html>';//*/