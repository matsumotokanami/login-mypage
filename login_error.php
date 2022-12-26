<?php
    session_start();
    if(isset($_SESSION['id'])){
        header("Location:mypage.php");
    }
?>

<!DOCTYPE HTML>
<html lang="ja">
    <head>
    <meta charset="UTF-8">
        <title>エラーページ</title>
        <link rel="stylesheet" type="text/css" href="login_error.css">
    </head>

    <body>
        <header>
            <img src="4eachblog_logo.jpg">
            <div class="login"><a href="register.php">ログイン</a></div>
        </header>

        <main>
            <form action="mypage.php" method="post">
                <div class="box">
                    <div class="error">メールアドレスまたはパスワードが間違っています。</div>
                    <div class="mail">
                        <label>メールアドレス</label><br>
                        <input type="text" class="formbox" size="40" name="mail" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                    </div>
                    <div class="password">
                        <label>パスワード</label><br>
                        <input type="password" class="formbox" size="40" name="password" id="password" pattern="^[a-zA-Z0-9]{6,}$" required>
                    </div>
                    <div class="submit">
                        <input type="submit" class="submit_button" size="35" value="ログイン">
                    </div>
                </div>
            </form>
        </main>

        <footer>
            Ⓒ2018 InterNous.inc.All rights reserved
        </footer>
    </body>
</html>
            