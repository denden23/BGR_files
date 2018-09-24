<!--
Programmed by: Wenny C. Buenaventura
Login Module
-->

<?php

    require"db/core.php";
    require"db/database.php";
    require"php/fn_get_user.php";
?>  
    <?php $current_wday=date('D'); ?>
    <?php $current_month=date('F'); ?>
    <?php $current_day=date('d'); ?>
    <?php $current_year = date('Y'); ?>
    <?php $dateTime = new DateTime('now', new DateTimeZone('Asia/Manila'));
	?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php include('php/title.php')?>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auto-form-wrapper">
			 <div id='div_alert' align="center"></div>
			 
              <form id='form_login' >
			  
			  <div class="form-group" align="center" style="float:center" >
                  <img  src="../images/favicon.png" style="width: 30%; height 10%;" />
                </div>
                <div class="form-group">
                  <label class="label">Username</label>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Username" id="txtuname" >
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="label">Password</label>
                  <div class="input-group">
                    <input type="password" class="form-control" placeholder="*********" id="txtpword" >
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <button class="btn btn-primary submit-btn btn-block" type="Submit" value='Login'  id="Submit" >Login</button>
                </div>
				 
              </form>
            </div>
            
            </ul>
            <p class="footer-text text-center">copyright © 2018 WCB. All rights reserved.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../vendors/js/vendor.bundle.base.js"></script>
  <script src="../vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../js/off-canvas.js"></script>
  <script src="../js/misc.js"></script>
  <!-- endinject -->
</body>
 <script type="text/javascript">
        $("document").ready(function(){
            $("#panel_login").hide();
            setTimeout(function(){
                $("#panel_login").slideDown();
            },0);

            $("#logo").mouseenter(function(){
                //$("#panel1").animate({width:"130px",height:"130px"},200);
                //$("#logo").css({"box-shadow":"1px 1px 3px 3px #c8c8c8"},200);
                $(this).click();
            });
            $("#logo").mouseleave(function(){
                //$("#panel1").animate({width:"120px",height:"120px"},200);
                //$("#logo").css({"box-shadow":"1px 1px 1px 1px #898989"},200);
            });

            $("#form_login").submit(function(e){
                //alert('in');
                var txtuname = $("#txtuname").val();
                var txtpword = $("#txtpword").val();
                
                //alert(txtuname+"-"+txtpword);

                if (txtuname.length == 0 || txtpword.length == 0){
                    setTimeout(function(){
                        alert("Please Fill Up All Fields.");
                    },1000);
                }else{
                    $.post("php/fn_login.php",
                        {
                            txtuname:txtuname,
                            txtpword:txtpword
                        }
                        ,function(result){
							//alert(result);
                           if(result=='1'){
                           /*if success display and redirect to user page */
                                $("#div_alert").html("<div class='alert alert-success'><b><i class='fa fa-check fa-fw'></i>&nbsp;Login Successful.</b></div>");
                                $("#div_alert").slideDown();
                                setTimeout(function(){
                                    $("#div_alert").slideUp();
                                    setTimeout(function(){
                                        window.location.assign("check_index.php");
                                    },1000);
                                },1500);
                            }else if(result=='2'){
                                $("#div_alert").html("<div class='alert alert-danger'><b><i class='fa fa-times fa-fw'></i>&nbsp;Incorrect Username or Password.</b></div>");
                                $("#div_alert").slideDown();
                                setTimeout(function(){
                                    $("#div_alert").slideUp();
                                },2500);
                            }
                            else if(result=='3'){
                                $("#div_alert").html("<div class='alert alert-danger'><b><i class='fa fa-times fa-fw'></i>&nbsp;Please Fill up all Fields.</b></div>");
                                $("#div_alert").slideDown();
                                setTimeout(function(){
                                    $("#div_alert").slideUp();
                                },2500);
                            }
                            else if(result=='4'){
                                $("#div_alert").html("<div class='alert alert-danger'><b><i class='fa fa-times fa-fw'></i>&nbsp;User deactivated.</b></div>");
                                $("#div_alert").slideDown();
                                setTimeout(function(){
                                    $("#div_alert").slideUp();
                                },2500);
                            }
                    });
                }
                e.preventDefault();
            });
        });
    </script>
</html>