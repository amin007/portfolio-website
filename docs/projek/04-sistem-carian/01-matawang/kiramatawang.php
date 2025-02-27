<?php
# Definisi kadar tukaran wang (boleh digantikan dengan API jika perlu)
$exchangeRates = [
	'USD' => 3.49,
	'GBP' => 5.40,
	'EUR' => 3.69,
	'SGD' => 3.20,
	'MYR' => 1.00
];

# tentukan nilai awal
$costPrice = 0;
$selectedCurrency = "MYR";
$customExchangeRate = 0;
$convertedPrice = 0;
$resultTable = "";

# semak kaedah permintaan dari mana? Poslaju ker JNT ker Shopee ker
if ($_SERVER['REQUEST_METHOD'] == "POST")
{
	# Ambil input dari borang
	$costPrice = floatval($_POST['cost_price'] ?? 0);
	$selectedCurrency = $_POST['currency'];
	$customExchangeRate = floatval($_POST['custom_exchange_rate']);

	# Tentukan kadar tukaran
	$exchangeRate = $customExchangeRate ?: $exchangeRates[$selectedCurrency] ?? 1;
	$convertedPrice = $costPrice * $exchangeRate;

	# masukkan nilai awal html table dan tajuk jadual
	$resultTable = '<table class="table table-bordered table-striped table-hover mt-3">'
	. "<caption class=\"text-center fw-bold\">Matawang: $selectedCurrency </caption>"
	. '<thead class="table-dark"><tr><th>Gross Profit %</th><th>Selling Price (MYR)</th></tr></thead><tbody>';

	# gelung
	for ($gp = 5; $gp <= 50; $gp += 5)
	{
		$sellingPrice = $convertedPrice / (1 - ($gp / 100));
		$resultTable .= "<tr><td>{$gp}%</td><td>"
		. number_format($sellingPrice, 2) . " MYR</td></tr>";
	}

	$resultTable .= "</tbody></table>";
}

$selectedCurrency = $_POST['currency'];
//*/
?>
<!DOCTYPE html>
<html lang="ms">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Kalkulator Untung Kasar</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
<style>
body {
background-color: #343a40;
color: #ffffff;
}
.sidebar {
height: 100%;
background-color: #212529;
padding: 1rem;
}
.sidebar a {
color: #ffffff;
text-decoration: none;
display: block;
padding: 0.5rem;
}
.sidebar a:hover {
background-color: #495057;
}
.card, .form-control, .btn-primary {
background-color: #495057;
color: #ffffff;
}
.btn-primary:hover {
background-color: #007bff;
}
</style>
</head>
<body>
<div class="container">
<h2 class="text-center"><i class="fa-solid fa-calculator"></i> Kalkulator Untung Kasar</h2>
<!-- ========================================================================================== -->
	<form method="POST" class="mt-4 p-3 border rounded bg-dark">
	<!-- isi borang untuk kira -->
		<div class="row">
		<div class="col">
		<label class="form-label"><i class="fa-solid fa-coins"></i> Matawang</label>
		<select name="currency" class="form-select">
		<option value="MYR">MYR</option>
		<option value="USD">USD</option>
		<option value="GBP">GBP</option>
		<option value="EUR">EUR</option>
		<option value="SGD">SGD</option>
		</select>
		</div><!-- / class="col" -->

		<div class="col">
		<label class="form-label"><i class="fa-solid fa-dollar-sign"></i> Harga Kos</label>
		<input type="number" name="cost_price" step="0.01" class="form-control" required>
		</div><!-- / class="col" -->

		<div class="col">
		<label class="form-label"><i class="fa-solid fa-arrow-right-arrow-left"></i>
		Kadar Pertukaran Tersuai (pilihan)</label>
		<input type="number" name="custom_exchange_rate" step="0.01" class="form-control">
		</div><!-- / class="col" -->
		</div><!-- / class="row" -->

		<br>
		<button type="submit" class="btn btn-primary">
		<i class="fa-solid fa-calculator"></i>
		Kiralah</button>
	</form>
<!-- ========================================================================================== -->
<br><h4><i class="fa-solid fa-chart-line"></i>Hasil</h4>
<!-- papar hasil -->
<div class="mt-4 p-3 border rounded bg-dark">
<?php
echo '<p><strong> <i class="fa-solid fa-arrow-right-arrow-left"></i>'
. " Kadar Pertukaran:</strong> 1 $selectedCurrency = " . number_format($exchangeRate, 2) . " MYR</p>"
. '<p><strong><i class="fa-solid fa-money-bill"></i> Harga Kos dalam Mata Wang Terpilih:</strong> '
. number_format($costPrice, 2) . ' ' . $selectedCurrency . '</p>'
. '<p><strong><i class="fa-solid fa-money-bill"></i> Tukaran Harga Kos:</strong> '
. number_format($convertedPrice, 2) . ' MYR</p>'
. '<p><strong><i class="fa-solid fa-calculator"></i> Formula:</strong> Harga Jualan = Harga Kos / (1 - (% Untung Kasar / 100))</p>';
?>
</div><!-- / class="mt-4 p-3 border rounded bg-dark" -->
<!-- ========================================================================================== -->
	<?php echo $resultTable; ?>
<!-- ========================================================================================== -->
</div><!-- / class="container" -->

</body>
</html>