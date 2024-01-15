<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/ad(css)/ad-registration.css">
    <title>ASOスポーツ用品サイト(管理者側)</title>
</head>
<body>
    <div class="field">
    <form action = "ad-Registration Completed.php" method = "post">
        <table>
        <tr><th>ID</th><th>キャラ名</th><th>星座</th></tr>
        <tr>
        <td><select name="kate_number" required>
            <option value="1">1炎</option>
            <option value="2">2氷</option>
            <option value="3">3雷</option>
            <option value="4">4草</option>
            <option value="5">5風</option>
            <option value="6">6水</option>
            <option value="7">7岩</option>
        </select></td>
            <td><input type = "text" name = "chara_mei" required></td>
            <td><input type = "text" name = "chara_sign" required></td>
            </tr>
        </table>

        <table>
        <tr><th>国</th><th>武器種</th><th>レア度</th></tr>
        <tr><td><input type = "text" name = "chara_cou" required></td>
        <td><input type = "text" name = "chara_wp" required></td>
        <td><input type = "text" name = "chara_rea" required></td></tr>
        </table>
    <input type="submit" value="登録" class="to">
    </form>
    </div>
    <button onclick="history.back()" class="mo">戻る</button>
</body>
</html>