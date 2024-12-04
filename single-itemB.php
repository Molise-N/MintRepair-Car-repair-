<?php 
    include'config/database.php';
    // SQL query used to select table called property order by id in descending order

    // Include auth_session.php file. This page enables only login users to access page 
    include("auth_session.php");

    // Check if property ID is provided in the URL
    if (isset($_GET['property_id'])) {
        $property_id = $_GET['property_id'];

        // SQL query to fetch specific property details based on ID
        $sql = "SELECT * FROM property p JOIN users u ON p.email = u.email WHERE p.property_id = $property_id";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1) {
            $property = mysqli_fetch_assoc($result);
        } else {
            echo "Property not found!";
        }
    } else {
        echo "Missing property ID";
    }
    //include auth_session.php file. This page enables only login users to access page 
    include("auth_session.php");
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lesotho Property hub</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    

    <link rel="stylesheet" href="Buyerassets/css/bootstrap.min.css">
    <link rel="stylesheet" href="Buyerassets/css/templatemo.css">
    <link rel="stylesheet" href="Buyerassets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="Buyerassets/css/fontawesome.min.css">

    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="Buyerassets/css/slick.min.css">
    <link rel="stylesheet" type="text/css" href="Buyerassets/css/slick-theme.css">
    <style>
        .star-rating {
        display: flex;
        flex-direction: row-reverse;
        width: fit-content;
        }
        .star-rating .star {
        font-size: 2rem;
        cursor: pointer;
        color: #ddd;
        }
        .star-rating .star.rated {
        color: orange;
        }
    </style>
<!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
</head>

<body>
    <!-- Start header -->
    <?php require('navbar/bothNav.php')?>
    <!-- Close header -->



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



    <!-- Open Content -->
    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        <img class="card-img img-fluid" src="img/<?=$property['image_url']?>" alt="Card image cap" id="product-detail">
                    </div>
                    <div class="row">
                        <!--Start Controls-->
                        <div class="col-1 align-self-center">
                            <a href="#multi-item-example" role="button" data-bs-slide="prev">
                                <i class="text-dark fas fa-chevron-left"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                        </div>
                        <!--End Controls-->
                        <!--Start Carousel Wrapper-->
                        <div id="multi-item-example" class="col-10 carousel slide carousel-multi-item" data-bs-ride="carousel">
                            <!--Start Slides-->
                            <div class="carousel-inner product-links-wap" role="listbox">

                                <!--First slide-->
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="img/<?=$property['image_url']?>" alt="Product Image 1">
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <!--/.First slide-->
                            </div>
                            <!--End Slides-->
                        </div>
                        <!--End Carousel Wrapper-->
                        <!--Start Controls-->
                        <div class="col-1 align-self-center">
                            <a href="#multi-item-example" role="button" data-bs-slide="next">
                                <i class="text-dark fas fa-chevron-right"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <!--End Controls-->
                    </div>
                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="h2">Posted By: <?=$property['name']?></h1>
                            <p>Rate this product:</p>
                            <a href="comment.php?property_id=<?=$property['property_id']?>" class="h3 text-info">Rate and Comment the property</a>
                            <p id="rating-message"></p>
                            <script>
                                const stars = document.querySelectorAll('.star');
                                let rating = 0;

                                stars.forEach(star => {
                                star.addEventListener('click', () => {
                                    rating = star.dataset.rating;
                                    stars.forEach(s => s.classList.remove('rated'));
                                    for (let i = 0; i < rating; i++) {
                                        stars[i].classList.add('rated');
                                    }
                                    document.getElementById('rating-message').textContent = `You rated this property owner ${rating} stars!`;
                                });
                                });
                            </script>

                            <h6>Description:</h6>
                            <p><?=$property['description']?></p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Price :</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-primary "><strong>M<?=$property['price']?></strong></p>
                                </li>
                            </ul>

                            <h6>Features:</h6>
     
                            <ul class="list-unstyled pb-3">
                                <li><?=$property['feature']?></li>
                            
                            <div class="alert alert-dark alert-dismissible fade show">
                                <i class="bi bi-whatsapp"></i>
                                <strong>Hello <?=$property['name']?></strong><br> <a href="https://wa.me/266<?=$property['contact']?>?text=%20Hello%20<?=$property['name']?>%20I%20am%20interested%20in%20property_id=<?=$property['property_id']?>" target="Blank">Chat with Property Owner On Whatsapp.</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="map_main">
        <div class="map-responsive">
            <iframe src="https://www.google.com/maps?q=<?=$property['latitude'];?>,<?=$property['longitude'];?> &hl=es;z=4&output=embed"
            width="100%" height="280" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <!-- Close Content -->

    <!-- Start Article -->
    <section class="py-5 ">
        <div class="container">
            <div class="row text-left p-2 pb-3">
                <h4>Related Property</h4>
            </div>
            <!--Start Carousel Wrapper-->
            <?php 
                $sql = "SELECT * FROM property p JOIN users u ON p.email = u.email WHERE u.email = p.email ORDER BY p.property_id DESC";
                $res = mysqli_query($conn,  $sql); 
            ?>
            <div class="row">
                    <?php
                        // while loop used to loop until end of image list
                        if (mysqli_num_rows($res) > 0)
                            while ($property = mysqli_fetch_assoc($res)) {
                    ?>
                    <div class="col-md-4">
                        <a href="shop-single.php?property_id=<?=$property['property_id']?>" class="h3 text-decoration-none">
                            <div class="card mb-4 product-wap rounded-0 "style="height: 400px;" >
                                <div class="card rounded-0 " style="height: 200px;">
                                    <img class="card-img rounded-0 img-fluid" src="img/<?=$property['image_url']?>" style="object-fit: cover; height: 100%;">
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled pb-3">
                                        <li>Posted By: <?=$property['name']?></li>
                                        <li> Property type: <?=$property['property_type']?></li>
                                    </ul>
                                    <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                        
                                        <li class="pt-2">
                                            <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                            <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                            <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                            <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                            <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                        </li>
                                    </ul>
                                    <ul class="list-unstyled d-flex justify-content-center mb-1">
                                        <li>
                                            <i class="text-warning fa fa-star"></i>
                                            <i class="text-warning fa fa-star"></i>
                                            <i class="text-warning fa fa-star"></i>
                                            <i class="text-muted fa fa-star"></i>
                                            <i class="text-muted fa fa-star"></i>
                                        </li>
                                    </ul>
                                    <p class="text-center mb-0">M<?=$property['price']?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php
                        }
                    ?>
                </div>
        </div>
    </section>
    <!-- End Article -->
       <!-- End Article -->
       <!-- Scroll Up -->
       <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>


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

    <!-- Start Slider Script -->
    <script src="Buyerassets/js/slick.min.js"></script>
    <script>
        $('#carousel-related-product').slick({
            infinite: true,
            arrows: false,
            slidesToShow: 4,
            slidesToScroll: 3,
            dots: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                }
            ]
        });
    </script>
    <!-- End Slider Script -->

</body>

</html>