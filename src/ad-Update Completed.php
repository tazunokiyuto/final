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
        <link rel="stylesheet" href="./css/ad-Update Completed.css">
		<title>ASOスポーツ用品サイト(管理者側)</title>
	</head>
	<body>
<?php
    $pdo=new PDO($connect, USER, PASS);
    $sql=$pdo->prepare('update Chara set kate_number=?,chara_mei=?,chara_sign=?,chara_cou=?,chara_wp=?,chara_rea=? where chara_number=?');

            if($sql->execute([htmlspecialchars($_POST['kate_number']),$_POST['chara_mei'],$_POST['chara_sign'],$_POST['chara_cou'],$_POST['chara_wp'],$_POST['chara_rea'],$_GET['id']])){
        // var_dump($sql);
                echo '<h1>更新に成功しました。</h1>';
            }else{
                echo '<h1>更新に失敗しました。</h1>';
            }
    echo '<form action="ad-update.php?id=', $_GET['id'],'" method="post">';
    echo '<input type="submit" value="更新画面へ" class="ko"></div>';
    echo '</form>';
    echo "\n";
?>
        <button onclick="location.href='list.php'" class="i">一覧へ</button>
    </body>
</html>