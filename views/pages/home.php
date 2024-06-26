<?php
/**
 * @var \App\Core\View\View $view
 */
?>


<?php $view->component('start') ?>
	<header class="main-header">
		<div class="navigation-container">
			<a class="logo-link" href=""><img class="main-logo" src="/images/logo.png" alt="Логотип Альфа Спиритс"></a>
			<nav class="main-navigation">
				<ul class="navigation-list">
					<li class="navigation-item"><a class="navigation-link" href="#">О Компании</a></li>
					<li class="navigation-item"><a class="navigation-link" href="#">Карьера</a></li>
					<li class="navigation-item"><a class="navigation-link" href="#">Контакты</a></li>
					<li class="navigation-item enter-button"><a class="navigation-link" href="login">Вход</a></li>
				</ul>
			</nav>
		</div>
		<section class="first-screen">
			<div class="first-screen-text">
				<h1 class="main-title">Дистрибьютор алкоголя<br>Альфа Спиритс</h1>
				<p class="about-company">Оптовые продажи алкоголя<br>Организация дегустаций и винных вечеров</p>
				<div class="link-button-container"><a class="link-button" href="#">Перейти</a></div>
			</div>
		</section>
	</header>
	<main>
		<section class="screen-about-company">
			<div class="text-container">
				<h2 class="title">О компании</h2>
				<p class="text-about-company">Добро пожаловать на страницу алкогольной компании Альфа Спиритс! Мы
					стремимся предложить нашим
					клиентам уникальные и качественные вина и крепкий алкоголь со всего мира. Наша компания основана
					на
					страсти к качественным и интересным напиткам и стремлении поделиться этой страстью с миром.<br><br>
					Мы с удовольствием, знаниями и опытом подберем вино и крепкие напитки конкретно для Вашего
					проекта,
					учитывая особенности бизнеса, вкусов целевой аудитории, подберем винную карту в Ваш ресторан под
					Ваше меню. Закроем потребности любого крупного мероприятия! <br><br>
					Мы верим, что вино - это не просто напиток. Вино объединяет людей, создавая атмосферу тепла и
					счастья. Мы видим себя в качестве посредников между винодельнями и любителями вина, дарящих
					каждому
					возможность насладиться уникальным опытом, который может предложить только вино.</p>
			</div>
			<div class="photo-container">
				<div class="photo-container-left">
					<img src="/images/image 2.jpg" class="photo1">
					<img src="/images/image 4.jpg" class="photo3">
				</div>
				<div class="photo-container-right">
					<img src="/images/image 5.jpg" class="photo4">
					<img src="/images/image 3.jpg" class="photo2">
				</div>
			</div>
		</section>
		<section class="news">
			<h2 class="title">Новости</h2>
		</section>
	</main>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.10/SmoothScroll.min.js" integrity="sha256-huW7yWl7tNfP7lGk46XE+Sp0nCotjzYodhVKlwaNeco=" crossorigin="anonymous"></script>
	<script src="/js/scroll.js"></script>
<?php $view->component('end') ?>