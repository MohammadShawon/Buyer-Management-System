<?php
//include('session.php');
//include 'style-link.php';
?>
<div class="container">
    <div class="row">
       <div class="col-lg-2 left">
		           <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><b> Menu</b></a> 
		        </div>
        <div class="col-lg-10">
                                
                        <div id="wrapper">

                            <!-- Sidebar -->
                            <div id="sidebar-wrapper">
                                <ul class="sidebar-nav">
                                    <li class="sidebar-brand">
                                        <a href="#">
                                            Buyer Management
                                        </a>
                                    </li>
                                    <li>
                                       
                                        <a value="Employee" href="logout.php">Admin</a>
                                    </li>
                                    <li>
                                        <a href="#">Employe List</a>
                                    </li>
                                    <li>
                                        <a href="#">Buyer List</a>
                                    </li>
                                    <li>
                                        <a href="#">Order</a>
                                    </li>
                                    <li>
                                        <a href="#">Production</a>
                                    </li>
                                    <li>
                                        <a href="#">Delivery</a>
                                    </li>
                                    <li>
                                        <a href="#">Monthly Production</a>
                                    </li>
                                </ul>
                            </div>
                         </div>
                 
                    
            <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                         
                             <aside class="right">
                                  <h2 id="welcome">
                                     Welcome : <b><?php echo nl2br("\n".$login_session." Works \n as an\n".$login_type,false);?></b> 
                                  </h2>
                                    <b id="logout"><a class="btn btn-default" href="../logout.php">Log Out</a></b>
                               </aside> 
                     
                    </div>
                    <div class="col-lg-8">
                        
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>


               



<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="../js/bootstrap.min.js" type="text/javascript"></script>
<script src="../js/jquery.js" type="text/javascript"></script>
<script >
        $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>



 