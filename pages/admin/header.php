<?php
    include '../db/database.php';
    require"../db/core.php";
    include('../db/mysqlhelper.php');  
    $pdo = Database::connect();
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php include('../php/title.php')?>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.addons.css">
  
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
</head>
<div> <input  id="page" value="index" hidden />
<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
   <?php include('../php/nav_bar.php');?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
      
      <?php include('menu.php');?>
      
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">