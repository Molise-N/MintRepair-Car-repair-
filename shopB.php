 
<?php 
    include'config/database.php';
    // SQL query used to select table called property order by id in descending order
    $sql = "SELECT * FROM property p JOIN users u ON p.email = u.email WHERE u.email = p.email ORDER BY p.property_id DESC";
    $res = mysqli_query($conn,  $sql); 
    
    //include auth_session.php file. This page enables only login users to access page 
    include("auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Shop property</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Buyerassets/css/bootstrap.min.css">
    <link rel="stylesheet" href="Buyerassets/css/templatemo.css">
    <link rel="stylesheet" href="Buyerassets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="Buyerassets/css/fontawesome.min.css">

</head>

<body>
    <!-- Start Top Nav -->
    <?php require('navbar/bothNav.php')?>
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



    <!-- Start Content -->
    <div class="container py-5">
        <div class="row">

            <div class="col-lg-3">
                <h1 class="h2 pb-4">Property Categories</h1>
                <ul class="list-unstyled templatemo-accordion">
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            property type
                            <i class="fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul class="collapse show list-unstyled pl-3">
                            <li><a class="text-decoration-none" href="#">residential</a></li>
                            <li><a class="text-decoration-none" href="#">rental</a></li>
                            <li><a class="text-decoration-none" href="#">warehouse</a></li>
                        </ul>
                    </li>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            District
                            <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul id="collapseTwo" class="collapse list-unstyled pl-3">
                            <li><a class="text-decoration-none" href="#">Maseru</a></li>
                            <li><a class="text-decoration-none" href="#">Bereea</a></li>
                            <li><a class="text-decoration-none" href="#">Leribe</a></li>
                            <li><a class="text-decoration-none" href="#">Botha Bothe</a></li>
                            <li><a class="text-decoration-none" href="#">Mokhotlong</a></li>
                            <li><a class="text-decoration-none" href="#">Thaba Tseka</a></li>
                            <li><a class="text-decoration-none" href="#">Qacha's Nek</a></li>
                            <li><a class="text-decoration-none" href="#">Quthing</a></li>
                            <li><a class="text-decoration-none" href="#">Mohale's Hoek</a></li>
                            <li><a class="text-decoration-none" href="#">Mafeteng</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="col-lg-9">

                <div class="row">
                    <?php
                        // while loop used to loop until end of image list
                        if (mysqli_num_rows($res) > 0)
                            while ($property = mysqli_fetch_assoc($res)) {
                    ?>
                    <div class="col-md-4">
                        <a href="single-itemB.php?property_id=<?=$property['property_id']?>" class="h3 text-decoration-none">
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

                <div class="row">
                    <ul class="pagination pagination-lg justify-content-end">
                        <li class="page-item disabled">
                            <a class="page-link active rounded-0 mr-3 shadow-sm border-top-0 border-left-0" href="#" tabindex="-1">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link rounded-0 shadow-sm border-top-0 border-left-0 text-dark" href="#">3</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
           <!-- End Article -->
       <!-- Scroll Up -->
        <div id="back-top" >
            <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
        </div>
    </div>
    <!-- End Content -->

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