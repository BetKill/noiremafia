<?php 


include 'auto.php';
include 'interaction_with_the_data_base/Connection_for_base_data.php';
?>

<html lang="ru">
	<head>
	    <meta http-equiv="cache-control" content="no-cache">
        <meta http-equiv="expires" content="0">
	    <link rel="shortcut icon" href="img/logo.png" type="image/png">
		<title>Mafia</title>
		<link rel="stylesheet" href="css/style.css">
		<meta charset="UTF-8">
		<link rel="canonical" href="https://www.fonts-online.ru/font/Copperplate-Light">
		<meta name="viewport" content="width=device-width">
		<style type="text/css">
		@font-face {
    font-family: 'Copperplate-Light';
      src: url('fonts/Copperplate-Light.eot');
  src: url('fonts/Copperplate-Light.eot?#iefix') format('embedded-opentype'),
       url('fonts/Copperplate-Light.svg#Copperplate-Light') format('svg'),
       url('fonts/Copperplate-Light.ttf') format('truetype'),
       url('fonts/Copperplate-Light.woff') format('woff'),
       url('fonts/Copperplate-Light.woff2') format('woff2');
  font-weight: 500;
  font-style: normal;  
   }
      @font-face {
    font-family: 'Avenir Next';
    src: local('Avenir Next Regular'), local('Avenir-Next-Regular'),
        url('fonts/AvenirNextCyr-Regular.woff2') format('woff2'),
        url('fonts/AvenirNextCyr-Regular.woff') format('woff'),
        url('fonts/AvenirNextCyr-Regular.ttf') format('truetype');
    font-weight: 400;
    font-style: normal;
  }
	</style>
	<meta name="yandex-verification" content="941563931869e02b" />
	<meta name="google-site-verification" content="V0AJUGS1Aj4rW6KQhCsVbDYZ6Jvl4c15W5BDW_-IER4" />
	</head>
	<body>
				<div class="wrapper">
			<header class="header">
				<div class='container'>
					<div class="header__body">
						<a href="#" class="header__logo">
							<img src="img/logo.png" alt="">
						</a>
						<div class="header__burger">
							<span></span>
						</div>
						<nav class="header__menu">
							<ul class="header__list">
							           					 <li>
                  <a href="https://vk.com/away.php?to=https%3A%2F%2Fdiscord.gg%2F3WUXJPRTDt&el=snippet" class="header__link knopka__1" target="_blank".>Играть</a>
                </li>
                <li>
                  <a href="https://vk.com/away.php?to=https%3A%2F%2Fdiscordapp.com%2Fapi%2Foauth2%2Fauthorize%3Fclient_id%3D713373588861878343%26scope%3Dbot%26permissions%3D8&amp;cc_key=" class="header__link knopka__1" target="_blank".>Добавить бота</a>
                </li>
                <li>
                  <a href="index.php" class="header__link active__1">Главная</a>
                </li>
                <li>
                  <a href="call.php" class="header__link">Информация</a>
                </li>
                  <li>
                  <a href="rate_all.php" class="header__link" aria-haspopup="true">Рейтинг</a>
                </li>
                  <li>
                    <?php if (isset($name)){
                      ?>
                      <a href="state_for_user.php" class="header__link"><?php echo($name);?> 
                   </a></li>
                   <form class = "search" action = "search_people.php" method="post" autocomplete="off" spellcheck="false">
                 <input type="text" name="name" placeholder = "Найти игрока" required />
                </form>
                     <li><a href="interaction_with_the_data_base/exit.php" class = "header__link_exit" >Выйти</a></li>
                        <?php
                    }   
                    else{
                    ?><a href="?action=login" class="header__link">вход
                   </a></li>
                   <form class = "search" action = "search_people.php" method="post" autocomplete="off" spellcheck="false">
                 <input type="text" name="name" placeholder = "Найти игрока" required />
                </form>
                   <?php
                   } ?>
                </li>
                </ul>
						</nav>
					</div>
				</div>
			</header>
			<div class="content">
				<div class='container__1'>
					<div class="content__text break cancel">
						<h1>Добро пожаловать на наш сайт!</h1>
<p>Мы рады приветствовать вас на официальном сайте русскоязычного бота на серверах бесплатного мессенджера Discord.</p>
<p>«Мафия в Discord» - это бесплатная онлайн игра, основанная на классической. Описать ее можно командной ролевой игрой с детективным сюжетом. Для того чтобы начать играть первым делом вам нужно обязательно открыть раздел «Информация», а далее установить самого бота на свой сервер. После первой же игры на вашем аккаунте будет отображаться количество ваших побед, поражений и более точной информации о вас, как о игроке. А в разделе «Рейтинг» вы можете сравнивать свои результаты с друзьями и другими пользователями бота.</p> 
<p>По любым вопросам обращайтесь к любому из нашей команды, контактные данные можно найти в разделе "Информация"</p>
<p>Чтобы увидеть огромное количиство информации про вас, мы предлагаем авторизоваться
и получить подробную информации. После авторизации вместо "Вход" появиться ваше имя, нажав на него, вы получите все информацию.</p>
					</div>
				</div>
			</div>
		</div>
		<!-- Подключаем jQuery -->
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
		<script src="js/script1.js"></script>
	</body>
</html>