<?php include "layouts/header.php"; ?>

<?php
  include "config.php";
  if($_POST)
	{
		$email = $_POST['Email'];
		$password = $_POST['Password'];
		
		$sql = "SELECT * FROM `Account` where Email = '".$email."' and Password = 'md5(".$password.")' ";
		$query =  mysqli_query($conn, $sql);
		if(mysqli_num_rows($query)>0)
		{
			$row = mysqli_fetch_assoc($query);
			session_start();
			$_SESSION['Name'] = $row['Name'];
			header('Location: home.php');
		}
		else
		{
			echo "<script> alert('Invalid Email or Password.'); </script>";
		}
	}
?>

<div class="container">
  <center><h2>Login form</h2></center></br>
  <form class="form-horizontal" method="post" action="">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
	  
      <div class="col-sm-10">
        <input type="email" class="form-control" id="Email" placeholder="Enter email" name="Email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="Password" placeholder="Enter password" name="Password">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Login</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
