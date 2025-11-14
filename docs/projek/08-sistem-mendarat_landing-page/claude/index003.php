<!DOCTYPE html>
<html lang="ms">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Mengubah Ilham Menjadi Kenyataan</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
body{background:linear-gradient(135deg,#10b981 0%,#059669 100%);min-height:100vh;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,sans-serif;padding:20px 0}
.main-container{background-color:#fff;border-radius:20px;box-shadow:0 20px 60px rgba(0,0,0,0.3);overflow:hidden}
.sidebar{background:linear-gradient(180deg,#f8f9fa 0%,#e9ecef 100%);padding:30px 20px;min-height:600px}
.brand{text-align:center;margin-bottom:30px}
.brand h4{color:#10b981;font-weight:700;margin-bottom:5px}
.brand p{color:#6c757d;font-size:12px;margin:0}
.nav-pills .nav-link{padding:14px 18px;margin-bottom:10px;border-radius:12px;display:flex;align-items:center;gap:14px;cursor:pointer;transition:all 0.3s ease;color:#495057;font-weight:500;border:2px solid transparent;background-color:transparent}
.nav-pills .nav-link:hover{background-color:#fff;color:#10b981;transform:translateX(5px);box-shadow:0 4px 12px rgba(16,185,129,0.2)}
.nav-pills .nav-link.active{background:linear-gradient(135deg,#667eea 0%,#764ba2 100%);color:#fff;transform:translateX(5px);box-shadow:0 8px 16px rgba(102,126,234,0.4)}
.sidebar-icon{font-size:24px;width:28px;text-align:center}
.section-label{font-size:11px;font-weight:700;color:#6c757d;text-transform:uppercase;letter-spacing:1px;margin:25px 0 15px 18px}
.content-area{padding:40px;min-height:600px}
.content-header{margin-bottom:30px;padding-bottom:20px;border-bottom:3px solid #f0f0f0}
.content-header h2{color:#212529;font-weight:700;margin-bottom:10px}
.content-header p{color:#6c757d;margin:0}
.product-card{border:2px solid #e9ecef;border-radius:12px;padding:25px;margin-bottom:20px;transition:all 0.3s ease}
.product-card:hover{border-color:#667eea;box-shadow:0 8px 20px rgba(102,126,234,0.15);transform:translateY(-5px)}
.product-card h5{color:#212529;font-weight:600;margin-bottom:12px}
.product-card p{color:#6c757d;margin-bottom:15px}
.btn-primary-custom{background:linear-gradient(135deg,#667eea 0%,#764ba2 100%);border:none;padding:10px 24px;border-radius:8px;font-weight:600;transition:all 0.3s ease;color:#fff}
.btn-primary-custom:hover{transform:translateY(-2px);box-shadow:0 6px 20px rgba(102,126,234,0.4);color:#fff}
.pricing-card{border:2px solid #e9ecef;border-radius:15px;padding:30px;text-align:center;transition:all 0.3s ease;height:100%}
.pricing-card:hover{border-color:#667eea;transform:translateY(-10px);box-shadow:0 12px 30px rgba(102,126,234,0.2)}
.pricing-card.featured{border-color:#667eea;background:linear-gradient(135deg,rgba(102,126,234,0.05) 0%,rgba(118,75,162,0.05) 100%)}
.price{font-size:48px;font-weight:700;color:#667eea;margin:20px 0}
.price small{font-size:18px;color:#6c757d}
</style>
</head>
<body>
<div class="container-fluid">
<div class="row justify-content-center">
<div class="col-lg-11 col-xl-10">
<div class="main-container">
<div class="row g-0">
<div class="col-md-3">
<div class="sidebar">
<div class="brand"><h4>✨ Perniagaan</h4><p>Mengubah Ilham Menjadi Kenyataan</p></div>
<div class="section-label">Produk</div>
<ul class="nav nav-pills flex-column" role="tablist">
<li class="nav-item" role="presentation"><button class="nav-link active" data-bs-toggle="pill" data-bs-target="#komputer" type="button" role="tab"><span class="sidebar-icon">🖥️</span><span>Komputer & Aksesori</span></button></li>
<li class="nav-item" role="presentation"><button class="nav-link" data-bs-toggle="pill" data-bs-target="#perisian" type="button" role="tab"><span class="sidebar-icon">📱</span><span>Perisian & Aplikasi</span></button></li>
<li class="nav-item" role="presentation"><button class="nav-link" data-bs-toggle="pill" data-bs-target="#telekomunikasi" type="button" role="tab"><span class="sidebar-icon">📡</span><span>Telekomunikasi</span></button></li>
<li class="nav-item" role="presentation"><button class="nav-link" data-bs-toggle="pill" data-bs-target="#buku" type="button" role="tab"><span class="sidebar-icon">📚</span><span>Buku & Alat Tulis</span></button></li>
<li class="nav-item" role="presentation"><button class="nav-link" data-bs-toggle="pill" data-bs-target="#bakeri" type="button" role="tab"><span class="sidebar-icon">🧁</span><span>Bakeri & Kuih</span></button></li>
</ul>
<div class="section-label">Perkhidmatan</div>
<ul class="nav nav-pills flex-column" role="tablist">
<li class="nav-item" role="presentation"><button class="nav-link" data-bs-toggle="pill" data-bs-target="#pengaturcaraan" type="button" role="tab"><span class="sidebar-icon">⚙️</span><span>Pengaturcaraan</span></button></li>
<li class="nav-item" role="presentation"><button class="nav-link" data-bs-toggle="pill" data-bs-target="#latihan" type="button" role="tab"><span class="sidebar-icon">🎓</span><span>Latihan Komputer</span></button></li>
<li class="nav-item" role="presentation"><button class="nav-link" data-bs-toggle="pill" data-bs-target="#penyelidikan" type="button" role="tab"><span class="sidebar-icon">🔬</span><span>Penyelidikan ICT</span></button></li>
<li class="nav-item" role="presentation"><button class="nav-link" data-bs-toggle="pill" data-bs-target="#nasihat" type="button" role="tab"><span class="sidebar-icon">💡</span><span>Khidmat Nasihat</span></button></li>
<li class="nav-item" role="presentation"><button class="nav-link" data-bs-toggle="pill" data-bs-target="#penulisan" type="button" role="tab"><span class="sidebar-icon">✍️</span><span>Penulisan Bebas</span></button></li>
</ul>
</div>
</div>
<div class="col-md-9">
<div class="content-area">
<div class="tab-content">
<div class="tab-pane fade show active" id="komputer" role="tabpanel">
<div class="content-header"><h2>🖥️ Komputer & Aksesori</h2><p>Peralatan komputer berkualiti tinggi untuk keperluan peribadi dan perniagaan</p></div>
<div class="row">
<div class="col-md-6"><div class="product-card"><h5>Komputer Riba</h5><p>Pilihan komputer riba terkini untuk pelajar dan profesional</p><button class="btn btn-primary-custom">Lihat Produk</button></div></div>
<div class="col-md-6"><div class="product-card"><h5>Aksesori Komputer</h5><p>Tetikus, papan kekunci, dan aksesori lain untuk kemudahan anda</p><button class="btn btn-primary-custom">Lihat Produk</button></div></div>
<div class="col-md-6"><div class="product-card"><h5>Monitor & Paparan</h5><p>Monitor berkualiti tinggi untuk kerja dan hiburan</p><button class="btn btn-primary-custom">Lihat Produk</button></div></div>
<div class="col-md-6"><div class="product-card"><h5>Peranti Storan</h5><p>SSD, HDD dan peranti storan luaran yang selamat</p><button class="btn btn-primary-custom">Lihat Produk</button></div></div>
</div>
</div>
<div class="tab-pane fade" id="perisian" role="tabpanel">
<div class="content-header"><h2>📱 Perisian & Aplikasi Mudah Alih</h2><p>Perisian profesional untuk meningkatkan produktiviti anda</p></div>
<div class="row">
<div class="col-md-6"><div class="product-card"><h5>Perisian Pejabat</h5><p>Microsoft Office, LibreOffice dan perisian produktiviti lain</p><button class="btn btn-primary-custom">Dapatkan Sekarang</button></div></div>
<div class="col-md-6"><div class="product-card"><h5>Aplikasi Mudah Alih</h5><p>Pembangunan aplikasi tersuai untuk perniagaan anda</p><button class="btn btn-primary-custom">Tempah Konsultansi</button></div></div>
<div class="col-md-6"><div class="product-card"><h5>Perisian Reka Bentuk</h5><p>Adobe Creative Cloud, Canva Pro dan alat reka bentuk</p><button class="btn btn-primary-custom">Lihat Pakej</button></div></div>
<div class="col-md-6"><div class="product-card"><h5>Perisian Keselamatan</h5><p>Antivirus dan perisian keselamatan terkini</p><button class="btn btn-primary-custom">Lindungi Sistem</button></div></div>
</div>
</div>
<div class="tab-pane fade" id="telekomunikasi" role="tabpanel">
<div class="content-header"><h2>📡 Peralatan Telekomunikasi & Elektronik</h2><p>Peralatan telekomunikasi dan elektronik terkini</p></div>
<div class="row">
<div class="col-md-6"><div class="product-card"><h5>Telefon Pintar</h5><p>Telefon pintar terkini dari jenama terkenal</p><button class="btn btn-primary-custom">Lihat Koleksi</button></div></div>
<div class="col-md-6"><div class="product-card"><h5>Peralatan Rangkaian</h5><p>Router, modem dan peralatan rangkaian berkualiti</p><button class="btn btn-primary-custom">Lihat Produk</button></div></div>
</div>
</div>
<div class="tab-pane fade" id="buku" role="tabpanel">
<div class="content-header"><h2>📚 Buku & Alat Tulis</h2><p>Koleksi buku dan alat tulis lengkap untuk pendidikan dan pejabat</p></div>
<div class="row">
<div class="col-md-6"><div class="product-card"><h5>Buku Pendidikan</h5><p>Buku teks, buku rujukan dan bahan pembelajaran</p><button class="btn btn-primary-custom">Jelajah Koleksi</button></div></div>
<div class="col-md-6"><div class="product-card"><h5>Alat Tulis Pejabat</h5><p>Pen, pensel, kertas dan keperluan pejabat</p><button class="btn btn-primary-custom">Lihat Produk</button></div></div>
<div class="col-md-6"><div class="product-card"><h5>Buku Teknologi</h5><p>Buku programming, ICT dan teknologi terkini</p><button class="btn btn-primary-custom">Beli Sekarang</button></div></div>
<div class="col-md-6"><div class="product-card"><h5>E-Book</h5><p>Koleksi buku digital untuk pembelajaran mudah</p><button class="btn btn-primary-custom">Muat Turun</button></div></div>
</div>
</div>
<div class="tab-pane fade" id="bakeri" role="tabpanel">
<div class="content-header"><h2>🧁 Produk Bakeri & Konfeksi</h2><p>Kuih tradisional, kuih raya dan produk bakeri segar</p></div>
<div class="row">
<div class="col-md-6"><div class="product-card"><h5>Kuih Tradisional</h5><p>Kuih muih tradisional Malaysia yang lazat</p><button class="btn btn-primary-custom">Tempah Sekarang</button></div></div>
<div class="col-md-6"><div class="product-card"><h5>Kuih Raya</h5><p>Kuih raya istimewa untuk majlis keraian anda</p><button class="btn btn-primary-custom">Lihat Menu</button></div></div>
<div class="col-md-6"><div class="product-card"><h5>Kek & Pastri</h5><p>Kek hari jadi, kek perkahwinan dan pastri segar</p><button class="btn btn-primary-custom">Buat Tempahan</button></div></div>
<div class="col-md-6"><div class="product-card"><h5>Roti & Biskut</h5><p>Roti segar dan biskut homemade setiap hari</p><button class="btn btn-primary-custom">Pesan Hari Ini</button></div></div>
</div>
</div>
<div class="tab-pane fade" id="pengaturcaraan" role="tabpanel">
<div class="content-header"><h2>⚙️ Pengaturcaraan & Pembangunan Aplikasi</h2><p>Perkhidmatan pengaturcaraan komputer dan pembangunan aplikasi mudah alih</p></div>
<div class="alert alert-info mb-4"><strong>🎯 Kepakaran Kami:</strong> Pembangunan website, aplikasi mudah alih (iOS & Android), sistem pengurusan, dan automasi perniagaan.</div>
<div class="row">
<div class="col-md-4"><div class="pricing-card"><h5>Pakej Asas</h5><div class="price">RM2,500</div><ul class="list-unstyled text-start"><li class="mb-2">✓ Website Korporat (5 halaman)</li><li class="mb-2">✓ Reka bentuk responsif</li><li class="mb-2">✓ Borang hubungan</li><li class="mb-2">✓ SEO asas</li><li class="mb-2">✓ 1 bulan sokongan</li></ul><button class="btn btn-primary-custom w-100 mt-3">Pilih Pakej</button></div></div>
<div class="col-md-4"><div class="pricing-card featured"><span class="badge bg-primary mb-2">Popular</span><h5>Pakej Profesional</h5><div class="price">RM5,500</div><ul class="list-unstyled text-start"><li class="mb-2">✓ Website E-dagang</li><li class="mb-2">✓ Sistem pembayaran</li><li class="mb-2">✓ Panel pentadbir</li><li class="mb-2">✓ Integrasi media sosial</li><li class="mb-2">✓ 3 bulan sokongan</li></ul><button class="btn btn-primary-custom w-100 mt-3">Pilih Pakej</button></div></div>
<div class="col-md-4"><div class="pricing-card"><h5>Pakej Tersuai</h5><div class="price">Hubungi</div><ul class="list-unstyled text-start"><li class="mb-2">✓ Aplikasi mudah alih</li><li class="mb-2">✓ Sistem pengurusan tersuai</li><li class="mb-2">✓ Integrasi AI & automasi</li><li class="mb-2">✓ API development</li><li class="mb-2">✓ Sokongan jangka panjang</li></ul><button class="btn btn-primary-custom w-100 mt-3">Dapatkan Sebut Harga</button></div></div>
</div>
</div>
<div class="tab-pane fade" id="latihan" role="tabpanel">
<div class="content-header"><h2>🎓 Latihan Komputer</h2><p>Program latihan komputer yang komprehensif untuk meningkatkan kemahiran digital</p></div>
<div class="row">
<div class="col-md-6"><div class="product-card"><h5>Asas Komputer</h5><p>Belajar asas penggunaan komputer, internet dan aplikasi pejabat</p><p><strong>Tempoh:</strong> 4 minggu | <strong>Harga:</strong> RM450</p><button class="btn btn-primary-custom">Daftar Sekarang</button></div></div>
<div class="col-md-6"><div class="product-card"><h5>Pembangunan Website</h5><p>Belajar HTML, CSS, JavaScript dan framework moden</p><p><strong>Tempoh:</strong> 8 minggu | <strong>Harga:</strong> RM1,200</p><button class="btn btn-primary-custom">Daftar Sekarang</button></div></div>
<div class="col-md-6"><div class="product-card"><h5>Pengaturcaraan Python</h5><p>Kuasai Python untuk AI, automasi dan analisis data</p><p><strong>Tempoh:</strong> 10 minggu | <strong>Harga:</strong> RM1,500</p><button class="btn btn-primary-custom">Daftar Sekarang</button></div></div>
<div class="col-md-6"><div class="product-card"><h5>Latihan Korporat</h5><p>Program latihan tersuai untuk organisasi dan syarikat</p><p><strong>Harga:</strong> Berdasarkan keperluan</p><button class="btn btn-primary-custom">Hubungi Kami</button></div></div>
</div>
</div>
<div class="tab-pane fade" id="penyelidikan" role="tabpanel">
<div class="content-header"><h2>🔬 Penyelidikan & Pembangunan ICT</h2><p>Perkhidmatan penyelidikan dan pembangunan dalam teknologi maklumat</p></div>
<div class="row">
<div class="col-md-12"><div class="product-card"><h5>Penyelidikan Teknologi</h5><p>Kami menjalankan penyelidikan dalam bidang:</p><ul class="text-start"><li>Kecerdasan Buatan (AI) dan Pembelajaran Mesin</li><li>Keselamatan Siber</li><li>Internet of Things (IoT)</li><li>Teknologi Awan (Cloud Computing)</li><li>Blockchain dan Web3</li></ul><button class="btn btn-primary-custom">Ketahui Lebih Lanjut</button></div></div>
<div class="col-md-12"><div class="product-card"><h5>Perkhidmatan R&D</h5><p>Kami membantu organisasi anda dalam:</p><ul class="text-start"><li>Proof of Concept (POC)</li><li>Pembangunan prototaip</li><li>Penyelidikan pasaran teknologi</li><li>Penilaian dan pemilihan teknologi</li></ul><button class="btn btn-primary-custom">Bincang Projek</button></div></div>
</div>
</div>
<div class="tab-pane fade" id="nasihat" role="tabpanel">
<div class="content-header"><h2>💡 Khidmat Nasihat & Konsultansi</h2><p>Khidmat nasihat pembangunan aplikasi dan penyelesaian perisian</p></div>
<div class="row">
<div class="col-md-6"><div class="product-card"><h5>Konsultansi Teknologi</h5><p>Dapatkan nasihat pakar untuk strategi teknologi perniagaan anda</p><p><strong>Kadar:</strong> RM300/jam</p><button class="btn btn-primary-custom">Tempah Sesi</button></div></div>
<div class="col-md-6"><div class="product-card"><h5>Audit Sistem</h5><p>Penilaian menyeluruh terhadap sistem IT sedia ada</p><p><strong>Kadar:</strong> RM2,000 - RM5,000</p><button class="btn btn-primary-custom">Minta Sebut Harga</button></div></div>
<div class="col-md-6"><div class="product-card"><h5>Perancangan Projek</h5><p>Bantuan merancang projek pembangunan perisian dari awal hingga akhir</p><p><strong>Kadar:</strong> Berdasarkan projek</p><button class="btn btn-primary-custom">Hubungi Kami</button></div></div>
<div class="col-md-6"><div class="product-card"><h5>Transformasi Digital</h5><p>Panduan untuk mengubah perniagaan anda ke platform digital</p><p><strong>Kadar:</strong> Pakej bermula RM5,000</p><button class="btn btn-primary-custom">Ketahui Lebih Lanjut</button></div></div>
</div>
</div>
<div class="tab-pane fade" id="penulisan" role="tabpanel">
<div class="content-header"><h2>✍️ Perkhidmatan Penulisan Bebas</h2><p>Penulisan profesional untuk pelbagai industri dengan teknologi AI dan automasi</p></div>
<div class="alert alert-success mb-4"><strong>🤖 Diperkasa AI:</strong> Kami menggunakan teknologi kecerdasan buatan dan automasi untuk menghasilkan kandungan yang berkualiti tinggi dengan lebih pantas dan efisien.</div>
<div class="row">
<div class="col-md-6"><div class="product-card"><h5>Penulisan Kandungan Web</h5><p>Artikel blog, kandungan laman web dan copywriting untuk perniagaan anda</p><p><strong>Kadar:</strong> RM0.30 - RM0.50 setiap perkataan</p><button class="btn btn-primary-custom">Pesan Sekarang</button></div></div>
<div class="col-md-6"><div class="product-card"><h5>Penulisan Teknikal</h5><p>Dokumentasi teknikal, manual pengguna dan panduan sistem</p><p><strong>Kadar:</strong> RM500 - RM2,000 setiap projek</p><button class="btn btn-primary-custom">Minta Sebut Harga</button></div></div>
<div class="col-md-6"><div class="product-card"><h5>Kandungan Media Sosial</h5><p>Post media sosial, caption dan strategi kandungan</p><p><strong>Kadar:</strong> RM800/bulan (15 post)</p><button class="btn btn-primary-custom">Mulakan Sekarang</button></div></div>
<div class="col-md-6"><div class="product-card"><h5>Terjemahan & Penyuntingan</h5><p>Perkhidmatan terjemahan Bahasa Inggeris-Melayu dan penyuntingan</p><p><strong>Kadar:</strong> RM0.20 setiap perkataan</p><button class="btn btn-primary-custom">Hantar Dokumen</button></div></div>
</div>
<div class="mt-4"><div class="product-card"><h5>📧 Hubungi Kami untuk Projek Khas</h5><p>Ada keperluan penulisan lain? Hubungi kami untuk membincangkan projek tersuai anda.</p><button class="btn btn-primary-custom">Berbual dengan Kami</button></div></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
document.querySelectorAll('[data-bs-toggle="pill"]').forEach(function(btn){
btn.addEventListener('click',function(){
document.querySelectorAll('.nav-link').forEach(function(link){
link.classList.remove('active');
link.setAttribute('aria-selected','false');
});
this.classList.add('active');
this.setAttribute('aria-selected','true');
});
});
</script>
</body>
</html>