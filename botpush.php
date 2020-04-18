<?php



require "vendor/autoload.php";

$access_token = 'O5lGqvKCcnoY78yldbeSp3FfRMKIqEj1cYhkJ67CjHQkVJGR7/vkcuKfOJp0EYhSIN1Sjd/g1DBgMQMuRlhv6j04g73RpSgtQtt986/ZSPmbO4+vl92+GLFLARlQOlaCbxLykyvtY5QkYW/WLl1+FwdB04t89/1O/w1cDnyilFU=';

$channelSecret = '1ad2350b651eda37b7a910cf176ccadc';

$pushID = 'U07ee1b8b1608c97f3ec408b117bd8b38';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







