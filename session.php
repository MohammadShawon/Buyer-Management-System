<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$conn = mysql_connect("localhost", "root", "");
// Selecting Database
$db = mysql_select_db("nazprinters", $conn);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
$type_check=$_SESSION['user_type'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select * from user where username='$user_check' AND type='$type_check'", $conn);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row ['username'];
$login_type =$row ['type'];
if(!isset($login_session)){
mysql_close($conn); // Closing Connection
    if($_SESSION['user_type']=='Employee'){
   header('Location: access/employee.php');
}
    if($_SESSION['user_type']=='Admin'){
   header('Location: admin/admin.php');
}
//header('Location: index.php'); // Redirecting To Home Page
}

//if($login_type=='Employee'){
  // header('Location: access/employee.php');
//}
//elseif($login_type=='Admin'){
//   header('Location: admin/admin.php');
//}
?>