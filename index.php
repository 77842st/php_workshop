<?php
date_default_timezone_set('Europe/Helsinki');
$t=time();
echo(date("Y-m-d h:i:s a",$t));
?>

<?php  
$name=$_POST["name"];
$surname=$_POST["surname"];
$date = date('Y-m-d', $_POST['date']);

echo "$name, $surname, $date";  
?> 
