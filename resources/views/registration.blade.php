@extends('layout.mainweb')

@section('title')
    PIMUS 11 - Registration
@endsection

@section('style')
    <link rel="stylesheet" href="{{ url('/assets/css/style.css') }}">
@endsection

@section('content')
    {{-- Registration card --}}
    <div id="portfolio" class="our-portfolio section" style="margin-bottom: 80px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 mt-5">
                    <div class="section-heading  wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <h2><em>Cabang</em> <span>Lomba</span></h2>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-lg-3 col-sm-6 mb-4">
                    <a href="{{ url('/registration/cabang?cabang=1') }}">
                        <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                            <div class="hidden-content">
                                <h4>PILMAPRES</h4>
                                <p>Pemilihan Mahasiswa Berprestasi Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="showed-content">
                                <img src="assets/images/portfolio-image.png" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="{{ url('/registration/cabang?cabang=2') }}">
                        <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                            <div class="hidden-content">
                                <h4>Debat Inggris</h4>
                                <p>Debat Bahasa Inggris Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                            <div class="showed-content">
                                <img src="assets/images/portfolio-image.png" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="{{ url('/registration/cabang?cabang=3') }}">
                        <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="hidden-content">
                                <h4>Debat Indonesia</h4>
                                <p>Debat Bahasa Indonesia adalah Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="showed-content">
                                <img src="assets/images/portfolio-image.png" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="{{ url('/registration/cabang?cabang=4') }}">
                        <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                            <div class="hidden-content">
                                <h4>KTI</h4>
                                <p>Karya Tulis Ilmiah adalah Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="showed-content">
                                <img src="assets/images/portfolio-image.png" alt="">
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-lg-3 col-sm-6 mb-4">
                    <a href="{{ url('/registration/cabang?cabang=5') }}">
                        <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                            <div class="hidden-content">
                                <h4>Kompetisi MIPA</h4>
                                <p>Lorem ipsum dolor sit ameti ctetur aoi adipiscing eto.</p>
                            </div>
                            <div class="showed-content">
                                <img src="assets/images/portfolio-image.png" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="{{ url('/registration/cabang?cabang=6') }}">
                        <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                            <div class="hidden-content">
                                <h4>Video Digital Pendidikan</h4>
                                <p>Lorem ipsum dolor sit ameti ctetur aoi adipiscing eto.</p>
                            </div>
                            <div class="showed-content">
                                <img src="assets/images/portfolio-image.png" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="{{ url('/registration/cabang?cabang=7') }}">
                        <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="hidden-content">
                                <h4>Poster</h4>
                                <p>Lorem ipsum dolor sit ameti ctetur aoi adipiscing eto.</p>
                            </div>
                            <div class="showed-content">
                                <img src="assets/images/portfolio-image.png" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="{{ url('/registration/cabang?cabang=8') }}">
                        <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                            <div class="hidden-content">
                                <h4>PKM-Riset</h4>
                                <p>Lorem ipsum dolor sit ameti ctetur aoi adipiscing eto.</p>
                            </div>
                            <div class="showed-content">
                                <img src="assets/images/portfolio-image.png" alt="">
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-lg-3 col-sm-6 mb-4">
                    <a href="{{ url('/registration/cabang?cabang=9') }}">
                        <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                            <div class="hidden-content">
                                <h4>PKM-Kewirausahaan</h4>
                                <p>Lorem ipsum dolor sit ameti ctetur aoi adipiscing eto.</p>
                            </div>
                            <div class="showed-content">
                                <img src="assets/images/portfolio-image.png" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="{{ url('/registration/cabang?cabang=10') }}">
                        <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                            <div class="hidden-content">
                                <h4>PKM-Karsa Cipta</h4>
                                <p>Lorem ipsum dolor sit ameti ctetur aoi adipiscing eto.</p>
                            </div>
                            <div class="showed-content">
                                <img src="assets/images/portfolio-image.png" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="{{ url('/registration/cabang?cabang=11') }}">
                        <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="hidden-content">
                                <h4>PKM-Penerapan IPTEK</h4>
                                <p>Lorem ipsum dolor sit ameti ctetur aoi adipiscing eto.</p>
                            </div>
                            <div class="showed-content">
                                <img src="assets/images/portfolio-image.png" alt="">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a href="{{ url('/registration/cabang?cabang=12') }}">
                        <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                            <div class="hidden-content">
                                <h4>PKM-Pengabdian</h4>
                                <p>Lorem ipsum dolor sit ameti ctetur aoi adipiscing eto.</p>
                            </div>
                            <div class="showed-content">
                                <img src="assets/images/portfolio-image.png" alt="">
                            </div>
                        </div>
                    </a>
                </div>
            </div>


        </div>
    </div>
    {{-- end registration card --}}
@endsection

@section('script')
    <script src="assets/js/image-slider.js"></script>
@endsection
