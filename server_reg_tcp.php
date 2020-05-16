<?php
$address= "192.168.44.131";
$fp = fopen('studentdetails.txt', 'a');
if(!($sock = socket_create(AF_INET, SOCK_STREAM, 0))){
	die("Couldn't create socket");
}
echo "Socket created \n";
if(!socket_bind($sock, $address,8080) ){
	die("Could not bind socket\n");
}
echo "Socket bind OK \n";
if(!socket_listen ($sock , 10)){
   	die("Could not listen on socket\n");
}
echo "Socket listen OK \n";
echo "Waiting for incoming connections... \n";
while(true){
	$client = socket_accept($sock);
	echo " after accept\n";
	$input  = socket_read($client, 2045);
	echo "after read\n";
	$myarray = json_decode($input, true);
	$i=0;
	//fwrite($fp,'heelo');
	while($i <= 3){
		fwrite($fp,$myarray[$i]);
		$i+=1;
		fwrite($fp,"\t");
	}
	fwrite($fp,"\n");
	//fwrite($fp,"\n");
	fclose($fp);  
	//$input = json_encode($myarray);
	//socket_write($client, $input ,strlen($input));
	// echo "Data Sent to Client\n";
}
socket_close($sock);
?>
