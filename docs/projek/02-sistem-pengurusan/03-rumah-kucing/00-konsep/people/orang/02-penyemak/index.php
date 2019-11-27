<?php
include '../../../main-function.php';
//include 'function.php';
$tajuk = 'Kempen Derma';
diatas($tajuk);
?>

<!-- untuk menubar atas
=============================================================================================== -->
<?php navbar(); ?>
<!-- ==============================================================================================
-->

<!-- untuk konten tengah
=============================================================================================== -->
<form method="POST" action="" class="form-horizontal"><!-- style="background-color: #e9ecef;" -->
<!-- mula - borang utama ---------------------------------------------------------------------------------------------- -->
<?php
/*include 'x-contoh-nav-tabs-01.php'; echo '<hr>';
include 'x-contoh-nav-tabs-02.php'; echo '<hr>';
include 'x-contoh-nav-tabs-03.php'; echo '<hr>';
include 'x-contoh-nav-tabs-04.php'; echo '<hr>';
include 'kes-laporan.php';//*/
include 'kes-laporan02.php';
?>
<!-- tamat - borang utama ---------------------------------------------------------------------------------------------- -->
</form>
<!-- ==============================================================================================
tamat untuk konten tengah -->

<!-- untuk menubar bawah
=============================================================================================== -->
<?php
notakaki();
dibawah();