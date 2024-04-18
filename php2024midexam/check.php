<meta charset="UTF-8">
<?php
session_start();

$sId1="chair";
$sPwd1="123";

$sId2="reviewer";
$sPwd2="234";

$sId3="author";     
$sPwd3="345";

$uId=$_POST["uId"];
$uPwd=$_POST["uPwd"];

$sRole=$_POST["sRole"];

if($uId==$sId1 && $uPwd==$sPwd1){
    $_SESSION["check1"]="Yes";
    header("location:chair.php");
}else if($uId==$sId2 && $uPwd==$sPwd2){
    $_SESSION["check2"]="Yes";
    header("location:reviewer.php");
}else if($uId==$sId3 && $uPwd==$sPwd3){
    $_SESSION["check3"]="Yes";
    header("location:author.php");
}else{
    $_SESSION["check1"]="No";
    $_SESSION["check2"]="No";
    $_SESSION["check3"]="No";
    header("location:fail.php");
}
?>