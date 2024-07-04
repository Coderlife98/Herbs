<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Home || YOG HERBS</title>
    <!-- favicons Icons -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bona+Nova+SC:ital,wght@0,400;0,700;1,400&family=Inter:wght@100..900&display=swap" rel="stylesheet"> -->
    <meta name="description" content="" />
    <?php include ("./includes/link.php"); ?>
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->


    <div class="page-wrapper">
        <?php include ("./includes/navbar.php"); ?>

        <div class="stricky-header stricked-menu main-menu main-menu-two">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Main Slider Two Start-->
        <section class="main-slider-two clearfix">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                "delay": 5000
                }}'>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="image-layer-two"
                            style="background-image: url(assets/images/backgrounds/home1.jpg);"></div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-two__content">
                                        <p class="main-slider-two__sub-title">Welcome to <span class="text-warning">YOG
                                                HERBS</span></p>

                                        <h2 class="main-slider-two__title">Pure <span style="font-family:Inter;">herbal
                                            </span><br>
                                            remedies for wellness.</h2>
                                        <div class="main-slider-two__btn-box">
                                            <a href="about.php" class="thm-btn main-slider-two__btn">Discover More <i
                                                    class="icon-right-arrow"></i> </a>
                                        </div>
                                        <div class="main-slider-two__shape-1">
                                            <img src="assets/images/shapes/main-slider-two-shape-1.png" alt=""
                                                class="float-bob-y">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="image-layer-two"
                            style="background-image: url(assets/images/backgrounds/home2.jpg);"></div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-two__content">
                                        <p class="main-slider-two__sub-title">Welcome to <span class="text-warning">YOG
                                                HERBS</span></p>
                                        <h2 class="main-slider-two__title">Pure <span
                                                style="font-family:Inter;">Herbal</span><br>
                                            Formulations</h2>
                                        <div class="main-slider-two__btn-box">
                                            <a href="contact.php" class="thm-btn main-slider-two__btn">Contact Us <i
                                                    class="icon-right-arrow"></i> </a>
                                        </div>
                                        <div class="main-slider-two__shape-1">
                                            <img src="assets/images/shapes/main-slider-two-shape-1.png" alt=""
                                                class="float-bob-y">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="image-layer-two"
                            style="background-image: url(assets/images/backgrounds/home3.jpg);"></div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-two__content">
                                        <p class="main-slider-two__sub-title">Welcome to <span class="text-warning">YOG
                                                HERBS</span></p>
                                        <h2 class="main-slider-two__title">Natural <span
                                                style="font-family:Inter;">Plant</span><br>
                                            Medicines</h2>
                                        <div class="main-slider-two__btn-box">
                                            <a href="about.php" class="thm-btn main-slider-two__btn">Discover More <i
                                                    class="icon-right-arrow"></i> </a>
                                        </div>
                                        <div class="main-slider-two__shape-1">
                                            <img src="assets/images/shapes/main-slider-two-shape-1.png" alt=""
                                                class="float-bob-y">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="swiper-pagination" id="main-slider-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="main-slider__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                        <i class="icon-right-arrow"></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                        <i class="icon-right-arrow"></i>
                    </div>
                </div>

            </div>
        </section>
        <!--Main Slider Two End-->

       

        <!--About Two Start-->
        <section class="about-two add_black_bg pb-4">
            <div class="about-two__bg float-bob-x">
                <img src="assets/images/backgrounds/bg_slide.png" class="smNone" alt="">
            </div>
            <div class="container-fluid  ">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 d-flex align-items-center wow fadeInLeft" data-wow-delay="1s">
                            <div class="about-two__left">
                                <img src="assets/images/backgrounds/ayurvedaPot.png" class="homepot" alt="">
                            </div>
                        </div>
                        <div class="col-xl-7  wow fadeInRight" data-wow-delay="1s">
                            <div class="about-Two__right">
                                <div class="section-title py-0 text-left">
                                    <span class="section-title__tagline text-white">Welcome to <span
                                            class="text-info">YOG HERBS</span></span>
                                    <h2 class="text-warning">About Us</h2>
                                   
                                </div>
                                <p class="about-two__text ">Welcome to <span class="text-white">
                                        YOG HERBS
                                    </span>, your premier destination for genuine Ayurvedic products and comprehensive
                                    wellness solutions. Our mission is to integrate the timeless principles of Ayurveda
                                    into today's lifestyle, offering natural and potent remedies that promote a
                                    harmonious and healthy existence.</p>
                                <p class="about-two__text"> At <span class="text-white">YOG HERBS</span>, we blend
                                    tradition with innovation to ensure you receive the highest quality products that
                                    support your journey towards optimal well-being. Embrace the power of nature with
                                    our authentic Ayurvedic solutions and experience the profound benefits of holistic
                                    health.</p>
                                <ul class="about-two__points list-unstyled">
                                    <li class="wow fadeInUp" data-wow-delay="500ms">
                                        <div class="about-two__icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="about-two__title">
                                            <h3 class="text-success">Premium Quality
                                                <br>Guaranteed
                                            </h3>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp" data-wow-delay="500ms">
                                        <div class="about-two__icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="about-two__title">
                                            <h3 class="text-success">Pure Wellness
                                                <br>Essentials
                                            </h3>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp" data-wow-delay="500ms">
                                        <div class="about-two__icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="about-two__title">
                                            <h3 class="text-success">Holistic Organic
                                                <br>Solutions
                                            </h3>
                                        </div>
                                    </li>
                                </ul>
                                <div class="about-two__btn-box">
                                    <a href="about.php" class="thm-btn">Discover More <i class="icon-right-arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About Two End-->




        <!--Ready to Restore Harmony in your Mind ,Body,and Spirit Start-->
        <section class="">
            <div class="container-fluid bg_wallpaper py-4 ">
                <div class="container">
                    <div class="row">
                        <div class=" col-12 wow fadeInUp" data-wow-delay="1s">
                            <h2 class="text-center text-warning ">Achieve Balance in Mind, Body, and Spirit</h2>
                            <p class="text-center text-white">
                                Achieving balance in mind, body, and spirit is a journey of holistic wellness. It
                                involves nurturing each aspect of your being to harmonize and complement one another.
                                Cultivating mental balance includes fostering positive thoughts, managing stress
                                effectively, and cultivating mindfulness to enhance clarity and focus. Physical balance
                                entails nurturing your body through regular exercise, balanced nutrition, and adequate
                                rest, ensuring vitality and strength. Spiritual balance encompasses connecting with your
                                inner self, exploring your beliefs, and finding purpose and meaning in life</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Ready to Restore Harmony in your Mind ,Body,and Spirit End-->
        <!-- mission and vision section start here -->
        <section class="">
            <div class="container-fluid set_bg_product">
                <div class="container py-5">
                    <div class="row">
                        <div class="col-12">
                            <p class="text-info text-warning">// CHECK OUR SERVICES</p>
                            <div>
                                <h1 class="font-bold wow fadeInUp text-white" data-wow-delay="1s">Our Products</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4 my-3">
                            <div class="main_card_design px-4 py-2 wow fadeInUp" data-wow-delay="1s">
                                <div class="d-flex justify-content-center">
                                    <img src="./assets/images/backgrounds/pot.png" alt="">
                                </div>
                                <div>
                                    <h4 class="text-white font-bold text-center py-3">WOMEN LICO</h4>
                                </div>
                                <div class="benefits">
                                    <p class="text-center">
                                        Licorrhoea, White discharge
                                        foul, smell, irregular
                                        menstruation pimples on
                                        the face.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 my-3">
                            <div class="main_card_design px-4 py-2 wow fadeInUp" data-wow-delay="1s">
                                <div class="d-flex justify-content-center">
                                    <img src="./assets/images/backgrounds/pot.png" alt="">
                                </div>
                                <div>
                                    <h4 class="text-white font-bold text-center py-3">TWACHA ROG</h4>
                                </div>
                                <div class="benefits">
                                    <p class="text-center">
                                        Eczema,herpes,Ringworm,itching,rashes, Eliminate all types of skin diseases from
                                        their roots.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 my-3">
                            <div class="main_card_design px-4 py-2 wow fadeInUp" data-wow-delay="1s">
                                <div class="d-flex justify-content-center">
                                    <img src="./assets/images/backgrounds/pot.png" alt="">
                                </div>
                                <div>
                                    <h4 class="text-white font-bold text-center py-3">SUGAR REMOVER</h4>
                                </div>
                                <div class="benefits">
                                    <p class="text-center">
                                        It increases the amount of insulin
                                        your body makes (in the pancreas)
                                        which then works to lower your
                                        blood glucose levels.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 my-3">
                            <div class="main_card_design px-4 py-2 wow fadeInUp" data-wow-delay="1s">
                                <div class="d-flex justify-content-center">
                                    <img src="./assets/images/backgrounds/pot.png" alt="">
                                </div>
                                <div>
                                    <h4 class="text-white font-bold text-center py-3">PILES REMOVER</h4>
                                </div>
                                <div class="benefits">
                                    <p class="text-center">
                                        Watering, Bleeding
                                        Pain Coming out of warts,
                                        Cures all types of piles from
                                        the root.

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 my-3">
                            <div class="main_card_design px-4 py-2 wow fadeInUp" data-wow-delay="1s">
                                <div class="d-flex justify-content-center">
                                    <img src="./assets/images/backgrounds/pot.png" alt="">
                                </div>
                                <div>
                                    <h4 class="text-white font-bold text-center py-3">OLI GREEN</h4>
                                </div>
                                <div class="benefits">
                                    <p class="text-center">
                                        Olive leaf might lower blood pressure. Olive fruit might also be able to kill
                                        microbes, such as bacteria and fungus.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 my-3">
                            <div class="main_card_design px-4 py-2 wow fadeInUp" data-wow-delay="1s">
                                <div class="d-flex justify-content-center">
                                    <img src="./assets/images/backgrounds/pot.png" alt="">
                                </div>
                                <div>
                                    <h4 class="text-white font-bold text-center py-3">AMLA CHURNA</h4>
                                </div>
                                <div class="benefits">
                                    <p class="text-center">
                                        Clean stomach gas ,Groth Hair and Eyesight Also.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- mission and vision section start end -->
        <!--Faq One Start-->
        <section class="faq-one">
            <div class="faq-one-bg" style="background-image: url(assets/images/backgrounds/faq-one-bg.png);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 wow fadeInLeft" data-wow-delay="800ms">
                        <div class="faq-one__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline text-info">Frequently Asked Questions</span>
                                <h2 class="section-title__title text-warning">How may we assist you today?</h2>

                            </div>
                            <div class="faq-one__img-box">
                                <div class="faq-one__img">
                                    <img src="./assets/images/backgrounds/faq1.jpg" class="wow zoomIn"
                                        data-wow-delay="1s" alt="">
                                    <div class="faq-one__img-icon wow flip" data-wow-delay="1s">
                                        <span class=""> <img src="./assets/images/backgrounds/why.png"
                                                style="width: 50px;" alt=""></span>
                                    </div>
                                </div>
                                <ul class="faq-one__points list-unstyled wow fadeInUp" data-wow-delay="1s">
                                    <li class="faq-one__points-list">
                                        <div class="faq-one__icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="faq-one__text ">
                                            <p class="text-white">Natural ingredients</p>
                                        </div>
                                    </li>
                                    <li class="faq-one__points-list">
                                        <div class="faq-one__icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="faq-one__text">
                                            <p class="text-white">Botanical extracts</p>
                                        </div>
                                    </li>
                                    <li class="faq-one__points-list">
                                        <div class="faq-one__icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="faq-one__text">
                                            <p class="text-white">Eco-friendly packaging</p>
                                        </div>
                                    </li>
                                    <li class="faq-one__points-list">
                                        <div class="faq-one__icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="faq-one__text">
                                            <p class="text-white">Non-synthetic formulation</p>
                                        </div>
                                    </li>
                                    <li class="faq-one__points-list">
                                        <div class="faq-one__icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="faq-one__text">
                                            <p class="text-white">Therapeutic benefits</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="800ms">
                        <div class="faq-one__right">
                            <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                                <div class="accrodion active">
                                    <div class="accrodion-title">
                                        <h4>Are herbal products safe to use?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>While generally safe, individual reactions can vary. Consult with a
                                                healthcare provider, especially if pregnant, nursing, or on medication.
                                                Herbal products can interact with certain medications or exacerbate
                                                existing conditions. Always read labels and follow recommended usage
                                                guidelines.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4>How long does it take for herbal products to show results?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p> Results vary based on individual health and the product's purpose.
                                                Typically, consistent use over weeks to months is recommended for
                                                noticeable effects.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4> What are common side effects of herbal products?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>While generally well-tolerated, mild side effects like digestive upset or
                                                allergic reactions may occur. Discontinue use if adverse effects persist
                                                and consult a healthcare provider.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4>Are herbal products regulated for safety and quality?</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Regulations vary by country. Look for products with certifications or
                                                approvals from reputable agencies. Quality assurance practices, such as
                                                GMP (Good Manufacturing Practice) certifications, ensure standards are
                                                met.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Faq One End-->



        

        <!--Testimonial Two Start-->
        <section class="testimonial-two">
            <div class="testimonial-two__shape-1 float-bob-x"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-6">
                        <div class="testimonial-two__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline text-warning">Our Testimonials</span>
                                <h2 class="section-title__title">Customer Feedback</h2>
                                <div class="section-title__icon">
                                    <img src="assets/images/icon/section-title-icon-1.png" alt="">
                                </div>
                            </div>
                            <div class="testimonial-two__slider">
                                <div class="testimonials-two__thumb-wrapper">
                                    <div class="swiper-container" id="testimonials-two__thumb">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="testimonial-two__img-holder">
                                                    <img src="assets/images/backgrounds/test1.jpg" alt="@dued">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="testimonial-two__img-holder">
                                                    <img src="assets/images/backgrounds/test2.jpg" alt="@dued">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="testimonial-two__img-holder">
                                                    <img src="assets/images/backgrounds/test3.jpg" alt="@dued">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.testimonials-one__thumb-wrapper -->

                                <div class="testimonial-two__main-content">
                                    <div class="swiper-container" id="testimonials-two__carousel">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="testimonial-two__content-box">
                                                    <p class="testimonial-two__text">"These herbal supplements have
                                                        transformed my health. I feel more energetic and balanced every
                                                        day!"</p>
                                                    <div class="testimonial-two__client-info">
                                                        <p class="testimonial-two__client-text">Tannu Priya<span>-
                                                                Customer</span></p>
                                                    </div>
                                                    <div class="testimonial-two__quote">
                                                        <span class="icon-quote"></span>
                                                    </div>
                                                </div>
                                            </div><!-- /.swiper-slide -->
                                            <div class="swiper-slide">
                                                <div class="testimonial-two__content-box">
                                                    <p class="testimonial-two__text">"I love how natural and effective
                                                        these products are. They've become a staple in my daily
                                                        routine."</p>
                                                    <div class="testimonial-two__client-info">
                                                        <p class="testimonial-two__client-text">Abhishek<span>-
                                                                Customers</span></p>
                                                    </div>
                                                    <div class="testimonial-two__quote">
                                                        <span class="icon-quote"></span>
                                                    </div>
                                                </div>
                                            </div><!-- /.swiper-slide -->
                                            <div class="swiper-slide">
                                                <div class="testimonial-two__content-box">
                                                    <p class="testimonial-two__text">"Fantastic products! My skin looks
                                                        clearer and healthier thanks to the natural ingredients."</p>
                                                    <div class="testimonial-two__client-info">
                                                        <p class="testimonial-two__client-text">Prakshdeep<span>-
                                                                Customer</span></p>
                                                    </div>
                                                    <div class="testimonial-two__quote">
                                                        <span class="icon-quote"></span>
                                                    </div>
                                                </div>
                                            </div><!-- /.swiper-slide -->
                                        </div>
                                    </div>
                                </div>

                                <div id="testimonials-one__carousel-pagination"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="testimonial-two__right">
                            <img src="./assets/images/backgrounds/feedback.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial Two End-->





        <!--Site Footer Start-->
        <?php include ("./includes/footer.php"); ?>
        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.php" aria-label="logo image"><img src="assets/images/resources/logo.png"
                        class="logoHeight" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:
yogherbs@gmail.com

">
                        yogherbs@gmail.com

                    </a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:+91 8002489809">+91 8002489809</a>
                </li>
            </ul>
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="javascript:void(0);" class="fab fa-twitter"></a>
                    <a href="javascript:void(0);" class="fab fa-facebook-square"></a>
                    <a href="javascript:void(0);" class="fab fa-pinterest-p"></a>
                    <a href="javascript:void(0);" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <?php include ("./includes/script.php"); ?>
</body>

</html>