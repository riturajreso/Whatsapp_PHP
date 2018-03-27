
<?PHP
$token = ""; // PHPHive WhatsAPI Token, Get it from http://wapi.phphive.info
$wa_uid = ""; // WhatsApp Username
$wa_pwd = ""; // WhatsApp Password
$wa_recp = ""; // Recipient
$wa_msg  = ""; // Message You want to Send
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"http://wapi.phphive.info/api/message/send.php");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,"token=".$token."&wa_uid=".$wa_uid."&wa_pwd=".$wa_pwd."&wa_recp=".$wa_recp."&wa_msg=".urlencode($wa_msg));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec ($ch);
curl_close ($ch);
echo $server_output;
 
?>
