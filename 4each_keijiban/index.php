<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<title>4eachblog 掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
    
<body>
    
<?php
    
mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson02;host=localhost;","root","mysql");
$stmt=$pdo->query("select*from 4each_keijiban");
    
?>
    

    
<div class="logo">
    <img src="../4each_keijiban/4eachblog_logo.jpg">
</div>
<header>
    <div class="h">
    <a href="#">トップ</a>
    <a href="#">プロフィール</a>
    <a href="#">4eachについて</a>
    <a href="#">登録フォーム</a>
    <a href="#">問い合わせ</a>
    <a href="#">その他</a>
    </div>
</header>
    
<main>
    <div class="main-l">
        <h1>プログラミングに役立つ掲示板</h1>
        
        <form method="post" action="insert.php">
            <h3>入力フォーム</h3>
            <div>
                <label>ハンドルネーム</label><br>
                <input type="text" class="text" size="35" name="handlename">
            </div>
            <div>
                <label>タイトル</label><br>
                <input type="text" class="text" size="35" name="title">
            </div>
            <div>
                <label>コメント</label><br>
                <textarea cols="35" rows="7" name="comments"></textarea>
            </div>
            <div>
                <input type="submit" class="submit" value="送信する">
            </div>
            
        </form>
        
    <?php
        
       echo "<div class='kiji'>";
        echo "<h3>タイトル</h3>";
        echo "<div class='contents'>";
        echo "記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中<br>身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事<br>の中身、記事の中身、記事の中身<br>";
        echo "<div class='handlename'>posted by 通りすがり</div>";
        echo "</div>";
        echo "</div>";
            
    ?>
        
    <?php
        
    while($row=$stmt->fetch()){
        
        echo "<div class='kiji'>";
        echo"<h3>".$row['title']."</h3>";
        echo "<div class='contents'>";
        echo $row['comments'];
        echo "<div class='handlename'>posted by ".$row['handlename']."</div>";
        echo "</div>";
        echo "</div>";
    }
        
    ?>
        
        
        </div>
    <div class="main-r">
        <h3>人気の記事</h3>
        <ul>
            <li>PHP オススメ本</li>
            <li>PHP MyAdminの使い方</li>
            <li>今人気のエディタ Top5</li>
            <li>HTMLの基礎</li>
        </ul> 
        <h3>オススメリンク</h3>
        <ul>
            <li>インターノウス株式会社</li>
            <li>XAMPPのダウンロード</li>
            <li>Eclipseのダウンロード</li>
            <li>Bracketsのダウンロード</li>
        </ul> 
        <h3>カテゴリ</h3>
        <ul>
            <li>HTML</li>
            <li>PHP</li>
            <li>MySQL</li>
            <li>JavaScript</li>
        </ul>
    </div>    
</main>
    
<footer>
    copyright &copy; internous | 4each blog is the one whichprovides A to Z about programming.
</footer>

      
    
</body>
    
    
</html>