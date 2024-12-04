<?php include 'nid/config/database.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="loginstyle.css">
  <link rel="stylesheet" href="Buyerassets/css/bootstrap.min.css">
  <title>ID VERIFICATION</title>
</head>
<body>
      
  <section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">
  
                  <div class="text-center">
                    <img src="Buyerassets/img/ope.png"
                      style="width: 185px;" alt="logo">
                    <h4 class="mt-1 mb-5 pb-1">ID VERIFICATION(1/2)</h4>
                  </div>
  
                  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
                    <p>Please enter your details</p>
  
                    <div class="form-outline mb-4">
                      <input type="text" id="text" name="name" placeholder="name" required class="form-control"
                        placeholder="full name" />
                      <label class="form-label" for="form2Example11">Name</label>
                    </div>
  
                    <div class="form-outline mb-4">
                      <input type="number" class="form-control" id="id_number" name="id_number" placeholer="number" min="0" />
                      <label class="form-label" for="form2Example22">Number</label>
                    </div>
  
                    <div class="text-center pt-1 mb-5 pb-1">
                      <p class="mb-0 me-2">Verfy your details</p>
                      <input type="submit" class="btn btn-success btn-block fa-lg mb-3" value="verify">
                    </div>
  
                  </form>
  
                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center bg-success">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <h4 class="mb-4">NID Intergration.</h4>
                  <p class="small mb-0">Verify whether your id and names correspond to those at in Home Affairs database.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
</body>
</html>
<?php
include 'nid/config/database.php';

if (isset($_POST['name'])&&isset($_POST['id_number'])) {
    $name = stripslashes($_REQUEST['name']);
    $name = mysqli_real_escape_string($conn, $name);
    $id_number = stripslashes($_REQUEST['id_number']);
    $id_number = mysqli_real_escape_string($conn, $id_number);

    $query = "SELECT * FROM `user` WHERE name = '$name' AND id_number = '$id_number'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        echo "Error: ". mysqli_error($conn);
    } else {
        $rows = mysqli_num_rows($result);
        if ($rows == 1 ) {
            // Name and ID exist, redirect to another script
            header("Location: registration.php?name=$name&&id_number=$id_number");
            exit();
        } else {
            // Name and ID don't exist
            echo "<script>alert('Incorrect name/id number.')</script>";
        }
    }
}
?>
