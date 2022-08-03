@extends('base')

@section('content')
    <div class="sub-content-image">
        <img src="{{ asset('images/local/background-landingpage.jpg') }}" class="image-as-bg">
    </div>

    <div class="sub-hero">


        <p class="title" data-aos="fade-right" data-aos-anchor-placement="center-bottom" data-aos-duration="300">
            Hubungi Kami </p>
        <p class="sub" data-aos="fade-left" data-aos-anchor-placement="center-bottom" data-aos-delay="200"
            data-aos-duration="600">Raja Sulaiman Express</p>
        <p class="isi" data-aos="fade-right" data-aos-anchor-placement="center-bottom" data-aos-delay="400"
            data-aos-duration="900">Solusi layanan lengkap pengiriman barang anda </p>
    </div>




    <div class="container">
        <div class="sub-hubungi-kami mt-5">

            <div class="row mt-5 mb-5">
                <div class="col-lg-6 col-sm-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7920.2842659193975!2d110.36020714232738!3d-6.992535498070458!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708aa5a0994abf%3A0xfbeeb9182985e5e7!2sKawasan%20Industri%20Candi!5e0!3m2!1sen!2sid!4v1657174932521!5m2!1sen!2sid"  style="border:0; width: 100%; height: 500px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="col-lg-6 col-sm-12">

                    <p class="judul">Hubungi Kami</p>

                    <div class="d-flex mb-3">
                        <i class="material-icons menu-icon me-3">home</i>
                        <div>
                            <p class="info fw-bold">Alamat Kantor</p>
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
                            <p class="info fw-bold">Email</p>
                            <p class="info">info@rajasulaiman.com</p>

                        </div>
                    </div>

                    <div class="d-flex mb-3">
                        <i class="material-icons menu-icon me-3">call</i>
                        <div>
                            <p class="info fw-bold">Telepon</p>
                            <p class="info">+62 894 1924 4127</p>

                        </div>
                    </div>

                    <p class="judul">Social Media Kami</p>
                    <a href="https://www.facebook.com/pages/category/Product-Service/SUKMATRIP-794165044301310/">
                        <i class="fa fa-facebook-square fa-lg facebookbutton"></i></a>
                    <a href="https://www.instagram.com/sukmatrip_/"> <i
                            class="fa fa-instagram  fa-lg instagrambutton"></i></a>
                </div>

            </div>

        </div>
    </div>






@endsection('content')
