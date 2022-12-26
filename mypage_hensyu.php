<?php
mb_internal_encoding("utf8");
session_start();

if(empty($_POST['from_mypage'])){
    header("Location:http://localhost/login_mypage/login_error.php");
   }
?>

<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>マイページ登録</title>
        <link rel="stylesheet" type="text/css" href="mypage_hensyu.css">
    </head>

    <body>

        <header>
        <img src="4eachblog_logo.jpg">
        <div class="logout"><a href="register.php">ログアウト</a></div>
        </header>

        <main>
            <div class="box">
                <h2>会員情報</h2><br>
                <div class="hello">
                    <?php echo "こんにちは！".$_SESSION['name']."さん";?>
                </div>

                <form action="mypage_update.php" method="post">
                    <div class="profile_pic">
                        <img src="<?php echo $_SESSION['picture'];?>">
                    </div>
                    <div class="basic_info">
                        <p>氏名:<input type="text" size="30" value="<?php echo $_SESSION['name'];?>" name="name"></p>
                        <p>メール:<input type="text" size="30" value="<?php echo $_SESSION['mail'];?>" name="mail"></p>
                        <p>パスワード:<input type="text" size="30" value="<?php echo $_SESSION['password'];?>" name="password"></p>
                    </div>
                    <div class="comments">
                        <textarea row="8" cols="80" name="comments"><?php echo $_SESSION['comments'];?></textarea>
                    </div>

                    <div class="button_henkou">
                        <input type="submit" class="submit_button" size="35" value="この内容に変更する">
                    </div>
                </form>
            </div>
        </main>
        <footer>
            &copy;2018InterNous.inc.All rights reserved
        </footer>
    </body>
</html>