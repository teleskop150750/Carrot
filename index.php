<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Document</title>
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/description.css">
	<link rel="stylesheet" href="css/order.css">
	<link rel="stylesheet" href="css/select.css">
	<link rel="stylesheet" href="css/comments.css">
	<link rel="stylesheet" href="css/footer.css">
</head>

<body>
	<header class="header">
		<div class="container">
			<div class="header__wrap">
				<div class="header__nav-wrap">
					<div class="header__logo">
						<svg class="header__logo-img">
							<use xlink:href="svg/sprite.svg#logo"></use>
						</svg>
					</div>
					<nav class="header__nav nav">
						<ul class="nav__list">
							<li class="nav__item">
								<a href="#sectiin-1" class="nav__link scroll">О наc</a>
							</li>
							<li class="nav__item">
								<a href="#sectiin-2" class="nav__link scroll">Отзывы</a>
							</li>
							<li class="nav__item">
								<a href="#sectiin-3" class="nav__link scroll">Контакты</a>
							</li>
						</ul>
					</nav>
				</div>

				<div class="header__title">
					<h1>Доставка<br>продуктов<br>
						по Новомосковску</h1>
				</div>
				<a href="#sectiin-1" class="header__arrow scroll">
					<svg class="header__arrow-img">
						<use xlink:href="svg/sprite.svg#arrow"></use>
					</svg>
				</a>
			</div>
		</div>
		<div class="dark"></div>
	</header>

	<main>
		<section id="sectiin-1" class="description">
			<div class="container">
				<h2 class="description__title title">О нас</h2>
				<p class="description__text">
					Компания «Carrot Product» - это организация, которая поможет Вам доставить продукты в любой уголок
					нашего города.
					Мы развиваемся в этой области более 2 лет и получили сотни положительных отзывов.
				</p>
				<p class="description__text">
					Доставка продуктов – это возможность уделить время себе и своим близким без нужды выходить из дома,
					стоять в
					длинных очередях и нести тяжёлые пакеты, пока ваши продукты едут к Вам.
				</p>
				<p class="description__text">
					Мы любим свою работу и найдём подход к каждому клиенту
				</p>
			</div>
		</section>


		<section class="order">
			<div class="container">
				<h2 class="order__title title">Оформить заказ</h2>
				<form action="" class="order__form form">

					<label for="name" class="form__label">ФИО</label>
					<input type="text" id="name" class="form__input input-form">

					<label for="tel" class="form__label">Телефон</label>
					<input type="tel" id="tel" class="form__input input-form">

					<p class="form__label">Выбрать магазин</p>
					<div class="select-wrap">
						<select class="select visually-hidden" name="select">
							<option value="One">Пятерочка</option>
							<option value="Two">Верный</option>
							<option value="Three">Магнит</option>
							<option value="Five">Перекресток</option>
							<option value="Four">Другой магазин</option>
						</select>
					</div>

					<p class="form__label">Укажите продукты</p>

					<label class="form__check-label label-ch">
						<input type="checkbox" name="a" class="form__check visually-hidden">
						<span class="check-box"></span>
						передать курьеру
					</label>

					<textarea name="" class="form__textarea input-form"></textarea>

					<button type="submit" class="form__button">Оформить</button>

				</form>
			</div>
		</section>

		<section id="sectiin-2" class="comments">
			<div class="container">
				<h2 class="order__title title">Оставить отзыв</h2>
				<form action="index.php" method="POST" class="comments__form">
					<div class="form form-comm">
						<input type="text" class="form-comm__input" name="nameCom" id="nameCom" placeholder="Имя">
						<input type="text" class="form-comm__input" name="textCom" id="textCom" placeholder="Текст">
					</div>
					<button type="button" class="form__button form-comm__button" id="btnCom">отправить</button>
				</form>

				<div id="comBody"></div>
				<!-- <article class="comments__comment">
					<div class="comment__body">
						<p class="comment__name">Иван</p>
						<p class="comment__text">Быстрая доставка. Хорошая техподдержка</p>
					</div>
				</article> -->
				<form action="index.php" method="post" class="comments__form">
					<button type="submit" class="form__button form-comm__button">показать еще</button>
				</form>

			</div>
		</section>
	</main>

	<footer id="sectiin-3" class="footer">
		<div class="container">
			<h2 class="footer__title title">Контакты</h2>
			<div class="footer_wrap">
				<div class="footer__inst">
					<svg class="footer__svg" viewBox="0 0 521 512">
						<g>
							<linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="-46.0041" y1="634.1208" x2="-32.9334" y2="647.1917" gradientTransform="matrix(32 0 0 -32 1519 20757)">
								<stop offset="0" style="stop-color:#ffc107" />
								<stop offset="0.507" style="stop-color:#f44336" />
								<stop offset="0.99" style="stop-color:#9c27b0" />
							</linearGradient>
							<path style="fill:url(#SVGID_1_)" d="M352,0H160C71.648,0,0,71.648,0,160v192c0,88.352,71.648,160,160,160h192
	c88.352,0,160-71.648,160-160V160C512,71.648,440.352,0,352,0z M464,352c0,61.76-50.24,112-112,112H160c-61.76,0-112-50.24-112-112
	V160C48,98.24,98.24,48,160,48h192c61.76,0,112,50.24,112,112V352z" />
							<linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="-42.2971" y1="637.8279" x2="-36.6404" y2="643.4846" gradientTransform="matrix(32 0 0 -32 1519 20757)">
								<stop offset="0" style="stop-color:#ffc107" />
								<stop offset="0.507" style="stop-color:#f44336" />
								<stop offset="0.99" style="stop-color:#9c27b0" />
							</linearGradient>
							<path style="fill:url(#SVGID_2_)" d="M256,128c-70.688,0-128,57.312-128,128s57.312,128,128,128s128-57.312,128-128
	S326.688,128,256,128z M256,336c-44.096,0-80-35.904-80-80c0-44.128,35.904-80,80-80s80,35.872,80,80
	C336,300.096,300.096,336,256,336z" />
							<linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="-35.5456" y1="644.5793" x2="-34.7919" y2="645.3331" gradientTransform="matrix(32 0 0 -32 1519 20757)">
								<stop offset="0" style="stop-color:#ffc107" />
								<stop offset="0.507" style="stop-color:#f44336" />
								<stop offset="0.99" style="stop-color:#9c27b0" />
							</linearGradient>
							<circle style="fill:url(#SVGID_3_)" cx="393.6" cy="118.4" r="17.056" />
						</g>
					</svg>
				</div>
				<div class="footer__link">
					<a href="">Наш инстаграм</a>
				</div>
			</div>
		</div>
	</footer>

	<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
	 	integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
	 </script> -->
	<script src="js/jquery-3.4.1.js"></script>
	<script src="js/select.js"></script>
	<script src="js/check.js"></script>
	<script src="js/form2.js"></script>
	<script src="js/scroll.js"></script>
</body>

</html>