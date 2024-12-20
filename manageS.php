 
<?php 
    include'config/database.php';
    //include auth_session.php file. This page enables only login users to access page 
    include("auth_session.php");

        // Check if user is logged in (optional, based on your auth_session.php logic)
    if (true) {
        $session_email = $_SESSION['email'];  // Assuming session email is stored in 'email'

        // SQL query with session email for filtering
        $sql = "SELECT * FROM property p JOIN users u ON p.email = u.email WHERE u.email = '$session_email' ORDER BY p.property_id DESC";
        $res = mysqli_query($conn, $sql);

        // Display results or handle errors (not shown here)
    }

    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>manage property</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Buyerassets/css/bootstrap.min.css">
    <link rel="stylesheet" href="Buyerassets/css/templatemo.css">
    <link rel="stylesheet" href="Buyerassets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="Buyerassets/css/fontawesome.min.css">

</head>

<body bg-info>
    <!-- Start Top Nav -->
    <?php include("navbar/sellerNav.php");?> 
    
    
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

            <div class="col-lg-9">

                <div class="row">
                    <?php
                        // while loop used to loop until end of image list
                        if (mysqli_num_rows($res) > 0)
                            while ($property = mysqli_fetch_assoc($res)) {
                    ?>
                    <div class="col-md-4">
                        
                            <div class="card mb-4 product-wap rounded-0 "style="height: 400px;" >
                                <div class="card rounded-0 " style="height: 200px;">
                                    <img class="card-img rounded-0 img-fluid" src="img/<?=$property['image_url']?>" style="object-fit: cover; height: 100%;">
                                </div>
                                <div class="card-body">
                                    
                                    <ul class="list-unstyled pb-3">
                                        <li>Posted By: <?=$property['name']?></li>
                                        <li> Property type: <?=$property['property_type']?></li>
                                        <li>Posted By: <?=$property['property_id']?></li>
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
    
    <?php include("navbar/sellerFooter.php")?>
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