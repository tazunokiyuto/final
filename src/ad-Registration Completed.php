<?php session_start(); ?>
<?php
    const SERVER = 'mysql220.phy.lolipop.lan';
    const DBNAME = 'LAA1516810-final';
    const USER = 'LAA1516810';
    const PASS = 'Pass0305';
    $connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
?>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/ad-Registration Completed.css">
    <title>ASOスポーツ用品サイト(管理者側)</title>
</head>
<body>
    <?php
    //insertで追加
    $pdo = new PDO($connect, USER, PASS);
    
                    
                    $Charasql = $pdo->prepare('insert into Chara(kate_number, chara_mei, chara_sign, chara_cou, chara_wp, chara_rea) values (?, ?, ?, ?, ?, ?)');
                    $Charasql->execute([ $_POST['kate_number'], $_POST['chara_mei'], $_POST['chara_sign'], $_POST['chara_cou'], $_POST['chara_wp'], $_POST['chara_rea']]);
                    
        if(!preg_match('/^[0-9]+$/',$_POST['kate_number'])){
            echo 'IDを整数で入力してください。';
        }else if(empty($_POST['chara_mei'])){
            echo 'キャラ名を入力してください。';
        } else if(empty($_POST['chara_sign'])){
            echo '命の星座を入力してください。';
        } else if(empty($_POST['chara_cou'])) {
            echo '国を選択してください。';
        } else if(empty($_POST['chara_wp'])) {
            echo '武器種を選択してください。';
        } else if(!preg_match('/^[0-9]+$/',$_POST['chara_rea'])){
            echo 'レア度を整数で入力してください。';
        } else {
            
            echo '<h1>登録が完了しました。</h1>';
        }
    ?>
    <form action="ad-registration.php" method="post">
        <input type="submit" value="登録へ" class="to">
    </form>
    <form action="list.php" method="post">
        <input type="submit" value="一覧へ" class="i">
    </form>
</body>
</html>


