<?php
require_once( 'config.php' );
//$host="localhost"; // Host name 
//$username=""; // Mysql username 
//$password=""; // Mysql password 
//$db_name="test"; // Database name 
//$tbl_name="members"; // Table name 

// Connect to server and select databse.
//mysql_connect(prifender_mysql_host, prifender_mysql_username, prifender_mysql_password)or die("cannot connect"); 
//mysql_select_db(prifender_mysql_db_name)or die("cannot select DB");

// Create connection
$conn = new mysqli(prifender_mysql_host, prifender_mysql_username, prifender_mysql_password, prifender_mysql_db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// prepare and bind
$stmt = $conn->prepare("SELECT count(*) FROM ".prifender_mysql_users_tbl_name." WHERE username=? and password=?");
$stmt->bind_param("ss", $myusername, $mypassword);

// username and password sent from form 
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 


//// To protect MySQL injection (more detail about MySQL injection)
//$myusername = stripslashes($myusername);
//$mypassword = stripslashes($mypassword);
//$myusername = mysql_real_escape_string($myusername);
//$mypassword = mysql_real_escape_string($mypassword);
//$sql="SELECT * FROM ".prifender_mysql_users_tbl_name." WHERE username='$myusername' and password='$mypassword'";
//$result=mysql_query($sql);

$result=$stmt->execute();;

/* bind result variables */
$stmt->bind_result($count);

/* fetch value */
$stmt->fetch();

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

    // Register $myusername, $mypassword and redirect to file "login_success.php"
    session_start();
    $_SESSION["myusername"] = $myusername;
    $_SESSION["mypassword"] = $mypassword; 
    header("location:login_success.php");
}
else {
    echo "Wrong Username or Password";
}
?>
