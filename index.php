<?php
$admin = '517853436'; //admin id
$token = '1026681784:AAGimR4OEWhq5a51mjgvKZGWAwJ-S0RFQ1w';//token joyi
$UserNameBot = 'RobenGud_bot';//Ushbu kod @TexnoTG tomonidan @Clever_Coders kanali orqali tarqatildi 
//Manbaga tekganingni itaraman 😈
define('API_KEY','$token');
function bot($method,$datas=[]){
global $token;
    $url = "https://api.telegram.org/bot".$token."/".$method;
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
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$mid = $message->message_id;
$ccgcid = $message->chat->id;
$chat_id = $message->chat->id;
$ccgcid2 = $update->callback_query->message->chat->id;
$data = $update->callback_query->data;
$clever_coders_cc = $message->text;
$uid= $message->from->id;
$id = $message->reply_to_message->from->id;
$rname= $message->reply_to_message->from->first_name;
$rmid= $message->reply_to_message->message_id;
$mention = $message->entities[0]->type;
$ty = $message->chat->type;
$title = $message->chat->title;
$repid = $message->reply_to_message->from->id;
$mtext = $message->text;
$textmassage = $message->text;
$gruppa = file_get_contents("gruppa.db");
$lichka = file_get_contents("lichka.db");
$new = $message->new_chat_member;
$left = $message->left_chat_member;
$for = $message->forward_from;
$forx = $message->forward_from_chat;
$ccssl = file_get_contents("data/$ccgcid/ssilka.db");
$stic = file_get_contents("data/$ccgcid/stic.db");
$ras = file_get_contents("data/$ccgcid/rasm.db");
$join = file_get_contents("data/$ccgcid/join.db");
$gif = file_get_contents("data/$ccgcid/gif.db");
$ovoz = file_get_contents("data/$ccgcid/ovoz.db");
$sticker = $message->sticker;
$rasm = $message->photo;
$fromid=$update->message->from->id;
$fadmin = $message->from->id;
$title = $message->chat->title;
$description = $message->chat->description;
$fadmin = $message->from->id;
$from_id=$update->message->from->id;
$first_name = $message->from->first_name;
$animation = $message->animation;
$voice = $message->voice;
$replytx = $message->reply_to_message->text;
$url = $message->entities[0]->type;
$user =  $message->entities[1]->type;
$msgs = json_decode(file_get_contents('msgs.json'),true);
$type = $message->chat->type;
$text = $message->text;
$from_user_first_name = $message->reply_to_message->from->first_name;
$clever_coders_cc = $message->text;
$textmassage = $message->text;
$chatid = $update->callback_query->message->chat->id;
$fm = $update->callback_query->from->id;
$step= file_get_contents("data/$from_id/file.txt");
$owners= file_get_contents("data/$chat_id/owner.txt");
$owners2= file_get_contents("data/$chatid/owner.txt");
$locklink= file_get_contents("data/$chat_id/locklink.txt");
$welcome= file_get_contents("data/$chat_id/welcome.txt");
$welcome2= file_get_contents("data/$chatid/welcome.txt");
$textwelcome= file_get_contents("data/$chat_id/textwelcome.txt");
$Dev = "517853436";//add sudo
$GetINFObot = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getMe"));
$UserNameBot = $GetINFObot->result->username;
$NameBot = $GetINFObot->result->first_name;
$ali = file_get_contents("data/$from_id/ali.txt");
$time = file_get_contents("https://provps.ir/td?td=time");
$data = file_get_contents("https://provps.ir/td?td=date");
$chatadd = file_get_contents("data/$chat_id/chatadd.txt");
$timeadd= file_get_contents("data/$chat_id/timeadd.txt");
$dataadd = file_get_contents("data/$chat_id/dataadd.txt");
$ali = file_get_contents("data/$from_id/ali.txt");
$usernameadd = file_get_contents("data/$chat_id/usernameadd.txt");
$clever_coders_cctt = file_get_contents('data/users.txt');
$forward_from_chat = $update->message->forward_from_chat;
$from_chat_id = $forward_from_chat->id;
$data = $update->callback_query->data;
$firstcall = $update->callback_query->message->chat->first_name;
$usercall = $update->callback_query->message->chat->username;
$messageid = $update->callback_query->message->message_id;
$gpname = $update->callback_query->message->chat->title;
$textpost = file_get_contents("data/$chatid/textpost.txt");
$linkpost = file_get_contents("data/$chatid/linkpost.txt");
$namepost = file_get_contents("data/$chatid/namepost.txt");
$channel = file_get_contents("data/$chatid/channel.txt");
$newchatmemberid = $update->message->new_chat_member->id;
$newchatmemberu = $update->message->new_chat_member->username;
$rt = $update->message->reply_to_message;
$replyid = $update->message->reply_to_message->message_id;
$rtid = $update->message->reply_to_message->from->id;
$tedadmsg = $update->message->message_id;
$fwd = $update->message->forward_from;
$edit = $update->edited_message->text;
$re_id = $update->message->reply_to_message->from->id;
$re_user = $update->message->reply_to_message->from->username;
$user_id = $update->message->from->id;
$re_name = $update->message->reply_to_message->from->first_name;
$re_msgid = $update->message->reply_to_message->message_id;
$re_chatid = $update->message->reply_to_message->chat->id;
$re_fwdid = $update->message->reply_to_message->forward_from->id;
$message_edit_id = $update->edited_message->message_id;
$chat_edit_id = $update->edited_message->chat->id;
$edit_for_id = $update->edited_message->message->from->id;
$mute_all=file_get_contents("data/$chat_id/mute_all.txt");
$lockvideo_note=file_get_contents("data/$chat_id/lockvideo_note.txt");
$lockenglish=file_get_contents("data/$chat_id/lockenglish.txt");
$locktg= file_get_contents("data/$chat_id/locktg.txt");
$lockdocument= file_get_contents("data/$chat_id/lockdocument.txt");
$locktelegram= file_get_contents("data/$chat_id/locktelegram.txt");
$locklink= file_get_contents("data/$chat_id/locklink.txt");
$lockphoto= file_get_contents("data/$chat_id/lockphoto.txt");
$lockedit= file_get_contents("data/$chat_id/lockedit.txt");
$lockgame= file_get_contents("data/$chat_id/lockgame.txt");
$locklocation= file_get_contents("data/$chat_id/locklocation.txt");
$lockcontact= file_get_contents("data/$chat_id/lockcontact.txt");
$lockusername= file_get_contents("data/$chat_id/lockusername.txt");
$muteall= file_get_contents("data/$chat_id/muteall.txt");
$lockaudio= file_get_contents("data/$chat_id/lockaudio.txt");
$namegroup = $update->message->chat->title;
$lockvoice= file_get_contents("data/$chat_id/lockvoice.txt");
$locksticker= file_get_contents("data/$chat_id/locksticker.txt");
$lockjoin= file_get_contents("data/$chat_id/lockjoin.txt");
$lockdecument= file_get_contents("data/$chat_id/lockdecument.txt");
$lockvideo= file_get_contents("data/$chat_id/lockvideo.txt");
$lockgif= file_get_contents("data/$chat_id/lockgif.txt");
$lockforward= file_get_contents("data/$chat_id/lockforward.txt");
$lockoperator= file_get_contents("data/$chat_id/lockoperator.txt");
$lockfosh= file_get_contents("data/$chat_id/lockfosh.txt");
$mute_all2=file_get_contents("data/$chatid/mute_all.txt");
$lockvideo_note2=file_get_contents("data/$chatid/lockvideo_note.txt");
$lockenglish2=file_get_contents("data/$chatid/lockenglish.txt");
$locktg2=file_get_contents("data/$chatid/locktg.txt");
$lockgif2= file_get_contents("data/$chatid/lockgif.txt");
$lockdocument2= file_get_contents("data/$chatid/lockdocument.txt");
$locktelegram2= file_get_contents("data/$chatid/locktelegram.txt");
$locklink2= file_get_contents("data/$chatid/locklink.txt");
$lockphoto2= file_get_contents("data/$chatid/lockphoto.txt");
$lockedit2= file_get_contents("data/$chatid/lockedit.txt");
$lockgame2= file_get_contents("data/$chatid/lockgame.txt");
$locklocation2= file_get_contents("data/$chatid/locklocation.txt");
$lockcontact2= file_get_contents("data/$chatid/lockcontact.txt");
$lockusername2= file_get_contents("data/$chatid/lockusername.txt");
$lockaudio2= file_get_contents("data/$chatid/lockaudio.txt");
$lockvoice2= file_get_contents("data/$chatid/lockvoice.txt");
$locksticker2= file_get_contents("data/$chatid/locksticker.txt");
$lockjoin2= file_get_contents("data/$chatid/lockjoin.txt");
$lockdecument2= file_get_contents("data/$chatid/lockdecument.txt");
$lockvideo2= file_get_contents("data/$chatid/lockvideo.txt");
$lockgif2= file_get_contents("data/$chatid/lockgif.txt");
$lockforward2= file_get_contents("data/$chatid/lockforward.txt");
$lockoperator2= file_get_contents("data/$chatid/lockoperator.txt");
$lockbots2= file_get_contents("data/$chatid/lockbots.txt");
$lockfosh2= file_get_contents("data/$chatid/lockfosh.txt");
$lockbots= file_get_contents("data/$chat_id/lockbots.txt");
$floods= file_get_contents("data/$chat_id/lockflood.txt");
$floods2= file_get_contents("data/$chatid/lockflood.txt");
$flood= file_get_contents("data/$chat_id/numflood.txt");
$flood2= file_get_contents("data/$chatid/numflood.txt");
$jok = file_get_contents("https://api.bot-dev.org/sangin/");
$danestani = file_get_contents("https://api.bot-dev.org/danestani");
$statjson = json_decode($stat, true);
$status = $statjson['result']['status'];
$lockedit3 = file_get_contents("data/$chat_edit_id/lockedit.txt");
$get = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_edit_id&user_id=".$edit_for_id);
$info = json_decode($get, true);
$you = $info['result']['status'];
$silent = file_get_contents("data/$chat_id/silent.txt");
$super_silent = explode("\n", $silent);
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$message_id = $message->message_id;
$first_name = $message->from->first_name;
$last_name = $message->from->last_name;
$username = $message->from->username;
$chatType = $message->chat->type;
$from_fname = $message->from->first_name;
$from_uname = $message->from->username;
$from_id = $message->from->id;
$groupname = $message->chat->title;
$reply_uname = $update->message->reply_to_message->from->username;
$reply = $update->message->reply_to_message;
$reply_fname = $reply_id = $update->message->reply_to_message->from->first_name;
$reply_id = $update->message->reply_to_message->from->id;
$reply_msgid = $update->message->reply_to_message->message_id;
$chatType = $message->chat->type;
mkdir("data/username.txt/$username");
mkdir("data/$chat_id");
mkdir("data");
mkdir("data/$from_id");



function SendMessage($chat_id, $text){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$text,
'parse_mode'=>'MarkDown']);
}
function save($filename, $data)
{
$file = fopen($filename, 'w');
fwrite($file, $data);
fclose($file);
}
 function senddocument($chat_id, $document, $caption){
 bot('senddocument',[
 'chat_id'=>$chat_id,
 'document'=>$document,
 'caption'=>$caption
 ]);
 }
function sendAction($chat_id, $action){
bot('sendChataction',[
'chat_id'=>$chat_id,
'action'=>$action]);
}
function sendphoto($chat_id, $photo, $captionl){
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$photo,
'caption'=>$caption,
 ]);
 }
function sendsticker($chat_id, $sticker){
 bot('sendsticker',[
 'chat_id'=>$chat_id,
 'sticker'=>$sticker
 ]);
 }
function LeaveChat($chat_id){
bot('LeaveChat',[
'chat_id'=>$chat_id
]);
}
function sendvoice($chat_id, $voice, $caption){
bot('sendvoice',[
'chat_id'=>$chat_id,
'voice'=>$voice,
'caption'=>$caption
]);
}
function  getUserProfilePhotos($token,$from_id) {
  $url = 'https://api.telegram.org/bot'.$token.'/getUserProfilePhotos?user_id='.$from_id;
  $result = file_get_contents($url);
  $result = json_decode ($result);
  $result = $result->result;
  return $result;
}
function Forward($berekoja,$azchejaei,$kodompayam)
{
bot('ForwardMessage',[
'chat_id'=>$berekoja,
'from_chat_id'=>$azchejaei,
'message_id'=>$kodompayam
]);
}
	function objectToArrays($object)
    {
        if (!is_object($object) && !is_array($object)) {
            return $object;
        }
        if (is_object($object)) {
            $object = get_object_vars($object);
        }
        return array_map("objectToArrays", $object);
    }





if($type=="supergroup" or $type=="group"){
$ex = $msgs[$text];
$ex = explode("|",$ex);
$clever_coders_cct = $ex[rand(0,count($ex)-1)];
bot("sendmessage",[
	'chat_id'=>$message->chat->id,
	'text'=>"$clever_coders_cct",
	'reply_to_message_id'=>$mid
	]);
}
$mem = bot('getChatMembersCount',[
'chat_id'=>$ccgcid,
]);

$azo = $mem->result;
$first_name = $message->from->first_name;
$is_bot = $message->new_chat_member->is_bot;
$ismcha = $message->from->first_name;
$familiya = $message->from->last_name;
$bio1 = $message->from->about;
$login = $message->from->username;
$soat1 = date('H:i:s',strtotime('2 hour')); 
$soat = date('H:i:s',strtotime('2 hour')); 
$sana1 = date('d-M Y',strtotime('2 hour'));
$sana2 = date('z',strtotime('2 hour'));
$gmt = date('O',strtotime('2 hour'));
$oynomi = date('F',strtotime('2 hour'));
$buoy = date('t',strtotime('2 hour'));

file_get_contents("ball.dat");
if($message->new_chat_member->id != $message->new_chat_members->id){
$war=file_get_contents("ball.dat");
$jazo="$war\n$chat_id=$user_id";
file_put_contents("ball.dat",$jazo); 
$war=file_get_contents("ball.dat");
$soni="$chat_id=$user_id";
$str=substr_count($war,"$soni");
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$mid,
]);
if($str=="80"){
$rep=str_replace($soni,"","$war");
file_put_contents("ball.dat",$rep);
$vaqti = strtotime("3 minutes");
bot('promoteChatmember',[
'chat_id'=>$chat_id,
'user_id'=>$user_id,
'can_change_info'=>true,
'can_post_messages'=>false,
'can_edit_messages'=>false,
'can_delete_messages'=>true,
'can_invite_users'=>true,
'can_restrict_members'=>false,
'can_pin_messages'=>true,
'can_promote_members'=>false
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"[$first_name](tg://user?id=$fadmin) *Sizning ballaringiz 80 ball. 👏Tabriklayman Siz Gruh Adminstratorisiz!*",
'parse_mode'=>'markdown',
]);
}if($str<"80"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"[$first_name](tg://user?id=$fadmin) *Sizga 1 ball berildi! 
Ballaringiz soni 80 ball bo'lgandan Siz gruh adminstratoriga aylanasiz*
⭕Umumumiy ballaringiz $str~80",
'parse_mode'=>'markdown',
]);
}
}

if($replytx){
    if($type=="supergroup"  or $type=="group"){
   	$replytx = $message->reply_to_message->text;
   	      	if(strpos($msgs[$replytx],"$text") !==false){
   	}else{
		$msgs[$replytx] ="$text|$msgs[$replytx]";
		file_put_contents('msgs.json', json_encode($msgs));
	}
	
}
}
//Ushbu kod @TexnoTG tomonidan @Clever_Coders kanali orqali tarqatildi 
//Manbaga tekganingni itaraman 😈

