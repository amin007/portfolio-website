<!DOCTYPE html>
<html>
<title>Sistem Pengurusan Rumah Makan</title>

<xmp theme="united" style="display:none;"><?php
echo "\n";
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

list($membukaFail,$dataFail) = bukafailutama('readme.md');
echo $dataFail . "\n"; ?>
</xmp>

<script src="http://strapdownjs.com/v/0.2/strapdown.js"></script>
</html>