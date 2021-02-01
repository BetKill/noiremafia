<?php
include 'Connection_for_base_data.php';
$user = apiRequest($apiURLBase);
  $name = (string)($user->username);
  $id_discord = $user->id;
  $tag = (string) ($user->discriminator);
  $img = $user->avatar;
  $name_tag = $name . '#' . $tag;
  $avatar = "https://cdn.discordapp.com/avatars/" . $id_discord. "/". $img . ".png";
  $sql_test =("SELECT `id_discord` FROM `users` WHERE id_discord = '$id_discord'");
	$result = $mysql->query($sql_test);
	if ($result->num_rows > 0){
	    https://discord.com/assets/1cbd08c76f8af6dddce02c5138971129.png
	    $query = mysqli_query($mysql, "UPDATE `users` SET `name` = '$name' WHERE id_discord = '$id_discord'");
	    $query_1 = mysqli_query($mysql, "UPDATE `users` SET `tag` = '$tag' WHERE id_discord = '$id_discord'");
    	if(($user->avatar == "")){
    	    $avatar = "https://discord.com/assets/1cbd08c76f8af6dddce02c5138971129.png";
    	    $query = mysqli_query($mysql, "UPDATE `users` SET `img` = '$img' WHERE `id_discord` = '$id_discord'");
    	}
    	 else{
    	     
    	 }
    	 if($user->public_flags == 0){
    	     $query = mysqli_query($mysql, "UPDATE `users` SET `img` = '$img' WHERE id_discord = '$id_discord'");
    	    $query_1 = mysqli_query($mysql, "UPDATE `users` SET `tag` = '$tag' WHERE id_discord = '$id_discord'");
    	    $query_2 = mysqli_query($mysql, "UPDATE `users` SET `name_tag` = '$name_tag' WHERE id_discord = '$id_discord'");
        }
		 $result_name = $mysql->query("SELECT * FROM `users` WHERE id_discord = '$id_discord' ");
		 $name_result = $result_name->fetch_assoc();
		 }
	else{
	  if (isset($name)) {
      //Если это запрос на обновление, то обновляем
      $sql = "INSERT INTO `users` (`id_discord`, `name`, `tag`, `name_tag`, `rp`, `win`, `lose`, `Мирный_житель`, `Мафия`, `Дон`, `Комиссар`, `Доктор`, `Маньяк`, `Куртизанка`, `Бессмертный`, `Двуликий`, `Вор`, `Сержант`, `Оборотень`, `sets`, `settings`, `img`) VALUES ('$id_discord', '$name', '$tag', '$name_tag', 0, 0, 0, '{\"stats\": [0, 0, 0, 0]}', '{\"stats\": [0, 0, 0, 0]}', '{\"stats\": [0, 0, 0, 0]}', '{\"stats\": [0, 0, 0, 0]}', '{\"stats\": [0, 0, 0, 0]}', '{\"stats\": [0, 0, 0, 0]}', '{\"stats\": [0, 0, 0, 0]}', '{\"stats\": [0, 0, 0, 0]}', '{\"stats\": [0, 0, 0, 0]}', '{\"stats\": [0, 0, 0, 0]}', '{\"stats\": [0, 0, 0, 0]}', '{\"stats\": [0, 0, 0, 0]}', NULL, NULL, '$avatar')";
    }
	}
$mysql->close();
?>