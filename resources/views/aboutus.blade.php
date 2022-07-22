@extends('layout.mainweb')

@section('title')
    PIMUS 11 - About Us
@endsection

@section('style')
    <link rel="stylesheet" href="{{ url('/assets/css/style.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
@endsection

@section('content')
    <!-- image slider -->
    <section id="slider">
        <div class="image-slider">
            <div class="slide active">
                <img src="{{ url('/assets/images/slider/1.jpg') }}" alt="1">
                <div class="info">
                    <h2>Slide 01</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem maiores cum, molestias aliquam at
                        voluptatibus.</p>
                </div>
            </div>
            <div class="slide">
                <img src="{{ url('/assets/images/slider/2.jpg') }}" alt="2">
                <div class="info">
                    <h2>Slide 02</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem maiores cum, molestias aliquam at
                        voluptatibus.</p>
                </div>
            </div>
            <div class="slide">
                <img src="{{ url('/assets/images/slider/3.jpg') }}" alt="3">
                <div class="info">
                    <h2>Slide 03</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem maiores cum, molestias aliquam at
                        voluptatibus.</p>
                </div>
            </div>
            <div class="slide">
                <img src="{{ url('/assets/images/slider/4.jpg') }}" alt="4">
                <div class="info">
                    <h2>Slide 04</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem maiores cum, molestias aliquam at
                        voluptatibus.</p>
                </div>
            </div>
            <div class="slide">
                <img src="{{ url('/assets/images/slider/5.jpg') }}" alt="5">
                <div class="info">
                    <h2>Slide 05</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem maiores cum, molestias aliquam at
                        voluptatibus.</p>
                </div>
            </div>
            <div class="slide">
                <img src="{{ url('/assets/images/slider/6.jpg') }}" alt="6">
                <div class="info">
                    <h2>Slide 06</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem maiores cum, molestias aliquam at
                        voluptatibus.</p>
                </div>
            </div>
            <div class="slide">
                <img src="{{ url('/assets/images/slider/7.jpg') }}" alt="7">
                <div class="info">
                    <h2>Slide 07</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem maiores cum, molestias aliquam at
                        voluptatibus.</p>
                </div>
            </div>
            <div class="slide">
                <img src="{{ url('/assets/images/slider/8.jpg') }}" alt="8">
                <div class="info">
                    <h2>Slide 08</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem maiores cum, molestias aliquam at
                        voluptatibus.</p>
                </div>
            </div>

            <div class="navigation">
                <div class="selector active"></div>
                <div class="selector"></div>
                <div class="selector"></div>
                <div class="selector"></div>
                <div class="selector"></div>
                <div class="selector"></div>
                <div class="selector"></div>
                <div class="selector"></div>
            </div>
        </div>
    </section>
    <!-- end image slider -->

    <!-- FAQ -->
    <section id="faq">
        <div class="container-faq" data-aos="zoom-in">
            <h2>Frequently Asked Questions (FAQs)</h2>
            <div class="accordion-faq">
                <div class="icon"></div>
                <h5>Apakah tiap fakultas wajib memberikan 1 perwakilan?</h5>
            </div>
            <div class="panel">
                <p>Iya, namun disesuaikan kembali pada pedoman masing-masing cabang perlombaan.</p>
            </div>

            <div class="accordion-faq">
                <div class="icon"></div>
                <h5>Apakah pemenang PIMUS tahun sebelumnya boleh mengikuti PIMUS tahun ini?</h5>
            </div>
            <div class="panel">
                <p>Tidak.</p>
            </div>

            <div class="accordion-faq">
                <div class="icon"></div>
                <h5>Apakah dalam satu tim diperbolehkan terdiri dari fakultas yang berbeda?</h5>
            </div>
            <div class="panel">
                <p>Boleh kecuali perwakilan tim tiap fakultas.</p>
            </div>

            <div class="accordion-faq">
                <div class="icon"></div>
                <h5>Apakah boleh mengikuti lebih dari 1 cabang PIMUS?</h5>
            </div>
            <div class="panel">
                <p>Boleh, tapi dari 2 (dua) cabang tidak boleh menjadi ketua.</p>
            </div>

            <div class="accordion-faq">
                <div class="icon"></div>
                <h5>Apa benefit yang didapatkan ketika mengikuti PIMUS?</h5>
            </div>
            <div class="panel">
                <p>Kalian bisa mendapat pengalaman, berkesempatan menjadi perwakilan Universitas Surabaya di ajang
                    perlombaan nasional maupun internasional. Selain itu, kalian juga bisa mendapatkan hadiah dengan total
                    puluhan juta rupiah.
                </p>
            </div>
        </div>
    </section>
    <!-- End FAQ -->
@endsection


@section('script')
    <script src="assets/js/image-slider.js"></script>

    <script>
        AOS.init();
    </script>
@endsection