if($textmassage == "/info" || $textmassage == "!me"){
$a = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getuserprofilephotos?user_id=".$from_id));
$b = objectToArrays($a);
$c = $b["ok"];
$d = $b["result"];
$e = $d["total_count"];
$f = $d["photos"][0][0]["file_id"];
if($e == 0){
	bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"https://seouc.ir/AntiSpam/NoPhoto.png",
'caption'=>"👤Name : $from_fname

🆔UserName : @$from_uname

🆔ID : $from_id

🏞Number Of Your Photos : $e"
]);
}
else{
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$f,
'caption'=>"👤Name : $from_fname

🆔UserName : @$from_uname

🆔ID : $from_id

🏞Number Of Your Photos : $e"
]);
}
}
if(strpos($textmassage, "/getpic") !== false){
$n = str_replace("/getpic ", "", $text);
$a = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getuserprofilephotos?user_id=".$from_id));
$b = objectToArrays($a);
$c = $b["ok"];
$d = $b["result"];
$e = $d["total_count"];
$f = $d["photos"][$n-1][0]["file_id"];
if($e == 0){
	bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"Sizda rasm yo'q!"
]);
}
else{
if($n <= $e){
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$f,
'caption'=>"🏞Siz tanlagan rasmlar raqamingiz : $n

🏞Rasmlaringiz soni: $e"
]);
}
else{
		bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"Sizda yo'q $n Photos!"
]);
}
}
}

if(($text=="/del_doc") and $ccgcid==$admin){
unlink("msgs.json");
bot("sendmessage",[
"chat_id"=>$ccgcid,
'parse_mode'=>"markdown",
"text"=>"*🗑Baza Tozalandi*"
]);
}


if(($text=="/doc") and $ccgcid==$admin){
bot("senddocument",[
"chat_id"=>$message->chat->id,
"document"=>new CURLFile("msgs.json")
]);
}




if($textmassage=="/photo" or $textmassage=="photo"){
  save("data/$from_id/file.txt","photo");
if ($type == 'group' | $type == 'supergroup'){
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"Sticker ingizni yuboring yuboring men uni rasm qilib tashlayman😎",
  'parse_mode'=>'MarkDown',
 ]);
 }
}
//Ushbu kod @TexnoTG tomonidan @Clever_Coders kanali orqali tarqatildi 
//Manbaga tekganingni itaraman 😈
if($step == "photo"){
save("data/$from_id/file.txt","none");
if ($type == 'group' | $type == 'supergroup'){
$sticker = $message->sticker;
$file = $sticker->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
    file_put_contents("data/$chat_id/photogp.png",file_get_contents("https://api.telegram.org/file/bot$token/$patch"));
bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>new CURLFile("data/$chat_id/photogp.png"),
  'caption'=>"@$UserNameBot",
  	  'reply_markup'=>json_encode([
    'inline_keyboard'=>[
 	[
	  ['text'=> $first_name ,'url'=>"http://telegram.me/" . $username]
	  ],
	  	  	 [
				 ['text'=>"😎Group Mafia Bot💠",'url'=>"https://telegram.me/$UserNameBot"]
		 ],
   ]
   ])
 ]);
 }
}

   
if($textmassage=="/sticker" or $textmassage=="/Sticker"){
  save("data/$from_id/file.txt","sticker");
if ($type == 'group' | $type == 'supergroup'){
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"Stiker qilmoqchi bo'lgan rasmingizni yuboring😎",
  'parse_mode'=>'MarkDown',
 ]);
 }
}

if($textmassage=="/me" or $textmassage=="/info"){
  save("data/$from_id/file.txt","sticker");
if ($type == 'group' | $type == 'supergroup'){
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"<b>-----User Infosi-----</b>

👤<b>Nomingiz:</b> $first_name

🆔<b>Username ingiz :</b> @$username

🆔<b>ID ingiz :</b> $fadmin

<b>-----Group Infosi-----</b>

<b>👥Gruppa nomi :</b> $groupname

🆔<b>Gruppa ID si:</b> $chat_id

👥<b>Gruppa turi :</b> $chatType

😎By  <a href='tg://user?id=517853436'>☆Ф҉ у҉ т҉ б҉ о҉ л҉ л҉ е҉ с҉ т҉ ☆</a>",
  'parse_mode'=>'html',
  'reply_to_message_id'=>$mid,
 ]);
 }
}

if($step == "sticker"){
save("data/$from_id/file.txt","none");
if ($type == 'group' | $type == 'supergroup'){
$photo = $message->photo;
$file = $photo[count($photo)-1]->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
    file_put_contents("data/$chat_id/photogp.png",file_get_contents("https://api.telegram.org/file/bot$token/$patch"));
bot('sendsticker',[
 'chat_id'=>$chat_id,
 'sticker'=>new CURLFile("data/$chat_id/photogp.png"),
   'caption'=>"@$UserNameBot",
   	  'reply_markup'=>json_encode([
    'inline_keyboard'=>[
 	[
	  ['text'=> $first_name ,'url'=>"http://telegram.me/" . $username]
	  ],
	  	  	 [
				 ['text'=>"😎Group Mafia Bot💠",'url'=>"https://telegram.me/$UserNameBot"]
		 ],
   ]
   ])
 ]);
 }
}


if($text == "/Adm" or $text == "/adm"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $uid,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
  bot('promoteChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$uid,
    'can_change_info'=>false,
    'can_post_messages'=>true,
    'can_edit_messages'=>true,
    'can_delete_messages'=>true,
    'can_invite_users'=>true,
    'can_restrict_members'=>false,
    'can_pin_messages'=>false,
    'can_promote_members'=>false
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"✅ <a href='tg://user?id=$id'>$from_user_first_name</a> sizni tabriklayman , siz guruh <b>adminstratorisiz❗️</b>",
    'parse_mode'=>'html'
  ]);
}
}
//Ushbu kod @TexnoTG tomonidan @Clever_Coders kanali orqali tarqatildi 
//Manbaga tekganingni itaraman 😈
if($message->forward_from){
  bot('deleteMessage',[
              'chat_id'=>$chat_id,
           'message_id'=>$message->message_id,
           ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Kechirasiz bu guruhda forward habar mumkin emas😎",
        'parse_mode'=>'markdown',        
]);
}

if(strpos($clever_coders_cc , 'https://') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
         'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Sizni ogohlantiraman guruhda reklama tarqatmang😎",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , 'http://') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Sizni ogohlantiraman guruhda reklama tarqatmang😎",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , 'telegram.me/') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Sizni ogohlantiraman guruhda reklama tarqatmang😎",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , 'telegram.dog/') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Sizni ogohlantiraman guruhda reklama tarqatmang😎",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , 't.me/') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Sizni ogohlantiraman guruhda reklama tarqatmang😎",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , '@') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Sizni ogohlantiraman guruhda reklama tarqatmang😎",
        'parse_mode'=>'markdown',
    ]);
}
//Ushbu kod @TexnoTG tomonidan @Clever_Coders kanali orqali tarqatildi 
//Manbaga tekganingni itaraman 😈
if(strpos($clever_coders_cc , 'amvachcha') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , 'Qotoq') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , 'qotoq') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , 'yiban') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , 'gandon') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
//Ushbu kod @TexnoTG tomonidan @Clever_Coders kanali orqali tarqatildi 
//Manbaga tekganingni itaraman 😈
if(strpos($clever_coders_cc , 'Yiban') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , 'Gandon') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , 'gandon') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , 'qutoq') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , 'Qutoq') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , 'Kot') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , 'kot') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , 'xezalak') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , 'dalbayop') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , 'Dalbayop') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , 'Xezalak') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , 'itvachcha') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , 'Itvachcha') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , 'itvacha') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , 'Itvacha') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , 'ambashara') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , 'Dalbayof') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , 'Oneni') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , 'oneni') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , 'skey') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , 'skay') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , 'xarom') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , 'Xarom') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , 'qotaq') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , 'Qotaq') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , 'Jalap') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , 'jalap') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , 'jalab') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , 'Jalab') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , 'sikkan') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , 'Sikkan') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , 'xezele') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , 'Xezele') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , 'onasini ske') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , 'Onasini ske') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , 'pidaraz') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , 'Pidaraz') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , 'soska am') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , 'Soska Am') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , 'soska Am') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , 'Soska am') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , 'Qotag`im') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , 'qotag`im') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , 'qotog`im') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , 'Qotog`im') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , 'chichqoq') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , 'Chichqoq') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , '🖕') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , '🖕🏻') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , '🖕🏼') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , '🖕🏽') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , '🖕🏾') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , '🖕🏿') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , '18+') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , '16+') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , '22+') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , '👩‍❤️‍👩') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , '💏') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , '👩‍❤️‍💋‍👨') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , '👨‍❤️‍💋‍👨') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , '👩‍❤️‍💋‍👩') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , '💑') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , '👩‍❤️‍👨') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , '👨‍❤️‍👨') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , '👩‍❤️‍👩') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , '🤰') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , '🔞') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , '🚷') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , '👅') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , '👄') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if(strpos($clever_coders_cc , '💋') !== false){
    bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
        bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$first_name](tg://user?id=$fadmin) Siz taqiqlangan so'z ishlatdingiz bu hol boshqa takrorlanmasin😠",
        'parse_mode'=>'markdown',
    ]);
}
if($text=="/unban" or $text=="/Unban"){
if($get =="administrator" or $get == "creator"){ 
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$rname](tg://user?id=$id) Admin ruhsati bilan😎 *Bandan* olindi!",
        'parse_mode'=>'markdown',
    ]);
  bot('unbanChatMember',[    
    'chat_id'=>$chat_id,    
    'user_id'=>$uid,    
  ]);    
}
}

if($text == "/Admn" or $text == "/admn"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $uid,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
  bot('promoteChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$uid,
    'can_change_info'=>true,
    'can_post_messages'=>true,
    'can_edit_messages'=>true,
    'can_delete_messages'=>true,
    'can_invite_users'=>true,
    'can_restrict_members'=>true,
    'can_pin_messages'=>true,
    'can_promote_members'=>true
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"✅ <a href='tg://user?id=$id'>$from_user_first_name</a> sizni tabriklayman , siz guruh <b>adminstratorisiz❗️</b>",
    'parse_mode'=>'html'
  ]);
}
}

   if($text == "/Delmn" or $text == "/delmn"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $uid,
]);
$get = $gett->result->status;
if($get == "administrator" or $get == "creator"){
bot('promoteChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$uid,
    'can_change_info'=>false,
    'can_post_messages'=>false,
    'can_edit_messages'=>false,
    'can_delete_messages'=>false,
    'can_invite_users'=>false,
    'can_restrict_members'=>false,
    'can_pin_messages'=>false,
    'can_promote_members'=>false
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage',[
    'chat_id'=> $chat_id,
    'text'=>"☑ <a href='tg://user?id=$id'>$from_user_first_name</a> siz endi guruh adminstratori <b>emassiz</b>❗️",
    'parse_mode'=>'html'
  ]);
}
}

if($clever_coders_cc=="/panel"){
	$ty = bot('getchatmember',[
	'chat_id'=>$ccgcid,
	'user_id'=>$uid
	]);
$ty = $ty->result->status;
if($ty=="administrator" or $ty=="creator"){
 $ccssl = file_get_contents("data/$ccgcid/ssilka.db");
          $stic = file_get_contents("data/$ccgcid/stic.db");
          $ras = file_get_contents("data/$ccgcid/rasm.db");
        $join = file_get_contents("data/$ccgcid/join.db");
          $gif = file_get_contents("data/$ccgcid/gif.db");
          $ovoz = file_get_contents("data/$ccgcid/ovoz.db");
          $join =  str_replace("on","✅",$join);
          $join = str_replace("off","☑️",$join); 
          $gif =  str_replace("on","✅",$gif);
          $gif = str_replace("off","☑️",$gif);
          $ovoz =  str_replace("on","✅",$ovoz);
          $ovoz = str_replace("off","☑️",$ovoz);
          $ccssl =  str_replace("on","✅",$ccssl);
          $ccssl = str_replace("off","☑️",$ccssl);
          $stic =  str_replace("on","✅",$stic);
          $stic = str_replace("off","☑️",$stic);
          $ras =  str_replace("on","✅",$ras);
          $ras = str_replace("off","☑️",$ras);

	bot('sendmessage',[
		'chat_id'=>$ccgcid,
		'text'=>"👇*Holati*


*✅Yoqilgan*
__________

*☑️O'chirilgan*",
'parse_mode'=>"markdown",
'reply_markup' => json_encode([
                'inline_keyboard'=>[
                   [['text'=>"🖼Rasm holati  $ras",'callback_data'=>'rasm'],['text'=>"🎤Ovoz holati $ovoz",'callback_data'=>'ovoz']],
            [['text'=>"🎁Sticker holati $stic",'callback_data'=>'stic'],['text'=>"🎭Gif holati $gif",'callback_data'=>'gif']],
            [['text'=> "🗝Ssilka holati  $ccssl",'callback_data'=>'ssl'],['text'=>"👑Forward holati $join",'callback_data'=>'join']],
                    ],
])
]);
}
}


if($ty=="supergroup"){
mkdir("data");
mkdir("data/$ccgcid");
if(strpos($gruppa,"$ccgcid") !==false){
}else{
file_put_contents("gruppa.db","$gruppa\n$ccgcid");
}

}

 if(($sticker) and $stic=="on"){
     $cr=bot('getchatmember',[
	'chat_id'=>$ccgcid,
	'user_id'=>$uid
	]);
$cr = $cr->result->status;
if($cr=="member"){
bot('deletemessage',[
'chat_id'=>"$ccgcid","message_id"=>"$mid"]);
}
}
 if(($rasm) and $ras=="on"){
     $cr=bot('getchatmember',[
	'chat_id'=>$ccgcid,
	'user_id'=>$uid
	]);
$cr = $cr->result->status;
if($cr=="member"){
bot('deletemessage',[
'chat_id'=>"$ccgcid","message_id"=>"$mid"]);
}
}

    

if($ty=="private"){
if(strpos($lichka,"$ccgcid") !==false){
}else{
file_put_contents("lichka.db","$lichka\n$ccgcid");
}
} 
$kanal = "@FullUltraHD";
if($ty=="private"){
   


if($clever_coders_cc=="/start"){
bot('sendmessage',[
'chat_id'=>$ccgcid,
'text'=>"*😎 Assalom Alaykum!*
👨‍✈️`@RobenGud_Bot` *ni Guruhingizga Admin qilsangiz:
🛡 Guruhingizni botlardan himoya qiladi.
😷 Reklamalarni Tozalaydi.
⭕️ Kirdi chiqdilarni tozalaydi.
🔞 Video, Sticker, Reklama so'kinish va boshqalarni o'chiradi!
💎 Va yana Koplab vazifalarni bajaradi!*
💥 /panel *buyrug'i orqali botni o'z guruhingizga moslab olishingiz mumkin!*
🤖*Kim guruhizga 80ta odam qo'shsa avtoamtik admin qiladi*
*Shuningdek bot inline rejimda kanal va gruppa haqida ma'lumot ham beradi!
Sinab ko'rish tugmasi orqali tekshirib korishingiz mumkin!*",
'parse_mode'=>"markdown",
'reply_markup' => json_encode([
                'inline_keyboard'=>[
                   [['text'=>'😎Buyruqlarim','callback_data'=>'buyruq'],['text'=>'😎Qo`shimcha buyruqlarim','callback_data'=>'qoshimcha']], 
                   [['text'=>"🆔Sinash",'switch_inline_query'=>"@"],['text'=>"➕ Guruhga qo‘shish 👥",'url'=>'t.me/RobenGud_bot?startgroup=new']],
]
])
]);
}
} 
if(preg_match("/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/", $edit_text)) {  
bot('deletemessage',[
    'chat_id'=>$chat_edit_id,
    'message_id'=>$message_edit_id
    ]);
}

