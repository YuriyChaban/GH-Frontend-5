<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
      <html xmlns="http://www.w3.org/1999/xhtml" lang="ru" xml:lang="ru">
<head>
	<meta http-equiv="content-type" 
		content="text/html;charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="style/styles1.css"/>
	<title>Forms</title>
</head>
<body>
	<div class="wrapper">
		<h2>Коротко о себе</h2>
		<p>Здраствуйте,</p>
		<span><?php echo htmlspecialchars($_POST['name']); ?> <?php echo htmlspecialchars($_POST['surname']); ?>!</span>
		<p>Ваш пол:</p> <span><?php echo ($_POST['gender']); ?></span>
		<p>Вам:</p> <span><?php echo (int)$_POST['age']; ?> лет.</span>
		<h2>Подробно о себе</h2>
		<p>Вы: <span><?php echo $_POST['young']; ?></span>
		<p>Ваша дата рождения:</p> <span><?php echo htmlspecialchars($_POST['date_of_birth']); ?></span>
		<p>Ваше семейное положение:</p> <span><?php echo htmlspecialchars($_POST['marital_status']); ?></span>
		<p>Ваш социальный статус:</p> <span><?php echo htmlspecialchars($_POST['social_status']); ?></span>
		<p>Ваше место проживания:</p> <span><?php echo htmlspecialchars($_POST['residence']); ?></span>
		<p>На вопрос "Что вы обычно делаете на выходных?" вы ответили:</p>
		<span><?php
		if (!empty ($_POST['weekend']))
			{
			$weekend = $_POST['weekend'];
			foreach($weekend as $index => $go)
			{
			echo $index." - > ".$go."<br>";
			};
		};
		?></span>
		<p>Из выпадающего списка вы выбрали позицию:</p>
		<span><?php 
		if (!empty($_POST['select_position'])) { echo $_POST['select_position']; };
		?></span>
		<p>На вопрос "Сколько книг вы прочитали за свою жизнь?" вы ответили:</p> 
		<span><?php echo htmlspecialchars($_POST['segment']); ?></span>
		<p>Ваши коментарии:</p> 
		<span><?php echo (int)$_POST['comments']; ?></span>
		<p>Вы выбрали позицию:</p> <span><?php echo (int)$_POST['select_list']; ?></span>
		<h2>И в заключении</h2>
		<p>Вы ввели текст:</p> <span><?php echo htmlspecialchars($_POST['entered_by_field']); ?></span>
		<p>Ваш Email:</p> <span><?php echo htmlspecialchars($_POST['user_email']); ?></span>
		<p>Из вопроса "Хотите подписаться на самую модную рассылку спама?" вы выбрали следующий вариант:</p>
		<span><?php
		if (!empty ($_POST['categories']))
			{
			$categories = $_POST['categories'];
			foreach($categories as $index => $go)
			{
			echo $index." - > ".$go."<br>";
			};
		};
		?></span>
		<p>На вопрос "На сколько слажная задча?" вы ответили: </p>
		<span><?php echo htmlspecialchars($_POST['task_difficult']); ?> </span>

		<!-- молодца! -->
	</div>
</body>
</html>