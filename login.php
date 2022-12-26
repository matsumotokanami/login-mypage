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
        <title>マイページログイン</title>
        <link rel="stylesheet" type="text/css" href="login.css">
    </head>

    <body>
        <header>
            <img src="4eachblog_logo.jpg">
            <div class="login"><a href="mypage.php">ログイン</a></div>
        </header>
    
        <main>
            <form action="mypage.php" method="post">
                <div class="form_contents">
                    <div class="mail">
                        <label>メールアドレス</label><br>
                        <input type="text" class="formbox" size="40" name="mail" value="<?php 
                            if(isset($_COOKIE['login_keep'])){
                                echo $_COOKIE['mail'];
                            }
                            ?>" >
                    </div>

                    <div class="password">
                        <label>パスワード</label><br>
                        <input type="password" class="formbox" size="40" name="password" value="<?php 
                            if(isset($_COOKIE['login_keep'])){
                                echo $_COOKIE['password'];
                            }
                            ?>" >
                    </div>

                    <div class="login_hoji">
                        <label><input type="checkbox" class="checkbox"  name="login_keep" value="login_keep"
                        <?php
                        if(isset($_COOKIE['login_keep'])){
                            echo "checked='checked'";
                        }
                        ?>>ログイン状態を保持する</label>
                    </div>
    
                    <div class="loginbutton">
                        <input type="submit" class="submit_button" size="35" value="ログイン">
                    </div>
                </div>
            </form>
        </main>
        <footer>
            &copy;2018InterNous.inc.All rights reserved
        </footer>
  
    </body>
</html>