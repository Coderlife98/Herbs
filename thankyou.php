<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Thank You || YOG HERBS  </title>
    <meta name="description" content="" />
    <?php include("./includes/link.php");?>
    <style>
        @media (max-width:992px) {
            .set-this {
                object-fit: contain;
                width: 100%;
                /* margin-top: 86px; */
            }
        }

        @media (min-width:768px) {
            .set-this {
                object-fit: contain;
                width: 100%;
                /* margin-top: 86px; */
            }
        }
    </style>
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
                        <li>Thank You</li>
                    </ul>
                    <h2>Thank You</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->


    <!-- main-area -->
    <main>
        <section style="background:linear-gradient(to left,#0F3C5C,#00142E) ;">
            <div class="container" >
                <div class="row">


                    <div class="col-12 col-md-6">
                        <div class="container" style=" margin:10% auto;color:white">
                            <?php
                            echo $_SESSION['response'];
                            ?>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 d-flex  justify-content-center ">
                        <div class="thimg">
                            <img src="./assets/images/backgrounds/th.svg" height="300px" width="350px" alt="">
                        </div>
                    </div>

                </div>
            </div>

        </section>

    </main>
    <!-- main-area-end -->
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

<?php include("./includes/script.php");?>
</body>

</html>