if($mention=="mention"  and $ccssl=="on"){
    $cr=bot('getchatmember',[
	'chat_id'=>$ccgcid,
	'user_id'=>$uid
	]);
$cr = $cr->result->status;
if($cr=="member"){
bot('deletemessage',[
'chat_id'=>"$ccgcid","message_id"=>"$mid"]);
}
}
//
 if(($voice) and $ovoz=="on"){
     $cr=bot('getchatmember',[
	'chat_id'=>$ccgcid,
	'user_id'=>$uid
	]);
$cr = $cr->result->status;
if($cr=="member"){
bot('deletemessage',[
'chat_id'=>"$ccgcid","message_id"=>"$mid"]);
}
}
//alooo
 if(($animation) and $gif=="on"){
     $cr=bot('getchatmember',[
	'chat_id'=>$ccgcid,
	'user_id'=>$uid
	]);
$cr = $cr->result->status;
if($cr=="member"){
bot('deletemessage',[
'chat_id'=>"$ccgcid","message_id"=>"$mid"]);
}
}

if(mb_stripos($clever_coders_cc,"/post") !== false){ 
$ex = explode("-",$clever_coders_cc);
bot('sendMessage',[
'chat_id'=>$ccgcid,
'text'=>"$ex[1]",
'parse_mode'=>markdown,
    'reply_markup'=> json_encode([
    'inline_keyboard'=>[
[['text'=>"$ex[2]", 'url'=>"$ex[3]"]],
]
])
]);
} 
$url = 'www.ozodi.org/';
$rss = simplexml_load_file($url);
foreach ($rss->channel->item as $item) {
    $line = $item->title;
    break;
}  
if($text == '/news'){
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"🆕 $line\n\n⏰Soat : $soat",
]);
    }

if($soat<"77"){
$usa = bot('getChatMembersCount',[
'chat_id'=>$chat_id,
]);
$count = $usa->result;
$kun3 = date('N'); 
$yil =date('Y');
$mast ="💎 HAMKOR: @RobenGud_bot"; 
$kun =date('d-M', strtotime('2 hour')); 
$hafta="1Dushanba1 2Seshanba2 3Chorshanba3 4Payshanba4 5Juma5 6Shanba6 7Yakshanba7"; 
$ex=explode("$kun3",$hafta); 
$hafta1="$ex[1]"; 
$message="👋 Guruhimizga Hush Kelibsiz!
😊 $hafta1 Kuningiz Hayrli O'tsin!
☺️ Eslatib O'tamiz:
🗓 Bugun: $kun $yil-yil
🔵 Hafta kuni: $hafta1
⌚️ Soat: $soat
👥 Guruh Azolari: $count
💎 Bosh Homiy:  @XizmatlarTv"; 
  bot('setChatDescription',[ 
        'chat_id'=>$chat_id, 
        'description'=>"$message", 
        'parse_mode'=>'html', 
    ]); 
}
if(mb_stripos($mtext,"/my") !== false){ 
bot('SendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>'html',
'text'=>"📡<b>Nikingiz:</b>  <a href='tg://user?id=$fadmin'>$first_name</a>
♻<b>ID:</b> $fadmin
🔰<b>Guruh idi:</b> $chat_id
🔗<b>Username:</b> @$username 
👥<b>Guruh a'zolar soni :</b> $count
📤<b>Guruh nomi:</b> $title
👮<b>Bot admini:</b> <a href='tg://user?id=517853436 '>☆Ф҉ у҉ т҉ б҉ о҉ л҉ л҉ е҉ с҉ т҉ ☆</a>", 
      ]);
   }

if(mb_stripos($mtext,"/rasm" or $mtext,"/rasm2@FeruzaBot") !== false){ 
  bot('sendPhoto',[
       'chat_id'=>$chat_id,
        'photo'=>$photo,
        'parse_mode'=>'markdown',
        'caption'=>"by @MittivoyRoBot",
        'reply_to_message_id'=>$update->message->message_id,
    ]);
}

if(mb_stripos($mtext,"/screen") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 'reply_to_message_id'=>$mid,
'photo'=>"https://api.site-shot.com/?url=$ex[1]",
'caption'=>"by @FeruzaBot",
]);
}

$kun1 = date('z ',strtotime('2 hour')); 
$a = 364;
$c2 = $a-$kun1;
$d = date('L ',strtotime('2 hour'));
$b = $c2+$d;
$f = $b+81;
$e = $b+240;
$kun2 = date('H ',strtotime('2 hour')); 
$a2 = 23;
$b2 = $a2-$kun2;
$kun3 = date('i ',strtotime('2 hour')); 
$a3 = 58;
$b3 = $a3-$kun3;
$kun4 = date('s ',strtotime('2 hour')); 
$a4 = 60;
$b4 = $a4-$kun4;

if($data == 'new'){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"🎄⛄Yangi yilga: $b kun, $b2 soat, $b3 minut, $b4 sekund qoldi!",
'show_alert'=>true
]);
    }

    if($data == "vaqt"){
      bot('answerCallbackQuery',[
       'callback_query_id'=>$cqid,
       'text'=> "📆Bugun: $sana-yil
⏰Soat: $soat
💮Oy nomi: $oynomi
🔯Yilning: $sana2-kuni
🔱Vaqt mintaqasi: $gmt
🌠Bu oy $buoy kundan iborat",
       'show_alert'=>true
        ]);
    }
    
if(mb_stripos($text,"/ism") !== false){ 
  $ex=explode(" ",$text);
  $ism = file_get_contents("https://ismlar.com/search/$ex[1]");
  $exp = explode('<p class="text-size-5">',$ism);
  $expl = explode('<div class="col-12 col-md-4 text-md-right">',$exp[1]);
  $im = str_replace($expl[1],' ',$exp[1]);
  $ims = str_replace('</p>',' ',$im);
  $isms = str_replace('</div>',' ',$ims);
  $ismn = str_replace('<div class="col-12 col-md-4 text-md-right">',' ',$isms);
  $ismk = str_replace('&#039;','`',$ismn);
  $ismm = trim("$ismk");
  bot('sendmessage',[
    'chat_id'=>$ccgcid,
    'user_id'=>$uid,
    'reply_to_message_id'=>$mid,
    'text'=>"<b>📚 ISMLAR MA'NOSI 📚

🔍 $ex[1]

📑 Manosi:</b> <i>$ismm</i>!",
    'parse_mode'=>'html',
  ]);
  }
  
if($data=="qoshimcha"){
    bot('sendmessage',[
        'chat_id'=>$ccgcid2,
        'text'=>"*Botning Qo`shimcha Buyruqlari*
        
`/king` - *va so'z - rasmga yozish*

<----------------------------------------------------->
	
`/love` - *va so'z - yurakchali rasmga yozaman*

<----------------------------------------------------->
	
`/screen` - *sayt nomi - saytni rasmga olaman*

<----------------------------------------------------->
	
`/search` - *sizga kerakli narsani izlayman*

<----------------------------------------------------->
	
`/vaqt` - *vaqt haqida ma'lumot beraman*

<----------------------------------------------------->
	
`soat` -*aniq vaqt*

<----------------------------------------------------->
	
`sana` -*aniq Sana*

<----------------------------------------------------->
	
❤️`/EN` va so'z *10 dan 32gacha nick yasayman Masalan: /EN10 Va so'z yoki /EN23 va so'z*

<----------------------------------------------------->
	
`url=` -*so'z share ssilka yasaydi*

<----------------------------------------------------->
	
<--->Pastdagi buyruqlar faqat gruppalarda ishlaydi<--->
	            ↓↓↓↓↓↓↓<==============>↓↓↓↓↓↓↓
`/photo` -*buyrug'idan keyin biror sticker tashlang men sizga rasm qilib jo'nataman*

<----------------------------------------------------->
	
`/me` -*buyrug'i siz haqizda to'liq ma'lumot beraman*

<----------------------------------------------------->
	
`/info` -* buyrug'i siz va guruh haqida to'liq ma'lumot beraman*

<----------------------------------------------------->

`/sticker` -*buyrug'idan keyin biror rasm tashlang men sizga rasmni sticker qilib tashlayman*

<----------------------------------------------------->
	
`/getpic` -*sizning rasmingiz va u xaqida ma'lumot beraman*

<----------------------------------------------------->

☺️*Yangiliklar qo'shilishda davom etadi*",
'parse_mode'=>markdown,
'reply_markup' => json_encode([
                'inline_keyboard'=>[
                   [['text'=>'Orqaga↩️','callback_data'=>'orqa']],
]
])
]);
}

if($data=="buyruq"){
    bot('sendmessage',[
        'chat_id'=>$ccgcid2,
        'text'=>"*Guruh Admini Uchun Buyruqlar*
`/adm` - *admin berish*
`/admn` - *adminga barcha imkoniyatlarni berish*
`/delmn` - *adminlikdan olish*
`/warn` - *reply qilgan odamga ogohlantirish berish*
`/nowarn` - *ogohlantirishlarni olib tashlash*
`/ban` -*guruhdan ban qilish*
`/unban` -*ban qilingan odamni bandan chiqarish*
`/kick` -*guruhdan chiqarib yuborish*
`/mute` - *reply qilgan odamni yozishdan cheklash*
`/unmute` - *reply qilgan odamni yozishiga ruxsat berish*
`/leavechat` - *botni guruhdan haydash*
`/pin` - *reply qilingan textni yuqoriga qistirish*",
'parse_mode'=>'markdown',
'reply_markup' => json_encode([
                'inline_keyboard'=>[
                   [['text'=>'Orqaga↩️','callback_data'=>'orqa']],
]
])
]);
}


if($data=="orqa"){
    bot('sendmessage',[
        'chat_id'=>$ccgcid2,
        'text'=>"*😎 Assalom Alaykum!*
👨‍✈️`@RobenGud_Bot` *ni Guruhingizga Admin qilsangiz:
🛡 Guruhingizni botlardan himoya qiladi.
😷 Reklamalarni Tozalaydi.
⭕️ Kirdi chiqdilarni tozalaydi.
🔞 Video, Sticker, Reklama So'kinish va boshqalarni o'chiradi!
💎 Va yana Koplab vazifalarni bajaradi!*
💥 /panel *buyrug'i orqali botni o'z guruhingizga moslab olishingiz mumkin!*
🤖*Kim guruhizga 80ta odam qo'shsa avtoamtik admin qiladi*
*Shuningdek bot inline rejimda kanal va gruppa haqida ma'lumot ham beradi!
Sinab ko'rish tugmasi orqali tekshirib korishingiz mumkin!*",
'parse_mode'=>"markdown",
'reply_markup' => json_encode([
                'inline_keyboard'=>[
                   [['text'=>'😎Buyruqlarim','callback_data'=>'buyruq'],['text'=>'😎Qo`shimcha buyruqlarim','callback_data'=>'qoshimcha']], 
                   [['text'=>"🆔Sinash",'switch_inline_query'=>"@"],['text'=>"➕ Guruhga qo‘shish 👥",'url'=>'t.me/RobenGud_bot?startgroup=new']],
]
])
]);
}


$photo = $json->result->photos[0][0]->file_id;


//
 if($mention=="url" and $ccssl=="on"){
     $cr=bot('getchatmember',[
	'chat_id'=>$ccgcid,
	'user_id'=>$uid
	]);
$cr = $cr->result->status;
if($cr=="member"){
bot('deletemessage',[
'chat_id'=>"$ccgcid","message_id"=>"$mid"]);
}
}
 if(($for or $forx) and $join=="on"){
      $cr=bot('getchatmember',[
	'chat_id'=>$ccgcid,
	'user_id'=>$uid
	]);
$cr = $cr->result->status;
if($cr=="member"){
bot('deletemessage',[
'chat_id'=>"$ccgcid","message_id"=>"$mid"]);
}
}
if($new){
bot('deletemessage',[
'chat_id'=>"$ccgcid","message_id"=>"$mid"]);
}
if($left){
bot('deletemessage',[
'chat_id'=>"$ccgcid","message_id"=>"$mid"]);
}
if($mention=="text_link" and $ccssl=="on"){
bot('deletemessage',[
'chat_id'=>"$ccgcid","message_id"=>"$mid"]);
}

if($ty=="supergroup"){

if(strpos($clever_coders_cc,"/start") !==false){
 $cr=bot('getchatmember',[
	'chat_id'=>$ccgcid,
	'user_id'=>$uid
	]);
$cr = $cr->result->status;
if($cr=="creator"or$cr=="administrator"){    
$yes = file_get_contents("data/$ccgcid/index.db");
if($yes){
bot('sendmessage',[
'chat_id'=>$ccgcid,
'text'=>"<b>Men $title gruppasida qayta ishga tushirildim🤖</b>",
'parse_mode'=>"html"
]);

}else{

bot('sendmessage',[
'chat_id'=>$ccgcid,
'text'=>"<b>Men $title gruppasida ishga tushirildim😎</b>",
'parse_mode'=>"html"
]);
file_put_contents("data/$ccgcid/index.db","ok");
}
}
}
}
$reply = $message->reply_to_message->text;
$rpl = json_encode([
           'resize_keyboard'=>false,
            'force_reply' => true,
            'selective' => true
        ]);
if($clever_coders_cc=="/send" and $ccgcid==$admin){
    bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"*📨 Yuboriladigan xabar matnini kiriting. Xabar turi markdown*",'parse_mode'=>"markdown",'reply_markup'=>$rpl
]);
}
    if($reply=="📨 Yuboriladigan xabar matnini kiriting. Xabar turi markdown"){
        $lich = file_get_contents("lichka.db");
        $lichka = explode("\n",$lich);
foreach($lichka as $id){
    bot("sendmessage",[
        'chat_id'=>$id,
        'text'=>"$clever_coders_cc"]);
}
}
//sendgroup

     if($clever_coders_cc == "/sendgr" and $ccgcid == $admin){
    bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"*📨 Yuboriladigan xabar matnini kiriting. Xabar turi markdown*",'parse_mode'=>"markdown",'reply_markup'=>$rpl
]);
}
    if($reply=="📨 Yuboriladigan xabar matnini kiriting. Xabar turi markdown"){
        $gr = file_get_contents("gruppa.db");
        $gruppa= explode("\n",$gr);
foreach($gruppa as $ccgcid){
    bot("sendmessage",[
        'chat_id'=>$ccgcid,
      'text'=>$clever_coders_cc,
      'parse_mode'=>'markdown',
      'disable_web_page_preview' => true,
      ]);
      }
         if($gr){
          bot('sendmessage',[
          'chat_id'=>$admin,
          'text'=>"*Umumiy hammaga yuborildi!*",
          'parse_mode'=>'markdown',
          ]);      
        }
      }



//
if(mb_stripos($clever_coders_cc,"/screen") !== false){ 
$ex = explode(" ",$clever_coders_cc);
bot('SendPhoto',[
'chat_id'=>$ccgcid, 'reply_to_message_id'=>$mid,
'photo'=>"https://api.site-shot.com/?url=$ex[1]",
'caption'=>"By @xizmatlarTv",
]);
}

if((mb_stripos($clever_coders_cc,"@XizmatlarTv") !== false) or (mb_stripos($clever_coders_cc,"Ilyos")!==false) or (stripos($clever_coders_cc,"TexnoTG")!==false) or (mb_stripos($clever_coders_cc,"admin")!==false) or (mb_stripos($clever_coders_cc,"Ahzee")!==false)){ 
bot('SendMessage',[
'chat_id'=>$admin,
'parse_mode'=>'html',
'text'=>"✉<b>$title(</b>  $chat_id  <b>) guruhida sizni eslashdi:</b>\n<code>$clever_coders_cc</code>\n  <b>Xabarchi  haqida  ma'lumotlar: </b>
👤<b>Ismi:</b>  <a href='tg://user?id=$uid'>$ismcha</a>
🆔<b>ID</b>si: $uid
🔅<b>Usernamesi:</b> @$login ", null, false
      ]);
   }
   
   
    if((stripos($clever_coders_cc,"/sms") !== false) and $ccgcid == $admin){
    $ex = explode("-",$clever_coders_cc);
    bot('sendMessage',[
    'chat_id'=>$ex[1], 
    'text'=>"$ex[2]",
    'reply_markup'=>$key
    ]);
    }
    
    if(mb_stripos($clever_coders_cc,"/search") !== false){ 
	$ex = explode(" ",$clever_coders_cc);
bot('sendMessage',[
'chat_id'=>$ccgcid,
'text'=>"🔍 Qidiruv \n☑️ Matn kiriting!\n",
'parse_mode'=>"Markdown",
    'reply_markup'=> json_encode([
    'inline_keyboard'=>[
    [
['text'=>"App store 🌐", 'url'=>"https://www.apple.com/us/search?q=$ex[1]"],
],
[
['text'=>"Google 📈", 'url'=>"https://www.google.com.iq/search?q=$ex[1]"],
],
[
['text'=>"Youtube 🎥", 'url'=>"https://m.youtube.com/results?q=$ex[1]&sm=3"],
],
[
['text'=>"instagram 📯", 'url'=>"https://www.instagram.com/$ex[1]"],
],

[
['text'=>"Telegram 📪", 'url'=>"https://www.telegram.me/$ex[1]"],
],
[
['text'=>"Github 🐱", 'url'=>"https://github.com/search?utf8=✓&q=$ex[1]"],
],
    ]
    ])
    ]);

    }
