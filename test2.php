<?php
include ('line-bot.php');


$channelSecret = '84ef88f48fd35449892287c4569c6a4f';
$access_token  = 't4dYu+OXU410/rDWhExXMJg90YZE8xueP0VWCCfofcQm+xfTfYOw17UNNMLM1jtcaE7dkt5HnRNBwtpyNtJSz21QMyELyn28U8ctgdg/BOJRBTsc8AxMlhDoi32BZ8uVZ/aFmis97dfE8KKKi5ztlQdB04t89/1O/w1cDnyilFU=';


$bot = new BOT_API($channelSecret, $access_token);
	
$bot->sendMessageNew('u25c733ee101047846d54984df0dfb713', 'Hello World !!');

if ($bot->isSuccess()) {
	echo 'Succeeded!';
	exit();
}

// Failed
echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
exit();
