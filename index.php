<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Karoseri Projek</title>

    <!-- link -->

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top transparent">
        <div class="container">
            <a class="navbar-brand" href="#">CV Mandiri Kerja Abadi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#hero">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#products">Produk</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="hero" class="hero">
        <div class="container">
            <p class="lead">Your trusted partner in quality and excellence.</p>
            <h1 class="display-4 fw-bold">Welcome to CV Mandiri Kerja Abadi</h1>
            <a href="#about" class="btn btn-hero">Learn More</a>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about" class="about">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold">Tentang Kami</h2>
            <div class="row">
                <div class="col-md-6">
                    <img src="assets/image/about-us-image.jpg" alt="About Us" class="img-fluid mb-4">
                </div>
                <div class="col-md-6">
                    <p>CV Mandiri Kerja Abadi is a leading company in providing quality solutions for various
                        industries. Our mission is to deliver exceptional products and services that exceed our
                        clients' expectations.</p>
                    <p>We have a team of experienced professionals dedicated to ensuring the highest standards in
                        everything we do. Our commitment to excellence is reflected in our numerous satisfied
                        clients and successful projects.</p>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="feature-box">
                                <div class="feature-icon">
                                    <i class="bi bi-graph-up"></i>
                                </div>
                                <h5>Innovative Solutions</h5>
                                <p>We provide innovative solutions that help your business stay ahead of the
                                    competition.</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="feature-box">
                                <div class="feature-icon">
                                    <i class="bi bi-people-fill"></i>
                                </div>
                                <h5>Expert Team</h5>
                                <p>Our team of experts is dedicated to delivering the highest quality service to our
                                    clients.</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="feature-box">
                                <div class="feature-icon">
                                    <i class="bi bi-clock-fill"></i>
                                </div>
                                <h5>Timely Delivery</h5>
                                <p>We ensure that all projects are completed on time, every time.</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="feature-box">
                                <div class="feature-icon">
                                    <i class="bi bi-geo-alt-fill"></i>
                                </div>
                                <h5>Global Reach</h5>
                                <p>Our services are available globally, providing solutions to clients worldwide.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Advantages Section -->
    <section id="advantages" class="advantages bg-light">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold">Keunggulan Perusahaan</h2>
            <div class="row">
                <div class="col-md-4 text-center">
                    <div class="icon mb-3">
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <h3>High Quality</h3>
                    <p>We provide the highest quality products, using the best materials and latest technology to
                        ensure that our products meet the highest standards and exceed your expectations.</p>
                </div>
                <div class="col-md-4 text-center">
                    <div class="icon mb-3">
                        <i class="bi bi-award-fill"></i>
                    </div>
                    <h3>Trusted</h3>
                    <p>Our company is trusted by numerous leading businesses, thanks to our consistent track record
                        of delivering reliable and effective solutions tailored to each client's unique needs.</p>
                </div>
                <div class="col-md-4 text-center">
                    <div class="icon mb-3">
                        <i class="bi bi-heart-fill"></i>
                    </div>
                    <h3>Customer Satisfaction</h3>
                    <p>Customer satisfaction is at the heart of our operations. We are committed to providing
                        exceptional service, ensuring that every client is completely satisfied with our products
                        and services.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Employee Section -->
    <section id="employees" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4 fw-bold">Team Kami</h2>
            <div id="employeeCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <img src="assets/image/employee1.jpg" class="d-block w-100 mb-3" alt="Employee 1">
                                <h5 class="text-center">Employee 1</h5>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 d-none d-md-block">
                                <img src="assets/image/employee2.jpg" class="d-block w-100 mb-3" alt="Employee 2">
                                <h5 class="text-center">Employee 2</h5>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 d-none d-lg-block">
                                <img src="assets/image/employee3.jpg" class="d-block w-100 mb-3" alt="Employee 3">
                                <h5 class="text-center">Employee 3</h5>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <img src="assets/image/employee4.jpg" class="d-block w-100 mb-3" alt="Employee 4">
                                <h5 class="text-center">Employee 4</h5>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 d-none d-md-block">
                                <img src="assets/image/employee5.jpg" class="d-block w-100 mb-3" alt="Employee 5">
                                <h5 class="text-center">Employee 5</h5>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 d-none d-lg-block">
                                <img src="assets/image/employee6.jpg" class="d-block w-100 mb-3" alt="Employee 6">
                                <h5 class="text-center">Employee 6</h5>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <img src="assets/image/employee7.jpg" class="d-block w-100 mb-3" alt="Employee 7">
                                <h5 class="text-center">Employee 7</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#employeeCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#employeeCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>


    <!-- Parallax Section -->
    <section id="parallax" class="parallax">
        <div class="container text-center">
            <h2>Kembangkan potensi usaha anda dengan Karoseri</h2>
            <p>Mencari Solusi Bisnis Yang Tepat Untuk Kebutuhan Usaha Anda?</p>
        </div>
    </section>

    <!-- Products Section -->
    <section id="products" class="products">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold">Produk Kami</h2>
            <div class="row">
                <!-- Product Item -->
                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow-sm">
                        <img src="assets/image/product1.jpg" class="card-img-top" alt="Produk 1">
                        <div class="card-body text-center">
                            <h5 class="card-title">Nama Produk 1</h5>
                            <p class="card-text">Sedikit penjelasan mengenai produk ini. Produk ini menawarkan
                                fitur-fitur
                                unggulan dan keunggulan yang membuatnya istimewa.</p>
                            <a href="#" class="btn btn-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow-sm">
                        <img src="assets/image/product1.jpg" class="card-img-top" alt="Produk 1">
                        <div class="card-body text-center">
                            <h5 class="card-title">Nama Produk 1</h5>
                            <p class="card-text">Sedikit penjelasan mengenai produk ini. Produk ini menawarkan
                                fitur-fitur
                                unggulan dan keunggulan yang membuatnya istimewa.</p>
                            <a href="#" class="btn btn-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow-sm">
                        <img src="assets/image/product1.jpg" class="card-img-top" alt="Produk 1">
                        <div class="card-body text-center">
                            <h5 class="card-title">Nama Produk 1</h5>
                            <p class="card-text">Sedikit penjelasan mengenai produk ini. Produk ini menawarkan
                                fitur-fitur
                                unggulan dan keunggulan yang membuatnya istimewa.</p>
                            <a href="#" class="btn btn-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow-sm">
                        <img src="assets/image/product1.jpg" class="card-img-top" alt="Produk 1">
                        <div class="card-body text-center">
                            <h5 class="card-title">Nama Produk 1</h5>
                            <p class="card-text">Sedikit penjelasan mengenai produk ini. Produk ini menawarkan
                                fitur-fitur
                                unggulan dan keunggulan yang membuatnya istimewa.</p>
                            <a href="#" class="btn btn-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <!-- Product Item -->
                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow-sm">
                        <img src="assets/image/product2.jpg" class="card-img-top" alt="Produk 2">
                        <div class="card-body text-center">
                            <h5 class="card-title">Nama Produk 2</h5>
                            <p class="card-text">Sedikit penjelasan mengenai produk ini. Produk ini menawarkan
                                fitur-fitur
                                unggulan dan keunggulan yang membuatnya istimewa.</p>
                            <a href="#" class="btn btn-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <!-- Product Item -->
                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow-sm">
                        <img src="assets/image/product3.jpg" class="card-img-top" alt="Produk 3">
                        <div class="card-body text-center">
                            <h5 class="card-title">Nama Produk 3</h5>
                            <p class="card-text">Sedikit penjelasan mengenai produk ini. Produk ini menawarkan
                                fitur-fitur
                                unggulan dan keunggulan yang membuatnya istimewa.</p>
                            <a href="#" class="btn btn-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <!-- Tambahkan lebih banyak produk di sini jika diperlukan -->
            </div>
        </div>
    </section>

    <!-- Clients Section -->
    <section id="clients" class="clients bg-light">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold">Klien Kami</h2>
            <div class="row justify-content-center">
                <div class="col-md-3 col-4 mb-3">
                    <div class="clients-logo">
                        <img src="assets/image/client-logo-1.jpg" alt="Client 1" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-3 col-4 mb-3">
                    <div class="clients-logo">
                        <img src="assets/image/client-logo-2.jpg" alt="Client 2" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-3 col-4 mb-3">
                    <div class="clients-logo">
                        <img src="assets/image/client-logo-3.jpg" alt="Client 3" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-3 col-4 mb-3">
                    <div class="clients-logo">
                        <img src="assets/image/client-logo-4.jpg" alt="Client 4" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-3 col-4 mb-3">
                    <div class="clients-logo">
                        <img src="assets/image/client-logo-5.jpg" alt="Client 5" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-3 col-4 mb-3">
                    <div class="clients-logo">
                        <img src="assets/image/client-logo-5.jpg" alt="Client 5" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold">Testimoni</h2>
            <div id="testimonialCarousel" class="carousel slide " data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <blockquote class="blockquote text-center">
                            <p class="mb-5">The best service I have ever experienced!</p>
                            <footer class="blockquote-footer">John Doe, <cite title="Source Title">Company
                                    XYZ</cite></footer>
                        </blockquote>
                    </div>
                    <div class="carousel-item">
                        <blockquote class="blockquote text-center">
                            <p class="mb-5">Outstanding quality and attention to detail.</p>
                            <footer class="blockquote-footer">Jane Smith, <cite title="Source Title">Company
                                    ABC</cite></footer>
                        </blockquote>
                    </div>
                    <div class="carousel-item">
                        <blockquote class="blockquote text-center">
                            <p class="mb-5">Highly recommended for anyone seeking top-notch service.</p>
                            <footer class="blockquote-footer">Michael Johnson, <cite title="Source Title">Company
                                    DEF</cite></footer>
                        </blockquote>
                    </div>
                    <!-- Tambahkan lebih banyak testimonial di sini jika diperlukan -->
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Pengajuan Section -->
    <section id="pengajuan" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4 fw-bold">Pengajuan</h2>
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <form action="servermail.php" method="post">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Masukkan nama Anda">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email Anda">
                            <small class="form-text text-danger">Gunakan alamat email asli agar pesan dapat terkonfirmasi dengan jelas.</small>
                        </div>
                        <div class="mb-3">
                            <label for="details" class="form-label">Detail Pengajuan</label>
                            <textarea class="form-control" name="des" id="details" rows="5" placeholder="Masukkan detail pengajuan Anda"></textarea>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-block">Kirim Pengajuan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Location Section -->
    <section id="location" class="location">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold">Lokasi Kami</h2>
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <!-- Tempelkan kode embed Google Maps di sini -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1831.3659320115066!2d112.45465658667322!3d-7.468652750703376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e780d96ae759a13%3A0xd60c2b0f33ff8a44!2sJl.%20Kedung%20Sari%2C%20Mergelo%2C%20Kec.%20Magersari%2C%20Kota%20Mojokerto%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1721452719380!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer class="footer bg-dark text-white pt-5 pb-4">
        <div class="container">
            <div class="row">
                <!-- Company Information -->
                <div class="col-md-4 mb-3 mb-md-0">
                    <h5 class="text-uppercase mb-4">CV Mandiri Kerja Abadi</h5>
                    <p>Providing innovative solutions and exceptional service for various industries with a
                        commitment to
                        excellence.</p>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-house-door"></i> Jl. Kedung Sari, Mergelo, Kec. Magersari, Kota
                            Mojokerto, Jawa
                            Timur</li>
                        <li><i class="bi bi-envelope"></i> info@mandirikerjaabadi.com</li>
                        <li><i class="bi bi-telephone"></i> +62 123 456 789</li>
                    </ul>
                </div>
                <!-- Quick Links -->
                <div class="col-md-4 mb-3 mb-md-0">
                    <h5 class="text-uppercase mb-4">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#hero" class="text-white">Beranda</a></li>
                        <li><a href="#about" class="text-white">Tentang Kami</a></li>
                        <li><a href="#products" class="text-white">Produk</a></li>
                    </ul>
                </div>
                <!-- Social Media -->
                <div class="col-md-4">
                    <h5 class="text-uppercase mb-4">Follow Us</h5>
                    <div class="d-flex">
                        <a href="#" class="text-white me-3"><i class="bi bi-facebook fs-4"></i></a>
                        <a href="#" class="text-white me-3"><i class="bi bi-twitter fs-4"></i></a>
                        <a href="#" class="text-white me-3"><i class="bi bi-linkedin fs-4"></i></a>
                        <a href="#" class="text-white me-3"><i class="bi bi-instagram fs-4"></i></a>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <p class="mb-0">&copy; 2023 CV Mandiri Kerja Abadi. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navbar = document.querySelector('.navbar');

            function onScroll() {
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                    navbar.classList.remove('transparent');
                } else {
                    navbar.classList.add('transparent');
                    navbar.classList.remove('scrolled');
                }
            }

            window.addEventListener('scroll', onScroll);

            // Set initial state
            onScroll();
        });
    </script>
</body>

</html>