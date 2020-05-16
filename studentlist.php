<?php
	$myfile = fopen('studentdetails.txt', 'r') or die("Unable to open file!");
	 echo "SRN . 	|    NAME .   |	  EMAILID .   |	   CGPA .";	 
	echo "<br>";  
	while(!feof($myfile)){
 	 	$filedata = fgets($myfile);
		echo $filedata;
		echo "<br>";
	}	
	fclose($myfile);
?>
<html>
<body>
	<form method="POST" action="mail.php">
        
	<label><b>Enter Recepeient EmailID</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" value={{request.form.username}} name="txtemailid"  placeholder="Enter Emialid" required/>
	<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="reset" name="btnreset" value="RESET" class="button" required>
                    <input type="submit" name="btnreg" value="Countinue" class="button" >
</form>
</body>
</html>             
