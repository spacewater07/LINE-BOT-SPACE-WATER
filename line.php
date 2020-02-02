 <?php
  

function send_LINE($msg){
 $access_token = 'Q6YJ9PuETRL2Cw3xM5lA8Ae4TZFYEdOmkuPAbRew3SAI1f47lsJDwbZ4K1MrTLpDu4zukgWfa9B61nQHtv6w/YYjyPEPiOmiYL9vdiUFTitKtDWxOhdLYPRqaHUTRU68sDP4wVsmTwX1cxVKiMVLMAdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => '088onvrp',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
