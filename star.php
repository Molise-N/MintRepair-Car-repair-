<?php

// Include your database connection script
include 'nid/config/database.php';

// Check if the form is submitted
if (isset($_POST['rating'])) {
  $rating = $_POST['rating'];
  $user_id = 1; // Replace with logic to get the actual user ID

  // Prepare SQL query to store rating
  $sql = "INSERT INTO ratings (user_id, product_id, rating) VALUES (?, ?, ?)";
  $stmt = $conn->prepare($sql);

  // Bind parameters to prevent SQL injection
  $stmt->bind_param("iii", $user_id, $product_id, $rating); // Replace $product_id with your actual product ID

  // Execute the statement
  if ($stmt->execute()) {
    echo "Rating submitted successfully!";
  } else {
    echo "Error submitting rating: " . $conn->error;
  }

  // Close the statement (optional)
  $stmt->close();
} else {
  echo "Invalid request";
}

// Close the connection (optional, assuming it's closed elsewhere)
$conn->close();
?>