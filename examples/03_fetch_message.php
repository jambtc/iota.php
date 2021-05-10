<?php
  // include iota lib
  require_once("../iota.php");
  // create client
  $client = new iota('https://api.lb-0.testnet.chrysalis2.com');
  //
  $found = $client->messagesFind(\iota\converter::strtohex('MY-DATA-INDEX'));
  if(\count($found->messageIds) > 0) {
    echo "Messages Found: " . \count($found->messageIds) . LF;
    $lastData = $client->message(\end($found->messageIds));
    echo \iota\converter::hextostr($lastData->payload->data) . LF;
  }
  else {
    echo "No Results!" . LF;
  }