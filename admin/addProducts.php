<?php

require_once __DIR__ . '/../data/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $code = $_POST['productCode'];
    $name = $_POST['name'];
    $version = $_POST['version'];
    $releaseDate = $_POST['releaseDate'];

    $sql = 'INSERT INTO product (productCode, name, version, releaseDate) VALUES (?, ?, ?, ?)';
    $stmt = $db->prepare($sql);
    $stmt->execute([$code, $name, $version, $releaseDate]);

    header('Location: productManager.php');
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

<!-- Page heading -->
<h1>Add Product</h1>

 <a href="../index.php"><strong>Home</strong></a><br><br>
 
<!-- Products form -->
<form method="post">
    <!-- Products Code -->
    <label>Code:
        <input type="text" name="productCode" required>
    </label>
    <!-- Products name -->
    <label>Name:
        <input type="text" name="name" required>
    </label>
    <!-- Products Version -->
    <label>Version:
        <input type="text" name="version" required>
    </label>
    <!-- Products Release Date -->
    <label>Release Date:
        <input type="date" name="releaseDate" required>
    </label>
    <!-- Add button -->
    <button type="submit">Add</button>
</form>
<a href="productManager.php">Back to Products</a>