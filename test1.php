<?php

include ('line-bot.php');

//$channelSecret = '551ec4feee0.....43cff0';
$channelSecret = '84ef88f48fd35449892287c4569c6a4f';
$access_token  = 't4dYu+OXU410/rDWhExXMJg90YZE8xueP0VWCCfofcQm+xfTfYOw17UNNMLM1jtcaE7dkt5HnRNBwtpyNtJSz21QMyELyn28U8ctgdg/BOJRBTsc8AxMlhDoi32BZ8uVZ/aFmis97dfE8KKKi5ztlQdB04t89/1O/w1cDnyilFU=';
//$access_token  = '2og9ogezC8k.......5ZUEQQdB04t89/1O/w1cDnyilFU=';

$bot = new BOT_API($channelSecret, $access_token);
	
if (!empty($bot->isEvents)) {
		
    //$bot->replyMessageNew($bot->replyToken, json_encode($bot->message));
      $bot->sendMessageNew('Uafb8898da1f464f55adfe6806a532405', 'Hello Saha');
	//$bot->sendMessageNew('u25c733ee101047846d54984df0dfb713', 'Hello Saha');
	//$bot->sendMessageNew('u840df9eb39827a773726d39a87e973f3', 'Hello Saha');
      
	
  //  $textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello');
    //$bot->pushMessage('u25c733ee101047846d54984df0dfb713', $textMessageBuilder);	
   // $bot->pushMessage('u840df9eb39827a773726d39a87e973f3', $textMessageBuilder);	
//	fang 
//u840df9eb39827a773726d39a87e973f3	
echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
    if ($bot->isSuccess()) {
        echo 'Succeeded!';
        exit();
    }

    // Failed
    echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
    exit();

}

///////
//$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('<channel access token>');
//$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '<channel secret>']);

//$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello');
//$response = $bot->pushMessage('<to>', $textMessageBuilder);

//echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
