<?php 

if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
	include "config/database.php";

	echo "<pre>";
	print_r($_FILES['my_image']);
	echo "</pre>";
	$email = $_POST['email'];
	$property_type = $_POST['property_type'];
	$description = $_POST['description'];
	$price = $_POST['price'];
	$feature = $_POST['features'];
	$allfeature =implode(",",$feature);
	$latitude =$_POST['latitude'];
	$longitude =$_POST['longitude'];

	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];

	if ($error === 0) {
		if ($img_size > 12500000) {// 12MB limit (adjust as needed)
			$em = "Sorry, your file is too large.";
		    header("Location: upload_prop.php?error=$em");
		}else {
			$img_ex =  explode('.', $img_name);
			$img_ex_lc = strtolower(end($img_ex));

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs ) ) { // 12MB limit (adjust as needed)
				$new_img_name = uniqid() . '.' . $img_ex_lc;
				$new_img_name1 = uniqid() . '.' . $img_ex_lc1;
				$new_img_name2 = uniqid() . '.' . $img_ex_lc2;
				
				// Check if directory exists, create it if not
				if (!file_exists('img')) {
				    mkdir('img', 0755, true);
				}
					
				if (move_uploaded_file($tmp_name, 'img/'. $new_img_name)) {
					echo "File moved successfully!";
					$my_image = $new_img_name;
				}else {
					echo "Error moving file";
					exit; // Stop script execution on error
				}

					// Insert into Database
					$sql = "INSERT INTO property(image_url,email,property_type,description,price,feature,latitude,longitude) 
							VALUES('$new_img_name','$email','$property_type','$description','$price','$allfeature','$latitude','$longitude')";
					mysqli_query($conn, $sql);
				
				echo "<script>alert('you have sucessfully uploaded your property')</script>";
			}else {
				$em = "You can't upload files of this type";
		        header("Location: upload_prop.php?error=$em");
			}
		}
	}else {
		$em = "unknown error occurred!";
		header("Location: upload_prop.php?error=$em");
	}

}else {
	header("Location: upload_prop.php");
}
