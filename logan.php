<?php require_once 'registration/connect.php';?>
<?php
$sql = $pdo->prepare("SELECT * FROM e200");
$sql->execute();
$res=$sql->fetch(PDO::FETCH_ASSOC);?>




<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Renault Logan 2020</title>
	<link rel="icon" href="img/favicon.jpg" type="image/x-icon">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js@9.0.1/public/assets/styles/choices.min.css" />
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css?v2">
	<link rel="stylesheet" href="css/adaptive.css">
	<link rel="stylesheet" href="calendar/air-datepicker.css">
	<link defer rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>
	<div class="wrapper">
		<header id="header-logan">
			<div class="container header__container">

				<a href="index.html"><img class="logo" src="img/ava autopark.jpg" alt="Логотип"></a>
				<nav class="header__nav">
					<ul class="nav-ul">
						<li><a class="header__nav-link" href="#about">О нас</a></li>
						<li><a class="header__nav-link" href="#advantages-title">Преимущества</a></li>
						<li><a class="header__nav-link" href="#gallery-title">Автопарк</a></li>
						<li><a class="header__nav-link" href="#faq-title">Вопрос - ответ</a></li>
					</ul>
				</nav>
				<div class="social">
					<a target="_blank" href="https://vk.com/autoparkrent"><img class="ico-img" src="img/vk-ico.png"
							alt="Группа вконтакте"></a>
					<a target="_blank" href="https://t.me/autoparkrent"><img class="ico-img" src="img/tg-ico.png"
							alt="Группа телеграм"></a>
					<a class="social-tel" href="tel:+791777777777">+7-917-777-77-77</a>
				</div>


				<!-- Иконка бургер-меню -->
				<div class="burger-menu">
					<input type="checkbox" id="burger-checkbox" class="burger-checkbox">
					<label for="burger-checkbox" class="burger"></label>
					<ul class="menu-list">
						<li><a href="https://autopark.site/index.html#about" class="menu-item">О нас</a>
						<li>
						<li><a href="https://autopark.site/index.html#advantages-title" class="menu-item">Преимущества</a>
						<li>
						<li><a href="https://autopark.site/index.html#gallery-title" class="menu-item">Автопарк</a>
						<li>
						<li><a href="https://autopark.site/index.html#faq-title" class="menu-item">Вопрос - ответ</a>
						<li>
					</ul>
				</div>
				<!-- Иконка бургер-меню -->

			</div>
		</header>

		<div class="up-btn">
			<a href="#header-logan">&#8657;</a>
		</div>

		<h1 class="car-name">
			Renault Logan 2020
		</h1>

		<main class="main">
			<div class="container main__container">
				<div class="car-info-width">
					<div class="car-info">
						<div class="swiper loganSwiper">
							<div class="swiper-wrapper">
								<div class="swiper-slide"><img class="cars-preview-img" src="autos img/logan/logan1.jpg"></div>
								<div class="swiper-slide"><img class="cars-preview-img" src="autos img/logan/logan2.jpg"></div>
								<div class="swiper-slide"><img class="cars-preview-img" src="autos img/logan/logan3.jpg"></div>
								<div class="swiper-slide"><img class="cars-preview-img" src="autos img/logan/logan4.jpg"></div>
								<div class="swiper-slide"><img class="cars-preview-img" src="autos img/logan/logan5.jpg"></div>
							</div>
							<div class="swiper-button-next"></div>
							<div class="swiper-button-prev"></div>
						</div>
						<div class="specifications">
							<h2 class="specifications-title">
								<strong>Характеристики</strong>
							</h2>
							<div class="specifications-text">
								<p>Год выпуска: 2020</p>
								<p>Кондиционер: Нет</p>
								<p>Стоячих мест: 0</p>
								<p>Сидячих мест: 5</p>
								<p>Инвалидных мест: 0</p>
								<p>Объём двигателя: 1,5 л</p>
								<p>Тип двигателя: Бензин</p>
								<p>Коробка передач: Механика</p>
								<p>Привод: Передний</p>
								<p>Комплектация: Базовая</p>
								<p>Тип кузова: Седан 5-дверный</p>
								<p>Мощность: 114 л.с.</p>
								<p>Руль: Левый</p>
								<div class="availability"><?php echo $res["availability"]?></div>
							</div>
						</div>

					</div>

					<div class="preview-price">
						<strong>Стоимость за сутки:</strong> 3000руб
					</div>
					<div class="preview-deposit">
						<strong>Залог: </strong>15000руб
					</div>
					<div class="preview-total"></div>

					<div class="quiz">
						<fieldset class="date-selection">
							<legend class="rent-date-title">
								Дата аренды
								<input name="datepicker" type="text" id="airdatepicker" class="form-control">
							</legend>
						</fieldset>

						<fieldset class="rent-place">
							<legend class="select-title">Место доставки автомобиля</legend>
							<select name="select-category" class="select">
								<option value="cinema">Кинотеатр "Октябрь"</option>
								<option value="busStation">Автовкозал</option>
								<option value="otherPlace">Другое место (Обсудить при звонке)</option>
							</select>
						</fieldset>

						<button class="submit-btn">Заказать</button>
					</div>
				</div>
			</div>
		</main>

		<footer class="footer">
			<div class="container footer__container">
				<div class="footer__info">
					<a target="_blank" href="politika-conf.html">Политика конфиденциальности</a>
					<a target="_blank" href="dogovor.html">Договор</a>
				</div>
				<div class="social footer__social">
					<div>
						<a target="_blank" href="https://vk.com/autoparkrent"><img class="ico-img-footer" src="img/vk-ico.png"
								alt="Группа вконтакте"></a>
						<a target="_blank" href="https://t.me/autoparkrent"><img class="ico-img-footer" src="img/tg-ico.png"
								alt="Группа телеграм"></a>
					</div>
					<a href="tel:+791777777777">+7-917-777-77-77</a>
				</div>
			</div>
		</footer>
	</div>

	<div class="modal">
		<div class="modal-container">
			<div class="modal-close">&times;</div>
			<div class="modal-body">
				<form action="/send.php" method="post" class="form">
					<input type="hidden" name="auto" value="">
					<input type="hidden" name="date" value="">
					<input type="hidden" name="address" value="">
					<input type="hidden" name="price-total" value="">
					<h3>Отправить заявку</h3>
					<div class="form-row modal-form-auto"></div>
					<div class="form-row modal-form-date"></div>
					<div class="form-row modal-form-address"></div>
					<div class="form-row modal-form-price-total"></div>
					<div class="form-row">
						<input type="text" name="name" placeholder="Имя" required>
					</div>
					<div class="form-row">
						<input type="text" name="phone" placeholder="Телефон" required>
					</div>
					<div class="form-row">
						<input type="email" name="email" placeholder="Email" required>
					</div>
                    <div class="form-row">
						<div class="accept-btn">
							<label>
								<input class="accept-btn-inpt" type="checkbox" name="accept" required>C <a target="_blank" class="doc-btn"
									href="politika-conf.html">политикой конфиденциальности</a> и <a target="_blank" class="doc-btn"
									href="dogovor.html">договором</a> аренды ознакомлен
							</label>
						</div>
					</div>
					<div class="form-row">
						<button type="submit" class="btn">Отправить</button>
					</div>
					<div class="form-result"></div>
				</form>
			</div>
		</div>
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/mask-phone.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
	<script src="calendar/air-datepicker.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/choices.js@9.0.1/public/assets/scripts/choices.min.js"></script>
	<script src="js/script.js?v2"></script>
</body>

</html>