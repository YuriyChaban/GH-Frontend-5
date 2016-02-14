<?php
/*
Чтобы каждый раз не проверять введенные данные от пользователя, 
напишем функцию для фильтрации этих данных и 
уже будем применять эту функцию 
*/
function clearData($data, $type='i'){
	switch($type){
		case 'i': return $data*1; break;
		case 's': return trim(strip_tags($data)); break;
	}
}
/*Заводим переменную куда будем записывать результат*/
$output = '';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$number1 = clearData($_POST['number1']);
	$number2 = clearData($_POST['number2']);
	$operator = clearData($_POST['operator'], 's');
	$output = "$number1 $operator $number2 = ";
	switch($operator){
		case '+': $output .= $number1 + $number2; break;
		case '-': $output .= $number1 - $number2; break;
		case '*': $output .= $number1 * $number2; break;
		case '/': 
			if($number2 == 0)
				$output = 'Деление на ноль запрещено!';
			else
				$output .= $number1 / $number2;
			break;
		default: $output = "Неизвестный оператор '$operator'";
	}
}
?>
<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
	<p>Число 1:</p>
	<p><input type="text" name="number1"></p>
	<p>Оператор: </p>
	<p><input type="text" name="operator"></p> 
	<p>Число 2:</p>
	<p><input type="text" name="number2"></p>
	<p>
		<input type="submit" value="Считать!">
	</p>
</form>
<?php
if($output){
	echo $output;
}
?>