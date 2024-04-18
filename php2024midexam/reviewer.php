<?php 
session_start();
if(isset($_SESSION["check2"]) && $_SESSION["check2"] = "Yes"){
    echo "<h2>Reviewer您好，歡迎進入論文評論網頁</h2><br/>";
}else if(isset($_SESSION["check2"]) && $_SESSION["check2"] != "Yes"){
    header("Location:fail.php"); 
    exit;
}else{
    header("Location:fail.php");
}
?>

<html>
<head>
    <meta charset="utf-8"/>
    <title>reviewer</title>
</head>
<body>
    <form method="post" action="showreview.php">
    論文評審決定：
    Accept<input type="radio" name="sChoice" value="accept"/>
    Miner Revision<input type="radio" name="sChoice" value="minerRevision"/>
    Major Revision<input type="radio" name="sChoice" value="majorRevision"/>
    Reject<input type="radio" name="sChoice" value="reject"/><br/>
    
    論文評論評語：
    <textarea name="sSuggest" row="1" cols="15"></textarea><br/>

    <input type="submit">
    </form>
    <a href="logout.php">登出</a><br/>
</body>
</html>