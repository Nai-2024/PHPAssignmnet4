<?php

// Database connection
require_once __DIR__ . '/../data/db.php';

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get form values from POST request
  $firstName = $_POST['firstname'];
  $lastName = $_POST['lastname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $phone = $_POST['phone'];

  // Prepare SQL INSERT query using placeholders to prevent SQL injection
  $sql = 'INSERT INTO technicians (firstname, lastname, email, password, phone) VALUES (?, ?, ?, ?, ?)';

  // Prepare the statement
  $stmt = $db->prepare($sql);

  // Execute the statement with form data
  $stmt->execute([$firstName, $lastName, $email, $password, $phone]);

  // Redirect to the technician list page after insertion
  header('Location: technicianManager.php');
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Add Technician</title>
  <!-- Link to external CSS file for styling -->
  <link rel="stylesheet" href="../main.css">

</head>

<body>

  <!-- Page heading -->
  <h1>Add Technician</h1>

  <!-- Home -->
  <a href="../index.php"><strong>Home</strong></a><br><br>

  <!-- Technician form -->
  <form method="post">
    <!-- First Name field -->
    <label>First Name:</label>
    <input type="text" name="firstname" required>

    <!-- Last Name field -->
    <label>Last Name:</label>
    <input type="text" name="lastname" required>

    <!-- Address field -->
    <label>Address:</label>
    <input type="text" name="address" required>

    <!-- City field -->
    <label>City:</label>
    <input type="text" name="city" required>

    <!-- Province field -->
    <label>Province:</label>
    <input type="text" name="province" required>

     <!-- Postal Code field -->
    <label>Postal Code:</label>
    <input type="text" name="postalCode" required>

      <!-- Country Code field -->
    <label>Country Code:</label>
    <input type="text" name="countryCode" required>











    <!-- Email field -->
    <label>Email:</label>
    <input type="text" name="email" required>

    <!-- Password field -->
    <label>Password:</label>
    <input type="text" name="password" required>

    <!-- Phone field -->
    <label>Phone:</label>
    <input type="text" name="phone" required>

    <!-- Submit button -->
    <button type="submit">Add Customer</button>
  </form><br>

  <!-- Link back to the list of technicians -->
  <a href="customerManager.php"><strong>Back to Customer Manager</strong></a>

</body>

</html>