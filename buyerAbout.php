<?php
//include auth_session.php file. This page enables only login users to access page 
include("auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>LesothoPropertyHub - About Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="Buyerassets/css/bootstrap.min.css">
    <link rel="stylesheet" href="Buyerassets/css/templatemo.css">
    <link rel="stylesheet" href="Buyerassets/css/custom.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="Buyerassets/css/fontawesome.min.css">

</head>

<body>
    <!-- Start Top Nav -->
    <!-- Close Top Nav -->


    <!-- Header -->
    <?php require('navbar/buyerNav.php')?>
    <!-- Close Header -->

    <section class="bg-success py-5">
        <div class="container">
            <div class="row align-items-center py-5">
                <div class="col-md-8 text-white">
                    <h1>About Us</h1>
                    <p>
                        Whether you're a homeowner trying to sell your property or a shrewd investor looking for your dream house, LesothoPropertyHub is the leading online property marketplace connecting buyers and sellers in Lesotho. Our user-friendly platform offers a multitude of information to streamline your trip.
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="img/about.jpeg" alt="About Hero">
                </div>
            </div>
        </div>
    </section>
    <!-- Close Banner -->

    <!-- Start Section -->
    <section class="container py-5">
        <div class="row text-center pt-5 pb-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Our Services</h1>
                <p>
                    We Offer A Wide Range Of Services To Our Clientel.
                </p>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="bi bi-house"></i></div>
                    <h2 class="h5 mt-4 text-center">Sell/Buy Property</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="bi bi-chat"></i></div>
                    <h2 class="h5 mt-4 text-center">Chat To Property Owner</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="bi bi-list"></i></div>
                    <h2 class="h5 mt-4 text-center">Extensive Listing On Property</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="bi bi-search"></i></div>
                    <h2 class="h5 mt-4 text-center">Target Search</h2>
                </div>
            </div>
        </div>
    </section>
    <div class="map_main">
                <div class="map-responsive">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5051.270713345815!2d27.71800290653065!3d-29.4497015060984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e8c4ff6b05a4621%3A0xadbb4358ecf9b11e!2sNational%20University%20of%20Lesotho!5e0!3m2!1sen!2sls!4v1714624783403!5m2!1sen!2sls"
                     width="100%" height="280" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
    </div>
    <!-- End Section -->

    <!-- Start Footer -->
    <?php require('navbar/buyerFooter.php');?>
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="Buyerassets/js/jquery-1.11.0.min.js"></script>
    <script src="Buyerassets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="Buyerassets/js/bootstrap.bundle.min.js"></script>
    <script src="Buyerassets/js/templatemo.js"></script>
    <script src="Buyerassets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>