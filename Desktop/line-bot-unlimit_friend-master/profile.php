<?php


$access_token = 'R1jBvQtCkQTBwiVS+ECHJ49ol8lzRuQYWyXzMgFDs4/+BkydsBp1+244awYuTiWloDD6L/jlxiMQHz2v/t6apn3BIxbxpzjPWg8HdNLi784/HV0zcj7IHloWmE969jmdV9+3h39wKJUXYvF4TTmzNgdB04t89/1O/w1cDnyilFU=';

$userId = 'U406d122cc1027e9547e36045abdf1c31';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

