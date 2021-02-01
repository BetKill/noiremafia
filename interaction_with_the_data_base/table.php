<?php $array_img = ['Мирный житель' => "img/Мирный.png", 'Мафия' => "img/Мафия.png", 'Дон' => "img/Дон.png", 'Комиссар' => "img/Ком.png", 'Доктор' => "img/Док.png", 'Маньяк' => "img/Ман.png" , 'Куртизанка' =>  "img/Кур.png", 'Бессмертный' => "img/Бес.png", 'Двуликий' => "img/Дву.png", 'Вор' => "img/Вор.png", 'Сержант' => "img/Серж.png", 'Оборотень' => "img/Обор.png"];
?>
<div class="mobile-table">
<table class="iksweb">
<thead>
<tr>
			<th>Роль</th>
			<th>Кол-во игр</th>
			<th>Побед</th>
			<th>Проигрышей</th>
			<th>Процент побед</th>
		</tr>
		<tr>
			<td>Мирный житель   <img src="img/Мирный.png" align="center" height = 80px alt=""></td>
			<td><?php echo( " " . json_decode($result_positon['Мирный_житель'], true)['stats'][0]);?></td>
			<td><?php echo( " " . json_decode($result_positon['Мирный_житель'], true)['stats'][1]);?></td>
			<td><?php echo( " " . json_decode($result_positon['Мирный_житель'], true)['stats'][2]);?></td>
			<td><?php echo( " " . json_decode($result_positon['Мирный_житель'], true)['stats'][3] . " ". '%');?></td>
		</tr>
		<tr>
			<td>Мафия   <img src="img/Мафия.png" align="center" height = 80px alt=""></td>
            <td><?php echo( " " . json_decode($result_positon['Мафия'], true)['stats'][0]);?></td>
			<td><?php echo( " " . json_decode($result_positon['Мафия'], true)['stats'][1]);?></td>
			<td><?php echo( " " . json_decode($result_positon['Мафия'], true)['stats'][2]);?></td>
			<td><?php echo( " " . json_decode($result_positon['Мафия'], true)['stats'][3] . " ". '%');?></td>
		</tr>
		<tr>
			<td>Дон   <img src="img/Дон.png" align="center" height = 80px alt=""></td>
            <td><?php echo( " " . json_decode($result_positon['Дон'], true)['stats'][0]);?></td>
			<td><?php echo( " " . json_decode($result_positon['Дон'], true)['stats'][1]);?></td>
			<td><?php echo( " " . json_decode($result_positon['Дон'], true)['stats'][2]);?></td>
			<td><?php echo( " " . json_decode($result_positon['Дон'], true)['stats'][3] . " ". '%');?></td>
		</tr>
		<tr>
			<td>Комиссар   <img src="img/Ком.png" align="center" height = 80px alt=""></td>
			<td><?php echo( " " . json_decode($result_positon['Комиссар'], true)['stats'][0]);?></td>
			<td><?php echo( " " . json_decode($result_positon['Комиссар'], true)['stats'][1]);?></td>
			<td><?php echo( " " . json_decode($result_positon['Комиссар'], true)['stats'][2]);?></td>
			<td><?php echo( " " . json_decode($result_positon['Комиссар'], true)['stats'][3] . " ". '%');?></td>
		</tr>
		<tr>
			<td>Доктор   <img src="img/Док.png" align="center" height = 80px alt=""></td>
			<td><?php echo( " " . json_decode($result_positon['Доктор'], true)['stats'][0]);?></td>
			<td><?php echo( " " . json_decode($result_positon['Доктор'], true)['stats'][1]);?></td>
			<td><?php echo( " " . json_decode($result_positon['Доктор'], true)['stats'][2]);?></td>
			<td><?php echo( " " . json_decode($result_positon['Доктор'], true)['stats'][3] . " ". '%');?></td>
		</tr>
		<tr>
			<td>Маньяк   <img src="img/Ман.png" align="center" height = 80px alt=""></td>
			<td><?php echo( " " . json_decode($result_positon['Маньяк'], true)['stats'][0]);?></td>
			<td><?php echo( " " . json_decode($result_positon['Маньяк'], true)['stats'][1]);?></td>
			<td><?php echo( " " . json_decode($result_positon['Маньяк'], true)['stats'][2]);?></td>
			<td><?php echo( " " . json_decode($result_positon['Маньяк'], true)['stats'][3] . " ". '%');?></td>
		</tr>
		<tr>
			<td>Куртизанка   <img src="img/Кур.png" align="center" height = 80px alt=""></td>
			<td><?php echo( " " . json_decode($result_positon['Куртизанка'], true)['stats'][0]);?></td>
			<td><?php echo( " " . json_decode($result_positon['Куртизанка'], true)['stats'][1]);?></td>
			<td><?php echo( " " . json_decode($result_positon['Куртизанка'], true)['stats'][2]);?></td>
			<td><?php echo( " " . json_decode($result_positon['Куртизанка'], true)['stats'][3] . " ". '%');?></td>
		</tr>
		<tr>
			<td>Бессмертный   <img src="img/Бес.png" align="center" height = 80px alt=""></td>
			<td><?php echo( " " . json_decode($result_positon['Бессмертный'], true)['stats'][0]);?></td>
			<td><?php echo( " " . json_decode($result_positon['Бессмертный'], true)['stats'][1]);?></td>
			<td><?php echo( " " . json_decode($result_positon['Бессмертный'], true)['stats'][2]);?></td>
			<td><?php echo( " " . json_decode($result_positon['Бессмертный'], true)['stats'][3] . " ". '%');?></td>
		</tr>
		<tr>
			<td>Двуликий   <img src="img/Дву.png" align="center" height = 80px alt=""></td>
			<td><?php echo( " " . json_decode($result_positon['Двуликий'], true)['stats'][0]);?></td>
			<td><?php echo( " " . json_decode($result_positon['Двуликий'], true)['stats'][1]);?></td>
			<td><?php echo( " " . json_decode($result_positon['Двуликий'], true)['stats'][2]);?></td>
			<td><?php echo( " " . json_decode($result_positon['Двуликий'], true)['stats'][3] . " ". '%');?></td>
		</tr>
		<tr>
			<td>Вор   <img src="img/Вор.png" align="center" height = 80px alt=""></td>
			<td><?php echo( " " . json_decode($result_positon['Вор'], true)['stats'][0]);?></td>
			<td><?php echo( " " . json_decode($result_positon['Вор'], true)['stats'][1]);?></td>
			<td><?php echo( " " . json_decode($result_positon['Вор'], true)['stats'][2]);?></td>
			<td><?php echo( " " . json_decode($result_positon['Вор'], true)['stats'][3] . " ". '%');?></td>
		</tr>
		<tr>
			<td>Сержант   <img src="img/Серж.png" align="center" height = 80px alt=""></td>
			<td><?php echo( " " . json_decode($result_positon['Сержант'], true)['stats'][0]);?></td>
			<td><?php echo( " " . json_decode($result_positon['Сержант'], true)['stats'][1]);?></td>
			<td><?php echo( " " . json_decode($result_positon['Сержант'], true)['stats'][2]);?></td>
			<td><?php echo( " " . json_decode($result_positon['Сержант'], true)['stats'][3] . " ". '%');?></td>
		</tr>
		<tr>
			<td>Оборотень   <img src="img/Обор.png" align="center" height = 80px alt=""></td>
			<td><?php echo( " " . json_decode($result_positon['Оборотень'], true)['stats'][0]);?></td>
			<td><?php echo( " " . json_decode($result_positon['Оборотень'], true)['stats'][1]);?></td>
			<td><?php echo( " " . json_decode($result_positon['Оборотень'], true)['stats'][2]);?></td>
			<td><?php echo( " " . json_decode($result_positon['Оборотень'], true)['stats'][3] . " ". '%');?></td>
		</tr>
	</tbody>
</table>
<?php ?>