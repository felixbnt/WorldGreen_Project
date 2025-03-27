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
        --secondary-color:rgb(14, 74, 8);
        --light-color: #F8F9FA;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .navbar {
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .navbar-brand {
        font-weight: 700;
        color: var(--primary-color) !important;
    }

    .hero-section {
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://i.pinimg.com/736x/af/9b/73/af9b731bcd238263cd38379821da0384.jpg');
        background-size: cover;
        background-position: center;
        color: white;
        padding: 100px 0;
        margin-bottom: 50px;
    }

    .product-card {
        border: none;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
        margin-bottom: 30px;
    }

    .product-card:hover {
        transform: translateY(-10px);
    }

    .product-img {
        height: 200px;
        object-fit: cover;
    }

    .badge-eco {
        background-color: var(--primary-color);
        color: white;
    }

    .price {
        color: var(--primary-color);
        font-weight: 700;
        font-size: 1.2rem;
    }

    .btn-eco {
        background-color: var(--primary-color);
        color: white;
    }

    .btn-eco:hover {
        background-color: var(--secondary-color);
        color: white;
    }

    .product-detail-img {
        border-radius: 10px;
        height: 400px;
        object-fit: cover;
    }

    footer {
        background-color: var(--primary-color);
        color: white;
        padding: 50px 0 0;
        margin-top: 50px;
    }
    </style>
</head>

