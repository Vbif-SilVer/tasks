<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "products";
    
// Создание подключения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}
$sql = "SELECT name, description, price, image_path FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<div class='product-list'>";
    while($row = $result->fetch_assoc()) {
        echo "<div class='product'>";
        echo "<h2>" . htmlspecialchars($row["name"]) . "</h2>";
        echo "<img src='" . htmlspecialchars($row["image_path"]) . "' alt='" . htmlspecialchars($row["name"]) . "' />";
        echo "<p>" . htmlspecialchars($row["description"]) . "</p>";
        echo "<p>Price: $" . htmlspecialchars($row["price"]) . "</p>";
        echo "</div>";
    }
    echo "</div>";
} else {
    echo "<p class='no-products'>Нет товаров.</p>";
}
$conn->close();
?>

</body>
</html>
