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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./css/ad-update.css">
    <title>ASOスポーツ用品サイト(管理者側)</title>
</head>
<body>
    <div class="field">
        <table>
            <?php
                $pdo = new PDO($connect, USER, PASS);

                $sql = $pdo->prepare('SELECT * FROM Chara WHERE chara_number = ?');
                $sql->execute([$_GET['id']]);
                
                foreach($sql as $row) {
                    echo '<form action="ad-Update Completed.php?id=', $_GET['id'],'" method="post">';
                    echo '<input type="hidden" name="chara_number" value="', $row['chara_number'], '" required>';

                    echo '<table>';
                    echo '<tr><th>神の目</th><th>キャラ名</th><th>星座</th></tr>';
                    echo '<tr>';
                    echo '<td>';
                    echo '<select name="kate_number" required>';
                    echo '<option value="1" ', ($row['kate_number'] == 1 ? 'selected' : ''), '>　　　炎　　　</option>';
                    echo '<option value="2" ', ($row['kate_number'] == 2 ? 'selected' : ''), '>　　　氷　　　</option>';
                    echo '<option value="3" ', ($row['kate_number'] == 3 ? 'selected' : ''), '>　　　雷　　　</option>';
                    echo '<option value="4" ', ($row['kate_number'] == 4 ? 'selected' : ''), '>　　　草　　　</option>';
                    echo '<option value="5" ', ($row['kate_number'] == 5 ? 'selected' : ''), '>　　　風　　　</option>';
                    echo '<option value="6" ', ($row['kate_number'] == 6 ? 'selected' : ''), '>　　　水　　　</option>';
                    echo '<option value="7" ', ($row['kate_number'] == 7 ? 'selected' : ''), '>　　　岩　　　</option>';
                    echo '</select>';
                    echo '</td>';
                    echo '<td><input type="text" name="chara_mei" value="', $row['chara_mei'], '" required></td>';
                    echo '<td><input type="text" name="chara_sign" value="', $row['chara_sign'], '" required></td>';
                    echo '</tr>';
                    echo '</table>';

                    echo '<table>';
                    echo '<tr><th>国</th><th>武器種</th><th>レア度</th></tr>';
                    echo '<tr>';
                    echo '<td><input type="text" name="chara_cou" value="', $row['chara_cou'], '" required></td>';
                    echo '<td><input type="text" name="chara_wp" value="', $row['chara_wp'], '" required></td>';
                    echo '<td><input type="text" name="chara_rea" value="', $row['chara_rea'], '" required></td>';
                    echo '</tr>';
                    echo '</table>';

                    echo '<input type="submit" value="更新" class="ko"></div>';
                    echo '</form>';
                    echo "\n";

                    echo '<form action="list.php" method="post">';
                    echo '<input type="submit" value="戻る" class="mo"></div>';
                    echo '</form>';
                }
            ?>
        </table>
    </div>
</body>
</html>