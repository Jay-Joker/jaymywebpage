<?php

$userID = htmlspecialchars($_POST['userID'],ENT_QUOTES, 'UTF-8');
$userPW = htmlspecialchars($_POST['userPW'],ENT_QUOTES, 'UTF-8');
//echo $userID . ' ';
//echo $userPW . ' ';
include 'login.html';
if($userID == "1234" && $userPW == "1234"){
    echo '<p style="text-align: center;font-weight: bold; font-size: 30px;margin-top: 20px;">
로그인 성공</p>';
}else{
    echo '<p style="text-align: center;font-weight: bold; font-size: 30px;margin-top: 20px;">
로그인 실패</p>';

}

?>
