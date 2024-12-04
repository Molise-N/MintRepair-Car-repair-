<?php 
    require('auth_session.php');
    require_once 'config/database.php';

    $email = $_SESSION['email'];

    $query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $query);

    
   ?>
<!DOCTYPE html>
<html>
<head>
	<title>Image Upload Using PHP</title>
	<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			min-height: 100vh;
		}
	</style>
	<link rel="stylesheet" href="Buyerassets/css/bootstrap.min.css">
</head>
<body onload="getLocation();">
	<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
	<?php include('navbar/bothNav.php');?>
	<div style="height: 150px;"></div>
     <form class="myForm" action="upload.php" method="post" enctype="multipart/form-data">
			<div class="form-outline mb-4">
				<input type="hidden" name="email" value="<?php echo $_SESSION['email']; ?>" class="form-control"/>
				
			</div> 
			<div class="form-floating form-outline mb-4">
                    <select class="form-select" id="property_type" name="property_type" aria-label="Floating label select example">
                        <option name="property_type" value="residential">residential</option>
                        <option name="property_type" value="rental">rental</option>
                        <option name="property_type" value="warehouse">warehouse</option>
                    </select>
					<label for="floatingSelect">select property type</label>
			</div>
			<div class="form-outline mb-4">
                    <textarea class="form-control" name="description" cols="30" rows="10" placeholder="add property desciption"></textarea>
					<label class="form-label" >Property description</label>
            </div>
			<div class="form-outline mb-4">
				<input type="number" name="price" class="form-control"/>
				<label class="form-label" >price</label>
			</div> 
			
			<div class="form-outline mb-4">
				<input type="hidden" name="latitude" required/>
				<input type="hidden" name="longitude" required/>
			</div> 
			
			<div class="form-outline mb4">
				<p>Select Property Features (check all that apply):</p>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" value="High Ceilings" name="features[]" >
					<label class="form-check-label">
						High Ceilings
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" value="Master Suite" name="features[]" >
					<label class="form-check-label">
						Master Suite
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" value="garage" name="features[]" >
					<label class="form-check-label">
						garage
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" value="Walk-in Pantry" name="features[]" >
					<label class="form-check-label">
						Walk-in Pantry
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" value="Home Gym" name="features[]" >
					<label class="form-check-label">
						Home Gym
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" value="Home Theater" name="features[]" >
					<label class="form-check-label">
						Home Theater
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" value="Security System" name="features[]" >
					<label class="form-check-label">
						Security System
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" value="Central Air Conditioning" name="features[]" >
					<label class="form-check-label">
						Central Air Conditioning
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" value="Theater Security System" name="features[]" >
					<label class="form-check-label">
						Theater Security System
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" value="Hardwood Flooring" name="features[]" >
					<label class="form-check-label">
						Hardwood Flooring
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" value="fireplace" name="features[]" >
					<label class="form-check-label">
						fireplace
					</label>
				</div>

				<div class="form-check">
					<input class="form-check-input" type="checkbox" value="home office" name="features[]" >
					<label class="form-check-label">
						home office
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" value="outdoor space" id="feature" name="features[]" >
					<label class="form-check-label" >
						outdoor space
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" value="pool" name="features[]" >
					<label class="form-check-label" >
						pool
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" value="walk-in closet" name="features[]" >
					<label class="form-check-label" >
						walk-in closet
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="checkbox" value="fenced" name="features[]" >
					<label class="form-check-label" >
						fenced
					</label>
				</div>
            </div>
			<div class="form-outline mb-4">
				<input type="file" name="my_image">
			</div> 
           
		   
           <input type="submit" name="submit" value="Upload">
     	
     </form>
	 <script type="text/javascript">
		function getLocation(){
			if(navigator.geolocation) {
				navigator.geolocation.getCurrentPosition(showPosition);
			}else {
			// Handle case where geolocation is not supported
			alert("Geolocation is not supported by your browser.");
			}
		}
		function showPosition (position){
			document.querySelector('.myForm input[name = "latitude"]').value = position.coords.latitude;
			document.querySelector('.myForm input[name = "longitude"]').value = position.coords.longitude;
		}
		function showError(error) {
			switch(error.code){
				case error.PERMISSION_DENIED:
				alert("You Must Allow The Request For Geolocation To Fill Out The Form");
				location.reload();
				break;
			}
		}
		
	</script>
 
</body>
</html>