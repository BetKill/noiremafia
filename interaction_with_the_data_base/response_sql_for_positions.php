<?php
    $response_for_mysql = $mysql->query($sql_query);
    while ($row = $response_for_mysql->fetch_assoc()) {
        ?><p class = "txt"><?php
            if ($row['pos_from'] == $row['pos_to']){
            echo $row['pos_from'] . ". " . $row['name'] . " " . $row['rp'] . " RP" ;
            }
            else{
                echo $row['pos_from'] . "-" . $row['pos_to'] . ". " . $row['name'] . " " . $row['rp'] . " RP" ;
            }
            ?> 
        </p> <?php
    }
?>