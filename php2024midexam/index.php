<?php
if(isset($_COOKIE["ItemName"])){
    $itemName = $_COOKIE["ItemName"];
    $quantity = $_COOKIE["Quantity"];
    setcookie ("ItemName", "", time()-3600);
    setcookie ("Quantity", "", time()-3600);
}else{
    $itemName = "Cookie設定";
    $quantity = "7";
    $date=strtotime("+7 days",time());
    setcookie ("ItemName",$itemName,$date);
    setcookie ("Quantity",$quantity,$date);
}
?>

<html>
<head>
    <meta charset="utf-8"/>
    <title>高大資管論文投稿系統</title>
</head>
<body>
    <h2>高大資管論文投稿系統</h2><br/>
    請選擇您的角色：<select name="sRole" required>
            <option value="Chair">Chair</option>
            <option value="Reviewer" >Reviewer</option>
            <option value="Author" >Author</option>
    </select><br/>
    <form action="check.php" method="post">
        帳號：<input type="text" name="uId" required><br/>
        密碼：<input type="password" name="uPwd" required><br/>
        <input type="submit">
    </form>
</body>
</html>