<?php
flush();
ob_start();
ob_implicit_flush(1);
include 'config.php';
include("class.php");
function bot($method, $datas = []){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.telegram.org/bot'.API_KEY.'/'.$method);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
$curl_exec = curl_exec($ch);
return json_decode($curl_exec,true);
}
//----------------------------------------//
$channel = file_get_contents("kodam/channel.txt");
$channel2 = file_get_contents("kodam/channel2.txt");
$listas = json_decode(file_get_contents("kodam/list.json"),true);
$cr_robot = file_get_contents("sharge_cr_bot.txt");
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("Button/start.txt")){
$mtns = file_get_contents("Button/start.txt");
}else{
$mtns = "برای ادامه یکی از دکمه های زیر را انتخاب نمایید:";
}
//////////------------------------\\\\\\\\\\\\\\
$Button_Home = json_encode(['keyboard'=>[
[['text'=>"$line1_1"],['text'=>"$line1_2"],['text'=>"$line1_3"],['text'=>"$line1_4"]],
[['text'=>"$line2_1"],['text'=>"$line2_2"],['text'=>"$line2_3"],['text'=>"$line2_4"]],
[['text'=>"$line3_1"],['text'=>"$line3_2"],['text'=>"$line3_3"],['text'=>"$line3_4"]],
[['text'=>"$line4_1"],['text'=>"$line4_2"],['text'=>"$line4_3"],['text'=>"$line4_4"]],
[['text'=>"$line5_1"],['text'=>"$line5_2"],['text'=>"$line5_3"],['text'=>"$line5_4"]],
],'resize_keyboard'=>true]);
//////////------------------------\\\\\\\\\\\\\\
$Button_Admins_Home = json_encode(['keyboard'=>[
[['text'=>"$line1_1"],['text'=>"$line1_2"],['text'=>"$line1_3"],['text'=>"$line1_4"]],
[['text'=>"$line2_1"],['text'=>"$line2_2"],['text'=>"$line2_3"],['text'=>"$line2_4"]],
[['text'=>"$line3_1"],['text'=>"$line3_2"],['text'=>"$line3_3"],['text'=>"$line3_4"]],
[['text'=>"$line4_1"],['text'=>"$line4_2"],['text'=>"$line4_3"],['text'=>"$line4_4"]],
[['text'=>"$line5_1"],['text'=>"$line5_2"],['text'=>"$line5_3"],['text'=>"$line5_4"]],
[['text'=>"👤پنل مدیریت👤"]],
],'resize_keyboard'=>true]);
//////////------------------------\\\\\\\\\\\\\\///
$Button_create = json_encode(['keyboard'=>[
[['text'=>"$linee1_1"],['text'=>"$linee1_2"],['text'=>"$linee1_3"],['text'=>"$linee1_4"]],
[['text'=>"$linee2_1"],['text'=>"$linee2_2"],['text'=>"$linee2_3"],['text'=>"$linee2_4"]],
[['text'=>"$linee3_1"],['text'=>"$linee3_2"],['text'=>"$linee3_3"],['text'=>"$linee3_4"]],
[['text'=>"$linee4_1"],['text'=>"$linee4_2"],['text'=>"$linee4_3"],['text'=>"$linee4_4"]],
[['text'=>"$linee5_1"],['text'=>"$linee5_2"],['text'=>"$linee5_3"],['text'=>"$linee5_4"]],
[['text'=>"$linee6_1"],['text'=>"$linee6_2"],['text'=>"$linee6_3"],['text'=>"$linee6_4"]],
[['text'=>"$linee7_1"],['text'=>"$linee7_2"],['text'=>"$linee7_3"],['text'=>"$linee7_4"]],
[['text'=>"$linee8_1"],['text'=>"$linee8_2"],['text'=>"$linee8_3"],['text'=>"$linee8_4"]],
[['text'=>"$linee9_1"],['text'=>"$linee9_2"],['text'=>"$linee9_3"],['text'=>"$linee9_4"]],
[['text'=>"$linee10_1"],['text'=>"$linee10_2"],['text'=>"$linee10_3"],['text'=>"$linee10_4"]],
[['text'=>'برگشت 🔙']],
],'resize_keyboard'=>true]);
//////////------------------------\\\\\\\\\\\\\\///
$Button_Back = json_encode(['keyboard'=>[
[['text'=>'برگشت 🔙']],
],'resize_keyboard'=>true]);
$Button_Back_admin = json_encode(['keyboard'=>[
[['text'=>'🔙 برگشت']],
],'resize_keyboard'=>true]);
//////////------------------------\\\\\\\\\\\\\\///
$Button_Admins_Panel = json_encode(['keyboard'=>[
[['text'=>"📍 مدیریت کاربران"]],
[['text'=>"📨 ارسال پیام"],['text'=>"👤 آمار کلی ربات"]],
[['text'=>"📝 تنظیم متون"],['text'=>""],['text'=>"📝 تنظیم دکمه"]],
[['text'=>"🛍 فروشـگاه"],['text'=>"👤 مشخصات کاربر"],['text'=>"👤ادمین ها"]],
[['text'=>"📝 تنظیم کانال"],['text'=>"⌨️ چیدمان کیبورد"],['text'=>"💰 تنظیم امتیاز"]],
[['text'=>"♻️ بروزرسانی"],['text'=>"⏳اشتراک باقی مانده"]],
[['text'=>"🔙 بازگشت به ربات"]],
],'resize_keyboard'=>true]);
//////////------------------------\\\\\\\\\\\\\\
function SM($chatID,$msg,$mode,$reply = null,$keyboard = null){
$data = bot('SendMessage',['chat_id'=>$chatID,'text'=>$msg,'parse_mode'=>$mode,'reply_to_message_id'=>$reply,'reply_markup'=>$keyboard]);
return $data;
}
//////////------------------------\\\\\\\\\\\\\\
function Editmessagetext($chatID, $msg_id, $msg, $keyboard){
 bot('editmessagetext', [
'chat_id' => $chatID,
'message_id' => $msg_id,
  'text' => $msg,
  'reply_markup' => $keyboard
]);
}
//////////------------------------\\\\\\\\\\\\\\
function Sph($chatID,$pID,$Caption,$Mode,$keyboard = null){
$data = bot('sendphoto',['chat_id'=>$chatID,'photo'=>$pID,'caption'=>$Caption,'parse_mode'=>$Mode,'reply_markup'=>$keyboard]);
return $data;
}
//////////------------------------\\\\\\\\\\\\\\
function saveJson($file,$data){
$new_data = json_encode($data,true);
file_put_contents($file,$new_data);
}
//////////------------------------\\\\\\\\\\\\\\
function Save($filename,$TXTdata){
file_put_contents($filename,$TXTdata);
}
//////////------------------------\\\\\\\\\\\\\\
function DLM($chatID, $msg_id){
bot('deletemessage',['chat_id'=>$chatID,'message_id'=>$msg_id]);
}
//////////------------------------\\\\\\\\\\\\\\
function ACQ($cqi,$msg,$sa){
bot('answerCallbackQuery',['callback_query_id'=>$cqi,'text'=>$msg,'show_alert'=>$sa]);
}
//////////------------------------\\\\\\\\\\\\\\
function GCM($chatID,$userID){
$truechannel = bot('getChatMember',['chat_id'=>$chatID,'user_id'=>$userID]);
$Join = $truechannel['result']['status'];
return $Join;
}
//////////------------------------\\\\\\\\\\\\\\
function GCMB($chatID){
$data = bot('getChat',['chat_id'=>$chatID]);
return $data['ok'];
}
//////////------------------------\\\\\\\\\\\\\\
function GMN(){
$data = bot('getMe');
return $data['result']['first_name'];
}
//////////------------------------\\\\\\\\\\\\\\//
$up = json_decode(file_get_contents('php://input'));
$message = $up->message;
$msg = $message->text;
$callback_query = $up->callback_query;
$data = $callback_query->data;
if(isset($message)){
$chatID = $message->chat->id;
$msg_id = $message->message_id;
$userID = $message->from->id;
$first_name = $message->from->first_name;
$username = $message->from->username;
$Tc = $message->chat->type;
}
//////////------------------------\\\\\\\\\\\\\\
if(isset($callback_query)){
$data_id = $callback_query->id;
$chatID = $callback_query->message->chat->id;
$inline_keyboard = $callback_query->message->reply_markup->inline_keyboard;
$userID = $callback_query->from->id;
$first_name = $callback_query->from->first_name;
$username = $callback_query->from->username;
$Tc = $callback_query->message->chat->type;
$msg_id = $callback_query->message->message_id;
}
//////////------------------------\\\\\\\\\\\\\\//
if(isset($userID) and is_file("melat/$userID.json")){
$user = json_decode(file_get_contents("melat/$userID.json"),true);
$step = $user['step'];
$Points = $user['Points'];
$create = $user['create'];
$zirmjmae = $user['zirmjmae'];
}
//=====================================================
if($channel != null or $channel != ''){
$Join = GCM("@$channel",$userID);
}else{
$Join = 'member';
}
if($channel2 != null or $channel2 != ''){
$Join2 = GCM("@$channel2",$userID);
}else{
$Join2 = 'member';
}
//=====================================================
if(in_array($chatID,$listas['admins'])){
$Button_Home = $Button_Admins_Home;
}
//=====================================================
if(is_file("kodam/jijinanahekose.json")){
$list = json_decode(file_get_contents("kodam/jijinanahekose.json"),true);
$ban = $list['ban'];
}
//=====================================================
if(in_array($chatID,$ban) and $userID != $listas['admins'][0]){
exit();
}
//=====================================================
function Spam($userID){
$spam_status = json_decode(file_get_contents("melat/spam/$userID.json"),true);
if($spam_status != null){
if(mb_strpos($spam_status[0],"time") !== false){
if(str_replace("time ",null,$spam_status[0]) >= time())
exit(false);
else
$spam_status = [1,time()+2];
}
elseif(time() < $spam_status[1]){
if($spam_status[0]+1 > 3){
$time = time() + 15;
$spam_status = ["time $time"];
file_put_contents("melat/spam/$userID.json",json_encode($spam_status,true));
bot('SendMessage',[
'chat_id'=>$userID,
'text'=>"⚠️کمی اهسته تر با ربات کار کنید

⛔️حساب شما به مدت ۱۵ ثانیه محدود شد",
]);
exit(false);
}else{
$spam_status = [$spam_status[0]+1,$spam_status[1]];
}}else{
$spam_status = [1,time()+2];
}}else{
$spam_status = [1,time()+2];
}
file_put_contents("melat/spam/$userID.json",json_encode($spam_status,true));
}
Spam($userID);
//=====================================================
date_default_timezone_set('Asia/Tehran'); 
$sharge = file_get_contents("Lite.txt");
$a = date('Y/m/d');
$b = "$sharge";
$sec = strtotime($b)-strtotime($a);
$days = $sec/86400;
$d0ays = explode('.',$days)[0];
if(1 > $d0ays){
if(in_array($chatID,$listas['admins'])){
SM($chatID,"⚠️ زمان اشتراک ماهیانه ربات شما به پایان رسید.",'html');
exit();
}else{
$nemebot = GMN();
SM($chatID,"⚠️ مدت زمان اشتراک ماهیانه ربات $nemebot به پایان رسیده است.",'html');
exit();   
}}
//////////------------------------\\\\\\\\\\\\\\///
else if($data == 'join' and $Tc = 'private'){
if(($Join == 'member' or $Join == 'creator' or $Join == 'administrator') and ($Join2 == 'member' or $Join2 == 'creator' or $Join2 == 'administrator') and $userID != $listas['admins'][0]){
DLM($chatID,$msg_id);
SM($chatID,"❕حساب  کاربری شما تایید شد. همکنون میتوانید از ربات استفاده کنید❕",'MarkDown',null,$Button_Home);
}else{
if($Join2 != 'member' and $Join2 != 'creator' and $Join2 != 'administrator'){
ACQ($data_id,"❌ هنوز داخل کانال های @$channel و @$channel2 عضو نیستید",true);
}else{
ACQ($data_id,"❌ هنوز داخل کانال @$channel عضو نیستید",true);
}}
exit(); 
}
//////////------------------------\\\\\\\\\\\\\\//
if(isset($user['start']) and ($Join == 'member' or $Join == 'creator' or $Join == 'administrator') and ($Join2 == 'member' or $Join2 == 'creator' or $Join2 == 'administrator') and $Tc == 'private' and $userID != $listas['admins'][0]){
    $user = json_decode(file_get_contents("melat/$userID.json"),true);
$start = $user['start'];
$ustart = json_decode(file_get_contents("melat/$start.json"),true);
$isset = $ustart['zirmjmae'] + 1;
$ustart['zirmjmae'] = $isset;
$Pointsplus = $ustart['Points'] + $zirmjmaec;
$ustart['Points'] = $Pointsplus;
saveJson("melat/$start.json",$ustart);
$nemebot = GMN();
SM($start,"❇️تبریک!!!\n یک کاربر با لینک فعالسازی شما عضو $nemebot شد و $zirmjmaec سکه به شما اضافه شد",'html');
unset($user['start']);
saveJson("melat/$userID.json",$user);
}
//////////------------------------\\\\\\\\\\\\\\//
//=====================================================
if($msg == '/start' and $Tc == 'private'){
SM($chatID,"$mtns",'html',$msg_id,$Button_Home);
if(!is_file("melat/$userID.json")){
$user['step'] = 'none';
$user['Points'] = $starts;
$user['zirmjmae'] = 0;
$user["panel"] = 'normal';
}else{
$user['step'] = 'none';
}
saveJson("melat/$userID.json",$user);
}
//////////------------------------\\\\\\\\\\\\\\//
else if(strpos($msg , '/start ') !== false and $Tc == 'private'){
$start = str_replace("/start ",null,$msg);
if(strpos($start,"-100") !== false or strpos($start,'@') !== false){
exit();
}   
if(!is_file("melat/$userID.json")){
SM($chatID,"$mtns",'html',$msg_id,$Button_Home);
$user['step'] = 'none';
$user['Points'] = $starts;
$user['zirmjmae'] = 0;
$user["panel"] = 'normal';
$user['start'] = $start;
if(is_file("melat/$start.json")){
if(($Join != 'member' and $Join != 'creator' and $Join != 'administrator') or ($Join2 != 'member' and $Join2 != 'creator' and $Join2 != 'administrator') and $userID != $listas['admins'][0]){
$user['start'] = $start;
}else{
$ustart = json_decode(file_get_contents("melat/$start.json"),true);
$isset = $ustart['zirmjmae'] + 1;
$ustart['zirmjmae'] = $isset;
$Pointsplus = $ustart['Points'] + $zirmjmaec;
$ustart['Points'] = $Pointsplus;
saveJson("melat/$start.json",$ustart);
$nemebot = GMN();
SM($start,"❇️تبریک!!!\n یک کاربر با لینک فعالسازی شما عضو ربات شد و $zirmjmaec سکه به شما اضافه شد",'html');
}}
}else{
$user['step'] = 'none';
SM($chatID,"$mtns",'html',$msg_id,$Button_Home);
}
saveJson("melat/$userID.json",$user);
}
//////////------------------------\\\\\\\\\\\\\\//
else if($Join != 'member' and $Join != 'creator' and $Join != 'administrator' and $Tc == 'private' and $userID != $listas['admins'][0]){
if($Join2 != 'member' and $Join2 != 'creator' and $Join2 != 'administrator' and $userID != $listas['admins'][0]){
$nemebot = GMN();
SM($chatID,"برای استفاده از ربات « $nemebot » ابتدا عضو کانال های زیر شوید و سپس مجددا استارت کنید ♻️

📣 @$channel
📣 @$channel2

👇 بعد از « عضویت » بروی دکمه « ✅تایید عضویت » کلیک کنید 👇",'html',$msg_id, $Button_Join);
}else{
$nemebot = GMN();
SM($chatID,"برای استفاده از ربات « $nemebot » ابتدا عضو کانال های زیر شوید و سپس مجددا استارت کنید ♻️

📣 @$channel
📣 @$channel

👇 بعد از « عضویت » بروی دکمه « ✅تایید عضویت » کلیک کنید 👇",'html',$msg_id,$Button_Join);
}}
//////////------------------------\\\\\\\\\\\\\\//
else if($Join2 != 'member' and $Join2 != 'creator' and $Join2 != 'administrator' and $userID != $listas['admins'][0]){
$nemebot = GMN();
SM($chatID,"برای استفاده از ربات « $nemebot » ابتدا عضو کانال های زیر شوید و سپس مجددا استارت کنید ♻️

📣 @$channel2
📣 @$channel2

👇 بعد از « عضویت » بروی دکمه « ✅تایید عضویت » کلیک کنید 👇",'html',$msg_id,$Button_Join);
}
//////////------------------------\\\\\\\\\\\\\\//
else if($msg == 'برگشت 🔙' and $Tc == 'private'){
$user['step'] = 'none';
SM($chatID,"به منوی اصلی بازگشتید ↪️",'html',null,$Button_Home);
saveJson("melat/$userID.json",$user);
}
//////////------------------------\\\\\\\\\\\\\\///
else if($msg == '🔙 بازگشت به ربات' and $Tc == 'private' and in_array($chatID,$listas['admins'])){
$user['step'] = 'none';
SM($chatID,"🔖به منوی اصلی برگشتیم.
لطفا یک گزینه را انتخاب کنید!",'html',null,$Button_Home);
saveJson("melat/$userID.json",$user);
}
//////////------------------------\\\\\\\\\\\\\\///
else if($msg == "$dok1" and $Tc == 'private'){
$user['step'] = 'none';
SM($chatID,"$doktxt1",'html',null,$Button_create);
saveJson("melat/$userID.json",$user);
}
//////////------------------------\\\\\\\\\\\\\\///
elseif(in_array($msg,array("$dokk1","$dokk2","$dokk3","$dokk4","$dokk5","$dokk6","$dokk7","$dokk8","$dokk9","$dokk10","$dokk11","$dokk12","$dokk13","$dokk14","$dokk15","$dokk16","$dokk17","$dokk18","$dokk19","$dokk20","$dokk21","$dokk22","$dokk23","$dokk24","$dokk25","$dokk26","$dokk27","$dokk28","$dokk29","$dokk30"))){
$resid = str_replace(["$dokk1","$dokk2","$dokk3","$dokk4","$dokk5","$dokk6","$dokk7","$dokk8","$dokk9","$dokk10","$dokk11","$dokk12","$dokk13","$dokk14","$dokk15","$dokk16","$dokk17","$dokk18","$dokk19","$dokk20","$dokk21","$dokk22","$dokk23","$dokk24","$dokk25","$dokk26","$dokk27","$dokk28","$dokk29","$dokk30"],['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30'],$msg);
$coin = str_replace(["$dokk1","$dokk2","$dokk3","$dokk4","$dokk5","$dokk6","$dokk7","$dokk8","$dokk9","$dokk10","$dokk11","$dokk12","$dokk13","$dokk14","$dokk15","$dokk16","$dokk17","$dokk18","$dokk19","$dokk20","$dokk21","$dokk22","$dokk23","$dokk24","$dokk25","$dokk26","$dokk27","$dokk28","$dokk29","$dokk30"],["$dokc1","$dokc2","$dokc3","$dokc4","$dokc5","$dokc6","$dokc7","$dokc8","$dokc9","$dokc10","$dokc11","$dokc12","$dokc13","$dokc14","$dokc15","$dokc16","$dokc17","$dokc18","$dokc19","$dokc20","$dokc21","$dokc22","$dokc23","$dokc24","$dokc25","$dokc26","$dokc27","$dokc28","$dokc29","$dokc30"],$msg);
if($Points >= "$coin" or $user["panel"] == 'vip'){
if($resid == 30){
$user['step'] = "cr-$resid-$coin";
SM($chatID,"$etlatcr3",'MarkDown',null,$Button_Back);
saveJson("melat/$userID.json",$user);
}
elseif($resid == 29 or $resid == 28 or $resid == 27){
$user['step'] = "cr-$resid-$coin";
SM($chatID,"$etlatcr2",'MarkDown',null,$Button_Back);
saveJson("melat/$userID.json",$user);
}
elseif($resid == 1 or $resid == 2 or $resid == 3 or $resid == 4 or $resid == 5 or $resid == 6 or $resid == 7 or $resid == 8 or $resid == 9 or $resid == 11 or $resid == 12 or $resid == 13 or $resid == 14 or $resid == 15 or $resid == 16 or $resid == 17 or $resid == 18 or $resid == 19 or $resid == 20 or $resid == 21 or $resid == 22 or $resid == 23 or $resid == 24 or $resid == 25 or $resid == 26){
$user['step'] = "cr-$resid-$coin";
SM($chatID,"$etlatcr",'MarkDown',null,$Button_Back);
saveJson("melat/$userID.json",$user);
}
elseif($resid == 10){
$user['step'] = "cr-$resid-$coin";
SM($chatID,"$etlatcr1",'MarkDown',null,$Button_Back);
saveJson("melat/$userID.json",$user);
}
}else{
SM($chatID,"❗️موجودی شما کافی نیست .
📃 برای ساخت این رسید نیاز به $coin سکه دارید .",'html',$Button_Home);
}}
//////////------------------------\\\\\\\\\\\\\\///
elseif(preg_match('/^cr-(.*)-(.*)/', $step, $match)){
$all=explode("\n",$msg);
if($match[1] == 1){
$link = "http://py-ap83.ir/$match[1]?imgurl=ch.jpg&pey=".number_format($all[1])."&cardm=$all[2]&cardg=$all[3]&hesab=$all[0]";
}
elseif($match[1] == 2){
$link = "http://py-ap83.ir/$match[1]?Amount=$all[1]&Cardg=$all[3]&Cardm=$all[2]&Name=$all[0]";
}
elseif($match[1] == 3){
$link = "http://py-ap83.ir/$match[1]?Amount=$all[1]&Cardg=$all[2]&Cardm=$all[3]&Name=$all[0]";
}
elseif($match[1] == 4){
$link = "http://py-ap83.ir/$match[1]?Amount=$all[1]&Cardg=$all[3]&Cardm=$all[2]&Name=$all[0]";
}
elseif($match[1] == 5){
$result = json_decode(file_get_contents("http://api.NovaTeamCo.ir/time"),true);
$link = "http://py-ap83.ir/$match[1]?imgurl=ch.jpg&tarikh=".$result['date']."&saat=".$result['time']."&mablagh=$all[1]&cardm=$all[2]&cardg=$all[3]&text=$all[0]&hesab=".Rand(1111111111,9999999999)."&pey=".Rand(111111111111,999999999999);
}
elseif($match[1] == 6){
$link = "http://py-ap83.ir/$match[1]?imgurl=ch.jpg&pey=".number_format($all[1])."&cardm=$all[2]&cardg=$all[3]&hesab=$all[0]";
}
elseif($match[1] == 7){
$link = "http://py-ap83.ir/$match[1]?imgurl=ch.jpg&pey=".number_format($all[1])."&cardm=$all[2]&cardg=$all[3]&hesab=$all[0]";
}
elseif($match[1] == 8){
$link = "http://py-ap83.ir/$match[1]?Amount=$all[1]&Cardg=$all[3]&Cardm=$all[2]&Name=$all[0]";
}
elseif($match[1] == 9){
$link = "http://py-ap83.ir/$match[1]?imgurl=ch.jpg&pey=".number_format($all[1])."&cardm=$all[2]&cardg=$all[3]&hesab=$all[0]";
}
elseif($match[1] == 10){
$link = "https://plus-server.ir/api/photo.php?\170=9&\155={$all[1]}&\1431=****-****-****-{$all[2]}&\1432={$all[3]}&\156={$all[0]}";
}
elseif($match[1] == 11){
$link = "http://py-ap83.ir/$match[1]?Amount=$all[1]&Cardg=$all[3]&Cardm=$all[2]&Name=$all[0]";
}
elseif($match[1] == 12){
$link = "http://py-ap83.ir/$match[1]?Amount=$all[1]&Cardg=$all[3]&Cardm=$all[2]&Name=$all[0]";
}
elseif($match[1] == 13){
$link = "http://py-ap83.ir/$match[1]?Amount=$all[1]&Cardg=$all[3]&Cardm=$all[2]&Name=$all[0]";
}
elseif($match[1] == 14){
$link = "http://py-ap83.ir/$match[1]?Amount=$all[1]&Cardg=$all[3]&Cardm=$all[2]&Name=$all[0]";
}
elseif($match[1] == 15){
$link = "http://py-ap83.ir/$match[1]?Amount=$all[1]&Cardg=$all[3]&Cardm=$all[2]&Name=$all[0]";
}
elseif($match[1] == 16){
$link = "http://py-ap83.ir/$match[1]?imgurl=ch.jpg&pey=".number_format($all[1])."&cardm=$all[2]&cardg=$all[3]&hesab=$all[0]";
}
elseif($match[1] == 17){
$link = "http://py-ap83.ir/$match[1]?Amount=$all[1]&Cardg=$all[3]&Cardm=$all[2]&Name=$all[0]";
}
elseif($match[1] == 18){
$link = "http://py-ap83.ir/$match[1]?Amount=$all[1]&Cardg=$all[3]&Cardm=$all[2]&Name=$all[0]";
}
elseif($match[1] == 19){
$link = "http://py-ap83.ir/$match[1]?imgurl=ch.jpg&pey=".number_format($all[1])."&cardm=$all[2]&cardg=$all[3]&hesab=$all[0]";
}
elseif($match[1] == 20){
$link = "http://py-ap83.ir/$match[1]?imgurl=ch.jpg&pey=".number_format($all[1])."&cardm=$all[2]&cardg=$all[3]&hesab=$all[0]";
}
elseif($match[1] == 21){
$link = "http://py-ap83.ir/$match[1]?imgurl=ch.jpg&pey=".number_format($all[1])."&cardm=$all[2]&cardg=$all[3]&hesab=$all[0]";
}
elseif($match[1] == 22){
$link = "http://py-ap83.ir/$match[1]?Amount=$all[1]&Cardg=$all[3]&Cardm=$all[2]&Name=$all[0]";
}
elseif($match[1] == 23){
$link = "http://py-ap83.ir/$match[1]?imgurl=ch.jpg&pey=".number_format($all[1])."&cardm=$all[2]&cardg=$all[3]&hesab=$all[0]";
}
elseif($match[1] == 24){
$link = "http://py-ap83.ir/$match[1]?imgurl=ch.jpg&pey=".number_format($all[1])."&cardm=$all[2]&cardg=$all[3]&hesab=$all[0]";
}
elseif($match[1] == 25){
$link = "http://py-ap83.ir/$match[1]?Amount=$all[1]&Cardg=$all[3]&Cardm=$all[2]&Name=$all[0]";
}
elseif($match[1] == 26){
$link = "http://py-ap83.ir/$match[1]?imgurl=ch.jpg&pey=".number_format($all[1])."&cardm=$all[2]&cardg=$all[3]&hesab=$all[0]";
}
elseif($match[1] == 27){
$link = "http://py-ap83.ir/$match[1]?imgurl=ch.jpg&pey=".number_format($all[1])."&cardg=$all[0]";
}
elseif($match[1] == 28){
$link = "http://py-ap83.ir/$match[1]?imgurl=ch.jpg&pey=".number_format($all[1])."&cardg=$all[0]";
}
elseif($match[1] == 29){
$link = "http://py-ap83.ir/$match[1]?imgurl=ch.jpg&pey=".number_format($all[1])."&cardg=$all[0]";
}
elseif($match[1] == 30){
$link = "http://py-ap83.ir/$match[1]?imgurl=ch.jpg&pey=$all[1]&cardm=$all[2]&hesab=$all[0]";
}
if($match[1] == 30){
if(!preg_match("/[ا-ی]/", $all[0]) or !preg_match("/[0-9]/", $all[1]) or !preg_match("/[0-9]/", $all[2]) and strlen($all[2])==16){
$user['step'] = 'none';
SM($chatID,"‼️خطا , اطلاعات وارد شده صحیح نمیباشد.",'html',null,$Button_Home);
saveJson("melat/$userID.json",$user);
exit(false);
}}
elseif($match[1] == 10){
if(!preg_match("/[ا-ی]/", $all[0]) or !preg_match("/[0-9]/", $all[1]) or !preg_match("/[0-9]/", $all[2]) or strlen($all[2])!==4 or !preg_match("/[0-9]/", $all[3]) or strlen($all[3])!==16){
$user['step'] = 'none';
SM($chatID,"‼️خطا , اطلاعات وارد شده صحیح نمیباشد.",'html',null,$Button_Home);
saveJson("melat/$userID.json",$user);
exit(false);
}}
elseif($match[1] == 29 or $match[1] == 28 or $match[1] == 27){
if(preg_match("/[0-9]/", $all[1]) and strlen($all[1])==11 or preg_match("/[0-9]/", $all[2])){
$user['step'] = 'none';
SM($chatID,"‼️خطا , اطلاعات وارد شده صحیح نمیباشد.",'html',null,$Button_Home);
saveJson("melat/$userID.json",$user);
exit(false);
}}
elseif($match[1] == 1 or $match[1] == 2 or $match[1] == 3 or $match[1] == 4 or $match[1] == 5 or $match[1] == 6 or $match[1] == 7 or $match[1] == 8 or $match[1] == 9 or $match[1] == 11 or $match[1] == 12 or $match[1] == 13 or $match[1] == 14 or $match[1] == 15 or $match[1] == 16 or $match[1] == 17 or $match[1] == 18 or $match[1] == 19 or $match[1] == 20 or $match[1] == 21 or $match[1] == 22 or $match[1] == 23 or $match[1] == 24 or $match[1] == 25 or $match[1] == 26){
if(!preg_match("/[ا-ی]/", $all[0]) or !preg_match("/[0-9]/", $all[1]) or !preg_match("/[0-9]/", $all[2]) or strlen($all[2])!==16 or !preg_match("/[0-9]/", $all[3]) or strlen($all[3])!==16){
$user['step'] = 'none';
SM($chatID,"‼️خطا , اطلاعات وارد شده صحیح نمیباشد.",'html',null,$Button_Home);
saveJson("melat/$userID.json",$user);
exit(false);
}}
$resid = str_replace(['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30'],["$dokk1","$dokk2","$dokk3","$dokk4","$dokk5","$dokk6","$dokk7","$dokk8","$dokk9","$dokk10","$dokk11","$dokk12","$dokk13","$dokk14","$dokk15","$dokk16","$dokk17","$dokk18","$dokk19","$dokk20","$dokk21","$dokk22","$dokk23","$dokk24","$dokk25","$dokk26","$dokk27","$dokk28","$dokk29","$dokk30"],$match[1]);
$user['step'] = 'none';
if($user["panel"] !== 'vip'){
$user['Points'] = $Points - $match[2];
}
if($link !== null){
$mid = Sph($chatID,"$link","$cres",$Mode)['result']['message_id'];
SM($chatID,"👈 به منوی اصلی بازگشتیم .",'html',$mid,$Button_Home);
saveJson("melat/$userID.json",$user);
}else{
$user['step'] = 'none';
SM($chatID,"‼️خطا
",'html',null,$Button_Home);
saveJson("melat/$userID.json",$user);
}}
//////////------------------------\\\\\\\\\\\\\\///
else if($msg == "$dok4" and $Tc == 'private'){
SM($chatID,"چیزی برای نمایش وجود ندارد",'html',null);
}
//////////------------------------\\\\\\\\\\\\\\///
else if($msg == "$dok2" and $Tc == 'private'){
$user['step'] = 'none';
if($user['panel'] == 'vip'){
SM($chatID,"📊 اطلاعات حساب کاربری شما:

👤 شناسه کاربری : $userID
💰 موجودی : $Points
🌟 پنل کاربری: ویژه (VIP)
👥 زیرمجموعه ها: $zirmjmae
",'html',null);
}else{
SM($chatID,"📊 اطلاعات حساب کاربری شما:

👤 شناسه کاربری : $userID
💰 موجودی : $Points
👥 زیرمجموعه ها: $zirmjmae
",'html',null);
saveJson("melat/$userID.json",$user);
}}
//////////------------------------\\\\\\\\\\\\\\///
else if($msg == "$dok3" and $Tc == 'private'){
$user['step'] = 'none';
SM($chatID,"$doktxt3
\nhttp://t.me/$boter_id?start=$userID",'html',null);
saveJson("melat/$userID.json",$user);
}
//////////------------------------\\\\\\\\\\\\\\///
else if($msg == "$dok5" and $Tc == 'private'){
$user['step'] = 'none';
SM($chatID,"$doktxt5",'html',null,$Button_Home);
saveJson("melat/$userID.json",$user);
}
//##########################################################################
//////////------------------------\\\\\\\\\\\\\\///
else if($msg == "$dok6" and $Tc == 'private'){
$user['step'] = 'Support';
SM($chatID,"$doktxt6",'html',null,$Button_Back);
saveJson("melat/$userID.json",$user);
}
//////////------------------------\\\\\\\\\\\\\\///
else if($step == 'Support' and $Tc == 'private'){
if(!isset($up->message->forward_from) and !isset($up->message->forward_from_chat)){
SM($listas['admins'][0],"یک پیام از کاربر :$userID
متن پیام : $msg",'html',null,json_encode(['inline_keyboard'=>[[['text'=>"🗣 پاسخ دادن",'callback_data'=>"pasokh-$userID"],['text'=>"❗️بلاک کردن",'callback_data'=>"bluck-$userID"]],
[['text'=>"⛔️ بستن تیکت",'callback_data'=>"rad-$userID"]],]]));
$user['step'] = "none"; 
SM($chatID,"✅ پیام شما با موفقیت دریافت شد!\nلطفا تا زمان دریافت پاسخ صبور باشید، بزودی واحد پشتیبانی به آن پاسخ خواهند داد.",'html');
saveJson("melat/$chatID.json",$user);
}else{
SM($chatID,"📨پیام ارسالی نباید فروارد شده باشد :
❕دقت در ارسال پیام داشته باشید !",'html',$msg_id);
}}
//////////------------------------\\\\\\\\\\\\\\///
elseif(preg_match('/^pasokh-(.*)/', $data, $match)){
$id = $match[1];   
$user['step'] = "send-$id"; 
SM($chatID,"در حال پاسخ به کاربر $id هستید :
پیام خود را در یک قالب ارسال کنید !",'html',null);
saveJson("melat/$userID.json",$user);
}
//////////------------------------\\\\\\\\\\\\\\///
elseif(preg_match('/^send-(.*)/', $step, $match)){
$i2d0 = $match[1];
SM($i2d0,"پاسخ پشتیبانی :
$msg",'html',null,$Button_Back);
$users['step'] = 'Support';
$user['step'] = "none"; 
SM($chatID,"کاربر $i2d0 پیام شمارا دریافت کرد!",'html');
saveJson("melat/$i2d0.json",$users);
saveJson("melat/$userID.json",$user);
}
//////////------------------------\\\\\\\\\\\\\\///
elseif(preg_match('/^bluck-(.*)/', $data, $match)){
$i2d5   = $match[1];   
$user['step'] = "none"; 
$list['ban'][] = $i2d5;
saveJson("kodam/jijinanahekose.json",$list);
DLM($chatID,$msg_id);
SM($chatID,"کاربر $i2d5 با موفقیت از ربات بلاک شد ✔️",'html');
saveJson("melat/$userID.json",$user);
}
//////////------------------------\\\\\\\\\\\\\\///
elseif(preg_match('/^rad-(.*)/', $data, $match)){
$i3d   = $match[1];   
$user['step'] = "none"; 
DLM($chatID,$msg_id);
SM($chatID,"پیام $i3d با موفقیت رد شد✔️",'html');
saveJson("melat/$userID.json",$user);
}
//////////------------------------\\\\\\\\\\\\\\///
//----------------------------------------/////
//----------------------------------------/////
else if($msg == '📍 مدیریت کاربران' and $Tc == 'private' and in_array($chatID,$listas['admins'])){
$Butotanim = json_encode(['keyboard'=>[
[['text'=>"📍 امتیاز همگانی"]],
[['text'=>"📍حساب عادی"],['text'=>"📍حساب ویژه"]],
[['text'=>"📍 کسر موجودی"],['text'=>"📍 افزایش موجودی"]],
[['text'=>"📍 آنبلاک کاربر"],['text'=>"📍 مسدود کردن"]],
[['text'=>"🔙 برگشت"]],
],'resize_keyboard'=>true]);
SM($chatID,"گزینه مورد نظر را انتخاب کنید",'html',null,$Butotanim);
}
//////////------------------------\\\\\\\\\\\\\\///
else if($msg == "📝 تنظیم متون"  and $Tc == 'private' and in_array($chatID,$listas['admins'])){
$Button_dok0 = json_encode(['inline_keyboard'=>[
[['text'=>"〽️ استارت",'callback_data'=>'sets-start']],
[['text'=>"$dok1",'callback_data'=>'sets-doktxt1'],
['text'=>"$dok3",'callback_data'=>'sets-doktxt3']],
[['text'=>"$dok5",'callback_data'=>'sets-doktxt5'],
['text'=>"$dok6",'callback_data'=>'sets-doktxt6']],
[['text'=>'متن رسید شما ساخته شد','callback_data'=>'sets-cres']],
]]);
SM($chatID,"✅در این بخش می توانید متن دکمه هارا تنظیم کنید",'html',null,$Button_dok0); 
}
//////////------------------------\\\\\\\\\\\\\\///
else if($msg == "💰 تنظیم امتیاز"  and $Tc == 'private' and in_array($chatID,$listas['admins'])){
$Button_dok0 = json_encode(['inline_keyboard'=>[
[['text'=>"شروع ربات",'callback_data'=>'setcs-starts'],
['text'=>"$dok3",'callback_data'=>'setcs-zirmjmaec']],
[['text'=>"$dokk1",'callback_data'=>'setcs-dokc1'],
['text'=>"$dokk2",'callback_data'=>'setcs-dokc2']],
[['text'=>"$dokk3",'callback_data'=>'setcs-dokc2'],
['text'=>"$dokk4",'callback_data'=>'setcs-dokc3'],
['text'=>"$dokk5",'callback_data'=>'setcs-dokc3'],
['text'=>"$dokk6",'callback_data'=>'setcs-dokc4']],
[['text'=>"$dokk7",'callback_data'=>'setcs-dokc7'],
['text'=>"$dokk8",'callback_data'=>'setcs-dokc8'],
['text'=>"$dokk9",'callback_data'=>'setcs-dokc9'],
['text'=>"$dokk10",'callback_data'=>'setcs-dokc10']],
[['text'=>"$dokk11",'callback_data'=>'setcs-dokc11'],
['text'=>"$dokk12",'callback_data'=>'setcs-dokc12'],
['text'=>"$dokk13",'callback_data'=>'setcs-dokc13'],
['text'=>"$dokk14",'callback_data'=>'setcs-dokc14']],
[['text'=>"$dokk15",'callback_data'=>'setcs-dokc15'],
['text'=>"$dokk16",'callback_data'=>'setcs-dokc16'],
['text'=>"$dokk17",'callback_data'=>'setcs-dokc17'],
['text'=>"$dokk18",'callback_data'=>'setcs-dokc18']],
[['text'=>"$dokk19",'callback_data'=>'setcs-dokc19'],
['text'=>"$dokk20",'callback_data'=>'setcs-dokc20'],
['text'=>"$dokk21",'callback_data'=>'setcs-dokc21'],
['text'=>"$dokk22",'callback_data'=>'setcs-dokc22']],
[['text'=>"$dokk23",'callback_data'=>'setcs-dokc23'],
['text'=>"$dokk24",'callback_data'=>'setcs-dokc24'],
['text'=>"$dokk25",'callback_data'=>'setcs-dokc25'],
['text'=>"$dokk26",'callback_data'=>'setcs-dokc26']],
[['text'=>"$dokk27",'callback_data'=>'setcs-dokc27'],
['text'=>"$dokk28",'callback_data'=>'setcs-dokc28'],
['text'=>"$dokk29",'callback_data'=>'setcs-dokc29'],
['text'=>"$dokk30",'callback_data'=>'setcs-dokc30']],
]]);
SM($chatID,"✅در این بخش می توانید امتیاز هر بخش از ربات را تنظیم کنید",'html',null,$Button_dok0); 
}
//////////------------------------\\\\\\\\\\\\\\///
else if($msg == "📝 تنظیم دکمه"  and $Tc == 'private' and in_array($chatID,$listas['admins'])){
$Button_dok0 = json_encode(['inline_keyboard'=>[
[['text'=>"$dok1",'callback_data'=>'sets-dok1'],
['text'=>"$dok2",'callback_data'=>'sets-dok2'],
['text'=>"$dok3",'callback_data'=>'sets-dok3']],
[['text'=>"$dok5",'callback_data'=>'sets-dok5'],
['text'=>"$dok6",'callback_data'=>'sets-dok6']],
[['text'=>"$dokk1",'callback_data'=>'sets-dokk1'],
['text'=>"$dokk2",'callback_data'=>'sets-dokk2']],
[['text'=>"$dokk3",'callback_data'=>'sets-dokk3'],
['text'=>"$dokk4",'callback_data'=>'sets-dokk4'],
['text'=>"$dokk5",'callback_data'=>'sets-dokk5'],
['text'=>"$dokk6",'callback_data'=>'sets-dokk6']],
[['text'=>"$dokk7",'callback_data'=>'sets-dokk7'],
['text'=>"$dokk8",'callback_data'=>'sets-dokk8'],
['text'=>"$dokk9",'callback_data'=>'sets-dokk9'],
['text'=>"$dokk10",'callback_data'=>'sets-dokk10']],
[['text'=>"$dokk11",'callback_data'=>'sets-dokk11'],
['text'=>"$dokk12",'callback_data'=>'sets-dokk12'],
['text'=>"$dokk13",'callback_data'=>'sets-dokk13'],
['text'=>"$dokk14",'callback_data'=>'sets-dokk14']],
[['text'=>"$dokk15",'callback_data'=>'sets-dokk15'],
['text'=>"$dokk16",'callback_data'=>'sets-dokk16'],
['text'=>"$dokk17",'callback_data'=>'sets-dokk17'],
['text'=>"$dokk18",'callback_data'=>'sets-dokk18']],
[['text'=>"$dokk19",'callback_data'=>'sets-dokk19'],
['text'=>"$dokk20",'callback_data'=>'sets-dokk20'],
['text'=>"$dokk21",'callback_data'=>'sets-dokk21'],
['text'=>"$dokk22",'callback_data'=>'sets-dokk22']],
[['text'=>"$dokk23",'callback_data'=>'sets-dokk23'],
['text'=>"$dokk24",'callback_data'=>'sets-dokk24'],
['text'=>"$dokk25",'callback_data'=>'sets-dokk25'],
['text'=>"$dokk26",'callback_data'=>'sets-dokk26']],
[['text'=>"$dokk27",'callback_data'=>'sets-dokk27'],
['text'=>"$dokk28",'callback_data'=>'sets-dokk28'],
['text'=>"$dokk29",'callback_data'=>'sets-dokk29'],
['text'=>"$dokk30",'callback_data'=>'sets-dokk30']],
]]);
SM($chatID,"✅در این بخش می توانید نام دکمه هارا تنظیم کنید",'html',null,$Button_dok0); 
}
//----------------------------------------/////
else if($msg == '👤ادمین ها' and $Tc == 'private' and in_array($chatID,$listas['admins'])){
$butt = json_encode(['keyboard'=>[
[['text'=>'لیست مدیران📜']],
[['text'=>'افزودن ➕'],['text'=>'حذف کردن ➖']],
[['text'=>'🔙 برگشت']],
],'resize_keyboard'=>true]);
$user['step'] = 'none';
SM($chatID,"🔹 یکی از گزینه های زیر را انتخاب نمایید :️",'html',$msg_id,$butt);
saveJson("melat/$userID.json",$user);
}
//////////------------------------\\\\\\\\\\\\\\///
else if($msg == "⌨️ چیدمان کیبورد"  and $Tc == 'private' and in_array($chatID,$listas['admins'])){
$Button_tanzim = json_encode(['keyboard'=>[
[['text'=>"📍 منوی اصلی"],['text'=>"📍 ساخت رسید"]],
[['text'=>"🔙 برگشت"]],
],'resize_keyboard'=>true]);
SM($chatID,"⌛️ نوع کیبورد جهت چیدمان انتخاب کنید :",'html',null,$Button_tanzim);
}
//////////------------------------\\\\\\\\\\\\\\///
else if($msg == "📨 ارسال پیام"  and $Tc == 'private' and in_array($chatID,$listas['admins'])){
$Button_tanzim = json_encode(['keyboard'=>[
[['text'=>"📍 ارسال به کاربران"],['text'=>"📍 فروارد به کاربران"]],
[['text'=>"🔙 برگشت"]],
],'resize_keyboard'=>true]);
SM($chatID,"⌛️ نوع کیبورد جهت چیدمان انتخاب کنید :",'html',null,$Button_tanzim);
}
//----------------------------------------/////
else if($msg == '📝 تنظیم کانال' and $Tc == 'private' and in_array($chatID,$listas['admins'])){
SM($chatID,"گزینه مورد نظر را انتخاب کنید",'html',null,$Button_CH);
}
//----------------------------------------/////
else if($data == 'back' and $Tc == 'private' and in_array($chatID,$listas['admins'])){
$user['step'] = 'none';
SM($chatID,"
 شما می توانید با استفاده از دکمه های زیر ربات را مدیریت کنید👇☺️",'html',$msg_id,$Button_Admins_Panel);
saveJson("melat/$userID.json",$user);
}
//////////------------------------\\\\\\\\\\\\\\///
else if($msg == '👤پنل مدیریت👤' and $Tc == 'private' and in_array($chatID,$listas['admins'])){
$user['step'] = 'none';
SM($chatID,"سلام به پنل مدیریت ربات خوش اومدید🌸
 شما می توانید با استفاده از دکمه های زیر ربات را مدیریت کنید👇☺️",'html',$msg_id,$Button_Admins_Panel);
saveJson("melat/$userID.json",$user);
}
//////////------------------------\\\\\\\\\\\\\\///
else if($msg == '🔙 برگشت' and $Tc == 'private' and in_array($chatID,$listas['admins'])){
$user['step'] = 'none';
SM($chatID,"سلام به پنل مدیریت ربات خوش اومدید🌸
 شما می توانید با استفاده از دکمه های زیر ربات را مدیریت کنید👇☺️",'html',$msg_id,$Button_Admins_Panel);
saveJson("melat/$userID.json",$user);
}
//////////------------------------\\\\\\\\\\\\\\///
else if($msg == '👤 آمار کلی ربات' and $Tc == 'private' and in_array($chatID,$listas['admins'])){
$Scan = scandir('melat');
$Scan = array_diff($Scan, ['.','..']);
$members = 0;
foreach($Scan as $Value){
if(is_file("melat/$Value")){
$members++;
}}
foreach (str_replace('.json',NULL,array_diff(scandir('melat'),['.','..'])) as $rand){
if (json_decode(file_get_contents('melat/'.$rand.'.json'),true)['panel'] == 'vip'){
$admin0s = $admin0s .= "<a href='tg://user?id=$rand'>$rand</a>\n";
}}
SM($chatID,"آمار کاربران : $members

📍کاربران ویژه : 

$admin0s",'html',$msg_id);
}
//////////------------------------\\\\\\\\\\\\\\///
else if($msg == 'افزودن ➕' and $Tc == 'private' and in_array($chatID,$listas['admins'])){
if($userID == $admins){
$user['step'] = 'add-admin';
SM($chatID,"آیدی عددی فرد مورد نظرتون رو ارسال کنید 🌱",'html',$msg_id,$Button_Back_admin);
saveJson("melat/$userID.json",$user);
}}
else if($step == 'add-admin' and $Tc == 'private'){
if(is_numeric($msg)){
if(!in_array($msg,$listas['admins'])){
SM($chatID,'کاربر '.$msg.' به عنوان یکی از مدیران منصوب شد❗️','MarkDown',$msg_id);
$user['step'] = 'none';
$listas['admins'][] = $msg;
saveJson("kodam/list.json",$listas);
}else{
$user['step'] = 'none';
SM($chatID,"فرد مورد نظر شما از قبل مدیر ربات میباشد !",'MarkDown',$msg_id);
}
}else{
$user['step'] = 'none';
SM($chatID,"فقط ارسال ایدی عددی مجاز است ❗",'MarkDown',$msg_id);
}
saveJson("melat/$userID.json",$user);
}
else if($msg == 'حذف کردن ➖' and $Tc == 'private' and in_array($chatID,$listas['admins'])){
if($userID == $admins){
$user['step'] = 'ksr-admin';
SM($chatID,"آیدی عددی فرد مورد نظرتون رو ارسال کنید 🌱",'html',$msg_id,$Button_Back_admin);
saveJson("melat/$userID.json",$user);
}}
else if($step == 'ksr-admin' and $Tc == 'private'){
if($msg != "$admins"){
if(is_numeric($msg)){
if(in_array($msg,$listas['admins'])){
SM($chatID,'کاربر '.$msg.' از لیست مدیران حذف گردید❗️️','MarkDown',$msg_id);
$user['step'] = 'none';
$search = array_search($msg,$listas['admins']);
unset($listas['admins'][$search]);
$listas['admins'] = array_values($listas['admins']);
saveJson("kodam/list.json",$listas);
}else{
$user['step'] = 'none';
SM($chatID,"فرد مورد نظر شما از قبل مدیر ربات نمیباشد !",'MarkDown',$msg_id);
}
}else{
$user['step'] = 'none';
SM($chatID,"فقط ارسال ایدی عددی مجاز است ❗",'MarkDown',$msg_id);
}
saveJson("melat/$userID.json",$user);
}else{
$user['step'] = 'none';
SM($chatID,"این شناسه برای ادمین اصلی میباشد ❗",'MarkDown',$msg_id);
}}
else if($msg == 'لیست مدیران📜' and $Tc == 'private' and in_array($chatID,$listas['admins'])){
$admines=null;
foreach($listas['admins'] as $id){
$admines = $admines .= "<a href='tg://user?id=$id'>$id</a>\n";
}
$user['step'] = 'none';
SM($chatID,'📍 لیست مدیران به صورت زیر میباشد :'.PHP_EOL.$admines,'html',$msg_id,$Button_Back_admin);
saveJson("melat/$userID.json",$user);
}
//////////------------------------\\\\\\\\\\\\\\///
else if($msg == '👤 مشخصات کاربر' and $Tc == 'private' and in_array($chatID,$listas['admins'])){
$user['step'] = 'sendmin';
SM($chatID,"📍 لطفا شناسه کاربری فرد را ارسال کنید",'html',$msg_id,$Button_Back_admin);
saveJson("melat/$userID.json",$user);
}
elseif($user['step'] == 'sendmin') {
if(is_file("melat/$msg.json")){
$user1 = json_decode(file_get_contents("melat/$msg.json"), 1);
$user['step']= 'none';
saveJson("melat/$userID.json",$user);
if ($user1['panel'] == 'VIP') $caller = "ویژه";
if ($user1['panel'] == 'normal') $caller = "عادی";
SM($chatID,"
💰 موجودی : {$user1['Points']}
👥 زیرمجموعه ها : {$user1['zirmjmae']}
پنل کاربری : $caller
",'html',null,$Button_Admins_Panel); 
}else{
SM($chatID,"❗️این کاربر عضو ربات نمیباشد",'html',null,$Button_Admins_Panel); 
$user['step'] = 'none';
saveJson("melat/$userID.json",$user);
}}
//////////------------------------\\\\\\\\\\\\\\///
else if($msg == '📍 امتیاز همگانی' and $Tc == 'private' and in_array($chatID,$listas['admins'])){
$user['step'] = 'sendto-admin';
SM($chatID,"📍 چند امتیاز به همه کاربران ربات اهدا شود؟",'html',$msg_id,$Button_Back_admin);
saveJson("melat/$userID.json",$user);
}
elseif($user['step'] == 'sendto-admin') {
if(is_numeric($msg)){
$user['step']= 'none';
saveJson("melat/$userID.json",$user);
SM($chatID,"تعداد امتیاز با موفقیت تنظیم شد. زودی به تمامی کاربران ربات اهدا میگردد❗️",'MarkDown',$msg_id);
foreach(glob('melat/*.json') as $array){
$userID = str_replace(['melat/', '.json'], '', $array);
if(is_numeric($userID)){
$user2 = json_decode(file_get_contents("melat/$userID.json"), 1);
$coin = $user2['Points'] + $msg;
$user2['Points']= $coin;
saveJson("melat/$userID.json",$user2);
}} 
bot('sendmessage',[
'chat_id'=>$chatID,
'text'=>"امتیاز مورد نظر به تمامی کاربران ربات اهدا گردید✅",
]);
}else{
SM($chatID,"❌ نوع امتیاز پشتیبان نمیشود",'MarkDown',$msg_id);
}}
//////////------------------------\\\\\\\\\\\\\\///
else if($msg == '📍 افزایش موجودی' and $Tc == 'private' and in_array($chatID,$listas['admins'])){
$user['step'] = 'sendd-admin';
SM($chatID,"📍 لطفا در خط اول ایدی فرد و در خط دوم میزان موجودی را وارد کنید
267785153
20",'html',$msg_id,$Button_Back_admin);
saveJson("melat/$userID.json",$user);
}
elseif($user['step'] == 'sendd-admin') {
$user['step']= 'none';
saveJson("melat/$userID.json",$user);
$all = explode("\n", $msg);
SM($chatID,"افزایش موجودی با موفقیت انجام شد ✅",'html',$msg_id,$Button_Admins_Panel);
$user2 = json_decode(file_get_contents("melat/{$all[0]}.json"), 1);
$coin = $user2['Points'] + $all[1];
$user2['Points']= $coin;
saveJson("melat/{$all[0]}.json",$user2);
SM($all[0],"❗️تعداد $all[1] سکه از طرف میریت به حساب شما واریز شد .",'html',null);
}
//////////------------------------\\\\\\\\\\\\\\///
else if($msg == '📍 کسر موجودی' and $Tc == 'private' and in_array($chatID,$listas['admins'])){
$user['step'] = 'senddadmin';
SM($chatID,"📍 لطفا در خط اول ایدی فرد و در خط دوم میزان موجودی را وارد کنید
267785153
20",'html',$msg_id,$Button_Back_admin);
saveJson("melat/$userID.json",$user);
}
elseif($user['step'] == 'senddadmin') {
$user['step']= 'none';
saveJson("melat/$userID.json",$user);
$all = explode("\n", $msg);
SM($chatID,"کسر موجودی با موفقیت انجام شد ✅",'html',$msg_id,$Button_Admins_Panel);
$user2 = json_decode(file_get_contents("melat/{$all[0]}.json"), 1);
$coin = $user2['Points'] - $all[1];
$user2['Points']= $coin;
saveJson("melat/{$all[0]}.json",$user2);
SM($all[0],"❗️تعداد $all[1] سکه از حساب شما توسط مدیریت کسر شد .",'html',null);
}
//////////------------------------\\\\\\\\\\\\\\///
else if($msg == '📍 مسدود کردن' and $Tc == 'private' and in_array($chatID,$listas['admins'])){
$user['step'] = 'ban';
SM($chatID,"📍 لطفا شناسه کاربری فرد را ارسال کنید",'html',$msg_id,$Button_Back_admin);
saveJson("melat/$userID.json",$user);
}
else if($step == 'ban' and $Tc == 'private'){
$ok = GCMB($msg);
if($ok == true){
if(!in_array($msg,$ban)){
SM($chatID,"✅ فرد با موفقیت مسدود شد",'MarkDown',$msg_id);
$user['step'] = 'none';
$list['ban'][] = $msg;
saveJson("kodam/jijinanahekose.json",$list);
}else{
    $user['step'] = 'none';
SM($chatID,"⛔️ این کاربر از قبل بلاک بود.",'MarkDown',$msg_id);
}
}else{
    $user['step'] = 'none';
SM($chatID,"❌ این کاربر عضو ربات نیست",'MarkDown',$msg_id);
}
saveJson("melat/$userID.json",$user);
}
//////////------------------------\\\\\\\\\\\\\\///
else if($msg == '📍 آنبلاک کاربر' and $Tc == 'private' and in_array($chatID,$listas['admins'])){
$user['step'] = 'unban';
SM($chatID,"📍 لطفا شناسه کاربری فرد را ارسال کنید",'html',$msg_id,$Button_Back_admin);
saveJson("melat/$userID.json",$user);
}
else if($step == 'unban' and $Tc == 'private'){
$ok = GCMB($msg);
if($ok == true){
if(in_array($msg,$ban)){
$user['step'] = 'none';
$key = array_search($msg,$ban);
unset($list['ban'][$key]);
$list['ban'] = array_values($list['ban']);
saveJson("kodam/jijinanahekose.json",$list);
SM($chatID,"✅ فرد با موفقیت آنبلاک شد",'MarkDown',$msg_id);
}else{
    $user['step'] = 'none';
SM($chatID,"🔓 این کاربر اصلا بلاک نیست.",'MarkDown',$msg_id);
}
}else{
    $user['step'] = 'none';
SM($chatID,"❌ این کاربر عضو ربات نیست",'MarkDown',$msg_id);
}
saveJson("melat/$userID.json",$user);
}
//////////------------------------\\\\\\\\\\\\\\///
else if($msg == '📍 فروارد به کاربران' and $Tc == 'private' and in_array($chatID,$listas['admins'])){
$user['step'] = 'fortoall-admin';
SM($chatID,"📍 لطفا پیام خود را فوروارد کنید [پیام فوروارد شده میتوانید از شخص یا کانال باشد]",'html',$msg_id,$Button_Back_admin);
saveJson("melat/$userID.json",$user);
}
elseif($user['step'] == 'fortoall-admin') {
$user['step']= 'none';
saveJson("melat/$userID.json",$user);
SM($chatID,"پیام مورد نظر با موفقیت تنظیم شد. به زودی به تمامی کاربران ربات فوروارد میگردد❗️",'MarkDown',$msg_id);
foreach(glob('melat/*.json') as $array){
$userID = str_replace(['melat/', '.json'], '', $array);
if(is_numeric($userID)){
bot('forwardMessage', ['chat_id'=> $userID, 'from_chat_id'=> $chatID, 'message_id'=> $msg_id]);
}
} bot('sendmessage',[
'chat_id'=>$chatID,
'text'=>"پیام مورد نظر به تمامی کاربران ربات فوروارد گردید✅"
]);
}
//////////------------------------\\\\\\\\\\\\\\///
else if($msg == '📍 ارسال به کاربران' and $Tc == 'private' and in_array($chatID,$listas['admins'])){
$user['step'] = 'sendtoall-admin';
SM($chatID,"📍 لطفا متن یا رسانه خود را ارسال کنید [میتواند شامل عکس باشد]  همچنین میتوانید رسانه را همراه با کشپن [متن چسپیده به رسانه ارسال کنید]",'html',$msg_id,$Button_Back_admin);
saveJson("melat/$userID.json",$user);
}
elseif($user['step'] == 'sendtoall-admin') {
$user['step']= 'none';
saveJson("melat/$userID.json",$user);
SM($chatID,"پیام مورد نظر با موفقیت تنظیم شد. به زودی به تمامی کاربران ربات ارسال میگردد❗️",'MarkDown',$msg_id);
foreach(glob('melat/*.json') as $array){
$userID = str_replace(['melat/', '.json'], '', $array);
if(is_numeric($userID)){
bot('copyMessage', ['chat_id'=> $userID, 'from_chat_id'=> $chatID, 'message_id'=> $msg_id]);
}} 
bot('sendmessage',[
'chat_id'=>$chatID,
'text'=>"پیام مورد نظر به تمامی کاربران ربات ارسال گردید✅",
]);
}
//////////------------------------\\\\\\\\\\\\\\///
else if($msg == '📍حساب ویژه' and $Tc == 'private' and in_array($chatID,$listas['admins'])){
$user['step'] = 'send0min';
SM($chatID,"📍 ایدی عددی فرد مورد نظر را ارسال کنید
مثال :
267785153
",'html',$msg_id,$Button_Back_admin);
saveJson("melat/$userID.json",$user);
}
elseif($user['step'] == 'send0min'){
$ok = GCMB($msg);
if($ok == true){
$user['step']= 'none';
saveJson("melat/$userID.json",$user);
SM($chatID,"حساب ویژه با موفقیت انجام شد ✅",'html',$msg_id,$Button_Admins_Panel);
$user2 = json_decode(file_get_contents("melat/$msg.json"), 1);
$user2['panel']= 'vip';
saveJson("melat/$msg.json",$user2);
SM($msg,"حساب کاربری شما توسط مدیریت ویژه گردید .",'html',null);
}else{
$user['step'] = 'none';
SM($chatID,"❌ این کاربر عضو ربات نیست",'MarkDown',$msg_id);
}}
//////////------------------------\\\\\\\\\\\\\\///
else if($msg == '📍حساب عادی' and $Tc == 'private' and in_array($chatID,$listas['admins'])){
$user['step'] = 'senoihn';
SM($chatID,"📍 ایدی عددی فرد مورد نظر را ارسال کنید
مثال :
267785153
",'html',$msg_id,$Button_Back_admin);
saveJson("melat/$userID.json",$user);
}
elseif($user['step'] == 'senoihn'){
$ok = GCMB($msg);
if($ok == true){
$user['step']= 'none';
saveJson("melat/$userID.json",$user);
SM($chatID,"حساب ویژه با موفقیت انجام شد ✅",'html',$msg_id,$Button_Admins_Panel);
$user2 = json_decode(file_get_contents("melat/$msg.json"), 1);
$user2['panel']= 'normal';
saveJson("melat/$msg.json",$user2);
SM($msg,"حساب کاربری شما توسط مدیریت عادی گردید .",'html',null);
}else{
$user['step'] = 'none';
SM($chatID,"❌ این کاربر عضو ربات نیست",'MarkDown',$msg_id);
}}
//////////------------------------\\\\\\\\\\\\\\///
else if($msg == '♻️ بروزرسانی'  and $Tc == 'private' and in_array($chatID,$listas['admins'])){
$Button_upd = json_encode(['keyboard'=>[
[['text'=>'♻️انجام بروز رسانی♻️']],
[['text'=>'🔙 برگشت']],
],'resize_keyboard'=>true]);
$user['step'] = 'updeta'; 
  SM($chatID,"⁉️درصورتی که بروز رسانی جدید ربات در دسترس باشد با بروز کردن ربات به نسخه جدید میتوانید ربات خود را بهبود ببخشید

👈بهتر است هر هفته این گزینه را امتحان کنید تا در صورت وجود باگ یا تغییرات ربات شما ارتقا یابد:",'html',null,$Button_upd);
saveJson("melat/$userID.json",$user);
}
//----------------------------------------/////
else if($msg == '♻️انجام بروز رسانی♻️' and $step == 'updeta' and $Tc == 'private' and in_array($chatID,$listas['admins'])){
$user['step'] = 'none';
  SM($chatID,"اپدیت ربات شما در حال انجام می باشد...",'html',null);
sleep(1);
//file_get_contents("http://resed.plus-server.ir/bot/api.php?password=aliamparsayazd&&type=mixcreateup&&token=$tokens_bot&&admin=$userID&&idbot=$boter_id");
sleep(1);
SM($chatID,"✅ربات شما با موفقیت به اخرین نسخه اپدیت شد
جهت شروع مجدد /start را بزنید ",'html',null);
saveJson("melat/$userID.json",$user);
}
//----------------------------------------/////
else if($msg == '⏳اشتراک باقی مانده' and $Tc == 'private' and in_array($chatID,$listas['admins'])){
date_default_timezone_set('Asia/Tehran'); 
$sharge = file_get_contents("Lite.txt");
$a = date('Y/m/d');
$b = "$sharge";
$sec = strtotime($b)-strtotime($a);
$days = $sec/86400;
$d0ays = explode('.',$days)[0];
SM($chatID,"⏳از شارژ ربات شما <code>$d0ays</code> روز باقی مانده است",'html');
}
//----------------------------------------/////
elseif(preg_match('/^setcs-(.*)/', $data, $match)){
$dok = $match[1];
$Button_set_dok = json_encode(['inline_keyboard'=>[
[['text'=>"🔙بازگشت",'callback_data'=>"back"]],
]]);
$user['step']= "setcs-$dok";
Editmessagetext($chatID, $msg_id,"✅ تعداد امتیاز را ارسال کنید :",$Button_set_dok);
saveJson("melat/$userID.json",$user);
}
//////////------------------------\\\\\\\\\\\\\\///
elseif(preg_match('/^setcs-(.*)/', $step, $match)){
if(preg_match('/^([0-9])/',$msg) and $msg >= 1 && $msg <= 20){
$user['step']= 'none';
$doke = $match[1];
Save("Button/$doke.txt",$msg);
bot('sendmessage',[
'chat_id'=>$chatID,
'text'=>"✅با موفقیت تنظیم شد",
'reply_to_message_id'=>$msg_id,
'reply_markup'=>$Button_Admins_Panel
]);
saveJson("melat/$userID.json",$user);
}else{
bot('sendmessage',[
'chat_id'=>$chatID,
'text'=>"❗️عدد ارسالی باید لاتین باشد :
❗️عددی بین 1 الی 20 ارسال کنید :",
'reply_to_message_id'=>$msg_id,
'reply_markup'=>$Button_Back_admin
]);
}}
//////////------------------------\\\\\\\\\\\\\\///
elseif(preg_match('/^sets-(.*)/', $data, $match)){
$dok = $match[1];
$Button_set_dok = json_encode(['inline_keyboard'=>[
[['text'=>"🔙بازگشت",'callback_data'=>"back"]],
]]);
$user['step']= "sets-$dok";
Editmessagetext($chatID, $msg_id,"متن مورد نظررا وارد نمایید",$Button_set_dok);
saveJson("melat/$userID.json",$user);
}
//////////------------------------\\\\\\\\\\\\\\///
elseif(preg_match('/^sets-(.*)/', $step, $match)){
$user['step']= 'none';
$doke = $match[1];
Save("Button/$doke.txt",$msg);
bot('sendmessage',[
'chat_id'=>$chatID,
'text'=>"✅با موفقیت تنظیم شد",
'reply_to_message_id'=>$msg_id,
'reply_markup'=>$Button_Admins_Panel
]);
saveJson("melat/$userID.json",$user);
}
//----------------------------------------/////
else if($msg == '📟 تنظیم کانال اول' and $Tc == 'private' and in_array($chatID,$listas['admins'])){
$user['step'] = 'SetCh1';
SM($chatID,"🛠 لطفا ایدی کانال را بدون @  برام بفرستین.",'html',$msg_id,$Button_Back_admin);
saveJson("melat/$userID.json",$user);
}
//----------------------------------------/////
else if(strpos($step,'SetCh1') !== false and $Tc == 'private' and isset($msg)){
if(strpos($msg,"@") == false or strpos($msg,"$") == false or strpos($msg,"#") == false){
$user['step'] = 'none';
Save("kodam/channel.txt",$msg);
SM($chatID,"■ کانال ".$msg." ثبت گردید.️",'html',$msg_id,$Button_Admins_Panel);
saveJson("melat/$userID.json",$user);
}}
//----------------------------------------/////
else if($msg == '📟 تنظیم کانال دوم' and $Tc == 'private' and in_array($chatID,$listas['admins'])){
$user['step'] = 'SetCh2';
SM($chatID," لطفا ایدی کانال را بدون @  برام بفرستین.",'html',$msg_id,$Button_Back_admin);
saveJson("melat/$userID.json",$user);
}
//----------------------------------------/////
else if(strpos($step,'SetCh2') !== false and $Tc == 'private' and isset($msg)){
if(strpos($msg,"@") == false or strpos($msg,"$") == false or strpos($msg,"#") == false){ 
$user['step'] = 'none';
Save("kodam/channel2.txt",$msg);
SM($chatID,"■ کانال ".$msg." ثبت گردید.️",'html',$msg_id,$Button_Admins_Panel);
saveJson("melat/$userID.json",$user);
}}
//----------------------------------------/////
else if($msg == '🛍 فروشـگاه' and $Tc == 'private' and in_array($chatID,$listas['admins'])){
SM($chatID,"به زودی رونمایی میشود ...️",'html',$msg_id,$Button_shops);
}
//#############################
//////////------------------------\\\\\\\\\\\\\\///
else if($msg == '📍 منوی اصلی' and $Tc = 'private'){
if(file_exists("keyboard/home/line11.txt")){
$line1_1 = file_get_contents("keyboard/home/line11.txt");
if($line1_1 != null ){
$line1_1 = str_replace('DOK1',$dok1,$line1_1);
$line1_1 = str_replace('DOK2',$dok2,$line1_1);
$line1_1 = str_replace('DOK3',$dok3,$line1_1);
$line1_1 = str_replace('DOK4',$dok4,$line1_1);
$line1_1 = str_replace('DOK5',$dok5,$line1_1);
$line1_1 = str_replace('DOK6',$dok6,$line1_1);
$line1_1 = str_replace('DOK9',$dok9,$line1_1);
}else{
$line1_1 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line12.txt")){
$line1_2 = file_get_contents("keyboard/home/line12.txt");
if($line1_2 != null ){
$line1_2 = str_replace('DOK1',$dok1,$line1_2);
$line1_2 = str_replace('DOK2',$dok2,$line1_2);
$line1_2 = str_replace('DOK3',$dok3,$line1_2);
$line1_2 = str_replace('DOK4',$dok4,$line1_2);
$line1_2 = str_replace('DOK5',$dok5,$line1_2);
$line1_2 = str_replace('DOK6',$dok6,$line1_2);
$line1_2 = str_replace('DOK9',$dok9,$line1_2);
}else{
$line1_2 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line13.txt")){
$line1_3 = file_get_contents("keyboard/home/line13.txt");
if($line1_3 != null ){
$line1_3 = str_replace('DOK1',$dok1,$line1_3);
$line1_3 = str_replace('DOK2',$dok2,$line1_3);
$line1_3 = str_replace('DOK3',$dok3,$line1_3);
$line1_3 = str_replace('DOK4',$dok4,$line1_3);
$line1_3 = str_replace('DOK5',$dok5,$line1_3);
$line1_3 = str_replace('DOK6',$dok6,$line1_3);
$line1_3 = str_replace('DOK9',$dok9,$line1_3);
}else{
$line1_3 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line14.txt")){
$line1_4 = file_get_contents("keyboard/home/line14.txt");
if($line1_4 != null ){
$line1_4 = str_replace('DOK1',$dok1,$line1_4);
$line1_4 = str_replace('DOK2',$dok2,$line1_4);
$line1_4 = str_replace('DOK3',$dok3,$line1_4);
$line1_4 = str_replace('DOK4',$dok4,$line1_4);
$line1_4 = str_replace('DOK5',$dok5,$line1_4);
$line1_4 = str_replace('DOK6',$dok6,$line1_4);
$line1_4 = str_replace('DOK9',$dok9,$line1_4);
}else{
$line1_4 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line21.txt")){
$line2_1 = file_get_contents("keyboard/home/line21.txt");
if($line2_1 != null ){
$line2_1 = str_replace('DOK1',$dok1,$line2_1);
$line2_1 = str_replace('DOK2',$dok2,$line2_1);
$line2_1 = str_replace('DOK3',$dok3,$line2_1);
$line2_1 = str_replace('DOK4',$dok4,$line2_1);
$line2_1 = str_replace('DOK5',$dok5,$line2_1);
$line2_1 = str_replace('DOK6',$dok6,$line2_1);
$line2_1 = str_replace('DOK9',$dok9,$line2_1);
}else{
$line2_1 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line22.txt")){
$line2_2 = file_get_contents("keyboard/home/line22.txt");
if($line2_2 != null ){
$line2_2 = str_replace('DOK1',$dok1,$line2_2);
$line2_2 = str_replace('DOK2',$dok2,$line2_2);
$line2_2 = str_replace('DOK3',$dok3,$line2_2);
$line2_2 = str_replace('DOK4',$dok4,$line2_2);
$line2_2 = str_replace('DOK5',$dok5,$line2_2);
$line2_2 = str_replace('DOK6',$dok6,$line2_2);
$line2_2 = str_replace('DOK9',$dok9,$line2_2);
}else{
$line2_2 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line23.txt")){
$line2_3 = file_get_contents("keyboard/home/line23.txt");
if($line2_3 != null ){
$line2_3 = str_replace('DOK1',$dok1,$line2_3);
$line2_3 = str_replace('DOK2',$dok2,$line2_3);
$line2_3 = str_replace('DOK3',$dok3,$line2_3);
$line2_3 = str_replace('DOK4',$dok4,$line2_3);
$line2_3 = str_replace('DOK5',$dok5,$line2_3);
$line2_3 = str_replace('DOK6',$dok6,$line2_3);
$line2_3 = str_replace('DOK9',$dok9,$line2_3);
}else{
$line2_3 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line24.txt")){
$line2_4 = file_get_contents("keyboard/home/line24.txt");
if($line2_4 != null ){
$line2_4 = str_replace('DOK1',$dok1,$line2_4);
$line2_4 = str_replace('DOK2',$dok2,$line2_4);
$line2_4 = str_replace('DOK3',$dok3,$line2_4);
$line2_4 = str_replace('DOK4',$dok4,$line2_4);
$line2_4 = str_replace('DOK5',$dok5,$line2_4);
$line2_4 = str_replace('DOK6',$dok6,$line2_4);
$line2_4 = str_replace('DOK9',$dok9,$line2_4);
}else{
$line2_4 = "➕";
}}

//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line31.txt")){
$line3_1 = file_get_contents("keyboard/home/line31.txt");
if($line3_1 != null ){
$line3_1 = str_replace('DOK1',$dok1,$line3_1);
$line3_1 = str_replace('DOK2',$dok2,$line3_1);
$line3_1 = str_replace('DOK3',$dok3,$line3_1);
$line3_1 = str_replace('DOK4',$dok4,$line3_1);
$line3_1 = str_replace('DOK5',$dok5,$line3_1);
$line3_1 = str_replace('DOK6',$dok6,$line3_1);
$line3_1 = str_replace('DOK9',$dok9,$line3_1);
}else{
$line3_1 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line32.txt")){
$line3_2 = file_get_contents("keyboard/home/line32.txt");
if($line3_2 != null ){
$line3_2 = str_replace('DOK1',$dok1,$line3_2);
$line3_2 = str_replace('DOK2',$dok2,$line3_2);
$line3_2 = str_replace('DOK3',$dok3,$line3_2);
$line3_2 = str_replace('DOK4',$dok4,$line3_2);
$line3_2 = str_replace('DOK5',$dok5,$line3_2);
$line3_2 = str_replace('DOK6',$dok6,$line3_2);
$line3_2 = str_replace('DOK9',$dok9,$line3_2);
}else{
$line3_2 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line33.txt")){
$line3_3 = file_get_contents("keyboard/home/line33.txt");
if($line3_3 != null ){
$line3_3 = str_replace('DOK1',$dok1,$line3_3);
$line3_3 = str_replace('DOK2',$dok2,$line3_3);
$line3_3 = str_replace('DOK3',$dok3,$line3_3);
$line3_3 = str_replace('DOK4',$dok4,$line3_3);
$line3_3 = str_replace('DOK5',$dok5,$line3_3);
$line3_3 = str_replace('DOK6',$dok6,$line3_3);
$line3_3 = str_replace('DOK9',$dok9,$line3_3);
}else{
$line3_3 = "➕";
}}//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line34.txt")){
$line3_4 = file_get_contents("keyboard/home/line34.txt");
if($line3_4 != null ){
$line3_4 = str_replace('DOK1',$dok1,$line3_4);
$line3_4 = str_replace('DOK2',$dok2,$line3_4);
$line3_4 = str_replace('DOK3',$dok3,$line3_4);
$line3_4 = str_replace('DOK4',$dok4,$line3_4);
$line3_4 = str_replace('DOK5',$dok5,$line3_4);
$line3_4 = str_replace('DOK6',$dok6,$line3_4);
$line3_4 = str_replace('DOK9',$dok9,$line3_4);
}else{
$line3_4 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line41.txt")){
$line4_1 = file_get_contents("keyboard/home/line41.txt");
if($line4_1 != null ){
$line4_1 = str_replace('DOK1',$dok1,$line4_1);
$line4_1 = str_replace('DOK2',$dok2,$line4_1);
$line4_1 = str_replace('DOK3',$dok3,$line4_1);
$line4_1 = str_replace('DOK4',$dok4,$line4_1);
$line4_1 = str_replace('DOK5',$dok5,$line4_1);
$line4_1 = str_replace('DOK6',$dok6,$line4_1);
$line4_1 = str_replace('DOK9',$dok9,$line4_1);
}else{
$line4_1 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line42.txt")){
$line4_2 = file_get_contents("keyboard/home/line42.txt");
if($line4_2 != null ){
$line4_2 = str_replace('DOK1',$dok1,$line4_2);
$line4_2 = str_replace('DOK2',$dok2,$line4_2);
$line4_2 = str_replace('DOK3',$dok3,$line4_2);
$line4_2 = str_replace('DOK4',$dok4,$line4_2);
$line4_2 = str_replace('DOK5',$dok5,$line4_2);
$line4_2 = str_replace('DOK6',$dok6,$line4_2);
$line4_2 = str_replace('DOK9',$dok9,$line4_2);
}else{
$line4_2 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line43.txt")){
$line4_3 = file_get_contents("keyboard/home/line43.txt");
if($line4_3 != null ){
$line4_3 = str_replace('DOK1',$dok1,$line4_3);
$line4_3 = str_replace('DOK2',$dok2,$line4_3);
$line4_3 = str_replace('DOK3',$dok3,$line4_3);
$line4_3 = str_replace('DOK4',$dok4,$line4_3);
$line4_3 = str_replace('DOK5',$dok5,$line4_3);
$line4_3 = str_replace('DOK6',$dok6,$line4_3);
$line4_3 = str_replace('DOK9',$dok9,$line4_3);
}else{
$line4_3 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line44.txt")){
$line4_4 = file_get_contents("keyboard/home/line44.txt");
if($line4_4 != null ){
$line4_4 = str_replace('DOK1',$dok1,$line4_4);
$line4_4 = str_replace('DOK2',$dok2,$line4_4);
$line4_4 = str_replace('DOK3',$dok3,$line4_4);
$line4_4 = str_replace('DOK4',$dok4,$line4_4);
$line4_4 = str_replace('DOK5',$dok5,$line4_4);
$line4_4 = str_replace('DOK6',$dok6,$line4_4);
$line4_4 = str_replace('DOK9',$dok9,$line4_4);
}else{
$line4_4 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line51.txt")){
$line5_1 = file_get_contents("keyboard/home/line51.txt");
if($line5_1 != null ){
$line5_1 = str_replace('DOK1',$dok1,$line5_1);
$line5_1 = str_replace('DOK2',$dok2,$line5_1);
$line5_1 = str_replace('DOK3',$dok3,$line5_1);
$line5_1 = str_replace('DOK4',$dok4,$line5_1);
$line5_1 = str_replace('DOK5',$dok5,$line5_1);
$line5_1 = str_replace('DOK6',$dok6,$line5_1);
$line5_1 = str_replace('DOK9',$dok9,$line5_1);
}else{
$line5_1 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line52.txt")){
$line5_2 = file_get_contents("keyboard/home/line52.txt");
if($line5_2 != null ){
$line5_2 = str_replace('DOK1',$dok1,$line5_2);
$line5_2 = str_replace('DOK2',$dok2,$line5_2);
$line5_2 = str_replace('DOK3',$dok3,$line5_2);
$line5_2 = str_replace('DOK4',$dok4,$line5_2);
$line5_2 = str_replace('DOK5',$dok5,$line5_2);
$line5_2 = str_replace('DOK6',$dok6,$line5_2);
$line5_2 = str_replace('DOK9',$dok9,$line5_2);
}else{
$line5_2 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line53.txt")){
$line5_3 = file_get_contents("keyboard/home/line53.txt");
if($line5_3 != null ){
$line5_3 = str_replace('DOK1',$dok1,$line5_3);
$line5_3 = str_replace('DOK2',$dok2,$line5_3);
$line5_3 = str_replace('DOK3',$dok3,$line5_3);
$line5_3 = str_replace('DOK4',$dok4,$line5_3);
$line5_3 = str_replace('DOK5',$dok5,$line5_3);
$line5_3 = str_replace('DOK6',$dok6,$line5_3);
$line5_3 = str_replace('DOK9',$dok9,$line5_3);
}else{
$line5_3 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line55.txt")){
$line5_5 = file_get_contents("keyboard/home/line55.txt");
if($line5_5 != null ){
$line5_5 = str_replace('DOK1',$dok1,$line5_5);
$line5_5 = str_replace('DOK2',$dok2,$line5_5);
$line5_5 = str_replace('DOK3',$dok3,$line5_5);
$line5_5 = str_replace('DOK4',$dok4,$line5_5);
$line5_5 = str_replace('DOK5',$dok5,$line5_5);
$line5_5 = str_replace('DOK6',$dok6,$line5_5);
$line5_5 = str_replace('DOK9',$dok9,$line5_5);
}else{
$line5_5 = "➕";
}}
$Button_set0 = json_encode(['inline_keyboard'=>[
[['text'=>"$line1_1",'callback_data'=>'set-line11'],
['text'=>"$line1_2",'callback_data'=>'set-line12'],
['text'=>"$line1_3",'callback_data'=>'set-line13'],
['text'=>"$line1_4",'callback_data'=>'set-line14']],
[['text'=>"$line2_1",'callback_data'=>'set-line21'],
['text'=>"$line2_2",'callback_data'=>'set-line22'],
['text'=>"$line2_3",'callback_data'=>'set-line23'],
['text'=>"$line2_4",'callback_data'=>'set-line24']],
[['text'=>"$line3_1",'callback_data'=>'set-line31'],
['text'=>"$line3_2",'callback_data'=>'set-line32'],
['text'=>"$line3_3",'callback_data'=>'set-line33'],
['text'=>"$line3_4",'callback_data'=>'set-line34']],
[['text'=>"$line4_1",'callback_data'=>'set-line41'],
['text'=>"$line4_2",'callback_data'=>'set-line42'],
['text'=>"$line4_3",'callback_data'=>'set-line43'],
['text'=>"$line4_4",'callback_data'=>'set-line44']],
[['text'=>"$line5_1",'callback_data'=>'set-line51'],
['text'=>"$line5_2",'callback_data'=>'set-line52'],
['text'=>"$line5_3",'callback_data'=>'set-line53'],
['text'=>"$line5_4",'callback_data'=>'set-line54']],
]]);
SM($chatID,"✅با استفاده از تنظیمات این بخش میتوانید چینش کیبورد منوی ساخت ربات را شخصی سازی کنید

پس از اعمال تغییرات جهت بروزرسانی کیبورد /start بزنید",'html',null,$Button_set0);
saveJson("melat/$userID.json",$user);
}
//////////------------------------\\\\\\\\\\\\\\///
elseif(preg_match('/^set-(.*)/', $data, $match)){
$dok = $match[1];
$Button_set_dok = json_encode(['inline_keyboard'=>[
[['text'=>"$dok1",'callback_data'=>"sete-DOK1_$dok"],
['text'=>"$dok2",'callback_data'=>"sete-DOK2_$dok"]],
[['text'=>"$dok3",'callback_data'=>"sete-DOK3_$dok"],
['text'=>"$dok5",'callback_data'=>"sete-DOK5_$dok"]],
[['text'=>"$dok6",'callback_data'=>"sete-DOK6_$dok"]],
[['text'=>"🔰خالی🔰",'callback_data'=>"del-$dok"]],
]]);
Editmessagetext($chatID, $msg_id,"👈️ گزینه مورد نظر را انتخاب نمائید.",$Button_set_dok);
saveJson("melat/$userID.json",$user);
}
//////////------------------------\\\\\\\\\\\\\\//
elseif(preg_match('/^sete-(.*)_(.*)/', $data, $match)){
$name = $match[1];
$doke = $match[2];
Save("keyboard/home/$doke.txt",$name);
//////////------------------------\\\\\\\\\\\\\\///
if(file_exists("keyboard/home/line11.txt")){
$line1_1 = file_get_contents("keyboard/home/line11.txt");
if($line1_1 != null ){
$line1_1 = str_replace('DOK1',$dok1,$line1_1);
$line1_1 = str_replace('DOK2',$dok2,$line1_1);
$line1_1 = str_replace('DOK3',$dok3,$line1_1);
$line1_1 = str_replace('DOK4',$dok4,$line1_1);
$line1_1 = str_replace('DOK5',$dok5,$line1_1);
$line1_1 = str_replace('DOK6',$dok6,$line1_1);
$line1_1 = str_replace('DOK9',$dok9,$line1_1);
}else{
$line1_1 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line12.txt")){
$line1_2 = file_get_contents("keyboard/home/line12.txt");
if($line1_2 != null ){
$line1_2 = str_replace('DOK1',$dok1,$line1_2);
$line1_2 = str_replace('DOK2',$dok2,$line1_2);
$line1_2 = str_replace('DOK3',$dok3,$line1_2);
$line1_2 = str_replace('DOK4',$dok4,$line1_2);
$line1_2 = str_replace('DOK5',$dok5,$line1_2);
$line1_2 = str_replace('DOK6',$dok6,$line1_2);
$line1_2 = str_replace('DOK9',$dok9,$line1_2);
}else{
$line1_2 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line13.txt")){
$line1_3 = file_get_contents("keyboard/home/line13.txt");
if($line1_3 != null ){
$line1_3 = str_replace('DOK1',$dok1,$line1_3);
$line1_3 = str_replace('DOK2',$dok2,$line1_3);
$line1_3 = str_replace('DOK3',$dok3,$line1_3);
$line1_3 = str_replace('DOK4',$dok4,$line1_3);
$line1_3 = str_replace('DOK5',$dok5,$line1_3);
$line1_3 = str_replace('DOK6',$dok6,$line1_3);
$line1_3 = str_replace('DOK9',$dok9,$line1_3);
}else{
$line1_3 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line14.txt")){
$line1_4 = file_get_contents("keyboard/home/line14.txt");
if($line1_4 != null ){
$line1_4 = str_replace('DOK1',$dok1,$line1_4);
$line1_4 = str_replace('DOK2',$dok2,$line1_4);
$line1_4 = str_replace('DOK3',$dok3,$line1_4);
$line1_4 = str_replace('DOK4',$dok4,$line1_4);
$line1_4 = str_replace('DOK5',$dok5,$line1_4);
$line1_4 = str_replace('DOK6',$dok6,$line1_4);
$line1_4 = str_replace('DOK9',$dok9,$line1_4);
}else{
$line1_4 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line21.txt")){
$line2_1 = file_get_contents("keyboard/home/line21.txt");
if($line2_1 != null ){
$line2_1 = str_replace('DOK1',$dok1,$line2_1);
$line2_1 = str_replace('DOK2',$dok2,$line2_1);
$line2_1 = str_replace('DOK3',$dok3,$line2_1);
$line2_1 = str_replace('DOK4',$dok4,$line2_1);
$line2_1 = str_replace('DOK5',$dok5,$line2_1);
$line2_1 = str_replace('DOK6',$dok6,$line2_1);
$line2_1 = str_replace('DOK9',$dok9,$line2_1);
}else{
$line2_1 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line22.txt")){
$line2_2 = file_get_contents("keyboard/home/line22.txt");
if($line2_2 != null ){
$line2_2 = str_replace('DOK1',$dok1,$line2_2);
$line2_2 = str_replace('DOK2',$dok2,$line2_2);
$line2_2 = str_replace('DOK3',$dok3,$line2_2);
$line2_2 = str_replace('DOK4',$dok4,$line2_2);
$line2_2 = str_replace('DOK5',$dok5,$line2_2);
$line2_2 = str_replace('DOK6',$dok6,$line2_2);
$line2_2 = str_replace('DOK9',$dok9,$line2_2);
}else{
$line2_2 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line23.txt")){
$line2_3 = file_get_contents("keyboard/home/line23.txt");
if($line2_3 != null ){
$line2_3 = str_replace('DOK1',$dok1,$line2_3);
$line2_3 = str_replace('DOK2',$dok2,$line2_3);
$line2_3 = str_replace('DOK3',$dok3,$line2_3);
$line2_3 = str_replace('DOK4',$dok4,$line2_3);
$line2_3 = str_replace('DOK5',$dok5,$line2_3);
$line2_3 = str_replace('DOK6',$dok6,$line2_3);
$line2_3 = str_replace('DOK9',$dok9,$line2_3);
}else{
$line2_3 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line24.txt")){
$line2_4 = file_get_contents("keyboard/home/line24.txt");
if($line2_4 != null ){
$line2_4 = str_replace('DOK1',$dok1,$line2_4);
$line2_4 = str_replace('DOK2',$dok2,$line2_4);
$line2_4 = str_replace('DOK3',$dok3,$line2_4);
$line2_4 = str_replace('DOK4',$dok4,$line2_4);
$line2_4 = str_replace('DOK5',$dok5,$line2_4);
$line2_4 = str_replace('DOK6',$dok6,$line2_4);
$line2_4 = str_replace('DOK9',$dok9,$line2_4);
}else{
$line2_4 = "➕";
}}

//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line31.txt")){
$line3_1 = file_get_contents("keyboard/home/line31.txt");
if($line3_1 != null ){
$line3_1 = str_replace('DOK1',$dok1,$line3_1);
$line3_1 = str_replace('DOK2',$dok2,$line3_1);
$line3_1 = str_replace('DOK3',$dok3,$line3_1);
$line3_1 = str_replace('DOK4',$dok4,$line3_1);
$line3_1 = str_replace('DOK5',$dok5,$line3_1);
$line3_1 = str_replace('DOK6',$dok6,$line3_1);
$line3_1 = str_replace('DOK9',$dok9,$line3_1);
}else{
$line3_1 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line32.txt")){
$line3_2 = file_get_contents("keyboard/home/line32.txt");
if($line3_2 != null ){
$line3_2 = str_replace('DOK1',$dok1,$line3_2);
$line3_2 = str_replace('DOK2',$dok2,$line3_2);
$line3_2 = str_replace('DOK3',$dok3,$line3_2);
$line3_2 = str_replace('DOK4',$dok4,$line3_2);
$line3_2 = str_replace('DOK5',$dok5,$line3_2);
$line3_2 = str_replace('DOK6',$dok6,$line3_2);
$line3_2 = str_replace('DOK9',$dok9,$line3_2);
}else{
$line3_2 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line33.txt")){
$line3_3 = file_get_contents("keyboard/home/line33.txt");
if($line3_3 != null ){
$line3_3 = str_replace('DOK1',$dok1,$line3_3);
$line3_3 = str_replace('DOK2',$dok2,$line3_3);
$line3_3 = str_replace('DOK3',$dok3,$line3_3);
$line3_3 = str_replace('DOK4',$dok4,$line3_3);
$line3_3 = str_replace('DOK5',$dok5,$line3_3);
$line3_3 = str_replace('DOK6',$dok6,$line3_3);
$line3_3 = str_replace('DOK9',$dok9,$line3_3);
}else{
$line3_3 = "➕";
}}//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line34.txt")){
$line3_4 = file_get_contents("keyboard/home/line34.txt");
if($line3_4 != null ){
$line3_4 = str_replace('DOK1',$dok1,$line3_4);
$line3_4 = str_replace('DOK2',$dok2,$line3_4);
$line3_4 = str_replace('DOK3',$dok3,$line3_4);
$line3_4 = str_replace('DOK4',$dok4,$line3_4);
$line3_4 = str_replace('DOK5',$dok5,$line3_4);
$line3_4 = str_replace('DOK6',$dok6,$line3_4);
$line3_4 = str_replace('DOK9',$dok9,$line3_4);
}else{
$line3_4 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line41.txt")){
$line4_1 = file_get_contents("keyboard/home/line41.txt");
if($line4_1 != null ){
$line4_1 = str_replace('DOK1',$dok1,$line4_1);
$line4_1 = str_replace('DOK2',$dok2,$line4_1);
$line4_1 = str_replace('DOK3',$dok3,$line4_1);
$line4_1 = str_replace('DOK4',$dok4,$line4_1);
$line4_1 = str_replace('DOK5',$dok5,$line4_1);
$line4_1 = str_replace('DOK6',$dok6,$line4_1);
$line4_1 = str_replace('DOK9',$dok9,$line4_1);
}else{
$line4_1 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line42.txt")){
$line4_2 = file_get_contents("keyboard/home/line42.txt");
if($line4_2 != null ){
$line4_2 = str_replace('DOK1',$dok1,$line4_2);
$line4_2 = str_replace('DOK2',$dok2,$line4_2);
$line4_2 = str_replace('DOK3',$dok3,$line4_2);
$line4_2 = str_replace('DOK4',$dok4,$line4_2);
$line4_2 = str_replace('DOK5',$dok5,$line4_2);
$line4_2 = str_replace('DOK6',$dok6,$line4_2);
$line4_2 = str_replace('DOK9',$dok9,$line4_2);
}else{
$line4_2 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line43.txt")){
$line4_3 = file_get_contents("keyboard/home/line43.txt");
if($line4_3 != null ){
$line4_3 = str_replace('DOK1',$dok1,$line4_3);
$line4_3 = str_replace('DOK2',$dok2,$line4_3);
$line4_3 = str_replace('DOK3',$dok3,$line4_3);
$line4_3 = str_replace('DOK4',$dok4,$line4_3);
$line4_3 = str_replace('DOK5',$dok5,$line4_3);
$line4_3 = str_replace('DOK6',$dok6,$line4_3);
$line4_3 = str_replace('DOK9',$dok9,$line4_3);
}else{
$line4_3 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line44.txt")){
$line4_4 = file_get_contents("keyboard/home/line44.txt");
if($line4_4 != null ){
$line4_4 = str_replace('DOK1',$dok1,$line4_4);
$line4_4 = str_replace('DOK2',$dok2,$line4_4);
$line4_4 = str_replace('DOK3',$dok3,$line4_4);
$line4_4 = str_replace('DOK4',$dok4,$line4_4);
$line4_4 = str_replace('DOK5',$dok5,$line4_4);
$line4_4 = str_replace('DOK6',$dok6,$line4_4);
$line4_4 = str_replace('DOK9',$dok9,$line4_4);
}else{
$line4_4 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line51.txt")){
$line5_1 = file_get_contents("keyboard/home/line51.txt");
if($line5_1 != null ){
$line5_1 = str_replace('DOK1',$dok1,$line5_1);
$line5_1 = str_replace('DOK2',$dok2,$line5_1);
$line5_1 = str_replace('DOK3',$dok3,$line5_1);
$line5_1 = str_replace('DOK4',$dok4,$line5_1);
$line5_1 = str_replace('DOK5',$dok5,$line5_1);
$line5_1 = str_replace('DOK6',$dok6,$line5_1);
$line5_1 = str_replace('DOK9',$dok9,$line5_1);
}else{
$line5_1 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line52.txt")){
$line5_2 = file_get_contents("keyboard/home/line52.txt");
if($line5_2 != null ){
$line5_2 = str_replace('DOK1',$dok1,$line5_2);
$line5_2 = str_replace('DOK2',$dok2,$line5_2);
$line5_2 = str_replace('DOK3',$dok3,$line5_2);
$line5_2 = str_replace('DOK4',$dok4,$line5_2);
$line5_2 = str_replace('DOK5',$dok5,$line5_2);
$line5_2 = str_replace('DOK6',$dok6,$line5_2);
$line5_2 = str_replace('DOK9',$dok9,$line5_2);
}else{
$line5_2 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line53.txt")){
$line5_3 = file_get_contents("keyboard/home/line53.txt");
if($line5_3 != null ){
$line5_3 = str_replace('DOK1',$dok1,$line5_3);
$line5_3 = str_replace('DOK2',$dok2,$line5_3);
$line5_3 = str_replace('DOK3',$dok3,$line5_3);
$line5_3 = str_replace('DOK4',$dok4,$line5_3);
$line5_3 = str_replace('DOK5',$dok5,$line5_3);
$line5_3 = str_replace('DOK6',$dok6,$line5_3);
$line5_3 = str_replace('DOK9',$dok9,$line5_3);
}else{
$line5_3 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line55.txt")){
$line5_5 = file_get_contents("keyboard/home/line55.txt");
if($line5_5 != null ){
$line5_5 = str_replace('DOK1',$dok1,$line5_5);
$line5_5 = str_replace('DOK2',$dok2,$line5_5);
$line5_5 = str_replace('DOK3',$dok3,$line5_5);
$line5_5 = str_replace('DOK4',$dok4,$line5_5);
$line5_5 = str_replace('DOK5',$dok5,$line5_5);
$line5_5 = str_replace('DOK6',$dok6,$line5_5);
$line5_5 = str_replace('DOK9',$dok9,$line5_5);
}else{
$line5_5 = "➕";
}}
$Button_sete = json_encode(['inline_keyboard'=>[
[['text'=>"$line1_1",'callback_data'=>'set-line11'],
['text'=>"$line1_2",'callback_data'=>'set-line12'],
['text'=>"$line1_3",'callback_data'=>'set-line13'],
['text'=>"$line1_4",'callback_data'=>'set-line14']],
[['text'=>"$line2_1",'callback_data'=>'set-line21'],
['text'=>"$line2_2",'callback_data'=>'set-line22'],
['text'=>"$line2_3",'callback_data'=>'set-line23'],
['text'=>"$line2_4",'callback_data'=>'set-line24']],
[['text'=>"$line3_1",'callback_data'=>'set-line31'],
['text'=>"$line3_2",'callback_data'=>'set-line32'],
['text'=>"$line3_3",'callback_data'=>'set-line33'],
['text'=>"$line3_4",'callback_data'=>'set-line34']],
[['text'=>"$line4_1",'callback_data'=>'set-line41'],
['text'=>"$line4_2",'callback_data'=>'set-line42'],
['text'=>"$line4_3",'callback_data'=>'set-line43'],
['text'=>"$line4_4",'callback_data'=>'set-line44']],
[['text'=>"$line5_1",'callback_data'=>'set-line51'],
['text'=>"$line5_2",'callback_data'=>'set-line52'],
['text'=>"$line5_3",'callback_data'=>'set-line53'],
['text'=>"$line5_4",'callback_data'=>'set-line54']],
]]);
Editmessagetext($chatID, $msg_id,"👈️ گزینه مورد نظر را انتخاب نمائید.",$Button_sete);
}
elseif(preg_match('/^del-(.*)/', $data, $match)){
$doke = $match[1];
Save("keyboard/home/$doke.txt",null);
//////////------------------------\\\\\\\\\\\\\\///
if(file_exists("keyboard/home/line11.txt")){
$line1_1 = file_get_contents("keyboard/home/line11.txt");
if($line1_1 != null ){
$line1_1 = str_replace('DOK1',$dok1,$line1_1);
$line1_1 = str_replace('DOK2',$dok2,$line1_1);
$line1_1 = str_replace('DOK3',$dok3,$line1_1);
$line1_1 = str_replace('DOK4',$dok4,$line1_1);
$line1_1 = str_replace('DOK5',$dok5,$line1_1);
$line1_1 = str_replace('DOK6',$dok6,$line1_1);
$line1_1 = str_replace('DOK9',$dok9,$line1_1);
}else{
$line1_1 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line12.txt")){
$line1_2 = file_get_contents("keyboard/home/line12.txt");
if($line1_2 != null ){
$line1_2 = str_replace('DOK1',$dok1,$line1_2);
$line1_2 = str_replace('DOK2',$dok2,$line1_2);
$line1_2 = str_replace('DOK3',$dok3,$line1_2);
$line1_2 = str_replace('DOK4',$dok4,$line1_2);
$line1_2 = str_replace('DOK5',$dok5,$line1_2);
$line1_2 = str_replace('DOK6',$dok6,$line1_2);
$line1_2 = str_replace('DOK9',$dok9,$line1_2);
}else{
$line1_2 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line13.txt")){
$line1_3 = file_get_contents("keyboard/home/line13.txt");
if($line1_3 != null ){
$line1_3 = str_replace('DOK1',$dok1,$line1_3);
$line1_3 = str_replace('DOK2',$dok2,$line1_3);
$line1_3 = str_replace('DOK3',$dok3,$line1_3);
$line1_3 = str_replace('DOK4',$dok4,$line1_3);
$line1_3 = str_replace('DOK5',$dok5,$line1_3);
$line1_3 = str_replace('DOK6',$dok6,$line1_3);
$line1_3 = str_replace('DOK9',$dok9,$line1_3);
}else{
$line1_3 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line14.txt")){
$line1_4 = file_get_contents("keyboard/home/line14.txt");
if($line1_4 != null ){
$line1_4 = str_replace('DOK1',$dok1,$line1_4);
$line1_4 = str_replace('DOK2',$dok2,$line1_4);
$line1_4 = str_replace('DOK3',$dok3,$line1_4);
$line1_4 = str_replace('DOK4',$dok4,$line1_4);
$line1_4 = str_replace('DOK5',$dok5,$line1_4);
$line1_4 = str_replace('DOK6',$dok6,$line1_4);
$line1_4 = str_replace('DOK9',$dok9,$line1_4);
}else{
$line1_4 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line21.txt")){
$line2_1 = file_get_contents("keyboard/home/line21.txt");
if($line2_1 != null ){
$line2_1 = str_replace('DOK1',$dok1,$line2_1);
$line2_1 = str_replace('DOK2',$dok2,$line2_1);
$line2_1 = str_replace('DOK3',$dok3,$line2_1);
$line2_1 = str_replace('DOK4',$dok4,$line2_1);
$line2_1 = str_replace('DOK5',$dok5,$line2_1);
$line2_1 = str_replace('DOK6',$dok6,$line2_1);
$line2_1 = str_replace('DOK9',$dok9,$line2_1);
}else{
$line2_1 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line22.txt")){
$line2_2 = file_get_contents("keyboard/home/line22.txt");
if($line2_2 != null ){
$line2_2 = str_replace('DOK1',$dok1,$line2_2);
$line2_2 = str_replace('DOK2',$dok2,$line2_2);
$line2_2 = str_replace('DOK3',$dok3,$line2_2);
$line2_2 = str_replace('DOK4',$dok4,$line2_2);
$line2_2 = str_replace('DOK5',$dok5,$line2_2);
$line2_2 = str_replace('DOK6',$dok6,$line2_2);
$line2_2 = str_replace('DOK9',$dok9,$line2_2);
}else{
$line2_2 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line23.txt")){
$line2_3 = file_get_contents("keyboard/home/line23.txt");
if($line2_3 != null ){
$line2_3 = str_replace('DOK1',$dok1,$line2_3);
$line2_3 = str_replace('DOK2',$dok2,$line2_3);
$line2_3 = str_replace('DOK3',$dok3,$line2_3);
$line2_3 = str_replace('DOK4',$dok4,$line2_3);
$line2_3 = str_replace('DOK5',$dok5,$line2_3);
$line2_3 = str_replace('DOK6',$dok6,$line2_3);
$line2_3 = str_replace('DOK9',$dok9,$line2_3);
}else{
$line2_3 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line24.txt")){
$line2_4 = file_get_contents("keyboard/home/line24.txt");
if($line2_4 != null ){
$line2_4 = str_replace('DOK1',$dok1,$line2_4);
$line2_4 = str_replace('DOK2',$dok2,$line2_4);
$line2_4 = str_replace('DOK3',$dok3,$line2_4);
$line2_4 = str_replace('DOK4',$dok4,$line2_4);
$line2_4 = str_replace('DOK5',$dok5,$line2_4);
$line2_4 = str_replace('DOK6',$dok6,$line2_4);
$line2_4 = str_replace('DOK9',$dok9,$line2_4);
}else{
$line2_4 = "➕";
}}

//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line31.txt")){
$line3_1 = file_get_contents("keyboard/home/line31.txt");
if($line3_1 != null ){
$line3_1 = str_replace('DOK1',$dok1,$line3_1);
$line3_1 = str_replace('DOK2',$dok2,$line3_1);
$line3_1 = str_replace('DOK3',$dok3,$line3_1);
$line3_1 = str_replace('DOK4',$dok4,$line3_1);
$line3_1 = str_replace('DOK5',$dok5,$line3_1);
$line3_1 = str_replace('DOK6',$dok6,$line3_1);
$line3_1 = str_replace('DOK9',$dok9,$line3_1);
}else{
$line3_1 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line32.txt")){
$line3_2 = file_get_contents("keyboard/home/line32.txt");
if($line3_2 != null ){
$line3_2 = str_replace('DOK1',$dok1,$line3_2);
$line3_2 = str_replace('DOK2',$dok2,$line3_2);
$line3_2 = str_replace('DOK3',$dok3,$line3_2);
$line3_2 = str_replace('DOK4',$dok4,$line3_2);
$line3_2 = str_replace('DOK5',$dok5,$line3_2);
$line3_2 = str_replace('DOK6',$dok6,$line3_2);
$line3_2 = str_replace('DOK9',$dok9,$line3_2);
}else{
$line3_2 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line33.txt")){
$line3_3 = file_get_contents("keyboard/home/line33.txt");
if($line3_3 != null ){
$line3_3 = str_replace('DOK1',$dok1,$line3_3);
$line3_3 = str_replace('DOK2',$dok2,$line3_3);
$line3_3 = str_replace('DOK3',$dok3,$line3_3);
$line3_3 = str_replace('DOK4',$dok4,$line3_3);
$line3_3 = str_replace('DOK5',$dok5,$line3_3);
$line3_3 = str_replace('DOK6',$dok6,$line3_3);
$line3_3 = str_replace('DOK9',$dok9,$line3_3);
}else{
$line3_3 = "➕";
}}//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line34.txt")){
$line3_4 = file_get_contents("keyboard/home/line34.txt");
if($line3_4 != null ){
$line3_4 = str_replace('DOK1',$dok1,$line3_4);
$line3_4 = str_replace('DOK2',$dok2,$line3_4);
$line3_4 = str_replace('DOK3',$dok3,$line3_4);
$line3_4 = str_replace('DOK4',$dok4,$line3_4);
$line3_4 = str_replace('DOK5',$dok5,$line3_4);
$line3_4 = str_replace('DOK6',$dok6,$line3_4);
$line3_4 = str_replace('DOK9',$dok9,$line3_4);
}else{
$line3_4 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line41.txt")){
$line4_1 = file_get_contents("keyboard/home/line41.txt");
if($line4_1 != null ){
$line4_1 = str_replace('DOK1',$dok1,$line4_1);
$line4_1 = str_replace('DOK2',$dok2,$line4_1);
$line4_1 = str_replace('DOK3',$dok3,$line4_1);
$line4_1 = str_replace('DOK4',$dok4,$line4_1);
$line4_1 = str_replace('DOK5',$dok5,$line4_1);
$line4_1 = str_replace('DOK6',$dok6,$line4_1);
$line4_1 = str_replace('DOK9',$dok9,$line4_1);
}else{
$line4_1 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line42.txt")){
$line4_2 = file_get_contents("keyboard/home/line42.txt");
if($line4_2 != null ){
$line4_2 = str_replace('DOK1',$dok1,$line4_2);
$line4_2 = str_replace('DOK2',$dok2,$line4_2);
$line4_2 = str_replace('DOK3',$dok3,$line4_2);
$line4_2 = str_replace('DOK4',$dok4,$line4_2);
$line4_2 = str_replace('DOK5',$dok5,$line4_2);
$line4_2 = str_replace('DOK6',$dok6,$line4_2);
$line4_2 = str_replace('DOK9',$dok9,$line4_2);
}else{
$line4_2 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line43.txt")){
$line4_3 = file_get_contents("keyboard/home/line43.txt");
if($line4_3 != null ){
$line4_3 = str_replace('DOK1',$dok1,$line4_3);
$line4_3 = str_replace('DOK2',$dok2,$line4_3);
$line4_3 = str_replace('DOK3',$dok3,$line4_3);
$line4_3 = str_replace('DOK4',$dok4,$line4_3);
$line4_3 = str_replace('DOK5',$dok5,$line4_3);
$line4_3 = str_replace('DOK6',$dok6,$line4_3);
$line4_3 = str_replace('DOK9',$dok9,$line4_3);
}else{
$line4_3 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line44.txt")){
$line4_4 = file_get_contents("keyboard/home/line44.txt");
if($line4_4 != null ){
$line4_4 = str_replace('DOK1',$dok1,$line4_4);
$line4_4 = str_replace('DOK2',$dok2,$line4_4);
$line4_4 = str_replace('DOK3',$dok3,$line4_4);
$line4_4 = str_replace('DOK4',$dok4,$line4_4);
$line4_4 = str_replace('DOK5',$dok5,$line4_4);
$line4_4 = str_replace('DOK6',$dok6,$line4_4);
$line4_4 = str_replace('DOK9',$dok9,$line4_4);
}else{
$line4_4 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line51.txt")){
$line5_1 = file_get_contents("keyboard/home/line51.txt");
if($line5_1 != null ){
$line5_1 = str_replace('DOK1',$dok1,$line5_1);
$line5_1 = str_replace('DOK2',$dok2,$line5_1);
$line5_1 = str_replace('DOK3',$dok3,$line5_1);
$line5_1 = str_replace('DOK4',$dok4,$line5_1);
$line5_1 = str_replace('DOK5',$dok5,$line5_1);
$line5_1 = str_replace('DOK6',$dok6,$line5_1);
$line5_1 = str_replace('DOK9',$dok9,$line5_1);
}else{
$line5_1 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line52.txt")){
$line5_2 = file_get_contents("keyboard/home/line52.txt");
if($line5_2 != null ){
$line5_2 = str_replace('DOK1',$dok1,$line5_2);
$line5_2 = str_replace('DOK2',$dok2,$line5_2);
$line5_2 = str_replace('DOK3',$dok3,$line5_2);
$line5_2 = str_replace('DOK4',$dok4,$line5_2);
$line5_2 = str_replace('DOK5',$dok5,$line5_2);
$line5_2 = str_replace('DOK6',$dok6,$line5_2);
$line5_2 = str_replace('DOK9',$dok9,$line5_2);
}else{
$line5_2 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line53.txt")){
$line5_3 = file_get_contents("keyboard/home/line53.txt");
if($line5_3 != null ){
$line5_3 = str_replace('DOK1',$dok1,$line5_3);
$line5_3 = str_replace('DOK2',$dok2,$line5_3);
$line5_3 = str_replace('DOK3',$dok3,$line5_3);
$line5_3 = str_replace('DOK4',$dok4,$line5_3);
$line5_3 = str_replace('DOK5',$dok5,$line5_3);
$line5_3 = str_replace('DOK6',$dok6,$line5_3);
$line5_3 = str_replace('DOK9',$dok9,$line5_3);
}else{
$line5_3 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/home/line55.txt")){
$line5_5 = file_get_contents("keyboard/home/line55.txt");
if($line5_5 != null ){
$line5_5 = str_replace('DOK1',$dok1,$line5_5);
$line5_5 = str_replace('DOK2',$dok2,$line5_5);
$line5_5 = str_replace('DOK3',$dok3,$line5_5);
$line5_5 = str_replace('DOK4',$dok4,$line5_5);
$line5_5 = str_replace('DOK5',$dok5,$line5_5);
$line5_5 = str_replace('DOK6',$dok6,$line5_5);
$line5_5 = str_replace('DOK9',$dok9,$line5_5);
}else{
$line5_5 = "➕";
}}
$Button_sete = json_encode(['inline_keyboard'=>[
[['text'=>"$line1_1",'callback_data'=>'set-line11'],
['text'=>"$line1_2",'callback_data'=>'set-line12'],
['text'=>"$line1_3",'callback_data'=>'set-line13'],
['text'=>"$line1_4",'callback_data'=>'set-line14']],
[['text'=>"$line2_1",'callback_data'=>'set-line21'],
['text'=>"$line2_2",'callback_data'=>'set-line22'],
['text'=>"$line2_3",'callback_data'=>'set-line23'],
['text'=>"$line2_4",'callback_data'=>'set-line24']],
[['text'=>"$line3_1",'callback_data'=>'set-line31'],
['text'=>"$line3_2",'callback_data'=>'set-line32'],
['text'=>"$line3_3",'callback_data'=>'set-line33'],
['text'=>"$line3_4",'callback_data'=>'set-line34']],
[['text'=>"$line4_1",'callback_data'=>'set-line41'],
['text'=>"$line4_2",'callback_data'=>'set-line42'],
['text'=>"$line4_3",'callback_data'=>'set-line43'],
['text'=>"$line4_4",'callback_data'=>'set-line44']],
[['text'=>"$line5_1",'callback_data'=>'set-line51'],
['text'=>"$line5_2",'callback_data'=>'set-line52'],
['text'=>"$line5_3",'callback_data'=>'set-line53'],
['text'=>"$line5_4",'callback_data'=>'set-line54']],
]]);
Editmessagetext($chatID, $msg_id,"👈️ گزینه مورد نظر را انتخاب نمائید.",$Button_sete);
}
//////////------------------------\\\\\\\\\\\\\\//

//////////------------------------\\\\\\\\\\\\\\///
else if($msg == '📍 ساخت رسید' and $Tc = 'private'){
//////////------------------------\\\\\\\\\\\\\\/
//////////////////////////////////////////////////////////////////////////////
if(file_exists("keyboard/create/linee11.txt")){
$linee1_1 = file_get_contents("keyboard/create/linee11.txt");
if($linee1_1 != null ){
$linee1_1 = str_replace('1',$dokk1,$linee1_1);
$linee1_1 = str_replace('2',$dokk2,$linee1_1);
$linee1_1 = str_replace('3',$dokk3,$linee1_1);
$linee1_1 = str_replace('q',$dokk4,$linee1_1);
$linee1_1 = str_replace('w',$dokk5,$linee1_1);
$linee1_1 = str_replace('e',$dokk6,$linee1_1);
$linee1_1 = str_replace('r',$dokk7,$linee1_1);
$linee1_1 = str_replace('t',$dokk8,$linee1_1);
$linee1_1 = str_replace('y',$dokk9,$linee1_1);
$linee1_1 = str_replace('u',$dokk10,$linee1_1);
$linee1_1 = str_replace('i',$dokk11,$linee1_1);
$linee1_1 = str_replace('o',$dokk12,$linee1_1);
$linee1_1 = str_replace('p',$dokk13,$linee1_1);
$linee1_1 = str_replace('a',$dokk14,$linee1_1);
$linee1_1 = str_replace('s',$dokk15,$linee1_1);
$linee1_1 = str_replace('d',$dokk16,$linee1_1);
$linee1_1 = str_replace('f',$dokk17,$linee1_1);
$linee1_1 = str_replace('g',$dokk18,$linee1_1);
$linee1_1 = str_replace('h',$dokk19,$linee1_1);
$linee1_1 = str_replace('j',$dokk20,$linee1_1);
$linee1_1 = str_replace('k',$dokk21,$linee1_1);
$linee1_1 = str_replace('l',$dokk22,$linee1_1);
$linee1_1 = str_replace('z',$dokk23,$linee1_1);
$linee1_1 = str_replace('x',$dokk24,$linee1_1);
$linee1_1 = str_replace('c',$dokk25,$linee1_1);
$linee1_1 = str_replace('v',$dokk26,$linee1_1);
$linee1_1 = str_replace('b',$dokk27,$linee1_1);
$linee1_1 = str_replace('n',$dokk28,$linee1_1);
$linee1_1 = str_replace('m',$dokk29,$linee1_1);
$linee1_1 = str_replace('*',$dokk30,$linee1_1);
}else{
$linee1_1 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee12.txt")){
$linee1_2 = file_get_contents("keyboard/create/linee12.txt");
if($linee1_2 != null ){
$linee1_2 = str_replace('1',$dokk1,$linee1_2);
$linee1_2 = str_replace('2',$dokk2,$linee1_2);
$linee1_2 = str_replace('3',$dokk3,$linee1_2);
$linee1_2 = str_replace('q',$dokk4,$linee1_2);
$linee1_2 = str_replace('w',$dokk5,$linee1_2);
$linee1_2 = str_replace('e',$dokk6,$linee1_2);
$linee1_2 = str_replace('r',$dokk7,$linee1_2);
$linee1_2 = str_replace('t',$dokk8,$linee1_2);
$linee1_2 = str_replace('y',$dokk9,$linee1_2);
$linee1_2 = str_replace('u',$dokk10,$linee1_2);
$linee1_2 = str_replace('i',$dokk11,$linee1_2);
$linee1_2 = str_replace('o',$dokk12,$linee1_2);
$linee1_2 = str_replace('p',$dokk13,$linee1_2);
$linee1_2 = str_replace('a',$dokk14,$linee1_2);
$linee1_2 = str_replace('s',$dokk15,$linee1_2);
$linee1_2 = str_replace('d',$dokk16,$linee1_2);
$linee1_2 = str_replace('f',$dokk17,$linee1_2);
$linee1_2 = str_replace('g',$dokk18,$linee1_2);
$linee1_2 = str_replace('h',$dokk19,$linee1_2);
$linee1_2 = str_replace('j',$dokk20,$linee1_2);
$linee1_2 = str_replace('k',$dokk21,$linee1_2);
$linee1_2 = str_replace('l',$dokk22,$linee1_2);
$linee1_2 = str_replace('z',$dokk23,$linee1_2);
$linee1_2 = str_replace('x',$dokk24,$linee1_2);
$linee1_2 = str_replace('c',$dokk25,$linee1_2);
$linee1_2 = str_replace('v',$dokk26,$linee1_2);
$linee1_2 = str_replace('b',$dokk27,$linee1_2);
$linee1_2 = str_replace('n',$dokk28,$linee1_2);
$linee1_2 = str_replace('m',$dokk29,$linee1_2);
$linee1_2 = str_replace('*',$dokk30,$linee1_2);
}else{
$linee1_2 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee13.txt")){
$linee1_3 = file_get_contents("keyboard/create/linee13.txt");
if($linee1_3 != null ){
$linee1_3 = str_replace('1',$dokk1,$linee1_3);
$linee1_3 = str_replace('2',$dokk2,$linee1_3);
$linee1_3 = str_replace('3',$dokk3,$linee1_3);
$linee1_3 = str_replace('q',$dokk4,$linee1_3);
$linee1_3 = str_replace('w',$dokk5,$linee1_3);
$linee1_3 = str_replace('e',$dokk6,$linee1_3);
$linee1_3 = str_replace('r',$dokk7,$linee1_3);
$linee1_3 = str_replace('t',$dokk8,$linee1_3);
$linee1_3 = str_replace('y',$dokk9,$linee1_3);
$linee1_3 = str_replace('u',$dokk10,$linee1_3);
$linee1_3 = str_replace('i',$dokk11,$linee1_3);
$linee1_3 = str_replace('o',$dokk12,$linee1_3);
$linee1_3 = str_replace('p',$dokk13,$linee1_3);
$linee1_3 = str_replace('a',$dokk14,$linee1_3);
$linee1_3 = str_replace('s',$dokk15,$linee1_3);
$linee1_3 = str_replace('d',$dokk16,$linee1_3);
$linee1_3 = str_replace('f',$dokk17,$linee1_3);
$linee1_3 = str_replace('g',$dokk18,$linee1_3);
$linee1_3 = str_replace('h',$dokk19,$linee1_3);
$linee1_3 = str_replace('j',$dokk20,$linee1_3);
$linee1_3 = str_replace('k',$dokk21,$linee1_3);
$linee1_3 = str_replace('l',$dokk22,$linee1_3);
$linee1_3 = str_replace('z',$dokk23,$linee1_3);
$linee1_3 = str_replace('x',$dokk24,$linee1_3);
$linee1_3 = str_replace('c',$dokk25,$linee1_3);
$linee1_3 = str_replace('v',$dokk26,$linee1_3);
$linee1_3 = str_replace('b',$dokk27,$linee1_3);
$linee1_3 = str_replace('n',$dokk28,$linee1_3);
$linee1_3 = str_replace('m',$dokk29,$linee1_3);
$linee1_3 = str_replace('*',$dokk30,$linee1_3);
}else{
$linee1_3 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee14.txt")){
$linee1_4 = file_get_contents("keyboard/create/linee14.txt");
if($linee1_4 != null ){
$linee1_4 = str_replace('1',$dokk1,$linee1_4);
$linee1_4 = str_replace('2',$dokk2,$linee1_4);
$linee1_4 = str_replace('3',$dokk3,$linee1_4);
$linee1_4 = str_replace('q',$dokk4,$linee1_4);
$linee1_4 = str_replace('w',$dokk5,$linee1_4);
$linee1_4 = str_replace('e',$dokk6,$linee1_4);
$linee1_4 = str_replace('r',$dokk7,$linee1_4);
$linee1_4 = str_replace('t',$dokk8,$linee1_4);
$linee1_4 = str_replace('y',$dokk9,$linee1_4);
$linee1_4 = str_replace('u',$dokk10,$linee1_4);
$linee1_4 = str_replace('i',$dokk11,$linee1_4);
$linee1_4 = str_replace('o',$dokk12,$linee1_4);
$linee1_4 = str_replace('p',$dokk13,$linee1_4);
$linee1_4 = str_replace('a',$dokk14,$linee1_4);
$linee1_4 = str_replace('s',$dokk15,$linee1_4);
$linee1_4 = str_replace('d',$dokk16,$linee1_4);
$linee1_4 = str_replace('f',$dokk17,$linee1_4);
$linee1_4 = str_replace('g',$dokk18,$linee1_4);
$linee1_4 = str_replace('h',$dokk19,$linee1_4);
$linee1_4 = str_replace('j',$dokk20,$linee1_4);
$linee1_4 = str_replace('k',$dokk21,$linee1_4);
$linee1_4 = str_replace('l',$dokk22,$linee1_4);
$linee1_4 = str_replace('z',$dokk23,$linee1_4);
$linee1_4 = str_replace('x',$dokk24,$linee1_4);
$linee1_4 = str_replace('c',$dokk25,$linee1_4);
$linee1_4 = str_replace('v',$dokk26,$linee1_4);
$linee1_4 = str_replace('b',$dokk27,$linee1_4);
$linee1_4 = str_replace('n',$dokk28,$linee1_4);
$linee1_4 = str_replace('m',$dokk29,$linee1_4);
$linee1_4 = str_replace('*',$dokk30,$linee1_4);
}else{
$linee1_4 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee21.txt")){
$linee2_1 = file_get_contents("keyboard/create/linee21.txt");
if($linee2_1 != null ){
$linee2_1 = str_replace('1',$dokk1,$linee2_1);
$linee2_1 = str_replace('2',$dokk2,$linee2_1);
$linee2_1 = str_replace('3',$dokk3,$linee2_1);
$linee2_1 = str_replace('q',$dokk4,$linee2_1);
$linee2_1 = str_replace('w',$dokk5,$linee2_1);
$linee2_1 = str_replace('e',$dokk6,$linee2_1);
$linee2_1 = str_replace('r',$dokk7,$linee2_1);
$linee2_1 = str_replace('t',$dokk8,$linee2_1);
$linee2_1 = str_replace('y',$dokk9,$linee2_1);
$linee2_1 = str_replace('u',$dokk10,$linee2_1);
$linee2_1 = str_replace('i',$dokk11,$linee2_1);
$linee2_1 = str_replace('o',$dokk12,$linee2_1);
$linee2_1 = str_replace('p',$dokk13,$linee2_1);
$linee2_1 = str_replace('a',$dokk14,$linee2_1);
$linee2_1 = str_replace('s',$dokk15,$linee2_1);
$linee2_1 = str_replace('d',$dokk16,$linee2_1);
$linee2_1 = str_replace('f',$dokk17,$linee2_1);
$linee2_1 = str_replace('g',$dokk18,$linee2_1);
$linee2_1 = str_replace('h',$dokk19,$linee2_1);
$linee2_1 = str_replace('j',$dokk20,$linee2_1);
$linee2_1 = str_replace('k',$dokk21,$linee2_1);
$linee2_1 = str_replace('l',$dokk22,$linee2_1);
$linee2_1 = str_replace('z',$dokk23,$linee2_1);
$linee2_1 = str_replace('x',$dokk24,$linee2_1);
$linee2_1 = str_replace('c',$dokk25,$linee2_1);
$linee2_1 = str_replace('v',$dokk26,$linee2_1);
$linee2_1 = str_replace('b',$dokk27,$linee2_1);
$linee2_1 = str_replace('n',$dokk28,$linee2_1);
$linee2_1 = str_replace('m',$dokk29,$linee2_1);
$linee2_1 = str_replace('*',$dokk30,$linee2_1);
}else{
$linee2_1 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee22.txt")){
$linee2_2 = file_get_contents("keyboard/create/linee22.txt");
if($linee2_2 != null ){
$linee2_2 = str_replace('1',$dokk1,$linee2_2);
$linee2_2 = str_replace('2',$dokk2,$linee2_2);
$linee2_2 = str_replace('3',$dokk3,$linee2_2);
$linee2_2 = str_replace('q',$dokk4,$linee2_2);
$linee2_2 = str_replace('w',$dokk5,$linee2_2);
$linee2_2 = str_replace('e',$dokk6,$linee2_2);
$linee2_2 = str_replace('r',$dokk7,$linee2_2);
$linee2_2 = str_replace('t',$dokk8,$linee2_2);
$linee2_2 = str_replace('y',$dokk9,$linee2_2);
$linee2_2 = str_replace('u',$dokk10,$linee2_2);
$linee2_2 = str_replace('i',$dokk11,$linee2_2);
$linee2_2 = str_replace('o',$dokk12,$linee2_2);
$linee2_2 = str_replace('p',$dokk13,$linee2_2);
$linee2_2 = str_replace('a',$dokk14,$linee2_2);
$linee2_2 = str_replace('s',$dokk15,$linee2_2);
$linee2_2 = str_replace('d',$dokk16,$linee2_2);
$linee2_2 = str_replace('f',$dokk17,$linee2_2);
$linee2_2 = str_replace('g',$dokk18,$linee2_2);
$linee2_2 = str_replace('h',$dokk19,$linee2_2);
$linee2_2 = str_replace('j',$dokk20,$linee2_2);
$linee2_2 = str_replace('k',$dokk21,$linee2_2);
$linee2_2 = str_replace('l',$dokk22,$linee2_2);
$linee2_2 = str_replace('z',$dokk23,$linee2_2);
$linee2_2 = str_replace('x',$dokk24,$linee2_2);
$linee2_2 = str_replace('c',$dokk25,$linee2_2);
$linee2_2 = str_replace('v',$dokk26,$linee2_2);
$linee2_2 = str_replace('b',$dokk27,$linee2_2);
$linee2_2 = str_replace('n',$dokk28,$linee2_2);
$linee2_2 = str_replace('m',$dokk29,$linee2_2);
$linee2_2 = str_replace('*',$dokk30,$linee2_2);
}else{
$linee2_2 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee23.txt")){
$linee2_3 = file_get_contents("keyboard/create/linee23.txt");
if($linee2_3 != null ){
$linee2_3 = str_replace('1',$dokk1,$linee2_3);
$linee2_3 = str_replace('2',$dokk2,$linee2_3);
$linee2_3 = str_replace('3',$dokk3,$linee2_3);
$linee2_3 = str_replace('q',$dokk4,$linee2_3);
$linee2_3 = str_replace('w',$dokk5,$linee2_3);
$linee2_3 = str_replace('e',$dokk6,$linee2_3);
$linee2_3 = str_replace('r',$dokk7,$linee2_3);
$linee2_3 = str_replace('t',$dokk8,$linee2_3);
$linee2_3 = str_replace('y',$dokk9,$linee2_3);
$linee2_3 = str_replace('u',$dokk10,$linee2_3);
$linee2_3 = str_replace('i',$dokk11,$linee2_3);
$linee2_3 = str_replace('o',$dokk12,$linee2_3);
$linee2_3 = str_replace('p',$dokk13,$linee2_3);
$linee2_3 = str_replace('a',$dokk14,$linee2_3);
$linee2_3 = str_replace('s',$dokk15,$linee2_3);
$linee2_3 = str_replace('d',$dokk16,$linee2_3);
$linee2_3 = str_replace('f',$dokk17,$linee2_3);
$linee2_3 = str_replace('g',$dokk18,$linee2_3);
$linee2_3 = str_replace('h',$dokk19,$linee2_3);
$linee2_3 = str_replace('j',$dokk20,$linee2_3);
$linee2_3 = str_replace('k',$dokk21,$linee2_3);
$linee2_3 = str_replace('l',$dokk22,$linee2_3);
$linee2_3 = str_replace('z',$dokk23,$linee2_3);
$linee2_3 = str_replace('x',$dokk24,$linee2_3);
$linee2_3 = str_replace('c',$dokk25,$linee2_3);
$linee2_3 = str_replace('v',$dokk26,$linee2_3);
$linee2_3 = str_replace('b',$dokk27,$linee2_3);
$linee2_3 = str_replace('n',$dokk28,$linee2_3);
$linee2_3 = str_replace('m',$dokk29,$linee2_3);
$linee2_3 = str_replace('*',$dokk30,$linee2_3);
}else{
$linee2_3 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee24.txt")){
$linee2_4 = file_get_contents("keyboard/create/linee24.txt");
if($linee2_4 != null ){
$linee2_4 = str_replace('1',$dokk1,$linee2_4);
$linee2_4 = str_replace('2',$dokk2,$linee2_4);
$linee2_4 = str_replace('3',$dokk3,$linee2_4);
$linee2_4 = str_replace('q',$dokk4,$linee2_4);
$linee2_4 = str_replace('w',$dokk5,$linee2_4);
$linee2_4 = str_replace('e',$dokk6,$linee2_4);
$linee2_4 = str_replace('r',$dokk7,$linee2_4);
$linee2_4 = str_replace('t',$dokk8,$linee2_4);
$linee2_4 = str_replace('y',$dokk9,$linee2_4);
$linee2_4 = str_replace('u',$dokk10,$linee2_4);
$linee2_4 = str_replace('i',$dokk11,$linee2_4);
$linee2_4 = str_replace('o',$dokk12,$linee2_4);
$linee2_4 = str_replace('p',$dokk13,$linee2_4);
$linee2_4 = str_replace('a',$dokk14,$linee2_4);
$linee2_4 = str_replace('s',$dokk15,$linee2_4);
$linee2_4 = str_replace('d',$dokk16,$linee2_4);
$linee2_4 = str_replace('f',$dokk17,$linee2_4);
$linee2_4 = str_replace('g',$dokk18,$linee2_4);
$linee2_4 = str_replace('h',$dokk19,$linee2_4);
$linee2_4 = str_replace('j',$dokk20,$linee2_4);
$linee2_4 = str_replace('k',$dokk21,$linee2_4);
$linee2_4 = str_replace('l',$dokk22,$linee2_4);
$linee2_4 = str_replace('z',$dokk23,$linee2_4);
$linee2_4 = str_replace('x',$dokk24,$linee2_4);
$linee2_4 = str_replace('c',$dokk25,$linee2_4);
$linee2_4 = str_replace('v',$dokk26,$linee2_4);
$linee2_4 = str_replace('b',$dokk27,$linee2_4);
$linee2_4 = str_replace('n',$dokk28,$linee2_4);
$linee2_4 = str_replace('m',$dokk29,$linee2_4);
$linee2_4 = str_replace('*',$dokk30,$linee2_4);
}else{
$linee2_4 = "➕";
}}

//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee31.txt")){
$linee3_1 = file_get_contents("keyboard/create/linee31.txt");
if($linee3_1 != null ){
$linee3_1 = str_replace('1',$dokk1,$linee3_1);
$linee3_1 = str_replace('2',$dokk2,$linee3_1);
$linee3_1 = str_replace('3',$dokk3,$linee3_1);
$linee3_1 = str_replace('q',$dokk4,$linee3_1);
$linee3_1 = str_replace('w',$dokk5,$linee3_1);
$linee3_1 = str_replace('e',$dokk6,$linee3_1);
$linee3_1 = str_replace('r',$dokk7,$linee3_1);
$linee3_1 = str_replace('t',$dokk8,$linee3_1);
$linee3_1 = str_replace('y',$dokk9,$linee3_1);
$linee3_1 = str_replace('u',$dokk10,$linee3_1);
$linee3_1 = str_replace('i',$dokk11,$linee3_1);
$linee3_1 = str_replace('o',$dokk12,$linee3_1);
$linee3_1 = str_replace('p',$dokk13,$linee3_1);
$linee3_1 = str_replace('a',$dokk14,$linee3_1);
$linee3_1 = str_replace('s',$dokk15,$linee3_1);
$linee3_1 = str_replace('d',$dokk16,$linee3_1);
$linee3_1 = str_replace('f',$dokk17,$linee3_1);
$linee3_1 = str_replace('g',$dokk18,$linee3_1);
$linee3_1 = str_replace('h',$dokk19,$linee3_1);
$linee3_1 = str_replace('j',$dokk20,$linee3_1);
$linee3_1 = str_replace('k',$dokk21,$linee3_1);
$linee3_1 = str_replace('l',$dokk22,$linee3_1);
$linee3_1 = str_replace('z',$dokk23,$linee3_1);
$linee3_1 = str_replace('x',$dokk24,$linee3_1);
$linee3_1 = str_replace('c',$dokk25,$linee3_1);
$linee3_1 = str_replace('v',$dokk26,$linee3_1);
$linee3_1 = str_replace('b',$dokk27,$linee3_1);
$linee3_1 = str_replace('n',$dokk28,$linee3_1);
$linee3_1 = str_replace('m',$dokk29,$linee3_1);
$linee3_1 = str_replace('*',$dokk30,$linee3_1);
}else{
$linee3_1 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee32.txt")){
$linee3_2 = file_get_contents("keyboard/create/linee32.txt");
if($linee3_2 != null ){
$linee3_2 = str_replace('1',$dokk1,$linee3_2);
$linee3_2 = str_replace('2',$dokk2,$linee3_2);
$linee3_2 = str_replace('3',$dokk3,$linee3_2);
$linee3_2 = str_replace('q',$dokk4,$linee3_2);
$linee3_2 = str_replace('w',$dokk5,$linee3_2);
$linee3_2 = str_replace('e',$dokk6,$linee3_2);
$linee3_2 = str_replace('r',$dokk7,$linee3_2);
$linee3_2 = str_replace('t',$dokk8,$linee3_2);
$linee3_2 = str_replace('y',$dokk9,$linee3_2);
$linee3_2 = str_replace('u',$dokk10,$linee3_2);
$linee3_2 = str_replace('i',$dokk11,$linee3_2);
$linee3_2 = str_replace('o',$dokk12,$linee3_2);
$linee3_2 = str_replace('p',$dokk13,$linee3_2);
$linee3_2 = str_replace('a',$dokk14,$linee3_2);
$linee3_2 = str_replace('s',$dokk15,$linee3_2);
$linee3_2 = str_replace('d',$dokk16,$linee3_2);
$linee3_2 = str_replace('f',$dokk17,$linee3_2);
$linee3_2 = str_replace('g',$dokk18,$linee3_2);
$linee3_2 = str_replace('h',$dokk19,$linee3_2);
$linee3_2 = str_replace('j',$dokk20,$linee3_2);
$linee3_2 = str_replace('k',$dokk21,$linee3_2);
$linee3_2 = str_replace('l',$dokk22,$linee3_2);
$linee3_2 = str_replace('z',$dokk23,$linee3_2);
$linee3_2 = str_replace('x',$dokk24,$linee3_2);
$linee3_2 = str_replace('c',$dokk25,$linee3_2);
$linee3_2 = str_replace('v',$dokk26,$linee3_2);
$linee3_2 = str_replace('b',$dokk27,$linee3_2);
$linee3_2 = str_replace('n',$dokk28,$linee3_2);
$linee3_2 = str_replace('m',$dokk29,$linee3_2);
$linee3_2 = str_replace('*',$dokk30,$linee3_2);
}else{
$linee3_2 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee33.txt")){
$linee3_3 = file_get_contents("keyboard/create/linee33.txt");
if($linee3_3 != null ){
$linee3_3 = str_replace('1',$dokk1,$linee3_3);
$linee3_3 = str_replace('2',$dokk2,$linee3_3);
$linee3_3 = str_replace('3',$dokk3,$linee3_3);
$linee3_3 = str_replace('q',$dokk4,$linee3_3);
$linee3_3 = str_replace('w',$dokk5,$linee3_3);
$linee3_3 = str_replace('e',$dokk6,$linee3_3);
$linee3_3 = str_replace('r',$dokk7,$linee3_3);
$linee3_3 = str_replace('t',$dokk8,$linee3_3);
$linee3_3 = str_replace('y',$dokk9,$linee3_3);
$linee3_3 = str_replace('u',$dokk10,$linee3_3);
$linee3_3 = str_replace('i',$dokk11,$linee3_3);
$linee3_3 = str_replace('o',$dokk12,$linee3_3);
$linee3_3 = str_replace('p',$dokk13,$linee3_3);
$linee3_3 = str_replace('a',$dokk14,$linee3_3);
$linee3_3 = str_replace('s',$dokk15,$linee3_3);
$linee3_3 = str_replace('d',$dokk16,$linee3_3);
$linee3_3 = str_replace('f',$dokk17,$linee3_3);
$linee3_3 = str_replace('g',$dokk18,$linee3_3);
$linee3_3 = str_replace('h',$dokk19,$linee3_3);
$linee3_3 = str_replace('j',$dokk20,$linee3_3);
$linee3_3 = str_replace('k',$dokk21,$linee3_3);
$linee3_3 = str_replace('l',$dokk22,$linee3_3);
$linee3_3 = str_replace('z',$dokk23,$linee3_3);
$linee3_3 = str_replace('x',$dokk24,$linee3_3);
$linee3_3 = str_replace('c',$dokk25,$linee3_3);
$linee3_3 = str_replace('v',$dokk26,$linee3_3);
$linee3_3 = str_replace('b',$dokk27,$linee3_3);
$linee3_3 = str_replace('n',$dokk28,$linee3_3);
$linee3_3 = str_replace('m',$dokk29,$linee3_3);
$linee3_3 = str_replace('*',$dokk30,$linee3_3);
}else{
$linee3_3 = "➕";
}}//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee34.txt")){
$linee3_4 = file_get_contents("keyboard/create/linee34.txt");
if($linee3_4 != null ){
$linee3_4 = str_replace('1',$dokk1,$linee3_4);
$linee3_4 = str_replace('2',$dokk2,$linee3_4);
$linee3_4 = str_replace('3',$dokk3,$linee3_4);
$linee3_4 = str_replace('q',$dokk4,$linee3_4);
$linee3_4 = str_replace('w',$dokk5,$linee3_4);
$linee3_4 = str_replace('e',$dokk6,$linee3_4);
$linee3_4 = str_replace('r',$dokk7,$linee3_4);
$linee3_4 = str_replace('t',$dokk8,$linee3_4);
$linee3_4 = str_replace('y',$dokk9,$linee3_4);
$linee3_4 = str_replace('u',$dokk10,$linee3_4);
$linee3_4 = str_replace('i',$dokk11,$linee3_4);
$linee3_4 = str_replace('o',$dokk12,$linee3_4);
$linee3_4 = str_replace('p',$dokk13,$linee3_4);
$linee3_4 = str_replace('a',$dokk14,$linee3_4);
$linee3_4 = str_replace('s',$dokk15,$linee3_4);
$linee3_4 = str_replace('d',$dokk16,$linee3_4);
$linee3_4 = str_replace('f',$dokk17,$linee3_4);
$linee3_4 = str_replace('g',$dokk18,$linee3_4);
$linee3_4 = str_replace('h',$dokk19,$linee3_4);
$linee3_4 = str_replace('j',$dokk20,$linee3_4);
$linee3_4 = str_replace('k',$dokk21,$linee3_4);
$linee3_4 = str_replace('l',$dokk22,$linee3_4);
$linee3_4 = str_replace('z',$dokk23,$linee3_4);
$linee3_4 = str_replace('x',$dokk24,$linee3_4);
$linee3_4 = str_replace('c',$dokk25,$linee3_4);
$linee3_4 = str_replace('v',$dokk26,$linee3_4);
$linee3_4 = str_replace('b',$dokk27,$linee3_4);
$linee3_4 = str_replace('n',$dokk28,$linee3_4);
$linee3_4 = str_replace('m',$dokk29,$linee3_4);
$linee3_4 = str_replace('*',$dokk30,$linee3_4);
}else{
$linee3_4 = "➕";
}}

//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee41.txt")){
$linee4_1 = file_get_contents("keyboard/create/linee41.txt");
if($linee4_1 != null ){
$linee4_1 = str_replace('1',$dokk1,$linee4_1);
$linee4_1 = str_replace('2',$dokk2,$linee4_1);
$linee4_1 = str_replace('3',$dokk3,$linee4_1);
$linee4_1 = str_replace('q',$dokk4,$linee4_1);
$linee4_1 = str_replace('w',$dokk5,$linee4_1);
$linee4_1 = str_replace('e',$dokk6,$linee4_1);
$linee4_1 = str_replace('r',$dokk7,$linee4_1);
$linee4_1 = str_replace('t',$dokk8,$linee4_1);
$linee4_1 = str_replace('y',$dokk9,$linee4_1);
$linee4_1 = str_replace('u',$dokk10,$linee4_1);
$linee4_1 = str_replace('i',$dokk11,$linee4_1);
$linee4_1 = str_replace('o',$dokk12,$linee4_1);
$linee4_1 = str_replace('p',$dokk13,$linee4_1);
$linee4_1 = str_replace('a',$dokk14,$linee4_1);
$linee4_1 = str_replace('s',$dokk15,$linee4_1);
$linee4_1 = str_replace('d',$dokk16,$linee4_1);
$linee4_1 = str_replace('f',$dokk17,$linee4_1);
$linee4_1 = str_replace('g',$dokk18,$linee4_1);
$linee4_1 = str_replace('h',$dokk19,$linee4_1);
$linee4_1 = str_replace('j',$dokk20,$linee4_1);
$linee4_1 = str_replace('k',$dokk21,$linee4_1);
$linee4_1 = str_replace('l',$dokk22,$linee4_1);
$linee4_1 = str_replace('z',$dokk23,$linee4_1);
$linee4_1 = str_replace('x',$dokk24,$linee4_1);
$linee4_1 = str_replace('c',$dokk25,$linee4_1);
$linee4_1 = str_replace('v',$dokk26,$linee4_1);
$linee4_1 = str_replace('b',$dokk27,$linee4_1);
$linee4_1 = str_replace('n',$dokk28,$linee4_1);
$linee4_1 = str_replace('m',$dokk29,$linee4_1);
$linee4_1 = str_replace('*',$dokk30,$linee4_1);
}else{
$linee4_1 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee42.txt")){
$linee4_2 = file_get_contents("keyboard/create/linee42.txt");
if($linee4_2 != null ){
$linee4_2 = str_replace('1',$dokk1,$linee4_2);
$linee4_2 = str_replace('2',$dokk2,$linee4_2);
$linee4_2 = str_replace('3',$dokk3,$linee4_2);
$linee4_2 = str_replace('q',$dokk4,$linee4_2);
$linee4_2 = str_replace('w',$dokk5,$linee4_2);
$linee4_2 = str_replace('e',$dokk6,$linee4_2);
$linee4_2 = str_replace('r',$dokk7,$linee4_2);
$linee4_2 = str_replace('t',$dokk8,$linee4_2);
$linee4_2 = str_replace('y',$dokk9,$linee4_2);
$linee4_2 = str_replace('u',$dokk10,$linee4_2);
$linee4_2 = str_replace('i',$dokk11,$linee4_2);
$linee4_2 = str_replace('o',$dokk12,$linee4_2);
$linee4_2 = str_replace('p',$dokk13,$linee4_2);
$linee4_2 = str_replace('a',$dokk14,$linee4_2);
$linee4_2 = str_replace('s',$dokk15,$linee4_2);
$linee4_2 = str_replace('d',$dokk16,$linee4_2);
$linee4_2 = str_replace('f',$dokk17,$linee4_2);
$linee4_2 = str_replace('g',$dokk18,$linee4_2);
$linee4_2 = str_replace('h',$dokk19,$linee4_2);
$linee4_2 = str_replace('j',$dokk20,$linee4_2);
$linee4_2 = str_replace('k',$dokk21,$linee4_2);
$linee4_2 = str_replace('l',$dokk22,$linee4_2);
$linee4_2 = str_replace('z',$dokk23,$linee4_2);
$linee4_2 = str_replace('x',$dokk24,$linee4_2);
$linee4_2 = str_replace('c',$dokk25,$linee4_2);
$linee4_2 = str_replace('v',$dokk26,$linee4_2);
$linee4_2 = str_replace('b',$dokk27,$linee4_2);
$linee4_2 = str_replace('n',$dokk28,$linee4_2);
$linee4_2 = str_replace('m',$dokk29,$linee4_2);
$linee4_2 = str_replace('*',$dokk30,$linee4_2);
}else{
$linee4_2 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee43.txt")){
$linee4_3 = file_get_contents("keyboard/create/linee43.txt");
if($linee4_3 != null ){
$linee4_3 = str_replace('1',$dokk1,$linee4_3);
$linee4_3 = str_replace('2',$dokk2,$linee4_3);
$linee4_3 = str_replace('3',$dokk3,$linee4_3);
$linee4_3 = str_replace('q',$dokk4,$linee4_3);
$linee4_3 = str_replace('w',$dokk5,$linee4_3);
$linee4_3 = str_replace('e',$dokk6,$linee4_3);
$linee4_3 = str_replace('r',$dokk7,$linee4_3);
$linee4_3 = str_replace('t',$dokk8,$linee4_3);
$linee4_3 = str_replace('y',$dokk9,$linee4_3);
$linee4_3 = str_replace('u',$dokk10,$linee4_3);
$linee4_3 = str_replace('i',$dokk11,$linee4_3);
$linee4_3 = str_replace('o',$dokk12,$linee4_3);
$linee4_3 = str_replace('p',$dokk13,$linee4_3);
$linee4_3 = str_replace('a',$dokk14,$linee4_3);
$linee4_3 = str_replace('s',$dokk15,$linee4_3);
$linee4_3 = str_replace('d',$dokk16,$linee4_3);
$linee4_3 = str_replace('f',$dokk17,$linee4_3);
$linee4_3 = str_replace('g',$dokk18,$linee4_3);
$linee4_3 = str_replace('h',$dokk19,$linee4_3);
$linee4_3 = str_replace('j',$dokk20,$linee4_3);
$linee4_3 = str_replace('k',$dokk21,$linee4_3);
$linee4_3 = str_replace('l',$dokk22,$linee4_3);
$linee4_3 = str_replace('z',$dokk23,$linee4_3);
$linee4_3 = str_replace('x',$dokk24,$linee4_3);
$linee4_3 = str_replace('c',$dokk25,$linee4_3);
$linee4_3 = str_replace('v',$dokk26,$linee4_3);
$linee4_3 = str_replace('b',$dokk27,$linee4_3);
$linee4_3 = str_replace('n',$dokk28,$linee4_3);
$linee4_3 = str_replace('m',$dokk29,$linee4_3);
$linee4_3 = str_replace('*',$dokk30,$linee4_3);
}else{
$linee4_3 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee44.txt")){
$linee4_4 = file_get_contents("keyboard/create/linee44.txt");
if($linee4_4 != null ){
$linee4_4 = str_replace('1',$dokk1,$linee4_4);
$linee4_4 = str_replace('2',$dokk2,$linee4_4);
$linee4_4 = str_replace('3',$dokk3,$linee4_4);
$linee4_4 = str_replace('q',$dokk4,$linee4_4);
$linee4_4 = str_replace('w',$dokk5,$linee4_4);
$linee4_4 = str_replace('e',$dokk6,$linee4_4);
$linee4_4 = str_replace('r',$dokk7,$linee4_4);
$linee4_4 = str_replace('t',$dokk8,$linee4_4);
$linee4_4 = str_replace('y',$dokk9,$linee4_4);
$linee4_4 = str_replace('u',$dokk10,$linee4_4);
$linee4_4 = str_replace('i',$dokk11,$linee4_4);
$linee4_4 = str_replace('o',$dokk12,$linee4_4);
$linee4_4 = str_replace('p',$dokk13,$linee4_4);
$linee4_4 = str_replace('a',$dokk14,$linee4_4);
$linee4_4 = str_replace('s',$dokk15,$linee4_4);
$linee4_4 = str_replace('d',$dokk16,$linee4_4);
$linee4_4 = str_replace('f',$dokk17,$linee4_4);
$linee4_4 = str_replace('g',$dokk18,$linee4_4);
$linee4_4 = str_replace('h',$dokk19,$linee4_4);
$linee4_4 = str_replace('j',$dokk20,$linee4_4);
$linee4_4 = str_replace('k',$dokk21,$linee4_4);
$linee4_4 = str_replace('l',$dokk22,$linee4_4);
$linee4_4 = str_replace('z',$dokk23,$linee4_4);
$linee4_4 = str_replace('x',$dokk24,$linee4_4);
$linee4_4 = str_replace('c',$dokk25,$linee4_4);
$linee4_4 = str_replace('v',$dokk26,$linee4_4);
$linee4_4 = str_replace('b',$dokk27,$linee4_4);
$linee4_4 = str_replace('n',$dokk28,$linee4_4);
$linee4_4 = str_replace('m',$dokk29,$linee4_4);
$linee4_4 = str_replace('*',$dokk30,$linee4_4);
}else{
$linee4_4 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee51.txt")){
$linee5_1 = file_get_contents("keyboard/create/linee51.txt");
if($linee5_1 != null ){
$linee5_1 = str_replace('1',$dokk1,$linee5_1);
$linee5_1 = str_replace('2',$dokk2,$linee5_1);
$linee5_1 = str_replace('3',$dokk3,$linee5_1);
$linee5_1 = str_replace('q',$dokk5,$linee5_1);
$linee5_1 = str_replace('w',$dokk5,$linee5_1);
$linee5_1 = str_replace('e',$dokk6,$linee5_1);
$linee5_1 = str_replace('r',$dokk7,$linee5_1);
$linee5_1 = str_replace('t',$dokk8,$linee5_1);
$linee5_1 = str_replace('y',$dokk9,$linee5_1);
$linee5_1 = str_replace('u',$dokk10,$linee5_1);
$linee5_1 = str_replace('i',$dokk11,$linee5_1);
$linee5_1 = str_replace('o',$dokk12,$linee5_1);
$linee5_1 = str_replace('p',$dokk13,$linee5_1);
$linee5_1 = str_replace('a',$dokk14,$linee5_1);
$linee5_1 = str_replace('s',$dokk15,$linee5_1);
$linee5_1 = str_replace('d',$dokk16,$linee5_1);
$linee5_1 = str_replace('f',$dokk17,$linee5_1);
$linee5_1 = str_replace('g',$dokk18,$linee5_1);
$linee5_1 = str_replace('h',$dokk19,$linee5_1);
$linee5_1 = str_replace('j',$dokk20,$linee5_1);
$linee5_1 = str_replace('k',$dokk21,$linee5_1);
$linee5_1 = str_replace('l',$dokk22,$linee5_1);
$linee5_1 = str_replace('z',$dokk23,$linee5_1);
$linee5_1 = str_replace('x',$dokk24,$linee5_1);
$linee5_1 = str_replace('c',$dokk25,$linee5_1);
$linee5_1 = str_replace('v',$dokk26,$linee5_1);
$linee5_1 = str_replace('b',$dokk27,$linee5_1);
$linee5_1 = str_replace('n',$dokk28,$linee5_1);
$linee5_1 = str_replace('m',$dokk29,$linee5_1);
$linee5_1 = str_replace('*',$dokk30,$linee5_1);
}else{
$linee5_1 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee52.txt")){
$linee5_2 = file_get_contents("keyboard/create/linee52.txt");
if($linee5_2 != null ){
$linee5_2 = str_replace('1',$dokk1,$linee5_2);
$linee5_2 = str_replace('2',$dokk2,$linee5_2);
$linee5_2 = str_replace('3',$dokk3,$linee5_2);
$linee5_2 = str_replace('q',$dokk4,$linee5_2);
$linee5_2 = str_replace('w',$dokk5,$linee5_2);
$linee5_2 = str_replace('e',$dokk6,$linee5_2);
$linee5_2 = str_replace('r',$dokk7,$linee5_2);
$linee5_2 = str_replace('t',$dokk8,$linee5_2);
$linee5_2 = str_replace('y',$dokk9,$linee5_2);
$linee5_2 = str_replace('u',$dokk10,$linee5_2);
$linee5_2 = str_replace('i',$dokk11,$linee5_2);
$linee5_2 = str_replace('o',$dokk12,$linee5_2);
$linee5_2 = str_replace('p',$dokk13,$linee5_2);
$linee5_2 = str_replace('a',$dokk14,$linee5_2);
$linee5_2 = str_replace('s',$dokk15,$linee5_2);
$linee5_2 = str_replace('d',$dokk16,$linee5_2);
$linee5_2 = str_replace('f',$dokk17,$linee5_2);
$linee5_2 = str_replace('g',$dokk18,$linee5_2);
$linee5_2 = str_replace('h',$dokk19,$linee5_2);
$linee5_2 = str_replace('j',$dokk20,$linee5_2);
$linee5_2 = str_replace('k',$dokk21,$linee5_2);
$linee5_2 = str_replace('l',$dokk22,$linee5_2);
$linee5_2 = str_replace('z',$dokk23,$linee5_2);
$linee5_2 = str_replace('x',$dokk24,$linee5_2);
$linee5_2 = str_replace('c',$dokk25,$linee5_2);
$linee5_2 = str_replace('v',$dokk26,$linee5_2);
$linee5_2 = str_replace('b',$dokk27,$linee5_2);
$linee5_2 = str_replace('n',$dokk28,$linee5_2);
$linee5_2 = str_replace('m',$dokk29,$linee5_2);
$linee5_2 = str_replace('*',$dokk30,$linee5_2);
}else{
$linee5_2 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee53.txt")){
$linee5_3 = file_get_contents("keyboard/create/linee53.txt");
if($linee5_3 != null ){
$linee5_3 = str_replace('1',$dokk1,$linee5_3);
$linee5_3 = str_replace('2',$dokk2,$linee5_3);
$linee5_3 = str_replace('3',$dokk3,$linee5_3);
$linee5_3 = str_replace('q',$dokk4,$linee5_3);
$linee5_3 = str_replace('w',$dokk5,$linee5_3);
$linee5_3 = str_replace('e',$dokk6,$linee5_3);
$linee5_3 = str_replace('r',$dokk7,$linee5_3);
$linee5_3 = str_replace('t',$dokk8,$linee5_3);
$linee5_3 = str_replace('y',$dokk9,$linee5_3);
$linee5_3 = str_replace('u',$dokk10,$linee5_3);
$linee5_3 = str_replace('i',$dokk11,$linee5_3);
$linee5_3 = str_replace('o',$dokk12,$linee5_3);
$linee5_3 = str_replace('p',$dokk13,$linee5_3);
$linee5_3 = str_replace('a',$dokk14,$linee5_3);
$linee5_3 = str_replace('s',$dokk15,$linee5_3);
$linee5_3 = str_replace('d',$dokk16,$linee5_3);
$linee5_3 = str_replace('f',$dokk17,$linee5_3);
$linee5_3 = str_replace('g',$dokk18,$linee5_3);
$linee5_3 = str_replace('h',$dokk19,$linee5_3);
$linee5_3 = str_replace('j',$dokk20,$linee5_3);
$linee5_3 = str_replace('k',$dokk21,$linee5_3);
$linee5_3 = str_replace('l',$dokk22,$linee5_3);
$linee5_3 = str_replace('z',$dokk23,$linee5_3);
$linee5_3 = str_replace('x',$dokk24,$linee5_3);
$linee5_3 = str_replace('c',$dokk25,$linee5_3);
$linee5_3 = str_replace('v',$dokk26,$linee5_3);
$linee5_3 = str_replace('b',$dokk27,$linee5_3);
$linee5_3 = str_replace('n',$dokk28,$linee5_3);
$linee5_3 = str_replace('m',$dokk29,$linee5_3);
$linee5_3 = str_replace('*',$dokk30,$linee5_3);
}else{
$linee5_3 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee54.txt")){
$linee5_4 = file_get_contents("keyboard/create/linee54.txt");
if($linee5_4 != null ){
$linee5_4 = str_replace('1',$dokk1,$linee5_4);
$linee5_4 = str_replace('2',$dokk2,$linee5_4);
$linee5_4 = str_replace('3',$dokk3,$linee5_4);
$linee5_4 = str_replace('q',$dokk4,$linee5_4);
$linee5_4 = str_replace('w',$dokk5,$linee5_4);
$linee5_4 = str_replace('e',$dokk6,$linee5_4);
$linee5_4 = str_replace('r',$dokk7,$linee5_4);
$linee5_4 = str_replace('t',$dokk8,$linee5_4);
$linee5_4 = str_replace('y',$dokk9,$linee5_4);
$linee5_4 = str_replace('u',$dokk10,$linee5_4);
$linee5_4 = str_replace('i',$dokk11,$linee5_4);
$linee5_4 = str_replace('o',$dokk12,$linee5_4);
$linee5_4 = str_replace('p',$dokk13,$linee5_4);
$linee5_4 = str_replace('a',$dokk14,$linee5_4);
$linee5_4 = str_replace('s',$dokk15,$linee5_4);
$linee5_4 = str_replace('d',$dokk16,$linee5_4);
$linee5_4 = str_replace('f',$dokk17,$linee5_4);
$linee5_4 = str_replace('g',$dokk18,$linee5_4);
$linee5_4 = str_replace('h',$dokk19,$linee5_4);
$linee5_4 = str_replace('j',$dokk20,$linee5_4);
$linee5_4 = str_replace('k',$dokk21,$linee5_4);
$linee5_4 = str_replace('l',$dokk22,$linee5_4);
$linee5_4 = str_replace('z',$dokk23,$linee5_4);
$linee5_4 = str_replace('x',$dokk24,$linee5_4);
$linee5_4 = str_replace('c',$dokk25,$linee5_4);
$linee5_4 = str_replace('v',$dokk26,$linee5_4);
$linee5_4 = str_replace('b',$dokk27,$linee5_4);
$linee5_4 = str_replace('n',$dokk28,$linee5_4);
$linee5_4 = str_replace('m',$dokk29,$linee5_4);
$linee5_4 = str_replace('*',$dokk30,$linee5_4);
}else{
$linee5_4 = "➕";
}}
if(file_exists("keyboard/create/linee61.txt")){
$linee6_1 = file_get_contents("keyboard/create/linee61.txt");
if($linee6_1 != null ){
$linee6_1 = str_replace('1',$dokk1,$linee6_1);
$linee6_1 = str_replace('2',$dokk2,$linee6_1);
$linee6_1 = str_replace('3',$dokk3,$linee6_1);
$linee6_1 = str_replace('q',$dokk4,$linee6_1);
$linee6_1 = str_replace('w',$dokk5,$linee6_1);
$linee6_1 = str_replace('e',$dokk6,$linee6_1);
$linee6_1 = str_replace('r',$dokk7,$linee6_1);
$linee6_1 = str_replace('t',$dokk8,$linee6_1);
$linee6_1 = str_replace('y',$dokk9,$linee6_1);
$linee6_1 = str_replace('u',$dokk10,$linee6_1);
$linee6_1 = str_replace('i',$dokk11,$linee6_1);
$linee6_1 = str_replace('o',$dokk12,$linee6_1);
$linee6_1 = str_replace('p',$dokk13,$linee6_1);
$linee6_1 = str_replace('a',$dokk14,$linee6_1);
$linee6_1 = str_replace('s',$dokk15,$linee6_1);
$linee6_1 = str_replace('d',$dokk16,$linee6_1);
$linee6_1 = str_replace('f',$dokk17,$linee6_1);
$linee6_1 = str_replace('g',$dokk18,$linee6_1);
$linee6_1 = str_replace('h',$dokk19,$linee6_1);
$linee6_1 = str_replace('j',$dokk20,$linee6_1);
$linee6_1 = str_replace('k',$dokk21,$linee6_1);
$linee6_1 = str_replace('l',$dokk22,$linee6_1);
$linee6_1 = str_replace('z',$dokk23,$linee6_1);
$linee6_1 = str_replace('x',$dokk24,$linee6_1);
$linee6_1 = str_replace('c',$dokk25,$linee6_1);
$linee6_1 = str_replace('v',$dokk26,$linee6_1);
$linee6_1 = str_replace('b',$dokk27,$linee6_1);
$linee6_1 = str_replace('n',$dokk28,$linee6_1);
$linee6_1 = str_replace('m',$dokk29,$linee6_1);
$linee6_1 = str_replace('*',$dokk30,$linee6_1);
}else{
$linee6_1 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee62.txt")){
$linee6_2 = file_get_contents("keyboard/create/linee62.txt");
if($linee6_2 != null ){
$linee6_2 = str_replace('1',$dokk1,$linee6_2);
$linee6_2 = str_replace('2',$dokk2,$linee6_2);
$linee6_2 = str_replace('3',$dokk3,$linee6_2);
$linee6_2 = str_replace('q',$dokk4,$linee6_2);
$linee6_2 = str_replace('w',$dokk5,$linee6_2);
$linee6_2 = str_replace('e',$dokk6,$linee6_2);
$linee6_2 = str_replace('r',$dokk7,$linee6_2);
$linee6_2 = str_replace('t',$dokk8,$linee6_2);
$linee6_2 = str_replace('y',$dokk9,$linee6_2);
$linee6_2 = str_replace('u',$dokk10,$linee6_2);
$linee6_2 = str_replace('i',$dokk11,$linee6_2);
$linee6_2 = str_replace('o',$dokk12,$linee6_2);
$linee6_2 = str_replace('p',$dokk13,$linee6_2);
$linee6_2 = str_replace('a',$dokk14,$linee6_2);
$linee6_2 = str_replace('s',$dokk15,$linee6_2);
$linee6_2 = str_replace('d',$dokk16,$linee6_2);
$linee6_2 = str_replace('f',$dokk17,$linee6_2);
$linee6_2 = str_replace('g',$dokk18,$linee6_2);
$linee6_2 = str_replace('h',$dokk19,$linee6_2);
$linee6_2 = str_replace('j',$dokk20,$linee6_2);
$linee6_2 = str_replace('k',$dokk21,$linee6_2);
$linee6_2 = str_replace('l',$dokk22,$linee6_2);
$linee6_2 = str_replace('z',$dokk23,$linee6_2);
$linee6_2 = str_replace('x',$dokk24,$linee6_2);
$linee6_2 = str_replace('c',$dokk25,$linee6_2);
$linee6_2 = str_replace('v',$dokk26,$linee6_2);
$linee6_2 = str_replace('b',$dokk27,$linee6_2);
$linee6_2 = str_replace('n',$dokk28,$linee6_2);
$linee6_2 = str_replace('m',$dokk29,$linee6_2);
$linee6_2 = str_replace('*',$dokk30,$linee6_2);
}else{
$linee6_2 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee63.txt")){
$linee6_3 = file_get_contents("keyboard/create/linee63.txt");
if($linee6_3 != null ){
$linee6_3 = str_replace('1',$dokk1,$linee6_3);
$linee6_3 = str_replace('2',$dokk2,$linee6_3);
$linee6_3 = str_replace('3',$dokk3,$linee6_3);
$linee6_3 = str_replace('q',$dokk4,$linee6_3);
$linee6_3 = str_replace('w',$dokk5,$linee6_3);
$linee6_3 = str_replace('e',$dokk6,$linee6_3);
$linee6_3 = str_replace('r',$dokk7,$linee6_3);
$linee6_3 = str_replace('t',$dokk8,$linee6_3);
$linee6_3 = str_replace('y',$dokk9,$linee6_3);
$linee6_3 = str_replace('u',$dokk10,$linee6_3);
$linee6_3 = str_replace('i',$dokk11,$linee6_3);
$linee6_3 = str_replace('o',$dokk12,$linee6_3);
$linee6_3 = str_replace('p',$dokk13,$linee6_3);
$linee6_3 = str_replace('a',$dokk14,$linee6_3);
$linee6_3 = str_replace('s',$dokk15,$linee6_3);
$linee6_3 = str_replace('d',$dokk16,$linee6_3);
$linee6_3 = str_replace('f',$dokk17,$linee6_3);
$linee6_3 = str_replace('g',$dokk18,$linee6_3);
$linee6_3 = str_replace('h',$dokk19,$linee6_3);
$linee6_3 = str_replace('j',$dokk20,$linee6_3);
$linee6_3 = str_replace('k',$dokk21,$linee6_3);
$linee6_3 = str_replace('l',$dokk22,$linee6_3);
$linee6_3 = str_replace('z',$dokk23,$linee6_3);
$linee6_3 = str_replace('x',$dokk24,$linee6_3);
$linee6_3 = str_replace('c',$dokk25,$linee6_3);
$linee6_3 = str_replace('v',$dokk26,$linee6_3);
$linee6_3 = str_replace('b',$dokk27,$linee6_3);
$linee6_3 = str_replace('n',$dokk28,$linee6_3);
$linee6_3 = str_replace('m',$dokk29,$linee6_3);
$linee6_3 = str_replace('*',$dokk30,$linee6_3);
}else{
$linee6_3 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee64.txt")){
$linee6_4 = file_get_contents("keyboard/create/linee64.txt");
if($linee6_4 != null ){
$linee6_4 = str_replace('1',$dokk1,$linee6_4);
$linee6_4 = str_replace('2',$dokk2,$linee6_4);
$linee6_4 = str_replace('3',$dokk3,$linee6_4);
$linee6_4 = str_replace('q',$dokk4,$linee6_4);
$linee6_4 = str_replace('w',$dokk5,$linee6_4);
$linee6_4 = str_replace('e',$dokk6,$linee6_4);
$linee6_4 = str_replace('r',$dokk7,$linee6_4);
$linee6_4 = str_replace('t',$dokk8,$linee6_4);
$linee6_4 = str_replace('y',$dokk9,$linee6_4);
$linee6_4 = str_replace('u',$dokk10,$linee6_4);
$linee6_4 = str_replace('i',$dokk11,$linee6_4);
$linee6_4 = str_replace('o',$dokk12,$linee6_4);
$linee6_4 = str_replace('p',$dokk13,$linee6_4);
$linee6_4 = str_replace('a',$dokk14,$linee6_4);
$linee6_4 = str_replace('s',$dokk15,$linee6_4);
$linee6_4 = str_replace('d',$dokk16,$linee6_4);
$linee6_4 = str_replace('f',$dokk17,$linee6_4);
$linee6_4 = str_replace('g',$dokk18,$linee6_4);
$linee6_4 = str_replace('h',$dokk19,$linee6_4);
$linee6_4 = str_replace('j',$dokk20,$linee6_4);
$linee6_4 = str_replace('k',$dokk21,$linee6_4);
$linee6_4 = str_replace('l',$dokk22,$linee6_4);
$linee6_4 = str_replace('z',$dokk23,$linee6_4);
$linee6_4 = str_replace('x',$dokk24,$linee6_4);
$linee6_4 = str_replace('c',$dokk25,$linee6_4);
$linee6_4 = str_replace('v',$dokk26,$linee6_4);
$linee6_4 = str_replace('b',$dokk27,$linee6_4);
$linee6_4 = str_replace('n',$dokk28,$linee6_4);
$linee6_4 = str_replace('m',$dokk29,$linee6_4);
$linee6_4 = str_replace('*',$dokk30,$linee6_4);
}else{
$linee6_4 = "➕";
}}
if(file_exists("keyboard/create/linee71.txt")){
$linee7_1 = file_get_contents("keyboard/create/linee71.txt");
if($linee7_1 != null ){
$linee7_1 = str_replace('1',$dokk1,$linee7_1);
$linee7_1 = str_replace('2',$dokk2,$linee7_1);
$linee7_1 = str_replace('3',$dokk3,$linee7_1);
$linee7_1 = str_replace('q',$dokk4,$linee7_1);
$linee7_1 = str_replace('w',$dokk5,$linee7_1);
$linee7_1 = str_replace('e',$dokk6,$linee7_1);
$linee7_1 = str_replace('r',$dokk7,$linee7_1);
$linee7_1 = str_replace('t',$dokk8,$linee7_1);
$linee7_1 = str_replace('y',$dokk9,$linee7_1);
$linee7_1 = str_replace('u',$dokk10,$linee7_1);
$linee7_1 = str_replace('i',$dokk11,$linee7_1);
$linee7_1 = str_replace('o',$dokk12,$linee7_1);
$linee7_1 = str_replace('p',$dokk13,$linee7_1);
$linee7_1 = str_replace('a',$dokk14,$linee7_1);
$linee7_1 = str_replace('s',$dokk15,$linee7_1);
$linee7_1 = str_replace('d',$dokk16,$linee7_1);
$linee7_1 = str_replace('f',$dokk17,$linee7_1);
$linee7_1 = str_replace('g',$dokk18,$linee7_1);
$linee7_1 = str_replace('h',$dokk19,$linee7_1);
$linee7_1 = str_replace('j',$dokk20,$linee7_1);
$linee7_1 = str_replace('k',$dokk21,$linee7_1);
$linee7_1 = str_replace('l',$dokk22,$linee7_1);
$linee7_1 = str_replace('z',$dokk23,$linee7_1);
$linee7_1 = str_replace('x',$dokk24,$linee7_1);
$linee7_1 = str_replace('c',$dokk25,$linee7_1);
$linee7_1 = str_replace('v',$dokk26,$linee7_1);
$linee7_1 = str_replace('b',$dokk27,$linee7_1);
$linee7_1 = str_replace('n',$dokk28,$linee7_1);
$linee7_1 = str_replace('m',$dokk29,$linee7_1);
$linee7_1 = str_replace('*',$dokk30,$linee7_1);
}else{
$linee7_1 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee72.txt")){
$linee7_2 = file_get_contents("keyboard/create/linee72.txt");
if($linee7_2 != null ){
$linee7_2 = str_replace('1',$dokk1,$linee7_2);
$linee7_2 = str_replace('2',$dokk2,$linee7_2);
$linee7_2 = str_replace('3',$dokk3,$linee7_2);
$linee7_2 = str_replace('q',$dokk4,$linee7_2);
$linee7_2 = str_replace('w',$dokk5,$linee7_2);
$linee7_2 = str_replace('e',$dokk6,$linee7_2);
$linee7_2 = str_replace('r',$dokk7,$linee7_2);
$linee7_2 = str_replace('t',$dokk8,$linee7_2);
$linee7_2 = str_replace('y',$dokk9,$linee7_2);
$linee7_2 = str_replace('u',$dokk10,$linee7_2);
$linee7_2 = str_replace('i',$dokk11,$linee7_2);
$linee7_2 = str_replace('o',$dokk12,$linee7_2);
$linee7_2 = str_replace('p',$dokk13,$linee7_2);
$linee7_2 = str_replace('a',$dokk14,$linee7_2);
$linee7_2 = str_replace('s',$dokk15,$linee7_2);
$linee7_2 = str_replace('d',$dokk16,$linee7_2);
$linee7_2 = str_replace('f',$dokk17,$linee7_2);
$linee7_2 = str_replace('g',$dokk18,$linee7_2);
$linee7_2 = str_replace('h',$dokk19,$linee7_2);
$linee7_2 = str_replace('j',$dokk20,$linee7_2);
$linee7_2 = str_replace('k',$dokk21,$linee7_2);
$linee7_2 = str_replace('l',$dokk22,$linee7_2);
$linee7_2 = str_replace('z',$dokk23,$linee7_2);
$linee7_2 = str_replace('x',$dokk24,$linee7_2);
$linee7_2 = str_replace('c',$dokk25,$linee7_2);
$linee7_2 = str_replace('v',$dokk26,$linee7_2);
$linee7_2 = str_replace('b',$dokk27,$linee7_2);
$linee7_2 = str_replace('n',$dokk28,$linee7_2);
$linee7_2 = str_replace('m',$dokk29,$linee7_2);
$linee7_2 = str_replace('*',$dokk30,$linee7_2);
}else{
$linee7_2 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee73.txt")){
$linee7_3 = file_get_contents("keyboard/create/linee73.txt");
if($linee7_3 != null ){
$linee7_3 = str_replace('1',$dokk1,$linee7_3);
$linee7_3 = str_replace('2',$dokk2,$linee7_3);
$linee7_3 = str_replace('3',$dokk3,$linee7_3);
$linee7_3 = str_replace('q',$dokk4,$linee7_3);
$linee7_3 = str_replace('w',$dokk5,$linee7_3);
$linee7_3 = str_replace('e',$dokk6,$linee7_3);
$linee7_3 = str_replace('r',$dokk7,$linee7_3);
$linee7_3 = str_replace('t',$dokk8,$linee7_3);
$linee7_3 = str_replace('y',$dokk9,$linee7_3);
$linee7_3 = str_replace('u',$dokk10,$linee7_3);
$linee7_3 = str_replace('i',$dokk11,$linee7_3);
$linee7_3 = str_replace('o',$dokk12,$linee7_3);
$linee7_3 = str_replace('p',$dokk13,$linee7_3);
$linee7_3 = str_replace('a',$dokk14,$linee7_3);
$linee7_3 = str_replace('s',$dokk15,$linee7_3);
$linee7_3 = str_replace('d',$dokk16,$linee7_3);
$linee7_3 = str_replace('f',$dokk17,$linee7_3);
$linee7_3 = str_replace('g',$dokk18,$linee7_3);
$linee7_3 = str_replace('h',$dokk19,$linee7_3);
$linee7_3 = str_replace('j',$dokk20,$linee7_3);
$linee7_3 = str_replace('k',$dokk21,$linee7_3);
$linee7_3 = str_replace('l',$dokk22,$linee7_3);
$linee7_3 = str_replace('z',$dokk23,$linee7_3);
$linee7_3 = str_replace('x',$dokk24,$linee7_3);
$linee7_3 = str_replace('c',$dokk25,$linee7_3);
$linee7_3 = str_replace('v',$dokk26,$linee7_3);
$linee7_3 = str_replace('b',$dokk27,$linee7_3);
$linee7_3 = str_replace('n',$dokk28,$linee7_3);
$linee7_3 = str_replace('m',$dokk29,$linee7_3);
$linee7_3 = str_replace('*',$dokk30,$linee7_3);
}else{
$linee7_3 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee74.txt")){
$linee7_4 = file_get_contents("keyboard/create/linee74.txt");
if($linee7_4 != null ){
$linee7_4 = str_replace('1',$dokk1,$linee7_4);
$linee7_4 = str_replace('2',$dokk2,$linee7_4);
$linee7_4 = str_replace('3',$dokk3,$linee7_4);
$linee7_4 = str_replace('q',$dokk4,$linee7_4);
$linee7_4 = str_replace('w',$dokk5,$linee7_4);
$linee7_4 = str_replace('e',$dokk6,$linee7_4);
$linee7_4 = str_replace('r',$dokk7,$linee7_4);
$linee7_4 = str_replace('t',$dokk8,$linee7_4);
$linee7_4 = str_replace('y',$dokk9,$linee7_4);
$linee7_4 = str_replace('u',$dokk10,$linee7_4);
$linee7_4 = str_replace('i',$dokk11,$linee7_4);
$linee7_4 = str_replace('o',$dokk12,$linee7_4);
$linee7_4 = str_replace('p',$dokk13,$linee7_4);
$linee7_4 = str_replace('a',$dokk14,$linee7_4);
$linee7_4 = str_replace('s',$dokk15,$linee7_4);
$linee7_4 = str_replace('d',$dokk16,$linee7_4);
$linee7_4 = str_replace('f',$dokk17,$linee7_4);
$linee7_4 = str_replace('g',$dokk18,$linee7_4);
$linee7_4 = str_replace('h',$dokk19,$linee7_4);
$linee7_4 = str_replace('j',$dokk20,$linee7_4);
$linee7_4 = str_replace('k',$dokk21,$linee7_4);
$linee7_4 = str_replace('l',$dokk22,$linee7_4);
$linee7_4 = str_replace('z',$dokk23,$linee7_4);
$linee7_4 = str_replace('x',$dokk24,$linee7_4);
$linee7_4 = str_replace('c',$dokk25,$linee7_4);
$linee7_4 = str_replace('v',$dokk26,$linee7_4);
$linee7_4 = str_replace('b',$dokk27,$linee7_4);
$linee7_4 = str_replace('n',$dokk28,$linee7_4);
$linee7_4 = str_replace('m',$dokk29,$linee7_4);
$linee7_4 = str_replace('*',$dokk30,$linee7_4);
}else{
$linee7_4 = "➕";
}}
if(file_exists("keyboard/create/linee81.txt")){
$linee8_1 = file_get_contents("keyboard/create/linee81.txt");
if($linee8_1 != null ){
$linee8_1 = str_replace('1',$dokk1,$linee8_1);
$linee8_1 = str_replace('2',$dokk2,$linee8_1);
$linee8_1 = str_replace('3',$dokk3,$linee8_1);
$linee8_1 = str_replace('q',$dokk4,$linee8_1);
$linee8_1 = str_replace('w',$dokk5,$linee8_1);
$linee8_1 = str_replace('e',$dokk6,$linee8_1);
$linee8_1 = str_replace('r',$dokk7,$linee8_1);
$linee8_1 = str_replace('t',$dokk8,$linee8_1);
$linee8_1 = str_replace('y',$dokk9,$linee8_1);
$linee8_1 = str_replace('u',$dokk10,$linee8_1);
$linee8_1 = str_replace('i',$dokk11,$linee8_1);
$linee8_1 = str_replace('o',$dokk12,$linee8_1);
$linee8_1 = str_replace('p',$dokk13,$linee8_1);
$linee8_1 = str_replace('a',$dokk14,$linee8_1);
$linee8_1 = str_replace('s',$dokk15,$linee8_1);
$linee8_1 = str_replace('d',$dokk16,$linee8_1);
$linee8_1 = str_replace('f',$dokk17,$linee8_1);
$linee8_1 = str_replace('g',$dokk18,$linee8_1);
$linee8_1 = str_replace('h',$dokk19,$linee8_1);
$linee8_1 = str_replace('j',$dokk20,$linee8_1);
$linee8_1 = str_replace('k',$dokk21,$linee8_1);
$linee8_1 = str_replace('l',$dokk22,$linee8_1);
$linee8_1 = str_replace('z',$dokk23,$linee8_1);
$linee8_1 = str_replace('x',$dokk24,$linee8_1);
$linee8_1 = str_replace('c',$dokk25,$linee8_1);
$linee8_1 = str_replace('v',$dokk26,$linee8_1);
$linee8_1 = str_replace('b',$dokk27,$linee8_1);
$linee8_1 = str_replace('n',$dokk28,$linee8_1);
$linee8_1 = str_replace('m',$dokk29,$linee8_1);
$linee8_1 = str_replace('*',$dokk30,$linee8_1);
}else{
$linee8_1 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee82.txt")){
$linee8_2 = file_get_contents("keyboard/create/linee82.txt");
if($linee8_2 != null ){
$linee8_2 = str_replace('1',$dokk1,$linee8_2);
$linee8_2 = str_replace('2',$dokk2,$linee8_2);
$linee8_2 = str_replace('3',$dokk3,$linee8_2);
$linee8_2 = str_replace('q',$dokk4,$linee8_2);
$linee8_2 = str_replace('w',$dokk5,$linee8_2);
$linee8_2 = str_replace('e',$dokk6,$linee8_2);
$linee8_2 = str_replace('r',$dokk7,$linee8_2);
$linee8_2 = str_replace('t',$dokk8,$linee8_2);
$linee8_2 = str_replace('y',$dokk9,$linee8_2);
$linee8_2 = str_replace('u',$dokk10,$linee8_2);
$linee8_2 = str_replace('i',$dokk11,$linee8_2);
$linee8_2 = str_replace('o',$dokk12,$linee8_2);
$linee8_2 = str_replace('p',$dokk13,$linee8_2);
$linee8_2 = str_replace('a',$dokk14,$linee8_2);
$linee8_2 = str_replace('s',$dokk15,$linee8_2);
$linee8_2 = str_replace('d',$dokk16,$linee8_2);
$linee8_2 = str_replace('f',$dokk17,$linee8_2);
$linee8_2 = str_replace('g',$dokk18,$linee8_2);
$linee8_2 = str_replace('h',$dokk19,$linee8_2);
$linee8_2 = str_replace('j',$dokk20,$linee8_2);
$linee8_2 = str_replace('k',$dokk21,$linee8_2);
$linee8_2 = str_replace('l',$dokk22,$linee8_2);
$linee8_2 = str_replace('z',$dokk23,$linee8_2);
$linee8_2 = str_replace('x',$dokk24,$linee8_2);
$linee8_2 = str_replace('c',$dokk25,$linee8_2);
$linee8_2 = str_replace('v',$dokk26,$linee8_2);
$linee8_2 = str_replace('b',$dokk27,$linee8_2);
$linee8_2 = str_replace('n',$dokk28,$linee8_2);
$linee8_2 = str_replace('m',$dokk29,$linee8_2);
$linee8_2 = str_replace('*',$dokk30,$linee8_2);
}else{
$linee8_2 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee83.txt")){
$linee8_3 = file_get_contents("keyboard/create/linee83.txt");
if($linee8_3 != null ){
$linee8_3 = str_replace('1',$dokk1,$linee8_3);
$linee8_3 = str_replace('2',$dokk2,$linee8_3);
$linee8_3 = str_replace('3',$dokk3,$linee8_3);
$linee8_3 = str_replace('q',$dokk4,$linee8_3);
$linee8_3 = str_replace('w',$dokk5,$linee8_3);
$linee8_3 = str_replace('e',$dokk6,$linee8_3);
$linee8_3 = str_replace('r',$dokk7,$linee8_3);
$linee8_3 = str_replace('t',$dokk8,$linee8_3);
$linee8_3 = str_replace('y',$dokk9,$linee8_3);
$linee8_3 = str_replace('u',$dokk10,$linee8_3);
$linee8_3 = str_replace('i',$dokk11,$linee8_3);
$linee8_3 = str_replace('o',$dokk12,$linee8_3);
$linee8_3 = str_replace('p',$dokk13,$linee8_3);
$linee8_3 = str_replace('a',$dokk14,$linee8_3);
$linee8_3 = str_replace('s',$dokk15,$linee8_3);
$linee8_3 = str_replace('d',$dokk16,$linee8_3);
$linee8_3 = str_replace('f',$dokk17,$linee8_3);
$linee8_3 = str_replace('g',$dokk18,$linee8_3);
$linee8_3 = str_replace('h',$dokk19,$linee8_3);
$linee8_3 = str_replace('j',$dokk20,$linee8_3);
$linee8_3 = str_replace('k',$dokk21,$linee8_3);
$linee8_3 = str_replace('l',$dokk22,$linee8_3);
$linee8_3 = str_replace('z',$dokk23,$linee8_3);
$linee8_3 = str_replace('x',$dokk24,$linee8_3);
$linee8_3 = str_replace('c',$dokk25,$linee8_3);
$linee8_3 = str_replace('v',$dokk26,$linee8_3);
$linee8_3 = str_replace('b',$dokk27,$linee8_3);
$linee8_3 = str_replace('n',$dokk28,$linee8_3);
$linee8_3 = str_replace('m',$dokk29,$linee8_3);
$linee8_3 = str_replace('*',$dokk30,$linee8_3);
}else{
$linee8_3 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee84.txt")){
$linee8_4 = file_get_contents("keyboard/create/linee84.txt");
if($linee8_4 != null ){
$linee8_4 = str_replace('1',$dokk1,$linee8_4);
$linee8_4 = str_replace('2',$dokk2,$linee8_4);
$linee8_4 = str_replace('3',$dokk3,$linee8_4);
$linee8_4 = str_replace('q',$dokk4,$linee8_4);
$linee8_4 = str_replace('w',$dokk5,$linee8_4);
$linee8_4 = str_replace('e',$dokk6,$linee8_4);
$linee8_4 = str_replace('r',$dokk7,$linee8_4);
$linee8_4 = str_replace('t',$dokk8,$linee8_4);
$linee8_4 = str_replace('y',$dokk9,$linee8_4);
$linee8_4 = str_replace('u',$dokk10,$linee8_4);
$linee8_4 = str_replace('i',$dokk11,$linee8_4);
$linee8_4 = str_replace('o',$dokk12,$linee8_4);
$linee8_4 = str_replace('p',$dokk13,$linee8_4);
$linee8_4 = str_replace('a',$dokk14,$linee8_4);
$linee8_4 = str_replace('s',$dokk15,$linee8_4);
$linee8_4 = str_replace('d',$dokk16,$linee8_4);
$linee8_4 = str_replace('f',$dokk17,$linee8_4);
$linee8_4 = str_replace('g',$dokk18,$linee8_4);
$linee8_4 = str_replace('h',$dokk19,$linee8_4);
$linee8_4 = str_replace('j',$dokk20,$linee8_4);
$linee8_4 = str_replace('k',$dokk21,$linee8_4);
$linee8_4 = str_replace('l',$dokk22,$linee8_4);
$linee8_4 = str_replace('z',$dokk23,$linee8_4);
$linee8_4 = str_replace('x',$dokk24,$linee8_4);
$linee8_4 = str_replace('c',$dokk25,$linee8_4);
$linee8_4 = str_replace('v',$dokk26,$linee8_4);
$linee8_4 = str_replace('b',$dokk27,$linee8_4);
$linee8_4 = str_replace('n',$dokk28,$linee8_4);
$linee8_4 = str_replace('m',$dokk29,$linee8_4);
$linee8_4 = str_replace('*',$dokk30,$linee8_4);
}else{
$linee8_4 = "➕";
}}
if(file_exists("keyboard/create/linee91.txt")){
$linee9_1 = file_get_contents("keyboard/create/linee91.txt");
if($linee9_1 != null ){
$linee9_1 = str_replace('1',$dokk1,$linee9_1);
$linee9_1 = str_replace('2',$dokk2,$linee9_1);
$linee9_1 = str_replace('3',$dokk3,$linee9_1);
$linee9_1 = str_replace('q',$dokk4,$linee9_1);
$linee9_1 = str_replace('w',$dokk5,$linee9_1);
$linee9_1 = str_replace('e',$dokk6,$linee9_1);
$linee9_1 = str_replace('r',$dokk7,$linee9_1);
$linee9_1 = str_replace('t',$dokk8,$linee9_1);
$linee9_1 = str_replace('y',$dokk9,$linee9_1);
$linee9_1 = str_replace('u',$dokk10,$linee9_1);
$linee9_1 = str_replace('i',$dokk11,$linee9_1);
$linee9_1 = str_replace('o',$dokk12,$linee9_1);
$linee9_1 = str_replace('p',$dokk13,$linee9_1);
$linee9_1 = str_replace('a',$dokk14,$linee9_1);
$linee9_1 = str_replace('s',$dokk15,$linee9_1);
$linee9_1 = str_replace('d',$dokk16,$linee9_1);
$linee9_1 = str_replace('f',$dokk17,$linee9_1);
$linee9_1 = str_replace('g',$dokk18,$linee9_1);
$linee9_1 = str_replace('h',$dokk19,$linee9_1);
$linee9_1 = str_replace('j',$dokk20,$linee9_1);
$linee9_1 = str_replace('k',$dokk21,$linee9_1);
$linee9_1 = str_replace('l',$dokk22,$linee9_1);
$linee9_1 = str_replace('z',$dokk23,$linee9_1);
$linee9_1 = str_replace('x',$dokk24,$linee9_1);
$linee9_1 = str_replace('c',$dokk25,$linee9_1);
$linee9_1 = str_replace('v',$dokk26,$linee9_1);
$linee9_1 = str_replace('b',$dokk27,$linee9_1);
$linee9_1 = str_replace('n',$dokk28,$linee9_1);
$linee9_1 = str_replace('m',$dokk29,$linee9_1);
$linee9_1 = str_replace('*',$dokk30,$linee9_1);
}else{
$linee9_1 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee92.txt")){
$linee9_2 = file_get_contents("keyboard/create/linee92.txt");
if($linee9_2 != null ){
$linee9_2 = str_replace('1',$dokk1,$linee9_2);
$linee9_2 = str_replace('2',$dokk2,$linee9_2);
$linee9_2 = str_replace('3',$dokk3,$linee9_2);
$linee9_2 = str_replace('q',$dokk4,$linee9_2);
$linee9_2 = str_replace('w',$dokk5,$linee9_2);
$linee9_2 = str_replace('e',$dokk6,$linee9_2);
$linee9_2 = str_replace('r',$dokk7,$linee9_2);
$linee9_2 = str_replace('t',$dokk8,$linee9_2);
$linee9_2 = str_replace('y',$dokk9,$linee9_2);
$linee9_2 = str_replace('u',$dokk10,$linee9_2);
$linee9_2 = str_replace('i',$dokk11,$linee9_2);
$linee9_2 = str_replace('o',$dokk12,$linee9_2);
$linee9_2 = str_replace('p',$dokk13,$linee9_2);
$linee9_2 = str_replace('a',$dokk14,$linee9_2);
$linee9_2 = str_replace('s',$dokk15,$linee9_2);
$linee9_2 = str_replace('d',$dokk16,$linee9_2);
$linee9_2 = str_replace('f',$dokk17,$linee9_2);
$linee9_2 = str_replace('g',$dokk18,$linee9_2);
$linee9_2 = str_replace('h',$dokk19,$linee9_2);
$linee9_2 = str_replace('j',$dokk20,$linee9_2);
$linee9_2 = str_replace('k',$dokk21,$linee9_2);
$linee9_2 = str_replace('l',$dokk22,$linee9_2);
$linee9_2 = str_replace('z',$dokk23,$linee9_2);
$linee9_2 = str_replace('x',$dokk24,$linee9_2);
$linee9_2 = str_replace('c',$dokk25,$linee9_2);
$linee9_2 = str_replace('v',$dokk26,$linee9_2);
$linee9_2 = str_replace('b',$dokk27,$linee9_2);
$linee9_2 = str_replace('n',$dokk28,$linee9_2);
$linee9_2 = str_replace('m',$dokk29,$linee9_2);
$linee9_2 = str_replace('*',$dokk30,$linee9_2);
}else{
$linee9_2 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee93.txt")){
$linee9_3 = file_get_contents("keyboard/create/linee93.txt");
if($linee9_3 != null ){
$linee9_3 = str_replace('1',$dokk1,$linee9_3);
$linee9_3 = str_replace('2',$dokk2,$linee9_3);
$linee9_3 = str_replace('3',$dokk3,$linee9_3);
$linee9_3 = str_replace('q',$dokk4,$linee9_3);
$linee9_3 = str_replace('w',$dokk5,$linee9_3);
$linee9_3 = str_replace('e',$dokk6,$linee9_3);
$linee9_3 = str_replace('r',$dokk7,$linee9_3);
$linee9_3 = str_replace('t',$dokk8,$linee9_3);
$linee9_3 = str_replace('y',$dokk9,$linee9_3);
$linee9_3 = str_replace('u',$dokk10,$linee9_3);
$linee9_3 = str_replace('i',$dokk11,$linee9_3);
$linee9_3 = str_replace('o',$dokk12,$linee9_3);
$linee9_3 = str_replace('p',$dokk13,$linee9_3);
$linee9_3 = str_replace('a',$dokk14,$linee9_3);
$linee9_3 = str_replace('s',$dokk15,$linee9_3);
$linee9_3 = str_replace('d',$dokk16,$linee9_3);
$linee9_3 = str_replace('f',$dokk17,$linee9_3);
$linee9_3 = str_replace('g',$dokk18,$linee9_3);
$linee9_3 = str_replace('h',$dokk19,$linee9_3);
$linee9_3 = str_replace('j',$dokk20,$linee9_3);
$linee9_3 = str_replace('k',$dokk21,$linee9_3);
$linee9_3 = str_replace('l',$dokk22,$linee9_3);
$linee9_3 = str_replace('z',$dokk23,$linee9_3);
$linee9_3 = str_replace('x',$dokk24,$linee9_3);
$linee9_3 = str_replace('c',$dokk25,$linee9_3);
$linee9_3 = str_replace('v',$dokk26,$linee9_3);
$linee9_3 = str_replace('b',$dokk27,$linee9_3);
$linee9_3 = str_replace('n',$dokk28,$linee9_3);
$linee9_3 = str_replace('m',$dokk29,$linee9_3);
$linee9_3 = str_replace('*',$dokk30,$linee9_3);
}else{
$linee9_3 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee94.txt")){
$linee9_4 = file_get_contents("keyboard/create/linee94.txt");
if($linee9_4 != null ){
$linee9_4 = str_replace('1',$dokk1,$linee9_4);
$linee9_4 = str_replace('2',$dokk2,$linee9_4);
$linee9_4 = str_replace('3',$dokk3,$linee9_4);
$linee9_4 = str_replace('q',$dokk4,$linee9_4);
$linee9_4 = str_replace('w',$dokk5,$linee9_4);
$linee9_4 = str_replace('e',$dokk6,$linee9_4);
$linee9_4 = str_replace('r',$dokk7,$linee9_4);
$linee9_4 = str_replace('t',$dokk8,$linee9_4);
$linee9_4 = str_replace('y',$dokk9,$linee9_4);
$linee9_4 = str_replace('u',$dokk10,$linee9_4);
$linee9_4 = str_replace('i',$dokk11,$linee9_4);
$linee9_4 = str_replace('o',$dokk12,$linee9_4);
$linee9_4 = str_replace('p',$dokk13,$linee9_4);
$linee9_4 = str_replace('a',$dokk14,$linee9_4);
$linee9_4 = str_replace('s',$dokk15,$linee9_4);
$linee9_4 = str_replace('d',$dokk16,$linee9_4);
$linee9_4 = str_replace('f',$dokk17,$linee9_4);
$linee9_4 = str_replace('g',$dokk18,$linee9_4);
$linee9_4 = str_replace('h',$dokk19,$linee9_4);
$linee9_4 = str_replace('j',$dokk20,$linee9_4);
$linee9_4 = str_replace('k',$dokk21,$linee9_4);
$linee9_4 = str_replace('l',$dokk22,$linee9_4);
$linee9_4 = str_replace('z',$dokk23,$linee9_4);
$linee9_4 = str_replace('x',$dokk24,$linee9_4);
$linee9_4 = str_replace('c',$dokk25,$linee9_4);
$linee9_4 = str_replace('v',$dokk26,$linee9_4);
$linee9_4 = str_replace('b',$dokk27,$linee9_4);
$linee9_4 = str_replace('n',$dokk28,$linee9_4);
$linee9_4 = str_replace('m',$dokk29,$linee9_4);
$linee9_4 = str_replace('*',$dokk30,$linee9_4);
}else{
$linee9_4 = "➕";
}}
if(file_exists("keyboard/create/linee101.txt")){
$linee10_1 = file_get_contents("keyboard/create/linee101.txt");
if($linee10_1 != null ){
$linee10_1 = str_replace('1',$dokk1,$linee10_1);
$linee10_1 = str_replace('2',$dokk2,$linee10_1);
$linee10_1 = str_replace('3',$dokk3,$linee10_1);
$linee10_1 = str_replace('q',$dokk4,$linee10_1);
$linee10_1 = str_replace('w',$dokk5,$linee10_1);
$linee10_1 = str_replace('e',$dokk6,$linee10_1);
$linee10_1 = str_replace('r',$dokk7,$linee10_1);
$linee10_1 = str_replace('t',$dokk8,$linee10_1);
$linee10_1 = str_replace('y',$dokk9,$linee10_1);
$linee10_1 = str_replace('u',$dokk10,$linee10_1);
$linee10_1 = str_replace('i',$dokk11,$linee10_1);
$linee10_1 = str_replace('o',$dokk12,$linee10_1);
$linee10_1 = str_replace('p',$dokk13,$linee10_1);
$linee10_1 = str_replace('a',$dokk14,$linee10_1);
$linee10_1 = str_replace('s',$dokk15,$linee10_1);
$linee10_1 = str_replace('d',$dokk16,$linee10_1);
$linee10_1 = str_replace('f',$dokk17,$linee10_1);
$linee10_1 = str_replace('g',$dokk18,$linee10_1);
$linee10_1 = str_replace('h',$dokk19,$linee10_1);
$linee10_1 = str_replace('j',$dokk20,$linee10_1);
$linee10_1 = str_replace('k',$dokk21,$linee10_1);
$linee10_1 = str_replace('l',$dokk22,$linee10_1);
$linee10_1 = str_replace('z',$dokk23,$linee10_1);
$linee10_1 = str_replace('x',$dokk24,$linee10_1);
$linee10_1 = str_replace('c',$dokk25,$linee10_1);
$linee10_1 = str_replace('v',$dokk26,$linee10_1);
$linee10_1 = str_replace('b',$dokk27,$linee10_1);
$linee10_1 = str_replace('n',$dokk28,$linee10_1);
$linee10_1 = str_replace('m',$dokk29,$linee10_1);
$linee10_1 = str_replace('*',$dokk30,$linee10_1);
}else{
$linee10_1 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee102.txt")){
$linee10_2 = file_get_contents("keyboard/create/linee102.txt");
if($linee10_2 != null ){
$linee10_2 = str_replace('1',$dokk1,$linee10_2);
$linee10_2 = str_replace('2',$dokk2,$linee10_2);
$linee10_2 = str_replace('3',$dokk3,$linee10_2);
$linee10_2 = str_replace('q',$dokk4,$linee10_2);
$linee10_2 = str_replace('w',$dokk5,$linee10_2);
$linee10_2 = str_replace('e',$dokk6,$linee10_2);
$linee10_2 = str_replace('r',$dokk7,$linee10_2);
$linee10_2 = str_replace('t',$dokk8,$linee10_2);
$linee10_2 = str_replace('y',$dokk9,$linee10_2);
$linee10_2 = str_replace('u',$dokk10,$linee10_2);
$linee10_2 = str_replace('i',$dokk11,$linee10_2);
$linee10_2 = str_replace('o',$dokk12,$linee10_2);
$linee10_2 = str_replace('p',$dokk13,$linee10_2);
$linee10_2 = str_replace('a',$dokk14,$linee10_2);
$linee10_2 = str_replace('s',$dokk15,$linee10_2);
$linee10_2 = str_replace('d',$dokk16,$linee10_2);
$linee10_2 = str_replace('f',$dokk17,$linee10_2);
$linee10_2 = str_replace('g',$dokk18,$linee10_2);
$linee10_2 = str_replace('h',$dokk19,$linee10_2);
$linee10_2 = str_replace('j',$dokk20,$linee10_2);
$linee10_2 = str_replace('k',$dokk21,$linee10_2);
$linee10_2 = str_replace('l',$dokk22,$linee10_2);
$linee10_2 = str_replace('z',$dokk23,$linee10_2);
$linee10_2 = str_replace('x',$dokk24,$linee10_2);
$linee10_2 = str_replace('c',$dokk25,$linee10_2);
$linee10_2 = str_replace('v',$dokk26,$linee10_2);
$linee10_2 = str_replace('b',$dokk27,$linee10_2);
$linee10_2 = str_replace('n',$dokk28,$linee10_2);
$linee10_2 = str_replace('m',$dokk29,$linee10_2);
$linee10_2 = str_replace('*',$dokk30,$linee10_2);
}else{
$linee10_2 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee103.txt")){
$linee10_3 = file_get_contents("keyboard/create/linee103.txt");
if($linee10_3 != null ){
$linee10_3 = str_replace('1',$dokk1,$linee10_3);
$linee10_3 = str_replace('2',$dokk2,$linee10_3);
$linee10_3 = str_replace('3',$dokk3,$linee10_3);
$linee10_3 = str_replace('q',$dokk4,$linee10_3);
$linee10_3 = str_replace('w',$dokk5,$linee10_3);
$linee10_3 = str_replace('e',$dokk6,$linee10_3);
$linee10_3 = str_replace('r',$dokk7,$linee10_3);
$linee10_3 = str_replace('t',$dokk8,$linee10_3);
$linee10_3 = str_replace('y',$dokk9,$linee10_3);
$linee10_3 = str_replace('u',$dokk10,$linee10_3);
$linee10_3 = str_replace('i',$dokk11,$linee10_3);
$linee10_3 = str_replace('o',$dokk12,$linee10_3);
$linee10_3 = str_replace('p',$dokk13,$linee10_3);
$linee10_3 = str_replace('a',$dokk14,$linee10_3);
$linee10_3 = str_replace('s',$dokk15,$linee10_3);
$linee10_3 = str_replace('d',$dokk16,$linee10_3);
$linee10_3 = str_replace('f',$dokk17,$linee10_3);
$linee10_3 = str_replace('g',$dokk18,$linee10_3);
$linee10_3 = str_replace('h',$dokk19,$linee10_3);
$linee10_3 = str_replace('j',$dokk20,$linee10_3);
$linee10_3 = str_replace('k',$dokk21,$linee10_3);
$linee10_3 = str_replace('l',$dokk22,$linee10_3);
$linee10_3 = str_replace('z',$dokk23,$linee10_3);
$linee10_3 = str_replace('x',$dokk24,$linee10_3);
$linee10_3 = str_replace('c',$dokk25,$linee10_3);
$linee10_3 = str_replace('v',$dokk26,$linee10_3);
$linee10_3 = str_replace('b',$dokk27,$linee10_3);
$linee10_3 = str_replace('n',$dokk28,$linee10_3);
$linee10_3 = str_replace('m',$dokk29,$linee10_3);
$linee10_3 = str_replace('*',$dokk30,$linee10_3);
}else{
$linee10_3 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee104.txt")){
$linee10_4 = file_get_contents("keyboard/create/linee104.txt");
if($linee10_4 != null ){
$linee10_4 = str_replace('1',$dokk1,$linee10_4);
$linee10_4 = str_replace('2',$dokk2,$linee10_4);
$linee10_4 = str_replace('3',$dokk3,$linee10_4);
$linee10_4 = str_replace('q',$dokk4,$linee10_4);
$linee10_4 = str_replace('w',$dokk5,$linee10_4);
$linee10_4 = str_replace('e',$dokk6,$linee10_4);
$linee10_4 = str_replace('r',$dokk7,$linee10_4);
$linee10_4 = str_replace('t',$dokk8,$linee10_4);
$linee10_4 = str_replace('y',$dokk9,$linee10_4);
$linee10_4 = str_replace('u',$dokk10,$linee10_4);
$linee10_4 = str_replace('i',$dokk11,$linee10_4);
$linee10_4 = str_replace('o',$dokk12,$linee10_4);
$linee10_4 = str_replace('p',$dokk13,$linee10_4);
$linee10_4 = str_replace('a',$dokk14,$linee10_4);
$linee10_4 = str_replace('s',$dokk15,$linee10_4);
$linee10_4 = str_replace('d',$dokk16,$linee10_4);
$linee10_4 = str_replace('f',$dokk17,$linee10_4);
$linee10_4 = str_replace('g',$dokk18,$linee10_4);
$linee10_4 = str_replace('h',$dokk19,$linee10_4);
$linee10_4 = str_replace('j',$dokk20,$linee10_4);
$linee10_4 = str_replace('k',$dokk21,$linee10_4);
$linee10_4 = str_replace('l',$dokk22,$linee10_4);
$linee10_4 = str_replace('z',$dokk23,$linee10_4);
$linee10_4 = str_replace('x',$dokk24,$linee10_4);
$linee10_4 = str_replace('c',$dokk25,$linee10_4);
$linee10_4 = str_replace('v',$dokk26,$linee10_4);
$linee10_4 = str_replace('b',$dokk27,$linee10_4);
$linee10_4 = str_replace('n',$dokk28,$linee10_4);
$linee10_4 = str_replace('m',$dokk29,$linee10_4);
$linee10_4 = str_replace('*',$dokk30,$linee10_4);
}else{
$linee10_4 = "➕";
}}

$Button_set0 = json_encode(['inline_keyboard'=>[
[['text'=>"$linee1_1",'callback_data'=>'seter-linee11'],
['text'=>"$linee1_2",'callback_data'=>'seter-linee12'],
['text'=>"$linee1_3",'callback_data'=>'seter-linee13'],
['text'=>"$linee1_4",'callback_data'=>'seter-linee14']],
[['text'=>"$linee2_1",'callback_data'=>'seter-linee21'],
['text'=>"$linee2_2",'callback_data'=>'seter-linee22'],
['text'=>"$linee2_3",'callback_data'=>'seter-linee23'],
['text'=>"$linee2_4",'callback_data'=>'seter-linee24']],
[['text'=>"$linee3_1",'callback_data'=>'seter-linee31'],
['text'=>"$linee3_2",'callback_data'=>'seter-linee32'],
['text'=>"$linee3_3",'callback_data'=>'seter-linee33'],
['text'=>"$linee3_4",'callback_data'=>'seter-linee34']],
[['text'=>"$linee4_1",'callback_data'=>'seter-linee41'],
['text'=>"$linee4_2",'callback_data'=>'seter-linee42'],
['text'=>"$linee4_3",'callback_data'=>'seter-linee43'],
['text'=>"$linee4_4",'callback_data'=>'seter-linee44']],
[['text'=>"$linee5_1",'callback_data'=>'seter-linee51'],
['text'=>"$linee5_2",'callback_data'=>'seter-linee52'],
['text'=>"$linee5_3",'callback_data'=>'seter-linee53'],
['text'=>"$linee5_4",'callback_data'=>'seter-linee54']],
[['text'=>"$linee6_1",'callback_data'=>'seter-linee61'],
['text'=>"$linee6_2",'callback_data'=>'seter-linee62'],
['text'=>"$linee6_3",'callback_data'=>'seter-linee63'],
['text'=>"$linee6_4",'callback_data'=>'seter-linee64']],
[['text'=>"$linee7_1",'callback_data'=>'seter-linee71'],
['text'=>"$linee7_2",'callback_data'=>'seter-linee72'],
['text'=>"$linee7_3",'callback_data'=>'seter-linee73'],
['text'=>"$linee7_4",'callback_data'=>'seter-linee74']],
[['text'=>"$linee8_1",'callback_data'=>'seter-linee81'],
['text'=>"$linee8_2",'callback_data'=>'seter-linee82'],
['text'=>"$linee8_3",'callback_data'=>'seter-linee83'],
['text'=>"$linee8_4",'callback_data'=>'seter-linee84']],
[['text'=>"$linee9_1",'callback_data'=>'seter-linee91'],
['text'=>"$linee9_2",'callback_data'=>'seter-linee92'],
['text'=>"$linee9_3",'callback_data'=>'seter-linee93'],
['text'=>"$linee9_4",'callback_data'=>'seter-linee94']],
[['text'=>"$linee10_1",'callback_data'=>'seter-linee101'],
['text'=>"$linee10_2",'callback_data'=>'seter-linee102'],
['text'=>"$linee10_3",'callback_data'=>'seter-linee103'],
['text'=>"$linee10_4",'callback_data'=>'seter-linee104']],
]]);
SM($chatID,"✅با استفاده از تنظیمات این بخش میتوانید چینش کیبورد منوی اصلی ربات را شخصی سازی کنید

پس از اعمال تغییرات جهت بروزرسانی کیبورد /start بزنید",'html',null,$Button_set0);
}
//////////------------------------\\\\\\\\\\\\\\///
elseif(preg_match('/^seter-(.*)/', $data, $match)){
$dok = $match[1];
$Button_set_dok0 = json_encode(['inline_keyboard'=>[
[['text'=>"$dokk1",'callback_data'=>"setee-1_$dok"],
['text'=>"$dokk2",'callback_data'=>"setee-2_$dok"],
['text'=>"$dokk3",'callback_data'=>"setee-3_$dok"]],
[['text'=>"$dokk4",'callback_data'=>"setee-q_$dok"],
['text'=>"$dokk5",'callback_data'=>"setee-w_$dok"],
['text'=>"$dokk6",'callback_data'=>"setee-e_$dok"]],
[['text'=>"$dokk7",'callback_data'=>"setee-r_$dok"],
['text'=>"$dokk8",'callback_data'=>"setee-t_$dok"],
['text'=>"$dokk9",'callback_data'=>"setee-y_$dok"]],
[['text'=>"$dokk10",'callback_data'=>"setee-u_$dok"],
['text'=>"$dokk11",'callback_data'=>"setee-i_$dok"],
['text'=>"$dokk12",'callback_data'=>"setee-o_$dok"]],
[['text'=>"$dokk13",'callback_data'=>"setee-p_$dok"],
['text'=>"$dokk14",'callback_data'=>"setee-a_$dok"],
['text'=>"$dokk15",'callback_data'=>"setee-s_$dok"]],
[['text'=>"$dokk16",'callback_data'=>"setee-d_$dok"],
['text'=>"$dokk17",'callback_data'=>"setee-f_$dok"],
['text'=>"$dokk18",'callback_data'=>"setee-g_$dok"]],
[['text'=>"$dokk19",'callback_data'=>"setee-h_$dok"],
['text'=>"$dokk20",'callback_data'=>"setee-j_$dok"],
['text'=>"$dokk21",'callback_data'=>"setee-k_$dok"]],
[['text'=>"$dokk22",'callback_data'=>"setee-l_$dok"],
['text'=>"$dokk23",'callback_data'=>"setee-z_$dok"],
['text'=>"$dokk24",'callback_data'=>"setee-x_$dok"]],
[['text'=>"$dokk25",'callback_data'=>"setee-c_$dok"],
['text'=>"$dokk26",'callback_data'=>"setee-v_$dok"],
['text'=>"$dokk27",'callback_data'=>"setee-b_$dok"]],
[['text'=>"$dokk28",'callback_data'=>"setee-n_$dok"],
['text'=>"$dokk29",'callback_data'=>"setee-m_$dok"],
['text'=>"$dokk30",'callback_data'=>"setee-*_$dok"]],
[['text'=>"🔰خالی🔰",'callback_data'=>"dell-$dok"]],
]]);
Editmessagetext($chatID,$msg_id,"👈️ گزینه مورد نظر را انتخاب نمائید.",$Button_set_dok0);
saveJson("melat/$userID.json",$user);
}
//////////------------------------\\\\\\\\\\\\\\//
elseif(preg_match('/^setee-(.*)_(.*)/', $data, $match)){
$name = $match[1];
$doke = $match[2];
Save("keyboard/create/$doke.txt",$name);
//////////------------------------\\\\\\\\\\\\\\///
//////////------------------------\\\\\\\\\\\\\\/
//////////////////////////////////////////////////////////////////////////////
if(file_exists("keyboard/create/linee11.txt")){
$linee1_1 = file_get_contents("keyboard/create/linee11.txt");
if($linee1_1 != null ){
$linee1_1 = str_replace('1',$dokk1,$linee1_1);
$linee1_1 = str_replace('2',$dokk2,$linee1_1);
$linee1_1 = str_replace('3',$dokk3,$linee1_1);
$linee1_1 = str_replace('q',$dokk4,$linee1_1);
$linee1_1 = str_replace('w',$dokk5,$linee1_1);
$linee1_1 = str_replace('e',$dokk6,$linee1_1);
$linee1_1 = str_replace('r',$dokk7,$linee1_1);
$linee1_1 = str_replace('t',$dokk8,$linee1_1);
$linee1_1 = str_replace('y',$dokk9,$linee1_1);
$linee1_1 = str_replace('u',$dokk10,$linee1_1);
$linee1_1 = str_replace('i',$dokk11,$linee1_1);
$linee1_1 = str_replace('o',$dokk12,$linee1_1);
$linee1_1 = str_replace('p',$dokk13,$linee1_1);
$linee1_1 = str_replace('a',$dokk14,$linee1_1);
$linee1_1 = str_replace('s',$dokk15,$linee1_1);
$linee1_1 = str_replace('d',$dokk16,$linee1_1);
$linee1_1 = str_replace('f',$dokk17,$linee1_1);
$linee1_1 = str_replace('g',$dokk18,$linee1_1);
$linee1_1 = str_replace('h',$dokk19,$linee1_1);
$linee1_1 = str_replace('j',$dokk20,$linee1_1);
$linee1_1 = str_replace('k',$dokk21,$linee1_1);
$linee1_1 = str_replace('l',$dokk22,$linee1_1);
$linee1_1 = str_replace('z',$dokk23,$linee1_1);
$linee1_1 = str_replace('x',$dokk24,$linee1_1);
$linee1_1 = str_replace('c',$dokk25,$linee1_1);
$linee1_1 = str_replace('v',$dokk26,$linee1_1);
$linee1_1 = str_replace('b',$dokk27,$linee1_1);
$linee1_1 = str_replace('n',$dokk28,$linee1_1);
$linee1_1 = str_replace('m',$dokk29,$linee1_1);
$linee1_1 = str_replace('*',$dokk30,$linee1_1);
}else{
$linee1_1 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee12.txt")){
$linee1_2 = file_get_contents("keyboard/create/linee12.txt");
if($linee1_2 != null ){
$linee1_2 = str_replace('1',$dokk1,$linee1_2);
$linee1_2 = str_replace('2',$dokk2,$linee1_2);
$linee1_2 = str_replace('3',$dokk3,$linee1_2);
$linee1_2 = str_replace('q',$dokk4,$linee1_2);
$linee1_2 = str_replace('w',$dokk5,$linee1_2);
$linee1_2 = str_replace('e',$dokk6,$linee1_2);
$linee1_2 = str_replace('r',$dokk7,$linee1_2);
$linee1_2 = str_replace('t',$dokk8,$linee1_2);
$linee1_2 = str_replace('y',$dokk9,$linee1_2);
$linee1_2 = str_replace('u',$dokk10,$linee1_2);
$linee1_2 = str_replace('i',$dokk11,$linee1_2);
$linee1_2 = str_replace('o',$dokk12,$linee1_2);
$linee1_2 = str_replace('p',$dokk13,$linee1_2);
$linee1_2 = str_replace('a',$dokk14,$linee1_2);
$linee1_2 = str_replace('s',$dokk15,$linee1_2);
$linee1_2 = str_replace('d',$dokk16,$linee1_2);
$linee1_2 = str_replace('f',$dokk17,$linee1_2);
$linee1_2 = str_replace('g',$dokk18,$linee1_2);
$linee1_2 = str_replace('h',$dokk19,$linee1_2);
$linee1_2 = str_replace('j',$dokk20,$linee1_2);
$linee1_2 = str_replace('k',$dokk21,$linee1_2);
$linee1_2 = str_replace('l',$dokk22,$linee1_2);
$linee1_2 = str_replace('z',$dokk23,$linee1_2);
$linee1_2 = str_replace('x',$dokk24,$linee1_2);
$linee1_2 = str_replace('c',$dokk25,$linee1_2);
$linee1_2 = str_replace('v',$dokk26,$linee1_2);
$linee1_2 = str_replace('b',$dokk27,$linee1_2);
$linee1_2 = str_replace('n',$dokk28,$linee1_2);
$linee1_2 = str_replace('m',$dokk29,$linee1_2);
$linee1_2 = str_replace('*',$dokk30,$linee1_2);
}else{
$linee1_2 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee13.txt")){
$linee1_3 = file_get_contents("keyboard/create/linee13.txt");
if($linee1_3 != null ){
$linee1_3 = str_replace('1',$dokk1,$linee1_3);
$linee1_3 = str_replace('2',$dokk2,$linee1_3);
$linee1_3 = str_replace('3',$dokk3,$linee1_3);
$linee1_3 = str_replace('q',$dokk4,$linee1_3);
$linee1_3 = str_replace('w',$dokk5,$linee1_3);
$linee1_3 = str_replace('e',$dokk6,$linee1_3);
$linee1_3 = str_replace('r',$dokk7,$linee1_3);
$linee1_3 = str_replace('t',$dokk8,$linee1_3);
$linee1_3 = str_replace('y',$dokk9,$linee1_3);
$linee1_3 = str_replace('u',$dokk10,$linee1_3);
$linee1_3 = str_replace('i',$dokk11,$linee1_3);
$linee1_3 = str_replace('o',$dokk12,$linee1_3);
$linee1_3 = str_replace('p',$dokk13,$linee1_3);
$linee1_3 = str_replace('a',$dokk14,$linee1_3);
$linee1_3 = str_replace('s',$dokk15,$linee1_3);
$linee1_3 = str_replace('d',$dokk16,$linee1_3);
$linee1_3 = str_replace('f',$dokk17,$linee1_3);
$linee1_3 = str_replace('g',$dokk18,$linee1_3);
$linee1_3 = str_replace('h',$dokk19,$linee1_3);
$linee1_3 = str_replace('j',$dokk20,$linee1_3);
$linee1_3 = str_replace('k',$dokk21,$linee1_3);
$linee1_3 = str_replace('l',$dokk22,$linee1_3);
$linee1_3 = str_replace('z',$dokk23,$linee1_3);
$linee1_3 = str_replace('x',$dokk24,$linee1_3);
$linee1_3 = str_replace('c',$dokk25,$linee1_3);
$linee1_3 = str_replace('v',$dokk26,$linee1_3);
$linee1_3 = str_replace('b',$dokk27,$linee1_3);
$linee1_3 = str_replace('n',$dokk28,$linee1_3);
$linee1_3 = str_replace('m',$dokk29,$linee1_3);
$linee1_3 = str_replace('*',$dokk30,$linee1_3);
}else{
$linee1_3 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee14.txt")){
$linee1_4 = file_get_contents("keyboard/create/linee14.txt");
if($linee1_4 != null ){
$linee1_4 = str_replace('1',$dokk1,$linee1_4);
$linee1_4 = str_replace('2',$dokk2,$linee1_4);
$linee1_4 = str_replace('3',$dokk3,$linee1_4);
$linee1_4 = str_replace('q',$dokk4,$linee1_4);
$linee1_4 = str_replace('w',$dokk5,$linee1_4);
$linee1_4 = str_replace('e',$dokk6,$linee1_4);
$linee1_4 = str_replace('r',$dokk7,$linee1_4);
$linee1_4 = str_replace('t',$dokk8,$linee1_4);
$linee1_4 = str_replace('y',$dokk9,$linee1_4);
$linee1_4 = str_replace('u',$dokk10,$linee1_4);
$linee1_4 = str_replace('i',$dokk11,$linee1_4);
$linee1_4 = str_replace('o',$dokk12,$linee1_4);
$linee1_4 = str_replace('p',$dokk13,$linee1_4);
$linee1_4 = str_replace('a',$dokk14,$linee1_4);
$linee1_4 = str_replace('s',$dokk15,$linee1_4);
$linee1_4 = str_replace('d',$dokk16,$linee1_4);
$linee1_4 = str_replace('f',$dokk17,$linee1_4);
$linee1_4 = str_replace('g',$dokk18,$linee1_4);
$linee1_4 = str_replace('h',$dokk19,$linee1_4);
$linee1_4 = str_replace('j',$dokk20,$linee1_4);
$linee1_4 = str_replace('k',$dokk21,$linee1_4);
$linee1_4 = str_replace('l',$dokk22,$linee1_4);
$linee1_4 = str_replace('z',$dokk23,$linee1_4);
$linee1_4 = str_replace('x',$dokk24,$linee1_4);
$linee1_4 = str_replace('c',$dokk25,$linee1_4);
$linee1_4 = str_replace('v',$dokk26,$linee1_4);
$linee1_4 = str_replace('b',$dokk27,$linee1_4);
$linee1_4 = str_replace('n',$dokk28,$linee1_4);
$linee1_4 = str_replace('m',$dokk29,$linee1_4);
$linee1_4 = str_replace('*',$dokk30,$linee1_4);
}else{
$linee1_4 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee21.txt")){
$linee2_1 = file_get_contents("keyboard/create/linee21.txt");
if($linee2_1 != null ){
$linee2_1 = str_replace('1',$dokk1,$linee2_1);
$linee2_1 = str_replace('2',$dokk2,$linee2_1);
$linee2_1 = str_replace('3',$dokk3,$linee2_1);
$linee2_1 = str_replace('q',$dokk4,$linee2_1);
$linee2_1 = str_replace('w',$dokk5,$linee2_1);
$linee2_1 = str_replace('e',$dokk6,$linee2_1);
$linee2_1 = str_replace('r',$dokk7,$linee2_1);
$linee2_1 = str_replace('t',$dokk8,$linee2_1);
$linee2_1 = str_replace('y',$dokk9,$linee2_1);
$linee2_1 = str_replace('u',$dokk10,$linee2_1);
$linee2_1 = str_replace('i',$dokk11,$linee2_1);
$linee2_1 = str_replace('o',$dokk12,$linee2_1);
$linee2_1 = str_replace('p',$dokk13,$linee2_1);
$linee2_1 = str_replace('a',$dokk14,$linee2_1);
$linee2_1 = str_replace('s',$dokk15,$linee2_1);
$linee2_1 = str_replace('d',$dokk16,$linee2_1);
$linee2_1 = str_replace('f',$dokk17,$linee2_1);
$linee2_1 = str_replace('g',$dokk18,$linee2_1);
$linee2_1 = str_replace('h',$dokk19,$linee2_1);
$linee2_1 = str_replace('j',$dokk20,$linee2_1);
$linee2_1 = str_replace('k',$dokk21,$linee2_1);
$linee2_1 = str_replace('l',$dokk22,$linee2_1);
$linee2_1 = str_replace('z',$dokk23,$linee2_1);
$linee2_1 = str_replace('x',$dokk24,$linee2_1);
$linee2_1 = str_replace('c',$dokk25,$linee2_1);
$linee2_1 = str_replace('v',$dokk26,$linee2_1);
$linee2_1 = str_replace('b',$dokk27,$linee2_1);
$linee2_1 = str_replace('n',$dokk28,$linee2_1);
$linee2_1 = str_replace('m',$dokk29,$linee2_1);
$linee2_1 = str_replace('*',$dokk30,$linee2_1);
}else{
$linee2_1 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee22.txt")){
$linee2_2 = file_get_contents("keyboard/create/linee22.txt");
if($linee2_2 != null ){
$linee2_2 = str_replace('1',$dokk1,$linee2_2);
$linee2_2 = str_replace('2',$dokk2,$linee2_2);
$linee2_2 = str_replace('3',$dokk3,$linee2_2);
$linee2_2 = str_replace('q',$dokk4,$linee2_2);
$linee2_2 = str_replace('w',$dokk5,$linee2_2);
$linee2_2 = str_replace('e',$dokk6,$linee2_2);
$linee2_2 = str_replace('r',$dokk7,$linee2_2);
$linee2_2 = str_replace('t',$dokk8,$linee2_2);
$linee2_2 = str_replace('y',$dokk9,$linee2_2);
$linee2_2 = str_replace('u',$dokk10,$linee2_2);
$linee2_2 = str_replace('i',$dokk11,$linee2_2);
$linee2_2 = str_replace('o',$dokk12,$linee2_2);
$linee2_2 = str_replace('p',$dokk13,$linee2_2);
$linee2_2 = str_replace('a',$dokk14,$linee2_2);
$linee2_2 = str_replace('s',$dokk15,$linee2_2);
$linee2_2 = str_replace('d',$dokk16,$linee2_2);
$linee2_2 = str_replace('f',$dokk17,$linee2_2);
$linee2_2 = str_replace('g',$dokk18,$linee2_2);
$linee2_2 = str_replace('h',$dokk19,$linee2_2);
$linee2_2 = str_replace('j',$dokk20,$linee2_2);
$linee2_2 = str_replace('k',$dokk21,$linee2_2);
$linee2_2 = str_replace('l',$dokk22,$linee2_2);
$linee2_2 = str_replace('z',$dokk23,$linee2_2);
$linee2_2 = str_replace('x',$dokk24,$linee2_2);
$linee2_2 = str_replace('c',$dokk25,$linee2_2);
$linee2_2 = str_replace('v',$dokk26,$linee2_2);
$linee2_2 = str_replace('b',$dokk27,$linee2_2);
$linee2_2 = str_replace('n',$dokk28,$linee2_2);
$linee2_2 = str_replace('m',$dokk29,$linee2_2);
$linee2_2 = str_replace('*',$dokk30,$linee2_2);
}else{
$linee2_2 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee23.txt")){
$linee2_3 = file_get_contents("keyboard/create/linee23.txt");
if($linee2_3 != null ){
$linee2_3 = str_replace('1',$dokk1,$linee2_3);
$linee2_3 = str_replace('2',$dokk2,$linee2_3);
$linee2_3 = str_replace('3',$dokk3,$linee2_3);
$linee2_3 = str_replace('q',$dokk4,$linee2_3);
$linee2_3 = str_replace('w',$dokk5,$linee2_3);
$linee2_3 = str_replace('e',$dokk6,$linee2_3);
$linee2_3 = str_replace('r',$dokk7,$linee2_3);
$linee2_3 = str_replace('t',$dokk8,$linee2_3);
$linee2_3 = str_replace('y',$dokk9,$linee2_3);
$linee2_3 = str_replace('u',$dokk10,$linee2_3);
$linee2_3 = str_replace('i',$dokk11,$linee2_3);
$linee2_3 = str_replace('o',$dokk12,$linee2_3);
$linee2_3 = str_replace('p',$dokk13,$linee2_3);
$linee2_3 = str_replace('a',$dokk14,$linee2_3);
$linee2_3 = str_replace('s',$dokk15,$linee2_3);
$linee2_3 = str_replace('d',$dokk16,$linee2_3);
$linee2_3 = str_replace('f',$dokk17,$linee2_3);
$linee2_3 = str_replace('g',$dokk18,$linee2_3);
$linee2_3 = str_replace('h',$dokk19,$linee2_3);
$linee2_3 = str_replace('j',$dokk20,$linee2_3);
$linee2_3 = str_replace('k',$dokk21,$linee2_3);
$linee2_3 = str_replace('l',$dokk22,$linee2_3);
$linee2_3 = str_replace('z',$dokk23,$linee2_3);
$linee2_3 = str_replace('x',$dokk24,$linee2_3);
$linee2_3 = str_replace('c',$dokk25,$linee2_3);
$linee2_3 = str_replace('v',$dokk26,$linee2_3);
$linee2_3 = str_replace('b',$dokk27,$linee2_3);
$linee2_3 = str_replace('n',$dokk28,$linee2_3);
$linee2_3 = str_replace('m',$dokk29,$linee2_3);
$linee2_3 = str_replace('*',$dokk30,$linee2_3);
}else{
$linee2_3 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee24.txt")){
$linee2_4 = file_get_contents("keyboard/create/linee24.txt");
if($linee2_4 != null ){
$linee2_4 = str_replace('1',$dokk1,$linee2_4);
$linee2_4 = str_replace('2',$dokk2,$linee2_4);
$linee2_4 = str_replace('3',$dokk3,$linee2_4);
$linee2_4 = str_replace('q',$dokk4,$linee2_4);
$linee2_4 = str_replace('w',$dokk5,$linee2_4);
$linee2_4 = str_replace('e',$dokk6,$linee2_4);
$linee2_4 = str_replace('r',$dokk7,$linee2_4);
$linee2_4 = str_replace('t',$dokk8,$linee2_4);
$linee2_4 = str_replace('y',$dokk9,$linee2_4);
$linee2_4 = str_replace('u',$dokk10,$linee2_4);
$linee2_4 = str_replace('i',$dokk11,$linee2_4);
$linee2_4 = str_replace('o',$dokk12,$linee2_4);
$linee2_4 = str_replace('p',$dokk13,$linee2_4);
$linee2_4 = str_replace('a',$dokk14,$linee2_4);
$linee2_4 = str_replace('s',$dokk15,$linee2_4);
$linee2_4 = str_replace('d',$dokk16,$linee2_4);
$linee2_4 = str_replace('f',$dokk17,$linee2_4);
$linee2_4 = str_replace('g',$dokk18,$linee2_4);
$linee2_4 = str_replace('h',$dokk19,$linee2_4);
$linee2_4 = str_replace('j',$dokk20,$linee2_4);
$linee2_4 = str_replace('k',$dokk21,$linee2_4);
$linee2_4 = str_replace('l',$dokk22,$linee2_4);
$linee2_4 = str_replace('z',$dokk23,$linee2_4);
$linee2_4 = str_replace('x',$dokk24,$linee2_4);
$linee2_4 = str_replace('c',$dokk25,$linee2_4);
$linee2_4 = str_replace('v',$dokk26,$linee2_4);
$linee2_4 = str_replace('b',$dokk27,$linee2_4);
$linee2_4 = str_replace('n',$dokk28,$linee2_4);
$linee2_4 = str_replace('m',$dokk29,$linee2_4);
$linee2_4 = str_replace('*',$dokk30,$linee2_4);
}else{
$linee2_4 = "➕";
}}

//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee31.txt")){
$linee3_1 = file_get_contents("keyboard/create/linee31.txt");
if($linee3_1 != null ){
$linee3_1 = str_replace('1',$dokk1,$linee3_1);
$linee3_1 = str_replace('2',$dokk2,$linee3_1);
$linee3_1 = str_replace('3',$dokk3,$linee3_1);
$linee3_1 = str_replace('q',$dokk4,$linee3_1);
$linee3_1 = str_replace('w',$dokk5,$linee3_1);
$linee3_1 = str_replace('e',$dokk6,$linee3_1);
$linee3_1 = str_replace('r',$dokk7,$linee3_1);
$linee3_1 = str_replace('t',$dokk8,$linee3_1);
$linee3_1 = str_replace('y',$dokk9,$linee3_1);
$linee3_1 = str_replace('u',$dokk10,$linee3_1);
$linee3_1 = str_replace('i',$dokk11,$linee3_1);
$linee3_1 = str_replace('o',$dokk12,$linee3_1);
$linee3_1 = str_replace('p',$dokk13,$linee3_1);
$linee3_1 = str_replace('a',$dokk14,$linee3_1);
$linee3_1 = str_replace('s',$dokk15,$linee3_1);
$linee3_1 = str_replace('d',$dokk16,$linee3_1);
$linee3_1 = str_replace('f',$dokk17,$linee3_1);
$linee3_1 = str_replace('g',$dokk18,$linee3_1);
$linee3_1 = str_replace('h',$dokk19,$linee3_1);
$linee3_1 = str_replace('j',$dokk20,$linee3_1);
$linee3_1 = str_replace('k',$dokk21,$linee3_1);
$linee3_1 = str_replace('l',$dokk22,$linee3_1);
$linee3_1 = str_replace('z',$dokk23,$linee3_1);
$linee3_1 = str_replace('x',$dokk24,$linee3_1);
$linee3_1 = str_replace('c',$dokk25,$linee3_1);
$linee3_1 = str_replace('v',$dokk26,$linee3_1);
$linee3_1 = str_replace('b',$dokk27,$linee3_1);
$linee3_1 = str_replace('n',$dokk28,$linee3_1);
$linee3_1 = str_replace('m',$dokk29,$linee3_1);
$linee3_1 = str_replace('*',$dokk30,$linee3_1);
}else{
$linee3_1 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee32.txt")){
$linee3_2 = file_get_contents("keyboard/create/linee32.txt");
if($linee3_2 != null ){
$linee3_2 = str_replace('1',$dokk1,$linee3_2);
$linee3_2 = str_replace('2',$dokk2,$linee3_2);
$linee3_2 = str_replace('3',$dokk3,$linee3_2);
$linee3_2 = str_replace('q',$dokk4,$linee3_2);
$linee3_2 = str_replace('w',$dokk5,$linee3_2);
$linee3_2 = str_replace('e',$dokk6,$linee3_2);
$linee3_2 = str_replace('r',$dokk7,$linee3_2);
$linee3_2 = str_replace('t',$dokk8,$linee3_2);
$linee3_2 = str_replace('y',$dokk9,$linee3_2);
$linee3_2 = str_replace('u',$dokk10,$linee3_2);
$linee3_2 = str_replace('i',$dokk11,$linee3_2);
$linee3_2 = str_replace('o',$dokk12,$linee3_2);
$linee3_2 = str_replace('p',$dokk13,$linee3_2);
$linee3_2 = str_replace('a',$dokk14,$linee3_2);
$linee3_2 = str_replace('s',$dokk15,$linee3_2);
$linee3_2 = str_replace('d',$dokk16,$linee3_2);
$linee3_2 = str_replace('f',$dokk17,$linee3_2);
$linee3_2 = str_replace('g',$dokk18,$linee3_2);
$linee3_2 = str_replace('h',$dokk19,$linee3_2);
$linee3_2 = str_replace('j',$dokk20,$linee3_2);
$linee3_2 = str_replace('k',$dokk21,$linee3_2);
$linee3_2 = str_replace('l',$dokk22,$linee3_2);
$linee3_2 = str_replace('z',$dokk23,$linee3_2);
$linee3_2 = str_replace('x',$dokk24,$linee3_2);
$linee3_2 = str_replace('c',$dokk25,$linee3_2);
$linee3_2 = str_replace('v',$dokk26,$linee3_2);
$linee3_2 = str_replace('b',$dokk27,$linee3_2);
$linee3_2 = str_replace('n',$dokk28,$linee3_2);
$linee3_2 = str_replace('m',$dokk29,$linee3_2);
$linee3_2 = str_replace('*',$dokk30,$linee3_2);
}else{
$linee3_2 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee33.txt")){
$linee3_3 = file_get_contents("keyboard/create/linee33.txt");
if($linee3_3 != null ){
$linee3_3 = str_replace('1',$dokk1,$linee3_3);
$linee3_3 = str_replace('2',$dokk2,$linee3_3);
$linee3_3 = str_replace('3',$dokk3,$linee3_3);
$linee3_3 = str_replace('q',$dokk4,$linee3_3);
$linee3_3 = str_replace('w',$dokk5,$linee3_3);
$linee3_3 = str_replace('e',$dokk6,$linee3_3);
$linee3_3 = str_replace('r',$dokk7,$linee3_3);
$linee3_3 = str_replace('t',$dokk8,$linee3_3);
$linee3_3 = str_replace('y',$dokk9,$linee3_3);
$linee3_3 = str_replace('u',$dokk10,$linee3_3);
$linee3_3 = str_replace('i',$dokk11,$linee3_3);
$linee3_3 = str_replace('o',$dokk12,$linee3_3);
$linee3_3 = str_replace('p',$dokk13,$linee3_3);
$linee3_3 = str_replace('a',$dokk14,$linee3_3);
$linee3_3 = str_replace('s',$dokk15,$linee3_3);
$linee3_3 = str_replace('d',$dokk16,$linee3_3);
$linee3_3 = str_replace('f',$dokk17,$linee3_3);
$linee3_3 = str_replace('g',$dokk18,$linee3_3);
$linee3_3 = str_replace('h',$dokk19,$linee3_3);
$linee3_3 = str_replace('j',$dokk20,$linee3_3);
$linee3_3 = str_replace('k',$dokk21,$linee3_3);
$linee3_3 = str_replace('l',$dokk22,$linee3_3);
$linee3_3 = str_replace('z',$dokk23,$linee3_3);
$linee3_3 = str_replace('x',$dokk24,$linee3_3);
$linee3_3 = str_replace('c',$dokk25,$linee3_3);
$linee3_3 = str_replace('v',$dokk26,$linee3_3);
$linee3_3 = str_replace('b',$dokk27,$linee3_3);
$linee3_3 = str_replace('n',$dokk28,$linee3_3);
$linee3_3 = str_replace('m',$dokk29,$linee3_3);
$linee3_3 = str_replace('*',$dokk30,$linee3_3);
}else{
$linee3_3 = "➕";
}}//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee34.txt")){
$linee3_4 = file_get_contents("keyboard/create/linee34.txt");
if($linee3_4 != null ){
$linee3_4 = str_replace('1',$dokk1,$linee3_4);
$linee3_4 = str_replace('2',$dokk2,$linee3_4);
$linee3_4 = str_replace('3',$dokk3,$linee3_4);
$linee3_4 = str_replace('q',$dokk4,$linee3_4);
$linee3_4 = str_replace('w',$dokk5,$linee3_4);
$linee3_4 = str_replace('e',$dokk6,$linee3_4);
$linee3_4 = str_replace('r',$dokk7,$linee3_4);
$linee3_4 = str_replace('t',$dokk8,$linee3_4);
$linee3_4 = str_replace('y',$dokk9,$linee3_4);
$linee3_4 = str_replace('u',$dokk10,$linee3_4);
$linee3_4 = str_replace('i',$dokk11,$linee3_4);
$linee3_4 = str_replace('o',$dokk12,$linee3_4);
$linee3_4 = str_replace('p',$dokk13,$linee3_4);
$linee3_4 = str_replace('a',$dokk14,$linee3_4);
$linee3_4 = str_replace('s',$dokk15,$linee3_4);
$linee3_4 = str_replace('d',$dokk16,$linee3_4);
$linee3_4 = str_replace('f',$dokk17,$linee3_4);
$linee3_4 = str_replace('g',$dokk18,$linee3_4);
$linee3_4 = str_replace('h',$dokk19,$linee3_4);
$linee3_4 = str_replace('j',$dokk20,$linee3_4);
$linee3_4 = str_replace('k',$dokk21,$linee3_4);
$linee3_4 = str_replace('l',$dokk22,$linee3_4);
$linee3_4 = str_replace('z',$dokk23,$linee3_4);
$linee3_4 = str_replace('x',$dokk24,$linee3_4);
$linee3_4 = str_replace('c',$dokk25,$linee3_4);
$linee3_4 = str_replace('v',$dokk26,$linee3_4);
$linee3_4 = str_replace('b',$dokk27,$linee3_4);
$linee3_4 = str_replace('n',$dokk28,$linee3_4);
$linee3_4 = str_replace('m',$dokk29,$linee3_4);
$linee3_4 = str_replace('*',$dokk30,$linee3_4);
}else{
$linee3_4 = "➕";
}}

//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee41.txt")){
$linee4_1 = file_get_contents("keyboard/create/linee41.txt");
if($linee4_1 != null ){
$linee4_1 = str_replace('1',$dokk1,$linee4_1);
$linee4_1 = str_replace('2',$dokk2,$linee4_1);
$linee4_1 = str_replace('3',$dokk3,$linee4_1);
$linee4_1 = str_replace('q',$dokk4,$linee4_1);
$linee4_1 = str_replace('w',$dokk5,$linee4_1);
$linee4_1 = str_replace('e',$dokk6,$linee4_1);
$linee4_1 = str_replace('r',$dokk7,$linee4_1);
$linee4_1 = str_replace('t',$dokk8,$linee4_1);
$linee4_1 = str_replace('y',$dokk9,$linee4_1);
$linee4_1 = str_replace('u',$dokk10,$linee4_1);
$linee4_1 = str_replace('i',$dokk11,$linee4_1);
$linee4_1 = str_replace('o',$dokk12,$linee4_1);
$linee4_1 = str_replace('p',$dokk13,$linee4_1);
$linee4_1 = str_replace('a',$dokk14,$linee4_1);
$linee4_1 = str_replace('s',$dokk15,$linee4_1);
$linee4_1 = str_replace('d',$dokk16,$linee4_1);
$linee4_1 = str_replace('f',$dokk17,$linee4_1);
$linee4_1 = str_replace('g',$dokk18,$linee4_1);
$linee4_1 = str_replace('h',$dokk19,$linee4_1);
$linee4_1 = str_replace('j',$dokk20,$linee4_1);
$linee4_1 = str_replace('k',$dokk21,$linee4_1);
$linee4_1 = str_replace('l',$dokk22,$linee4_1);
$linee4_1 = str_replace('z',$dokk23,$linee4_1);
$linee4_1 = str_replace('x',$dokk24,$linee4_1);
$linee4_1 = str_replace('c',$dokk25,$linee4_1);
$linee4_1 = str_replace('v',$dokk26,$linee4_1);
$linee4_1 = str_replace('b',$dokk27,$linee4_1);
$linee4_1 = str_replace('n',$dokk28,$linee4_1);
$linee4_1 = str_replace('m',$dokk29,$linee4_1);
$linee4_1 = str_replace('*',$dokk30,$linee4_1);
}else{
$linee4_1 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee42.txt")){
$linee4_2 = file_get_contents("keyboard/create/linee42.txt");
if($linee4_2 != null ){
$linee4_2 = str_replace('1',$dokk1,$linee4_2);
$linee4_2 = str_replace('2',$dokk2,$linee4_2);
$linee4_2 = str_replace('3',$dokk3,$linee4_2);
$linee4_2 = str_replace('q',$dokk4,$linee4_2);
$linee4_2 = str_replace('w',$dokk5,$linee4_2);
$linee4_2 = str_replace('e',$dokk6,$linee4_2);
$linee4_2 = str_replace('r',$dokk7,$linee4_2);
$linee4_2 = str_replace('t',$dokk8,$linee4_2);
$linee4_2 = str_replace('y',$dokk9,$linee4_2);
$linee4_2 = str_replace('u',$dokk10,$linee4_2);
$linee4_2 = str_replace('i',$dokk11,$linee4_2);
$linee4_2 = str_replace('o',$dokk12,$linee4_2);
$linee4_2 = str_replace('p',$dokk13,$linee4_2);
$linee4_2 = str_replace('a',$dokk14,$linee4_2);
$linee4_2 = str_replace('s',$dokk15,$linee4_2);
$linee4_2 = str_replace('d',$dokk16,$linee4_2);
$linee4_2 = str_replace('f',$dokk17,$linee4_2);
$linee4_2 = str_replace('g',$dokk18,$linee4_2);
$linee4_2 = str_replace('h',$dokk19,$linee4_2);
$linee4_2 = str_replace('j',$dokk20,$linee4_2);
$linee4_2 = str_replace('k',$dokk21,$linee4_2);
$linee4_2 = str_replace('l',$dokk22,$linee4_2);
$linee4_2 = str_replace('z',$dokk23,$linee4_2);
$linee4_2 = str_replace('x',$dokk24,$linee4_2);
$linee4_2 = str_replace('c',$dokk25,$linee4_2);
$linee4_2 = str_replace('v',$dokk26,$linee4_2);
$linee4_2 = str_replace('b',$dokk27,$linee4_2);
$linee4_2 = str_replace('n',$dokk28,$linee4_2);
$linee4_2 = str_replace('m',$dokk29,$linee4_2);
$linee4_2 = str_replace('*',$dokk30,$linee4_2);
}else{
$linee4_2 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee43.txt")){
$linee4_3 = file_get_contents("keyboard/create/linee43.txt");
if($linee4_3 != null ){
$linee4_3 = str_replace('1',$dokk1,$linee4_3);
$linee4_3 = str_replace('2',$dokk2,$linee4_3);
$linee4_3 = str_replace('3',$dokk3,$linee4_3);
$linee4_3 = str_replace('q',$dokk4,$linee4_3);
$linee4_3 = str_replace('w',$dokk5,$linee4_3);
$linee4_3 = str_replace('e',$dokk6,$linee4_3);
$linee4_3 = str_replace('r',$dokk7,$linee4_3);
$linee4_3 = str_replace('t',$dokk8,$linee4_3);
$linee4_3 = str_replace('y',$dokk9,$linee4_3);
$linee4_3 = str_replace('u',$dokk10,$linee4_3);
$linee4_3 = str_replace('i',$dokk11,$linee4_3);
$linee4_3 = str_replace('o',$dokk12,$linee4_3);
$linee4_3 = str_replace('p',$dokk13,$linee4_3);
$linee4_3 = str_replace('a',$dokk14,$linee4_3);
$linee4_3 = str_replace('s',$dokk15,$linee4_3);
$linee4_3 = str_replace('d',$dokk16,$linee4_3);
$linee4_3 = str_replace('f',$dokk17,$linee4_3);
$linee4_3 = str_replace('g',$dokk18,$linee4_3);
$linee4_3 = str_replace('h',$dokk19,$linee4_3);
$linee4_3 = str_replace('j',$dokk20,$linee4_3);
$linee4_3 = str_replace('k',$dokk21,$linee4_3);
$linee4_3 = str_replace('l',$dokk22,$linee4_3);
$linee4_3 = str_replace('z',$dokk23,$linee4_3);
$linee4_3 = str_replace('x',$dokk24,$linee4_3);
$linee4_3 = str_replace('c',$dokk25,$linee4_3);
$linee4_3 = str_replace('v',$dokk26,$linee4_3);
$linee4_3 = str_replace('b',$dokk27,$linee4_3);
$linee4_3 = str_replace('n',$dokk28,$linee4_3);
$linee4_3 = str_replace('m',$dokk29,$linee4_3);
$linee4_3 = str_replace('*',$dokk30,$linee4_3);
}else{
$linee4_3 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee44.txt")){
$linee4_4 = file_get_contents("keyboard/create/linee44.txt");
if($linee4_4 != null ){
$linee4_4 = str_replace('1',$dokk1,$linee4_4);
$linee4_4 = str_replace('2',$dokk2,$linee4_4);
$linee4_4 = str_replace('3',$dokk3,$linee4_4);
$linee4_4 = str_replace('q',$dokk4,$linee4_4);
$linee4_4 = str_replace('w',$dokk5,$linee4_4);
$linee4_4 = str_replace('e',$dokk6,$linee4_4);
$linee4_4 = str_replace('r',$dokk7,$linee4_4);
$linee4_4 = str_replace('t',$dokk8,$linee4_4);
$linee4_4 = str_replace('y',$dokk9,$linee4_4);
$linee4_4 = str_replace('u',$dokk10,$linee4_4);
$linee4_4 = str_replace('i',$dokk11,$linee4_4);
$linee4_4 = str_replace('o',$dokk12,$linee4_4);
$linee4_4 = str_replace('p',$dokk13,$linee4_4);
$linee4_4 = str_replace('a',$dokk14,$linee4_4);
$linee4_4 = str_replace('s',$dokk15,$linee4_4);
$linee4_4 = str_replace('d',$dokk16,$linee4_4);
$linee4_4 = str_replace('f',$dokk17,$linee4_4);
$linee4_4 = str_replace('g',$dokk18,$linee4_4);
$linee4_4 = str_replace('h',$dokk19,$linee4_4);
$linee4_4 = str_replace('j',$dokk20,$linee4_4);
$linee4_4 = str_replace('k',$dokk21,$linee4_4);
$linee4_4 = str_replace('l',$dokk22,$linee4_4);
$linee4_4 = str_replace('z',$dokk23,$linee4_4);
$linee4_4 = str_replace('x',$dokk24,$linee4_4);
$linee4_4 = str_replace('c',$dokk25,$linee4_4);
$linee4_4 = str_replace('v',$dokk26,$linee4_4);
$linee4_4 = str_replace('b',$dokk27,$linee4_4);
$linee4_4 = str_replace('n',$dokk28,$linee4_4);
$linee4_4 = str_replace('m',$dokk29,$linee4_4);
$linee4_4 = str_replace('*',$dokk30,$linee4_4);
}else{
$linee4_4 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee51.txt")){
$linee5_1 = file_get_contents("keyboard/create/linee51.txt");
if($linee5_1 != null ){
$linee5_1 = str_replace('1',$dokk1,$linee5_1);
$linee5_1 = str_replace('2',$dokk2,$linee5_1);
$linee5_1 = str_replace('3',$dokk3,$linee5_1);
$linee5_1 = str_replace('q',$dokk5,$linee5_1);
$linee5_1 = str_replace('w',$dokk5,$linee5_1);
$linee5_1 = str_replace('e',$dokk6,$linee5_1);
$linee5_1 = str_replace('r',$dokk7,$linee5_1);
$linee5_1 = str_replace('t',$dokk8,$linee5_1);
$linee5_1 = str_replace('y',$dokk9,$linee5_1);
$linee5_1 = str_replace('u',$dokk10,$linee5_1);
$linee5_1 = str_replace('i',$dokk11,$linee5_1);
$linee5_1 = str_replace('o',$dokk12,$linee5_1);
$linee5_1 = str_replace('p',$dokk13,$linee5_1);
$linee5_1 = str_replace('a',$dokk14,$linee5_1);
$linee5_1 = str_replace('s',$dokk15,$linee5_1);
$linee5_1 = str_replace('d',$dokk16,$linee5_1);
$linee5_1 = str_replace('f',$dokk17,$linee5_1);
$linee5_1 = str_replace('g',$dokk18,$linee5_1);
$linee5_1 = str_replace('h',$dokk19,$linee5_1);
$linee5_1 = str_replace('j',$dokk20,$linee5_1);
$linee5_1 = str_replace('k',$dokk21,$linee5_1);
$linee5_1 = str_replace('l',$dokk22,$linee5_1);
$linee5_1 = str_replace('z',$dokk23,$linee5_1);
$linee5_1 = str_replace('x',$dokk24,$linee5_1);
$linee5_1 = str_replace('c',$dokk25,$linee5_1);
$linee5_1 = str_replace('v',$dokk26,$linee5_1);
$linee5_1 = str_replace('b',$dokk27,$linee5_1);
$linee5_1 = str_replace('n',$dokk28,$linee5_1);
$linee5_1 = str_replace('m',$dokk29,$linee5_1);
$linee5_1 = str_replace('*',$dokk30,$linee5_1);
}else{
$linee5_1 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee52.txt")){
$linee5_2 = file_get_contents("keyboard/create/linee52.txt");
if($linee5_2 != null ){
$linee5_2 = str_replace('1',$dokk1,$linee5_2);
$linee5_2 = str_replace('2',$dokk2,$linee5_2);
$linee5_2 = str_replace('3',$dokk3,$linee5_2);
$linee5_2 = str_replace('q',$dokk4,$linee5_2);
$linee5_2 = str_replace('w',$dokk5,$linee5_2);
$linee5_2 = str_replace('e',$dokk6,$linee5_2);
$linee5_2 = str_replace('r',$dokk7,$linee5_2);
$linee5_2 = str_replace('t',$dokk8,$linee5_2);
$linee5_2 = str_replace('y',$dokk9,$linee5_2);
$linee5_2 = str_replace('u',$dokk10,$linee5_2);
$linee5_2 = str_replace('i',$dokk11,$linee5_2);
$linee5_2 = str_replace('o',$dokk12,$linee5_2);
$linee5_2 = str_replace('p',$dokk13,$linee5_2);
$linee5_2 = str_replace('a',$dokk14,$linee5_2);
$linee5_2 = str_replace('s',$dokk15,$linee5_2);
$linee5_2 = str_replace('d',$dokk16,$linee5_2);
$linee5_2 = str_replace('f',$dokk17,$linee5_2);
$linee5_2 = str_replace('g',$dokk18,$linee5_2);
$linee5_2 = str_replace('h',$dokk19,$linee5_2);
$linee5_2 = str_replace('j',$dokk20,$linee5_2);
$linee5_2 = str_replace('k',$dokk21,$linee5_2);
$linee5_2 = str_replace('l',$dokk22,$linee5_2);
$linee5_2 = str_replace('z',$dokk23,$linee5_2);
$linee5_2 = str_replace('x',$dokk24,$linee5_2);
$linee5_2 = str_replace('c',$dokk25,$linee5_2);
$linee5_2 = str_replace('v',$dokk26,$linee5_2);
$linee5_2 = str_replace('b',$dokk27,$linee5_2);
$linee5_2 = str_replace('n',$dokk28,$linee5_2);
$linee5_2 = str_replace('m',$dokk29,$linee5_2);
$linee5_2 = str_replace('*',$dokk30,$linee5_2);
}else{
$linee5_2 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee53.txt")){
$linee5_3 = file_get_contents("keyboard/create/linee53.txt");
if($linee5_3 != null ){
$linee5_3 = str_replace('1',$dokk1,$linee5_3);
$linee5_3 = str_replace('2',$dokk2,$linee5_3);
$linee5_3 = str_replace('3',$dokk3,$linee5_3);
$linee5_3 = str_replace('q',$dokk4,$linee5_3);
$linee5_3 = str_replace('w',$dokk5,$linee5_3);
$linee5_3 = str_replace('e',$dokk6,$linee5_3);
$linee5_3 = str_replace('r',$dokk7,$linee5_3);
$linee5_3 = str_replace('t',$dokk8,$linee5_3);
$linee5_3 = str_replace('y',$dokk9,$linee5_3);
$linee5_3 = str_replace('u',$dokk10,$linee5_3);
$linee5_3 = str_replace('i',$dokk11,$linee5_3);
$linee5_3 = str_replace('o',$dokk12,$linee5_3);
$linee5_3 = str_replace('p',$dokk13,$linee5_3);
$linee5_3 = str_replace('a',$dokk14,$linee5_3);
$linee5_3 = str_replace('s',$dokk15,$linee5_3);
$linee5_3 = str_replace('d',$dokk16,$linee5_3);
$linee5_3 = str_replace('f',$dokk17,$linee5_3);
$linee5_3 = str_replace('g',$dokk18,$linee5_3);
$linee5_3 = str_replace('h',$dokk19,$linee5_3);
$linee5_3 = str_replace('j',$dokk20,$linee5_3);
$linee5_3 = str_replace('k',$dokk21,$linee5_3);
$linee5_3 = str_replace('l',$dokk22,$linee5_3);
$linee5_3 = str_replace('z',$dokk23,$linee5_3);
$linee5_3 = str_replace('x',$dokk24,$linee5_3);
$linee5_3 = str_replace('c',$dokk25,$linee5_3);
$linee5_3 = str_replace('v',$dokk26,$linee5_3);
$linee5_3 = str_replace('b',$dokk27,$linee5_3);
$linee5_3 = str_replace('n',$dokk28,$linee5_3);
$linee5_3 = str_replace('m',$dokk29,$linee5_3);
$linee5_3 = str_replace('*',$dokk30,$linee5_3);
}else{
$linee5_3 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee54.txt")){
$linee5_4 = file_get_contents("keyboard/create/linee54.txt");
if($linee5_4 != null ){
$linee5_4 = str_replace('1',$dokk1,$linee5_4);
$linee5_4 = str_replace('2',$dokk2,$linee5_4);
$linee5_4 = str_replace('3',$dokk3,$linee5_4);
$linee5_4 = str_replace('q',$dokk4,$linee5_4);
$linee5_4 = str_replace('w',$dokk5,$linee5_4);
$linee5_4 = str_replace('e',$dokk6,$linee5_4);
$linee5_4 = str_replace('r',$dokk7,$linee5_4);
$linee5_4 = str_replace('t',$dokk8,$linee5_4);
$linee5_4 = str_replace('y',$dokk9,$linee5_4);
$linee5_4 = str_replace('u',$dokk10,$linee5_4);
$linee5_4 = str_replace('i',$dokk11,$linee5_4);
$linee5_4 = str_replace('o',$dokk12,$linee5_4);
$linee5_4 = str_replace('p',$dokk13,$linee5_4);
$linee5_4 = str_replace('a',$dokk14,$linee5_4);
$linee5_4 = str_replace('s',$dokk15,$linee5_4);
$linee5_4 = str_replace('d',$dokk16,$linee5_4);
$linee5_4 = str_replace('f',$dokk17,$linee5_4);
$linee5_4 = str_replace('g',$dokk18,$linee5_4);
$linee5_4 = str_replace('h',$dokk19,$linee5_4);
$linee5_4 = str_replace('j',$dokk20,$linee5_4);
$linee5_4 = str_replace('k',$dokk21,$linee5_4);
$linee5_4 = str_replace('l',$dokk22,$linee5_4);
$linee5_4 = str_replace('z',$dokk23,$linee5_4);
$linee5_4 = str_replace('x',$dokk24,$linee5_4);
$linee5_4 = str_replace('c',$dokk25,$linee5_4);
$linee5_4 = str_replace('v',$dokk26,$linee5_4);
$linee5_4 = str_replace('b',$dokk27,$linee5_4);
$linee5_4 = str_replace('n',$dokk28,$linee5_4);
$linee5_4 = str_replace('m',$dokk29,$linee5_4);
$linee5_4 = str_replace('*',$dokk30,$linee5_4);
}else{
$linee5_4 = "➕";
}}
if(file_exists("keyboard/create/linee61.txt")){
$linee6_1 = file_get_contents("keyboard/create/linee61.txt");
if($linee6_1 != null ){
$linee6_1 = str_replace('1',$dokk1,$linee6_1);
$linee6_1 = str_replace('2',$dokk2,$linee6_1);
$linee6_1 = str_replace('3',$dokk3,$linee6_1);
$linee6_1 = str_replace('q',$dokk4,$linee6_1);
$linee6_1 = str_replace('w',$dokk5,$linee6_1);
$linee6_1 = str_replace('e',$dokk6,$linee6_1);
$linee6_1 = str_replace('r',$dokk7,$linee6_1);
$linee6_1 = str_replace('t',$dokk8,$linee6_1);
$linee6_1 = str_replace('y',$dokk9,$linee6_1);
$linee6_1 = str_replace('u',$dokk10,$linee6_1);
$linee6_1 = str_replace('i',$dokk11,$linee6_1);
$linee6_1 = str_replace('o',$dokk12,$linee6_1);
$linee6_1 = str_replace('p',$dokk13,$linee6_1);
$linee6_1 = str_replace('a',$dokk14,$linee6_1);
$linee6_1 = str_replace('s',$dokk15,$linee6_1);
$linee6_1 = str_replace('d',$dokk16,$linee6_1);
$linee6_1 = str_replace('f',$dokk17,$linee6_1);
$linee6_1 = str_replace('g',$dokk18,$linee6_1);
$linee6_1 = str_replace('h',$dokk19,$linee6_1);
$linee6_1 = str_replace('j',$dokk20,$linee6_1);
$linee6_1 = str_replace('k',$dokk21,$linee6_1);
$linee6_1 = str_replace('l',$dokk22,$linee6_1);
$linee6_1 = str_replace('z',$dokk23,$linee6_1);
$linee6_1 = str_replace('x',$dokk24,$linee6_1);
$linee6_1 = str_replace('c',$dokk25,$linee6_1);
$linee6_1 = str_replace('v',$dokk26,$linee6_1);
$linee6_1 = str_replace('b',$dokk27,$linee6_1);
$linee6_1 = str_replace('n',$dokk28,$linee6_1);
$linee6_1 = str_replace('m',$dokk29,$linee6_1);
$linee6_1 = str_replace('*',$dokk30,$linee6_1);
}else{
$linee6_1 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee62.txt")){
$linee6_2 = file_get_contents("keyboard/create/linee62.txt");
if($linee6_2 != null ){
$linee6_2 = str_replace('1',$dokk1,$linee6_2);
$linee6_2 = str_replace('2',$dokk2,$linee6_2);
$linee6_2 = str_replace('3',$dokk3,$linee6_2);
$linee6_2 = str_replace('q',$dokk4,$linee6_2);
$linee6_2 = str_replace('w',$dokk5,$linee6_2);
$linee6_2 = str_replace('e',$dokk6,$linee6_2);
$linee6_2 = str_replace('r',$dokk7,$linee6_2);
$linee6_2 = str_replace('t',$dokk8,$linee6_2);
$linee6_2 = str_replace('y',$dokk9,$linee6_2);
$linee6_2 = str_replace('u',$dokk10,$linee6_2);
$linee6_2 = str_replace('i',$dokk11,$linee6_2);
$linee6_2 = str_replace('o',$dokk12,$linee6_2);
$linee6_2 = str_replace('p',$dokk13,$linee6_2);
$linee6_2 = str_replace('a',$dokk14,$linee6_2);
$linee6_2 = str_replace('s',$dokk15,$linee6_2);
$linee6_2 = str_replace('d',$dokk16,$linee6_2);
$linee6_2 = str_replace('f',$dokk17,$linee6_2);
$linee6_2 = str_replace('g',$dokk18,$linee6_2);
$linee6_2 = str_replace('h',$dokk19,$linee6_2);
$linee6_2 = str_replace('j',$dokk20,$linee6_2);
$linee6_2 = str_replace('k',$dokk21,$linee6_2);
$linee6_2 = str_replace('l',$dokk22,$linee6_2);
$linee6_2 = str_replace('z',$dokk23,$linee6_2);
$linee6_2 = str_replace('x',$dokk24,$linee6_2);
$linee6_2 = str_replace('c',$dokk25,$linee6_2);
$linee6_2 = str_replace('v',$dokk26,$linee6_2);
$linee6_2 = str_replace('b',$dokk27,$linee6_2);
$linee6_2 = str_replace('n',$dokk28,$linee6_2);
$linee6_2 = str_replace('m',$dokk29,$linee6_2);
$linee6_2 = str_replace('*',$dokk30,$linee6_2);
}else{
$linee6_2 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee63.txt")){
$linee6_3 = file_get_contents("keyboard/create/linee63.txt");
if($linee6_3 != null ){
$linee6_3 = str_replace('1',$dokk1,$linee6_3);
$linee6_3 = str_replace('2',$dokk2,$linee6_3);
$linee6_3 = str_replace('3',$dokk3,$linee6_3);
$linee6_3 = str_replace('q',$dokk4,$linee6_3);
$linee6_3 = str_replace('w',$dokk5,$linee6_3);
$linee6_3 = str_replace('e',$dokk6,$linee6_3);
$linee6_3 = str_replace('r',$dokk7,$linee6_3);
$linee6_3 = str_replace('t',$dokk8,$linee6_3);
$linee6_3 = str_replace('y',$dokk9,$linee6_3);
$linee6_3 = str_replace('u',$dokk10,$linee6_3);
$linee6_3 = str_replace('i',$dokk11,$linee6_3);
$linee6_3 = str_replace('o',$dokk12,$linee6_3);
$linee6_3 = str_replace('p',$dokk13,$linee6_3);
$linee6_3 = str_replace('a',$dokk14,$linee6_3);
$linee6_3 = str_replace('s',$dokk15,$linee6_3);
$linee6_3 = str_replace('d',$dokk16,$linee6_3);
$linee6_3 = str_replace('f',$dokk17,$linee6_3);
$linee6_3 = str_replace('g',$dokk18,$linee6_3);
$linee6_3 = str_replace('h',$dokk19,$linee6_3);
$linee6_3 = str_replace('j',$dokk20,$linee6_3);
$linee6_3 = str_replace('k',$dokk21,$linee6_3);
$linee6_3 = str_replace('l',$dokk22,$linee6_3);
$linee6_3 = str_replace('z',$dokk23,$linee6_3);
$linee6_3 = str_replace('x',$dokk24,$linee6_3);
$linee6_3 = str_replace('c',$dokk25,$linee6_3);
$linee6_3 = str_replace('v',$dokk26,$linee6_3);
$linee6_3 = str_replace('b',$dokk27,$linee6_3);
$linee6_3 = str_replace('n',$dokk28,$linee6_3);
$linee6_3 = str_replace('m',$dokk29,$linee6_3);
$linee6_3 = str_replace('*',$dokk30,$linee6_3);
}else{
$linee6_3 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee64.txt")){
$linee6_4 = file_get_contents("keyboard/create/linee64.txt");
if($linee6_4 != null ){
$linee6_4 = str_replace('1',$dokk1,$linee6_4);
$linee6_4 = str_replace('2',$dokk2,$linee6_4);
$linee6_4 = str_replace('3',$dokk3,$linee6_4);
$linee6_4 = str_replace('q',$dokk4,$linee6_4);
$linee6_4 = str_replace('w',$dokk5,$linee6_4);
$linee6_4 = str_replace('e',$dokk6,$linee6_4);
$linee6_4 = str_replace('r',$dokk7,$linee6_4);
$linee6_4 = str_replace('t',$dokk8,$linee6_4);
$linee6_4 = str_replace('y',$dokk9,$linee6_4);
$linee6_4 = str_replace('u',$dokk10,$linee6_4);
$linee6_4 = str_replace('i',$dokk11,$linee6_4);
$linee6_4 = str_replace('o',$dokk12,$linee6_4);
$linee6_4 = str_replace('p',$dokk13,$linee6_4);
$linee6_4 = str_replace('a',$dokk14,$linee6_4);
$linee6_4 = str_replace('s',$dokk15,$linee6_4);
$linee6_4 = str_replace('d',$dokk16,$linee6_4);
$linee6_4 = str_replace('f',$dokk17,$linee6_4);
$linee6_4 = str_replace('g',$dokk18,$linee6_4);
$linee6_4 = str_replace('h',$dokk19,$linee6_4);
$linee6_4 = str_replace('j',$dokk20,$linee6_4);
$linee6_4 = str_replace('k',$dokk21,$linee6_4);
$linee6_4 = str_replace('l',$dokk22,$linee6_4);
$linee6_4 = str_replace('z',$dokk23,$linee6_4);
$linee6_4 = str_replace('x',$dokk24,$linee6_4);
$linee6_4 = str_replace('c',$dokk25,$linee6_4);
$linee6_4 = str_replace('v',$dokk26,$linee6_4);
$linee6_4 = str_replace('b',$dokk27,$linee6_4);
$linee6_4 = str_replace('n',$dokk28,$linee6_4);
$linee6_4 = str_replace('m',$dokk29,$linee6_4);
$linee6_4 = str_replace('*',$dokk30,$linee6_4);
}else{
$linee6_4 = "➕";
}}
if(file_exists("keyboard/create/linee71.txt")){
$linee7_1 = file_get_contents("keyboard/create/linee71.txt");
if($linee7_1 != null ){
$linee7_1 = str_replace('1',$dokk1,$linee7_1);
$linee7_1 = str_replace('2',$dokk2,$linee7_1);
$linee7_1 = str_replace('3',$dokk3,$linee7_1);
$linee7_1 = str_replace('q',$dokk4,$linee7_1);
$linee7_1 = str_replace('w',$dokk5,$linee7_1);
$linee7_1 = str_replace('e',$dokk6,$linee7_1);
$linee7_1 = str_replace('r',$dokk7,$linee7_1);
$linee7_1 = str_replace('t',$dokk8,$linee7_1);
$linee7_1 = str_replace('y',$dokk9,$linee7_1);
$linee7_1 = str_replace('u',$dokk10,$linee7_1);
$linee7_1 = str_replace('i',$dokk11,$linee7_1);
$linee7_1 = str_replace('o',$dokk12,$linee7_1);
$linee7_1 = str_replace('p',$dokk13,$linee7_1);
$linee7_1 = str_replace('a',$dokk14,$linee7_1);
$linee7_1 = str_replace('s',$dokk15,$linee7_1);
$linee7_1 = str_replace('d',$dokk16,$linee7_1);
$linee7_1 = str_replace('f',$dokk17,$linee7_1);
$linee7_1 = str_replace('g',$dokk18,$linee7_1);
$linee7_1 = str_replace('h',$dokk19,$linee7_1);
$linee7_1 = str_replace('j',$dokk20,$linee7_1);
$linee7_1 = str_replace('k',$dokk21,$linee7_1);
$linee7_1 = str_replace('l',$dokk22,$linee7_1);
$linee7_1 = str_replace('z',$dokk23,$linee7_1);
$linee7_1 = str_replace('x',$dokk24,$linee7_1);
$linee7_1 = str_replace('c',$dokk25,$linee7_1);
$linee7_1 = str_replace('v',$dokk26,$linee7_1);
$linee7_1 = str_replace('b',$dokk27,$linee7_1);
$linee7_1 = str_replace('n',$dokk28,$linee7_1);
$linee7_1 = str_replace('m',$dokk29,$linee7_1);
$linee7_1 = str_replace('*',$dokk30,$linee7_1);
}else{
$linee7_1 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee72.txt")){
$linee7_2 = file_get_contents("keyboard/create/linee72.txt");
if($linee7_2 != null ){
$linee7_2 = str_replace('1',$dokk1,$linee7_2);
$linee7_2 = str_replace('2',$dokk2,$linee7_2);
$linee7_2 = str_replace('3',$dokk3,$linee7_2);
$linee7_2 = str_replace('q',$dokk4,$linee7_2);
$linee7_2 = str_replace('w',$dokk5,$linee7_2);
$linee7_2 = str_replace('e',$dokk6,$linee7_2);
$linee7_2 = str_replace('r',$dokk7,$linee7_2);
$linee7_2 = str_replace('t',$dokk8,$linee7_2);
$linee7_2 = str_replace('y',$dokk9,$linee7_2);
$linee7_2 = str_replace('u',$dokk10,$linee7_2);
$linee7_2 = str_replace('i',$dokk11,$linee7_2);
$linee7_2 = str_replace('o',$dokk12,$linee7_2);
$linee7_2 = str_replace('p',$dokk13,$linee7_2);
$linee7_2 = str_replace('a',$dokk14,$linee7_2);
$linee7_2 = str_replace('s',$dokk15,$linee7_2);
$linee7_2 = str_replace('d',$dokk16,$linee7_2);
$linee7_2 = str_replace('f',$dokk17,$linee7_2);
$linee7_2 = str_replace('g',$dokk18,$linee7_2);
$linee7_2 = str_replace('h',$dokk19,$linee7_2);
$linee7_2 = str_replace('j',$dokk20,$linee7_2);
$linee7_2 = str_replace('k',$dokk21,$linee7_2);
$linee7_2 = str_replace('l',$dokk22,$linee7_2);
$linee7_2 = str_replace('z',$dokk23,$linee7_2);
$linee7_2 = str_replace('x',$dokk24,$linee7_2);
$linee7_2 = str_replace('c',$dokk25,$linee7_2);
$linee7_2 = str_replace('v',$dokk26,$linee7_2);
$linee7_2 = str_replace('b',$dokk27,$linee7_2);
$linee7_2 = str_replace('n',$dokk28,$linee7_2);
$linee7_2 = str_replace('m',$dokk29,$linee7_2);
$linee7_2 = str_replace('*',$dokk30,$linee7_2);
}else{
$linee7_2 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee73.txt")){
$linee7_3 = file_get_contents("keyboard/create/linee73.txt");
if($linee7_3 != null ){
$linee7_3 = str_replace('1',$dokk1,$linee7_3);
$linee7_3 = str_replace('2',$dokk2,$linee7_3);
$linee7_3 = str_replace('3',$dokk3,$linee7_3);
$linee7_3 = str_replace('q',$dokk4,$linee7_3);
$linee7_3 = str_replace('w',$dokk5,$linee7_3);
$linee7_3 = str_replace('e',$dokk6,$linee7_3);
$linee7_3 = str_replace('r',$dokk7,$linee7_3);
$linee7_3 = str_replace('t',$dokk8,$linee7_3);
$linee7_3 = str_replace('y',$dokk9,$linee7_3);
$linee7_3 = str_replace('u',$dokk10,$linee7_3);
$linee7_3 = str_replace('i',$dokk11,$linee7_3);
$linee7_3 = str_replace('o',$dokk12,$linee7_3);
$linee7_3 = str_replace('p',$dokk13,$linee7_3);
$linee7_3 = str_replace('a',$dokk14,$linee7_3);
$linee7_3 = str_replace('s',$dokk15,$linee7_3);
$linee7_3 = str_replace('d',$dokk16,$linee7_3);
$linee7_3 = str_replace('f',$dokk17,$linee7_3);
$linee7_3 = str_replace('g',$dokk18,$linee7_3);
$linee7_3 = str_replace('h',$dokk19,$linee7_3);
$linee7_3 = str_replace('j',$dokk20,$linee7_3);
$linee7_3 = str_replace('k',$dokk21,$linee7_3);
$linee7_3 = str_replace('l',$dokk22,$linee7_3);
$linee7_3 = str_replace('z',$dokk23,$linee7_3);
$linee7_3 = str_replace('x',$dokk24,$linee7_3);
$linee7_3 = str_replace('c',$dokk25,$linee7_3);
$linee7_3 = str_replace('v',$dokk26,$linee7_3);
$linee7_3 = str_replace('b',$dokk27,$linee7_3);
$linee7_3 = str_replace('n',$dokk28,$linee7_3);
$linee7_3 = str_replace('m',$dokk29,$linee7_3);
$linee7_3 = str_replace('*',$dokk30,$linee7_3);
}else{
$linee7_3 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee74.txt")){
$linee7_4 = file_get_contents("keyboard/create/linee74.txt");
if($linee7_4 != null ){
$linee7_4 = str_replace('1',$dokk1,$linee7_4);
$linee7_4 = str_replace('2',$dokk2,$linee7_4);
$linee7_4 = str_replace('3',$dokk3,$linee7_4);
$linee7_4 = str_replace('q',$dokk4,$linee7_4);
$linee7_4 = str_replace('w',$dokk5,$linee7_4);
$linee7_4 = str_replace('e',$dokk6,$linee7_4);
$linee7_4 = str_replace('r',$dokk7,$linee7_4);
$linee7_4 = str_replace('t',$dokk8,$linee7_4);
$linee7_4 = str_replace('y',$dokk9,$linee7_4);
$linee7_4 = str_replace('u',$dokk10,$linee7_4);
$linee7_4 = str_replace('i',$dokk11,$linee7_4);
$linee7_4 = str_replace('o',$dokk12,$linee7_4);
$linee7_4 = str_replace('p',$dokk13,$linee7_4);
$linee7_4 = str_replace('a',$dokk14,$linee7_4);
$linee7_4 = str_replace('s',$dokk15,$linee7_4);
$linee7_4 = str_replace('d',$dokk16,$linee7_4);
$linee7_4 = str_replace('f',$dokk17,$linee7_4);
$linee7_4 = str_replace('g',$dokk18,$linee7_4);
$linee7_4 = str_replace('h',$dokk19,$linee7_4);
$linee7_4 = str_replace('j',$dokk20,$linee7_4);
$linee7_4 = str_replace('k',$dokk21,$linee7_4);
$linee7_4 = str_replace('l',$dokk22,$linee7_4);
$linee7_4 = str_replace('z',$dokk23,$linee7_4);
$linee7_4 = str_replace('x',$dokk24,$linee7_4);
$linee7_4 = str_replace('c',$dokk25,$linee7_4);
$linee7_4 = str_replace('v',$dokk26,$linee7_4);
$linee7_4 = str_replace('b',$dokk27,$linee7_4);
$linee7_4 = str_replace('n',$dokk28,$linee7_4);
$linee7_4 = str_replace('m',$dokk29,$linee7_4);
$linee7_4 = str_replace('*',$dokk30,$linee7_4);
}else{
$linee7_4 = "➕";
}}
if(file_exists("keyboard/create/linee81.txt")){
$linee8_1 = file_get_contents("keyboard/create/linee81.txt");
if($linee8_1 != null ){
$linee8_1 = str_replace('1',$dokk1,$linee8_1);
$linee8_1 = str_replace('2',$dokk2,$linee8_1);
$linee8_1 = str_replace('3',$dokk3,$linee8_1);
$linee8_1 = str_replace('q',$dokk4,$linee8_1);
$linee8_1 = str_replace('w',$dokk5,$linee8_1);
$linee8_1 = str_replace('e',$dokk6,$linee8_1);
$linee8_1 = str_replace('r',$dokk7,$linee8_1);
$linee8_1 = str_replace('t',$dokk8,$linee8_1);
$linee8_1 = str_replace('y',$dokk9,$linee8_1);
$linee8_1 = str_replace('u',$dokk10,$linee8_1);
$linee8_1 = str_replace('i',$dokk11,$linee8_1);
$linee8_1 = str_replace('o',$dokk12,$linee8_1);
$linee8_1 = str_replace('p',$dokk13,$linee8_1);
$linee8_1 = str_replace('a',$dokk14,$linee8_1);
$linee8_1 = str_replace('s',$dokk15,$linee8_1);
$linee8_1 = str_replace('d',$dokk16,$linee8_1);
$linee8_1 = str_replace('f',$dokk17,$linee8_1);
$linee8_1 = str_replace('g',$dokk18,$linee8_1);
$linee8_1 = str_replace('h',$dokk19,$linee8_1);
$linee8_1 = str_replace('j',$dokk20,$linee8_1);
$linee8_1 = str_replace('k',$dokk21,$linee8_1);
$linee8_1 = str_replace('l',$dokk22,$linee8_1);
$linee8_1 = str_replace('z',$dokk23,$linee8_1);
$linee8_1 = str_replace('x',$dokk24,$linee8_1);
$linee8_1 = str_replace('c',$dokk25,$linee8_1);
$linee8_1 = str_replace('v',$dokk26,$linee8_1);
$linee8_1 = str_replace('b',$dokk27,$linee8_1);
$linee8_1 = str_replace('n',$dokk28,$linee8_1);
$linee8_1 = str_replace('m',$dokk29,$linee8_1);
$linee8_1 = str_replace('*',$dokk30,$linee8_1);
}else{
$linee8_1 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee82.txt")){
$linee8_2 = file_get_contents("keyboard/create/linee82.txt");
if($linee8_2 != null ){
$linee8_2 = str_replace('1',$dokk1,$linee8_2);
$linee8_2 = str_replace('2',$dokk2,$linee8_2);
$linee8_2 = str_replace('3',$dokk3,$linee8_2);
$linee8_2 = str_replace('q',$dokk4,$linee8_2);
$linee8_2 = str_replace('w',$dokk5,$linee8_2);
$linee8_2 = str_replace('e',$dokk6,$linee8_2);
$linee8_2 = str_replace('r',$dokk7,$linee8_2);
$linee8_2 = str_replace('t',$dokk8,$linee8_2);
$linee8_2 = str_replace('y',$dokk9,$linee8_2);
$linee8_2 = str_replace('u',$dokk10,$linee8_2);
$linee8_2 = str_replace('i',$dokk11,$linee8_2);
$linee8_2 = str_replace('o',$dokk12,$linee8_2);
$linee8_2 = str_replace('p',$dokk13,$linee8_2);
$linee8_2 = str_replace('a',$dokk14,$linee8_2);
$linee8_2 = str_replace('s',$dokk15,$linee8_2);
$linee8_2 = str_replace('d',$dokk16,$linee8_2);
$linee8_2 = str_replace('f',$dokk17,$linee8_2);
$linee8_2 = str_replace('g',$dokk18,$linee8_2);
$linee8_2 = str_replace('h',$dokk19,$linee8_2);
$linee8_2 = str_replace('j',$dokk20,$linee8_2);
$linee8_2 = str_replace('k',$dokk21,$linee8_2);
$linee8_2 = str_replace('l',$dokk22,$linee8_2);
$linee8_2 = str_replace('z',$dokk23,$linee8_2);
$linee8_2 = str_replace('x',$dokk24,$linee8_2);
$linee8_2 = str_replace('c',$dokk25,$linee8_2);
$linee8_2 = str_replace('v',$dokk26,$linee8_2);
$linee8_2 = str_replace('b',$dokk27,$linee8_2);
$linee8_2 = str_replace('n',$dokk28,$linee8_2);
$linee8_2 = str_replace('m',$dokk29,$linee8_2);
$linee8_2 = str_replace('*',$dokk30,$linee8_2);
}else{
$linee8_2 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee83.txt")){
$linee8_3 = file_get_contents("keyboard/create/linee83.txt");
if($linee8_3 != null ){
$linee8_3 = str_replace('1',$dokk1,$linee8_3);
$linee8_3 = str_replace('2',$dokk2,$linee8_3);
$linee8_3 = str_replace('3',$dokk3,$linee8_3);
$linee8_3 = str_replace('q',$dokk4,$linee8_3);
$linee8_3 = str_replace('w',$dokk5,$linee8_3);
$linee8_3 = str_replace('e',$dokk6,$linee8_3);
$linee8_3 = str_replace('r',$dokk7,$linee8_3);
$linee8_3 = str_replace('t',$dokk8,$linee8_3);
$linee8_3 = str_replace('y',$dokk9,$linee8_3);
$linee8_3 = str_replace('u',$dokk10,$linee8_3);
$linee8_3 = str_replace('i',$dokk11,$linee8_3);
$linee8_3 = str_replace('o',$dokk12,$linee8_3);
$linee8_3 = str_replace('p',$dokk13,$linee8_3);
$linee8_3 = str_replace('a',$dokk14,$linee8_3);
$linee8_3 = str_replace('s',$dokk15,$linee8_3);
$linee8_3 = str_replace('d',$dokk16,$linee8_3);
$linee8_3 = str_replace('f',$dokk17,$linee8_3);
$linee8_3 = str_replace('g',$dokk18,$linee8_3);
$linee8_3 = str_replace('h',$dokk19,$linee8_3);
$linee8_3 = str_replace('j',$dokk20,$linee8_3);
$linee8_3 = str_replace('k',$dokk21,$linee8_3);
$linee8_3 = str_replace('l',$dokk22,$linee8_3);
$linee8_3 = str_replace('z',$dokk23,$linee8_3);
$linee8_3 = str_replace('x',$dokk24,$linee8_3);
$linee8_3 = str_replace('c',$dokk25,$linee8_3);
$linee8_3 = str_replace('v',$dokk26,$linee8_3);
$linee8_3 = str_replace('b',$dokk27,$linee8_3);
$linee8_3 = str_replace('n',$dokk28,$linee8_3);
$linee8_3 = str_replace('m',$dokk29,$linee8_3);
$linee8_3 = str_replace('*',$dokk30,$linee8_3);
}else{
$linee8_3 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee84.txt")){
$linee8_4 = file_get_contents("keyboard/create/linee84.txt");
if($linee8_4 != null ){
$linee8_4 = str_replace('1',$dokk1,$linee8_4);
$linee8_4 = str_replace('2',$dokk2,$linee8_4);
$linee8_4 = str_replace('3',$dokk3,$linee8_4);
$linee8_4 = str_replace('q',$dokk4,$linee8_4);
$linee8_4 = str_replace('w',$dokk5,$linee8_4);
$linee8_4 = str_replace('e',$dokk6,$linee8_4);
$linee8_4 = str_replace('r',$dokk7,$linee8_4);
$linee8_4 = str_replace('t',$dokk8,$linee8_4);
$linee8_4 = str_replace('y',$dokk9,$linee8_4);
$linee8_4 = str_replace('u',$dokk10,$linee8_4);
$linee8_4 = str_replace('i',$dokk11,$linee8_4);
$linee8_4 = str_replace('o',$dokk12,$linee8_4);
$linee8_4 = str_replace('p',$dokk13,$linee8_4);
$linee8_4 = str_replace('a',$dokk14,$linee8_4);
$linee8_4 = str_replace('s',$dokk15,$linee8_4);
$linee8_4 = str_replace('d',$dokk16,$linee8_4);
$linee8_4 = str_replace('f',$dokk17,$linee8_4);
$linee8_4 = str_replace('g',$dokk18,$linee8_4);
$linee8_4 = str_replace('h',$dokk19,$linee8_4);
$linee8_4 = str_replace('j',$dokk20,$linee8_4);
$linee8_4 = str_replace('k',$dokk21,$linee8_4);
$linee8_4 = str_replace('l',$dokk22,$linee8_4);
$linee8_4 = str_replace('z',$dokk23,$linee8_4);
$linee8_4 = str_replace('x',$dokk24,$linee8_4);
$linee8_4 = str_replace('c',$dokk25,$linee8_4);
$linee8_4 = str_replace('v',$dokk26,$linee8_4);
$linee8_4 = str_replace('b',$dokk27,$linee8_4);
$linee8_4 = str_replace('n',$dokk28,$linee8_4);
$linee8_4 = str_replace('m',$dokk29,$linee8_4);
$linee8_4 = str_replace('*',$dokk30,$linee8_4);
}else{
$linee8_4 = "➕";
}}
if(file_exists("keyboard/create/linee91.txt")){
$linee9_1 = file_get_contents("keyboard/create/linee91.txt");
if($linee9_1 != null ){
$linee9_1 = str_replace('1',$dokk1,$linee9_1);
$linee9_1 = str_replace('2',$dokk2,$linee9_1);
$linee9_1 = str_replace('3',$dokk3,$linee9_1);
$linee9_1 = str_replace('q',$dokk4,$linee9_1);
$linee9_1 = str_replace('w',$dokk5,$linee9_1);
$linee9_1 = str_replace('e',$dokk6,$linee9_1);
$linee9_1 = str_replace('r',$dokk7,$linee9_1);
$linee9_1 = str_replace('t',$dokk8,$linee9_1);
$linee9_1 = str_replace('y',$dokk9,$linee9_1);
$linee9_1 = str_replace('u',$dokk10,$linee9_1);
$linee9_1 = str_replace('i',$dokk11,$linee9_1);
$linee9_1 = str_replace('o',$dokk12,$linee9_1);
$linee9_1 = str_replace('p',$dokk13,$linee9_1);
$linee9_1 = str_replace('a',$dokk14,$linee9_1);
$linee9_1 = str_replace('s',$dokk15,$linee9_1);
$linee9_1 = str_replace('d',$dokk16,$linee9_1);
$linee9_1 = str_replace('f',$dokk17,$linee9_1);
$linee9_1 = str_replace('g',$dokk18,$linee9_1);
$linee9_1 = str_replace('h',$dokk19,$linee9_1);
$linee9_1 = str_replace('j',$dokk20,$linee9_1);
$linee9_1 = str_replace('k',$dokk21,$linee9_1);
$linee9_1 = str_replace('l',$dokk22,$linee9_1);
$linee9_1 = str_replace('z',$dokk23,$linee9_1);
$linee9_1 = str_replace('x',$dokk24,$linee9_1);
$linee9_1 = str_replace('c',$dokk25,$linee9_1);
$linee9_1 = str_replace('v',$dokk26,$linee9_1);
$linee9_1 = str_replace('b',$dokk27,$linee9_1);
$linee9_1 = str_replace('n',$dokk28,$linee9_1);
$linee9_1 = str_replace('m',$dokk29,$linee9_1);
$linee9_1 = str_replace('*',$dokk30,$linee9_1);
}else{
$linee9_1 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee92.txt")){
$linee9_2 = file_get_contents("keyboard/create/linee92.txt");
if($linee9_2 != null ){
$linee9_2 = str_replace('1',$dokk1,$linee9_2);
$linee9_2 = str_replace('2',$dokk2,$linee9_2);
$linee9_2 = str_replace('3',$dokk3,$linee9_2);
$linee9_2 = str_replace('q',$dokk4,$linee9_2);
$linee9_2 = str_replace('w',$dokk5,$linee9_2);
$linee9_2 = str_replace('e',$dokk6,$linee9_2);
$linee9_2 = str_replace('r',$dokk7,$linee9_2);
$linee9_2 = str_replace('t',$dokk8,$linee9_2);
$linee9_2 = str_replace('y',$dokk9,$linee9_2);
$linee9_2 = str_replace('u',$dokk10,$linee9_2);
$linee9_2 = str_replace('i',$dokk11,$linee9_2);
$linee9_2 = str_replace('o',$dokk12,$linee9_2);
$linee9_2 = str_replace('p',$dokk13,$linee9_2);
$linee9_2 = str_replace('a',$dokk14,$linee9_2);
$linee9_2 = str_replace('s',$dokk15,$linee9_2);
$linee9_2 = str_replace('d',$dokk16,$linee9_2);
$linee9_2 = str_replace('f',$dokk17,$linee9_2);
$linee9_2 = str_replace('g',$dokk18,$linee9_2);
$linee9_2 = str_replace('h',$dokk19,$linee9_2);
$linee9_2 = str_replace('j',$dokk20,$linee9_2);
$linee9_2 = str_replace('k',$dokk21,$linee9_2);
$linee9_2 = str_replace('l',$dokk22,$linee9_2);
$linee9_2 = str_replace('z',$dokk23,$linee9_2);
$linee9_2 = str_replace('x',$dokk24,$linee9_2);
$linee9_2 = str_replace('c',$dokk25,$linee9_2);
$linee9_2 = str_replace('v',$dokk26,$linee9_2);
$linee9_2 = str_replace('b',$dokk27,$linee9_2);
$linee9_2 = str_replace('n',$dokk28,$linee9_2);
$linee9_2 = str_replace('m',$dokk29,$linee9_2);
$linee9_2 = str_replace('*',$dokk30,$linee9_2);
}else{
$linee9_2 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee93.txt")){
$linee9_3 = file_get_contents("keyboard/create/linee93.txt");
if($linee9_3 != null ){
$linee9_3 = str_replace('1',$dokk1,$linee9_3);
$linee9_3 = str_replace('2',$dokk2,$linee9_3);
$linee9_3 = str_replace('3',$dokk3,$linee9_3);
$linee9_3 = str_replace('q',$dokk4,$linee9_3);
$linee9_3 = str_replace('w',$dokk5,$linee9_3);
$linee9_3 = str_replace('e',$dokk6,$linee9_3);
$linee9_3 = str_replace('r',$dokk7,$linee9_3);
$linee9_3 = str_replace('t',$dokk8,$linee9_3);
$linee9_3 = str_replace('y',$dokk9,$linee9_3);
$linee9_3 = str_replace('u',$dokk10,$linee9_3);
$linee9_3 = str_replace('i',$dokk11,$linee9_3);
$linee9_3 = str_replace('o',$dokk12,$linee9_3);
$linee9_3 = str_replace('p',$dokk13,$linee9_3);
$linee9_3 = str_replace('a',$dokk14,$linee9_3);
$linee9_3 = str_replace('s',$dokk15,$linee9_3);
$linee9_3 = str_replace('d',$dokk16,$linee9_3);
$linee9_3 = str_replace('f',$dokk17,$linee9_3);
$linee9_3 = str_replace('g',$dokk18,$linee9_3);
$linee9_3 = str_replace('h',$dokk19,$linee9_3);
$linee9_3 = str_replace('j',$dokk20,$linee9_3);
$linee9_3 = str_replace('k',$dokk21,$linee9_3);
$linee9_3 = str_replace('l',$dokk22,$linee9_3);
$linee9_3 = str_replace('z',$dokk23,$linee9_3);
$linee9_3 = str_replace('x',$dokk24,$linee9_3);
$linee9_3 = str_replace('c',$dokk25,$linee9_3);
$linee9_3 = str_replace('v',$dokk26,$linee9_3);
$linee9_3 = str_replace('b',$dokk27,$linee9_3);
$linee9_3 = str_replace('n',$dokk28,$linee9_3);
$linee9_3 = str_replace('m',$dokk29,$linee9_3);
$linee9_3 = str_replace('*',$dokk30,$linee9_3);
}else{
$linee9_3 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee94.txt")){
$linee9_4 = file_get_contents("keyboard/create/linee94.txt");
if($linee9_4 != null ){
$linee9_4 = str_replace('1',$dokk1,$linee9_4);
$linee9_4 = str_replace('2',$dokk2,$linee9_4);
$linee9_4 = str_replace('3',$dokk3,$linee9_4);
$linee9_4 = str_replace('q',$dokk4,$linee9_4);
$linee9_4 = str_replace('w',$dokk5,$linee9_4);
$linee9_4 = str_replace('e',$dokk6,$linee9_4);
$linee9_4 = str_replace('r',$dokk7,$linee9_4);
$linee9_4 = str_replace('t',$dokk8,$linee9_4);
$linee9_4 = str_replace('y',$dokk9,$linee9_4);
$linee9_4 = str_replace('u',$dokk10,$linee9_4);
$linee9_4 = str_replace('i',$dokk11,$linee9_4);
$linee9_4 = str_replace('o',$dokk12,$linee9_4);
$linee9_4 = str_replace('p',$dokk13,$linee9_4);
$linee9_4 = str_replace('a',$dokk14,$linee9_4);
$linee9_4 = str_replace('s',$dokk15,$linee9_4);
$linee9_4 = str_replace('d',$dokk16,$linee9_4);
$linee9_4 = str_replace('f',$dokk17,$linee9_4);
$linee9_4 = str_replace('g',$dokk18,$linee9_4);
$linee9_4 = str_replace('h',$dokk19,$linee9_4);
$linee9_4 = str_replace('j',$dokk20,$linee9_4);
$linee9_4 = str_replace('k',$dokk21,$linee9_4);
$linee9_4 = str_replace('l',$dokk22,$linee9_4);
$linee9_4 = str_replace('z',$dokk23,$linee9_4);
$linee9_4 = str_replace('x',$dokk24,$linee9_4);
$linee9_4 = str_replace('c',$dokk25,$linee9_4);
$linee9_4 = str_replace('v',$dokk26,$linee9_4);
$linee9_4 = str_replace('b',$dokk27,$linee9_4);
$linee9_4 = str_replace('n',$dokk28,$linee9_4);
$linee9_4 = str_replace('m',$dokk29,$linee9_4);
$linee9_4 = str_replace('*',$dokk30,$linee9_4);
}else{
$linee9_4 = "➕";
}}
if(file_exists("keyboard/create/linee101.txt")){
$linee10_1 = file_get_contents("keyboard/create/linee101.txt");
if($linee10_1 != null ){
$linee10_1 = str_replace('1',$dokk1,$linee10_1);
$linee10_1 = str_replace('2',$dokk2,$linee10_1);
$linee10_1 = str_replace('3',$dokk3,$linee10_1);
$linee10_1 = str_replace('q',$dokk4,$linee10_1);
$linee10_1 = str_replace('w',$dokk5,$linee10_1);
$linee10_1 = str_replace('e',$dokk6,$linee10_1);
$linee10_1 = str_replace('r',$dokk7,$linee10_1);
$linee10_1 = str_replace('t',$dokk8,$linee10_1);
$linee10_1 = str_replace('y',$dokk9,$linee10_1);
$linee10_1 = str_replace('u',$dokk10,$linee10_1);
$linee10_1 = str_replace('i',$dokk11,$linee10_1);
$linee10_1 = str_replace('o',$dokk12,$linee10_1);
$linee10_1 = str_replace('p',$dokk13,$linee10_1);
$linee10_1 = str_replace('a',$dokk14,$linee10_1);
$linee10_1 = str_replace('s',$dokk15,$linee10_1);
$linee10_1 = str_replace('d',$dokk16,$linee10_1);
$linee10_1 = str_replace('f',$dokk17,$linee10_1);
$linee10_1 = str_replace('g',$dokk18,$linee10_1);
$linee10_1 = str_replace('h',$dokk19,$linee10_1);
$linee10_1 = str_replace('j',$dokk20,$linee10_1);
$linee10_1 = str_replace('k',$dokk21,$linee10_1);
$linee10_1 = str_replace('l',$dokk22,$linee10_1);
$linee10_1 = str_replace('z',$dokk23,$linee10_1);
$linee10_1 = str_replace('x',$dokk24,$linee10_1);
$linee10_1 = str_replace('c',$dokk25,$linee10_1);
$linee10_1 = str_replace('v',$dokk26,$linee10_1);
$linee10_1 = str_replace('b',$dokk27,$linee10_1);
$linee10_1 = str_replace('n',$dokk28,$linee10_1);
$linee10_1 = str_replace('m',$dokk29,$linee10_1);
$linee10_1 = str_replace('*',$dokk30,$linee10_1);
}else{
$linee10_1 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee102.txt")){
$linee10_2 = file_get_contents("keyboard/create/linee102.txt");
if($linee10_2 != null ){
$linee10_2 = str_replace('1',$dokk1,$linee10_2);
$linee10_2 = str_replace('2',$dokk2,$linee10_2);
$linee10_2 = str_replace('3',$dokk3,$linee10_2);
$linee10_2 = str_replace('q',$dokk4,$linee10_2);
$linee10_2 = str_replace('w',$dokk5,$linee10_2);
$linee10_2 = str_replace('e',$dokk6,$linee10_2);
$linee10_2 = str_replace('r',$dokk7,$linee10_2);
$linee10_2 = str_replace('t',$dokk8,$linee10_2);
$linee10_2 = str_replace('y',$dokk9,$linee10_2);
$linee10_2 = str_replace('u',$dokk10,$linee10_2);
$linee10_2 = str_replace('i',$dokk11,$linee10_2);
$linee10_2 = str_replace('o',$dokk12,$linee10_2);
$linee10_2 = str_replace('p',$dokk13,$linee10_2);
$linee10_2 = str_replace('a',$dokk14,$linee10_2);
$linee10_2 = str_replace('s',$dokk15,$linee10_2);
$linee10_2 = str_replace('d',$dokk16,$linee10_2);
$linee10_2 = str_replace('f',$dokk17,$linee10_2);
$linee10_2 = str_replace('g',$dokk18,$linee10_2);
$linee10_2 = str_replace('h',$dokk19,$linee10_2);
$linee10_2 = str_replace('j',$dokk20,$linee10_2);
$linee10_2 = str_replace('k',$dokk21,$linee10_2);
$linee10_2 = str_replace('l',$dokk22,$linee10_2);
$linee10_2 = str_replace('z',$dokk23,$linee10_2);
$linee10_2 = str_replace('x',$dokk24,$linee10_2);
$linee10_2 = str_replace('c',$dokk25,$linee10_2);
$linee10_2 = str_replace('v',$dokk26,$linee10_2);
$linee10_2 = str_replace('b',$dokk27,$linee10_2);
$linee10_2 = str_replace('n',$dokk28,$linee10_2);
$linee10_2 = str_replace('m',$dokk29,$linee10_2);
$linee10_2 = str_replace('*',$dokk30,$linee10_2);
}else{
$linee10_2 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee103.txt")){
$linee10_3 = file_get_contents("keyboard/create/linee103.txt");
if($linee10_3 != null ){
$linee10_3 = str_replace('1',$dokk1,$linee10_3);
$linee10_3 = str_replace('2',$dokk2,$linee10_3);
$linee10_3 = str_replace('3',$dokk3,$linee10_3);
$linee10_3 = str_replace('q',$dokk4,$linee10_3);
$linee10_3 = str_replace('w',$dokk5,$linee10_3);
$linee10_3 = str_replace('e',$dokk6,$linee10_3);
$linee10_3 = str_replace('r',$dokk7,$linee10_3);
$linee10_3 = str_replace('t',$dokk8,$linee10_3);
$linee10_3 = str_replace('y',$dokk9,$linee10_3);
$linee10_3 = str_replace('u',$dokk10,$linee10_3);
$linee10_3 = str_replace('i',$dokk11,$linee10_3);
$linee10_3 = str_replace('o',$dokk12,$linee10_3);
$linee10_3 = str_replace('p',$dokk13,$linee10_3);
$linee10_3 = str_replace('a',$dokk14,$linee10_3);
$linee10_3 = str_replace('s',$dokk15,$linee10_3);
$linee10_3 = str_replace('d',$dokk16,$linee10_3);
$linee10_3 = str_replace('f',$dokk17,$linee10_3);
$linee10_3 = str_replace('g',$dokk18,$linee10_3);
$linee10_3 = str_replace('h',$dokk19,$linee10_3);
$linee10_3 = str_replace('j',$dokk20,$linee10_3);
$linee10_3 = str_replace('k',$dokk21,$linee10_3);
$linee10_3 = str_replace('l',$dokk22,$linee10_3);
$linee10_3 = str_replace('z',$dokk23,$linee10_3);
$linee10_3 = str_replace('x',$dokk24,$linee10_3);
$linee10_3 = str_replace('c',$dokk25,$linee10_3);
$linee10_3 = str_replace('v',$dokk26,$linee10_3);
$linee10_3 = str_replace('b',$dokk27,$linee10_3);
$linee10_3 = str_replace('n',$dokk28,$linee10_3);
$linee10_3 = str_replace('m',$dokk29,$linee10_3);
$linee10_3 = str_replace('*',$dokk30,$linee10_3);
}else{
$linee10_3 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee104.txt")){
$linee10_4 = file_get_contents("keyboard/create/linee104.txt");
if($linee10_4 != null ){
$linee10_4 = str_replace('1',$dokk1,$linee10_4);
$linee10_4 = str_replace('2',$dokk2,$linee10_4);
$linee10_4 = str_replace('3',$dokk3,$linee10_4);
$linee10_4 = str_replace('q',$dokk4,$linee10_4);
$linee10_4 = str_replace('w',$dokk5,$linee10_4);
$linee10_4 = str_replace('e',$dokk6,$linee10_4);
$linee10_4 = str_replace('r',$dokk7,$linee10_4);
$linee10_4 = str_replace('t',$dokk8,$linee10_4);
$linee10_4 = str_replace('y',$dokk9,$linee10_4);
$linee10_4 = str_replace('u',$dokk10,$linee10_4);
$linee10_4 = str_replace('i',$dokk11,$linee10_4);
$linee10_4 = str_replace('o',$dokk12,$linee10_4);
$linee10_4 = str_replace('p',$dokk13,$linee10_4);
$linee10_4 = str_replace('a',$dokk14,$linee10_4);
$linee10_4 = str_replace('s',$dokk15,$linee10_4);
$linee10_4 = str_replace('d',$dokk16,$linee10_4);
$linee10_4 = str_replace('f',$dokk17,$linee10_4);
$linee10_4 = str_replace('g',$dokk18,$linee10_4);
$linee10_4 = str_replace('h',$dokk19,$linee10_4);
$linee10_4 = str_replace('j',$dokk20,$linee10_4);
$linee10_4 = str_replace('k',$dokk21,$linee10_4);
$linee10_4 = str_replace('l',$dokk22,$linee10_4);
$linee10_4 = str_replace('z',$dokk23,$linee10_4);
$linee10_4 = str_replace('x',$dokk24,$linee10_4);
$linee10_4 = str_replace('c',$dokk25,$linee10_4);
$linee10_4 = str_replace('v',$dokk26,$linee10_4);
$linee10_4 = str_replace('b',$dokk27,$linee10_4);
$linee10_4 = str_replace('n',$dokk28,$linee10_4);
$linee10_4 = str_replace('m',$dokk29,$linee10_4);
$linee10_4 = str_replace('*',$dokk30,$linee10_4);
}else{
$linee10_4 = "➕";
}}

$Button_sete = json_encode(['inline_keyboard'=>[
[['text'=>"$linee1_1",'callback_data'=>'seter-linee11'],
['text'=>"$linee1_2",'callback_data'=>'seter-linee12'],
['text'=>"$linee1_3",'callback_data'=>'seter-linee13'],
['text'=>"$linee1_4",'callback_data'=>'seter-linee14']],
[['text'=>"$linee2_1",'callback_data'=>'seter-linee21'],
['text'=>"$linee2_2",'callback_data'=>'seter-linee22'],
['text'=>"$linee2_3",'callback_data'=>'seter-linee23'],
['text'=>"$linee2_4",'callback_data'=>'seter-linee24']],
[['text'=>"$linee3_1",'callback_data'=>'seter-linee31'],
['text'=>"$linee3_2",'callback_data'=>'seter-linee32'],
['text'=>"$linee3_3",'callback_data'=>'seter-linee33'],
['text'=>"$linee3_4",'callback_data'=>'seter-linee34']],
[['text'=>"$linee4_1",'callback_data'=>'seter-linee41'],
['text'=>"$linee4_2",'callback_data'=>'seter-linee42'],
['text'=>"$linee4_3",'callback_data'=>'seter-linee43'],
['text'=>"$linee4_4",'callback_data'=>'seter-linee44']],
[['text'=>"$linee5_1",'callback_data'=>'seter-linee51'],
['text'=>"$linee5_2",'callback_data'=>'seter-linee52'],
['text'=>"$linee5_3",'callback_data'=>'seter-linee53'],
['text'=>"$linee5_4",'callback_data'=>'seter-linee54']],
[['text'=>"$linee6_1",'callback_data'=>'seter-linee61'],
['text'=>"$linee6_2",'callback_data'=>'seter-linee62'],
['text'=>"$linee6_3",'callback_data'=>'seter-linee63'],
['text'=>"$linee6_4",'callback_data'=>'seter-linee64']],
[['text'=>"$linee7_1",'callback_data'=>'seter-linee71'],
['text'=>"$linee7_2",'callback_data'=>'seter-linee72'],
['text'=>"$linee7_3",'callback_data'=>'seter-linee73'],
['text'=>"$linee7_4",'callback_data'=>'seter-linee74']],
[['text'=>"$linee8_1",'callback_data'=>'seter-linee81'],
['text'=>"$linee8_2",'callback_data'=>'seter-linee82'],
['text'=>"$linee8_3",'callback_data'=>'seter-linee83'],
['text'=>"$linee8_4",'callback_data'=>'seter-linee84']],
[['text'=>"$linee9_1",'callback_data'=>'seter-linee91'],
['text'=>"$linee9_2",'callback_data'=>'seter-linee92'],
['text'=>"$linee9_3",'callback_data'=>'seter-linee93'],
['text'=>"$linee9_4",'callback_data'=>'seter-linee94']],
[['text'=>"$linee10_1",'callback_data'=>'seter-linee101'],
['text'=>"$linee10_2",'callback_data'=>'seter-linee102'],
['text'=>"$linee10_3",'callback_data'=>'seter-linee103'],
['text'=>"$linee10_4",'callback_data'=>'seter-linee104']],
]]);
Editmessagetext($chatID, $msg_id,"👈️ گزینه مورد نظر را انتخاب نمائید.",$Button_sete);
}
elseif(preg_match('/^dell-(.*)/', $data, $match)){
$doke = $match[1];
Save("keyboard/create/$doke.txt",null);
//////////------------------------\\\\\\\\\\\\\\///
//////////------------------------\\\\\\\\\\\\\\/
//////////////////////////////////////////////////////////////////////////////
if(file_exists("keyboard/create/linee11.txt")){
$linee1_1 = file_get_contents("keyboard/create/linee11.txt");
if($linee1_1 != null ){
$linee1_1 = str_replace('1',$dokk1,$linee1_1);
$linee1_1 = str_replace('2',$dokk2,$linee1_1);
$linee1_1 = str_replace('3',$dokk3,$linee1_1);
$linee1_1 = str_replace('q',$dokk4,$linee1_1);
$linee1_1 = str_replace('w',$dokk5,$linee1_1);
$linee1_1 = str_replace('e',$dokk6,$linee1_1);
$linee1_1 = str_replace('r',$dokk7,$linee1_1);
$linee1_1 = str_replace('t',$dokk8,$linee1_1);
$linee1_1 = str_replace('y',$dokk9,$linee1_1);
$linee1_1 = str_replace('u',$dokk10,$linee1_1);
$linee1_1 = str_replace('i',$dokk11,$linee1_1);
$linee1_1 = str_replace('o',$dokk12,$linee1_1);
$linee1_1 = str_replace('p',$dokk13,$linee1_1);
$linee1_1 = str_replace('a',$dokk14,$linee1_1);
$linee1_1 = str_replace('s',$dokk15,$linee1_1);
$linee1_1 = str_replace('d',$dokk16,$linee1_1);
$linee1_1 = str_replace('f',$dokk17,$linee1_1);
$linee1_1 = str_replace('g',$dokk18,$linee1_1);
$linee1_1 = str_replace('h',$dokk19,$linee1_1);
$linee1_1 = str_replace('j',$dokk20,$linee1_1);
$linee1_1 = str_replace('k',$dokk21,$linee1_1);
$linee1_1 = str_replace('l',$dokk22,$linee1_1);
$linee1_1 = str_replace('z',$dokk23,$linee1_1);
$linee1_1 = str_replace('x',$dokk24,$linee1_1);
$linee1_1 = str_replace('c',$dokk25,$linee1_1);
$linee1_1 = str_replace('v',$dokk26,$linee1_1);
$linee1_1 = str_replace('b',$dokk27,$linee1_1);
$linee1_1 = str_replace('n',$dokk28,$linee1_1);
$linee1_1 = str_replace('m',$dokk29,$linee1_1);
$linee1_1 = str_replace('*',$dokk30,$linee1_1);
}else{
$linee1_1 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee12.txt")){
$linee1_2 = file_get_contents("keyboard/create/linee12.txt");
if($linee1_2 != null ){
$linee1_2 = str_replace('1',$dokk1,$linee1_2);
$linee1_2 = str_replace('2',$dokk2,$linee1_2);
$linee1_2 = str_replace('3',$dokk3,$linee1_2);
$linee1_2 = str_replace('q',$dokk4,$linee1_2);
$linee1_2 = str_replace('w',$dokk5,$linee1_2);
$linee1_2 = str_replace('e',$dokk6,$linee1_2);
$linee1_2 = str_replace('r',$dokk7,$linee1_2);
$linee1_2 = str_replace('t',$dokk8,$linee1_2);
$linee1_2 = str_replace('y',$dokk9,$linee1_2);
$linee1_2 = str_replace('u',$dokk10,$linee1_2);
$linee1_2 = str_replace('i',$dokk11,$linee1_2);
$linee1_2 = str_replace('o',$dokk12,$linee1_2);
$linee1_2 = str_replace('p',$dokk13,$linee1_2);
$linee1_2 = str_replace('a',$dokk14,$linee1_2);
$linee1_2 = str_replace('s',$dokk15,$linee1_2);
$linee1_2 = str_replace('d',$dokk16,$linee1_2);
$linee1_2 = str_replace('f',$dokk17,$linee1_2);
$linee1_2 = str_replace('g',$dokk18,$linee1_2);
$linee1_2 = str_replace('h',$dokk19,$linee1_2);
$linee1_2 = str_replace('j',$dokk20,$linee1_2);
$linee1_2 = str_replace('k',$dokk21,$linee1_2);
$linee1_2 = str_replace('l',$dokk22,$linee1_2);
$linee1_2 = str_replace('z',$dokk23,$linee1_2);
$linee1_2 = str_replace('x',$dokk24,$linee1_2);
$linee1_2 = str_replace('c',$dokk25,$linee1_2);
$linee1_2 = str_replace('v',$dokk26,$linee1_2);
$linee1_2 = str_replace('b',$dokk27,$linee1_2);
$linee1_2 = str_replace('n',$dokk28,$linee1_2);
$linee1_2 = str_replace('m',$dokk29,$linee1_2);
$linee1_2 = str_replace('*',$dokk30,$linee1_2);
}else{
$linee1_2 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee13.txt")){
$linee1_3 = file_get_contents("keyboard/create/linee13.txt");
if($linee1_3 != null ){
$linee1_3 = str_replace('1',$dokk1,$linee1_3);
$linee1_3 = str_replace('2',$dokk2,$linee1_3);
$linee1_3 = str_replace('3',$dokk3,$linee1_3);
$linee1_3 = str_replace('q',$dokk4,$linee1_3);
$linee1_3 = str_replace('w',$dokk5,$linee1_3);
$linee1_3 = str_replace('e',$dokk6,$linee1_3);
$linee1_3 = str_replace('r',$dokk7,$linee1_3);
$linee1_3 = str_replace('t',$dokk8,$linee1_3);
$linee1_3 = str_replace('y',$dokk9,$linee1_3);
$linee1_3 = str_replace('u',$dokk10,$linee1_3);
$linee1_3 = str_replace('i',$dokk11,$linee1_3);
$linee1_3 = str_replace('o',$dokk12,$linee1_3);
$linee1_3 = str_replace('p',$dokk13,$linee1_3);
$linee1_3 = str_replace('a',$dokk14,$linee1_3);
$linee1_3 = str_replace('s',$dokk15,$linee1_3);
$linee1_3 = str_replace('d',$dokk16,$linee1_3);
$linee1_3 = str_replace('f',$dokk17,$linee1_3);
$linee1_3 = str_replace('g',$dokk18,$linee1_3);
$linee1_3 = str_replace('h',$dokk19,$linee1_3);
$linee1_3 = str_replace('j',$dokk20,$linee1_3);
$linee1_3 = str_replace('k',$dokk21,$linee1_3);
$linee1_3 = str_replace('l',$dokk22,$linee1_3);
$linee1_3 = str_replace('z',$dokk23,$linee1_3);
$linee1_3 = str_replace('x',$dokk24,$linee1_3);
$linee1_3 = str_replace('c',$dokk25,$linee1_3);
$linee1_3 = str_replace('v',$dokk26,$linee1_3);
$linee1_3 = str_replace('b',$dokk27,$linee1_3);
$linee1_3 = str_replace('n',$dokk28,$linee1_3);
$linee1_3 = str_replace('m',$dokk29,$linee1_3);
$linee1_3 = str_replace('*',$dokk30,$linee1_3);
}else{
$linee1_3 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee14.txt")){
$linee1_4 = file_get_contents("keyboard/create/linee14.txt");
if($linee1_4 != null ){
$linee1_4 = str_replace('1',$dokk1,$linee1_4);
$linee1_4 = str_replace('2',$dokk2,$linee1_4);
$linee1_4 = str_replace('3',$dokk3,$linee1_4);
$linee1_4 = str_replace('q',$dokk4,$linee1_4);
$linee1_4 = str_replace('w',$dokk5,$linee1_4);
$linee1_4 = str_replace('e',$dokk6,$linee1_4);
$linee1_4 = str_replace('r',$dokk7,$linee1_4);
$linee1_4 = str_replace('t',$dokk8,$linee1_4);
$linee1_4 = str_replace('y',$dokk9,$linee1_4);
$linee1_4 = str_replace('u',$dokk10,$linee1_4);
$linee1_4 = str_replace('i',$dokk11,$linee1_4);
$linee1_4 = str_replace('o',$dokk12,$linee1_4);
$linee1_4 = str_replace('p',$dokk13,$linee1_4);
$linee1_4 = str_replace('a',$dokk14,$linee1_4);
$linee1_4 = str_replace('s',$dokk15,$linee1_4);
$linee1_4 = str_replace('d',$dokk16,$linee1_4);
$linee1_4 = str_replace('f',$dokk17,$linee1_4);
$linee1_4 = str_replace('g',$dokk18,$linee1_4);
$linee1_4 = str_replace('h',$dokk19,$linee1_4);
$linee1_4 = str_replace('j',$dokk20,$linee1_4);
$linee1_4 = str_replace('k',$dokk21,$linee1_4);
$linee1_4 = str_replace('l',$dokk22,$linee1_4);
$linee1_4 = str_replace('z',$dokk23,$linee1_4);
$linee1_4 = str_replace('x',$dokk24,$linee1_4);
$linee1_4 = str_replace('c',$dokk25,$linee1_4);
$linee1_4 = str_replace('v',$dokk26,$linee1_4);
$linee1_4 = str_replace('b',$dokk27,$linee1_4);
$linee1_4 = str_replace('n',$dokk28,$linee1_4);
$linee1_4 = str_replace('m',$dokk29,$linee1_4);
$linee1_4 = str_replace('*',$dokk30,$linee1_4);
}else{
$linee1_4 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee21.txt")){
$linee2_1 = file_get_contents("keyboard/create/linee21.txt");
if($linee2_1 != null ){
$linee2_1 = str_replace('1',$dokk1,$linee2_1);
$linee2_1 = str_replace('2',$dokk2,$linee2_1);
$linee2_1 = str_replace('3',$dokk3,$linee2_1);
$linee2_1 = str_replace('q',$dokk4,$linee2_1);
$linee2_1 = str_replace('w',$dokk5,$linee2_1);
$linee2_1 = str_replace('e',$dokk6,$linee2_1);
$linee2_1 = str_replace('r',$dokk7,$linee2_1);
$linee2_1 = str_replace('t',$dokk8,$linee2_1);
$linee2_1 = str_replace('y',$dokk9,$linee2_1);
$linee2_1 = str_replace('u',$dokk10,$linee2_1);
$linee2_1 = str_replace('i',$dokk11,$linee2_1);
$linee2_1 = str_replace('o',$dokk12,$linee2_1);
$linee2_1 = str_replace('p',$dokk13,$linee2_1);
$linee2_1 = str_replace('a',$dokk14,$linee2_1);
$linee2_1 = str_replace('s',$dokk15,$linee2_1);
$linee2_1 = str_replace('d',$dokk16,$linee2_1);
$linee2_1 = str_replace('f',$dokk17,$linee2_1);
$linee2_1 = str_replace('g',$dokk18,$linee2_1);
$linee2_1 = str_replace('h',$dokk19,$linee2_1);
$linee2_1 = str_replace('j',$dokk20,$linee2_1);
$linee2_1 = str_replace('k',$dokk21,$linee2_1);
$linee2_1 = str_replace('l',$dokk22,$linee2_1);
$linee2_1 = str_replace('z',$dokk23,$linee2_1);
$linee2_1 = str_replace('x',$dokk24,$linee2_1);
$linee2_1 = str_replace('c',$dokk25,$linee2_1);
$linee2_1 = str_replace('v',$dokk26,$linee2_1);
$linee2_1 = str_replace('b',$dokk27,$linee2_1);
$linee2_1 = str_replace('n',$dokk28,$linee2_1);
$linee2_1 = str_replace('m',$dokk29,$linee2_1);
$linee2_1 = str_replace('*',$dokk30,$linee2_1);
}else{
$linee2_1 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee22.txt")){
$linee2_2 = file_get_contents("keyboard/create/linee22.txt");
if($linee2_2 != null ){
$linee2_2 = str_replace('1',$dokk1,$linee2_2);
$linee2_2 = str_replace('2',$dokk2,$linee2_2);
$linee2_2 = str_replace('3',$dokk3,$linee2_2);
$linee2_2 = str_replace('q',$dokk4,$linee2_2);
$linee2_2 = str_replace('w',$dokk5,$linee2_2);
$linee2_2 = str_replace('e',$dokk6,$linee2_2);
$linee2_2 = str_replace('r',$dokk7,$linee2_2);
$linee2_2 = str_replace('t',$dokk8,$linee2_2);
$linee2_2 = str_replace('y',$dokk9,$linee2_2);
$linee2_2 = str_replace('u',$dokk10,$linee2_2);
$linee2_2 = str_replace('i',$dokk11,$linee2_2);
$linee2_2 = str_replace('o',$dokk12,$linee2_2);
$linee2_2 = str_replace('p',$dokk13,$linee2_2);
$linee2_2 = str_replace('a',$dokk14,$linee2_2);
$linee2_2 = str_replace('s',$dokk15,$linee2_2);
$linee2_2 = str_replace('d',$dokk16,$linee2_2);
$linee2_2 = str_replace('f',$dokk17,$linee2_2);
$linee2_2 = str_replace('g',$dokk18,$linee2_2);
$linee2_2 = str_replace('h',$dokk19,$linee2_2);
$linee2_2 = str_replace('j',$dokk20,$linee2_2);
$linee2_2 = str_replace('k',$dokk21,$linee2_2);
$linee2_2 = str_replace('l',$dokk22,$linee2_2);
$linee2_2 = str_replace('z',$dokk23,$linee2_2);
$linee2_2 = str_replace('x',$dokk24,$linee2_2);
$linee2_2 = str_replace('c',$dokk25,$linee2_2);
$linee2_2 = str_replace('v',$dokk26,$linee2_2);
$linee2_2 = str_replace('b',$dokk27,$linee2_2);
$linee2_2 = str_replace('n',$dokk28,$linee2_2);
$linee2_2 = str_replace('m',$dokk29,$linee2_2);
$linee2_2 = str_replace('*',$dokk30,$linee2_2);
}else{
$linee2_2 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee23.txt")){
$linee2_3 = file_get_contents("keyboard/create/linee23.txt");
if($linee2_3 != null ){
$linee2_3 = str_replace('1',$dokk1,$linee2_3);
$linee2_3 = str_replace('2',$dokk2,$linee2_3);
$linee2_3 = str_replace('3',$dokk3,$linee2_3);
$linee2_3 = str_replace('q',$dokk4,$linee2_3);
$linee2_3 = str_replace('w',$dokk5,$linee2_3);
$linee2_3 = str_replace('e',$dokk6,$linee2_3);
$linee2_3 = str_replace('r',$dokk7,$linee2_3);
$linee2_3 = str_replace('t',$dokk8,$linee2_3);
$linee2_3 = str_replace('y',$dokk9,$linee2_3);
$linee2_3 = str_replace('u',$dokk10,$linee2_3);
$linee2_3 = str_replace('i',$dokk11,$linee2_3);
$linee2_3 = str_replace('o',$dokk12,$linee2_3);
$linee2_3 = str_replace('p',$dokk13,$linee2_3);
$linee2_3 = str_replace('a',$dokk14,$linee2_3);
$linee2_3 = str_replace('s',$dokk15,$linee2_3);
$linee2_3 = str_replace('d',$dokk16,$linee2_3);
$linee2_3 = str_replace('f',$dokk17,$linee2_3);
$linee2_3 = str_replace('g',$dokk18,$linee2_3);
$linee2_3 = str_replace('h',$dokk19,$linee2_3);
$linee2_3 = str_replace('j',$dokk20,$linee2_3);
$linee2_3 = str_replace('k',$dokk21,$linee2_3);
$linee2_3 = str_replace('l',$dokk22,$linee2_3);
$linee2_3 = str_replace('z',$dokk23,$linee2_3);
$linee2_3 = str_replace('x',$dokk24,$linee2_3);
$linee2_3 = str_replace('c',$dokk25,$linee2_3);
$linee2_3 = str_replace('v',$dokk26,$linee2_3);
$linee2_3 = str_replace('b',$dokk27,$linee2_3);
$linee2_3 = str_replace('n',$dokk28,$linee2_3);
$linee2_3 = str_replace('m',$dokk29,$linee2_3);
$linee2_3 = str_replace('*',$dokk30,$linee2_3);
}else{
$linee2_3 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee24.txt")){
$linee2_4 = file_get_contents("keyboard/create/linee24.txt");
if($linee2_4 != null ){
$linee2_4 = str_replace('1',$dokk1,$linee2_4);
$linee2_4 = str_replace('2',$dokk2,$linee2_4);
$linee2_4 = str_replace('3',$dokk3,$linee2_4);
$linee2_4 = str_replace('q',$dokk4,$linee2_4);
$linee2_4 = str_replace('w',$dokk5,$linee2_4);
$linee2_4 = str_replace('e',$dokk6,$linee2_4);
$linee2_4 = str_replace('r',$dokk7,$linee2_4);
$linee2_4 = str_replace('t',$dokk8,$linee2_4);
$linee2_4 = str_replace('y',$dokk9,$linee2_4);
$linee2_4 = str_replace('u',$dokk10,$linee2_4);
$linee2_4 = str_replace('i',$dokk11,$linee2_4);
$linee2_4 = str_replace('o',$dokk12,$linee2_4);
$linee2_4 = str_replace('p',$dokk13,$linee2_4);
$linee2_4 = str_replace('a',$dokk14,$linee2_4);
$linee2_4 = str_replace('s',$dokk15,$linee2_4);
$linee2_4 = str_replace('d',$dokk16,$linee2_4);
$linee2_4 = str_replace('f',$dokk17,$linee2_4);
$linee2_4 = str_replace('g',$dokk18,$linee2_4);
$linee2_4 = str_replace('h',$dokk19,$linee2_4);
$linee2_4 = str_replace('j',$dokk20,$linee2_4);
$linee2_4 = str_replace('k',$dokk21,$linee2_4);
$linee2_4 = str_replace('l',$dokk22,$linee2_4);
$linee2_4 = str_replace('z',$dokk23,$linee2_4);
$linee2_4 = str_replace('x',$dokk24,$linee2_4);
$linee2_4 = str_replace('c',$dokk25,$linee2_4);
$linee2_4 = str_replace('v',$dokk26,$linee2_4);
$linee2_4 = str_replace('b',$dokk27,$linee2_4);
$linee2_4 = str_replace('n',$dokk28,$linee2_4);
$linee2_4 = str_replace('m',$dokk29,$linee2_4);
$linee2_4 = str_replace('*',$dokk30,$linee2_4);
}else{
$linee2_4 = "➕";
}}

//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee31.txt")){
$linee3_1 = file_get_contents("keyboard/create/linee31.txt");
if($linee3_1 != null ){
$linee3_1 = str_replace('1',$dokk1,$linee3_1);
$linee3_1 = str_replace('2',$dokk2,$linee3_1);
$linee3_1 = str_replace('3',$dokk3,$linee3_1);
$linee3_1 = str_replace('q',$dokk4,$linee3_1);
$linee3_1 = str_replace('w',$dokk5,$linee3_1);
$linee3_1 = str_replace('e',$dokk6,$linee3_1);
$linee3_1 = str_replace('r',$dokk7,$linee3_1);
$linee3_1 = str_replace('t',$dokk8,$linee3_1);
$linee3_1 = str_replace('y',$dokk9,$linee3_1);
$linee3_1 = str_replace('u',$dokk10,$linee3_1);
$linee3_1 = str_replace('i',$dokk11,$linee3_1);
$linee3_1 = str_replace('o',$dokk12,$linee3_1);
$linee3_1 = str_replace('p',$dokk13,$linee3_1);
$linee3_1 = str_replace('a',$dokk14,$linee3_1);
$linee3_1 = str_replace('s',$dokk15,$linee3_1);
$linee3_1 = str_replace('d',$dokk16,$linee3_1);
$linee3_1 = str_replace('f',$dokk17,$linee3_1);
$linee3_1 = str_replace('g',$dokk18,$linee3_1);
$linee3_1 = str_replace('h',$dokk19,$linee3_1);
$linee3_1 = str_replace('j',$dokk20,$linee3_1);
$linee3_1 = str_replace('k',$dokk21,$linee3_1);
$linee3_1 = str_replace('l',$dokk22,$linee3_1);
$linee3_1 = str_replace('z',$dokk23,$linee3_1);
$linee3_1 = str_replace('x',$dokk24,$linee3_1);
$linee3_1 = str_replace('c',$dokk25,$linee3_1);
$linee3_1 = str_replace('v',$dokk26,$linee3_1);
$linee3_1 = str_replace('b',$dokk27,$linee3_1);
$linee3_1 = str_replace('n',$dokk28,$linee3_1);
$linee3_1 = str_replace('m',$dokk29,$linee3_1);
$linee3_1 = str_replace('*',$dokk30,$linee3_1);
}else{
$linee3_1 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee32.txt")){
$linee3_2 = file_get_contents("keyboard/create/linee32.txt");
if($linee3_2 != null ){
$linee3_2 = str_replace('1',$dokk1,$linee3_2);
$linee3_2 = str_replace('2',$dokk2,$linee3_2);
$linee3_2 = str_replace('3',$dokk3,$linee3_2);
$linee3_2 = str_replace('q',$dokk4,$linee3_2);
$linee3_2 = str_replace('w',$dokk5,$linee3_2);
$linee3_2 = str_replace('e',$dokk6,$linee3_2);
$linee3_2 = str_replace('r',$dokk7,$linee3_2);
$linee3_2 = str_replace('t',$dokk8,$linee3_2);
$linee3_2 = str_replace('y',$dokk9,$linee3_2);
$linee3_2 = str_replace('u',$dokk10,$linee3_2);
$linee3_2 = str_replace('i',$dokk11,$linee3_2);
$linee3_2 = str_replace('o',$dokk12,$linee3_2);
$linee3_2 = str_replace('p',$dokk13,$linee3_2);
$linee3_2 = str_replace('a',$dokk14,$linee3_2);
$linee3_2 = str_replace('s',$dokk15,$linee3_2);
$linee3_2 = str_replace('d',$dokk16,$linee3_2);
$linee3_2 = str_replace('f',$dokk17,$linee3_2);
$linee3_2 = str_replace('g',$dokk18,$linee3_2);
$linee3_2 = str_replace('h',$dokk19,$linee3_2);
$linee3_2 = str_replace('j',$dokk20,$linee3_2);
$linee3_2 = str_replace('k',$dokk21,$linee3_2);
$linee3_2 = str_replace('l',$dokk22,$linee3_2);
$linee3_2 = str_replace('z',$dokk23,$linee3_2);
$linee3_2 = str_replace('x',$dokk24,$linee3_2);
$linee3_2 = str_replace('c',$dokk25,$linee3_2);
$linee3_2 = str_replace('v',$dokk26,$linee3_2);
$linee3_2 = str_replace('b',$dokk27,$linee3_2);
$linee3_2 = str_replace('n',$dokk28,$linee3_2);
$linee3_2 = str_replace('m',$dokk29,$linee3_2);
$linee3_2 = str_replace('*',$dokk30,$linee3_2);
}else{
$linee3_2 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee33.txt")){
$linee3_3 = file_get_contents("keyboard/create/linee33.txt");
if($linee3_3 != null ){
$linee3_3 = str_replace('1',$dokk1,$linee3_3);
$linee3_3 = str_replace('2',$dokk2,$linee3_3);
$linee3_3 = str_replace('3',$dokk3,$linee3_3);
$linee3_3 = str_replace('q',$dokk4,$linee3_3);
$linee3_3 = str_replace('w',$dokk5,$linee3_3);
$linee3_3 = str_replace('e',$dokk6,$linee3_3);
$linee3_3 = str_replace('r',$dokk7,$linee3_3);
$linee3_3 = str_replace('t',$dokk8,$linee3_3);
$linee3_3 = str_replace('y',$dokk9,$linee3_3);
$linee3_3 = str_replace('u',$dokk10,$linee3_3);
$linee3_3 = str_replace('i',$dokk11,$linee3_3);
$linee3_3 = str_replace('o',$dokk12,$linee3_3);
$linee3_3 = str_replace('p',$dokk13,$linee3_3);
$linee3_3 = str_replace('a',$dokk14,$linee3_3);
$linee3_3 = str_replace('s',$dokk15,$linee3_3);
$linee3_3 = str_replace('d',$dokk16,$linee3_3);
$linee3_3 = str_replace('f',$dokk17,$linee3_3);
$linee3_3 = str_replace('g',$dokk18,$linee3_3);
$linee3_3 = str_replace('h',$dokk19,$linee3_3);
$linee3_3 = str_replace('j',$dokk20,$linee3_3);
$linee3_3 = str_replace('k',$dokk21,$linee3_3);
$linee3_3 = str_replace('l',$dokk22,$linee3_3);
$linee3_3 = str_replace('z',$dokk23,$linee3_3);
$linee3_3 = str_replace('x',$dokk24,$linee3_3);
$linee3_3 = str_replace('c',$dokk25,$linee3_3);
$linee3_3 = str_replace('v',$dokk26,$linee3_3);
$linee3_3 = str_replace('b',$dokk27,$linee3_3);
$linee3_3 = str_replace('n',$dokk28,$linee3_3);
$linee3_3 = str_replace('m',$dokk29,$linee3_3);
$linee3_3 = str_replace('*',$dokk30,$linee3_3);
}else{
$linee3_3 = "➕";
}}//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee34.txt")){
$linee3_4 = file_get_contents("keyboard/create/linee34.txt");
if($linee3_4 != null ){
$linee3_4 = str_replace('1',$dokk1,$linee3_4);
$linee3_4 = str_replace('2',$dokk2,$linee3_4);
$linee3_4 = str_replace('3',$dokk3,$linee3_4);
$linee3_4 = str_replace('q',$dokk4,$linee3_4);
$linee3_4 = str_replace('w',$dokk5,$linee3_4);
$linee3_4 = str_replace('e',$dokk6,$linee3_4);
$linee3_4 = str_replace('r',$dokk7,$linee3_4);
$linee3_4 = str_replace('t',$dokk8,$linee3_4);
$linee3_4 = str_replace('y',$dokk9,$linee3_4);
$linee3_4 = str_replace('u',$dokk10,$linee3_4);
$linee3_4 = str_replace('i',$dokk11,$linee3_4);
$linee3_4 = str_replace('o',$dokk12,$linee3_4);
$linee3_4 = str_replace('p',$dokk13,$linee3_4);
$linee3_4 = str_replace('a',$dokk14,$linee3_4);
$linee3_4 = str_replace('s',$dokk15,$linee3_4);
$linee3_4 = str_replace('d',$dokk16,$linee3_4);
$linee3_4 = str_replace('f',$dokk17,$linee3_4);
$linee3_4 = str_replace('g',$dokk18,$linee3_4);
$linee3_4 = str_replace('h',$dokk19,$linee3_4);
$linee3_4 = str_replace('j',$dokk20,$linee3_4);
$linee3_4 = str_replace('k',$dokk21,$linee3_4);
$linee3_4 = str_replace('l',$dokk22,$linee3_4);
$linee3_4 = str_replace('z',$dokk23,$linee3_4);
$linee3_4 = str_replace('x',$dokk24,$linee3_4);
$linee3_4 = str_replace('c',$dokk25,$linee3_4);
$linee3_4 = str_replace('v',$dokk26,$linee3_4);
$linee3_4 = str_replace('b',$dokk27,$linee3_4);
$linee3_4 = str_replace('n',$dokk28,$linee3_4);
$linee3_4 = str_replace('m',$dokk29,$linee3_4);
$linee3_4 = str_replace('*',$dokk30,$linee3_4);
}else{
$linee3_4 = "➕";
}}

//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee41.txt")){
$linee4_1 = file_get_contents("keyboard/create/linee41.txt");
if($linee4_1 != null ){
$linee4_1 = str_replace('1',$dokk1,$linee4_1);
$linee4_1 = str_replace('2',$dokk2,$linee4_1);
$linee4_1 = str_replace('3',$dokk3,$linee4_1);
$linee4_1 = str_replace('q',$dokk4,$linee4_1);
$linee4_1 = str_replace('w',$dokk5,$linee4_1);
$linee4_1 = str_replace('e',$dokk6,$linee4_1);
$linee4_1 = str_replace('r',$dokk7,$linee4_1);
$linee4_1 = str_replace('t',$dokk8,$linee4_1);
$linee4_1 = str_replace('y',$dokk9,$linee4_1);
$linee4_1 = str_replace('u',$dokk10,$linee4_1);
$linee4_1 = str_replace('i',$dokk11,$linee4_1);
$linee4_1 = str_replace('o',$dokk12,$linee4_1);
$linee4_1 = str_replace('p',$dokk13,$linee4_1);
$linee4_1 = str_replace('a',$dokk14,$linee4_1);
$linee4_1 = str_replace('s',$dokk15,$linee4_1);
$linee4_1 = str_replace('d',$dokk16,$linee4_1);
$linee4_1 = str_replace('f',$dokk17,$linee4_1);
$linee4_1 = str_replace('g',$dokk18,$linee4_1);
$linee4_1 = str_replace('h',$dokk19,$linee4_1);
$linee4_1 = str_replace('j',$dokk20,$linee4_1);
$linee4_1 = str_replace('k',$dokk21,$linee4_1);
$linee4_1 = str_replace('l',$dokk22,$linee4_1);
$linee4_1 = str_replace('z',$dokk23,$linee4_1);
$linee4_1 = str_replace('x',$dokk24,$linee4_1);
$linee4_1 = str_replace('c',$dokk25,$linee4_1);
$linee4_1 = str_replace('v',$dokk26,$linee4_1);
$linee4_1 = str_replace('b',$dokk27,$linee4_1);
$linee4_1 = str_replace('n',$dokk28,$linee4_1);
$linee4_1 = str_replace('m',$dokk29,$linee4_1);
$linee4_1 = str_replace('*',$dokk30,$linee4_1);
}else{
$linee4_1 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee42.txt")){
$linee4_2 = file_get_contents("keyboard/create/linee42.txt");
if($linee4_2 != null ){
$linee4_2 = str_replace('1',$dokk1,$linee4_2);
$linee4_2 = str_replace('2',$dokk2,$linee4_2);
$linee4_2 = str_replace('3',$dokk3,$linee4_2);
$linee4_2 = str_replace('q',$dokk4,$linee4_2);
$linee4_2 = str_replace('w',$dokk5,$linee4_2);
$linee4_2 = str_replace('e',$dokk6,$linee4_2);
$linee4_2 = str_replace('r',$dokk7,$linee4_2);
$linee4_2 = str_replace('t',$dokk8,$linee4_2);
$linee4_2 = str_replace('y',$dokk9,$linee4_2);
$linee4_2 = str_replace('u',$dokk10,$linee4_2);
$linee4_2 = str_replace('i',$dokk11,$linee4_2);
$linee4_2 = str_replace('o',$dokk12,$linee4_2);
$linee4_2 = str_replace('p',$dokk13,$linee4_2);
$linee4_2 = str_replace('a',$dokk14,$linee4_2);
$linee4_2 = str_replace('s',$dokk15,$linee4_2);
$linee4_2 = str_replace('d',$dokk16,$linee4_2);
$linee4_2 = str_replace('f',$dokk17,$linee4_2);
$linee4_2 = str_replace('g',$dokk18,$linee4_2);
$linee4_2 = str_replace('h',$dokk19,$linee4_2);
$linee4_2 = str_replace('j',$dokk20,$linee4_2);
$linee4_2 = str_replace('k',$dokk21,$linee4_2);
$linee4_2 = str_replace('l',$dokk22,$linee4_2);
$linee4_2 = str_replace('z',$dokk23,$linee4_2);
$linee4_2 = str_replace('x',$dokk24,$linee4_2);
$linee4_2 = str_replace('c',$dokk25,$linee4_2);
$linee4_2 = str_replace('v',$dokk26,$linee4_2);
$linee4_2 = str_replace('b',$dokk27,$linee4_2);
$linee4_2 = str_replace('n',$dokk28,$linee4_2);
$linee4_2 = str_replace('m',$dokk29,$linee4_2);
$linee4_2 = str_replace('*',$dokk30,$linee4_2);
}else{
$linee4_2 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee43.txt")){
$linee4_3 = file_get_contents("keyboard/create/linee43.txt");
if($linee4_3 != null ){
$linee4_3 = str_replace('1',$dokk1,$linee4_3);
$linee4_3 = str_replace('2',$dokk2,$linee4_3);
$linee4_3 = str_replace('3',$dokk3,$linee4_3);
$linee4_3 = str_replace('q',$dokk4,$linee4_3);
$linee4_3 = str_replace('w',$dokk5,$linee4_3);
$linee4_3 = str_replace('e',$dokk6,$linee4_3);
$linee4_3 = str_replace('r',$dokk7,$linee4_3);
$linee4_3 = str_replace('t',$dokk8,$linee4_3);
$linee4_3 = str_replace('y',$dokk9,$linee4_3);
$linee4_3 = str_replace('u',$dokk10,$linee4_3);
$linee4_3 = str_replace('i',$dokk11,$linee4_3);
$linee4_3 = str_replace('o',$dokk12,$linee4_3);
$linee4_3 = str_replace('p',$dokk13,$linee4_3);
$linee4_3 = str_replace('a',$dokk14,$linee4_3);
$linee4_3 = str_replace('s',$dokk15,$linee4_3);
$linee4_3 = str_replace('d',$dokk16,$linee4_3);
$linee4_3 = str_replace('f',$dokk17,$linee4_3);
$linee4_3 = str_replace('g',$dokk18,$linee4_3);
$linee4_3 = str_replace('h',$dokk19,$linee4_3);
$linee4_3 = str_replace('j',$dokk20,$linee4_3);
$linee4_3 = str_replace('k',$dokk21,$linee4_3);
$linee4_3 = str_replace('l',$dokk22,$linee4_3);
$linee4_3 = str_replace('z',$dokk23,$linee4_3);
$linee4_3 = str_replace('x',$dokk24,$linee4_3);
$linee4_3 = str_replace('c',$dokk25,$linee4_3);
$linee4_3 = str_replace('v',$dokk26,$linee4_3);
$linee4_3 = str_replace('b',$dokk27,$linee4_3);
$linee4_3 = str_replace('n',$dokk28,$linee4_3);
$linee4_3 = str_replace('m',$dokk29,$linee4_3);
$linee4_3 = str_replace('*',$dokk30,$linee4_3);
}else{
$linee4_3 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee44.txt")){
$linee4_4 = file_get_contents("keyboard/create/linee44.txt");
if($linee4_4 != null ){
$linee4_4 = str_replace('1',$dokk1,$linee4_4);
$linee4_4 = str_replace('2',$dokk2,$linee4_4);
$linee4_4 = str_replace('3',$dokk3,$linee4_4);
$linee4_4 = str_replace('q',$dokk4,$linee4_4);
$linee4_4 = str_replace('w',$dokk5,$linee4_4);
$linee4_4 = str_replace('e',$dokk6,$linee4_4);
$linee4_4 = str_replace('r',$dokk7,$linee4_4);
$linee4_4 = str_replace('t',$dokk8,$linee4_4);
$linee4_4 = str_replace('y',$dokk9,$linee4_4);
$linee4_4 = str_replace('u',$dokk10,$linee4_4);
$linee4_4 = str_replace('i',$dokk11,$linee4_4);
$linee4_4 = str_replace('o',$dokk12,$linee4_4);
$linee4_4 = str_replace('p',$dokk13,$linee4_4);
$linee4_4 = str_replace('a',$dokk14,$linee4_4);
$linee4_4 = str_replace('s',$dokk15,$linee4_4);
$linee4_4 = str_replace('d',$dokk16,$linee4_4);
$linee4_4 = str_replace('f',$dokk17,$linee4_4);
$linee4_4 = str_replace('g',$dokk18,$linee4_4);
$linee4_4 = str_replace('h',$dokk19,$linee4_4);
$linee4_4 = str_replace('j',$dokk20,$linee4_4);
$linee4_4 = str_replace('k',$dokk21,$linee4_4);
$linee4_4 = str_replace('l',$dokk22,$linee4_4);
$linee4_4 = str_replace('z',$dokk23,$linee4_4);
$linee4_4 = str_replace('x',$dokk24,$linee4_4);
$linee4_4 = str_replace('c',$dokk25,$linee4_4);
$linee4_4 = str_replace('v',$dokk26,$linee4_4);
$linee4_4 = str_replace('b',$dokk27,$linee4_4);
$linee4_4 = str_replace('n',$dokk28,$linee4_4);
$linee4_4 = str_replace('m',$dokk29,$linee4_4);
$linee4_4 = str_replace('*',$dokk30,$linee4_4);
}else{
$linee4_4 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee51.txt")){
$linee5_1 = file_get_contents("keyboard/create/linee51.txt");
if($linee5_1 != null ){
$linee5_1 = str_replace('1',$dokk1,$linee5_1);
$linee5_1 = str_replace('2',$dokk2,$linee5_1);
$linee5_1 = str_replace('3',$dokk3,$linee5_1);
$linee5_1 = str_replace('q',$dokk5,$linee5_1);
$linee5_1 = str_replace('w',$dokk5,$linee5_1);
$linee5_1 = str_replace('e',$dokk6,$linee5_1);
$linee5_1 = str_replace('r',$dokk7,$linee5_1);
$linee5_1 = str_replace('t',$dokk8,$linee5_1);
$linee5_1 = str_replace('y',$dokk9,$linee5_1);
$linee5_1 = str_replace('u',$dokk10,$linee5_1);
$linee5_1 = str_replace('i',$dokk11,$linee5_1);
$linee5_1 = str_replace('o',$dokk12,$linee5_1);
$linee5_1 = str_replace('p',$dokk13,$linee5_1);
$linee5_1 = str_replace('a',$dokk14,$linee5_1);
$linee5_1 = str_replace('s',$dokk15,$linee5_1);
$linee5_1 = str_replace('d',$dokk16,$linee5_1);
$linee5_1 = str_replace('f',$dokk17,$linee5_1);
$linee5_1 = str_replace('g',$dokk18,$linee5_1);
$linee5_1 = str_replace('h',$dokk19,$linee5_1);
$linee5_1 = str_replace('j',$dokk20,$linee5_1);
$linee5_1 = str_replace('k',$dokk21,$linee5_1);
$linee5_1 = str_replace('l',$dokk22,$linee5_1);
$linee5_1 = str_replace('z',$dokk23,$linee5_1);
$linee5_1 = str_replace('x',$dokk24,$linee5_1);
$linee5_1 = str_replace('c',$dokk25,$linee5_1);
$linee5_1 = str_replace('v',$dokk26,$linee5_1);
$linee5_1 = str_replace('b',$dokk27,$linee5_1);
$linee5_1 = str_replace('n',$dokk28,$linee5_1);
$linee5_1 = str_replace('m',$dokk29,$linee5_1);
$linee5_1 = str_replace('*',$dokk30,$linee5_1);
}else{
$linee5_1 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee52.txt")){
$linee5_2 = file_get_contents("keyboard/create/linee52.txt");
if($linee5_2 != null ){
$linee5_2 = str_replace('1',$dokk1,$linee5_2);
$linee5_2 = str_replace('2',$dokk2,$linee5_2);
$linee5_2 = str_replace('3',$dokk3,$linee5_2);
$linee5_2 = str_replace('q',$dokk4,$linee5_2);
$linee5_2 = str_replace('w',$dokk5,$linee5_2);
$linee5_2 = str_replace('e',$dokk6,$linee5_2);
$linee5_2 = str_replace('r',$dokk7,$linee5_2);
$linee5_2 = str_replace('t',$dokk8,$linee5_2);
$linee5_2 = str_replace('y',$dokk9,$linee5_2);
$linee5_2 = str_replace('u',$dokk10,$linee5_2);
$linee5_2 = str_replace('i',$dokk11,$linee5_2);
$linee5_2 = str_replace('o',$dokk12,$linee5_2);
$linee5_2 = str_replace('p',$dokk13,$linee5_2);
$linee5_2 = str_replace('a',$dokk14,$linee5_2);
$linee5_2 = str_replace('s',$dokk15,$linee5_2);
$linee5_2 = str_replace('d',$dokk16,$linee5_2);
$linee5_2 = str_replace('f',$dokk17,$linee5_2);
$linee5_2 = str_replace('g',$dokk18,$linee5_2);
$linee5_2 = str_replace('h',$dokk19,$linee5_2);
$linee5_2 = str_replace('j',$dokk20,$linee5_2);
$linee5_2 = str_replace('k',$dokk21,$linee5_2);
$linee5_2 = str_replace('l',$dokk22,$linee5_2);
$linee5_2 = str_replace('z',$dokk23,$linee5_2);
$linee5_2 = str_replace('x',$dokk24,$linee5_2);
$linee5_2 = str_replace('c',$dokk25,$linee5_2);
$linee5_2 = str_replace('v',$dokk26,$linee5_2);
$linee5_2 = str_replace('b',$dokk27,$linee5_2);
$linee5_2 = str_replace('n',$dokk28,$linee5_2);
$linee5_2 = str_replace('m',$dokk29,$linee5_2);
$linee5_2 = str_replace('*',$dokk30,$linee5_2);
}else{
$linee5_2 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee53.txt")){
$linee5_3 = file_get_contents("keyboard/create/linee53.txt");
if($linee5_3 != null ){
$linee5_3 = str_replace('1',$dokk1,$linee5_3);
$linee5_3 = str_replace('2',$dokk2,$linee5_3);
$linee5_3 = str_replace('3',$dokk3,$linee5_3);
$linee5_3 = str_replace('q',$dokk4,$linee5_3);
$linee5_3 = str_replace('w',$dokk5,$linee5_3);
$linee5_3 = str_replace('e',$dokk6,$linee5_3);
$linee5_3 = str_replace('r',$dokk7,$linee5_3);
$linee5_3 = str_replace('t',$dokk8,$linee5_3);
$linee5_3 = str_replace('y',$dokk9,$linee5_3);
$linee5_3 = str_replace('u',$dokk10,$linee5_3);
$linee5_3 = str_replace('i',$dokk11,$linee5_3);
$linee5_3 = str_replace('o',$dokk12,$linee5_3);
$linee5_3 = str_replace('p',$dokk13,$linee5_3);
$linee5_3 = str_replace('a',$dokk14,$linee5_3);
$linee5_3 = str_replace('s',$dokk15,$linee5_3);
$linee5_3 = str_replace('d',$dokk16,$linee5_3);
$linee5_3 = str_replace('f',$dokk17,$linee5_3);
$linee5_3 = str_replace('g',$dokk18,$linee5_3);
$linee5_3 = str_replace('h',$dokk19,$linee5_3);
$linee5_3 = str_replace('j',$dokk20,$linee5_3);
$linee5_3 = str_replace('k',$dokk21,$linee5_3);
$linee5_3 = str_replace('l',$dokk22,$linee5_3);
$linee5_3 = str_replace('z',$dokk23,$linee5_3);
$linee5_3 = str_replace('x',$dokk24,$linee5_3);
$linee5_3 = str_replace('c',$dokk25,$linee5_3);
$linee5_3 = str_replace('v',$dokk26,$linee5_3);
$linee5_3 = str_replace('b',$dokk27,$linee5_3);
$linee5_3 = str_replace('n',$dokk28,$linee5_3);
$linee5_3 = str_replace('m',$dokk29,$linee5_3);
$linee5_3 = str_replace('*',$dokk30,$linee5_3);
}else{
$linee5_3 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee54.txt")){
$linee5_4 = file_get_contents("keyboard/create/linee54.txt");
if($linee5_4 != null ){
$linee5_4 = str_replace('1',$dokk1,$linee5_4);
$linee5_4 = str_replace('2',$dokk2,$linee5_4);
$linee5_4 = str_replace('3',$dokk3,$linee5_4);
$linee5_4 = str_replace('q',$dokk4,$linee5_4);
$linee5_4 = str_replace('w',$dokk5,$linee5_4);
$linee5_4 = str_replace('e',$dokk6,$linee5_4);
$linee5_4 = str_replace('r',$dokk7,$linee5_4);
$linee5_4 = str_replace('t',$dokk8,$linee5_4);
$linee5_4 = str_replace('y',$dokk9,$linee5_4);
$linee5_4 = str_replace('u',$dokk10,$linee5_4);
$linee5_4 = str_replace('i',$dokk11,$linee5_4);
$linee5_4 = str_replace('o',$dokk12,$linee5_4);
$linee5_4 = str_replace('p',$dokk13,$linee5_4);
$linee5_4 = str_replace('a',$dokk14,$linee5_4);
$linee5_4 = str_replace('s',$dokk15,$linee5_4);
$linee5_4 = str_replace('d',$dokk16,$linee5_4);
$linee5_4 = str_replace('f',$dokk17,$linee5_4);
$linee5_4 = str_replace('g',$dokk18,$linee5_4);
$linee5_4 = str_replace('h',$dokk19,$linee5_4);
$linee5_4 = str_replace('j',$dokk20,$linee5_4);
$linee5_4 = str_replace('k',$dokk21,$linee5_4);
$linee5_4 = str_replace('l',$dokk22,$linee5_4);
$linee5_4 = str_replace('z',$dokk23,$linee5_4);
$linee5_4 = str_replace('x',$dokk24,$linee5_4);
$linee5_4 = str_replace('c',$dokk25,$linee5_4);
$linee5_4 = str_replace('v',$dokk26,$linee5_4);
$linee5_4 = str_replace('b',$dokk27,$linee5_4);
$linee5_4 = str_replace('n',$dokk28,$linee5_4);
$linee5_4 = str_replace('m',$dokk29,$linee5_4);
$linee5_4 = str_replace('*',$dokk30,$linee5_4);
}else{
$linee5_4 = "➕";
}}
if(file_exists("keyboard/create/linee61.txt")){
$linee6_1 = file_get_contents("keyboard/create/linee61.txt");
if($linee6_1 != null ){
$linee6_1 = str_replace('1',$dokk1,$linee6_1);
$linee6_1 = str_replace('2',$dokk2,$linee6_1);
$linee6_1 = str_replace('3',$dokk3,$linee6_1);
$linee6_1 = str_replace('q',$dokk4,$linee6_1);
$linee6_1 = str_replace('w',$dokk5,$linee6_1);
$linee6_1 = str_replace('e',$dokk6,$linee6_1);
$linee6_1 = str_replace('r',$dokk7,$linee6_1);
$linee6_1 = str_replace('t',$dokk8,$linee6_1);
$linee6_1 = str_replace('y',$dokk9,$linee6_1);
$linee6_1 = str_replace('u',$dokk10,$linee6_1);
$linee6_1 = str_replace('i',$dokk11,$linee6_1);
$linee6_1 = str_replace('o',$dokk12,$linee6_1);
$linee6_1 = str_replace('p',$dokk13,$linee6_1);
$linee6_1 = str_replace('a',$dokk14,$linee6_1);
$linee6_1 = str_replace('s',$dokk15,$linee6_1);
$linee6_1 = str_replace('d',$dokk16,$linee6_1);
$linee6_1 = str_replace('f',$dokk17,$linee6_1);
$linee6_1 = str_replace('g',$dokk18,$linee6_1);
$linee6_1 = str_replace('h',$dokk19,$linee6_1);
$linee6_1 = str_replace('j',$dokk20,$linee6_1);
$linee6_1 = str_replace('k',$dokk21,$linee6_1);
$linee6_1 = str_replace('l',$dokk22,$linee6_1);
$linee6_1 = str_replace('z',$dokk23,$linee6_1);
$linee6_1 = str_replace('x',$dokk24,$linee6_1);
$linee6_1 = str_replace('c',$dokk25,$linee6_1);
$linee6_1 = str_replace('v',$dokk26,$linee6_1);
$linee6_1 = str_replace('b',$dokk27,$linee6_1);
$linee6_1 = str_replace('n',$dokk28,$linee6_1);
$linee6_1 = str_replace('m',$dokk29,$linee6_1);
$linee6_1 = str_replace('*',$dokk30,$linee6_1);
}else{
$linee6_1 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee62.txt")){
$linee6_2 = file_get_contents("keyboard/create/linee62.txt");
if($linee6_2 != null ){
$linee6_2 = str_replace('1',$dokk1,$linee6_2);
$linee6_2 = str_replace('2',$dokk2,$linee6_2);
$linee6_2 = str_replace('3',$dokk3,$linee6_2);
$linee6_2 = str_replace('q',$dokk4,$linee6_2);
$linee6_2 = str_replace('w',$dokk5,$linee6_2);
$linee6_2 = str_replace('e',$dokk6,$linee6_2);
$linee6_2 = str_replace('r',$dokk7,$linee6_2);
$linee6_2 = str_replace('t',$dokk8,$linee6_2);
$linee6_2 = str_replace('y',$dokk9,$linee6_2);
$linee6_2 = str_replace('u',$dokk10,$linee6_2);
$linee6_2 = str_replace('i',$dokk11,$linee6_2);
$linee6_2 = str_replace('o',$dokk12,$linee6_2);
$linee6_2 = str_replace('p',$dokk13,$linee6_2);
$linee6_2 = str_replace('a',$dokk14,$linee6_2);
$linee6_2 = str_replace('s',$dokk15,$linee6_2);
$linee6_2 = str_replace('d',$dokk16,$linee6_2);
$linee6_2 = str_replace('f',$dokk17,$linee6_2);
$linee6_2 = str_replace('g',$dokk18,$linee6_2);
$linee6_2 = str_replace('h',$dokk19,$linee6_2);
$linee6_2 = str_replace('j',$dokk20,$linee6_2);
$linee6_2 = str_replace('k',$dokk21,$linee6_2);
$linee6_2 = str_replace('l',$dokk22,$linee6_2);
$linee6_2 = str_replace('z',$dokk23,$linee6_2);
$linee6_2 = str_replace('x',$dokk24,$linee6_2);
$linee6_2 = str_replace('c',$dokk25,$linee6_2);
$linee6_2 = str_replace('v',$dokk26,$linee6_2);
$linee6_2 = str_replace('b',$dokk27,$linee6_2);
$linee6_2 = str_replace('n',$dokk28,$linee6_2);
$linee6_2 = str_replace('m',$dokk29,$linee6_2);
$linee6_2 = str_replace('*',$dokk30,$linee6_2);
}else{
$linee6_2 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee63.txt")){
$linee6_3 = file_get_contents("keyboard/create/linee63.txt");
if($linee6_3 != null ){
$linee6_3 = str_replace('1',$dokk1,$linee6_3);
$linee6_3 = str_replace('2',$dokk2,$linee6_3);
$linee6_3 = str_replace('3',$dokk3,$linee6_3);
$linee6_3 = str_replace('q',$dokk4,$linee6_3);
$linee6_3 = str_replace('w',$dokk5,$linee6_3);
$linee6_3 = str_replace('e',$dokk6,$linee6_3);
$linee6_3 = str_replace('r',$dokk7,$linee6_3);
$linee6_3 = str_replace('t',$dokk8,$linee6_3);
$linee6_3 = str_replace('y',$dokk9,$linee6_3);
$linee6_3 = str_replace('u',$dokk10,$linee6_3);
$linee6_3 = str_replace('i',$dokk11,$linee6_3);
$linee6_3 = str_replace('o',$dokk12,$linee6_3);
$linee6_3 = str_replace('p',$dokk13,$linee6_3);
$linee6_3 = str_replace('a',$dokk14,$linee6_3);
$linee6_3 = str_replace('s',$dokk15,$linee6_3);
$linee6_3 = str_replace('d',$dokk16,$linee6_3);
$linee6_3 = str_replace('f',$dokk17,$linee6_3);
$linee6_3 = str_replace('g',$dokk18,$linee6_3);
$linee6_3 = str_replace('h',$dokk19,$linee6_3);
$linee6_3 = str_replace('j',$dokk20,$linee6_3);
$linee6_3 = str_replace('k',$dokk21,$linee6_3);
$linee6_3 = str_replace('l',$dokk22,$linee6_3);
$linee6_3 = str_replace('z',$dokk23,$linee6_3);
$linee6_3 = str_replace('x',$dokk24,$linee6_3);
$linee6_3 = str_replace('c',$dokk25,$linee6_3);
$linee6_3 = str_replace('v',$dokk26,$linee6_3);
$linee6_3 = str_replace('b',$dokk27,$linee6_3);
$linee6_3 = str_replace('n',$dokk28,$linee6_3);
$linee6_3 = str_replace('m',$dokk29,$linee6_3);
$linee6_3 = str_replace('*',$dokk30,$linee6_3);
}else{
$linee6_3 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee64.txt")){
$linee6_4 = file_get_contents("keyboard/create/linee64.txt");
if($linee6_4 != null ){
$linee6_4 = str_replace('1',$dokk1,$linee6_4);
$linee6_4 = str_replace('2',$dokk2,$linee6_4);
$linee6_4 = str_replace('3',$dokk3,$linee6_4);
$linee6_4 = str_replace('q',$dokk4,$linee6_4);
$linee6_4 = str_replace('w',$dokk5,$linee6_4);
$linee6_4 = str_replace('e',$dokk6,$linee6_4);
$linee6_4 = str_replace('r',$dokk7,$linee6_4);
$linee6_4 = str_replace('t',$dokk8,$linee6_4);
$linee6_4 = str_replace('y',$dokk9,$linee6_4);
$linee6_4 = str_replace('u',$dokk10,$linee6_4);
$linee6_4 = str_replace('i',$dokk11,$linee6_4);
$linee6_4 = str_replace('o',$dokk12,$linee6_4);
$linee6_4 = str_replace('p',$dokk13,$linee6_4);
$linee6_4 = str_replace('a',$dokk14,$linee6_4);
$linee6_4 = str_replace('s',$dokk15,$linee6_4);
$linee6_4 = str_replace('d',$dokk16,$linee6_4);
$linee6_4 = str_replace('f',$dokk17,$linee6_4);
$linee6_4 = str_replace('g',$dokk18,$linee6_4);
$linee6_4 = str_replace('h',$dokk19,$linee6_4);
$linee6_4 = str_replace('j',$dokk20,$linee6_4);
$linee6_4 = str_replace('k',$dokk21,$linee6_4);
$linee6_4 = str_replace('l',$dokk22,$linee6_4);
$linee6_4 = str_replace('z',$dokk23,$linee6_4);
$linee6_4 = str_replace('x',$dokk24,$linee6_4);
$linee6_4 = str_replace('c',$dokk25,$linee6_4);
$linee6_4 = str_replace('v',$dokk26,$linee6_4);
$linee6_4 = str_replace('b',$dokk27,$linee6_4);
$linee6_4 = str_replace('n',$dokk28,$linee6_4);
$linee6_4 = str_replace('m',$dokk29,$linee6_4);
$linee6_4 = str_replace('*',$dokk30,$linee6_4);
}else{
$linee6_4 = "➕";
}}
if(file_exists("keyboard/create/linee71.txt")){
$linee7_1 = file_get_contents("keyboard/create/linee71.txt");
if($linee7_1 != null ){
$linee7_1 = str_replace('1',$dokk1,$linee7_1);
$linee7_1 = str_replace('2',$dokk2,$linee7_1);
$linee7_1 = str_replace('3',$dokk3,$linee7_1);
$linee7_1 = str_replace('q',$dokk4,$linee7_1);
$linee7_1 = str_replace('w',$dokk5,$linee7_1);
$linee7_1 = str_replace('e',$dokk6,$linee7_1);
$linee7_1 = str_replace('r',$dokk7,$linee7_1);
$linee7_1 = str_replace('t',$dokk8,$linee7_1);
$linee7_1 = str_replace('y',$dokk9,$linee7_1);
$linee7_1 = str_replace('u',$dokk10,$linee7_1);
$linee7_1 = str_replace('i',$dokk11,$linee7_1);
$linee7_1 = str_replace('o',$dokk12,$linee7_1);
$linee7_1 = str_replace('p',$dokk13,$linee7_1);
$linee7_1 = str_replace('a',$dokk14,$linee7_1);
$linee7_1 = str_replace('s',$dokk15,$linee7_1);
$linee7_1 = str_replace('d',$dokk16,$linee7_1);
$linee7_1 = str_replace('f',$dokk17,$linee7_1);
$linee7_1 = str_replace('g',$dokk18,$linee7_1);
$linee7_1 = str_replace('h',$dokk19,$linee7_1);
$linee7_1 = str_replace('j',$dokk20,$linee7_1);
$linee7_1 = str_replace('k',$dokk21,$linee7_1);
$linee7_1 = str_replace('l',$dokk22,$linee7_1);
$linee7_1 = str_replace('z',$dokk23,$linee7_1);
$linee7_1 = str_replace('x',$dokk24,$linee7_1);
$linee7_1 = str_replace('c',$dokk25,$linee7_1);
$linee7_1 = str_replace('v',$dokk26,$linee7_1);
$linee7_1 = str_replace('b',$dokk27,$linee7_1);
$linee7_1 = str_replace('n',$dokk28,$linee7_1);
$linee7_1 = str_replace('m',$dokk29,$linee7_1);
$linee7_1 = str_replace('*',$dokk30,$linee7_1);
}else{
$linee7_1 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee72.txt")){
$linee7_2 = file_get_contents("keyboard/create/linee72.txt");
if($linee7_2 != null ){
$linee7_2 = str_replace('1',$dokk1,$linee7_2);
$linee7_2 = str_replace('2',$dokk2,$linee7_2);
$linee7_2 = str_replace('3',$dokk3,$linee7_2);
$linee7_2 = str_replace('q',$dokk4,$linee7_2);
$linee7_2 = str_replace('w',$dokk5,$linee7_2);
$linee7_2 = str_replace('e',$dokk6,$linee7_2);
$linee7_2 = str_replace('r',$dokk7,$linee7_2);
$linee7_2 = str_replace('t',$dokk8,$linee7_2);
$linee7_2 = str_replace('y',$dokk9,$linee7_2);
$linee7_2 = str_replace('u',$dokk10,$linee7_2);
$linee7_2 = str_replace('i',$dokk11,$linee7_2);
$linee7_2 = str_replace('o',$dokk12,$linee7_2);
$linee7_2 = str_replace('p',$dokk13,$linee7_2);
$linee7_2 = str_replace('a',$dokk14,$linee7_2);
$linee7_2 = str_replace('s',$dokk15,$linee7_2);
$linee7_2 = str_replace('d',$dokk16,$linee7_2);
$linee7_2 = str_replace('f',$dokk17,$linee7_2);
$linee7_2 = str_replace('g',$dokk18,$linee7_2);
$linee7_2 = str_replace('h',$dokk19,$linee7_2);
$linee7_2 = str_replace('j',$dokk20,$linee7_2);
$linee7_2 = str_replace('k',$dokk21,$linee7_2);
$linee7_2 = str_replace('l',$dokk22,$linee7_2);
$linee7_2 = str_replace('z',$dokk23,$linee7_2);
$linee7_2 = str_replace('x',$dokk24,$linee7_2);
$linee7_2 = str_replace('c',$dokk25,$linee7_2);
$linee7_2 = str_replace('v',$dokk26,$linee7_2);
$linee7_2 = str_replace('b',$dokk27,$linee7_2);
$linee7_2 = str_replace('n',$dokk28,$linee7_2);
$linee7_2 = str_replace('m',$dokk29,$linee7_2);
$linee7_2 = str_replace('*',$dokk30,$linee7_2);
}else{
$linee7_2 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee73.txt")){
$linee7_3 = file_get_contents("keyboard/create/linee73.txt");
if($linee7_3 != null ){
$linee7_3 = str_replace('1',$dokk1,$linee7_3);
$linee7_3 = str_replace('2',$dokk2,$linee7_3);
$linee7_3 = str_replace('3',$dokk3,$linee7_3);
$linee7_3 = str_replace('q',$dokk4,$linee7_3);
$linee7_3 = str_replace('w',$dokk5,$linee7_3);
$linee7_3 = str_replace('e',$dokk6,$linee7_3);
$linee7_3 = str_replace('r',$dokk7,$linee7_3);
$linee7_3 = str_replace('t',$dokk8,$linee7_3);
$linee7_3 = str_replace('y',$dokk9,$linee7_3);
$linee7_3 = str_replace('u',$dokk10,$linee7_3);
$linee7_3 = str_replace('i',$dokk11,$linee7_3);
$linee7_3 = str_replace('o',$dokk12,$linee7_3);
$linee7_3 = str_replace('p',$dokk13,$linee7_3);
$linee7_3 = str_replace('a',$dokk14,$linee7_3);
$linee7_3 = str_replace('s',$dokk15,$linee7_3);
$linee7_3 = str_replace('d',$dokk16,$linee7_3);
$linee7_3 = str_replace('f',$dokk17,$linee7_3);
$linee7_3 = str_replace('g',$dokk18,$linee7_3);
$linee7_3 = str_replace('h',$dokk19,$linee7_3);
$linee7_3 = str_replace('j',$dokk20,$linee7_3);
$linee7_3 = str_replace('k',$dokk21,$linee7_3);
$linee7_3 = str_replace('l',$dokk22,$linee7_3);
$linee7_3 = str_replace('z',$dokk23,$linee7_3);
$linee7_3 = str_replace('x',$dokk24,$linee7_3);
$linee7_3 = str_replace('c',$dokk25,$linee7_3);
$linee7_3 = str_replace('v',$dokk26,$linee7_3);
$linee7_3 = str_replace('b',$dokk27,$linee7_3);
$linee7_3 = str_replace('n',$dokk28,$linee7_3);
$linee7_3 = str_replace('m',$dokk29,$linee7_3);
$linee7_3 = str_replace('*',$dokk30,$linee7_3);
}else{
$linee7_3 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee74.txt")){
$linee7_4 = file_get_contents("keyboard/create/linee74.txt");
if($linee7_4 != null ){
$linee7_4 = str_replace('1',$dokk1,$linee7_4);
$linee7_4 = str_replace('2',$dokk2,$linee7_4);
$linee7_4 = str_replace('3',$dokk3,$linee7_4);
$linee7_4 = str_replace('q',$dokk4,$linee7_4);
$linee7_4 = str_replace('w',$dokk5,$linee7_4);
$linee7_4 = str_replace('e',$dokk6,$linee7_4);
$linee7_4 = str_replace('r',$dokk7,$linee7_4);
$linee7_4 = str_replace('t',$dokk8,$linee7_4);
$linee7_4 = str_replace('y',$dokk9,$linee7_4);
$linee7_4 = str_replace('u',$dokk10,$linee7_4);
$linee7_4 = str_replace('i',$dokk11,$linee7_4);
$linee7_4 = str_replace('o',$dokk12,$linee7_4);
$linee7_4 = str_replace('p',$dokk13,$linee7_4);
$linee7_4 = str_replace('a',$dokk14,$linee7_4);
$linee7_4 = str_replace('s',$dokk15,$linee7_4);
$linee7_4 = str_replace('d',$dokk16,$linee7_4);
$linee7_4 = str_replace('f',$dokk17,$linee7_4);
$linee7_4 = str_replace('g',$dokk18,$linee7_4);
$linee7_4 = str_replace('h',$dokk19,$linee7_4);
$linee7_4 = str_replace('j',$dokk20,$linee7_4);
$linee7_4 = str_replace('k',$dokk21,$linee7_4);
$linee7_4 = str_replace('l',$dokk22,$linee7_4);
$linee7_4 = str_replace('z',$dokk23,$linee7_4);
$linee7_4 = str_replace('x',$dokk24,$linee7_4);
$linee7_4 = str_replace('c',$dokk25,$linee7_4);
$linee7_4 = str_replace('v',$dokk26,$linee7_4);
$linee7_4 = str_replace('b',$dokk27,$linee7_4);
$linee7_4 = str_replace('n',$dokk28,$linee7_4);
$linee7_4 = str_replace('m',$dokk29,$linee7_4);
$linee7_4 = str_replace('*',$dokk30,$linee7_4);
}else{
$linee7_4 = "➕";
}}
if(file_exists("keyboard/create/linee81.txt")){
$linee8_1 = file_get_contents("keyboard/create/linee81.txt");
if($linee8_1 != null ){
$linee8_1 = str_replace('1',$dokk1,$linee8_1);
$linee8_1 = str_replace('2',$dokk2,$linee8_1);
$linee8_1 = str_replace('3',$dokk3,$linee8_1);
$linee8_1 = str_replace('q',$dokk4,$linee8_1);
$linee8_1 = str_replace('w',$dokk5,$linee8_1);
$linee8_1 = str_replace('e',$dokk6,$linee8_1);
$linee8_1 = str_replace('r',$dokk7,$linee8_1);
$linee8_1 = str_replace('t',$dokk8,$linee8_1);
$linee8_1 = str_replace('y',$dokk9,$linee8_1);
$linee8_1 = str_replace('u',$dokk10,$linee8_1);
$linee8_1 = str_replace('i',$dokk11,$linee8_1);
$linee8_1 = str_replace('o',$dokk12,$linee8_1);
$linee8_1 = str_replace('p',$dokk13,$linee8_1);
$linee8_1 = str_replace('a',$dokk14,$linee8_1);
$linee8_1 = str_replace('s',$dokk15,$linee8_1);
$linee8_1 = str_replace('d',$dokk16,$linee8_1);
$linee8_1 = str_replace('f',$dokk17,$linee8_1);
$linee8_1 = str_replace('g',$dokk18,$linee8_1);
$linee8_1 = str_replace('h',$dokk19,$linee8_1);
$linee8_1 = str_replace('j',$dokk20,$linee8_1);
$linee8_1 = str_replace('k',$dokk21,$linee8_1);
$linee8_1 = str_replace('l',$dokk22,$linee8_1);
$linee8_1 = str_replace('z',$dokk23,$linee8_1);
$linee8_1 = str_replace('x',$dokk24,$linee8_1);
$linee8_1 = str_replace('c',$dokk25,$linee8_1);
$linee8_1 = str_replace('v',$dokk26,$linee8_1);
$linee8_1 = str_replace('b',$dokk27,$linee8_1);
$linee8_1 = str_replace('n',$dokk28,$linee8_1);
$linee8_1 = str_replace('m',$dokk29,$linee8_1);
$linee8_1 = str_replace('*',$dokk30,$linee8_1);
}else{
$linee8_1 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee82.txt")){
$linee8_2 = file_get_contents("keyboard/create/linee82.txt");
if($linee8_2 != null ){
$linee8_2 = str_replace('1',$dokk1,$linee8_2);
$linee8_2 = str_replace('2',$dokk2,$linee8_2);
$linee8_2 = str_replace('3',$dokk3,$linee8_2);
$linee8_2 = str_replace('q',$dokk4,$linee8_2);
$linee8_2 = str_replace('w',$dokk5,$linee8_2);
$linee8_2 = str_replace('e',$dokk6,$linee8_2);
$linee8_2 = str_replace('r',$dokk7,$linee8_2);
$linee8_2 = str_replace('t',$dokk8,$linee8_2);
$linee8_2 = str_replace('y',$dokk9,$linee8_2);
$linee8_2 = str_replace('u',$dokk10,$linee8_2);
$linee8_2 = str_replace('i',$dokk11,$linee8_2);
$linee8_2 = str_replace('o',$dokk12,$linee8_2);
$linee8_2 = str_replace('p',$dokk13,$linee8_2);
$linee8_2 = str_replace('a',$dokk14,$linee8_2);
$linee8_2 = str_replace('s',$dokk15,$linee8_2);
$linee8_2 = str_replace('d',$dokk16,$linee8_2);
$linee8_2 = str_replace('f',$dokk17,$linee8_2);
$linee8_2 = str_replace('g',$dokk18,$linee8_2);
$linee8_2 = str_replace('h',$dokk19,$linee8_2);
$linee8_2 = str_replace('j',$dokk20,$linee8_2);
$linee8_2 = str_replace('k',$dokk21,$linee8_2);
$linee8_2 = str_replace('l',$dokk22,$linee8_2);
$linee8_2 = str_replace('z',$dokk23,$linee8_2);
$linee8_2 = str_replace('x',$dokk24,$linee8_2);
$linee8_2 = str_replace('c',$dokk25,$linee8_2);
$linee8_2 = str_replace('v',$dokk26,$linee8_2);
$linee8_2 = str_replace('b',$dokk27,$linee8_2);
$linee8_2 = str_replace('n',$dokk28,$linee8_2);
$linee8_2 = str_replace('m',$dokk29,$linee8_2);
$linee8_2 = str_replace('*',$dokk30,$linee8_2);
}else{
$linee8_2 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee83.txt")){
$linee8_3 = file_get_contents("keyboard/create/linee83.txt");
if($linee8_3 != null ){
$linee8_3 = str_replace('1',$dokk1,$linee8_3);
$linee8_3 = str_replace('2',$dokk2,$linee8_3);
$linee8_3 = str_replace('3',$dokk3,$linee8_3);
$linee8_3 = str_replace('q',$dokk4,$linee8_3);
$linee8_3 = str_replace('w',$dokk5,$linee8_3);
$linee8_3 = str_replace('e',$dokk6,$linee8_3);
$linee8_3 = str_replace('r',$dokk7,$linee8_3);
$linee8_3 = str_replace('t',$dokk8,$linee8_3);
$linee8_3 = str_replace('y',$dokk9,$linee8_3);
$linee8_3 = str_replace('u',$dokk10,$linee8_3);
$linee8_3 = str_replace('i',$dokk11,$linee8_3);
$linee8_3 = str_replace('o',$dokk12,$linee8_3);
$linee8_3 = str_replace('p',$dokk13,$linee8_3);
$linee8_3 = str_replace('a',$dokk14,$linee8_3);
$linee8_3 = str_replace('s',$dokk15,$linee8_3);
$linee8_3 = str_replace('d',$dokk16,$linee8_3);
$linee8_3 = str_replace('f',$dokk17,$linee8_3);
$linee8_3 = str_replace('g',$dokk18,$linee8_3);
$linee8_3 = str_replace('h',$dokk19,$linee8_3);
$linee8_3 = str_replace('j',$dokk20,$linee8_3);
$linee8_3 = str_replace('k',$dokk21,$linee8_3);
$linee8_3 = str_replace('l',$dokk22,$linee8_3);
$linee8_3 = str_replace('z',$dokk23,$linee8_3);
$linee8_3 = str_replace('x',$dokk24,$linee8_3);
$linee8_3 = str_replace('c',$dokk25,$linee8_3);
$linee8_3 = str_replace('v',$dokk26,$linee8_3);
$linee8_3 = str_replace('b',$dokk27,$linee8_3);
$linee8_3 = str_replace('n',$dokk28,$linee8_3);
$linee8_3 = str_replace('m',$dokk29,$linee8_3);
$linee8_3 = str_replace('*',$dokk30,$linee8_3);
}else{
$linee8_3 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee84.txt")){
$linee8_4 = file_get_contents("keyboard/create/linee84.txt");
if($linee8_4 != null ){
$linee8_4 = str_replace('1',$dokk1,$linee8_4);
$linee8_4 = str_replace('2',$dokk2,$linee8_4);
$linee8_4 = str_replace('3',$dokk3,$linee8_4);
$linee8_4 = str_replace('q',$dokk4,$linee8_4);
$linee8_4 = str_replace('w',$dokk5,$linee8_4);
$linee8_4 = str_replace('e',$dokk6,$linee8_4);
$linee8_4 = str_replace('r',$dokk7,$linee8_4);
$linee8_4 = str_replace('t',$dokk8,$linee8_4);
$linee8_4 = str_replace('y',$dokk9,$linee8_4);
$linee8_4 = str_replace('u',$dokk10,$linee8_4);
$linee8_4 = str_replace('i',$dokk11,$linee8_4);
$linee8_4 = str_replace('o',$dokk12,$linee8_4);
$linee8_4 = str_replace('p',$dokk13,$linee8_4);
$linee8_4 = str_replace('a',$dokk14,$linee8_4);
$linee8_4 = str_replace('s',$dokk15,$linee8_4);
$linee8_4 = str_replace('d',$dokk16,$linee8_4);
$linee8_4 = str_replace('f',$dokk17,$linee8_4);
$linee8_4 = str_replace('g',$dokk18,$linee8_4);
$linee8_4 = str_replace('h',$dokk19,$linee8_4);
$linee8_4 = str_replace('j',$dokk20,$linee8_4);
$linee8_4 = str_replace('k',$dokk21,$linee8_4);
$linee8_4 = str_replace('l',$dokk22,$linee8_4);
$linee8_4 = str_replace('z',$dokk23,$linee8_4);
$linee8_4 = str_replace('x',$dokk24,$linee8_4);
$linee8_4 = str_replace('c',$dokk25,$linee8_4);
$linee8_4 = str_replace('v',$dokk26,$linee8_4);
$linee8_4 = str_replace('b',$dokk27,$linee8_4);
$linee8_4 = str_replace('n',$dokk28,$linee8_4);
$linee8_4 = str_replace('m',$dokk29,$linee8_4);
$linee8_4 = str_replace('*',$dokk30,$linee8_4);
}else{
$linee8_4 = "➕";
}}
if(file_exists("keyboard/create/linee91.txt")){
$linee9_1 = file_get_contents("keyboard/create/linee91.txt");
if($linee9_1 != null ){
$linee9_1 = str_replace('1',$dokk1,$linee9_1);
$linee9_1 = str_replace('2',$dokk2,$linee9_1);
$linee9_1 = str_replace('3',$dokk3,$linee9_1);
$linee9_1 = str_replace('q',$dokk4,$linee9_1);
$linee9_1 = str_replace('w',$dokk5,$linee9_1);
$linee9_1 = str_replace('e',$dokk6,$linee9_1);
$linee9_1 = str_replace('r',$dokk7,$linee9_1);
$linee9_1 = str_replace('t',$dokk8,$linee9_1);
$linee9_1 = str_replace('y',$dokk9,$linee9_1);
$linee9_1 = str_replace('u',$dokk10,$linee9_1);
$linee9_1 = str_replace('i',$dokk11,$linee9_1);
$linee9_1 = str_replace('o',$dokk12,$linee9_1);
$linee9_1 = str_replace('p',$dokk13,$linee9_1);
$linee9_1 = str_replace('a',$dokk14,$linee9_1);
$linee9_1 = str_replace('s',$dokk15,$linee9_1);
$linee9_1 = str_replace('d',$dokk16,$linee9_1);
$linee9_1 = str_replace('f',$dokk17,$linee9_1);
$linee9_1 = str_replace('g',$dokk18,$linee9_1);
$linee9_1 = str_replace('h',$dokk19,$linee9_1);
$linee9_1 = str_replace('j',$dokk20,$linee9_1);
$linee9_1 = str_replace('k',$dokk21,$linee9_1);
$linee9_1 = str_replace('l',$dokk22,$linee9_1);
$linee9_1 = str_replace('z',$dokk23,$linee9_1);
$linee9_1 = str_replace('x',$dokk24,$linee9_1);
$linee9_1 = str_replace('c',$dokk25,$linee9_1);
$linee9_1 = str_replace('v',$dokk26,$linee9_1);
$linee9_1 = str_replace('b',$dokk27,$linee9_1);
$linee9_1 = str_replace('n',$dokk28,$linee9_1);
$linee9_1 = str_replace('m',$dokk29,$linee9_1);
$linee9_1 = str_replace('*',$dokk30,$linee9_1);
}else{
$linee9_1 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee92.txt")){
$linee9_2 = file_get_contents("keyboard/create/linee92.txt");
if($linee9_2 != null ){
$linee9_2 = str_replace('1',$dokk1,$linee9_2);
$linee9_2 = str_replace('2',$dokk2,$linee9_2);
$linee9_2 = str_replace('3',$dokk3,$linee9_2);
$linee9_2 = str_replace('q',$dokk4,$linee9_2);
$linee9_2 = str_replace('w',$dokk5,$linee9_2);
$linee9_2 = str_replace('e',$dokk6,$linee9_2);
$linee9_2 = str_replace('r',$dokk7,$linee9_2);
$linee9_2 = str_replace('t',$dokk8,$linee9_2);
$linee9_2 = str_replace('y',$dokk9,$linee9_2);
$linee9_2 = str_replace('u',$dokk10,$linee9_2);
$linee9_2 = str_replace('i',$dokk11,$linee9_2);
$linee9_2 = str_replace('o',$dokk12,$linee9_2);
$linee9_2 = str_replace('p',$dokk13,$linee9_2);
$linee9_2 = str_replace('a',$dokk14,$linee9_2);
$linee9_2 = str_replace('s',$dokk15,$linee9_2);
$linee9_2 = str_replace('d',$dokk16,$linee9_2);
$linee9_2 = str_replace('f',$dokk17,$linee9_2);
$linee9_2 = str_replace('g',$dokk18,$linee9_2);
$linee9_2 = str_replace('h',$dokk19,$linee9_2);
$linee9_2 = str_replace('j',$dokk20,$linee9_2);
$linee9_2 = str_replace('k',$dokk21,$linee9_2);
$linee9_2 = str_replace('l',$dokk22,$linee9_2);
$linee9_2 = str_replace('z',$dokk23,$linee9_2);
$linee9_2 = str_replace('x',$dokk24,$linee9_2);
$linee9_2 = str_replace('c',$dokk25,$linee9_2);
$linee9_2 = str_replace('v',$dokk26,$linee9_2);
$linee9_2 = str_replace('b',$dokk27,$linee9_2);
$linee9_2 = str_replace('n',$dokk28,$linee9_2);
$linee9_2 = str_replace('m',$dokk29,$linee9_2);
$linee9_2 = str_replace('*',$dokk30,$linee9_2);
}else{
$linee9_2 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee93.txt")){
$linee9_3 = file_get_contents("keyboard/create/linee93.txt");
if($linee9_3 != null ){
$linee9_3 = str_replace('1',$dokk1,$linee9_3);
$linee9_3 = str_replace('2',$dokk2,$linee9_3);
$linee9_3 = str_replace('3',$dokk3,$linee9_3);
$linee9_3 = str_replace('q',$dokk4,$linee9_3);
$linee9_3 = str_replace('w',$dokk5,$linee9_3);
$linee9_3 = str_replace('e',$dokk6,$linee9_3);
$linee9_3 = str_replace('r',$dokk7,$linee9_3);
$linee9_3 = str_replace('t',$dokk8,$linee9_3);
$linee9_3 = str_replace('y',$dokk9,$linee9_3);
$linee9_3 = str_replace('u',$dokk10,$linee9_3);
$linee9_3 = str_replace('i',$dokk11,$linee9_3);
$linee9_3 = str_replace('o',$dokk12,$linee9_3);
$linee9_3 = str_replace('p',$dokk13,$linee9_3);
$linee9_3 = str_replace('a',$dokk14,$linee9_3);
$linee9_3 = str_replace('s',$dokk15,$linee9_3);
$linee9_3 = str_replace('d',$dokk16,$linee9_3);
$linee9_3 = str_replace('f',$dokk17,$linee9_3);
$linee9_3 = str_replace('g',$dokk18,$linee9_3);
$linee9_3 = str_replace('h',$dokk19,$linee9_3);
$linee9_3 = str_replace('j',$dokk20,$linee9_3);
$linee9_3 = str_replace('k',$dokk21,$linee9_3);
$linee9_3 = str_replace('l',$dokk22,$linee9_3);
$linee9_3 = str_replace('z',$dokk23,$linee9_3);
$linee9_3 = str_replace('x',$dokk24,$linee9_3);
$linee9_3 = str_replace('c',$dokk25,$linee9_3);
$linee9_3 = str_replace('v',$dokk26,$linee9_3);
$linee9_3 = str_replace('b',$dokk27,$linee9_3);
$linee9_3 = str_replace('n',$dokk28,$linee9_3);
$linee9_3 = str_replace('m',$dokk29,$linee9_3);
$linee9_3 = str_replace('*',$dokk30,$linee9_3);
}else{
$linee9_3 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee94.txt")){
$linee9_4 = file_get_contents("keyboard/create/linee94.txt");
if($linee9_4 != null ){
$linee9_4 = str_replace('1',$dokk1,$linee9_4);
$linee9_4 = str_replace('2',$dokk2,$linee9_4);
$linee9_4 = str_replace('3',$dokk3,$linee9_4);
$linee9_4 = str_replace('q',$dokk4,$linee9_4);
$linee9_4 = str_replace('w',$dokk5,$linee9_4);
$linee9_4 = str_replace('e',$dokk6,$linee9_4);
$linee9_4 = str_replace('r',$dokk7,$linee9_4);
$linee9_4 = str_replace('t',$dokk8,$linee9_4);
$linee9_4 = str_replace('y',$dokk9,$linee9_4);
$linee9_4 = str_replace('u',$dokk10,$linee9_4);
$linee9_4 = str_replace('i',$dokk11,$linee9_4);
$linee9_4 = str_replace('o',$dokk12,$linee9_4);
$linee9_4 = str_replace('p',$dokk13,$linee9_4);
$linee9_4 = str_replace('a',$dokk14,$linee9_4);
$linee9_4 = str_replace('s',$dokk15,$linee9_4);
$linee9_4 = str_replace('d',$dokk16,$linee9_4);
$linee9_4 = str_replace('f',$dokk17,$linee9_4);
$linee9_4 = str_replace('g',$dokk18,$linee9_4);
$linee9_4 = str_replace('h',$dokk19,$linee9_4);
$linee9_4 = str_replace('j',$dokk20,$linee9_4);
$linee9_4 = str_replace('k',$dokk21,$linee9_4);
$linee9_4 = str_replace('l',$dokk22,$linee9_4);
$linee9_4 = str_replace('z',$dokk23,$linee9_4);
$linee9_4 = str_replace('x',$dokk24,$linee9_4);
$linee9_4 = str_replace('c',$dokk25,$linee9_4);
$linee9_4 = str_replace('v',$dokk26,$linee9_4);
$linee9_4 = str_replace('b',$dokk27,$linee9_4);
$linee9_4 = str_replace('n',$dokk28,$linee9_4);
$linee9_4 = str_replace('m',$dokk29,$linee9_4);
$linee9_4 = str_replace('*',$dokk30,$linee9_4);
}else{
$linee9_4 = "➕";
}}
if(file_exists("keyboard/create/linee101.txt")){
$linee10_1 = file_get_contents("keyboard/create/linee101.txt");
if($linee10_1 != null ){
$linee10_1 = str_replace('1',$dokk1,$linee10_1);
$linee10_1 = str_replace('2',$dokk2,$linee10_1);
$linee10_1 = str_replace('3',$dokk3,$linee10_1);
$linee10_1 = str_replace('q',$dokk4,$linee10_1);
$linee10_1 = str_replace('w',$dokk5,$linee10_1);
$linee10_1 = str_replace('e',$dokk6,$linee10_1);
$linee10_1 = str_replace('r',$dokk7,$linee10_1);
$linee10_1 = str_replace('t',$dokk8,$linee10_1);
$linee10_1 = str_replace('y',$dokk9,$linee10_1);
$linee10_1 = str_replace('u',$dokk10,$linee10_1);
$linee10_1 = str_replace('i',$dokk11,$linee10_1);
$linee10_1 = str_replace('o',$dokk12,$linee10_1);
$linee10_1 = str_replace('p',$dokk13,$linee10_1);
$linee10_1 = str_replace('a',$dokk14,$linee10_1);
$linee10_1 = str_replace('s',$dokk15,$linee10_1);
$linee10_1 = str_replace('d',$dokk16,$linee10_1);
$linee10_1 = str_replace('f',$dokk17,$linee10_1);
$linee10_1 = str_replace('g',$dokk18,$linee10_1);
$linee10_1 = str_replace('h',$dokk19,$linee10_1);
$linee10_1 = str_replace('j',$dokk20,$linee10_1);
$linee10_1 = str_replace('k',$dokk21,$linee10_1);
$linee10_1 = str_replace('l',$dokk22,$linee10_1);
$linee10_1 = str_replace('z',$dokk23,$linee10_1);
$linee10_1 = str_replace('x',$dokk24,$linee10_1);
$linee10_1 = str_replace('c',$dokk25,$linee10_1);
$linee10_1 = str_replace('v',$dokk26,$linee10_1);
$linee10_1 = str_replace('b',$dokk27,$linee10_1);
$linee10_1 = str_replace('n',$dokk28,$linee10_1);
$linee10_1 = str_replace('m',$dokk29,$linee10_1);
$linee10_1 = str_replace('*',$dokk30,$linee10_1);
}else{
$linee10_1 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee102.txt")){
$linee10_2 = file_get_contents("keyboard/create/linee102.txt");
if($linee10_2 != null ){
$linee10_2 = str_replace('1',$dokk1,$linee10_2);
$linee10_2 = str_replace('2',$dokk2,$linee10_2);
$linee10_2 = str_replace('3',$dokk3,$linee10_2);
$linee10_2 = str_replace('q',$dokk4,$linee10_2);
$linee10_2 = str_replace('w',$dokk5,$linee10_2);
$linee10_2 = str_replace('e',$dokk6,$linee10_2);
$linee10_2 = str_replace('r',$dokk7,$linee10_2);
$linee10_2 = str_replace('t',$dokk8,$linee10_2);
$linee10_2 = str_replace('y',$dokk9,$linee10_2);
$linee10_2 = str_replace('u',$dokk10,$linee10_2);
$linee10_2 = str_replace('i',$dokk11,$linee10_2);
$linee10_2 = str_replace('o',$dokk12,$linee10_2);
$linee10_2 = str_replace('p',$dokk13,$linee10_2);
$linee10_2 = str_replace('a',$dokk14,$linee10_2);
$linee10_2 = str_replace('s',$dokk15,$linee10_2);
$linee10_2 = str_replace('d',$dokk16,$linee10_2);
$linee10_2 = str_replace('f',$dokk17,$linee10_2);
$linee10_2 = str_replace('g',$dokk18,$linee10_2);
$linee10_2 = str_replace('h',$dokk19,$linee10_2);
$linee10_2 = str_replace('j',$dokk20,$linee10_2);
$linee10_2 = str_replace('k',$dokk21,$linee10_2);
$linee10_2 = str_replace('l',$dokk22,$linee10_2);
$linee10_2 = str_replace('z',$dokk23,$linee10_2);
$linee10_2 = str_replace('x',$dokk24,$linee10_2);
$linee10_2 = str_replace('c',$dokk25,$linee10_2);
$linee10_2 = str_replace('v',$dokk26,$linee10_2);
$linee10_2 = str_replace('b',$dokk27,$linee10_2);
$linee10_2 = str_replace('n',$dokk28,$linee10_2);
$linee10_2 = str_replace('m',$dokk29,$linee10_2);
$linee10_2 = str_replace('*',$dokk30,$linee10_2);
}else{
$linee10_2 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee103.txt")){
$linee10_3 = file_get_contents("keyboard/create/linee103.txt");
if($linee10_3 != null ){
$linee10_3 = str_replace('1',$dokk1,$linee10_3);
$linee10_3 = str_replace('2',$dokk2,$linee10_3);
$linee10_3 = str_replace('3',$dokk3,$linee10_3);
$linee10_3 = str_replace('q',$dokk4,$linee10_3);
$linee10_3 = str_replace('w',$dokk5,$linee10_3);
$linee10_3 = str_replace('e',$dokk6,$linee10_3);
$linee10_3 = str_replace('r',$dokk7,$linee10_3);
$linee10_3 = str_replace('t',$dokk8,$linee10_3);
$linee10_3 = str_replace('y',$dokk9,$linee10_3);
$linee10_3 = str_replace('u',$dokk10,$linee10_3);
$linee10_3 = str_replace('i',$dokk11,$linee10_3);
$linee10_3 = str_replace('o',$dokk12,$linee10_3);
$linee10_3 = str_replace('p',$dokk13,$linee10_3);
$linee10_3 = str_replace('a',$dokk14,$linee10_3);
$linee10_3 = str_replace('s',$dokk15,$linee10_3);
$linee10_3 = str_replace('d',$dokk16,$linee10_3);
$linee10_3 = str_replace('f',$dokk17,$linee10_3);
$linee10_3 = str_replace('g',$dokk18,$linee10_3);
$linee10_3 = str_replace('h',$dokk19,$linee10_3);
$linee10_3 = str_replace('j',$dokk20,$linee10_3);
$linee10_3 = str_replace('k',$dokk21,$linee10_3);
$linee10_3 = str_replace('l',$dokk22,$linee10_3);
$linee10_3 = str_replace('z',$dokk23,$linee10_3);
$linee10_3 = str_replace('x',$dokk24,$linee10_3);
$linee10_3 = str_replace('c',$dokk25,$linee10_3);
$linee10_3 = str_replace('v',$dokk26,$linee10_3);
$linee10_3 = str_replace('b',$dokk27,$linee10_3);
$linee10_3 = str_replace('n',$dokk28,$linee10_3);
$linee10_3 = str_replace('m',$dokk29,$linee10_3);
$linee10_3 = str_replace('*',$dokk30,$linee10_3);
}else{
$linee10_3 = "➕";
}}
//////////------------------------\\\\\\\\\\\\\\
if(file_exists("keyboard/create/linee104.txt")){
$linee10_4 = file_get_contents("keyboard/create/linee104.txt");
if($linee10_4 != null ){
$linee10_4 = str_replace('1',$dokk1,$linee10_4);
$linee10_4 = str_replace('2',$dokk2,$linee10_4);
$linee10_4 = str_replace('3',$dokk3,$linee10_4);
$linee10_4 = str_replace('q',$dokk4,$linee10_4);
$linee10_4 = str_replace('w',$dokk5,$linee10_4);
$linee10_4 = str_replace('e',$dokk6,$linee10_4);
$linee10_4 = str_replace('r',$dokk7,$linee10_4);
$linee10_4 = str_replace('t',$dokk8,$linee10_4);
$linee10_4 = str_replace('y',$dokk9,$linee10_4);
$linee10_4 = str_replace('u',$dokk10,$linee10_4);
$linee10_4 = str_replace('i',$dokk11,$linee10_4);
$linee10_4 = str_replace('o',$dokk12,$linee10_4);
$linee10_4 = str_replace('p',$dokk13,$linee10_4);
$linee10_4 = str_replace('a',$dokk14,$linee10_4);
$linee10_4 = str_replace('s',$dokk15,$linee10_4);
$linee10_4 = str_replace('d',$dokk16,$linee10_4);
$linee10_4 = str_replace('f',$dokk17,$linee10_4);
$linee10_4 = str_replace('g',$dokk18,$linee10_4);
$linee10_4 = str_replace('h',$dokk19,$linee10_4);
$linee10_4 = str_replace('j',$dokk20,$linee10_4);
$linee10_4 = str_replace('k',$dokk21,$linee10_4);
$linee10_4 = str_replace('l',$dokk22,$linee10_4);
$linee10_4 = str_replace('z',$dokk23,$linee10_4);
$linee10_4 = str_replace('x',$dokk24,$linee10_4);
$linee10_4 = str_replace('c',$dokk25,$linee10_4);
$linee10_4 = str_replace('v',$dokk26,$linee10_4);
$linee10_4 = str_replace('b',$dokk27,$linee10_4);
$linee10_4 = str_replace('n',$dokk28,$linee10_4);
$linee10_4 = str_replace('m',$dokk29,$linee10_4);
$linee10_4 = str_replace('*',$dokk30,$linee10_4);
}else{
$linee10_4 = "➕";
}}

$Button_sete = json_encode(['inline_keyboard'=>[
[['text'=>"$linee1_1",'callback_data'=>'seter-linee11'],
['text'=>"$linee1_2",'callback_data'=>'seter-linee12'],
['text'=>"$linee1_3",'callback_data'=>'seter-linee13'],
['text'=>"$linee1_4",'callback_data'=>'seter-linee14']],
[['text'=>"$linee2_1",'callback_data'=>'seter-linee21'],
['text'=>"$linee2_2",'callback_data'=>'seter-linee22'],
['text'=>"$linee2_3",'callback_data'=>'seter-linee23'],
['text'=>"$linee2_4",'callback_data'=>'seter-linee24']],
[['text'=>"$linee3_1",'callback_data'=>'seter-linee31'],
['text'=>"$linee3_2",'callback_data'=>'seter-linee32'],
['text'=>"$linee3_3",'callback_data'=>'seter-linee33'],
['text'=>"$linee3_4",'callback_data'=>'seter-linee34']],
[['text'=>"$linee4_1",'callback_data'=>'seter-linee41'],
['text'=>"$linee4_2",'callback_data'=>'seter-linee42'],
['text'=>"$linee4_3",'callback_data'=>'seter-linee43'],
['text'=>"$linee4_4",'callback_data'=>'seter-linee44']],
[['text'=>"$linee5_1",'callback_data'=>'seter-linee51'],
['text'=>"$linee5_2",'callback_data'=>'seter-linee52'],
['text'=>"$linee5_3",'callback_data'=>'seter-linee53'],
['text'=>"$linee5_4",'callback_data'=>'seter-linee54']],
[['text'=>"$linee6_1",'callback_data'=>'seter-linee61'],
['text'=>"$linee6_2",'callback_data'=>'seter-linee62'],
['text'=>"$linee6_3",'callback_data'=>'seter-linee63'],
['text'=>"$linee6_4",'callback_data'=>'seter-linee64']],
[['text'=>"$linee7_1",'callback_data'=>'seter-linee71'],
['text'=>"$linee7_2",'callback_data'=>'seter-linee72'],
['text'=>"$linee7_3",'callback_data'=>'seter-linee73'],
['text'=>"$linee7_4",'callback_data'=>'seter-linee74']],
[['text'=>"$linee8_1",'callback_data'=>'seter-linee81'],
['text'=>"$linee8_2",'callback_data'=>'seter-linee82'],
['text'=>"$linee8_3",'callback_data'=>'seter-linee83'],
['text'=>"$linee8_4",'callback_data'=>'seter-linee84']],
[['text'=>"$linee9_1",'callback_data'=>'seter-linee91'],
['text'=>"$linee9_2",'callback_data'=>'seter-linee92'],
['text'=>"$linee9_3",'callback_data'=>'seter-linee93'],
['text'=>"$linee9_4",'callback_data'=>'seter-linee94']],
[['text'=>"$linee10_1",'callback_data'=>'seter-linee101'],
['text'=>"$linee10_2",'callback_data'=>'seter-linee102'],
['text'=>"$linee10_3",'callback_data'=>'seter-linee103'],
['text'=>"$linee10_4",'callback_data'=>'seter-linee104']],
]]);
Editmessagetext($chatID, $msg_id,"👈️ گزینه مورد نظر را انتخاب نمائید.",$Button_sete);
}
//////////------------------------\\\\\\\\\\\\\\//
if(is_file(error_log))
unlink(error_log);
?>