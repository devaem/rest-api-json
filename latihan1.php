<?php 

// $mahasiswa = [
// 	[
// 		"nama" => "Deva Ega Marinda",
// 		"nim" => "1901530001",
// 		"email" => "devaega13@gmail.com"
// 	],
// 	[
// 		"nama" => "Deva Ega Marinda",
// 		"nim" => "1901530001",
// 		"email" => "devaega13@gmail.com"
// 	]

// ];

$dbh = new PDO('mysql:host=localhost;dbname=phpmvc', 'root', '');
$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;

 ?>