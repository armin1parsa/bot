<?php
/*
نویسنده  : @devbc
کانال  : سورس کده
*/
#-----------------------------#
date_default_timezone_set('Asia/Tehran');
error_reporting(0);
#-----------------------------#
$token = "6563796150:AAG_1FKXRxWtUczFpYg2a-XSOYJop6USetw"; //توکن
#-----------------------------#
define('API_KEY', $token);
#-----------------------------#
$update = json_decode(file_get_contents("php://input"));
if(isset($update->message)){
    $from_id    = $update->message->from->id;
    $chat_id    = $update->message->chat->id;
    $tc         = $update->message->chat->type;
    $text       = $update->message->text;
    $first_name = $update->message->from->first_name;
    $message_id = $update->message->message_id;
}elseif(isset($update->callback_query)){
    $chat_id    = $update->callback_query->message->chat->id;
    $data       = $update->callback_query->data;
    $query_id   = $update->callback_query->id;
    $message_id = $update->callback_query->message->message_id;
    $in_text    = $update->callback_query->message->text;
    $from_id    = $update->callback_query->from->id;
}
#-----------------------------#
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}

$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.digiswap.org/api/v1/asset/getPrices',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));
$response = curl_exec($curl);
curl_close($curl);
$data = json_decode($response, true);
#-----------------------------#
function sendmessage($chat_id,$text,$keyboard = null) {
    bot('sendMessage',[
        'chat_id' => $chat_id,
        'text' => $text,
        'parse_mode' => "HTML",
        'disable_web_page_preview' => true,
        'reply_markup' => $keyboard
    ]);
}
#-----------------------------#
if ($text == "/start"){
$fee  = $data['assets'][1]['usd_price'];
$url = 'http://api.codebazan.ir/arz/?type=arz';
$data = file_get_contents($url);
$result = json_decode($data, true);
if ($result['Ok']) {
    foreach ($result['Result'] as $currency) {
        if ($currency['name'] == 'دلار') {
            $price = str_replace(',', '', $currency['price']);
        }
    }
}
    $zitactm = $fee * $price ;
    $devbc   = floor($zitactm);
    $toman   = (int)($devbc / 10);
$txt = "
قیمت ارز ترون به شرح زیر است :

قیمت به دلار : $fee دلار
قیمت به ریال : $devbc  ریال
قیمت به تومان : $toman تومان
";
    bot ('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=> $txt,
    ]);
}
#-----------------------------#
/*
نویسنده  : @devbc
کانال  : سورس کده
*/
?>
