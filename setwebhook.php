<?php


  // replace the token with your actual token
    $botToken="5119182521:AAEEwCnmb-AFqxbZlhlj_aR5uWOmOewke7M";

    $telegram_api="https://api.telegram.org/bot".$botToken;
  
  
  $url='';  // add the URL of the webhook file, i.e. where you want the message from telegram lands
 
  $params=[
      'url'=>$url
  ];
  
  
  $ch = curl_init($telegram_api . '/setWebhook');
  curl_setopt($ch, CURLOPT_HEADER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $result = curl_exec($ch);
  curl_close($ch);
  
  
  
  print_r($result); // this will print result from Telegram
  



?>