<?php

require_once 'oneapi/client.php';

# example:on-mo
$inboundMessages = SmsClient::unserializeInboundMessages();
# ----------------------------------------------------------------------------------------------------

// Usually you will process this inbound message here, save it and (eventually) respond with another message.

// For example, just save it to a file:
$f = fopen('tmp/message-'.mktime(true), 'w');
fwrite($f, "\n-------------------------------------\n");
fwrite($f, '' . $inboundMessages);
fwrite($f, "\n-------------------------------------\n");
fwrite($f, $requestBody);
fwrite($f, "\n-------------------------------------\n");
fclose($f);

echo 'OK';
