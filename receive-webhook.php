<?php

    // configuration
    
    // replace the token with your actual token
    $botToken="";

    $telegram_api="https://api.telegram.org/bot".$botToken;

    // reading data from telegram

    $input = json_decode(file_get_contents('php://input'), true);
    $chatId = $input['message']['from']['id'];
    $chatText = $input['message']['text'];
    
    $reply_text = 'You said: '.$chatText; // you can use ai / api / mysql or any thing to reply to the user according to the user ask.
    
    $params=[
      'chat_id'=>$chatId, 
      'text'=>$reply_text,
        ];
    
        
    // replying to user
        
      $ch = curl_init($telegram_api . '/sendMessage');
      curl_setopt($ch, CURLOPT_HEADER, false);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      $result = curl_exec($ch);
      curl_close($ch);

       

?>
