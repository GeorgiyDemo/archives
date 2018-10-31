<!DOCtype html>

<html>
	<head>
		<meta charset=“utf-8”> <title>Приют "Котикус"</title> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="style.css" rel="stylesheet"> 
		<style> [class*="col-"] { background-color: #eee; text-align: center; padding-top: 10px; padding-bottom: 10px; margin-bottom: 10px; font-size: 2rem; }
		</style> 

	</head>
	
	<body>
		
	
	<form action="action.php" method="post">
		<dev class="DEMKAStandartForm">
			<legend>Контактная информация</legend>

			<table class="DEMKAmaintable">
				<tr> 
					<td class="DEMKALefttable"><label>Имя</label></td><td class="DEMKARighttable"><input type="text" name="name" /></td>
				</tr>
				<tr>
					<td class="DEMKALefttable"><label>Телефон</label></td><td class="DEMKARighttable"><input type="text" name="phone" /></td>
				</tr>
				<tr>
					<td class="DEMKALefttable"><label>Email</label></td><td class="DEMKARighttable"><input type="email" name="email"></td>
				</tr>
				<tr>
					<td class="DEMKALefttable"><label>Дата посещения</label></td><td class="DEMKARighttable"><input type="date" name="date" /></td>
				</tr>
			</table>
		</dev>
	<br>

			<dev class="DEMKAStandartForm">
				<legend>Персональная информация</legend>
				<table class="DEMKAmaintable">
					<tr> 
						<td class="DEMKALefttable"><label>Возраст</label></td><td class="DEMKARighttable"><input type="number" min="1" max="100" step="1" name="age" /></td>
					</tr>
					<tr> 
						<td class="DEMKALefttable"><label>Любимая кухня</label></td><td class="DEMKARighttable">
							<select name="food_kitchen">
								<option value="1">Русская</option>
								<option value="2">Армянская</option>
								<option value="3">Грузинская</option>
								<option value="4">Узбекская</option>
							</select>
						</td>
					</tr>
					<tr> 
						<td class="DEMKALefttable"><label>Какие блюда вы бы хотели увидеть в меню?</label></td><td class="DEMKARighttable"><textarea id="food_list" name="food_list"></textarea></td>
					</tr>
				</table>
			</dev>
		<br>

				<dev class="DEMKAform">
					<legend>Оценка нашего заведения</legend>
					<label>Почему вы выбрали наше заведение?</label><br>
						<input type="radio" name="radiochoise_type" value="1"/><label>Недалеко от дома/работы</label><br>
						<input type="radio" name="radiochoise_type" value="2"/><label>Увидел рекламу</label><br>
						<input type="radio" name="radiochoise_type" value="3"/><label>Посоветовали</label><br>
						<input type="radio" name="radiochoise_type" value="4"/><label>Оптимальное соотношение цены и качества</label><br>
					<label>Вы будете рекомендовать наше заведение своим знакомым?</label><br>
						<input type="radio" name="radiochoise_advice" value="true"/><label>Да</label><br>
						<input type="radio" name="radiochoise_advice" value="false"/><label>Нет</label><br>
				</dev>
				<input type="submit" value="Отправить" class="DEMKAsendbutton">
		</form>
		<br>
		

	</body>

</html>