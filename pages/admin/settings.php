<?php include('header.php');?>
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
		<?php include('settings_page.php'); ?>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
              <a href="http://www.bootstrapdash.com/" target="_blank">WCB</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">BGR
              <i class="mdi mdi-heart text-danger"></i>
            </span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
 
</div>


<?php include('footer.php');?>