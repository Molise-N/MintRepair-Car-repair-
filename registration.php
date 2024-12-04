

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Buyerassets/css/bootstrap.min.css">
  <title>Account Registration</title>
</head>
<body>
  <section class="h-100 " style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
          <div class="card card-registration my-4">
            <div class="row g-0">
              <div class="col-xl-6 d-none d-xl-block">
                <img src="Buyerassets/img/registration.jpg"
                  alt="Sample photo" class="img-fluid h-100"
                  style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
              </div>
              <form class="col-xl-6" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
                <div class="card-body p-md-5 text-black">
                  <h3 class="mb-5 text-uppercase">Account Registration</h3>
  
                  <div class="form-outline mb-4">
                    <input type="hidden" name="name" value="<?php echo htmlspecialchars($_GET['name']); ?>" class="form-control"
                      placeholder="Full name" /> 
                    
                  </div>
                   
                  <div class="form-outline mb-4">
                    <input type="email" name="email" class="form-control"
                      placeholder="Email address" />
                    <label class="form-label"  >Email</label>
                  </div>
                  <div class="form-outline mb-4">
                    <input type="number" name="contact" class="form-control"
                      placeholder="598888" />
                    <label class="form-label"  >Contact</label>
                  </div>
  
                  <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
  
                    <h6 class="mb-0 me-4">Role: </h6>
  
                    <div class="form-check form-check-inline mb-0 me-4">
                      <input class="form-check-input" type="radio" name="role" value="buyer" />
                      <label class="form-check-label" >buyer</label>
                    </div>
  
                    <div class="form-check form-check-inline mb-0 me-4">
                      <input class="form-check-input" type="radio" name="role" value="seller" />
                      <label class="form-check-label" >seller</label>
                    </div>
  
                    <div class="form-check form-check-inline mb-0">
                      <input class="form-check-input" type="radio" name="role" value="both" />
                      <label class="form-check-label" >buyer and seller</label>
                    </div>
  
                  </div>
  
                  <div class="form-outline mb-4">
                    <input type="hidden" name="id_number"  value="<?php echo htmlspecialchars($_GET['id_number']); ?>" class="form-control form-control-lg" placeholder="id_number"/>
                  </div>
                  <div class="form-outline mb-4">
                    <input type="password" name="password" class="form-control form-control-lg" placeholder="password"/>
                    <label class="form-label" >password</label>
                  </div>

  
                  <div class="d-flex justify-content-center pt-3">
                    <input type="submit" name="submit" value="Register" class="btn btn-warning btn-lg ms-2">
                  </div>
                  <br>
                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Already have an acount?</p>
                    <a href="index.php"><button type="button" class="btn btn-outline-danger">login</button></a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
<?php
include 'config/database.php';
//...

if (isset($_REQUEST['name'])) {
    $name = stripslashes($_REQUEST['name']);
    $name = mysqli_real_escape_string($conn, $name);
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($conn, $email);
    $contact = stripslashes($_REQUEST['contact']);
    $contact = mysqli_real_escape_string($conn, $contact);
    $role = stripslashes($_REQUEST['role']);
    $role = mysqli_real_escape_string($conn, $role);
    $id_number = stripslashes($_REQUEST['id_number']);
    $id_number = mysqli_real_escape_string($conn, $id_number);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conn, $password);

    $query = "INSERT into `users` (name, email,contact, role, id_number, password)
              VALUES ('$name', '$email', '$contact', '$role', '$id_number','". md5($password). "')";
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "<script>alert('You have successfully registered')</script>";
    } else {
        echo "<script>alert('Error registering user')</script>";
    }
  }
?>