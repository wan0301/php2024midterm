<?php 
session_start();
if(isset($_SESSION["check3"]) && $_SESSION["check3"] = "Yes"){
    echo "<h2>Author您好，歡迎進入論文投稿網頁</h2><br/>";
}else if(isset($_SESSION["check3"]) && $_SESSION["check3"] != "Yes"){
    header("Location:fail.php"); 
    exit;
}else{
    header("Location:fail.php");
}
?>

<html>
<head>
    <meta charset="utf-8"/>
    <title>author</title>
</head>
<body>
    <form method="post" action="showpaper.php">
    論文標題：<br/>
    <input type="text" name="sPaperName" size="15" required><br/>
    作者姓名： <input type="text" name="sName" size="15" required><br/>
    作者Email： <input type="email" name="sEmail" pattern=".+@.+.com" required><br/>
    
    論文摘要：
    <textarea name="sSummary" row="1" cols="15"></textarea><br/>

    <input type="submit">
    </form>
    <a href="logout.php">登出</a><br/>
</body>
</html>