<body>
    <!-- Hero Section -->
    <section class="hero-section text-center">
        <div class="container">
            <h1 class="display-4 fw-bold mb-4">Produk Perusahaan Kami</h1>
            <p class="lead">Temukan Kebutuhan Kamu di Etalase Kami</p>
        </div>
    </section>

    <!-- Product Listing -->
    <section class="product-listing mb-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-6">
                    <h2 class="fw-bold">Us Product</h2>
                </div>
                <div class="col-md-6 text-md-end">
                    <div class="dropdown">
                        <button class="btn btn-outline-success dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-bs-toggle="dropdown">
                            Kategori Produk
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Semua Produk</a></li>
                            <li><a class="dropdown-item" href="#">Produk Organik</a></li>
                            <li><a class="dropdown-item" href="#">Produk Ramah Lingkungan</a></li>
                            <li><a class="dropdown-item" href="#">Produk Tumbler</a></li>
                            <li><a class="dropdown-item" href="#">Produk Bag</a></li>
                            <li><a class="dropdown-item" href="#">Produk Daur Ulang</a></li>
                            <li><a class="dropdown-item" href="#">Produk Stainless Steel</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Product 1 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card product-card h-100">
                        <img src="https://blog-backup.lindungihutan.com/wp-content/uploads/2023/02/totebag.jpg"
                            class="card-img-top product-img" alt="Tote Bag">
                        <div class="card-body">
                            <span class="badge badge-eco mb-2">Bag</span>
                            <h5 class="card-title">Tote Bag</h5>
                            <p class="card-text">Tote Bag ramah lingkungan dan tidak menggunakan bahan bahan kimia.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">Rp 60.000</span>
                                <a href="#" class="btn btn-sm btn-eco"><i class="fas fa-cart-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card product-card h-100">
                        <img src="https://blog-backup.lindungihutan.com/wp-content/uploads/2023/02/tumbler.jpg"
                            class="card-img-top product-img" alt="Sikat Bambu">
                        <div class="card-body">
                            <span class="badge badge-eco mb-2">Tumbler</span>
                            <h5 class="card-title">Tumbler</h5>
                            <p class="card-text">Efek jangka panjang penggunaan tumbler baik untuk kesehatan dibanding dengan air minum kemasan.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">Rp 100.000 </span>
                                <a href="#" class="btn btn-sm btn-eco"><i class="fas fa-cart-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card product-card h-100">
                        <img src="https://blog-backup.lindungihutan.com/wp-content/uploads/2023/02/sedotan-dan-alat-makan.jpg"
                            class="card-img-top product-img" alt="Tas Belanja">
                        <div class="card-body">
                            <span class="badge badge-eco mb-2">Stainless Steel</span>
                            <h5 class="card-title">Alat Makan dan Sedotan</h5>
                            <p class="card-text">Sedotan dan alat makan plastik sulit terurai dan merusak ekosistem lautan. .</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">Rp 50.000</span>
                                <a href="#" class="btn btn-sm btn-eco"><i class="fas fa-cart-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card product-card h-100">
                        <img src="https://blog-backup.lindungihutan.com/wp-content/uploads/2023/02/tisu-daur-ulang.jpg"
                            class="card-img-top product-img" alt="Botol Minum">
                        <div class="card-body">
                            <span class="badge badge-eco mb-2">Daur Ulang</span>
                            <h5 class="card-title">Tisu Daur Ulang</h5>
                            <p class="card-text">Tisu bahan dasar bambu lebih ramah lingkungan.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">Rp 12.000</span>
                                <a href="#" class="btn btn-sm btn-eco"><i class="fas fa-cart-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <!-- Product 5 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card product-card h-100">
                        <img src="https://blog-backup.lindungihutan.com/wp-content/uploads/2023/02/Popok-kain.jpg"
                            class="card-img-top product-img" alt="Peralatan Makan">
                        <div class="card-body">
                            <span class="badge badge-eco mb-2">Kain</span>
                            <h5 class="card-title">Popok Kain</h5>
                            <p class="card-text">Penggunaan popok kain bisa dicuci dan digunakan kembali.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">Rp 90.000</span>
                                <a href="#" class="btn btn-sm btn-eco"><i class="fas fa-cart-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 6 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card product-card h-100">
                        <img src="https://kledo.com/blog/wp-content/uploads/2024/05/spons-ramah-lingkungan.jpg"
                            class="card-img-top product-img" alt="Pembersih Rumah">
                        <div class="card-body">
                            <span class="badge badge-eco mb-2">Organik</span>
                            <h5 class="card-title">Spons</h5>
                            <p class="card-text">Dengan menggunakan bahan baku alami, spons menjadi lebih ramah lingkungan karena dapat terurai dengan baik sehingga tidak akan membahayakan lingkungan.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">Rp 15.000</span>
                                <a href="#" class="btn btn-sm btn-eco"><i class="fas fa-cart-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 7 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card product-card h-100">
                        <img src="https://i0.wp.com/blog.eigeradventure.com/wp-content/uploads/2023/06/gelas-karton.jpg?resize=696%2C516&ssl=1"
                            class="card-img-top product-img" alt="Straw Stainless">
                        <div class="card-body">
                            <span class="badge badge-eco mb-2">Organik</span>
                            <h5 class="card-title">Gelas Karton</h5>
                            <p class="card-text">Gelas kertas atau karton dengan lapisan tahan air yang terbuat dari bahan ramah lingkungan adalah opsi yang baik untuk menggantikan gelas plastik sekali pakai.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">Rp 25.000</span>
                                <a href="#" class="btn btn-sm btn-eco"><i class="fas fa-cart-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 8 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card product-card h-100">
                        <img src="https://img.id.my-best.com/content_section/beforehand_tips/fec92daa59ed2c8b9c13a62f8dcca920.jpeg?ixlib=rails-4.3.1&q=70&lossless=0&w=690&fit=max&s=ade73683483e9aad2165a77096d69dfc"
                            class="card-img-top product-img" alt="Lilin Aromaterapi">
                        <div class="card-body">
                            <span class="badge badge-eco mb-2">Ramah Lingkungan</span>
                            <h5 class="card-title">Powerbank Ramah Lingkungan</h5>
                            <p class="card-text">Menggunakan tenaga surya untuk mengisi daya dari powerbank.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">Rp 200.000</span>
                                <a href="#" class="btn btn-sm btn-eco"><i class="fas fa-cart-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <nav class="mt-5">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>



    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>