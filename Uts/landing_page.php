<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🌏WorldGreen</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
    :root {
        --primary-color:rgb(14, 74, 8);
        --secondary-color: #218838;
        --dark-color: #343a40;
        --light-color: #f8f9fa;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        scroll-behavior: smooth;
    }

    .navbar {
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        background-color: white !important;
    }

    .navbar-brand {
        font-weight: 700;
        color: var(--primary-color) !important;
        font-size: 1.5rem;
    }

    .hero-section {
        background-color:rgb(14, 74, 8);
        background-size: cover;
        background-position: center;
        color: white;
        padding: 150px 0;
        text-align: center;
    }

    .btn-worldgreen {
        background-color: var(--primary-color);
        color: white;
        padding: 10px 25px;
        font-weight: 600;
        border-radius: 50px;
        transition: all 0.3s ease;
    }

    .btn-worldgreen:hover {
        background-color: var(--secondary-color);
        color: white;
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .section-title {
        position: relative;
        margin-bottom: 50px;
        font-weight: 700;
        color: var(--dark-color);
    }

    .section-title::after {
        content: '';
        position: absolute;
        left: 50%;
        bottom: -15px;
        transform: translateX(-50%);
        width: 80px;
        height: 3px;
        background-color: var(--primary-color);
    }

    .about-section {
        padding: 100px 0;
        background-color: var(--light-color);
    }

    .company-carousel {
        padding: 80px 0;
    }

    .carousel-item img {
        height: 500px;
        object-fit: cover;
        border-radius: 10px;
    }

    .testimonial-section {
        padding: 100px 0;
        background-color: var(--dark-color);
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        color: white;
    }

    .testimonial-card {
        background-color: rgba(255, 255, 255, 0.9);
        border-radius: 10px;
        padding: 30px;
        color: var(--dark-color);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        margin: 15px;
        height: 100%;
    }

    .testimonial-img {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        object-fit: cover;
        border: 3px solid var(--primary-color);
        margin-bottom: 15px;
    }

    .rating {
        color: #ffc107;
        margin-bottom: 15px;
    }

    .feature-box {
        text-align: center;
        padding: 30px 20px;
        border-radius: 10px;
        transition: all 0.3s ease;
        margin-bottom: 30px;
        background-color: white;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    }

    .feature-box:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }

    .feature-icon {
        font-size: 2.5rem;
        color: var(--primary-color);
        margin-bottom: 20px;
    }

    footer {
        background-color: var(--dark-color);
        color: white;
        padding: 70px 0 0;
    }

    .footer-links a {
        color: rgba(255, 255, 255, 0.7);
        text-decoration: none;
        transition: all 0.3s ease;
        display: block;
        margin-bottom: 10px;
    }

    .footer-links a:hover {
        color: white;
        padding-left: 5px;
    }

    .social-icons a {
        display: inline-block;
        width: 40px;
        height: 40px;
        background-color: rgba(255, 255, 255, 0.1);
        color: white;
        border-radius: 50%;
        text-align: center;
        line-height: 40px;
        margin-right: 10px;
        transition: all 0.3s ease;
    }

    .social-icons a:hover {
        background-color: var(--primary-color);
        transform: translateY(-3px);
    }

    .copyright {
        background-color: rgba(0, 0, 0, 0.2);
        padding: 20px 0;
        margin-top: 50px;
    }
    </style>
</head>

