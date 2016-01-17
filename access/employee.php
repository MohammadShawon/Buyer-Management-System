<?php
require '../session.php';
if($_SESSION['user_type']!=='Employee'){
header("location:../index.php"); }
    include '../includes/style-link.php';
    include '../includes/header.php';
    include 'employee-sidebar.php';
	include '../includes/footer.php';
?> 

    
	