///
$id = $update->message->from->id;
$get = file_get_contents("https://api.telegram.org/bot1026681784:AAGimR4OEWhq5a51mjgvKZGWAwJ-S0RFQ1w/getUserProfilePhotos?user_id=$id&limit=1");
$json = json_decode($get);
$photo = $json->result->photos[0][0]->file_id;

if(mb_stripos($mtext,"url=") !== false){ 
bot('SendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>"markdown",
'text'=>"♻*Tayyor*

`http://telegram.me/share/url?$mtext`",
   ]);
 }
 


if(mb_stripos($clever_coders_cc,"/love") !== false){ 
$ex = explode(" ",$clever_coders_cc);
bot('SendPhoto',[
'chat_id'=>$ccgcid, 'reply_to_message_id'=>$mid,
'photo'=>"http://www.iloveheartstudio.com/-/p.php?t=%EE%BB%AE$ex[1]%EE%BB%AE$ex[2]%20$ex[3]%0A$ex[4]%0D%0A%20%20%EE%BB%AELOVE%EE%BB%AE&bc=000000&tc=ffffff&hc=FF0000&f=n&uc=true&ts=true&ff=PNG&w=500&ps=sq",
'caption'=>"By @RobenGud_bot",
]);
}


///
if($clever_coders_cc=="/leavechat" &&$uid==$admin) {
  bot('sendmessage', [
      'chat_id' => $ccgcid,
      'text' => "<b>Gruppenga qo'tog'im kettim man🖕🖕🏻🖕🖕🏻🖕🖕🏻🖕!</b>.",
      'parse_mode' => 'html'
  ]);
  bot('leaveChat',[
    'chat_id'=>$ccgcid
  ]);
}

//stat

if($clever_coders_cc=="/stat" and  $ccgcid==$admin){
$lich = substr_count($lichka,"\n");
$gr = substr_count($gruppa,"\n");
$jami = $lich + $gr;
 $soat = date('H:i:s', strtotime('2 hour'));
$bugun = date('d-M Y',strtotime('2 hour'));
bot('sendmessage',[
'chat_id'=>$ccgcid,
    'text'=> "🔷<b> Bot statistikasi:</b>\n\n👤 A'zolar: <b>$lich</b>\n👥 Guruhlar: <b>$gr</b>\n📣 Umumiy: <b>$jami</b>\n\n$bugun $soat",
'parse_mode' => 'html',
]);
}
///

		if(stripos($clever_coders_cc,"soat") !== false){
		$soat = date('H:i:s', strtotime('2 hour'));
  $text = "⏰ Hozir soat: *$soat*";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$ccgcid,
   'text'=>$text,
   'parse_mode' => 'markdown'
  ]));
}

		if(stripos($clever_coders_cc,"sana") !== false){
        $bugun = date('d-M Y',strtotime('2 hour'));
  $text = "📆 Bugungi sana: *$bugun*";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$ccgcid,
   'text'=>$text,
   'parse_mode'=> 'markdown'
  ]));
}

if(stripos($clever_coders_cc,"/id") !== false){
  $text = "Sizning🆔Kodingiz*`$uid`";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$ccgcid,
   'text'=>$text,
   'parse_mode'=> 'markdown'
  ]));
}

if(stripos($clever_coders_cc,"/gid") !== false){
  $text = "*Guruhning🆔Kodi:* $ccgcid";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$ccgcid,
   'text'=>$text,
   'parse_mode'=> 'markdown'
  ]));
}

if($clever_coders_cc == "/vaqt"){
bot('sendMessage',[
'chat_id'=>$ccgcid,
'text'=>"*📆Bugun: $sana1-yil
⌚Soat: $soat1
📅Oy nomi: $oynomi
📅Yilning: $sana2-kuni
⏳Vaqt mintaqasi: $gmt
📅Bu oy $buoy kundan iborat*",
'parse_mode'=>"markdown",
]);
}

//warn
$soni = file_get_contents("data/$ccgcid/$uid.db");
	if(stripos($clever_coders_cc,"/warn") !==false){
$cr=bot('getchatmember',[
	'chat_id'=>$ccgcid,
	'user_id'=>$uid
	]);
$cr = $cr->result->status;
if($cr=="creator" or $cr=="administrator"){
$azo = bot('getchatmember',[
	'chat_id'=>$ccgcid,
	'user_id'=>$repid
	]);
$yoz = $azo->result->status;

if($yoz=="member"){


   if($soni>=3){
   $kickm = bot('kickChatMember', [
        'chat_id' => $ccgcid,
        'user_id' => $repid,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
   if($kickm->ok){
        bot('sendMessage', [
        'chat_id' =>$ccgcid, 
        'text' => "<b></b><a href='tg://user?id=$repid'>$rname</a><b></b> <b>Siz guruhdan chiqarildingiz, chunki shuncha ogohlantirishlarga parvo qilmadingiz!</b>",
        'parse_mode' => 'html'
    ]);
    unlink("data/$ccgcid/$uid.db");
    }
    
}else{
    $hisob = $soni + 1;
$ok = file_put_contents("data/$ccgcid/$uid.db","$hisob");
$soni = file_get_contents("data/$ccgcid/$uid.db");
bot('sendmessage',[
	'chat_id'=>$ccgcid,
	'text'=>"<b></b><a href='tg://user?id=$repid'>$rname</a><b></b>  <b>Sizga admin tomonidan 1ogohlantirish berildi
Ogohlantirishlar soni:</b> <code>$soni/4</code>",'parse_mode'=>"html"
	]);
	
}

}
}
}


//nowarn
$soni = file_get_contents("data/$ccgcid/$uid.db");
	if(stripos($clever_coders_cc,"/nowarn") !==false){
$cr=bot('getchatmember',[
	'chat_id'=>$ccgcid,
	'user_id'=>$uid
	]);
$cr = $cr->result->status;
if($cr=="creator" or $cr=="administrator"){
$azo = bot('getchatmember',[
	'chat_id'=>$ccgcid,
	'user_id'=>$repid
	]);
$yoz = $azo->result->status;

if($yoz=="member"){    
if($soni){
  bot('sendmessage',[
	'chat_id'=>$ccgcid,
	'text'=>"<b></b><a href='tg://user?id=$repid'>$rname</a><b></b>    

<b>sizdagi ogohlantirishlar:</b><code>0/4</code>",'parse_mode'=>"html"
]);
unlink("data/$ccgcid/$uid.db");
}else{
 bot('sendmessage',[
	'chat_id'=>$ccgcid,
	'text'=>"<b></b><a href='tg://user?id=$repid'>$rname</a><b></b>    

<b>Sizda haech qanday ogohlantirish yo'q😎</b> ",'parse_mode'=>"html"
]);
}
}
}
}
//mute
if ($clever_coders_cc=="/unmute" or $clever_coders_cc=="/Unmute"){
	$cr=bot('getchatmember',[
	'chat_id'=>$ccgcid,
	'user_id'=>$uid
	]);
$cr = $cr->result->status;
if($cr=="creator" or $cr=="administrator"){
 $ok= bot('restrictChatMember',[
    'chat_id'=>$ccgcid,
    'user_id'=>$repid,
    'can_send_messages'=>true,
    'can_send_media_messages'=>true,
    'can_send_other_messages'=>true,
    'can_add_web_page_previews'=>true
  ]);
 if($ok->ok){
  bot('sendmessage',[
    'chat_id'=>$ccgcid,
    'text'=>"<a href='tg://user?id=$repid'>$rname</a><b>siz gruppada yozishingiz mumkin</b>",
    'parse_mode'=>"html"
    ]);
}
}
}



if ($clever_coders_cc=="/mute" or $clever_coders_cc=="/Mute") {
	$cr=bot('getchatmember',[
	'chat_id'=>$ccgcid,
	'user_id'=>$uid
	]);
$cr = $cr->result->status;
if($cr=="creator" or $cr=="administrator"){
$minut = strtotime("+30 minutes");
   $ok = bot('restrictChatMember', [
        'chat_id' => $ccgcid,
        'user_id' => $repid,
        'until_date' => $minut,
        'can_send_messages' =>false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
   if($ok->ok){
    bot('sendmessage', [
        'chat_id' =>$ccgcid,
        'text' => "<a href='tg://user?id=$repid'>$rname</a><b>siz gruppada 30 minutga yozishdan mahrum etildingiz</b>",
        'parse_mode' => 'html'
    ]);
}
 }    
}
//
if($clever_coders_cc=="/pin" or $clever_coders_cc=="/Pin"){
    $cr=bot('getchatmember',[
	'chat_id'=>$ccgcid,
	'user_id'=>$uid
	]);
$cr = $cr->result->status;
if($cr=="creator" or $cr=="administrator"){
    bot('pinchatmessage',[
    'chat_id'=>$ccgcid,
    'message_id'=>$rmid,
    ]);
}
}

    if($clever_coders_cc == "/Kick"  or  $clever_coders_cc == "/kick"){
$gett = bot('getChatMember', [
'chat_id' => $ccgcid,
'user_id' => $uid,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
  $vaqti = strtotime("+720 minutes");
  bot('kickChatMember', [
      'chat_id' => $ccgcid,
      'user_id' => $repid,
      'until_date'=> $vaqti,
  ]);
  bot('unbanChatMember', [
        'chat_id' => $ccgcid,
        'user_id' => $repid,
    ]);
  bot('sendChatAction',['chat_id'=>$ccgcid,'action'=>"typing"]);
  bot('sendmessage', [
      'chat_id' => $ccgcid,
      'text' => "🔹 <a href='tg://user?id=$repid'>$rname</a> guruhdan 6 Soatga <b>Kick</b> bo‘ldi! 6 Soatdan keyin guruhga yana kirishi mumkun",
      'parse_mode' => 'html'
  ]);
}
}

if($clever_coders_cc =="/ban" or $clever_coders_cc == "/Ban"&&$uid==$admin){
       $vaqti = strtotime("+43200 minutes");
      bot('kickChatMember', [
        'chat_id' => $ccgcid,
        'user_id' => $repid,
        'until_date' => $vaqti,
      ]);
    bot('sendChatAction',['chat_id'=>$ccgcid,'action'=>"typing"]);
    bot('sendMessage', [
        'chat_id'=>$ccgcid,
        'text' => "🔹 <a href='tg://user?id=$repid'>$rname</a> guruhdan 30 Kunga <b>ban</b> bo‘ldi! 30 Kundan keyin guruhga yana kirishi mumkun",
        'parse_mode'=>'html'
    ]);
  }


if($clever_coders_cc =="/unban" or $clever_coders_cc == "/Unban"&&$uid==$admin){
      bot('unbanChatMember', [
        'chat_id' => $ccgcid,
        'user_id' => $repid,
        'until_date' => $vaqti,
      ]);
    bot('sendChatAction',['chat_id'=>$ccgcid,'action'=>"typing"]);
    bot('sendMessage', [
        'chat_id'=>$ccgcid,
        'text' => "🔹 <a href='tg://user?id=$repid'>$rname</a> bandan olindi",
        'parse_mode'=>'html'
    ]);
  }



//inline
$userID = $update->inline_query->from->id;
$theQuery = $update->inline_query->query;
$ccgcid = $update->inline_query->query;
if(mb_stripos($ccgcid,"@")!==false){
$user = bot("getchat",[
	'chat_id'=>$ccgcid,
	]);
$type = $user->result->type;
$id = $user->result->id;
$us = bot('getChatMembersCount',[
	'chat_id'=>$ccgcid
	]);
	$count = $us->result;
if($type=="channel"){
bot('answerInlineQuery', [
'inline_query_id'=>$update->inline_query->id,
'cache_time'=>1,
'results'=>json_encode([[
'type'=>'article',
'id'=>base64_encode(1),
'title'=>"$ccgcid\nhaqida ma'lumot",
'input_message_content'=>[
'disable_web_page_preview'=>true,
'parse_mode' => 'markdown',
'message_text'=>"*📡Kanal useri:*  [$ccgcid]\n*👥A'zolari*: `$count`\n*🆔Kanal id:* `$id`",
],
'caption'=>"By @GRMafiaBot",
'reply_markup' =>
[ 'inline_keyboard'=>[
                   [["switch_inline_query"=>"@", 'text' => "🆔Aniqlash"],],
               ] ],

]
])
]);
}
//end
if($type=="supergroup"){
bot('answerInlineQuery', [
'inline_query_id'=>$update->inline_query->id,
'cache_time'=>1,
'results'=>json_encode([[
'type'=>'article',
'id'=>base64_encode(1),
'title'=>"$ccgcid\ngruppasi haqida ma'lumot",
'input_message_content'=>[
'disable_web_page_preview'=>true,
'parse_mode' => 'markdown',
'message_text'=>"*📡Gruppa useri:*  [$ccgcid]\n*👥 Gruppa a'zolari*: `$count`\n*🆔Gruppa id:* `$id`",
],
'caption'=>"By @GRMafiaBot",
'reply_markup' =>
[ 'inline_keyboard'=>[
                   [["switch_inline_query"=>"@", 'text' => "🆔Aniqlash"],],
               ] ],

]
])
]);
}
}
       $EN = explode("EN10", $text);
   if($EN[1]){
   $EN = str_replace('q', '•🇶', $EN);
   $EN = str_replace('w', '•🇼', $EN);
   $EN = str_replace('e', '•🇪', $EN);
   $EN = str_replace('r', '•🇷', $EN);
   $EN = str_replace('t', '•🇹', $EN);
   $EN = str_replace('y', '•🇾', $EN);
   $EN = str_replace('u', '•🇻', $EN);
   $EN = str_replace('i', '•🇮', $EN);
   $EN = str_replace('o', '•🇴', $EN);
   $EN = str_replace('p', '•🇵', $EN);
   $EN = str_replace('a', '•🇦', $EN);
   $EN = str_replace('s', '•🇸', $EN);
   $EN = str_replace('d', '•🇩', $EN);
   $EN = str_replace('f', '•🇫', $EN);
   $EN = str_replace('g', '•🇬', $EN);
   $EN = str_replace('h', '•🇭', $EN);
   $EN = str_replace('j', '•🇯', $EN);
   $EN = str_replace('k', '•🇰', $EN);
   $EN = str_replace('l', '•🇱', $EN);
   $EN = str_replace('z', '•🇿', $EN);
   $EN = str_replace('x', '•🇽', $EN);
   $EN = str_replace('c', '•🇨', $EN);
   $EN = str_replace('v', '•🇺', $EN);
   $EN = str_replace('b', '•🇧', $EN);
   $EN = str_replace('n', '•🇳', $EN);
   $EN = str_replace('m', '•🇲', $EN);
   bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$EN[1],
 
    ]);
    }
    $EN0 = explode("EN11", $text);
    if($EN0[1]){
	 $EN0 = str_replace('q', 'Ⴓ' , $EN0);
  	 $EN0 = str_replace('w', 'ᗯ' , $EN0);
	 $EN0 = str_replace('e', 'ᕮ' , $EN0);
  	 $EN0 = str_replace('r', 'ᖇ' , $EN0);
	 $EN0 = str_replace('t', 'ͳ' , $EN0);
  	 $EN0 = str_replace('y', 'ϒ' , $EN0);
	 $EN0 = str_replace('u', 'ᘮ' , $EN0);
  	 $EN0 = str_replace('i', 'ᓰ' , $EN0);
	 $EN0 = str_replace('o', '〇' , $EN0);
  	 $EN0 = str_replace('p', 'ᖘ' , $EN0);
	 $EN0 = str_replace('a', 'ᗩ' , $EN0);
  	 $EN0 = str_replace('s', 'ᔕ' , $EN0);
	 $EN0 = str_replace('d', 'ᗪ' , $EN0);
  	 $EN0 = str_replace('f', 'Բ' , $EN0);
	 $EN0 = str_replace('g', 'ᘐ' , $EN0);
  	 $EN0 = str_replace('h', 'ᕼ' , $EN0);
	 $EN0 = str_replace('j', 'ᒎ' , $EN0);
  	 $EN0 = str_replace('k', 'Ḱ' , $EN0);
	 $EN0 = str_replace('l', 'ᒪ' , $EN0);
  	 $EN0 = str_replace('z', 'Ꙁ' , $EN0);
	 $EN0 = str_replace('x', 'Ꮖ' , $EN0);
  	 $EN0 = str_replace('c', 'ᑕ' , $EN0);
	 $EN0 = str_replace('v', 'ᐯ' , $EN0);
  	 $EN0 = str_replace('b', 'ᙖ' , $EN0);
  	 $EN0 = str_replace('n', 'ᘉ' , $EN0);
	 $EN0 = str_replace('m', 'ᙢ' , $EN0);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$y[1],
 
    ]);
    }
    $EN1 = explode("EN12", $text);
    if($EN1[1]){
	 $EN1 = str_replace('q', 'q' , $EN1);
  	 $EN1 = str_replace('w', 'ω' , $EN1);
	 $EN1 = str_replace('e', 'ε' , $EN1);
  	 $EN1 = str_replace('r', 'я' , $EN1);
	 $EN1 = str_replace('t', 'т' , $EN1);
  	 $EN1 = str_replace('y', 'ү' , $EN1);
	 $EN1 = str_replace('u', 'υ' , $EN1);
  	 $EN1 = str_replace('i', 'ι' , $EN1);
	 $EN1 = str_replace('o', 'σ' , $EN1);
  	 $EN1 = str_replace('p', 'ρ' , $EN1);
	 $EN1 = str_replace('a', 'α' , $EN1);
  	 $EN1 = str_replace('s', 's' , $EN1);
	 $EN1 = str_replace('d', '∂' , $EN1);
  	 $EN1 = str_replace('f', 'ғ' , $EN1);
	 $EN1 = str_replace('g', 'g' , $EN1);
  	 $EN1 = str_replace('h', 'н' , $EN1);
	 $EN1 = str_replace('j', 'נ' , $EN1);
  	 $EN1 = str_replace('k', 'к' , $EN1);
	 $EN1 = str_replace('l', 'ℓ' , $EN1);
  	 $EN1 = str_replace('z', 'z' , $EN1);
	 $EN1 = str_replace('x', 'x' , $EN1);
  	 $EN1 = str_replace('c', 'c' , $EN1);
	 $EN1 = str_replace('v', 'v' , $EN1);
  	 $EN1 = str_replace('b', 'в' , $EN1);
  	 $EN1 = str_replace('n', 'η' , $EN1);
	 $EN1 = str_replace('m', 'м' , $EN1);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN1[1],
 
    ]);
    }
    $EN2 = explode("EN13", $text);
    if($EN2[1]){
	 $EN2 = str_replace('q', 'ᵠ' , $EN2);
  	 $EN2 = str_replace('w', 'ʷ' , $EN2);
	 $EN2 = str_replace('e', 'ᵉ' , $EN2);
  	 $EN2 = str_replace('r', 'ʳ' , $EN2);
	 $EN2 = str_replace('t', 'ᵗ' , $EN2);
  	 $EN2 = str_replace('y', 'ʸ' , $EN2);
	 $EN2 = str_replace('u', 'ᵘ' , $EN2);
  	 $EN2 = str_replace('i', 'ᶤ' , $EN2);
	 $EN2 = str_replace('o', 'ᵒ' , $EN2);
  	 $EN2 = str_replace('p', 'ᵖ' , $EN2);
	 $EN2 = str_replace('a', 'ᵃ' , $EN2);
  	 $EN2 = str_replace('s', 'ˢ' , $EN2);
	 $EN2 = str_replace('d', 'ᵈ' , $EN2);
  	 $EN2 = str_replace('f', 'ᶠ' , $EN2);
	 $EN2 = str_replace('g', 'ᵍ' , $EN2);
  	 $EN2 = str_replace('h', 'ʰ' , $EN2);
	 $EN2 = str_replace('j', 'ʲ' , $EN2);
  	 $EN2 = str_replace('k', 'ᵏ' , $EN2);
	 $EN2 = str_replace('l', 'ˡ' , $EN2);
  	 $EN2 = str_replace('z', 'ᶻ' , $EN2);
	 $EN2 = str_replace('x', 'ˣ' , $EN2);
  	 $EN2 = str_replace('c', 'ᶜ' , $EN2);
	 $EN2 = str_replace('v', 'ᵛ' , $EN2);
  	 $EN2 = str_replace('b', 'ᵇ' , $EN2);
  	 $EN2 = str_replace('n', 'ᶰ' , $EN2);
	 $EN2 = str_replace('m', 'ᵐ' , $EN2);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN2[1],
  
    ]);
    }
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//

