<x-web>
    @include('menu.menu')

    <!--====== Start Page-Banner Section ======-->
    <section class="page-banner bg_cover p-r z-1" style="background-image: url({{ url('public/web') }}/assets/images/bg/page-bg-2.jpg);">
        <div class="brand-card text-center">
            <img src="{{ url('public/web') }}/assets/images/icon/wheat.png" alt="icon">
            <h3>Sibamida</h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="page-title">
                        <h1>Contact Us</h1>
                        <ul class="breadcrumbs-link">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Page-Banner Section ======-->
    <!--====== Start Contact Information section ======-->
    <section class="contact-information-one p-r z-1 pt-215 pb-130">
        <div class="information-img_one wow fadeInRight"><img src="{{ url('public/web') }}/assets/images/contact/img-1.jpg" alt="Imaged">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-12">
                    <div class="contact-two_information-box">
                        <div class="section-title section-title-left mb-50 wow fadeInUp">
                            <span class="sub-title">Get In Touch</span>
                            <h2>Kami Siap Membantu Anda!</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="information-item-two info-one mb-30 wow fadeInDown">
                                    <div class="icon">
                                        <i class="far fa-map-marker-alt"></i>
                                    </div>
                                    <div class="info">
                                        <h5>Locations</h5>
                                        <p>Teknologi Informasi, Politeknik Negeri Ketapang</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="information-item-two mb-30 info-two wow fadeInUp">
                                    <div class="icon">
                                        <i class="far fa-envelope-open-text"></i>
                                    </div>
                                    <div class="info">
                                        <h5>Email Address</h5>
                                        <p><a href="https://informatika.politap.ac.id/">Teknik Informatika</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="information-item-two mb-30 info-three wow fadeInDown">
                                    <div class="icon">
                                        <i class="far fa-phone"></i>
                                    </div>
                                    <div class="info">
                                        <h5>Phone Number</h5>
                                        <p><a href="tel:+62 895-6134-92435">+012 (345) 678 99</a></p>
                                        <p><a href="tel:+0123456">+0123456</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8">
                                <p>Natus error sit voluptatem accusantium doloremque laudatium, totam rem
                                    aperiam eaque ipsa quae abllo inventore veritatis et quase</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Contact Information section ======-->
    <!--====== Start Map section ======-->
    <section class="contact-page-map">
        <div class="map-box">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.812596785114!2d109.98644231405744!3d-1.8168321369457205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e0518e6aef713bf%3A0xe05ee65e3627ba6c!2sPoliteknik%20Negeri%20Ketapang!5e0!3m2!1sid!2sid!4v1671195827915!5m2!1sid!2sid"
                width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </section><!--====== End Map section ======-->
</x-web>
