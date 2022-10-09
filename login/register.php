
 <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
<a href="login.php" class=" btn btn-danger"> Back </a>
<?php
$start_time = microtime(true);

$con=mysqli_connect("localhost","root","","negative");

if(isset($_POST['submit']))
{


$name=$_POST['name'];
$email=$_POST['email'];
$tset=$_POST['tset'];
$password=$_POST['password'];







	$q="insert into user(name,email,password,terminateset) values ('$name','$email','$password','$tset')";
	mysqli_query($con,$q);
echo"<h2> SUCCESSFULLY REGISTERED  <br></h2>";


}

// End clock time in seconds
$end_time = microtime(true);
  
// Calculate script execution time
$execution_time = ($end_time - $start_time);
  
echo " Execution time of script = ".$execution_time." sec";

?>