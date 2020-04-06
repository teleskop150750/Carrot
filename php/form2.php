<?php
require_once(__DIR__ . '/connect.php');
$name = $_POST['name'];
$text = $_POST['text'];
$sql = 'INSERT INTO test (name, text) VALUES (:n, :t) ';
$sth = $dbh->prepare($sql);
$sth->bindParam(':n', $name);
$sth->bindParam(':t', $text);
$sth->execute();

// echo $name . ' ' . $text;

$sql = 'SELECT * FROM test ORDER  BY id DESC LIMIT 2';
$sth = $dbh->prepare($sql);
// $sth->bindParam(':t', $k);
$sth->execute();
$data = $sth->fetchAll(PDO::FETCH_ASSOC);

// header("content-type:application/json");
header('Content-Type: text/json; charset=utf-8');
echo json_encode($data);

// echo $data;
// $res='';
// foreach ($data as $value) {
// 	$res += '<article class="comments__comment">
// 		<div class="comment__body">
// 			<p class="comment__name">' .
// 			$value['name'] .
// 			'</p>
// 			<p class="comment__text">' .
// 			$value['text'].
// 			'</p>
// 		</div>
// 	</article>'
// }
// echo $res;

// while ($row = mysql_fetch_array($result)) {
// 	print $row['Name'] . "<br>";
// }