<?php
$json = "json.txt";
$host = "localhost";
$db = "guestbook";
$charset = "utf8";
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = array(
	PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
);
$pdo = new PDO($dsn, "root", "21609332", $opt);
$statement = $pdo->query("SELECT * FROM `Customers`");//выполняем какой-то запрос в какую-то переменную
$statement->execute(); //выполняем запрос выше
foreach($statement as $a){
	print_r($a);

}

$arr = array(
	"name" => $_POST['name'],
	"message" => $_POST['message'],
	"email" => $_POST['email'],
	"date" => date("Y-m-d H:i:s"),
);
include_once ('model.php');





writeMassege($arr, $json);

$all_posts = readMasssage($json);


require_once('template.php');
