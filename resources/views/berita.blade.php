@extends('base')

@section('content')
    <div class="sub-content-image">
        <img src="{{ asset('images/local/background-landingpage.jpg') }}" class="image-as-bg">
    </div>

    <div class="sub-hero">


        <p class="title" data-aos="fade-right" data-aos-anchor-placement="center-bottom" data-aos-duration="300">
            Berita </p>
        <p class="sub" data-aos="fade-left" data-aos-anchor-placement="center-bottom" data-aos-delay="200"
            data-aos-duration="600">Raja Sulaiman Express</p>
        <p class="isi" data-aos="fade-right" data-aos-anchor-placement="center-bottom" data-aos-delay="400"
            data-aos-duration="900">Solusi layanan lengkap pengiriman barang anda </p>
    </div>




    <div class="container">
        <div class="artikel-terbaru mt-5">

            <p class="judul-content mb-5" data-aos="fade-down" data-aos-easing="ease-in-back" data-aos-delay="0"
                data-aos-duration="300">Berita Terbaru</p>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="item " data-aos="fade-up" data-aos-easing="ease-in-back" data-aos-delay="0"
                        data-aos-duration="1000">

                        <img src="{{ asset('images/local/pengirimanudara.jpg') }}" />
                        <div class="content">
                            <p class="judul">Apa itu perusahaan Indonesia Freight Forwarding di Indonesia adalah
                                perusahaan untuk mengatur transportasi
                                komoditas atas permintaan pelanggan ke lokasi yang telah ditentukan</p>
                            <p class="isi">Freight forwarder adalah perusahaan untuk mengatur transportasi
                                komoditas atas permintaan pelanggan ke lokasi yang telah ditentukan ...</p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="item" data-aos="fade-up" data-aos-easing="ease-in-back" data-aos-delay="0"
                        data-aos-duration="1000">

                        <img src="{{ asset('images/local/pengirimanlaut.jpg') }}" />
                        <div class="content">
                            <p class="judul">Apa itu perusahaan Indonesia Freight Forwarding di Indonesia</p>
                            <p class="isi">Freight forwarder adalah perusahaan untuk mengatur transportasi
                                komoditas atas permintaan pelanggan ke lokasi yang telah ditentukan ...

                                adalah perusahaan untuk mengatur transportasi
                                komoditas atas permintaan pelanggan ke lokasi yang telah ditentukanadalah perusahaan
                                untuk mengatur transportasi
                                komoditas atas permintaan pelanggan ke lokasi yang telah ditentukanadalah perusahaan
                                untuk mengatur transportasi
                                komoditas atas permintaan pelanggan ke lokasi yang telah ditentukan
                            </p>

                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="item" data-aos="fade-up" data-aos-easing="ease-in-back" data-aos-delay="0"
                        data-aos-duration="1000">

                        <img src="{{ asset('images/local/pengirimandarat.jpg') }}" />
                        <div class="content">
                            <p class="judul">Apa itu perusahaan Indonesia Freight Forwarding di Indonesia</p>
                            <p class="isi">Freight forwarder adalah perusahaan untuk mengatur transportasi
                                komoditas atas permintaan pelanggan ke lokasi yang telah ditentukan ...</p>

                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>




@endsection('content')
