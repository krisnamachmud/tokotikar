@extends('layout')

@section('content')
      <!-- Single Page Header start -->
      <div class="container-fluid page-header py-5">
        <h1 class="text-center text-white display-6">belanja</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-white">belanja</li>
        </ol>
    </div>
    <!-- Single Page Header End -->


    <!-- Fruits Shop Start-->
    <div class="container-fluid fruite py-5">
        <div class="container py-5">
            <h1 class="mb-4">Tikar Lamongan</h1>
            <div class="row g-4">
                <div class="col-lg-12">
                    <div class="row g-4">
                        <div class="col-lg-3">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <h4>merek</h4>
                                        <ul class="list-unstyled fruite-categorie">
                                            <li>
                                                <div class="d-flex justify-content-between fruite-name">
                                                    <a href="#"><i class="fas fa-apple-alt me-2"></i>Alibaba</a>
                                                    <span>(3)</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between fruite-name">
                                                    <a href="#"><i class="fas fa-apple-alt me-2"></i>Angsa</a>
                                                    <span>(5)</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between fruite-name">
                                                    <a href="#"><i class="fas fa-apple-alt me-2"></i>Anugrah</a>
                                                    <span>(2)</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between fruite-name">
                                                    <a href="#"><i class="fas fa-apple-alt me-2"></i>Elresas</a>
                                                    <span>(8)</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between fruite-name">
                                                    <a href="#"><i class="fas fa-apple-alt me-2"></i>puma</a>
                                                    <span>(8)</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between fruite-name">
                                                    <a href="#"><i class="fas fa-apple-alt me-2"></i>Nizas</a>
                                                    <span>(8)</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between fruite-name">
                                                    <a href="#"><i class="fas fa-apple-alt me-2"></i>Macan Putih</a>
                                                    <span>(8)</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between fruite-name">
                                                    <a href="#"><i class="fas fa-apple-alt me-2"></i>Andalan</a>
                                                    <span>(8)</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex justify-content-between fruite-name">
                                                    <a href="#"><i class="fas fa-apple-alt me-2"></i>Excellent</a>
                                                    <span>(8)</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="position-relative">
                                        <img src="img/banner-fruits.jpg" class="img-fluid w-100 rounded" alt="">
                                        <div class="position-absolute"
                                            style="top: 50%; right: 10px; transform: translateY(-50%);">
                                            <h3 class="text-secondary fw-bold">Serbaguna </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="row g-4 justify-content-center">
                                <div class="col-md-6 col-lg-6 col-xl-4">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img">
                                            <img src="img/fruite-item-5.jpg" class="img-fluid w-100 rounded-top" alt="">
                                        </div>
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                            style="top: 10px; left: 10px;">Tikar</div>
                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                            <h4>Anugrah</h4>
                                            <div class="d-flex justify-content-between flex-lg-wrap">
                                                <p class="text-dark fs-5 fw-bold mb-2">Rp70.000 /pcs</p>
                                                <a href="shop-detail.html"
                                                    class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                        class="fa fa-eye me-2 text-primary"></i> Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-4">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img">
                                            <img src="img/fruite-item-5.jpg" class="img-fluid w-100 rounded-top" alt="">
                                        </div>
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                            style="top: 10px; left: 10px;">Tikar</div>
                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                            <h4>Alibaba</h4>
                                            <div class="d-flex justify-content-between flex-lg-wrap">
                                                <p class="text-dark fs-5 fw-bold mb-2">Rp70.000 /pcs</p>
                                                <a href="shop-detail.html"
                                                    class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                        class="fa fa-eye me-2 text-primary"></i> Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-4">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img">
                                            <img src="img/fruite-item-2.jpg" class="img-fluid w-100 rounded-top" alt="">
                                        </div>
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                            style="top: 10px; left: 10px;">Tikar</div>
                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                            <h4>Angsa</h4>
                                            <div class="d-flex justify-content-between flex-lg-wrap">
                                                <p class="text-dark fs-5 fw-bold mb-2">Rp 90.000 /pcs</p>
                                                <a href="shop-detail.html"
                                                    class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                        class="fa fa-eye me-2 text-primary"></i> Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-4">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img">
                                            <img src="img/fruite-item-4.jpg" class="img-fluid w-100 rounded-top" alt="">
                                        </div>
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                            style="top: 10px; left: 10px;">Tikar</div>
                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                            <h4>Elresas</h4>
                                            <div class="d-flex justify-content-between flex-lg-wrap">
                                                <p class="text-dark fs-5 fw-bold mb-2">Rp85.000 /pcs</p>
                                                <a href="shop-detail.html"
                                                    class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                        class="fa fa-eye me-2 text-primary"></i> Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-4">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img">
                                            <img src="img/fruite-item-3.jpg" class="img-fluid w-100 rounded-top" alt="">
                                        </div>
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                            style="top: 10px; left: 10px;">Tikar</div>
                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                            <h4>Puma</h4>
                                            <div class="d-flex justify-content-between flex-lg-wrap">
                                                <p class="text-dark fs-5 fw-bold mb-2">Rp 80.000</p>
                                                <a href="shop-detail.html"
                                                    class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                        class="fa fa-eye me-2 text-primary"></i> Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-4">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img">
                                            <img src="img/fruite-item-1.jpg" class="img-fluid w-100 rounded-top" alt="">
                                        </div>
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                            style="top: 10px; left: 10px;">Tikar</div>
                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                            <h4>Nizas</h4>
                                            <div class="d-flex justify-content-between flex-lg-wrap">
                                                <p class="text-dark fs-5 fw-bold mb-2">Rp70.000</p>
                                                <a href="shop-detail.html"
                                                    class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                        class="fa fa-eye me-2 text-primary"></i> Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-4">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img">
                                            <img src="img/fruite-item-2.jpg" class="img-fluid w-100 rounded-top" alt="">
                                        </div>
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                            style="top: 10px; left: 10px;">Tikar</div>
                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                            <h4>Macan Putih</h4>
                                            <div class="d-flex justify-content-between flex-lg-wrap">
                                                <p class="text-dark fs-5 fw-bold mb-2">Rp65.000</p>
                                                <a href="shop-detail.html"
                                                    class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                        class="fa fa-eye me-2 text-primary"></i> Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-4">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img">
                                            <img src="img/fruite-item-5.jpg" class="img-fluid w-100 rounded-top" alt="">
                                        </div>
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                            style="top: 10px; left: 10px;">Tikar</div>
                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                            <h4>    Andalan</h4>
                                            <div class="d-flex justify-content-between flex-lg-wrap">
                                                <p class="text-dark fs-5 fw-bold mb-2">Rp75.000</p>
                                                <a href="shop-detail.html"
                                                    class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                        class="fa fa-eye me-2 text-primary"></i> Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-4">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img">
                                            <img src="img/fruite-item-1.jpg" class="img-fluid w-100 rounded-top" alt="">
                                        </div>
                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
                                            style="top: 10px; left: 10px;">Tikar</div>
                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                            <h4>Excellent</h4>
                                            <div class="d-flex justify-content-between flex-lg-wrap">
                                                <p class="text-dark fs-5 fw-bold mb-2">Rp75.000</p>
                                                <a href="shop-detail.html"
                                                    class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                        class="fa fa-eye me-2 text-primary"></i> Detail</a>
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
    </div>
    <!-- Fruits Shop End-->

@endsection