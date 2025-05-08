@extends('layout')

@section('content')

       <!-- Single Page Header start -->
       <div class="container-fluid page-header py-5">
        <h1 class="text-center text-white display-6">Contact</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-white">Contact</li>
        </ol>
    </div>
    <!-- Single Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid contact py-5">
        <div class="container py-5">
            <div class="p-5 bg-light rounded">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="text-center mx-auto" style="max-width: 700px;">
                            <h1 class="text-primary">Get in touch</h1>
                            <p class="mb-4">The contact form is currently inactive. Get a functional and working contact
                                form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code
                                and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 d-flex p-4 rounded mb-4 bg-white">
                            <i class="fas fa-map-marker-alt fa-2x text-primary me-4"></i>
                            <div>
                                <h4>Alamat</h4>
                                <p class="mb-2">Dsn. Kemendung Ds. Jatirejo Kec. Tikung Kab. Lamongan Jawa Timur</p>
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex p-4 rounded mb-4 bg-white">
                            <i class="fas fa-envelope fa-2x text-primary me-4"></i>
                            <div>
                                <h4>email</h4>
                                <p class="mb-2">krisnamachmud@gmail.com</p>
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex p-4 rounded bg-white">
                            <i class="fa fa-phone-alt fa-2x text-primary me-4"></i>
                            <div>
                                <h4>Telephone</h4>
                                <p class="mb-2">081249889307</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="h-100 rounded">
                            <iframe class="rounded w-100" style="height: 400px;"
                                src="https://www.bing.com/maps?&mepi=134~~Unknown~Address_Link&ty=18&q=Alibaba%20Collection&ss=ypid.YN7999x13411941156660169028&ppois=-7.142401218414307_112.42121887207031_Alibaba%20Collection_YN7999x13411941156660169028~&cp=-7.142401~112.421219&v=2&sV=1&FORM=MPSRPL"
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

@endsection