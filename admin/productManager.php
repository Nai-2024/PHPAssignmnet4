<?php
require_once __DIR__ . '/../data/db.php';


// Get all products
$query = $db->query('SELECT * FROM product ORDER BY name');
$products = $query->fetchAll();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Product Management</title>
</head>

<body>
    <h1>Products</h1>
    <!-- Home -->
    <a href="../index.php"><strong>Home</strong></a><br><br>
    <!-- Add  New Product link-->
    <a class="add-tech-link" href="addProducts.php"><strong>Add New Product</strong></a><br><br>

    <table cellpadding="8">
        <tr>
            <th>Code</th>
            <th>Name</th>
            <th>Version</th>
            <th>Release Date</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?= htmlspecialchars($product['productCode']) ?></td>
                <td><?= htmlspecialchars($product['name']) ?></td>
                <td><?= htmlspecialchars($product['version']) ?></td>
                <td><?= htmlspecialchars($product['releaseDate']) ?></td>
                <td>
                    <a href="editProduct.php?productCode=<?= urlencode($product['productCode']) ?>">Edit</a> |
                    <a href="deleteProduct.php?productCode=<?= urlencode($product['productCode']) ?>"
                        onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>