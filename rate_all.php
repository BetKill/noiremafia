<?php 
include 'auto.php';
include 'interaction_with_the_data_base/Connection_for_base_data.php';
include 'interaction_with_the_data_base/sql_query_for_position.php';
?>
<html>
	<head>
	    <meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="expires" content="0">
	    <link rel="shortcut icon" href="img/logo.png" type="image/png">
        <link rel="stylesheet" href="css/style.css">
		<title>Mafia</title>
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
	</head>
<body>
	<div class="wrapper__1">
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
							          <ul class="header__list">
				<li>
                  <a href="https://vk.com/away.php?to=https%3A%2F%2Fdiscord.gg%2F3WUXJPRTDt&el=snippet" class="header__link knopka__1" target="_blank".>Играть</a>
                </li>
                <li>
                  <a href="https://vk.com/away.php?to=https%3A%2F%2Fdiscordapp.com%2Fapi%2Foauth2%2Fauthorize%3Fclient_id%3D713373588861878343%26scope%3Dbot%26permissions%3D8&amp;cc_key=" class="header__link knopka__1" target="_blank".>Добавить бота</a>
                </li>
                <li>
                  <a href="index.php" class="header__link">Главная</a>
                </li>
                <li>
                  <a href="call.php" class="header__link">Информация</a>
                </li>
                  <li>
                  <a href="rate_all.php" class="header__link active__1" aria-haspopup="true">Рейтинг</a>
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
				    <?php
							if (isset($name)){
			 			 ?>
				<div class = "content__text__2  prokrutka__1 txt" style ="margin-top: 30px; margin-bottom: 0%;"><?php 
				if($result_positon['pos_from'] == $result_positon['pos_to']) {
				  echo("Ваше место в рейтинге" . " " . $result_positon['pos_from']);  
				}
				else{
				    echo("Ваше место в рейтинге" . " " . $result_positon['pos_from'] . " - " . $result_positon['pos_to']);
				}
				?>
				</div>
		<?php } ?>
		<h1 class = "txt" style = " margin-top: 20px;">Топ 50</h1>
        <div class="content__text__2 prokrutka">
          <?php include 'interaction_with_the_data_base/response_sql_for_positions.php'; ?>
			</div>
    </div>
  </div>
  </div>
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
		<script src="js/script1.js"></script>
	</body>
</html>