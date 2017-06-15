<?php
include ('line-bot.php');


$channelSecret = '84ef88f48fd35449892287c4569c6a4f';
$access_token  = 't4dYu+OXU410/rDWhExXMJg90YZE8xueP0VWCCfofcQm+xfTfYOw17UNNMLM1jtcaE7dkt5HnRNBwtpyNtJSz21QMyELyn28U8ctgdg/BOJRBTsc8AxMlhDoi32BZ8uVZ/aFmis97dfE8KKKi5ztlQdB04t89/1O/w1cDnyilFU=';


$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello');
$response = $bot->pushMessage('u25c733ee101047846d54984df0dfb713', $textMessageBuilder);
echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
exit();

?>
