<?php
if (isset($name)){
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
                                WHERE id_discord = '$id_discord'");
                                $response = $mysql->query($sql_query_for_users);
                                $result_positon = $response->fetch_assoc();
						 };
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
?>