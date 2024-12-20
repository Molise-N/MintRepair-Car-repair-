<?php include 'config/database.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="loginstyle.css">
  <link rel="stylesheet" href="Buyerassets/css/bootstrap.min.css">
  <title>login</title>
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
                    <h4 class="mt-1 mb-5 pb-1">Our Perfect Lesotho Property Matchmaker</h4>
                  </div>
  
                  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
                    <p>Please login to your account</p>
  
                    <div class="form-outline mb-4">
                      <input type="email" id="email" name="email" placeholder="email" required class="form-control"
                        placeholder="Email address" />
                      <label class="form-label" for="form2Example11">Username</label>
                    </div>
  
                    <div class="form-outline mb-4">
                      <input type="password" class="form-control" id="password" name="password" placeholer="password" required />
                      <label class="form-label" for="form2Example22">Password</label>
                    </div>
  
                    <div class="text-center pt-1 mb-5 pb-1">
                      <input type="submit" class="btn btn-success btn-block fa-lg mb-3" value="log in">
                    </div>
  
                    <div class="d-flex align-items-center justify-content-center pb-4">
                      <p class="mb-0 me-2">Don't have an account?</p>
                      <a href="id.php"><button type="button" class="btn btn-outline-success">Create new</button></a>
                    </div>
  
                  </form>
  
                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center bg-success">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <h4 class="mb-4">Find (or sell) your perfect property in Lesotho.</h4>
                  <p class="small mb-0">LesothoPropertyHub is the premier online marketplace designed to seamlessly connect property seekers with their ideal Lesotho haven. Whether you're a seasoned investor searching for a lucrative opportunity or a first-time buyer embarking on your real estate journey, our platform empowers you to find (or sell) your perfect property in Lesotho.</p>
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
    session_start();
    if (isset($_POST['email'])) {
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($conn, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);

        $query = "SELECT * FROM `users` WHERE email='$email' AND password='" . md5($password) . "'";
        $result = mysqli_query($conn, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['email'] = $email;
            $user = mysqli_fetch_assoc($result);
            $role = $user['role'];

            switch ($role) {
                case 'buyer':
                    header("Location: buyerDashboard.php");
                    break;
                case 'seller':
                    header("Location: sellerDashboard.php");
                    break;
                case 'both':
                    header("Location: bothDashboard.php");
                    break;
                case 'admin':
                      header("Location: adminDashboard.php");
                      break;
                default:
                    header("Location: dashDoard.php");
            }
        } else {
            echo "<script>alert('Incorrect Email/password.')</script>";
        }
    }
?>
