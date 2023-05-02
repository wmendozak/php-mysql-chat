<?php 
	session_start();
	if(isset($_SESSION['Name']))
	{
		include "layouts/header2.php"; 
		include "config.php"; 
		
		$sql="SELECT * FROM `Chat`";

		$query = mysqli_query($conn,$sql);
?>

<div class="container">
  <center><h2>Welcome <span style="color:#dd7ff3;"><?php echo $_SESSION['Name']; ?> !</span></h2>
	<label>Join the chat</label>
  </center></br>
  <div class="display-chat">
<?php
	if(mysqli_num_rows($query)>0)
	{
		while($row= mysqli_fetch_assoc($query))	
		{
?>
		<div class="message">
			<p>
				<span><?php echo $row['Name']; ?> :</span>
				<?php echo $row['Message']; ?>
			</p>
		</div>
<?php
		}
	}
	else
	{
?>
<div class="message">
			<p>
				No previous chat available.
			</p>
</div>
<?php
	} 
?>

  </div>
  <form class="form-horizontal" method="post" action="chatProcess.php">
    <div class="form-group">
      <div class="col-sm-10">          
        <textarea name="Message" class="form-control" placeholder="Type your message here..."></textarea>
      </div>
	         
      <div class="col-sm-2">
        <button type="submit" class="btn btn-primary">Send</button>
      </div>

    </div>
  </form>
</div>

</body>
</html>
<?php
	}
	else
	{
		header('location:index.php');
	}
?>