$EN3 = explode("EN13", $text);
    if($EN3[1]){
	 $EN3 = str_replace('q', 'Θ' , $EN3);
  	 $EN3 = str_replace('w', 'ẁ' , $EN3);
	 $EN3 = str_replace('e', 'ë' , $EN3);
  	 $EN3 = str_replace('r', 'я' , $EN3);
	 $EN3 = str_replace('t', 'ť' , $EN3);
  	 $EN3 = str_replace('y', 'y' , $EN3);
	 $EN3 = str_replace('u', 'ע' , $EN3);
  	 $EN3 = str_replace('i', 'į' , $EN3);
	 $EN3 = str_replace('o', 'ð' , $EN3);
  	 $EN3 = str_replace('p', 'ρ' , $EN3);
	 $EN3 = str_replace('a', 'à' , $EN3);
  	 $EN3 = str_replace('s', 'ś' , $EN3);
	 $EN3 = str_replace('d', 'ď' , $EN3);
  	 $EN3 = str_replace('f', '∫' , $EN3);
	 $EN3 = str_replace('g', 'ĝ' , $EN3);
  	 $EN3 = str_replace('h', 'ŋ' , $EN3);
	 $EN3 = str_replace('j', 'Ј' , $EN3);
  	 $EN3 = str_replace('k', 'қ' , $EN3);
	 $EN3 = str_replace('l', 'Ŀ' , $EN3);
  	 $EN3 = str_replace('z', 'ź' , $EN3);
	 $EN3 = str_replace('x', 'א' , $EN3);
  	 $EN3 = str_replace('c', 'ć' , $EN3);
	 $EN3 = str_replace('v', 'V' , $EN3);
  	 $EN3 = str_replace('b', 'Ђ' , $EN3);
  	 $EN3 = str_replace('n', 'ŋ' , $EN3);
	 $EN3 = str_replace('m', 'm' , $EN3);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN3[1],
  
    ]);
    }
$EN3 = explode("EN14", $text);
    if($EN3[1]){
	 $EN3 = str_replace('q', 'Ҩ' , $EN3);
  	 $EN3 = str_replace('w', 'Щ' , $EN3);
	 $EN3 = str_replace('e', 'Є' , $EN3);
  	 $EN3 = str_replace('r', 'R' , $EN3);
	 $EN3 = str_replace('t', 'ƚ' , $EN3);
  	 $EN3 = str_replace('y', '￥' , $EN3);
	 $EN3 = str_replace('u', 'Ц' , $EN3);
  	 $EN3 = str_replace('i', 'Ī' , $EN3);
	 $EN3 = str_replace('o', 'Ø' , $EN3);
  	 $EN3 = str_replace('p', 'P' , $EN3);
	 $EN3 = str_replace('a', 'Â' , $EN3);
  	 $EN3 = str_replace('s', '$' , $EN3);
	 $EN3 = str_replace('d', 'Ð' , $EN3);
  	 $EN3 = str_replace('f', 'Ŧ' , $EN3);
	 $EN3 = str_replace('g', 'Ǥ' , $EN3);
  	 $EN3 = str_replace('h', 'Ħ' , $EN3);
	 $EN3 = str_replace('j', 'ʖ' , $EN3);
  	 $EN3 = str_replace('k', 'Қ' , $EN3);
	 $EN3 = str_replace('l', 'Ŀ' , $EN3);
  	 $EN3 = str_replace('z', 'Ẕ' , $EN3);
	 $EN3 = str_replace('x', 'X' , $EN3);
  	 $EN3 = str_replace('c', 'Ĉ' , $EN3);
	 $EN3 = str_replace('v', 'V' , $EN3);
  	 $EN3 = str_replace('b', 'ß' , $EN3);
  	 $EN3 = str_replace('n', 'И' , $EN3);
	 $EN3 = str_replace('m', 'ⴅ' , $EN3);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN3[1],
 
    ]);
    }
 $EN5 = explode("EN15", $text);
    if($EN5[1]){
	 $EN5 = str_replace('q', 'Ҩ' , $EN5);
  	 $EN5 = str_replace('w', 'Ɯ' , $EN5);
	 $EN5 = str_replace('e', 'Ɛ' , $EN5);
  	 $EN5 = str_replace('r', '尺' , $EN5);
	 $EN5 = str_replace('t', 'Ť' , $EN5);
  	 $EN5 = str_replace('y', 'Ϥ' , $EN5);
	 $EN5 = str_replace('u', 'Ц' , $EN5);
  	 $EN5 = str_replace('i', 'ɪ' , $EN5);
	 $EN5 = str_replace('o', 'Ø' , $EN5);
  	 $EN5 = str_replace('p', 'þ' , $EN5);
	 $EN5 = str_replace('a', 'Λ' , $EN5);
  	 $EN5 = str_replace('s', 'ら' , $EN5);
	 $EN5 = str_replace('d', 'Ð' , $EN5);
  	 $EN5 = str_replace('f', 'F' , $EN5);
	 $EN5 = str_replace('g', 'Ɠ' , $EN5);
  	 $EN5 = str_replace('h', 'н' , $EN5);
	 $EN5 = str_replace('j', 'ﾌ' , $EN5);
  	 $EN5 = str_replace('k', 'Қ' , $EN5);
	 $EN5 = str_replace('l', 'Ł' , $EN5);
  	 $EN5 = str_replace('z', 'Ẕ' , $EN5);
	 $EN5 = str_replace('x', 'χ' , $EN5);
  	 $EN5 = str_replace('c', 'ㄈ' , $EN5);
	 $EN5 = str_replace('v', 'Ɣ' , $EN5);
  	 $EN5 = str_replace('b', 'Ϧ' , $EN5);
  	 $EN5 = str_replace('n', 'Л' , $EN5);
	 $EN5 = str_replace('m', '௱' , $EN5);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN5[1],
 
    ]);
    }
   $EN6 = explode("EN16", $text);
    if($EN6[1]){
	 $EN6 = str_replace('q', 'Ⴓ' , $EN6);
  	 $EN6 = str_replace('w', 'Ш' , $EN6);
	 $EN6 = str_replace('e', 'Σ' , $EN6);
  	 $EN6 = str_replace('r', 'Γ' , $EN6);
	 $EN6 = str_replace('t', 'Ƭ' , $EN6);
  	 $EN6 = str_replace('y', 'Ψ' , $EN6);
	 $EN6 = str_replace('u', 'Ʊ' , $EN6);
  	 $EN6 = str_replace('i', 'I' , $EN6);
	 $EN6 = str_replace('o', 'Θ' , $EN6);
  	 $EN6 = str_replace('p', 'Ƥ' , $EN6);
	 $EN6 = str_replace('a', 'Δ' , $EN6);
  	 $EN6 = str_replace('s', 'Ѕ' , $EN6);
	 $EN6 = str_replace('d', 'D' , $EN6);
  	 $EN6 = str_replace('f', 'F' , $EN6);
	 $EN6 = str_replace('g', 'G' , $EN6);
  	 $EN6 = str_replace('h', 'H' , $EN6);
	 $EN6 = str_replace('j', 'J' , $EN6);
  	 $EN6 = str_replace('k', 'Ƙ' , $EN6);
	 $EN6 = str_replace('l', 'L' , $EN6);
  	 $EN6 = str_replace('z', 'Z' , $EN6);
	 $EN6 = str_replace('x', 'Ж' , $EN6);
  	 $EN6 = str_replace('c', 'C' , $EN6);
	 $EN6 = str_replace('v', 'Ʋ' , $EN6);
  	 $EN6 = str_replace('b', 'Ɓ' , $EN6);
  	 $EN6 = str_replace('n', '∏' , $EN6);
	 $EN6 = str_replace('m', 'Μ' , $EN6);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN6[1],
   
    ]);
    }
//-_-_-_-_-_-_-_-_-_-_@MwMcoders_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@MwMcoders_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@MwMcoders_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@MwMcoders_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@MwMcoders_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@MwMcoders_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@MwMcoders_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@MwMcoders_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@MwMcoders_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@MwMcoders_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@MwMcoders_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@MwMcoders_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@MwMcoders_-_-_-_-_-_-_-_-_-_//
$EN7 = explode("EN17", $text);
    if($EN7[1]){
	 $EN7 = str_replace('q', 'Q' , $EN7);
  	 $EN7 = str_replace('w', 'Щ' , $EN7);
	 $EN7 = str_replace('e', '乇' , $EN7);
  	 $EN7 = str_replace('r', '尺' , $EN7);
	 $EN7 = str_replace('t', 'ｲ' , $EN7);
  	 $EN7 = str_replace('y', 'ﾘ' , $EN7);
	 $EN7 = str_replace('u', 'Ц' , $EN7);
  	 $EN7 = str_replace('i', 'ﾉ' , $EN7);
	 $EN7 = str_replace('o', 'Ծ' , $EN7);
  	 $EN7 = str_replace('p', 'ｱ' , $EN7);
	 $EN7 = str_replace('a', 'ﾑ' , $EN7);
  	 $EN7 = str_replace('s', '丂' , $EN7);
	 $EN7 = str_replace('d', 'Ð' , $EN7);
  	 $EN7 = str_replace('f', 'ｷ' , $EN7);
	 $EN7 = str_replace('g', 'Ǥ' , $EN7);
  	 $EN7 = str_replace('h', 'ん' , $EN7);
	 $EN7 = str_replace('j', 'ﾌ' , $EN7);
  	 $EN7 = str_replace('k', 'ズ' , $EN7);
	 $EN7 = str_replace('l', 'ﾚ' , $EN7);
  	 $EN7 = str_replace('z', '乙' , $EN7);
	 $EN7 = str_replace('x', 'ﾒ' , $EN7);
  	 $EN7 = str_replace('c', 'ζ' , $EN7);
	 $EN7 = str_replace('v', 'Џ' , $EN7);
  	 $EN7 = str_replace('b', '乃' , $EN7);
  	 $EN7 = str_replace('n', '刀' , $EN7);
	 $EN7 = str_replace('m', 'ᄊ' , $EN7);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN7[1],
  
    ]);
    }
    $EN8 = explode("EN18", $text);
    if($EN8[1]){
	 $EN8 = str_replace('q', 'ợ' , $EN8);
  	 $EN8 = str_replace('w', 'ฬ' , $EN8);
	 $EN8 = str_replace('e', 'є' , $EN8);
  	 $EN8 = str_replace('r', 'г' , $EN8);
	 $EN8 = str_replace('t', 't' , $EN8);
  	 $EN8 = str_replace('y', 'ץ' , $EN8);
	 $EN8 = str_replace('u', 'ย' , $EN8);
  	 $EN8 = str_replace('i', 'เ' , $EN8);
	 $EN8 = str_replace('o', '๏' , $EN8);
  	 $EN8 = str_replace('p', 'թ' , $EN8);
	 $EN8 = str_replace('a', 'ค' , $EN8);
  	 $EN8 = str_replace('s', 'ร' , $EN8);
	 $EN8 = str_replace('d', '๔' , $EN8);
  	 $EN8 = str_replace('f', 'Ŧ' , $EN8);
	 $EN8 = str_replace('g', 'ɠ' , $EN8);
  	 $EN8 = str_replace('h', 'ђ' , $EN8);
	 $EN8 = str_replace('j', 'ן' , $EN8);
  	 $EN8 = str_replace('k', 'к' , $EN8);
	 $EN8 = str_replace('l', 'l' , $EN8);
  	 $EN8 = str_replace('z', 'z' , $EN8);
	 $EN8 = str_replace('x', 'א' , $EN8);
  	 $EN8 = str_replace('c', 'ς' , $EN8);
	 $EN8 = str_replace('v', 'ⱴ' , $EN8);
  	 $EN8 = str_replace('b', '๒' , $EN8);
  	 $EN8 = str_replace('n', 'ภ' , $EN8);
	 $EN8 = str_replace('m', '๓' , $EN8);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN8[1],
    ]);
    }
