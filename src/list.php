
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
    <link rel="stylesheet" href="../css/ad(css)/ad-list.css">
    <title>原神キャラクター</title>                                 
</head>
<body>
    <div class="list_field">
    <h1>キャラクター一覧画面</h1>
    <a href="ad-registration.php">
        <button type="button" class="re">商品登録</button>
    </a>
    <table align="center" border="1">
        <tr>
            <th>番号</th>
            <th>キャラ名</th>
            <th>星座</th>
            <th>国</th>
            <th>武器種</th>
            <th>神の目</th>
            <th>レア度</th>
        </tr>
<?php
$pdo = new PDO($connect, USER, PASS);
$sql = $pdo->query('SELECT * FROM Chara inner join Kate on Chara.kate_number = Kate.kate_number');
foreach($sql as $row){

    echo '<tr>';
    echo '<td>', $row['chara_number'], '</td>';
    echo '<td>', $row['chara_mei'], '</td>';
    echo '<td>', $row['chara_sign'], '</td>';
    echo '<td>', $row['chara_cou'], '</td>';
    echo '<td>', $row['chara_wp'], '</td>';
    echo '<td>', $row['kate_god'], '</td>';
    echo '<td>', $row['chara_rea'], '</td>';
    echo '<td>';
    echo '<div class="delete"><a href="ad-Deletion Completed.php?id=', $row['chara_number'],'"><button type="button">削除</button></a></div>';
    echo '<div class="update"><a href="ad-update.php?id=', $row['chara_number'],'"><button type="button">更新</button></a></div>';
    echo '</td>';
    echo '</tr>';
    echo "\n";
}

?>
</table>
</div>
</body>
</html>