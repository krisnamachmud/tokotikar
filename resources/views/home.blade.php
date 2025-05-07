@extends('layout')

@section('content')
  
    <!-- Hero Start -->
     <link rel="stylesheet" href="./frontend/css/style.css" rel="stylesheet">
    <div class="container-fluid py-5 mb-5 mt-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-md-12 col-lg-7">
                    <h4 class="mb-3 text-secondary">100% Khas Lamongan</h4>
                    <h1 class="mb-5 display-3 text-primary">Tikar Tradisional Berkualitas Tinggi</h1>
                </div>
                <div class="col-md-12 col-lg-5"> 
                    <div id="carouselId" class="carousel slide position-relative" data-bs-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            @foreach($categories as $category)
                            <div class="carousel-item @if($loop->iteration == 1)active @endif rounded">
                                <img src="{{ Storage::url($category->gambar) }}" class="img-fluid w-100 h-100 bg-secondary rounded"
                                    alt="First slide">
                                <a href="#" class="btn px-4 py-2 text-white rounded">{{ $category->judul }}</a>
                            </div> 
                           
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselId"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Featurs Section Start -->
    <div class="container-fluid featurs py-5">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="featurs-item text-center rounded bg-light p-4">
                        <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                            <i class="fas fa-car-side fa-3x text-white"></i>
                        </div>
                        <div class="featurs-content text-center">
                            <h5>Pengiriman Gratis</h5>
                            <p class="mb-0">Untuk pembelian di atas 300 PCS</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="featurs-item text-center rounded bg-light p-4">
                        <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                            <i class="fas fa-user-shield fa-3x text-white"></i>
                        </div>
                        <div class="featurs-content text-center">
                            <h5>Pembayaran Aman</h5>
                            <p class="mb-0">100% transaksi terjamin</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="featurs-item text-center rounded bg-light p-4">
                        <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                            <i class="fas fa-exchange-alt fa-3x text-white"></i>
                        </div>
                        <div class="featurs-content text-center">
                            <p class="mb-0">Jaminan pengembalian 30 hari</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="featurs-item text-center rounded bg-light p-4">
                        <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                            <i class="fa fa-phone-alt fa-3x text-white"></i>
                        </div>
                        <div class="featurs-content text-center">
                            <h5>Layanan 24/7</h5>
                            <p class="mb-0">Dukungan pelanggan setiap saat</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Featurs Section End -->

    <!-- Banner Section Start-->
    <div class="container-fluid banner bg-secondary my-5">
        <div class="container py-5">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="py-4">
                        <h1 class="display-3 text-white">Promo Terbaik Bulan Ini</h1>
                        <p class="mb-4 text-dark">Dapatkan tikar Lamongan dengan berbagai corak dan ukuran dengan harga spesial.
                        </p>
                        <a href="#" class="banner-btn btn border-2 border-white rounded-pill text-dark py-3 px-5">Beli
                            Sekarang</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="position-relative">
                        <img src="img/tikar-promo.png" class="img-fluid w-100 rounded" alt="">
                        <div class="price-badge position-absolute">
                            <div class="d-flex align-items-center">
                                <!-- <span class="discount-text me-2">100</span> -->
                                <div class="price-details">
                                    <span class="price">Rp 68.000</span>
                                    <span class="unit">/PCS</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Section End -->


    <!-- Bestsaler Product Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5" style="max-width: 700px;">
                <h1 class="display-4">Koleksi Tikar Kami</h1>
                <p>Berbagai pilihan tikar khas Lamongan dengan kualitas terbaik.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="text-center">
                        <img src="img/tikar-item-1.jpg" class="img-fluid rounded" alt="">
                        <div class="py-4">
                            <a href="shop-detail.html" class="h5">Tikar Motif Merek Alibaba</a>
                            <h4 class="mb-3 mt-2">Rp 70.000</h4>
                            <a href="shop-detail.html"
                                class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                    class="fa fa-eye me-2 text-primary"></i> Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="text-center">
                        <img src="img/tikar-item-2.jpg" class="img-fluid rounded" alt="">
                        <div class="py-4">
                            <a href="shop-detail.html" class="h5">Tikar Motif Merek Angsa</a>
                            <h4 class="mb-3 mt-2">Rp 90.000</h4>
                            <a href="shop-detail.html"
                                class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                    class="fa fa-eye me-2 text-primary"></i> Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="text-center">
                        <img src="img/tikar-item-3.jpg" class="img-fluid rounded" alt="">
                        <div class="py-4">
                            <a href="shop-detail.html" class="h5">Tikar Merek Anugrah</a>
                            <h4 class="mb-3 mt-2">Rp 70.000</h4>
                            <a href="shop-detail.html"
                                class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                    class="fa fa-eye me-2 text-primary"></i> Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="text-center">
                        <img src="img/tikar-item-4.jpg" class="img-fluid rounded" alt="">
                        <div class="py-2">
                            <a href="shop-detail.html" class="h5">Tikar Motif Merek Elresas</a>
                            <h4 class="mb-3 mt-2">Rp 85.000</h4>
                            <a href="shop-detail.html"
                                class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                    class="fa fa-eye me-2 text-primary"></i> Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bestsaler Product End -->

    <!-- Tastimonial Start -->
    <div class="container-fluid testimonial py-5">
        <div class="container py-5">
            <div class="testimonial-header text-center">
                <h4 class="text-primary">Testimonial</h4>
                <h1 class="display-5 mb-5 text-dark">Apa Yang Klien Kami Katakan</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item img-border-radius bg-light rounded p-4">
                    <div class="position-relative">
                        <i class="fa fa-quote-right fa-2x text-secondary position-absolute"
                            style="bottom: 30px; right: 0;"></i>
                        <div class="mb-4 pb-4 border-bottom border-secondary">
                            <p class="mb-0">
                                Tikar Lamongan sangat nyaman digunakan dan tahan lama. Motifnya juga indah sekali.
                            </p>
                        </div>
                        <div class="d-flex align-items-center flex-nowrap">
                            <div class="bg-secondary rounded">
                                <img src="img/testimonial-1.jpg" class="img-fluid rounded"
                                    style="width: 100px; height: 100px;" alt="">
                            </div>
                            <div class="ms-4 d-block">
                                <h4 class="text-dark">Budiman</h4>
                                <p class="m-0 pb-3">Pengusaha</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item img-border-radius bg-light rounded p-4">
                    <div class="position-relative">
                        <i class="fa fa-quote-right fa-2x text-secondary position-absolute"
                            style="bottom: 30px; right: 0;"></i>
                        <div class="mb-4 pb-4 border-bottom border-secondary">
                            <p class="mb-0">
                                Pengiriman cepat dan tikarnya berkualitas tinggi. Saya sangat puas dengan pembelian ini.
                            </p>
                        </div>
                        <div class="d-flex align-items-center flex-nowrap">
                            <div class="bg-secondary rounded">
                                <img src="img/testimonial-2.jpg" class="img-fluid rounded"
                                    style="width: 100px; height: 100px;" alt="">
                            </div>
                            <div class="ms-4 d-block">
                                <h4 class="text-dark">Sunarti</h4>
                                <p class="m-0 pb-3">Ibu Rumah Tangga</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item img-border-radius bg-light rounded p-4">
                    <div class="position-relative">
                        <i class="fa fa-quote-right fa-2x text-secondary position-absolute"
                            style="bottom: 30px; right: 0;"></i>
                        <div class="mb-4 pb-4 border-bottom border-secondary">
                            <p class="mb-0">
                                Saya suka sekali dengan tikar khas Lamongan ini. Bagus untuk dekorasi dan nyaman dipakai.
                            </p>
                        </div>
                        <div class="d-flex align-items-center flex-nowrap">
                            <div class="bg-secondary rounded">
                                <img src="img/testimonial-3.jpg" class="img-fluid rounded"
                                    style="width: 100px; height: 100px;" alt="">
                            </div>
                            <div class="ms-4 d-block">
                                <h4 class="text-dark">Haryanto</h4>
                                <p class="m-0 pb-3">Guru</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tastimonial End -->
    
    
@endsection