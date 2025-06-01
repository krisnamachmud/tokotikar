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
                                <a href="{{ route('products.category', $category->id) }}" class="btn px-4 py-2 text-white rounded">{{ $category->judul }}</a>
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
                            <h5>Jaminan Pengembalian</h5>
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
                        <a href="{{ route('products.index') }}" class="banner-btn btn border-2 border-white rounded-pill text-dark py-3 px-5">Beli
                            Sekarang</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="position-relative">
                        <img src="{{ asset('images/tikaralibaba1.png') }}" class="img-fluid w-100 rounded" alt="">
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
                @if(isset($products) && $products->count() > 0)
                    @foreach($products->take(4) as $product)
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="text-center">
                            <img src="{{ $product->gambar ? Storage::url($product->gambar) : asset('img/tikar-default.jpg') }}" class="img-fluid rounded" alt="{{ $product->nama }}">
                            <div class="py-4">
                                <a href="{{ route('products.show', $product->id) }}" class="h5">{{ $product->nama }}</a>
                                <h4 class="mb-3 mt-2">Rp {{ number_format($product->harga, 0, ',', '.') }}</h4>
                                <a href="{{ route('products.show', $product->id) }}"
                                    class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                        class="fa fa-eye me-2 text-primary"></i> Detail</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @else
                    <!-- Static fallback products if no data from database -->
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="text-center">
                            <img src="{{ asset('images/tikaralibaba.jpg') }}" class="img-fluid rounded" alt="">
                            <div class="py-4">
                                <a href="{{ route('products.show', 1) }}" class="h5">Tikar Motif Merek Alibaba</a>
                                <h4 class="mb-3 mt-2">Rp 70.000</h4>
                                <a href="{{ route('products.show', 1) }}"
                                    class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                        class="fa fa-eye me-2 text-primary"></i> Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="text-center">
                            <img src="{{ asset('images/tikarangsa.jpg') }}" class="img-fluid rounded" alt="">
                            <div class="py-4">
                                <a href="{{ route('products.show', 2) }}" class="h5">Tikar Motif Merek Angsa</a>
                                <h4 class="mb-3 mt-2">Rp 90.000</h4>
                                <a href="{{ route('products.show', 2) }}"
                                    class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                        class="fa fa-eye me-2 text-primary"></i> Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="text-center">
                            <img src="{{ asset('images/tikaranugrah.jpg') }}" class="img-fluid rounded" alt="">
                            <div class="py-4">
                                <a href="{{ route('products.show', 3) }}" class="h5">Tikar Merek Anugrah</a>
                                <h4 class="mb-3 mt-2">Rp 70.000</h4>
                                <a href="{{ route('products.show', 3) }}"
                                    class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                        class="fa fa-eye me-2 text-primary"></i> Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="text-center">
                            <img src="{{ asset('images/tikarelresas.jpg') }}" class="img-fluid rounded" alt="">
                            <div class="py-2">
                                <a href="{{ route('products.show', 4) }}" class="h5">Tikar Motif Merek Elresas</a>
                                <h4 class="mb-3 mt-2">Rp 85.000</h4>
                                <a href="{{ route('products.show', 4) }}"
                                    class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                        class="fa fa-eye me-2 text-primary"></i> Detail</a>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!-- Bestsaler Product End -->

    <!-- Testimonial Form Section Start -->
    <div class="container-fluid testimonial-form py-5 bg-light">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center mb-5">
                        <h4 class="text-primary">Tambah Testimonial</h4>
                        <h1 class="display-5 mb-4">Bagikan Pengalaman Anda</h1>
                    </div>
                    
                    @if(session('success'))
                        <div class="alert alert-success text-center mb-4">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="bg-white rounded p-4 p-sm-5 shadow-sm">
                        <form action="{{ route('testimonials.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Nama Lengkap" value="{{ old('nama') }}" required>
                                        <label for="nama">Nama Lengkap</label>
                                        @error('nama')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control @error('pekerjaan') is-invalid @enderror" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan" value="{{ old('pekerjaan') }}">
                                        <label for="pekerjaan">Pekerjaan</label>
                                        @error('pekerjaan')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control @error('pesan') is-invalid @enderror" id="pesan" name="pesan" placeholder="Testimonial Anda" style="height: 150px" required>{{ old('pesan') }}</textarea>
                                        <label for="pesan">Testimonial Anda</label>
                                        @error('pesan')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="photo" class="form-label">Foto Profil</label>
                                        <input class="form-control @error('photo') is-invalid @enderror" type="file" id="photo" name="photo" accept="image/*" required>
                                        <small class="text-muted">Format: JPG, PNG. Ukuran maks: 2MB</small>
                                        @error('photo')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-12 text-center">
                                    <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Kirim Testimonial</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Form Section End -->
    
@endsection