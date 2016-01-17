<?php
require '../session.php';
if($_SESSION['user_type']!=='Employee'){
header("location:../index.php"); } 
    include '../includes/style-link.php';
    include '../includes/header.php';
?>
<div class="container-fluid text-center">
    <div class="row content" id="content">
        <div class="col-sm-2 sidenav">
            <aside class="well">
             <a href="employee.php"> <button  class="btn btn-primary btn-md" type="button">HOME</button></a> 
                <ul>
                    <li><a href="add-buyer.php">Add Buyer</a></li>
                    <li><a href="add-order.php">Add Order</a></li>
                    <li><a href="update-order.php">Update Order</a></li>
                    <li><a href="order-list.php">Order List</a></li>
                    <li><a href="add-bill.php">ADD Bill</a></li>
                    <li><a href="update-bill.php">Update Bill</a></li>
                    <li><a href="delivery-status.php">ADD Delivery Status</a></li>
                    <li><a href="update-del-status.php">Update Delivery Status</a></li>
                    <li><a href="deliver-list.php">View Delivery Status</a></li>
                </ul>
            </aside>
        </div>
        <div class="col-sm-8 text-left " id="add_order">
                 <h2 class="well text-center"><b>ADD Order Details:</b></h2><br>
                  <form class="form-horizontal well" role="form" method="POST" action="another-order.php" enctype="multipart/form-data">
                                  <div class="form-group">
                                    <label class="control-label col-sm-2" for="">Order Code:</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="order_code" placeholder="Enter Order Code" name="order_code">
                                    </div>
                                  </div>
                                  
                                  <div class="form-group">
                                    <label class="control-label col-sm-2" for="">Buyer Name</label>
                                    <div class="col-sm-10"> 
                                      <input type="text" class="form-control" id="" name="buyer_name" placeholder="Enter Buyer Name">
                                    </div>
                                  </div>
                                  
                                  <div class="form-group">
                                    <label class="control-label col-sm-2" for="">Company</label>
                                    <div class="col-sm-10"> 
                                      <input type="text" class="form-control" id="" name="company" placeholder="Enter Company Name">
                                    </div>
                                  </div>
                               <!--   
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="">Sample Design</label>
                                    <div class="col-sm-10"> 
                                      <input type="file" class="form-control" id="" name="image">
                                 </div>
                                 
                              </div>
                                -->  
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="">Apporved By</label>
                                    <div class="col-sm-10"> 
                                      <input type="text" class="form-control" id="" name="approved_by" placeholder="Enter The Name Who Approved Design">
                                    </div>
                                  </div>
                                 <div class="form-group">
                                    <label class="control-label col-sm-2" for="">Quantity</label>
                                    <div class="col-sm-10"> 
                                      <input type="text" class="form-control" id="" name="quantity" placeholder="Enter Quantity">
                                    </div>
                                  </div>
                                    <div class="form-group">
                                    <label class="control-label col-sm-2" for="">Rate</label>
                                    <div class="col-sm-10"> 
                                      <input type="text" class="form-control" id="" name="rate" placeholder="Enter Quantity">
                                    </div>
                                  </div>
                                     <div class="form-group">
                                    <label class="control-label col-sm-2" for="">Order Date</label>
                                    <div class="col-sm-10"> 
                                      <input type="date" class="form-control" id="" name="order_date" placeholder="Enter Order Date">
                                    </div>
                                  </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="">Delivery Date</label>
                                    <div class="col-sm-10"> 
                                      <input type="date" class="form-control" id="" name="delivery_date" >
                                    </div>
                                  </div>
                                 <div class="form-group">
                                    <label class="control-label col-sm-2" for="">Contact Number</label>
                                    <div class="col-sm-10"> 
                                      <input type="text" class="form-control" id="" name="phone"  placeholder="Enter Buyer Phone Number">
                                    </div>
                                  </div>
                                  <div class="form-group"> 
                                    <div class="col-sm-offset-2 col-sm-10">
                                         <input type="submit" name="submit" value="Submit" method="post">
                                    </div>
                                  </div>
                                  
                 </form>          
        </div>
        <div class="col-sm-2 sidenav">
            <div class="well">
                <h2 id="welcome">
                    welcome: <br> <br> <i> <?php echo $login_session .' As an '. $login_type; ?></i> <br>
                    <br><b id="logout"><a href="../logout.php">Logout</a></b>
                </h2>
            </div>
        </div>
    </div>
</div>
<?php include '../includes/footer.php'; ?>


<script type="text/javascript">

    $(document).ready(function() {

    $('#fileForm')
        .bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },


            fields: {
            image: {
                validators: {
                                 file: {
                                           extension: 'jpeg,png',
                                           type: 'image/jpeg,image/png',
                                           maxSize: 100 * 100,   
                                           message: 'The selected file is not valid'
                                      }
                            }
                   }
                 }

        })
        .on('success.form.bv', function(e) {
            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);


            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {

                  if(result=="success")
              {
                alert(result);

              }
              else
              {
                alert(result);

              }

            }, 'json');


        });



       });
 </script>