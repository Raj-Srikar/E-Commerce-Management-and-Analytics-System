<?php
error_reporting(0);
$con=mysqli_connect("localhost","root","","negative");




$true=0;
$result=mysqli_query($con,"SELECT * FROM user where email='$_REQUEST[email]'  ") or die(mysqli_error($con));
while($row=mysqli_fetch_array($result))
{
//$pass="1234";
//$noise="5678";

$pass=$row['password'];
$noise=$row['terminateset'];

//$keytest="558158902698037234284890";
$keytest=$_REQUEST['password'];
$len=strlen($keytest);
//echo $len."----";
}



//echo $pass;
//echo "<br>".$noise;
for($i=0;$i<4;$i++)
{

$check=$pass[$i]."".$noise[$i];
	
	if (strpos($keytest, $check) !== false) {
   // echo 'true <br>';
	$charlen=strpos($keytest, $check);
	
	$true++;
}
	
	
//	echo $check." *** $charlen <br>";

$keytest=substr($keytest,$charlen,$len);
}

//echo "<br>TRUE $true";











$validate = array();


    
   
    
     if ($true==4) {
        $validate['status']['success']="true";
		?>
		  <script type="text/javascript">

window.location = "../daiict/dashboard.php?email=<?php echo $_REQUEST['email']; ?>"

</script>
 <?php
    } else {
    
   echo "LOGIN FAILD";
        
    }


//echo json_encode($validate);










?>