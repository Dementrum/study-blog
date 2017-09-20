<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Статус отправки письма:</title>
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<link rel="stylesheet" href="les.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header>
		<div class="header">
			<div class="mid">
				<img src="images/logo.jpg" class="logo" alt="логотип Master-CSS">
				<div class="icons">
					<a href="skype:dementrkolesnikov"><img src="images/iscype.png" alt=""></a>
					<a href="mailto:dmi56756877@yandex.ru" target="_blank"><img src="images/imail.png" alt=""></a>
					<a href="mailto:dmitrikolesnikov1976@gmail.com" target="_blank"><img src="images/igplus.png" alt=""></a>
				</div>
				<div class= "name">Онлайн-дневник Дмитрия Колесникова (страшно смотреть).</div>
				<div class="desc">Здесь содержатся заметки, созданные в ходе обучения на тренинге.</div> 
				<div class="clear"></div>
			</div>
		</div>
	</header>
	<nav>
		<div class="main_menu">
			<div class="mid">
				<ul>
					<li><a href="index.html">Главная</a></li>
					<li><a href="">Об авторе</a></li>
					<li><a href="">Отзыв о тренинге</a></li>
					<li><a href="form.html">Связаться со мной</a></li>
					<div class="clear"></div>
				</ul>
			</div>
		</div>
	</nav>
	<div class="main">
		<div class="sidebar">
			<div class="widget">
				<ul>
					<li><a href="week1.html">Неделя 1 - Ясли</a></li>
					<li><a href="week2.html">Неделя 2 - Детский сад</a></li>
					<li><a href="week3.html">Неделя 3 - Начальная школа</a></li>
					<li><a href="week4.html">Неделя 4 - Средняя школа</a></li>
					<li><a href="week5.html">Неделя 5 - Старшая школа</a></li>
				</ul>
			</div>
		</div>
		<div class="content">
			<section>
				<div class="day">
					<h2>Результат  отправки письма:</h2>
					<div class="form_aside">
						<?php
							if (isset($_POST['name'])) {$name = $_POST['name']; 
								echo "<b>Имя отправителя: </b>".$name."<br>";}
							if (isset($_POST['email'])) {$email = $_POST['email']; echo "<b> E-mail  отправителя: </b>".$email."<br>";}
							if (isset($_POST['theme'])) {$theme = $_POST['theme']; echo "<b>Тема: </b>".$theme."<br>";}
							if (isset($_POST['phone'])) {$phone = $_POST['phone']; echo "<b>Телефон: </b>".$phone."<br>";}
							if (isset($_POST['text'])) {$text = $_POST['text']; echo "<b>Сообщение: </b>".$text."<br>";}

							$to = "dmi56756877@mail.ru, web-js-coder.ru@yandex.ru, dmi56756877@yandex.ru, dmitrikolesnikov1976@gmail.com"; 
							$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
							$headers .= "From: \"".$name."\" <".$email.">\r\n";
							$subject = $theme;
							$message = "<b>Имя отправителя:</b> $name <br>
							            <b>E-mail отправителя:</b> $email <br>
							            <b>Телефон:</b> $phone <br>
							            <b>Сообщение:</b> <br> $text";

							$send = mail ($to, $subject, $message, $headers);
							 
							 if ($send == 'true')
							 {
								 echo "<div class='block_chip'><p>Ваше письмо доставлено. Очень скоро с вами свяжутся.</p></div>";
									 }
							 else
							 {
								 echo "<div class='block_important'><p>К сожалению, ваше письмо не доставлено. Вы можете написать нам на почту dmi56756877@yandex.ru</p></div>";
							 }
						?>
					</div>    
			    </div>
	    	</section>
		</div>
	</div>
	
	<footer>
		<div class="footer">
			<div class="mid">
				<div class="mid">
				<img src="images/logo-foot.png" height="50" width="320" alt="">
				2017 &copy; Создано по тренингу "Верстаем на 5+ "2.0"
			</div>
			</div>
		</div>
	</footer>
</body>
</html>