$EN9 = explode("EN19", $text);
    if($EN9[1]){
	 $EN9 = str_replace('q', 'ҩ' , $EN9);
  	 $EN9 = str_replace('w', 'ω' , $EN9);
	 $EN9 = str_replace('e', '૯' , $EN9);
  	 $EN9 = str_replace('r', 'Ր' , $EN9);
	 $EN9 = str_replace('t', '੮' , $EN9);
  	 $EN9 = str_replace('y', 'ע' , $EN9);
	 $EN9 = str_replace('u', 'υ' , $EN9);
  	 $EN9 = str_replace('i', 'ɿ' , $EN9);
	 $EN9 = str_replace('o', '૦' , $EN9);
  	 $EN9 = str_replace('p', 'ƿ' , $EN9);
	 $EN9 = str_replace('a', 'ค' , $EN9);
  	 $EN9 = str_replace('s', 'ς' , $EN9);
	 $EN9 = str_replace('d', 'ძ' , $EN9);
  	 $EN9 = str_replace('f', 'Բ' , $EN9);
	 $EN9 = str_replace('g', '૭' , $EN9);
  	 $EN9 = str_replace('h', 'Һ' , $EN9);
	 $EN9 = str_replace('j', 'ʆ' , $EN9);
  	 $EN9 = str_replace('k', 'қ' , $EN9);
	 $EN9 = str_replace('l', 'Ն' , $EN9);
  	 $EN9 = str_replace('z', 'ઽ' , $EN9);
	 $EN9 = str_replace('x', '૪' , $EN9);
  	 $EN9 = str_replace('c', '८' , $EN9);
	 $EN9 = str_replace('v', '౮' , $EN9);
  	 $EN9 = str_replace('b', 'ც' , $EN9);
  	 $EN9 = str_replace('n', 'Ո' , $EN9);
	 $EN9 = str_replace('m', 'ɱ' , $EN9);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN9[1], 
    ]);
    }
 $EN10 = explode("EN20", $text);
    if($EN10[1]){
	 $EN10 = str_replace('q', 'Ꝙ' ,$EN10);
  	 $EN10 = str_replace('w', 'Ѡ' ,$EN10);
	 $EN10 = str_replace('e', 'Ɛ' ,$EN10);
  	 $EN10 = str_replace('r', 'Ɽ' ,$EN10);
	 $EN10 = str_replace('t', 'Ͳ' ,$EN10);
  	 $EN10 = str_replace('y', 'Ỿ' ,$EN10);
	 $EN10 = str_replace('u', 'Ʊ' ,$EN10);
  	 $EN10 = str_replace('i', 'ị' ,$EN10);
	 $EN10 = str_replace('o', 'Ỗ' ,$EN10);
  	 $EN10 = str_replace('p', 'Ꝓ' ,$EN10);
	 $EN10 = str_replace('a', 'Λ' ,$EN10);
  	 $EN10 = str_replace('s', 'Ṥ' ,$EN10);
	 $EN10 = str_replace('d', 'δ' ,$EN10);
  	 $EN10 = str_replace('f', 'Բ' ,$EN10);
	 $EN10 = str_replace('g', '₲' ,$EN10);
  	 $EN10 = str_replace('h', 'Ḩ' ,$EN10);
	 $EN10 = str_replace('j', 'Ĵ' ,$EN10);
  	 $EN10 = str_replace('k', 'Ҡ' ,$EN10);
	 $EN10 = str_replace('l', 'Ⱡ' ,$EN10);
  	 $EN10 = str_replace('z', 'Ꙃ' ,$EN10);
	 $EN10 = str_replace('x', 'Ӿ' ,$EN10);
  	 $EN10 = str_replace('c', 'Ƈ' ,$EN10);
	 $EN10 = str_replace('v', 'Ѵ' ,$EN10);
  	 $EN10 = str_replace('b', 'ß' ,$EN10);
  	 $EN10 = str_replace('n', 'ⴂ' ,$EN10);
	 $EN10 = str_replace('m', 'ⴅ' ,$EN10);
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN10[1],
    ]);
    }
 $EN11 = explode("EN21", $text);
    if($EN11[1]){
	 $EN11 = str_replace('q', 'ǫ' , $EN11);
  	 $EN11 = str_replace('w', 'ᴡ' , $EN11);
	 $EN11 = str_replace('e', 'ᴇ' , $EN11);
  	 $EN11 = str_replace('r', 'ʀ' , $EN11);
	 $EN11 = str_replace('t', 'ᴛ' , $EN11);
  	 $EN11 = str_replace('y', 'ʏ' , $EN11);
	 $EN11 = str_replace('u', 'ᴜ' , $EN11);
  	 $EN11 = str_replace('i', 'ɪ' , $EN11);
	 $EN11 = str_replace('o', 'ᴏ' , $EN11);
  	 $EN11 = str_replace('p', 'ᴘ' , $EN11);
	 $EN11 = str_replace('a', 'ᴀ' , $EN11);
  	 $EN11 = str_replace('s', 'ѕ' , $EN11);
	 $EN11 = str_replace('d', 'ᴅ' , $EN11);
  	 $EN11 = str_replace('f', 'ғ' , $EN11);
	 $EN11 = str_replace('g', 'ɢ' , $EN11);
  	 $EN11 = str_replace('h', 'ʜ' , $EN11);
	 $EN11 = str_replace('j', 'ᴊ' , $EN11);
  	 $EN11 = str_replace('k', 'ᴋ' , $EN11);
	 $EN11 = str_replace('l', 'ʟ' , $EN11);
  	 $EN11 = str_replace('z', 'ᴢ' , $EN11);
	 $EN11 = str_replace('x', 'х' , $EN11);
  	 $EN11 = str_replace('c', 'ᴄ' , $EN11);
	 $EN11 = str_replace('v', 'ᴠ' , $EN11);
  	 $EN11 = str_replace('b', 'ʙ' , $EN11);
  	 $EN11 = str_replace('n', 'ɴ' , $EN11);
	 $EN11 = str_replace('m', 'ᴍ' , $EN11);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN11[1],
     ]);
    }
 $EN12 = explode("EN22", $text);
    if($EN12[1]){
	 $EN12 = str_replace('q', 'Ｑ' , $EN12);
  	 $EN12 = str_replace('w', 'Ｗ' , $EN12);
	 $EN12 = str_replace('e', 'Ｅ' , $EN12);
  	 $EN12 = str_replace('r', 'Ｒ' , $EN12);
	 $EN12 = str_replace('t', 'Ｔ' , $EN12);
  	 $EN12 = str_replace('y', 'Ｙ' , $EN12);
	 $EN12 = str_replace('u', 'Ｕ' , $EN12);
  	 $EN12 = str_replace('i', 'Ｉ' , $EN12);
	 $EN12 = str_replace('o', 'Ｏ' , $EN12);
  	 $EN12 = str_replace('p', 'Ｐ' , $EN12);
	 $EN12 = str_replace('a', 'Ａ' , $EN12);
  	 $EN12 = str_replace('s', 'Ｓ' , $EN12);
	 $EN12 = str_replace('d', 'Ｄ' , $EN12);
  	 $EN12 = str_replace('f', 'Բ' , $EN12);
	 $EN12 = str_replace('g', 'Ｇ' , $EN12);
  	 $EN12 = str_replace('h', 'Ｈ' , $EN12);
	 $EN12 = str_replace('j', 'Ｊ' , $EN12);
  	 $EN12 = str_replace('k', 'Ｋ' , $EN12);
	 $EN12 = str_replace('l', 'Ｌ' , $EN12);
  	 $EN12 = str_replace('z', 'Ｚ' , $EN12);
	 $EN12 = str_replace('x', 'Ｘ' , $EN12);
  	 $EN12 = str_replace('c', 'С' , $EN12);
	 $EN12 = str_replace('v', 'Ｖ' , $EN12);
  	 $EN12 = str_replace('b', 'Ｂ' , $EN12);
  	 $EN12 = str_replace('n', 'Ｎ' , $EN12);
	 $EN12 = str_replace('m', 'Ⅿ' , $EN12);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN12[1],
    ]);
    }
 $EN13 = explode("EN23", $text);
    if($EN13[1]){
	 $EN13 = str_replace('q', 'Ǫ' , $EN13);
  	 $EN13 = str_replace('w', 'Ш' , $EN13);
	 $EN13 = str_replace('e', 'Ξ' , $EN13);
  	 $EN13 = str_replace('r', 'Я' , $EN13);
	 $EN13 = str_replace('t', '₮' , $EN13);
  	 $EN13 = str_replace('y', 'Џ' , $EN13);
	 $EN13 = str_replace('u', 'Ǚ' , $EN13);
  	 $EN13 = str_replace('i', 'ł' , $EN13);
	 $EN13 = str_replace('o', 'Ф' , $EN13);
  	 $EN13 = str_replace('p', 'ק' , $EN13);
	 $EN13 = str_replace('a', 'Λ' , $EN13);
  	 $EN13 = str_replace('s', 'Ŝ' , $EN13);
	 $EN13 = str_replace('d', 'Ð' , $EN13);
  	 $EN13 = str_replace('f', 'Ŧ' , $EN13);
	 $EN13 = str_replace('g', '₲' , $EN13);
  	 $EN13 = str_replace('h', 'Ḧ' , $EN13);
	 $EN13 = str_replace('j', 'J' , $EN13);
  	 $EN13 = str_replace('k', 'К' , $EN13);
	 $EN13 = str_replace('l', 'Ł' , $EN13);
  	 $EN13 = str_replace('z', 'Ꙃ' , $EN13);
	 $EN13 = str_replace('x', 'Ж' , $EN13);
  	 $EN13 = str_replace('c', 'Ͼ' , $EN13);
	 $EN13 = str_replace('v', 'Ṽ' , $EN13);
  	 $EN13 = str_replace('b', 'Б' , $EN13);
  	 $EN13 = str_replace('n', 'Л' , $EN13);
	 $EN13 = str_replace('m', 'Ɱ' , $EN13);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN13[1], 
    ]);
	  }
 $EN13 = explode("EN24", $text);
    if($EN13[1]){
	 $EN13 = str_replace('q', 'q' , $EN13);
  	 $EN13 = str_replace('w', 'w' , $EN13);
	 $EN13 = str_replace('e', 'є' , $EN13);
  	 $EN13 = str_replace('r', 'r' , $EN13);
	 $EN13 = str_replace('t', 't' , $EN13);
  	 $EN13 = str_replace('y', 'ч' , $EN13);
	 $EN13 = str_replace('u', 'u' , $EN13);
  	 $EN13 = str_replace('i', 'í' , $EN13);
	 $EN13 = str_replace('o', 'σ' , $EN13);
  	 $EN13 = str_replace('p', 'p' , $EN13);
	 $EN13 = str_replace('a', 'α' , $EN13);
  	 $EN13 = str_replace('s', 'ѕ' , $EN13);
	 $EN13 = str_replace('d', 'd' , $EN13);
  	 $EN13 = str_replace('f', 'f' , $EN13);
	 $EN13 = str_replace('g', 'g' , $EN13);
  	 $EN13 = str_replace('h', 'h' , $EN13);
	 $EN13 = str_replace('j', 'j' , $EN13);
  	 $EN13 = str_replace('k', 'k' , $EN13);
	 $EN13 = str_replace('l', 'l' , $EN13);
  	 $EN13 = str_replace('z', 'z' , $EN13);
	 $EN13 = str_replace('x', 'х' , $EN13);
  	 $EN13 = str_replace('c', 'c' , $EN13);
	 $EN13 = str_replace('v', 'v' , $EN13);
  	 $EN13 = str_replace('b', 'в' , $EN13);
  	 $EN13 = str_replace('n', 'n' , $EN13);
	 $EN13 = str_replace('m', 'm' , $EN13);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN13[1], 
    ]);
	  }
	 $EN14 = explode("EN25", $text);
    if($EN14[1]){
	 $EN14 = str_replace('q', 'ⓠ' , $EN14);
  	 $EN14 = str_replace('w', 'ⓦ' , $EN14);
	 $EN14 = str_replace('e', 'ⓔ' , $EN14);
  	 $EN14 = str_replace('r', 'ⓡ' , $EN14);
	 $EN14 = str_replace('t', 'ⓣ' , $EN14);
  	 $EN14 = str_replace('y', 'ⓨ' , $EN14);
	 $EN14 = str_replace('u', 'ⓤ' , $EN14);
  	 $EN14 = str_replace('i', 'ⓘ' , $EN14);
	 $EN14 = str_replace('o', 'ⓞ' , $EN14);
  	 $EN14 = str_replace('p', 'ⓟ' , $EN14);
	 $EN14 = str_replace('a', 'ⓐ' , $EN14);
  	 $EN14 = str_replace('s', 'ⓢ' , $EN14);
	 $EN14 = str_replace('d', 'ⓓ' , $EN14);
  	 $EN14 = str_replace('f', 'ⓕ' , $EN14);
	 $EN14 = str_replace('g', 'ⓖ' , $EN14);
  	 $EN14 = str_replace('h', 'ⓗ' , $EN14);
	 $EN14 = str_replace('j', 'ⓙ' , $EN14);
  	 $EN14 = str_replace('k', 'ⓚ' , $EN14);
	 $EN14 = str_replace('l', 'ⓛ' , $EN14);
  	 $EN14 = str_replace('z', 'ⓩ' , $EN14);
	 $EN14 = str_replace('x', 'ⓧ' , $EN14);
  	 $EN14 = str_replace('c', 'ⓒ' , $EN14);
	 $EN14 = str_replace('v', 'ⓥ' , $EN14);
  	 $EN14 = str_replace('b', 'ⓑ' , $EN14);
  	 $EN14 = str_replace('n', 'ⓝ' , $EN14);
	 $EN14 = str_replace('m', 'ⓜ' , $EN14);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN14[1], 
    ]);
	  }
	 $EN15 = explode("EN26", $text);
    if($EN15[1]){
	 $EN15 = str_replace('q', 'Q⃟' , $EN15);
  	 $EN15 = str_replace('w', 'W⃟' , $EN15);
	 $EN15 = str_replace('e', 'E⃟' , $EN15);
  	 $EN15 = str_replace('r', 'R⃟' , $EN15);
	 $EN15 = str_replace('t', 'T⃟' , $EN15);
  	 $EN15 = str_replace('y', 'Y⃟' , $EN15);
	 $EN15 = str_replace('u', 'U⃟' , $EN15);
  	 $EN15 = str_replace('i', 'I⃟' , $EN15);
	 $EN15 = str_replace('o', 'O⃟' , $EN15);
  	 $EN15 = str_replace('p', 'P⃟' , $EN15);
	 $EN15 = str_replace('a', 'A⃟' , $EN15);
  	 $EN15 = str_replace('s', 'S⃟' , $EN15);
	 $EN15 = str_replace('d', 'D⃟' , $EN15);
  	 $EN15 = str_replace('f', 'F⃟' , $EN15);
	 $EN15 = str_replace('g', 'G⃟' , $EN15);
  	 $EN15 = str_replace('h', 'H⃟' , $EN15);
	 $EN15 = str_replace('j', 'J⃟' , $EN15);
  	 $EN15 = str_replace('k', 'K⃟' , $EN15);
	 $EN15 = str_replace('l', 'L⃟' , $EN15);
  	 $EN15 = str_replace('z', 'Z⃟' , $EN15);
	 $EN15 = str_replace('x', 'X⃟' , $EN15);
  	 $EN15 = str_replace('c', 'C⃟' , $EN15);
	 $EN15 = str_replace('v', 'V⃟' , $EN15);
  	 $EN15 = str_replace('b', 'B⃟' , $EN15);
  	 $EN15 = str_replace('n', 'N⃟' , $EN15);
	 $EN15 = str_replace('m', 'M⃟' , $EN15);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN15[1], 
    ]);
	  }
	 $EN16 = explode("EN27", $text);
    if($EN16[1]){
	 $EN16 = str_replace('q', 'Qཽ' , $EN16);
  	 $EN16 = str_replace('w', 'Wཽ' , $EN16);
	 $EN16 = str_replace('e', 'Eཽ' , $EN16);
  	 $EN16 = str_replace('r', 'Rཽ' , $EN16);
	 $EN16 = str_replace('t', 'Tཽ' , $EN16);
  	 $EN16 = str_replace('y', 'Yཽ' , $EN16);
	 $EN16 = str_replace('u', 'Uཽ' , $EN16);
  	 $EN16 = str_replace('i', 'Iཽ' , $EN16);
	 $EN16 = str_replace('o', 'Oཽ' , $EN16);
  	 $EN16 = str_replace('p', 'Pཽ' , $EN16);
	 $EN16 = str_replace('a', 'Aཽ' , $EN16);
  	 $EN16 = str_replace('s', 'Sཽ' , $EN16);
	 $EN16 = str_replace('d', 'Dཽ' , $EN16);
  	 $EN16 = str_replace('f', 'Fཽ' , $EN16);
	 $EN16 = str_replace('g', 'Gཽ' , $EN16);
  	 $EN16 = str_replace('h', 'Hཽ' , $EN16);
	 $EN16 = str_replace('j', 'Jཽ' , $EN16);
  	 $EN16 = str_replace('k', 'Kཽ' , $EN16);
	 $EN16 = str_replace('l', 'Lཽ' , $EN16);
  	 $EN16 = str_replace('z', 'Zཽ' , $EN16);
	 $EN16 = str_replace('x', 'Xཽ' , $EN16);
  	 $EN16 = str_replace('c', 'Cཽ' , $EN16);
	 $EN16 = str_replace('v', 'Vཽ' , $EN16);
  	 $EN16 = str_replace('b', 'Bཽ' , $EN16);
  	 $EN16 = str_replace('n', 'Nཽ' , $EN16);
	 $EN16 = str_replace('m', 'Mཽ' , $EN16);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN16[1], 
    ]);
	  }

	 $EN17 = explode("EN28", $text);
    if($EN17[1]){
	 $EN17 = str_replace('q', 'ⓠ' , $EN17);
  	 $EN17 = str_replace('w', 'ẘ' , $EN17);
	 $EN17 = str_replace('e', 'ε' , $EN17);
  	 $EN17 = str_replace('r', 'я' , $EN17);
	 $EN17 = str_replace('t', '⊥' , $EN17);
  	 $EN17 = str_replace('y', '¥' , $EN17);
	 $EN17 = str_replace('u', 'ʊ' , $EN17);
  	 $EN17 = str_replace('i', 'ḯ' , $EN17);
	 $EN17 = str_replace('o', 'ø' , $EN17);
  	 $EN17 = str_replace('p', '℘' , $EN17);
	 $EN17 = str_replace('a', '∀' , $EN17);
  	 $EN17 = str_replace('s', '﹩' , $EN17);
	 $EN17 = str_replace('d', '∂' , $EN17);
  	 $EN17 = str_replace('f', 'ḟ' , $EN17);
	 $EN17 = str_replace('g', 'ℊ' , $EN17);
  	 $EN17 = str_replace('h', 'н' , $EN17);
	 $EN17 = str_replace('j', 'ʝ' , $EN17);
  	 $EN17 = str_replace('k', 'ḱ' , $EN17);
	 $EN17 = str_replace('l', 'ʟ' , $EN17);
  	 $EN17 = str_replace('z', 'ℨ' , $EN17);
	 $EN17 = str_replace('x', '✖' , $EN17);
  	 $EN17 = str_replace('c', 'ḉ' , $EN17);
	 $EN17 = str_replace('v', 'ṽ' , $EN17);
  	 $EN17 = str_replace('b', '♭' , $EN17);
  	 $EN17 = str_replace('n', 'η' , $EN17);
	 $EN17 = str_replace('m', 'ღ' , $EN17);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN17[1], 
    ]);
	  }
	 $EN18 = explode("EN29", $text);
    if($EN18[1]){
	 $EN18 = str_replace('q', 'ǭ' , $EN18);
  	 $EN18 = str_replace('w', 'ω' , $EN18);
	 $EN18 = str_replace('e', 'ḙ' , $EN18);
  	 $EN18 = str_replace('r', 'Ի' , $EN18);
	 $EN18 = str_replace('t', 'т' , $EN18);
  	 $EN18 = str_replace('y', '⑂' , $EN18);
	 $EN18 = str_replace('u', 'ṳ' , $EN18);
  	 $EN18 = str_replace('i', '!' , $EN18);
	 $EN18 = str_replace('o', '✺' , $EN18);
  	 $EN18 = str_replace('p', '℘' , $EN18);
	 $EN18 = str_replace('a', 'ᾰ' , $EN18);
  	 $EN18 = str_replace('s', 'ṧ' , $EN18);
	 $EN18 = str_replace('d', 'ᖱ' , $EN18);
  	 $EN18 = str_replace('f', 'ḟ' , $EN18);
	 $EN18 = str_replace('g', '❡' , $EN18);
  	 $EN18 = str_replace('h', 'ℏ' , $EN18);
	 $EN18 = str_replace('j', '♩' , $EN18);
  	 $EN18 = str_replace('k', 'к' , $EN18);
	 $EN18 = str_replace('l', 'ℓ' , $EN18);
  	 $EN18 = str_replace('z', 'ℨ' , $EN18);
	 $EN18 = str_replace('x', '✘' , $EN18);
  	 $EN18 = str_replace('c', 'ḉ' , $EN18);
	 $EN18 = str_replace('v', 'ṽ' , $EN18);
  	 $EN18 = str_replace('b', '♭' , $EN18);
  	 $EN18 = str_replace('n', 'ℵ' , $EN18);
	 $EN18 = str_replace('m', 'Պ' , $EN18);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN18[1], 
    ]);
	  }
	 $EN19 = explode("EN30", $text);
    if($EN19[1]){
	 $EN19 = str_replace('q', 'զ' , $EN19);
  	 $EN19 = str_replace('w', 'Ŵ' , $EN19);
	 $EN19 = str_replace('e', 'є' , $EN19);
  	 $EN19 = str_replace('r', 'я' , $EN19);
	 $EN19 = str_replace('t', 'ṭ' , $EN19);
  	 $EN19 = str_replace('y', 'ʏ' , $EN19);
	 $EN19 = str_replace('u', 'ȗ' , $EN19);
  	 $EN19 = str_replace('i', 'ı' , $EN19);
	 $EN19 = str_replace('o', 'ȏ' , $EN19);
  	 $EN19 = str_replace('p', 'ק' , $EN19);
	 $EN19 = str_replace('a', 'ѧ' , $EN19);
  	 $EN19 = str_replace('s', 'ś' , $EN19);
	 $EN19 = str_replace('d', 'Ԁ' , $EN19);
  	 $EN19 = str_replace('f', 'ғ' , $EN19);
	 $EN19 = str_replace('g', 'ɢ' , $EN19);
  	 $EN19 = str_replace('h', 'һ' , $EN19);
	 $EN19 = str_replace('j', 'j' , $EN19);
  	 $EN19 = str_replace('k', 'ҡ' , $EN19);
	 $EN19 = str_replace('l', 'ʟ' , $EN19);
  	 $EN19 = str_replace('z', '' , $EN19);
	 $EN19 = str_replace('x', '×' , $EN19);
  	 $EN19 = str_replace('c', 'ċ' , $EN19);
	 $EN19 = str_replace('v', 'ṿ' , $EN19);
  	 $EN19 = str_replace('b', 'ɞ' , $EN19);
  	 $EN19 = str_replace('n', 'ṅ' , $EN19);
	 $EN19 = str_replace('m', 'ṃ' , $EN19);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN19[1], 
    ]);
	  }
	 $EN20 = explode("EN31", $text);
    if($EN20[1]){
	 $EN20 = str_replace('q', 'q̲̅' , $EN20);
  	 $EN20 = str_replace('w', 'w̲̅' , $EN20);
	 $EN20 = str_replace('e', 'e̲̅' , $EN20);
  	 $EN20 = str_replace('r', 'r̲̅' , $EN20);
	 $EN20 = str_replace('t', 't̲̅' , $EN20);
  	 $EN20 = str_replace('y', 'y̲̅' , $EN20);
	 $EN20 = str_replace('u', 'u̲̅' , $EN20);
  	 $EN20 = str_replace('i', 'i̲̅' , $EN20);
	 $EN20 = str_replace('o', 'o̲̅' , $EN20);
  	 $EN20 = str_replace('p', 'p̲̅' , $EN20);
	 $EN20 = str_replace('a', 'a̲̅' , $EN20);
  	 $EN20 = str_replace('s', 's̲̅' , $EN20);
	 $EN20 = str_replace('d', 'd̲̅' , $EN20);
  	 $EN20 = str_replace('f', 'f̲̅' , $EN20);
	 $EN20 = str_replace('g', 'g̲̅' , $EN20);
  	 $EN20 = str_replace('h', 'h̲̅' , $EN20);
	 $EN20 = str_replace('j', 'j̲̅' , $EN20);
  	 $EN20 = str_replace('k', 'k̲̅' , $EN20);
	 $EN20 = str_replace('l', 'l̲̅' , $EN20);
  	 $EN20 = str_replace('z', 'z̲̅' , $EN20);
	 $EN20 = str_replace('x', 'x̲̅' , $EN20);
  	 $EN20 = str_replace('c', 'c̲̅' , $EN20);
	 $EN20 = str_replace('v', 'v̲̅' , $EN20);
  	 $EN20 = str_replace('b', 'b̲̅' , $EN20);
  	 $EN20 = str_replace('n', 'n̲̅' , $EN20);
	 $EN20 = str_replace('m', 'm̲̅' , $EN20);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN20[1], 
    ]);
	  }
	$EN21 = explode("EN32", $text);
    if($EN21[1]){
	 $EN21 = str_replace('q', 'q͙' , $EN21);
  	 $EN21 = str_replace('w', 'w͙' , $EN21);
	 $EN21 = str_replace('e', 'e͙' , $EN21);
  	 $EN21 = str_replace('r', 'r͙' , $EN21);
	 $EN21 = str_replace('t', 't͙' , $EN21);
  	 $EN21 = str_replace('y', 'y͙' , $EN21);
	 $EN21 = str_replace('u', 'u͙' , $EN21);
  	 $EN21 = str_replace('i', 'i͙' , $EN21);
	 $EN21 = str_replace('o', 'o͙' , $EN21);
  	 $EN21 = str_replace('p', 'p͙' , $EN21);
	 $EN21 = str_replace('a', 'a͙' , $EN21);
  	 $EN21 = str_replace('s', 's͙' , $EN21);
	 $EN21 = str_replace('d', 'd͙' , $EN21);
  	 $EN21 = str_replace('f', 't͙' , $EN21);
	 $EN21 = str_replace('g', 'g͙' , $EN21);
  	 $EN21 = str_replace('h', 'h͙' , $EN21);
	 $EN21 = str_replace('j', 'j͙' , $EN21);
  	 $EN21 = str_replace('k', 'k͙' , $EN21);
	 $EN21 = str_replace('l', 'l͙' , $EN21);
  	 $EN21 = str_replace('z', 'z͙' , $EN21);
	 $EN21 = str_replace('x', 'x͙' , $EN21);
  	 $EN21 = str_replace('c', 'c͙' , $EN21);
	 $EN21 = str_replace('v', 'v͙' , $EN21);
  	 $EN21 = str_replace('b', 'b͙' , $EN21);
  	 $EN21 = str_replace('n', 'n͙' , $EN21);
	 $EN21 = str_replace('m', 'm͙' , $EN21);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN21[1], 
    ]);
	  }
	 $EN22 = explode("EN33", $text);
    if($EN22[1]){
	 $EN22 = str_replace('q', 'q⃠' , $EN22);
  	 $EN22 = str_replace('w', 'w⃠' , $EN22);
	 $EN22 = str_replace('e', 'e⃠' , $EN22);
  	 $EN22 = str_replace('r', 'r⃠' , $EN22);
	 $EN22 = str_replace('t', 't⃠' , $EN22);
  	 $EN22 = str_replace('y', 'y⃠' , $EN22);
	 $EN22 = str_replace('u', 'u⃠' , $EN22);
  	 $EN22 = str_replace('i', 'i⃠' , $EN22);
	 $EN22 = str_replace('o', 'o⃠' , $EN22);
  	 $EN22 = str_replace('p', 'p⃠' , $EN22);
	 $EN22 = str_replace('a', 'a⃠' , $EN22);
  	 $EN22 = str_replace('s', 's⃠' , $EN22);
	 $EN22 = str_replace('d', 'd⃠' , $EN22);
  	 $EN22 = str_replace('f', 'f⃠' , $EN22);
	 $EN22 = str_replace('g', 'g⃠' , $EN22);
  	 $EN22 = str_replace('h', 'h⃠' , $EN22);
	 $EN22 = str_replace('j', 'j⃠' , $EN22);
  	 $EN22 = str_replace('k', 'k⃠' , $EN22);
	 $EN22 = str_replace('l', 'l⃠' , $EN22);
  	 $EN22 = str_replace('z', 'z⃠' , $EN22);
	 $EN22 = str_replace('x', 'x⃠' , $EN22);
  	 $EN22 = str_replace('c', 'c⃠' , $EN22);
	 $EN22 = str_replace('v', 'v⃠' , $EN22);
  	 $EN22 = str_replace('b', 'b⃠' , $EN22);
  	 $EN22 = str_replace('n', 'n⃠' , $EN22);
	 $EN22 = str_replace('m', 'm⃠' , $EN22);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN22[1], 
    ]);
	  }
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//
//-_-_-_-_-_-_-_-_-_-_@DEFQON_-_-_-_-_-_-_-_-_-_//



	 $EN23 = explode("EN25", $text);
    if($EN23[1]){
	 $EN23 = str_replace('q', 'Ꮔ' , $EN23);
  	 $EN23 = str_replace('w', 'Ꮚ' , $EN23);
	 $EN23 = str_replace('e', 'Ꮛ' , $EN23);
  	 $EN23 = str_replace('r', 'ᖇ' , $EN23);
	 $EN23 = str_replace('t', 'Ꮏ' , $EN23);
  	 $EN23 = str_replace('y', 'Ꭹ' , $EN23);
	 $EN23 = str_replace('u', 'Ꮜ' , $EN23);
  	 $EN23 = str_replace('i', 'Ꮂ' , $EN23);
	 $EN23 = str_replace('o', 'Ꮻ' , $EN23);
  	 $EN23 = str_replace('p', 'Ꮅ' , $EN23);
	 $EN23 = str_replace('a', 'Ꭿ' , $EN23);
  	 $EN23 = str_replace('s', 'Ꭶ' , $EN23);
	 $EN23 = str_replace('d', 'Ꮄ' , $EN23);
  	 $EN23 = str_replace('f', 'Ꮏ' , $EN23);
	 $EN23 = str_replace('g', 'Ꮆ' , $EN23);
  	 $EN23 = str_replace('h', 'Ꮒ' , $EN23);
	 $EN23 = str_replace('j', 'Ꮰ' , $EN23);
  	 $EN23 = str_replace('k', 'Ꮶ' , $EN23);
	 $EN23 = str_replace('l', 'l' , $EN23);
  	 $EN23 = str_replace('z', 'Ꮓ' , $EN23);
	 $EN23 = str_replace('x', 'Ꮿ' , $EN23);
  	 $EN23 = str_replace('c', 'Ꮳ' , $EN23);
	 $EN23 = str_replace('v', 'Ꮙ' , $EN23);
  	 $EN23 = str_replace('b', 'Ᏸ' , $EN23);
  	 $EN23 = str_replace('n', 'Ꮑ' , $EN23);
	 $EN23 = str_replace('m', 'm' , $EN23);
	 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$EN23[1], 
    ]);
	  }
