<!DOCTYPE html>
<html lang="ms">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bootstrap Tabs - Contoh</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
body {
	background-color: #f8f9fa;
	font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
}

.sidebar {
	background-color: #ffffff;
	border-radius: 12px;
	padding: 20px;
	box-shadow: 0 2px 8px rgba(0,0,0,0.08);
}

.nav-pills .nav-link {
	padding: 12px 16px;
	margin-bottom: 8px;
	border-radius: 8px;
	display: flex;
	align-items: center;
	gap: 12px;
	cursor: pointer;
	transition: all 0.2s;
	color: #333;
	font-weight: 500;
	border: none;
	background-color: transparent;
}

.nav-pills .nav-link:hover {
	background-color: #f8f9fa;
	color: #0d6efd;
}

.nav-pills .nav-link.active {
	background-color: #e7f1ff;
	color: #0d6efd;
}

.sidebar-icon {
	font-size: 20px;
	width: 24px;
	text-align: center;
}

.content-area {
	background-color: #ffffff;
	border-radius: 12px;
	padding: 30px;
	box-shadow: 0 2px 8px rgba(0,0,0,0.08);
	min-height: 500px;
}

.badge-new {
	background-color: #ff4444;
	color: white;
	font-size: 10px;
	padding: 2px 6px;
	border-radius: 4px;
	margin-left: auto;
}
</style>
</head>
<body>
<div class="container-fluid py-5">
<div class="row">
	<!-- Sidebar -->
	<div class="col-md-3">
	<div class="sidebar">
		<h5 class="mb-4">Menu</h5>

		<ul class="nav nav-pills flex-column" id="myTab" role="tablist">
		<li class="nav-item" role="presentation">
			<button class="nav-link active" id="challenges-tab" data-bs-toggle="pill" data-bs-target="#challenges" type="button" role="tab">
			<span class="sidebar-icon">??</span>
			<span>Challenges</span>
			</button>
		</li>
		<li class="nav-item" role="presentation">
			<button class="nav-link" id="digital-tab" data-bs-toggle="pill" data-bs-target="#digital-products" type="button" role="tab">
			<span class="sidebar-icon">??</span>
			<span>Digital products</span>
			</button>
		</li>
		<li class="nav-item" role="presentation">
			<button class="nav-link" id="events-tab" data-bs-toggle="pill" data-bs-target="#events" type="button" role="tab">
			<span class="sidebar-icon">??</span>
			<span>Events</span>
			</button>
		</li>
		<li class="nav-item" role="presentation">
			<button class="nav-link" id="session-tab" data-bs-toggle="pill" data-bs-target="#session" type="button" role="tab">
			<span class="sidebar-icon">??</span>
			<span>1-1 Session</span>
			</button>
		</li>
		<li class="nav-item" role="presentation">
			<button class="nav-link" id="memberships-tab" data-bs-toggle="pill" data-bs-target="#memberships" type="button" role="tab">
			<span class="sidebar-icon">??</span>
			<span>Memberships</span>
			</button>
		</li>
		<li class="nav-item" role="presentation">
			<button class="nav-link" id="payment-tab" data-bs-toggle="pill" data-bs-target="#payment-links" type="button" role="tab">
			<span class="sidebar-icon">??</span>
			<span>Payment links</span>
			</button>
		</li>
		<li class="nav-item" role="presentation">
			<button class="nav-link" id="newsletter-tab" data-bs-toggle="pill" data-bs-target="#newsletter" type="button" role="tab">
			<span class="sidebar-icon">??</span>
			<span>Newsletter</span>
			<span class="badge-new">BARU</span>
			</button>
		</li>
		</ul>

	</div>
	</div><!-- / class="col-md-3" -->

	<!-- Content Area -->
	<div class="col-md-9">
	<div class="content-area">
	<div class="tab-content" id="myTabContent">
	<!-- Challenges Tab -->
	<div class="tab-pane fade show active" id="challenges" role="tabpanel">
	<div class="mb-4">
	<h3>?? Challenges</h3>
	<p class="text-muted">Cabaran untuk meningkatkan kemahiran anda</p>
	</div>

	<div class="row">
	<div class="col-md-6 mb-3">
	<div class="card">
	<div class="card-body">
	<h5 class="card-title">30-Day Coding Challenge</h5>
	<p class="card-text">Tingkatkan kemahiran programming anda dalam 30 hari</p>
	<a href="#" class="btn btn-primary btn-sm">Sertai</a>
	</div>
	</div>
	</div>
	<div class="col-md-6 mb-3">
	<div class="card">
	<div class="card-body">
	<h5 class="card-title">Web Design Challenge</h5>
	<p class="card-text">Cipta website yang menakjubkan</p>
	<a href="#" class="btn btn-primary btn-sm">Sertai</a>
	</div>
	</div>
	</div>
	</div>
	</div>

	<!-- Digital Products Tab -->
	<div class="tab-pane fade" id="digital-products" role="tabpanel">
	<div class="mb-4">
	<h3>?? Digital Products</h3>
	<p class="text-muted">Produk digital untuk membantu perniagaan anda</p>
	</div>

	<div class="alert alert-info">
	<strong>Meal Plan 4 Minggu</strong><br>
	Jika anda bersedia untuk meningkatkan kesihatan, tenaga, dan keyakinan — kami mempunyai sesuatu yang istimewa untuk anda.
	</div>

	<h5>Kandungan:</h5>
	<ul>
	<li>Hidangan yang mudah diikuti</li>
	<li>Senarai barangan untuk jimat masa</li>
	<li>Resipi yang sedap (dan betul-betul sedap!)</li>
	<li>Pilihan fleksibel mengikut gaya hidup anda</li>
	</ul>

	<button class="btn btn-success mt-3">Dapatkan Sekarang</button>
	</div>

	<!-- Events Tab -->
	<div class="tab-pane fade" id="events" role="tabpanel">
	<div class="mb-4">
	<h3>?? Events</h3>
	<p class="text-muted">Acara dan bengkel yang akan datang</p>
	</div>

	<div class="list-group">
	<a href="#" class="list-group-item list-group-item-action">
	<div class="d-flex w-100 justify-content-between">
	<h6 class="mb-1">Workshop Web Development</h6>
	<small>15 Nov 2025</small>
	</div>
	<p class="mb-1">Belajar asas pembangunan web</p>
	<small>2:00 PM - 5:00 PM</small>
	</a>
	<a href="#" class="list-group-item list-group-item-action">
	<div class="d-flex w-100 justify-content-between">
	<h6 class="mb-1">Seminar Digital Marketing</h6>
	<small>20 Nov 2025</small>
	</div>
	<p class="mb-1">Strategi pemasaran digital yang berkesan</p>
	<small>10:00 AM - 12:00 PM</small>
	</a>
	</div>
	</div>

	<!-- 1-1 Session Tab -->
	<div class="tab-pane fade" id="session" role="tabpanel">
	<div class="mb-4">
	<h3>?? Sesi 1-1</h3>
	<p class="text-muted">Tempah sesi perundingan peribadi</p>
	</div>

	<div class="card">
	<div class="card-body">
	<h5>Nasihat Pembangunan Website</h5>
	<p>Dapatkan panduan khusus untuk projek website anda</p>
	<ul>
	<li>Durasi: 1 jam</li>
	<li>Format: Online/Video call</li>
	<li>Harga: RM150/sesi</li>
	</ul>
	<button class="btn btn-primary">Tempah Sekarang</button>
	</div>
	</div>
	</div>

	<!-- Memberships Tab -->
	<div class="tab-pane fade" id="memberships" role="tabpanel">
	<div class="mb-4">
	<h3>?? Keahlian</h3>
	<p class="text-muted">Pilih pelan keahlian yang sesuai</p>
	</div>

	<div class="row">
	<div class="col-md-4">
	<div class="card">
	<div class="card-body text-center">
	<h5>Asas</h5>
	<h2 class="my-3">RM99<small>/bulan</small></h2>
	<ul class="list-unstyled">
	<li>? Akses tutorial</li>
	<li>? Sokongan email</li>
	<li>? Sumber percuma</li>
	</ul>
	<button class="btn btn-outline-primary">Pilih</button>
	</div>
	</div>
	</div>
	<div class="col-md-4">
	<div class="card border-primary">
	<div class="card-body text-center">
	<span class="badge bg-primary mb-2">Popular</span>
	<h5>Standard</h5>
	<h2 class="my-3">RM199<small>/bulan</small></h2>
	<ul class="list-unstyled">
	<li>? Semua dalam Asas</li>
	<li>? 2 sesi 1-1</li>
	<li>? Projek eksklusif</li>
	</ul>
	<button class="btn btn-primary">Pilih</button>
	</div>
	</div>
	</div>
	<div class="col-md-4">
	<div class="card">
	<div class="card-body text-center">
	<h5>Premium</h5>
	<h2 class="my-3">RM399<small>/bulan</small></h2>
	<ul class="list-unstyled">
	<li>? Semua dalam Standard</li>
	<li>? Sesi unlimited</li>
	<li>? Kod sumber projek</li>
	</ul>
	<button class="btn btn-outline-primary">Pilih</button>
	</div>
	</div>
	</div>
	</div>
	</div>

	<!-- Payment Links Tab -->
	<div class="tab-pane fade" id="payment-links" role="tabpanel">
	<div class="mb-4">
	<h3>?? Pautan Pembayaran</h3>
	<p class="text-muted">Cipta pautan pembayaran untuk produk anda</p>
	</div>

	<div class="alert alert-warning">
	Ciri ini akan tersedia tidak lama lagi!
	</div>
	</div>

	<!-- Newsletter Tab -->
	<div class="tab-pane fade" id="newsletter" role="tabpanel">
	<div class="mb-4">
	<h3>?? Newsletter <span class="badge bg-danger">BARU</span></h3>
	<p class="text-muted">Langgan untuk mendapat kemas kini terkini</p>
	</div>

	<div class="card">
	<div class="card-body">
	<h5>Langgan Newsletter Kami</h5>
	<p>Dapatkan tips, tutorial, dan tawaran istimewa terus ke inbox anda!</p>

		<form>
			<div class="mb-3">
			<label class="form-label">Nama</label>
			<input type="text" class="form-control" placeholder="Nama anda">
			</div>
			<div class="mb-3">
			<label class="form-label">Email</label>
			<input type="email" class="form-control" placeholder="email@contoh.com">
			</div>
			<button type="submit" class="btn btn-primary">Langgan Sekarang</button>
		</form>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	<!-- Content Area -->
</div>
</div><!-- / class="container-fluid py-5" -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>