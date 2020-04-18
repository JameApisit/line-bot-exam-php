<?php
$access_token = 'O5lGqvKCcnoY78yldbeSp3FfRMKIqEj1cYhkJ67CjHQkVJGR7/vkcuKfOJp0EYhSIN1Sjd/g1DBgMQMuRlhv6j04g73RpSgtQtt986/ZSPmbO4+vl92+GLFLARlQOlaCbxLykyvtY5QkYW/WLl1+FwdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;