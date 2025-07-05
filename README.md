<?php
#ممنوع تغير الحقوق
# من مطور @BBI4BB
#قناة المطور @AMRAKL
ob_start();
$token = '8020098836:AAGmsrRd2vQQS4ExaoqwBc6W2c8GgHNTMk8'; #توكن بوتك
define('API_KEY',$token);
echo file_get_contents("https://api.telegram.org/bot$API_KEY/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']);
function bot($method,$datas=[]){
  $url = "https://api.telegram.org/bot".API_KEY."/".$method;
  $datas = http_build_query($datas);
  $res = file_get_contents($url.'?'.$datas);
  return json_decode($res);
}
function save($array){
    file_put_contents('sales.json', json_encode($array));
}
$admin = "6913095734"; #ايدي الادمن
$sudo = array("000","6913095734","0000"); #ايدهات الادمن 
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$id = $message->from->id;
$text = $message->text;
$chat_id = $message->chat->id;
$user = $message->from->username;
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$name = $update->message->from->first_name;
$from_id = $update->message->from->id;
$AMR = file_get_contents("AMR.txt");
$AMR0 = file_get_contents("AMR0.txt");
$AMR1= file_get_contents("AMR1.txt");
$AMR5 = file_get_contents("AMR2.txt");
$AMR6 = file_get_contents("AMR3.txt");
$AMR20 = json_decode(file_get_contents('php://input'));
$AMR18 = $update->message;
$AMR13 = $AMR18->chat->id;
$AMR17 = $AMR18->text;
$AMRD = $AMR20->callback_query->data;
$AMR12 = $AMR20->callback_query->message->chat->id;
$AMR14 =  $AMR20->callback_query->message->message_id;
$AMR15 = $AMR18->from->first_name;
$AMR16 = $AMR18->from->username;
$AMR11 = $AMR18->from->id;
$AMR2 = explode("\n",file_get_contents("AMR4.txt"));
$AMR3 = count($AMR2)-1;
if ($AMR18 && !in_array($AMR11, $AMR2)) {
file_put_contents("AMR4.txt", $AMR11."\n",FILE_APPEND);
  }
$AMR9 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$AMR0&user_id=".$AMR11);
$AMR10 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$AMR1&user_id=".$AMR11);
if($AMR18 && (strpos($AMR9,'"status":"left"') or strpos($AMR9,'"Bad Request: USER_ID_INVALID"') or strpos($AMR9,'"status":"kicked"') or strpos($AMR10,'"status":"left"') or strpos($AMR10,'"Bad Request: USER_ID_INVALID"') or strpos($AMR10,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$AMR13,
'text'=>'- ▫️ عذراً عزيزي  ، 🔰
▪️ يجب عليك الإشتراك في قناة المطور أولاً ⚜️؛

- اشترك ثم ارسل { /start }📛!

'.$AMR0.'
'.$AMR1,
]);return false;}
if($text == "/start" and in_array($from_id,$sudo)){
bot("sendmessage",[
"chat_id"=>$AMR13,
"text"=>"
~ اهلا بك في لوحه الأدمن الخاصه بالبوت 🤖

~ يمكنك التحكم في جميع اوامر البوت من هنا 
------------------------------------
",
'reply_to_message_id'=>$amrakl->message_id,
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'قسم الاشتراك الاجباري ⁦⚜️⁩','callback_data'=>"AMR78"]],
[['text'=>'قسم توجيه الرسال من الاعضاء 🔙' ,'callback_data'=>"yfffgh"]],
[['text'=>'قسم الاذاعه 🎉' ,'callback_data'=>"6g77g"],['text'=>'احصائيات البوت 👤' ,'callback_data'=>"AMR7"]],
[['text'=>'اعدادات البوت','callback_data'=>"c"]],
] 
])
]);
}
if($AMRD == "AMR" ){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
"text"=>"
~ اهلا بك في لوحه الأدمن الخاصه بالبوت 🤖

~ يمكنك التحكم في جميع اوامر البوت من هنا 
------------------------------------
",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'قسم الاشتراك الاجباري ⁦⚜️⁩','callback_data'=>"AMR78"]],
[['text'=>'قسم توجيه الرسال من الاعضاء 🔙' ,'callback_data'=>"yfffgh"]],
[['text'=>'قسم الاذاعه 🎉' ,'callback_data'=>"6g77g"],['text'=>'احصائيات البوت 👤' ,'callback_data'=>"AMR7"]],
[['text'=>'اعدادات البوت','callback_data'=>"c"]],
] 
])
]);
unlink("AMR.txt");
}
if($AMRD == "AMR0"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'- حسناً ، الآن قم بإرسال معرف قناتك من ثم  قم برفع البوت ادمن في القناة ',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
file_put_contents("AMR.txt","AMR0");
}
if($AMR17 and $AMR == "AMR0" and $AMR11 == $admin){
bot("sendmessage",[
"chat_id"=>$AMR13,
"text"=>'لقد تم وضع القناة بنجاح ✅',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
file_put_contents("AMR0.txt","$AMR17");
unlink("AMR.txt");
}
if($AMRD == "delete11"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'~ هل أنت متأكد من أنك تريد حذف القناة من الإشتراك الإجباري ؟؟؟
',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'• لا ، ❎', 'callback_data'=>'AMR'],
['text'=>'• نعم ، ✅','callback_data'=>'AMR1'],
]
]])
]);
}
if($AMRD == "AMR1"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'- لقد تم حذف القناة  من الإشتراك الإجباري بنجاح 📮',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
️[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
unlink("AMR.txt");
unlink("AMR0.txt");
}
if($AMRD == "AMR2"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'- حسناً ، الآن قم بإرسال معرف قناتك من ثم  قم برفع البوت ادمن في القناة ',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
file_put_contents("AMR.txt","AMR1");
}
if($AMR17 and $AMR == "AMR1" and $AMR11 == $admin){
bot("sendmessage",[
"chat_id"=>$AMR13,
"text"=>'لقد تم وضع القناة بنجاح ✅',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
file_put_contents("AMR1.txt","$AMR17");
unlink("AMR.txt");
}
if($AMRD == "delete22"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'~ هل أنت متأكد من أنك تريد حذف القناة من الإشتراك الإجباري ؟؟؟',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'• لا ، ❎', 'callback_data'=>'AMR'],
['text'=>'• نعم ، ✅','callback_data'=>'AMR3'],
]
]])
]);
}
#ممنوع تغير الحقوق
# من مطور @BBI4BB
#قناة المطور @AMRAKL
#ــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــ
if($AMRD == "AMR78"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>"
*مرحبا بك في قسم الاشتراك الاجباري*🌟
اختار القناة الذي تريد التحكم به ⁦🇪🇬⁩
",
                     'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'قناة ¹', 'callback_data'=>'AMR765'],['text'=>'قناة ² ','callback_data'=>'AMR907']],
[['text'=>'عرض قنوات الإشتراك ★»' ,'callback_data'=>"AMR4"]],
[['text'=>'🔙','callback_data'=>'AMR']],
]])
]);
}
#ــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــــــٓــ
if($AMRD == "AMR765"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>"
*مرحبا بك في التحكم ب قناة ¹*✨👇
",
                     'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'وضع قناة  ➕', 'callback_data'=>'AMR0'],['text'=>'حذف قناة 📮','callback_data'=>'delete11']],
[['text'=>'عرض قناة ¹', 'callback_data'=>'AMR987']],
[['text'=>'🔙','callback_data'=>'AMR']],
]])
]);
}
#ــــٓــــــٓــــــٓــــــٓــــــٓــ
  if($data ==  'yfffgh' ){
  bot( 'editMessageText' ,[
     'chat_id' =>$chat_id2,
     'message_id'=>$message_id,
      'text'=>"
*
اختار ماذا تريد الان 🖤 *
",
          'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'تفعيل التوجيه 🔙' ,'callback_data'=>"AMR11"],['text'=>'قفل التوجيه ❎' ,'callback_data'=>"AMR12"]],
]])
]);
}
  if($data ==  '6g77g' ){
  bot( 'editMessageText' ,[
     'chat_id' =>$chat_id2,
     'message_id'=>$message_id,
      'text'=>"
*
اختار نوع الاذاعه الان *
",
          'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'إذاعة توجيه 🔄' ,'callback_data'=>"AMR5"],['text'=>'إذاعة عامه 🔱' ,'callback_data'=>"AMR6"]],
]])
]);
}
if($AMRD == "AMR987"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>"
القناة => $AMR0 √
",
                     'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'🔙','callback_data'=>'AMR']],
]])
]);
}
#ــــٓــــــٓــــــٓــــــٓــ
if($AMRD == "AMR907"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>"
*مرحبا بك في التحكم ب قناة ²*✨👇
",
                     'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'وضع قناة  ➕', 'callback_data'=>'AMR2'],['text'=>'حذف قناة 📮','callback_data'=>'delete22']],
[['text'=>'عرض قناة ¹', 'callback_data'=>'AMR9887']],
[['text'=>'🔙','callback_data'=>'AMR']],
]])
]);
}
#ــــٓــــــٓــــــٓــــــٓــ
if($AMRD == "AMR9887"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>"
القناة => $AMR1 √
",
                     'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'🔙','callback_data'=>'AMR']],
]])
]);
}
#ــــٓــــــٓــــــٓــ
if($AMRD == "AMR3"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'- لقد تم حذف القناة  من الإشتراك الإجباري بنجاح 📮',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
unlink("AMR.txt");
unlink("AMR1.txt");
}
if($AMRD == "AMR4"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>"
هلا بك عزيزي 
قنوات الاشتراك الاجباري
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــ
قناة ¹ => $AMR0 √
قناة ² => $AMR1 √
ـــــــــــــــــــــــــــــــــــــــــــــــــــــــ
",
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
unlink("AMR.txt");
}
if($AMRD == "AMR5"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>"قم برسال التوجيه الان 💚",
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
file_put_contents("AMR.txt","AMR2");
}
if($AMR18 and $AMR == "AMR2" and $AMR11 == $admin){
bot("sendmessage",[
"chat_id"=>$AMR13,
"text"=>"تم توجيه الرساله ",
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
for($i=0;$i<count($AMR2); $i++){
bot('forwardMessage', [
'chat_id'=>$AMR2[$i],
'from_chat_id'=>$AMR11,
'message_id'=>$AMR18->message_id
]);
unlink("AMR.txt");
}
}
if($AMRD == "AMR6"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>"قم برسال المراد الاذاعه له الان 💛",
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
file_put_contents("AMR.txt","AMR3");
}
if($AMR17 and $AMR == "AMR3" and $AMR11 == $admin){
bot("sendmessage",[
"chat_id"=>$AMR13,
"text"=>'تم النشر بنجاح  ✅',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
for($i=0;$i<count($AMR2); $i++){
bot('sendMessage', [
'chat_id'=>$AMR2[$i],
'text'=>$AMR17
]);
unlink("AMR.txt");
}
}
if($AMRD == "AMR7"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>"هلا بك في قسم الاحصايات  💛
ــــــــــــــــــــ؍.َِ⇣𖤍🖤ء͡⇣ــــــــــــــــــ

 عدد مشتركين البوت  [ $AMR3 ]

حاله سرعه البوت -: 100%
ــــــــــــــــــــ؍.َِ⇣𖤍🖤ء͡⇣ــــــــــــــــــ",
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
unlink("AMR.txt");
}

#ممنوع تغير الحقوق
# من مطور @BBI4BB
#قناة المطور @AMRAKL

if($AMRD == "AMR10"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'تم تنفيذ الامر ❎',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
unlink("AMR.txt");
unlink("AMR2.txt");
}
if($AMRD == "AMR11"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'تم تنفيذ الامر ✅',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
file_put_contents("AMR3.txt","AMR");
}
if($AMR18 and $AMR6 == "AMR" and $AMR11 != $admin){
bot('forwardMessage', [
'chat_id'=>$admin,
'from_chat_id'=>$AMR11,
'message_id'=>$AMR18->message_id
]);
}
if($AMR18 and $AMR6 == "AMR" and $AMR11 == $admin){
bot('sendMessage',[
'chat_id'=>$AMR18->reply_to_message->forward_from->id,
'text'=>$AMR17,
]);
}
if($AMRD == "AMR12"){
bot('EditMessageText',[
'chat_id'=>$AMR12,
'message_id'=>$AMR14,
'text'=>'تم تنفيذ الامر ❎',
 'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"AMR"]],
]])
]);
unlink("AMR.txt");
unlink("AMR3.txt");
} 
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$name = $message->from->first_name.' '.$message->from->last_name;
$user = $message->from->username;
if(isset($update->callback_query)){
  $chat_id = $update->callback_query->message->chat->id;
  $message_id = $update->callback_query->message->message_id;
  $data     = $update->callback_query->data;
 $user = $update->callback_query->from->username;
}
$me = bot('getme',['bot'])->result->username;
$sales = json_decode(file_get_contents('sales.json'),1);
 if($data  == 'c'){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>"- مرحباً عزيزي المطور ( @$user ) 🔥.",
   'reply_markup'=>json_encode([
     'inline_keyboard'=>[
       [['text'=>'اضف جفت 🔨','callback_data'=>'add'],['text'=>'حذف جفت 🗑','callback_data'=>'del']],
       [['text'=>'ارسال نقاط','callback_data'=>'addcon'],['text'=>'خصم نقاط','callback_data'=>'delcon']],
       [['text'=>'رجوع','callback_data'=>'AMR']],
      ]
    ])
  ]);
  $sales['mode'] = null;
  save($sales);
 }
 if($data == 'add'){
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'• قم بأرسال اسم الجفت ، 📬',
    'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'- الغاء 🚫!','callback_data'=>'c']]
      ]
    ])
  ]);
  $sales['mode'] = 'add';
  save($sales);
  exit;
 }
 if($text != '/start' and $text != null and $sales['mode'] == 'add'){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>'تم الحفظ ✅. 
~ الان ارسل عدد النقاط ( السعر ) المطلوبة للشراء ، 💸 ... رقم فقط '
  ]);
  $sales['n'] = $text;
  $sales['mode'] = 'addm';
  save($sales);
  exit;
 }
 if($text != '/start' and $text != null and $sales['mode'] == 'addm'){
  $code = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz12345689807'),1,7);
  bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>'تم الحفظ الجفت ✅. 
   ℹ️┇الاسم : '.$sales['n'].'
💵┇السعر : '.$text.'
⛓┇كود الجفت : '.$code
  ]);
  $sales['sales'][$code]['name'] = $sales['n'];
  $sales['sales'][$code]['price'] = $text;
  $sales['n'] = null;
  $sales['mode'] = null;
  save($sales);
  exit;
 }
 if($data == 'del'){
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>'• قم بأرسال كود الجفت ، 📬',
    'reply_markup'=>json_encode([
     'inline_keyboard'=>[
      [['text'=>'- الغاء 🚫!','callback_data'=>'c']]
      ]
    ])
  ]);
  $sales['mode'] = 'del';
  save($sales);
  exit;
 }
 if($text != '/start' and $text != null and $sales['mode'] == 'del'){
  if($sales['sales'][$text] != null){
   bot('sendMessage',[
   'chat_id'=>$chat_id,
   'text'=>'تم حذف الجفت ✅. 
   ℹ️┇الاسم : '.$sales['sales'][$text]['name'].'
💵┇السعر : '.$sales['sales'][$text]['price'].'
⛓┇كود الجفت : '.$text
  ]);
  unset($sales['sales'][$text]);
  $sales['mode'] = null;
  save($sales);
  exit;
  } else {
   bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>'- الكود الذي ارسلته غير موجود 🚫!'
   ]);
  }
} else {
 if(preg_match('/\/(start)(.*)/', $text)){
  $ex = explode(' ', $text);
  if(isset($ex[1])){
   if(!in_array($chat_id, $sales[$chat_id]['id'])){
    $sales[$ex[1]]['collect'] += 1;
    save($sales);
    bot('sendMessage',[
     'chat_id'=>$ex[1] ,
     'text'=>"- قام : @$user بالدخول الى الرابط الخاص وحصلت على نقطة واحده ، ✨\n~ عدد نقاطك : ".$sales[$ex[1]]['collect'], 
    ]);
    $sales[$chat_id]['id'][] = $chat_id;
    save($sales);
   }
  }
  if($sales[$chat_id]['collect'] == null){
   $sales[$chat_id]['collect'] = 0;
   save($sales);
  }
      $mrcom = $sales[$chat_id]['collect'];
  bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"
*اهلا بوت بيع جفتات مميز 🌿🥸*

• يوجد بالبوت جفتات رخيصه جدا ✅
• شارك الرابط الخاص بك 🍂📮
• ثم خذ الجفت التي يعجبك 🫀✨

مستخدمين البوت 👤🎩: *$AMR3*

*• - عدد نقاطك ( $mrcom )🍂📮*
",
'parse_mode'=>"markdown",
'reply_to_message_id'=>$message->message_id,
   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
     [['text'=>'• شراء جفت ✨•','callback_data'=>'sales']],
     [['text'=>'• تجميع النقاط ، 💸 •','callback_data'=>'col'],['text'=>'• معلومات حسابك 🔍 •','callback_data'=>'myacont']],
     [['text'=>'• إثبات التسليم. ⚖️ •','url'=>"https://t.me/$chas2"],['text'=>'• تابعنا 🧨 •','url'=>'https://t.me/amrakl']],
     [['text'=>'• مطور البوت 👼 •','url'=>"https://t.me/$adminuz"]],
    ] 
   ])
  ]);
 }
   if($data == 'bae'){
   	      $mrcom = $sales[$chat_id]['collect'];
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"
*اهلا بوت بيع جفتات مميز 🌿🥸*

• يوجد بالبوت جفتات رخيصه جدا ✅
• شارك الرابط الخاص بك 🍂📮
• ثم خذ الجفت التي يعجبك 🫀✨

مستخدمين البوت 👤🎩: *$AMR3*

*• - عدد نقاطك ( $mrcom )🍂📮*
",
'parse_mode'=>"markdown",
'reply_to_message_id'=>$message->message_id,
   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
     [['text'=>'• شراء جفت ✨•','callback_data'=>'sales']],
     [['text'=>'• تجميع النقاط ، 💸 •','callback_data'=>'col'],['text'=>'• معلومات حسابك 🔍 •','callback_data'=>'myacont']],
     [['text'=>'• إثبات التسليم. ⚖️ •','url'=>"https://t.me/$chas2"],['text'=>'• تابعنا 🧨 •','url'=>'https://t.me/amrakl']],
     [['text'=>'• مطور البوت 👼 •','url'=>"https://t.me/$adminuz"]],
    ] 
   ])
  ]);
 }

  if($data == 'myacont'){
  $cou = $sales[$chat_id]['collect'];
  bot('editMessageText',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    'text'=>"
*معلومات حسابك عزيزي *

اسمك : $name
معرفك : [@$user]
ايدي :  $chat_id
نقاطك : $cou
",
'parse_mode'=>"markdown",
     'reply_markup'=>json_encode([
    'inline_keyboard'=>[
     [['text'=>'رجوع','callback_data'=>'bae']],
    ] 
   ])
  ]);
 }
   if ($data == 'addcon') {
    bot('EditMessageText', [
      'chat_id' => $chat_id,
      'message_id' => $message_id,
      'text' => "
أرسل أيدي الشخص الذي تريد إرسال النقاط له
",
]);
  $sales['mode'] = 'chat';
  save($sales);
  exit;
  }
   if($text != '/start' and $text != null and $sales['mode'] == 'chat'){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=> "أرسل الكمية التي تريد إرسالها",
 ]);
   $sales['mode'] = 'poi';
   $sales['idd'] = $text;
  save($sales);
  exit;
}
 if($text != '/start' and $text != null and $sales['mode'] == 'poi'){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=>"تم إضافة $text نقطة إلى حساب ".$sales['idd']." بنجاح ",
]);
  bot('sendmessage',[
   'chat_id'=>$sales['idd'],
  'text'=>"تمت إضافة $text نقطة إلى حسابك في البوت من قبل المطور ",
  ]);
  $sales['mode'] = null;
  $sales[$sales['idd']]['collect'] += $text;
  $sales['idd'] = null;
  save($sales);
  exit;
}
  if ($data == 'delcon') {
    bot('EditMessageText', [
      'chat_id' => $chat_id,
      'message_id' => $message_id,
      'text' => "
أرسل أيدي الشخص الذي تريد خصم النقاط منه
",
]);
  $sales['mode'] = 'chat1';
  save($sales);
  exit;
  }
   if($text != '/start' and $text != null and $sales['mode'] == 'chat1'){
  bot('sendMessage',[
   'chat_id'=>$chat_id,
 'text'=> "أرسل الكمية التي تريد خصمها",
 ]);
   $sales['mode'] = 'poi1';
   $sales['idd'] = $text;
  save($sales);
  exit;
}
 if($text != '/start' and $text != null and
