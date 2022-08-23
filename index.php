<?php

//Only Whatsapp message
/*
$arr=json_encode(array(
	"phone"=>"92XXXXXXXXXXX",
	"body"=>"Hello Code With Zahid"
));
$url="https://eu16.chat-api.com/instance{$instanceCode}/message?token={$token}";
*/

// Message With File
$arr=json_encode(array(
	"phone"=>"92xxxxxxxxxx",
	"body"=>"Your Message",
	"filename"=>"codewithzahidlogo.jpg"
));

$url="https://eu16.chat-api.com/instance{$instanceCode}/sendFile?token={$token}";
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_POST,true);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_POSTFIELDS,$arr);
curl_setopt($ch,CURLOPT_HTTPHEADER,array(
	'Content-type:application/json',
	'Content-length:'.strlen($arr)
));
$result=curl_exec($ch);
curl_close($ch);
echo $result;
?>