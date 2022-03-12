<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Задание 1</title>
</head>
<body>
<p>Сумма:</p>
    <br><br>
<?php
$a = $_GET['chislo1'];
$b = $_GET['chislo2'];

if($a > 0 && $b > 0){
    echo $a+$b;
} 

else{
    echo "Вы ввели число(а) меньшее или равное 0";
}

?>
</body>
</html>
