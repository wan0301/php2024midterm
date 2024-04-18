<?php 
session_start();
if(isset($_SESSION["check1"]) && $_SESSION["check1"] = "Yes"){
    echo "<h2>Chair您好，歡迎進入頁面</h2><br/>";
}else if(isset($_SESSION["check1"]) && $_SESSION["check1"] != "Yes"){
    header("Location:fail.php"); 
    exit;
}else{
    header("Location:fail.php");
}
?>

<html>
<head>
    <meta charset="utf-8"/>
    <title>chair</title>
</head>
<body>
    <a href="logout.php">登出</a><br/>
</body>
</html>