<body>


    <!-- Hero Section -->
    <section class="hero-section" id="home">
        <div class="container">
            <h1 class="display-4 fw-bold mb-4">EcoGreen</h1>
            <p class="lead mb-5">EcoGreen Membantu Melengkapi Perabotan Rumah Dengan Tujuan Memperbaiki Lingkungan Alam</p>
            <a href="#about" class="btn btn-outline-light btn-lg">Pelajari Lebih Lanjut</a>
            <a href="#contact" class="btn btn-outline-light btn-lg">Contact Us</a>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section" id="about">
        <div class="container">
            <h2 class="text-center section-title">EcoGreen</h2>
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="https://i.pinimg.com/736x/9d/84/1c/9d841c8481c39247bb8d896b580d80fb.jpg"
                        alt="Tentang WorldGreen" class="img-fluid rounded">
                </div>
                <div class="col-lg-6">
                    <h3 class="mb-4">Visi dan Misi Kami Untuk Menghijaukan Dunia</h3>
                    <p>Kami berkomitmen untuk menghijaukan bumi dengan menanam pohon, melestarikan hutan, dan menciptakan ruang hijau di berbagai wilayah.
                        Melalui inovasi ramah lingkungan, kami mengembangkan solusi berkelanjutan guna mengurangi jejak karbon dan menjaga ekosistem.
                        Edukasi dan peningkatan kesadaran masyarakat menjadi fokus utama kami, agar setiap individu dapat berkontribusi dalam menjaga lingkungan..</p>
                    <p>Kami juga membangun kemitraan global dengan berbagai pihak, termasuk pemerintah dan organisasi lingkungan, demi mempercepat penghijauan dunia.
                         Dalam operasionalnya, kami menerapkan pengelolaan sumber daya yang berkelanjutan, mendorong penggunaan energi terbarukan, serta pengelolaan limbah yang bertanggung jawab. 
                         Selain itu, kami turut memberdayakan masyarakat dengan menciptakan peluang kerja dan mendukung komunitas lokal dalam mewujudkan lingkungan yang lebih hijau. 
                         Dengan visi dan misi ini, kami percaya bahwa langkah kecil hari ini akan membawa perubahan besar bagi bumi di masa depan..</p>
                    <div class="row mt-4">
                        <div class="col-md-6 mb-3">
                            <div class="feature-box">
                                <div class="feature-icon">
                                    <i class="fas fa-leaf"></i>
                                </div>
                                <h4>Mengikuti Perkembangan</h4>
                                <p>Selalu Mengikuti Kebutuhan Konsumen dan Mengutamkan Dunia</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="feature-box">
                                <div class="feature-icon">
                                    <i class="fas fa-lightbulb"></i>
                                </div>
                                <h4>Mengedepankan Costumer</h4>
                                <p>Selalu Mengutamakan Kepuasan Customer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Carousel -->
    <section class="company-carousel" id="company">
        <div class="container">
            <h2 class="text-center section-title">About Our Company</h2>
            <div id="companyCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#companyCarousel" data-bs-slide-to="0"
                        class="active"></button>
                    <button type="button" data-bs-target="#companyCarousel" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#companyCarousel" data-bs-slide-to="2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://i.pinimg.com/736x/f4/50/e0/f450e072ef3bd06c67bf5404273b3c55.jpg"
                            class="d-block w-100" alt="Fasilitas WorldGreen">
                        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
                            <h5>Teknologi Ramah Lingkungan</h5>
                            <p>Pabrik kami menggunakan 100% teknologi ramah lingkungan
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://i.pinimg.com/736x/06/2a/5c/062a5c66343ad6279a8c776f2726c496.jpg"
                            class="d-block w-100" alt="Tim WorldGreen">
                        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
                            <h5>Rekan bisnis yang profesional</h5>
                            <p>Memiliki lebih dari 500 rekan bisnis</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://i.pinimg.com/736x/e6/73/1a/e6731a364ebff37f762648773a21965f.jpg"
                            class="d-block w-100" alt="Proyek WorldGreen">
                        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
                            <h5>Keberhasilan perusahaan naik terus menerus setiap tahunnya</h5>
                            <p>Kami telah berhasil membantu 5 negara menjadi lebih baik</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#companyCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#companyCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="testimonial-section" id="testimonial">
        <div class="container">
            <h2 class="text-center section-title text-white">Testimonial Our Clien</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="testimonial-card">
                        <img src="https://i.pinimg.com/736x/4d/56/07/4d5607f361ddfd6831f3eeca3af00b21.jpg" alt="Testimoni 1"
                            class="testimonial-img mx-auto d-block">
                        <div class="rating text-center">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="text-center">"EcoGreen Saya sangat senang menggunakan produk dari EcoGreen. 
                        Tidak hanya berkualitas, tetapi juga ramah lingkungan! Senang bisa berkontribusi untuk bumi yang lebih hijau"</p>
                        <h5 class="text-center mt-3">Bella</h5>
                        <p class="text-muted text-center">Customer</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="testimonial-card">
                        <img src="https://i.pinimg.com/736x/70/93/67/7093670c576a5d4a154d225f32740ac5.jpg" alt="Testimoni 2"
                            class="testimonial-img mx-auto d-block">
                        <div class="rating text-center">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="text-center">"Kami bangga bisa bekerja sama dengan EcoGreen dalam gerakan penghijauan.
                        Mereka benar-benar berkomitmen terhadap keberlanjutan, dari bahan baku hingga proses produksinya."</p>
                        <h5 class="text-center mt-3">Felix Benito</h5>
                        <p class="text-muted text-center">Manager PT.FREEPORT</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="testimonial-card">
                        <img src="https://i.pinimg.com/736x/52/af/ed/52afedf0729826df7e323ff6afe80504.jpg" alt="Testimoni 3"
                            class="testimonial-img mx-auto d-block">
                        <div class="rating text-center">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p class="text-center">"Langkah yang dilakukan oleh EcoGreen sangat inspiratif! 
                            Program penghijauan mereka membantu mengurangi jejak karbon dan meningkatkan kesadaran masyarakat akan pentingnya menjaga lingkungan."</p>
                        <h5 class="text-center mt-3">Lisa Blackpink</h5>
                        <p class="text-muted text-center">Manajer Gojek</p>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>