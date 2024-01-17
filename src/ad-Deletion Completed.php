<?php
    const SERVER = 'mysql220.phy.lolipop.lan';
    const DBNAME = 'LAA1516810-final';
    const USER = 'LAA1516810';
    const PASS = 'Pass0305';
    $connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
        <link rel="stylesheet" href="./css/ad-Deletion Completed.css">
		<title>原神キャラクターシステム</title>
	</head>
	<body>
<?php
    $pdo=new PDO($connect, USER, PASS);
    $charaNumber = $_GET['id'];
   
    $sql=$pdo->prepare('delete from Chara where chara_number=?');
    $sql->execute([$charaNumber]);

    echo '<h1>削除が完了しました。</h1>'; 
?>
<button onclick="location.href='list.php'" class="de">一覧へ</button>
</html>
