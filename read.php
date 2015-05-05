<html>
<head>
</head>
<body>


<h1>Teams</h1>
<?php
$db = new PDO('mysql:host=localhost; dbname=dwmikes_hockeytest; charset=utf8', 'dwmikes_dave', 'pass123', array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
foreach($db->query('SELECT * FROM teams') as $r){
echo $r['teamName'] . '<br/>';
}

?>
<p>To read on, click continue</p>
</body>
</html>