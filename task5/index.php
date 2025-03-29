<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Магазин Shetuka</title>
	<link rel="icon" type="image/x-icon" href="./favicon.ico">
</head>

<body>
	<header>
		<div class="header-container">
			<a href="#">
				<img src="./logo.svg" alt="Shetuka Store Logo" class="logo">
			</a>
			<p class="slogan">Мы любим создавать особенные и уникальные вещи для украшения вашей жизни и дома</p>
		</div>
	</header>
	
	<main>
		<section class="products">
			<?php
			$servername = "localhost";
			$username = "root";
			$password = "root";
			$dbname = "task_shetuka";
	 
			// Создание подключения
			$conn = new mysqli($servername, $username, $password, $dbname);
	 
			// Проверка соединения
			if ($conn->connect_error) {
				die("Ошибка подключения: " . $conn->connect_error);
			}
	 
			$sql = "SELECT name, description, price, image_path FROM products";
			$result = $conn->query($sql);
	 
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					echo "<a class='product'>";
					echo "<img src='" . htmlspecialchars($row["image_path"]) . "' alt='" . htmlspecialchars($row["name"]) . "'>";
					echo "<h4>" . htmlspecialchars($row["name"]) . "</h4>";
					echo "<p class='price'>" . htmlspecialchars($row["price"]) . "₽</p>";
					echo "</a>";
				}
			} else {
				echo "<h1 class='no-products'>Нет товаров.</h1>";
			}
	 
			$conn->close();
			?>
		</section>
		
		<div class="contact">
			<div class="contact-container">
				<div class="deliver-info">
					<div class="deliver-info-container">
						<h4>ИНФОРМАЦИЯ О ДОСТАВКЕ</h4>
						<p>Мы находимся в Москве. Вы можете самостоятельно забрать покупку из точки самовывоза или заказать доставку курьером по Москве и Московской области. 
							Также доступна доставка почтой по всей России.</p>
					</div>
				</div>
				<div class="contact-info">
					<p>+1 123 456 78 90</p>
					<p>shetuka@store.com</p>
					<p style="padding-top: 25px; font-size: 14pt;">По любым вопросам и для заказа свяжитесь с нами по телефону, почте и в соцсетях:</p>
					<div class="social-media">
						<a href="#" title="X">
							<img src="./img/social-icons/x.png" alt="">
						</a>
						<a href="#" title="VK">
							<img src="./img/social-icons/vk.png" alt="">
						</a>
						<a href="#" title="Telegram">
							<img src="./img/social-icons/tg.png" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
			
			<footer>
				<div class="footer-container">
					<p>Flickr Credits: <a href="#">Anita Albrecht</a>| <a href="#">Wicker Paradise</a> | <a href="#">Boonetti.com</a> | <a href="#">Boonetti.com</a> | <a href="#">leko_camera</a>
					</p>
					<p>Все фотографии, тексты и видеоматериалы принадлежат их владельцам и использованы для демонстрации. Пожалуйста, не используйте контент шаблона в коммерческих целях.</p>
				</div>
			</footer>
	</main>

</body>
</html>