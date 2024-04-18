<?php
    $sPaperName = $_POST["sPaperName"];
    echo "論文標題：".$sPaperName."<br/>";

    $sName = $_POST["sName"];
    echo "作者姓名：".$sName."<br/>";

    $sEmail = $_POST["sEmail"];
    echo "作者Email：".$sEmail."<br/>";

    $sSummary = $_POST["sSummary"];
    echo "論文評論評語：".$sSummary."<br/>";
?>

<a href="logout.php">登出</a><br/>
