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
                  <a href="index.php" class="header__link">Главная</a>
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
						<?php
						$row = ($_GET['my_datas']);
                            $result_name_1 = $mysql->query("SELECT * FROM `users` WHERE `name_tag` = '$row'");
							$name_result__1 = $result_name_1->fetch_assoc();
							if ($name_result__1 !=""){
        							if($name_result__1["img"] != ""){
        							$avatar_1 = "https://cdn.discordapp.com/avatars/" . $name_result__1["id_discord"]. "/". $name_result__1['img'] . ".png";
							        }
        							else{
        							    $avatar_1 = "https://discord.com/assets/1cbd08c76f8af6dddce02c5138971129.png";
        							}?>
        							<div class='container__1' style = "padding-bottom: 15px;">
                            <h2 class="txt"><?php echo $name_result__1['name'];?></h2>
        					    <p style = "text-align: center;"><img style = " border-radius: 50%; height: 120px;" src="<?php echo $avatar_1;?>" alt = "" align = "top"></p>
        						<h2 style = "margin: 35px;">Общая статистика</h2>
        						<p class="txt">Количество игр: <?php echo ($name_result__1['win'] + $name_result__1['lose'] )?></p>
        						<p class="txt">Количество побед: <?php echo $name_result__1['win'] ?></p>
        						<p class="txt">Количество поражений: <?php echo $name_result__1['lose'] ?></p>
        						<p class="txt">Рейтинг: <?php echo $name_result__1['rp'] . " " . 'RP'  ?></p>
        						<p class="txt">Место в рейтинге: <?php 
        
        						 $sql_query_for_users = ("select users.*, pos_from, pos_to from (
                                        	select min(pusers.pos) as pos_from, max(pusers.pos) as pos_to, count(pusers.id), pusers.rp from (
                                                select
                                                    users.*,
                                                    (@row_number := @row_number + 1) as pos
                                                from
                                                    users,
                                                    (select @row_number:=0) as t
                                                order by rp desc
                                            ) as pusers
                                            group by pusers.rp
                                        ) as gusers
                                        join users on users.rp = gusers.rp
                                        WHERE name_tag = '$row'");
                                        $response = $mysql->query($sql_query_for_users);
                                        $name_result__1 = $response->fetch_assoc();
            $sql_query = ("select users.*, pos_from, pos_to from  (
        	select min(pusers.pos) as pos_from, max(pusers.pos) as pos_to, count(pusers.id), pusers.rp  from (
                select
                    users.*,
                    (@row_number := @row_number + 1) as pos
                from
                    users,
                    (select @row_number:=0) as t
                order by rp desc
            ) as pusers
            group by pusers.rp
        ) as gusers
        join users on users.rp = gusers.rp
        order by rp desc
        ");
} if($name_result__1['pos_from'] == $name_result__1['pos_to']) {
        				  echo($name_result__1['pos_from']);  
        				}
        				else{
        				    echo($name_result__1['pos_from'] . " - " . $name_result__1['pos_to']);
        				}
        				?></p>
					</div>
				</div>
			</div>
		</div>
		<!-- Подключаем jQuery -->
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
		<script src="js/script1.js"></script>
	</body>
</html>