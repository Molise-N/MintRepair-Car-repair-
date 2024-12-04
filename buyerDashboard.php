<?php
//include auth_session.php file. This page enables only login users to access page 
include("auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>LesothoPropertyHub</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="Buyerassets/img/apple-icon.png">
  
    <link rel="stylesheet" href="Buyerassets/css/bootstrap.min.css">
    <link rel="stylesheet" href="Buyerassets/css/templatemo.css">
    <link rel="stylesheet" href="Buyerassets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="Buyerassets/css/fontawesome.min.css">
<!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
</head>

<body>

    <?php require('navbar/buyerNav.php')?>
    <!-- Close Header -->

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>



    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./Buyerassets/img/looking_property.avif" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>LesothoPropertyHub</b> Marketplace</h1>
                                <h3 class="h2"> Your one-stop shop to find your dream property</h3>
                                <p>
                                    Welcome to LesothoPropertyHub, the premier online marketplace connecting home buyers, sellers, and real estate professionals. Whether you're searching for your perfect starter home, a luxurious estate, or a sound investment property, our user-friendly platform offers a wealth of resources to simplify your journey. 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./Buyerassets/img/contact.avif" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Call for action</h1>
                                <h3 class="h2">get in touch with the seller directly from our site</h3>
                                <p>
                                    You are permitted to use this Zay CSS template for your commercial websites. 
                                    You are <strong>not permitted</strong> to re-distribute the template ZIP file in any kind of template collection websites.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner Hero -->


    <!-- Start Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Properties our sellers sell</h1>
                <p>
                    range from residential to commercial Properties
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="./Buyerassets/img/residential.avif" class="rounded-circle img-fluid border"></a>
                <h5 class="text-center mt-3 mb-3">residential</h5>
                <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="./Buyerassets/img/city.jpg" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">apartment</h2>
                <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="./Buyerassets/img/warehouse.webp" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">warehouse</h2>
                <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
            </div>
        </div>
    </section>
    <!-- End Categories of The Month -->

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