//media
$qid = $update->callback_query->id;
$ccgcid2 = $update->callback_query->message->chat->id;
$from2 = $update->callback_query->from->id;
$mid2 = $update->callback_query->message->message_id;

$data = $update->callback_query->data;
if($data){
	
$ty = bot('getchatmember',[
	'chat_id'=>$ccgcid2,
	'user_id'=>$from2
	]);
$ty = $ty->result->status;
if($ty=="administrator" or $ty=="creator"){

bot('answercallbackquery',[
	'callback_query_id'=>$qid
	]);	
         if($data=="rasm"){         
              $stic = file_get_contents("data/$ccgcid2/rasm.db");
              if($stic){
              if($stic=="on"){
              	file_put_contents("data/$ccgcid2/rasm.db","off");
              }
              if($stic=="off"){
              	file_put_contents("data/$ccgcid2/rasm.db","on");
              }
          }else{
          	file_put_contents("data/$ccgcid2/rasm.db","on");
          }
        $ccssl = file_get_contents("data/$ccgcid2/ssilka.db");
         $stic = file_get_contents("data/$ccgcid2/stic.db");
          $ras = file_get_contents("data/$ccgcid2/rasm.db");
          $ccssl =  str_replace("on","✅",$ccssl);
          $ccssl = str_replace("off","☑️",$ccssl);
          $stic =  str_replace("on","✅",$stic);
          $stic = str_replace("off","☑️",$stic);
          $ras =  str_replace("on","✅",$ras);
          $ras = str_replace("off","☑️",$ras);
$join = file_get_contents("data/$ccgcid2/join.db");
          $gif = file_get_contents("data/$ccgcid2/gif.db");
          $ovoz = file_get_contents("data/$ccgcid2/ovoz.db");
          $join =  str_replace("on","✅",$join);
          $join = str_replace("off","☑️",$join); 
          $gif =  str_replace("on","✅",$gif);
          $gif = str_replace("off","☑️",$gif);
          $ovoz =  str_replace("on","✅",$ovoz);
          $ovoz = str_replace("off","☑️",$ovoz);
        bot("editMessageReplyMarkup",[
            'chat_id'=>$ccgcid2,
            'message_id'=>$mid2,
             'reply_markup' => json_encode([
                'inline_keyboard'=>[
                   [['text'=>"🖼Rasm holati  $ras",'callback_data'=>'rasm'],['text'=>"🎤Ovoz holati $ovoz",'callback_data'=>'ovoz']],
            [['text'=>"🎁Sticker holati $stic",'callback_data'=>'stic'],['text'=>"🎭Gif holati $gif",'callback_data'=>'gif']],
            [['text'=> "🗝Ssilka holati  $ccssl",'callback_data'=>'ssl'],['text'=>"👑Forward holati $join",'callback_data'=>'join']],
             
 ]
                ]),
        ]);
    }
    

     if($data=="ssl"){
  $ccssl = file_get_contents("data/$ccgcid2/ssilka.db");
         if($ccssl){
         if($ccssl=="on"){
         file_put_contents("data/$ccgcid2/ssilka.db","off");
         }
         if($ccssl=="off"){
         file_put_contents("data/$ccgcid2/ssilka.db","on");
         }
         }else{
         file_put_contents("data/$ccgcid2/ssilka.db","on");
         } 
          $ccssl = file_get_contents("data/$ccgcid2/ssilka.db");
          $stic = file_get_contents("data/$ccgcid2/stic.db");
          $ras = file_get_contents("data/$ccgcid2/rasm.db");
$join = file_get_contents("data/$ccgcid2/join.db");
          $gif = file_get_contents("data/$ccgcid2/gif.db");
          $ovoz = file_get_contents("data/$ccgcid2/ovoz.db");
          $join =  str_replace("on","✅",$join);
          $join = str_replace("off","☑️",$join); 
          $gif =  str_replace("on","✅",$gif);
          $gif = str_replace("off","☑️",$gif);
          $ovoz =  str_replace("on","✅",$ovoz);
          $ovoz = str_replace("off","☑️",$ovoz);
          $ccssl =  str_replace("on","✅",$ccssl);
          $ccssl = str_replace("off","☑️",$ccssl);
          $stic =  str_replace("on","✅",$stic);
          $stic = str_replace("off","☑️",$stic);
          $ras =  str_replace("on","✅",$ras);
          $ras = str_replace("off","☑️",$ras);
        bot("editMessageReplyMarkup",[
            'chat_id'=>$ccgcid2,
            'message_id'=>$mid2,
             'reply_markup' => json_encode([
                'inline_keyboard'=>[
                    [['text'=>"🖼Rasm holati  $ras",'callback_data'=>'rasm'],['text'=>"🎤Ovoz holati $ovoz",'callback_data'=>'ovoz']],
            [['text'=>"🎁Sticker holati $stic",'callback_data'=>'stic'],['text'=>"🎭Gif holati $gif",'callback_data'=>'gif']],
            [['text'=> "🗝Ssilka holati  $ccssl",'callback_data'=>'ssl'],['text'=>"👑Forward holati $join",'callback_data'=>'join']],

                    ]
        ]),
        ]);
    }


    if($data=="stic"){
  $ccssl = file_get_contents("data/$ccgcid2/stic.db");
         if($ccssl){
         if($ccssl=="on"){
         file_put_contents("data/$ccgcid2/stic.db","off");
         }
         if($ccssl=="off"){
         file_put_contents("data/$ccgcid2/stic.db","on");
         }
         }else{
         file_put_contents("data/$ccgcid2/stic.db","on");
         } 
          $ccssl = file_get_contents("data/$ccgcid2/ssilka.db");
          $stic = file_get_contents("data/$ccgcid2/stic.db");
          $ras = file_get_contents("data/$ccgcid2/rasm.db");
           $join = file_get_contents("data/$ccgcid2/join.db");
          $gif = file_get_contents("data/$ccgcid2/gif.db");
          $ovoz = file_get_contents("data/$ccgcid2/ovoz.db");
          $join =  str_replace("on","✅",$join);
          $join = str_replace("off","☑️",$join); 
          $gif =  str_replace("on","✅",$gif);
          $gif = str_replace("off","☑️",$gif);
          $ovoz =  str_replace("on","✅",$ovoz);
          $ovoz = str_replace("off","☑️",$ovoz);
          $ccssl =  str_replace("on","✅",$ccssl);
          $ccssl = str_replace("off","☑️",$ccssl);
          $stic =  str_replace("on","✅",$stic);
          $stic = str_replace("off","☑️",$stic);
          $ras =  str_replace("on","✅",$ras);
          $ras = str_replace("off","☑️",$ras);
        bot("editMessageReplyMarkup",[
            'chat_id'=>$ccgcid2,
            'message_id'=>$mid2,
             'reply_markup' => json_encode([
                'inline_keyboard'=>[
                 [['text'=>"🖼Rasm holati  $ras",'callback_data'=>'rasm'],['text'=>"🎤Ovoz holati $ovoz",'callback_data'=>'ovoz']],
            [['text'=>"🎁Sticker holati $stic",'callback_data'=>'stic'],['text'=>"🎭Gif holati $gif",'callback_data'=>'gif']],
            [['text'=> "🗝Ssilka holati  $ccssl",'callback_data'=>'ssl'],['text'=>"👑Forward holati $join",'callback_data'=>'join']],
                    ]
                    ]),
        ]);
    }

//JOIN
  if($data=="join"){
  $ccssl = file_get_contents("data/$ccgcid2/join.db");
         if($ccssl){
         if($ccssl=="on"){
         file_put_contents("data/$ccgcid2/join.db","off");
         }
         if($ccssl=="off"){
         file_put_contents("data/$ccgcid2/join.db","on");
         }
         }else{
         file_put_contents("data/$ccgcid2/join.db","on");
         } 
          $ccssl = file_get_contents("data/$ccgcid2/ssilka.db");
          $stic = file_get_contents("data/$ccgcid2/stic.db");
          $ras = file_get_contents("data/$ccgcid2/rasm.db");
           $join = file_get_contents("data/$ccgcid2/join.db");
          $gif = file_get_contents("data/$ccgcid2/gif.db");
          $ovoz = file_get_contents("data/$ccgcid2/ovoz.db");
          $join =  str_replace("on","✅",$join);
          $join = str_replace("off","☑️",$join); 
          $gif =  str_replace("on","✅",$gif);
          $gif = str_replace("off","☑️",$gif);
          $ovoz =  str_replace("on","✅",$ovoz);
          $ovoz = str_replace("off","☑️",$ovoz);
          $ccssl =  str_replace("on","✅",$ccssl);
          $ccssl = str_replace("off","☑️",$ccssl);
          $stic =  str_replace("on","✅",$stic);
          $stic = str_replace("off","☑️",$stic);
          $ras =  str_replace("on","✅",$ras);
          $ras = str_replace("off","☑️",$ras);
        bot("editMessageReplyMarkup",[
            'chat_id'=>$ccgcid2,
            'message_id'=>$mid2,
             'reply_markup' => json_encode([
                'inline_keyboard'=>[
                 [['text'=>"🖼Rasm holati  $ras",'callback_data'=>'rasm'],['text'=>"🎤Ovoz holati $ovoz",'callback_data'=>'ovoz']],
            [['text'=>"🎁Sticker holati $stic",'callback_data'=>'stic'],['text'=>"🎭Gif holati $gif",'callback_data'=>'gif']],
            [['text'=> "🗝Ssilka holati  $ccssl",'callback_data'=>'ssl'],['text'=>"👑Forward holati $join",'callback_data'=>'join']],
                    ]
                    ]),
        ]);
    }
//ovoz
  if($data=="ovoz"){
  $ccssl = file_get_contents("data/$ccgcid2/ovoz.db");
         if($ccssl){
         if($ccssl=="on"){
         file_put_contents("data/$ccgcid2/ovoz.db","off");
         }
         if($ccssl=="off"){
         file_put_contents("data/$ccgcid2/ovoz.db","on");
         }
         }else{
         file_put_contents("data/$ccgcid2/ovoz.db","on");
         } 
          $ccssl = file_get_contents("data/$ccgcid2/ssilka.db");
          $stic = file_get_contents("data/$ccgcid2/stic.db");
          $ras = file_get_contents("data/$ccgcid2/rasm.db");
           $join = file_get_contents("data/$ccgcid2/join.db");
          $gif = file_get_contents("data/$ccgcid2/gif.db");
          $ovoz = file_get_contents("data/$ccgcid2/ovoz.db");
          $join =  str_replace("on","✅",$join);
          $join = str_replace("off","☑️",$join); 
          $gif =  str_replace("on","✅",$gif);
          $gif = str_replace("off","☑️",$gif);
          $ovoz =  str_replace("on","✅",$ovoz);
          $ovoz = str_replace("off","☑️",$ovoz);
          $ccssl =  str_replace("on","✅",$ccssl);
          $ccssl = str_replace("off","☑️",$ccssl);
          $stic =  str_replace("on","✅",$stic);
          $stic = str_replace("off","☑️",$stic);
          $ras =  str_replace("on","✅",$ras);
          $ras = str_replace("off","☑️",$ras);
        bot("editMessageReplyMarkup",[
            'chat_id'=>$ccgcid2,
            'message_id'=>$mid2,
             'reply_markup' => json_encode([
                'inline_keyboard'=>[
                 [['text'=>"🖼Rasm holati  $ras",'callback_data'=>'rasm'],['text'=>"🎤Ovoz holati $ovoz",'callback_data'=>'ovoz']],
            [['text'=>"🎁Sticker holati $stic",'callback_data'=>'stic'],['text'=>"🎭Gif holati $gif",'callback_data'=>'gif']],
            [['text'=> "🗝Ssilka holati  $ccssl",'callback_data'=>'ssl'],['text'=>"👑Forward holati $join",'callback_data'=>'join']],
                    ]
                    ]),
        ]);
    }
//gif
  if($data=="gif"){
  $ccssl = file_get_contents("data/$ccgcid2/gif.db");
         if($ccssl){
         if($ccssl=="on"){
         file_put_contents("data/$ccgcid2/gif.db","off");
         }
         if($ccssl=="off"){
         file_put_contents("data/$ccgcid2/gif.db","on");
         }
         }else{
         file_put_contents("data/$ccgcid2/gif.db","on");
         } 
          $ccssl = file_get_contents("data/$ccgcid2/ssilka.db");
          $stic = file_get_contents("data/$ccgcid2/stic.db");
          $ras = file_get_contents("data/$ccgcid2/rasm.db");
           $join = file_get_contents("data/$ccgcid2/join.db");
          $gif = file_get_contents("data/$ccgcid2/gif.db");
          $ovoz = file_get_contents("data/$ccgcid2/ovoz.db");
          $join =  str_replace("on","✅",$join);
          $join = str_replace("off","☑️",$join); 
          $gif =  str_replace("on","✅",$gif);
          $gif = str_replace("off","☑️",$gif);
          $ovoz =  str_replace("on","✅",$ovoz);
          $ovoz = str_replace("off","☑️",$ovoz);
          $ccssl =  str_replace("on","✅",$ccssl);
          $ccssl = str_replace("off","☑️",$ccssl);
          $stic =  str_replace("on","✅",$stic);
          $stic = str_replace("off","☑️",$stic);
          $ras =  str_replace("on","✅",$ras);
          $ras = str_replace("off","☑️",$ras);
        bot("editMessageReplyMarkup",[
            'chat_id'=>$ccgcid2,
            'message_id'=>$mid2,
             'reply_markup' => json_encode([
                'inline_keyboard'=>[
                  [['text'=>"🖼Rasm holati  $ras",'callback_data'=>'rasm'],['text'=>"🎤Ovoz holati $ovoz",'callback_data'=>'ovoz']],
            [['text'=>"🎁Sticker holati $stic",'callback_data'=>'stic'],['text'=>"🎭Gif holati $gif",'callback_data'=>'gif']],
            [['text'=> "🗝Ssilka holati  $ccssl",'callback_data'=>'ssl'],['text'=>"👑Forward holati $join",'callback_data'=>'join']],
                    ]
                    ]),
        ]);
    }


 }else{
bot('answercallbackquery',[
	'callback_query_id'=>$qid
	]);
}
}
$userID = $update->inline_query->from->id;
$theQuery = $update->inline_query->query;
$ccgcid = $update->inline_query->query;
//Ushbu kod @TexnoTG tomonidan @Clever_Coders kanali orqali tarqatildi 
//Manbaga tekganingni itaraman 😈

?>
