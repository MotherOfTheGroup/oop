<?php

include('connect.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$parm = $_POST;
	
} else {
	$parm = $_GET;
	echo('Метод GET ('.count($parm).'):<br>');
}
if(md5($_POST['pass'])=="865b02aab501e77c8ca524c9bc1cf5c4")
   {
foreach($parm as $k=>$v) {
	$param=substr($k, 0, 2);
	$value=trim(stripslashes(htmlspecialchars($v)));
	$id=substr($k, 2, 2);
	if ((!empty($value))AND($k!=="pass"))
	{
		$sqlstring="UPDATE idb1313 SET ".$param."=".$value." where id=".$id;
		$sql= mysql_query($sqlstring);
	}
	
}
	echo('Информация сохранена!');
   }
else
	echo "Не верный пароль!";
?>
