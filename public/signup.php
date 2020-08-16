<?php
$userID = htmlspecialchars($_POST['userID'],ENT_QUOTES, 'UTF-8');
$userPW = htmlspecialchars($_POST['userPW'],ENT_QUOTES, 'UTF-8');
$userPWConfirm = htmlspecialchars($_POST['userPWConfirm'],ENT_QUOTES, 'UTF-8');
$userName = htmlspecialchars($_POST['userName'],ENT_QUOTES, 'UTF-8');
$userBirth = htmlspecialchars($_POST['userBirth'],ENT_QUOTES, 'UTF-8');
$userPostcode = htmlspecialchars($_POST['userPostcode'],ENT_QUOTES, 'UTF-8');
$userAddress = htmlspecialchars($_POST['userAddress'],ENT_QUOTES, 'UTF-8');
$userAddressDetail = htmlspecialchars($_POST['userAddressDetail'],ENT_QUOTES, 'UTF-8');
//echo $userID . ' ';
//echo $userPW . ' ';
include 'signup.html';
echo  $userID . $userPW .$userBirth .$userPostcode .$userAddress . $userAddressDetail;
?>
