<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Contact || YOG HERBS  </title>
    <meta name="description" content="" />
    <?php include("./includes/link.php");?>
</head>

<body class="custom-cursor" style="background-color: black;color:#bbb">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>





    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->


    <div class="page-wrapper">
    <?php include("./includes/navbar.php");?>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/contact_hero.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled my-3">
                        <li><a href="index.php">Home</a></li>
                        <li><span>/</span></li>
                        <li>Contact</li>
                    </ul>
                    <h2>contact us</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

          <!--Contact Two Start-->
          <section class="container-fluid set_bgggg1 py-4">
            <div class="container">
            <div class="contact-details">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="contact-details__single">
                                <div class="contact-details__icon text-warning">
                                    <span class="icon-help "></span>
                                </div>
                                <div class="contact-details__text">
                                    <p class="text-white">Have Question?</p>
                                    <h3 ><a href="tel:+91 8002489809" class="text-info"> +91 8002489809</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="contact-details__single">
                                <div class="contact-details__icon">
                                    <span class="icon-mailbox"></span>
                                </div>
                                <div class="contact-details__text">
                                    <p class="text-white">Write Email</p>
                                    <h3><a href="mailto:yogherbs@gmail.com"  class="text-info">yogherbs@gmail.com</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="contact-details__single contact-details__single-last">
                                <div class="contact-details__icon">
                                    <span class="icon-maps-and-flags"></span>
                                </div>
                                <div class="contact-details__text">
                                    <p class="text-white">Visiting Address</p>
                                    <h3 class="text-info">Khari road Gandhi nagar Kutch Gujarat (India) 370201</h3>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="contact-details__single">
                                <div class="contact-details__social">
                                    <a href="javascript:void(0);"><i class="fab fa-twitter"></i></a>
                                    <a href="javascript:void(0);"><i class="fab fa-facebook"></i></a>
                                    <a href="javascript:void(0);"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="javascript:void(0);"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h3 class="text-warning text-center py-4">Contact Us Form</h3>
                    </div>
                </div>
                <div class="row">
                  <div class="col-12 col-lg-6 my-2 d-flex align-items-center ">
                    <div class="">
                        <img src="./assets/images/backgrounds/contact_left.png" class="contactLeft" alt="">
                    </div>
                  </div>
                  <div class="col-12 col-lg-6 my-2">
                  <form action="./formhandler.php" method="post" class="contact-two__form "
                       >
                        <div class="">
                            <div class="">
                                <div class="contact-form__input-box">
                                    <input type="text" oninput="this.value = this.value.toUpperCase().replace(/[^a-z,A-Z]/g, '').replace(/(\  *?)\  */g, '$1')" id="name" autocomplete="false" placeholder="Your Name" class="input_bg" name="name" required>
                                </div>
                            </div>
                            <div class="">
                                <div class="contact-form__input-box">
                                    <input type="email" id="email"  placeholder="Email Address" class="input_bg"  name="email" >
                                </div>
                            </div>
                            <div class="">
                                <div class="contact-form__input-box">
                                    <input type="text" id="phone" oninput="this.value = this.value.toUpperCase().replace(/[^0-9]/g, '').replace(/(\  *?)\  */g, '$1')" maxlength="10" placeholder="Phone" class="input_bg"  name="Phone Number" required>
                                </div>
                            </div>
                            <div class="">
                                <div class="contact-form__input-box">
                                    <input type="text" id="subject" placeholder="Subject" class="input_bg"  name="Subject" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="">
                                <div class="contact-form__input-box text-message-box">
                                    <textarea name="message" id="message" class="input_bg"  required placeholder="Write a Comment"></textarea>
                                </div>
                                <div class="contact-form__btn-box">
                                    <button class="thm-btn btn_design_none contact-two__btn" name="submit" onclick="return validate();">Send a Message<i
                                            class="icon-right-arrow"></i> </button>
                                </div>
                            </div>
                        </div>
                    </form>
                  </div>
                </div>
            </div>
        </section>
        <!--Contact Two End-->
        <!--Google Map Start-->
        <section class="google-map">
            <div class="container">
                <div class="google-map-box">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7341.2156057357315!2d70.16662538878388!3d23.0748359870484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3950ba472983fc9d%3A0x5d1d6f650b9cf52e!2sKhari%20Road%2C%20Gujarat%20370201!5e0!3m2!1sen!2sin!4v1719905066290!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
               
            </div>
        </section>
        <!--Google Map End-->

      

        <!--Site Footer Start-->
        <?php include("./includes/footer.php");?>
        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.php" aria-label="logo image"><img src="assets/images/resources/logo.png" 
                class="logoHeight"   alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:yogherbs@gmail.com">yogherbs@gmail.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:+91 8002489809">+91 8002489809</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
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
    <!-- /.search-popup -->
<?php include("./includes/script.php");?>
<script>
    const validate = ()=>{
        var Name = document.getElementById("name").value;
            var Email = document.getElementById("email").value;
            var Number = document.getElementById("phone").value;
            var subject = document.getElementById("subject").value;
            var Message = document.getElementById("message").value;
            var namePattern = /^[A-Za-z\s\-]+$/;
            var phoneRegex = /^\d{10}$/;
            var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;



            if (!Name) {
                alert("Please Enter Name");
                return false;
            } else if (!namePattern.test(Name)) {
                alert("Enter Only Alphabets Name");
                return false;
            } else if (!Email) {
                alert("Enter Email");
                return false;
            } else if (!emailRegex.test(Email)) {
                alert("Enter Valid Email");
                return false;
            } else if (!Number) {
                alert("Enter Phone Number");
                return false;
            } else if (!phoneRegex.test(Number)) {
                alert("Enter Correct Number");
                return false;
            } else if (!subject) {
                alert("Enter subject");
                return false;
            } else if (!(subject.length > 3)) {
                alert("Subject field needs longer input");
                return false;
            } else if (!Message) {
                alert("Enter Message");
                return false;
            }
    }
</script>
</body>

</html>