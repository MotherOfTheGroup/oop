<?php
	if($_GET["country"] == 1) echo json_encode(array("1" => 
	"���������", "2" => "�����"));
	else if ($_GET["country"] == 2) echo json_encode(array("3" => 
	"�����", "4" => "�������"));
?>