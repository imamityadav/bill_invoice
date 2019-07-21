<?php
function sms($number,$msg,$user,$pass,$senderid)
{  
$url="http://sms.schoolerp-niktech.in/vendorsms/pushsms.aspx?user=".$user."&password=".$pass."&msisdn=".$number."&sid=".$senderid."&msg=".urlencode($msg)."&fl=0&gwid=2";
	
//$url="http://bulksms.gfinch.in/api/sendmsg.php?user=ramdoot&pass=ghazipur@123&sender=RAMDOT&phone=".$number."&text=".urlencode($msg)."&priority=ndnd&stype=normal";
	//$url = "http://mysms.sms7.biz/rest/services/sendSMS/sendGroupSms?AUTH_KEY=".$authkey."&message=".urlencode($message)."&senderId=".$senderID."&routeId=1&mobileNos=".$number."&smsContentType=english";
	$ch = curl_init();
	curl_setopt($ch,CURLOPT_URL,$url);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
	$output=curl_exec($ch);
	curl_close($ch);
}

function checkBalSms($user,$pass)
{ 
$url = "http://sms.schoolerp-niktech.in/vendorsms/CheckBalance.aspx?user=".$user."&password=".$pass;

$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$output=curl_exec($ch);
curl_close($ch);
return $output;
}