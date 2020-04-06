<?php
// session_start();
$count = $_POST['count'];
$count += 2;
require_once(__DIR__ . '/connect.php');



// echo $name . ' ' . $text;

$sql = 'SELECT * FROM test ORDER  BY id DESC LIMIT ' . $count;
$sth = $dbh->prepare($sql);
$sth->bindParam(':k', $count);
$sth->execute();
$data = $sth->fetchAll(PDO::FETCH_ASSOC);

// header("content-type:application/json");
header('Content-Type: text/json; charset=utf-8');
echo json_encode($data);
