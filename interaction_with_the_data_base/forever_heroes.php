<?php
             $array_img = ['Мирный житель' => "img/Мирный.png", 'Мафия' => "img/Мафия.png", 'Дон' => "img/Дон.png", 'Комиссар' => "img/Ком.png", 'Доктор' => "img/Док.png", 'Маньяк' => "img/Ман.png" , 'Куртизанка' =>  "img/Кур.png", 'Бессмертный' => "img/Бес.png", 'Двуликий' => "img/Дву.png", 'Вор' => "img/Вор.png", 'Сержант' => "img/Серж.png", 'Оборотень' => "img/Обор.png"];
             $a_max = 0;
$a_max_winrate = 0;
$role = "Нет";
$role_forever = "Нет";
$analiz = 0;
$array_role = ['Мирный_житель', 'Мафия', 'Дон', 'Комиссар', 'Доктор', 'Маньяк', 'Куртизанка', 'Бессмертный', 'Двуликий', 'Вор', 'Сержант', 'Оборотень'];
foreach ($array_role as $q){
    $result_stats = json_decode($result_positon[$q], true)['stats'][0];
    if ($result_stats > $a_max){
        $a_max = $result_stats;
        $role = $q;
    }
    $result_stats = json_decode($result_positon[$q], true)['stats'][3];
    if ($result_stats > $a_max_winrate){
        $a_max_winrate = $result_stats;
        $role_forever = $q;
        $analiz = json_decode($result_positon[$q], true)['stats'][0];
    }
    elseif($result_stats == $a_max_winrate){
        if (json_decode($result_positon[$q], true)['stats'][0] > $analiz){
            $role_forever = $q;
            $analiz = json_decode($result_positon[$q], true)['stats'][0];
        }
    }
}
if ($role == "Мирный_житель"){
    $role = "Мирный житель";
}
if ($role_forever == "Мирный_житель"){
    $role_forever = "Мирный житель";
}
             $k = "";
            $temp = 0;
            foreach($array_img as $k=>$v){
                if ($role == $k){
                    $temp = $temp + 1;
                    ?>
                    <h4 class = 'txt'> Наиболее выпадающая роль </h4> 
                    <p class = "txt">
                    <?php 
                    echo ($role . "  ");
                    ?><img src="<?php echo $array_img[$k]; ?>" align="center" height = 80px alt="">
                    </p> <?php
                        }
                    if ($role_forever == $k){
                        $temp = $temp + 1;
                    ?>
                    <h4 class = 'txt'> Самая эффективная роль</h4> <p class = "txt"><?php 
                    echo ($role_forever . "  ");
                    ?><img src="<?php echo $array_img[$k]; ?>" align="center" height = 80px alt="">
                    </p> <?php
                    }
            }
            if($temp == 0){
            ?>
            <p class = 'txt'>Наиболее выпадающая роль -</p> 
            <p><?php echo ($role);?></p>
            <p class = 'txt'>Самая эффективная роль - <?php echo ($role_forever);?></p>
            <?php } ?>