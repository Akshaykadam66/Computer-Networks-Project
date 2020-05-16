<?php
	$regno=$_POST["txtregno"];
	$emailid=$_POST["txtemailid"];
	$aggregate=$_POST["txtcgpa"];
	$fname=$_POST["txtfname"];
	$address="192.168.44.131";
	$buf= "";
	$data = array($regno,$fname,$emailid,$aggregate);
	$json = json_encode($data);
 	//print_r($data);
	if(!($sock = socket_create(AF_INET, SOCK_STREAM, 0))){
    		die("Couldn't create socket\n");
	}
	//echo "Socket created \n";
	if(!socket_connect($sock , $address ,8080)){
		die("Could not connect\n");
	}
	//echo "Connection established \n";
	$message = "Hello this client 1";
	if(!socket_send($sock,$json,2045,0)){
    		die("Could not send data\n");
	}
	//echo "Message sent successfully\t\n";
	//if(!socket_recv($sock,$buf,4000,MSG_PEEK)){
    	//	die("Could not receive data\n");
	//}
	echo "<h1><center>";
	echo "Details Uploaded Sucessfully!!!";
	echo "</h1></center>";
	socket_close($sock);
?>
