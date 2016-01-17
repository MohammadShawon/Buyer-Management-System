<?php
include('login.php'); // Includes Login Script

//if(isset($_SESSION['login_user'])){
//header("location: home.php");
//}

include 'includes/header.php';
include 'includes/style-link.php';
?>


    <div class="login_area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="login_form">
						<h2>LOGIN</h2>
						<form action="" method="POST" id="logform">
							UserName: <input type="text" name="username" placeholder="UserName"><br>
							PassWord: <input type="password" name="password" placeholder="Password"><br>
							<select name="type" id="type">
								<option value="Admin" name="">Admin</option>
								<option value="Employee" name="">Employee</option>
							</select>
							 <button type="submit" name="login"  form="logform">Go</button> <br>
								<span style="font-size:15px;color:red" ><?php echo $error; ?></span>
						</form>
				   </div>
					
				</div>
			</div>
		</div>
		
	</div>
	
	
	<?php
	include 'includes/footer.php';
	
	?>
	
