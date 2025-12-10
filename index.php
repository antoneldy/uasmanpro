<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Studi Sistem Informasi - Universitas Katolik Soegijapranata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="bi bi-laptop"></i> SI Unika Soegijapranata</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="#stats">Statistik</a></li>
                    <li class="nav-item"><a class="nav-link" href="#courses">Mata Kuliah</a></li>
                    <li class="nav-item"><a class="nav-link" href="#testimonials">Testimoni</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section with Carousel -->
    <section id="home" class="hero-section">
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/hero1.jpg" class="d-block w-100" alt="Hero 1" style="height: 70vh; object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="animate__animated animate__fadeInDown">Selamat Datang di SI Unika</h1>
                        <p class="animate__animated animate__fadeInUp">Inovasi Teknologi untuk Masa Depan</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/hero2.jpg" class="d-block w-100" alt="Hero 2" style="height: 70vh; object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="animate__animated animate__fadeInDown">Belajar Sistem Informasi</h1>
                        <p class="animate__animated animate__fadeInUp">Dengan Kurikulum Terdepan</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5 animate-on-scroll">
        <div class="container">
            <h2 class="text-center mb-4 animate__animated animate__fadeIn">Tentang Program Studi</h2>
            <div class="row">
                <div class="col-md-6">
                    <p class="animate__animated animate__fadeInLeft">Program Studi Sistem Informasi di Universitas Katolik Soegijapranata dirancang untuk menghasilkan lulusan yang kompeten dalam pengembangan sistem informasi, analisis data, dan teknologi digital. Dengan kurikulum yang terintegrasi dengan nilai-nilai katolik, kami menekankan etika, inovasi, dan keterampilan praktis.</p>
                </div>
                <div class="col-md-6">
                    <ul class="list-group animate__animated animate__fadeInRight">
                        <li class="list-group-item"><i class="bi bi-calendar"></i> Durasi: 4 tahun</li>
                        <li class="list-group-item"><i class="bi bi-mortarboard"></i> Gelar: Sarjana Komputer (S.Kom)</li>
                        <li class="list-group-item"><i class="bi bi-gear"></i> Fokus: Teknologi Informasi, Bisnis, dan Inovasi</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section id="stats" class="bg-primary text-white py-5 animate-on-scroll">
        <div class="container text-center">
            <h2 class="mb-4 animate__animated animate__fadeIn">Statistik Program Studi</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="stat-item">
                        <h3 id="students">0</h3>
                        <p>Mahasiswa Aktif</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-item">
                        <h3 id="lecturers">0</h3>
                        <p>Dosen Berkualifikasi</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-item">
                        <h3 id="graduates">0</h3>
                        <p>Lulusan Sukses</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-item">
                        <h3 id="partners">0</h3>
                        <p>Mitra Industri</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Courses Section -->
    <section id="courses" class="py-5 animate-on-scroll">
        <div class="container">
            <h2 class="text-center mb-4 animate__animated animate__fadeIn">Mata Kuliah Unggulan</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card course-card" data-bs-toggle="modal" data-bs-target="#courseModal" data-title="Pemrograman Web" data-desc="Belajar HTML, CSS, JavaScript, dan PHP untuk membangun aplikasi web.">
                        <div class="card-body">
                            <i class="bi bi-code-slash card-icon"></i>
                            <h5 class="card-title">Pemrograman Web</h5>
                            <p class="card-text">Belajar HTML, CSS, JavaScript, dan PHP untuk membangun aplikasi web.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card course-card" data-bs-toggle="modal" data-bs-target="#courseModal" data-title="Basis Data" data-desc="Konsep desain dan manajemen database menggunakan SQL dan NoSQL.">
                        <div class="card-body">
                            <i class="bi bi-database card-icon"></i>
                            <h5 class="card-title">Basis Data</h5>
                            <p class="card-text">Konsep desain dan manajemen database menggunakan SQL dan NoSQL.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card course-card" data-bs-toggle="modal" data-bs-target="#courseModal" data-title="Analisis Sistem" data-desc="Teknik analisis kebutuhan dan perancangan sistem informasi.">
                        <div class="card-body">
                            <i class="bi bi-diagram-3 card-icon"></i>
                            <h5 class="card-title">Analisis Sistem</h5>
                            <p class="card-text">Teknik analisis kebutuhan dan perancangan sistem informasi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="bg-light py-5 animate-on-scroll">
        <div class="container">
            <h2 class="text-center mb-4 animate__animated animate__fadeIn">Testimoni Mahasiswa</h2>
            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="text-center">
                            <p>"Program ini sangat membantu saya dalam karir IT. Kurikulumnya up-to-date!"</p>
                            <cite>- Andi, Alumni 2020</cite>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="text-center">
                            <p>"Dosen-dosennya kompeten dan ramah. Saya belajar banyak tentang inovasi."</p>
                            <cite>- Sari, Mahasiswa Aktif</cite>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </button>
            </div>
        </div>
    </section>

    <!-- Modal for Course Details -->
    <div class="modal fade" id="courseModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body" id="modalDesc"></div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-primary text-white py-4">
        <div class="container text-center">
            <p>&copy; 2023 Universitas Katolik Soegijapranata. Program Studi Sistem Informasi.</p>
            <p>Alamat: Jl. Pawiyatan Luhur IV/1, Bendan Duwur, Semarang.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>