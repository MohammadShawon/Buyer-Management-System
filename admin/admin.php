<?php 
    require '../session.php';
if($_SESSION['user_type']!=='Admin'){
header("location:../index.php"); }
    include '../includes/style-link.php';
    include '../includes/header.php';
    include 'admin-sidebar.php';
    include '../includes/footer.php';
?>