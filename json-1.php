<?php 
include 'config.php';
include 'class.Monsters.php';
header('Content-Type: application/json');
$Monsters = new Monsters();
$list=$Monsters->get_Monsters();
echo "{\"Monsters\":";
echo json_encode($list);
echo "}";
?>
