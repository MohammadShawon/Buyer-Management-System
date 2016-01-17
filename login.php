<?php
session_start(); // Starting Session



$error=''; // Variable To Store Error Message
if (isset($_POST['login']))
{
if (empty($_POST['username']) || empty($_POST['password'] ) || empty ($_POST['type'])) 
{
$error = " Username or Password doesn't match ";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
$usertype=$_POST['type'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$conn = mysql_connect("localhost", "root", "");
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$usertype = stripslashes($usertype);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
$usertype = mysql_real_escape_string($usertype);
// Selecting Database
$db = mysql_select_db("nazprinters", $conn);
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("select * from user where password='$password' AND username='$username' AND type='$usertype' ", $conn);
$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
$_SESSION['user_type']=$usertype; // Initializing Session
//header("location: home.php"); // Redirecting To Other Page
        if($_SESSION['user_type']=='Employee'){
   header('Location: access/employee.php');
}
    if($_SESSION['user_type']=='Admin'){
   header('Location: admin/admin.php');
}
} else {
$error = "Username or Password  Doesn't Match";
}
mysql_close($conn); // Closing Connection
}
}

?>
