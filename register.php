<?php include "layouts/header.php"; ?>

<div class="container">

  <center><h2>Registration form</h2></center></br>
  <form class="form-horizontal" method="post" action="registerProcess.php">
    <div class="form-group">
      <label class="control-label col-sm-2 col-sm-offset-2" for="Name">Name:</label>
	  
      <div class="col-sm-5">
        <input type="text" class="form-control" id="Name" placeholder="Enter name" name="Name" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2 col-sm-offset-2" for="Email">Email:</label>
	  
      <div class="col-sm-5">
        <input type="email" class="form-control" id="Email" placeholder="Enter email" name="Email" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2 col-sm-offset-2" for="Password">Password:</label>
      <div class="col-sm-5">          
        <input type="password" class="form-control" id="Password" placeholder="Enter password" name="Password" required>
      </div>
    </div>
	 <div class="form-group">
      <label class="control-label col-sm-2 col-sm-offset-2" for="PhoneNumber">Number:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="PhoneNumber" placeholder="Enter a phone number" name="PhoneNumber" required>
      </div>
    </div>
	 <div class="form-group">
      <label class="control-label col-sm-2 col-sm-offset-2" for="Address">Address:</label>
	  
      <div class="col-sm-5">
        <textarea class="form-control" id="Address" placeholder="Enter address" name="Address" required></textarea>
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-4 col-sm-8">
        <button type="submit" class="btn btn-primary">Sign Up</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
