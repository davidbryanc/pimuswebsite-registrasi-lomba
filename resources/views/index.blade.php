@extends('layout.mainweb')

@section('title')
    PIMUS 11
@endsection

@section('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
@endsection

@section('content')
    <!-- Main Banner -->
    <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                                <h6><img src="{{url('assets/images/Web/Asset 1.png')}}" alt=""> </h6>
                                <h3 style="color: #ebb014 ">CONQUEROR </h3>
                                <p style="color: #fff512">THE SURVIVOR, THE CONTRIVER</p>
                                <p style="color: #fff512" font size="1" >Eksistensi dan masa depan dunia bergantung pada manusia. 
                                Untuk menyelamatkan dunia dan terus maju menjadi generasi penerus bangsa, manusia “Conqueror” 
                                dibutuhkan, yakni seorang penakluk yang berjuang dengan menyusun strategi untuk membawa perubahan.</h6>       
                                <form id="search" action="#" method="GET">
                                    <fieldset>
                                        <input type="address" name="address" class="email"
                                            placeholder="Your website URL..." autocomplete="on" required>
                                    </fieldset>
                                    <fieldset>
                                        <button type="submit" class="main-button">Analyze Site</button>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                <img src="assets/images/banner-right-image.png" alt="team meeting">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Banner -->

    <!-- Fun Fact Pimus -->
    <div id="about" class="about-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-image wow fadeIn maskot" data-wow-duration="1s" data-wow-delay="0.2s">
                        <img src="{{ url('assets/images/Web/Owl.png') }}" alt="person graphic">
                    </div>
                </div>
                <div class="col-lg-8 align-self-center">
                    <div class="services">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                                    <div class="icon">
                                    <i class="fas fa-trophy" style="height: 175px; width: 100px;"></i>
                                    </div>
                                    <div class="right-text">
                                        <p>Fakultas dengan perolehan gelar Juara Umum terbanyak adalah Fakultas Teknik</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
                                    <div class="icon">
                                    <i class="fas fa-film"style="height: 175px; width: 100px;"></i>
                                    </div>
                                    <div class="right-text">
                                        <p>Video Digital Pendidikan merupakan cabang baru yang menggantikan cabang Film Pendek pada PIMUS sebelumnya</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.9s">
                                    <div class="icon">
                                    <i class="fas fa-hand-holding-heart" style="height: 175px; width: 100px;"></i>
                                    </div>
                                    <div class="right-text">
                                        <p>Maskot PIMUS merupakan burung hantu yang bernama dr. Pimly. Burung hantu merupakan hewan yang melambangkan pengetahuan, kebijaksanaan, dan pembawa perubahan</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="1.1s">
                                    <div class="icon">
                                    <i class="fas fa-hands-helping" style="height: 175px; width: 100px;"></i>
                                    </div>
                                    <div class="right-text">
                                        <p>Logo PIMUS berupa tangan-tangan dengan warna yang melambangkan setiap fakultas dan politeknik saling menggenggam satu sama lain dengan piala di bagian tengah yang diperebutkan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Fun Fact Pimus -->

    <!-- Throwback Pimus -->
    <div id="services" class="our-services section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                    <div class="left-image">
                        <img src="assets/images/services-left-image.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                    <div class="section-heading">
                        <h2>Grow your website with our <em>SEO</em> service &amp; <span>Project</span> Ideas</h2>
                        <p>Space Dynamic HTML5 template is free to use for your website projects. However, you are not
                            permitted to redistribute the template ZIP file on any CSS template collection websites. Please
                            contact us for more information. Thank you for your kind cooperation.</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="first-bar progress-skill-bar">
                                <h4>Website Analysis</h4>
                                <span>84%</span>
                                <div class="filled-bar"></div>
                                <div class="full-bar"></div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="second-bar progress-skill-bar">
                                <h4>SEO Reports</h4>
                                <span>88%</span>
                                <div class="filled-bar"></div>
                                <div class="full-bar"></div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="third-bar progress-skill-bar">
                                <h4>Page Optimizations</h4>
                                <span>94%</span>
                                <div class="filled-bar"></div>
                                <div class="full-bar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Throwback Pimus -->

    <!-- Timeline Pimus -->
    <!-- End Timeline Pimus -->

    <!-- Contact -->
    <div id="contact" class="contact-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                    <div class="section-heading">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.305509732659!2d112.76638771534648!3d-7.319538324008685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fae3f29c4665%3A0x7536c23b4453a79!2sUniversity%20of%20Surabaya!5e0!3m2!1sen!2sid!4v1630590815843!5m2!1sen!2sid"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        <div class="phone-info">
                            <h4 style="color: #ffde40">Contact Us</h4>
                           <h2 style="color: #ffde40" ><i class="bi bi-instagram"></i> pimus11</a></span></h2> 
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="1s">
                    <form id="contact" action="" method="post">
                        <div class="row">
                            <div class="col-lg-6">
                                <fieldset>
                                    <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset>
                                    <input type="surname" name="surname" id="surname" placeholder="Surname"
                                        autocomplete="on" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                        placeholder="Your Email" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="message" type="text" class="form-control" id="message"
                                        placeholder="Message" required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="main-button ">Send Message</button>
                                </fieldset>
                            </div>
                        </div>
                        <div class="contact-dec">
                            <img src="assets/images/contact-decoration.png" alt="">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->
@endsection
