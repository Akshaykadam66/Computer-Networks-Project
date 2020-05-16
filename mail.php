<?php

	$emailid=$_POST["txtemailid"];
	$to = $emailid;
	$subject = "Placements";
	$txt = "Your are Hired";
	mail($to,$subject,$txt);
	echo "Mail Sent";
?>
