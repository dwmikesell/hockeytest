<?php
header("Location: read.php");


$db = new PDO('mysql:host=localhost; dbname=dwmikes_hockeytest; charset=utf8', 'dwmikes_dave', 'pass123', array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$vName = getInput($_POST["sName"]);


$rows = $db->exec("INSERT INTO teams (`teamName`) VALUES ('$vName')");

exit();


function getInput($data){
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);

return $data;

}

?>