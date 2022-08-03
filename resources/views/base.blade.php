<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Radja Sulaiman Express - Jasa Pengiriman Barang Jalur Darat, Laut, Udara</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/appstyle/genosstyle-landingpage.1.0.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/appstyle/sukmatrip.css') }}" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- <link rel="stylesheet"
    href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" /> --}}

    {{-- ICON --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('datatable/datatables.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('vitalets-bootstrap-datepicker/css/datepicker.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('aos-master/dist/aos.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('slick-1.8.1/slick/slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('slick-1.8.1/slick/slick-theme.css') }}" />
</head>

<body style="position: relative">


    <div class="">
        <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-transparent " style="height: 4em; ">
            <div class="container">
                <a class="navbar-brand text-xl text-primary" href="#" style=" font-weight: bold"><img
                        style="height: 2em" src="{{ asset('images/local/logo.png') }}"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto text-right d-flex flex-column ">
                        <div class="d-block ms-auto pb-2 pt-2 hide-when-scrolled">
                            <i class='fa fa-facebook sosmed-icon-nav fb'></i>
                            <i class='fa fa-instagram sosmed-icon-nav ig'></i>
                            <i class='fa fa-twitter sosmed-icon-nav tw'></i>
                            <i class='fa fa-whatsapp sosmed-icon-nav wa'></i>
                            <a class="navitem">Dapatkan Penawaran</a>
                        </div>
                        <div class="d-block ms-auto mb-2">
                            <a class="text-sm ms-2   navitem" href="/">HOME</a>
                            <li class="nav-item dropdown d-inline">
                                <a class=" text-sm ms-2  dropdown-toggle navitem" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false" href="/gallery">LAYANAN KAMI</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="/layanan">Pengiriman Udara</a></li>
                                    <li><a class="dropdown-item" href="#">Pengiriman Laut</a></li>
                                    <li><a class="dropdown-item" href="#">Pengiriman Darat</a></li>
                                    <li><a class="dropdown-item" href="#">Bea Cukai</a></li>
                                    <li><a class="dropdown-item" href="#">Jasa Pergudangan</a></li>
                                    <li><a class="dropdown-item" href="#">Project Handling</a></li>
                                </ul>
                            </li>
                            <a class=" text-sm ms-2   navitem" href="/tentang-kami">TENTANG KAMI</a>
                            <a class=" text-sm ms-2   navitem" href="/hubungi-kami">HUBUNGI KAMI</a>
                            <a class=" text-sm ms-2   navitem" href="/karir">KARIR</a>
                            <a class=" text-sm ms-2   navitem" href="/berita">BERITA</a>
                        </div>

                    </div>
                </div>
            </div>
        </nav>

        <div class="content-wrapper">
            @yield('content')
        </div>

        <div class="dapatkan-penawaran pb-5">
            <div class="image-as-bg"
                style="background-image: url({{ asset('images/local/dapatkanpenawaranbg.jpg') }})">
            </div>
            <img class="mbake" src="{{ asset('images/local/mbake.png') }}" />

            <div class="form-penawan" data-aos="fade-up" data-aos-easing="ease-in-back" data-aos-delay="0"
                data-aos-duration="1000">
                <p class="judul-content">Dapatkan Penawaran</p>
                <a href="#"><img class="wa" src="{{ asset('images/local/wa.png') }}" /></a>

            </div>
        </div>


        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <img class="logo" src="{{ asset('images/local/logo-perusahaan.png') }}" />
                        <p class="keterangan">Jasa Internasional Forwarding, Kargo serta Logistik terpercaya di
                            Indonesia. Melayani lebih dari ratusan pelanggan dengan berbagai macam tujuan populer
                            internasional seperti China, Singapura, Malaysia, Eropa, Amerika dan Australia.</p>
                        <p class="keterangan">Kami berkomitmen untuk memberikan layanan dengan harga terbaik dan
                            transparan serta konsultasi pengirman kargo dan Project Handling.</p>
                    </div>
                    <div class="col-lg-2 col-sm-12">
                        <p class="judul">Kontak Kami</p>
                        <div class="d-flex mb-3">
                            <i class="material-icons menu-icon me-3">home</i>
                            <div>
                                <p class="info">Jl. Radar Auri Blok B/32F Mekarsari, Cimanggis, Depok Jawa Barat,
                                    Indonesia 16452</p>
                            </div>


                        </div>

                        <div class="d-flex mb-3">
                            <i class="material-icons menu-icon me-3">schedule</i>
                            <div>
                                <p class="info fw-bold">Buka Jam</p>
                                <p class="info">09.00 - 17.00</p>
                            </div>
                        </div>

                        <div class="d-flex mb-3">
                            <i class="material-icons menu-icon me-3">mail</i>
                            <div>
                                <p class="info">info@rajasulaiman.com</p>

                            </div>
                        </div>

                        <div class="d-flex mb-3">
                            <i class="material-icons menu-icon me-3">call</i>
                            <div>
                                <p class="info">+62 894 1924 4127</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-12">
                        <p class="judul">Navigasi</p>
                        <a class="navigasi">Layanan Kami</a>
                        <a class="navigasi">Tentang Kami</a>
                        <a class="navigasi">Hubungi Kami</a>
                        <a class="navigasi">Karir</a>
                        <a class="navigasi">Berita</a>
                    </div>
                    <div class="col-lg-2 col-sm-12">
                        <p class="judul">Tetap Terkoneksi</p>
                        <a href="https://www.facebook.com/pages/category/Product-Service/SUKMATRIP-794165044301310/">
                            <i class="fa fa-facebook-square fa-lg facebookbutton"></i></a>
                        <a href="https://www.instagram.com/sukmatrip_/"> <i
                                class="fa fa-instagram  fa-lg instagrambutton"></i></a>
                    </div>
                </div>



            </div>
        </footer>

        <div class="d-flex bottom-footer justify-content-center align-items-center">
            <p style="color: #C8C8C8;" class="mt-4 f08">2022 - All rights reserved
                to
                ©RajasulaimanExpress
            </p>
        </div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

    <script src="{{ asset('js/foruser.js') }}"></script>
    <script src="{{ asset('aos-master/dist/aos.js') }}"></script>
    <script src="{{ asset('slick-1.8.1/slick/slick.min.js') }}"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
