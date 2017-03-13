<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Верстаем сайт нах</title>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<script type="text/javascript" src="js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="styles/main.css">
	<link rel="favicon.ico" rel="shortcut icon" type="image/x-icon"> 
</head>
<body>
<div id="container">
	<header>
		<h1>&lt; MyAlex.ru &gt;</h1>
		<nav>
		<ul id="topmenu">
			<li>
				<a href="#" class="active">
				<span>Главная</span>
				</a>
			</li>
			<li>
				<a href="#">
				<span>Об авторе</span>
				</a>
			</li>
			<li>
				<a href="#">
				<span>Служба поддержки</span>
				</a>
			</li>
			<li>
				<a href="#">
				<span>Форум</span>
				</a>
			</li>
			<li>
				<a href="#">
				<span>Стол заказов</span>
				</a>
			</li>
			<li>
				<a href="#">
				<span>Тесты</span>
				</a>
			</li>
			<li>
				<a href="#">
				<span>Мой блог</span>
				</a>
			</li>
		</ul>
		</nav>
	</header>
	<div id="top">
		<div class="clear"></div>
		<div id="search">
			<form name="search" action="#" method="get">
				<div>
					<input type="text" name="query" placeholder="Поиск" />
					<input type="submit" name="search" value="" />
				</div>
			</form>
		</div>
		<div id="auth">
			<div>
				<form name="auth" action="#" method="post">
					<div>
						<input type="text" name="login" placeholder="Логин" />
						<input type="password" name="password" placeholder="Пароль" />
						<input type="submit" name="auth" value="Войти" />
					</div>
				</form>
				<img src="images/bg_item_top.png" alt="" />
				<img src="images/icon_register.png" alt="" id="icon_register"/>
				<a href="#" id="link_register">Регистрация</a>
				<img src="images/bg_item_top.png" alt="" />
			<div id="links_reset">
				<a href="#">Забыли пароль?</a>
				<a href="#">Забыли логин?</a>
			</div>
			</div>
		</div>
	</div>
	<div id="slider">
		<div id="course">
			<img src="images/php-cover.png" alt="">
			<h2>PHP и MySql с нуля до Гуру</h2>
			<section>
				<p>Видеокурс "<b>PHP и MySQL с Нуля до Гуру</b>" - это <b>более 20-ти часов видеоуроков по изучению PHP и MySQL</b> с точки зрения создания сайтов.</p>
				<p>Ключевой момент курса - это <b>создание движка для сайта с нуля</b>. Никакого готового кода, никаких готовых скриптов, а только всё с нуля и прямо на Ваших глазах. Каждая строчка комментируется. Но, главное, я рассказываю о своём подходе <b>при создании движков</b>. Этот подход универсален и оптимален для сайтов любой функциональности: будь то социальная сеть или будь то поисковая система.</p>
				<a class="more" href="#">Подробнее</a>
			</section>
		</div>
		<div class="clear"></div>
	</div>
</div>

<?php if(isset($_GET['query']){echo '<p>111</p>'; } ?>
</body>
</html>