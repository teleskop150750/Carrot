<?php

// Если заполненны все поля формы тогда готовим письмо и отпраляем
if (!empty($_POST) && trim($_POST['name']) != '' && trim($_POST['tel']) != '') {
	$mess = $_POST['message'] ?? null;
	$mess = $_POST['check'] ?? null;
	// Формируем текст письма
	$message =  "Вам пришло новое сообщение с сайта: <br><br>\n" .
		"<strong>Имя отправителя:</strong>" . strip_tags($_POST['name']) . "<br>\n" .
		"<strong>Телефон отправителя: </strong>" . strip_tags($_POST['tel']) . "<br>\n" .
		"<strong>Курьер: </strong>" . strip_tags($_POST['check']) . "<br>\n" .
		"<strong>Сообщение: </strong>" . strip_tags($_POST['message']);

	// Формируем тему письма, специально обрабатывая её
	$subject = "=?utf-8?B?" . base64_encode("Сообщение с сайта!") . "?=";

	// Указываем от кого будет отправлено письмо
	$email_from = "info@web.ru";
	$name_from = "Личный сайт портфолио";

	// Формируем заголовки письма
	$headers = "MIME-Version: 1.0" . PHP_EOL .
		"Content-Type: text/html; charset=utf-8" . PHP_EOL .
		"From: " . "=?utf-8?B?" . base64_encode($name_from) . "?=" . "<" . $email_from . ">" .  PHP_EOL .
		"Reply-To: " . $email_from . PHP_EOL;

	// Выполняем отправку письма
	$sendResult = mail('teleskop150750@gmail.com', $subject, $message, $headers);

	if ($sendResult) {
		// Перенаправляем на страницу "Спасибо"
		header('location: /page/thankyou.html');
	} else {
		$failure = "<div class=\"error\">Письмо не было отправлено. Повторите отправку еще раз.</div>";
	}
}


// Проверка переменной на ее наличие и на заполненность
function checkValue($item, $message)
{
	if (isset($item) && trim($item) == '') {
		echo '<div class="error">' . $message . '</div>';
	}
}
function checkValueMess($item, $message)
{
	if (!isset($_POST['check'])) {
		if (isset($item) && trim($item) == '') {
			echo '<div class="error">' . $message . '</div>';
		}
	}
}

// Распечатка заполненных полей из формы, если произошел вывод ошибок
function printPostValue($item)
{
	if (isset($item) && strlen(trim($item)) > 0) {
		echo $item;
	}
}
?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Carrot</title>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
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
		<div class="dark"></div>
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
					Мы любим свою работу и найдём подход к каждому клиенту.
				</p>
			</div>
		</section>


		<section class="order">
			<div class="container">
				<h2 class="order__title title">Оформить заказ</h2>
				<form action="index.php" method="post" class="order__form form">
					<!-- <?php
							echo "<pre style='font-size: 24px;'>";
							print_r($_POST);
							echo "</pre>";
							?> -->
					<?php checkValue($_POST['name'], 'Вы не ввели имя.'); ?>
					<label for="name" class="form__label">ФИО</label>
					<input type="text" id="name" name="name" value="<?php printPostValue($_POST['name']); ?>" class="form__input input-form">

					<?php checkValue($_POST['tel'], 'Вы не ввели телефон.'); ?>
					<label for="tel" class="form__label">Телефон</label>
					<input type="tel" id="tel" name="tel" value="<?php printPostValue($_POST['tel']); ?>" inputmode="tel" class="form__input input-form">

					<p class="form__label">Выбрать магазин</p>
					<div class="select-wrap">
						<select class="select visually-hidden" name="select">
							<option value="Пятерочка">Пятерочка</option>
							<option value="Верный">Верный</option>
							<option value="Магнит">Магнит</option>
							<option value="Перекресток">Перекресток</option>
							<option value="Другой магазин">Другой магазин</option>
						</select>
					</div>

					<p class="form__label">Укажите продукты</p>

					<label class="form__check-label label-ch">
						<input type="checkbox" name="check" class="form__check visually-hidden">
						<span class="check-box"></span>
						передать курьеру
					</label>


					<?php checkValueMess($_POST['message'], 'Вы не ввели имя.'); ?>
					<textarea name="message" class="form__textarea input-form"><?php printPostValue($_POST['message']); ?></textarea>

					<p class="form__price">цена 199р</p>

					<button type="submit" class="form__button">Оформить</button>

				</form>
			</div>
		</section>

		<section id="sectiin-2" class="comments">
			<div class="container">
				<h2 class="order__title title">Оставить отзыв</h2>
				<form class="comments__form">
					<div class="form form-comm">
						<input type="text" class="form-comm__input" name="nameCom" id="nameCom" placeholder="Имя">
						<input type="text" class="form-comm__input" name="textCom" id="textCom" placeholder="Текст">
					</div>
					<button type="button" class="form__button form-comm__button" id="btnCom">отправить</button>
				</form>
				<?php
				require_once(__DIR__ . './php/connect.php');
				$sql = 'SELECT * FROM test ORDER  BY id DESC LIMIT 3';
				$sth = $dbh->prepare($sql);
				$sth->bindParam(':t', $k);
				$sth->execute();
				$data = $sth->fetchAll(PDO::FETCH_ASSOC);
				?>
				<div id="comBody">
					<?php foreach ($data as $value) { ?>
						<article class="comments__comment">
							<div class="comment__body">
								<p class="comment__name"><?php echo $value['name'] ?></p>
								<p class="comment__text"><?php echo $value['text'] ?></p>
							</div>
						</article>
					<?php } ?>
				</div>
				<div class="comments__form">
					<button type="button" class="form__button form-comm__button" id="btnComAdd">показать еще</button>
				</div>

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

	<script src="js/jquery-3.4.1.js"></script>

	<script src="js/jquery.inputmask.min.js"></script>
	<!-- <script src="js/jquery.inputmask.min.js"></script> -->
	<script src="js/mask.js"></script>
	<script src="js/select.js"></script>
	<script src="js/check.js"></script>
	<script src="js/form2.js"></script>
	<script src="js/form3.js"></script>
	<script src="js/scroll.js"></script>
</body>

</html>