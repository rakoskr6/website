<?php 
	$title = 'Kyle Rakos';
	include '../../../header.php';
?>

<body>
<div class="container">
  <h1 class = "text-center">Boiler Books</h1>
  <h4 class = "text-center">The ultimate expense and income tracking system for student organizations</h4>
  <ul class="nav nav-tabs">
    <li class="disabled disabledTab"><a href="newpurchase.php">Request Purchase</a></li>
    <li class="disabled disabledTab"><a href="#">Complete Purchase</a></li>
    <li class="disabled disabledTab"><a href="#">Approve Purchase</a></li>
    <li class="disabled disabledTab"><a href="#">View My Purchases</a></li>
	<li class="disabled disabledTab"><a href="#">View Committee Expenses</a></li>
	<li class="disabled disabledTab"><a href="#">Receive Donation</a></li>
  </ul>
</div>
   
    <!-- Page Content -->

	<form class="form-horizontal" action="newuserprocessing.php" method="post">
<fieldset>

<!-- Form Name -->
<legend></legend>

<!-- Select Basic -->

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="item">First Name</label>  
  <div class="col-md-4">
  <input id="first" name="first" type="text" placeholder="Mitch" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="reason">Last Name</label>  
  <div class="col-md-4">
  <input id="last" name="last" type="text" placeholder="Daniels" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="vendor">Email</label>  
  <div class="col-md-4">
  <input id="email" name="email" type="text" placeholder="president@purdue.edu " class="form-control input-md" required="">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cost">Address</label>  
  <div class="col-md-4">
  <input id="cost" name="cost" type="text" placeholder="610 Purdue Mall" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cost">City</label>  
  <div class="col-md-4">
  <input id="city" name="city" type="text" placeholder="West Lafayette"" class="form-control input-md" required="">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cost">State</label>  
  <div class="col-md-4">
  <input id="state" name="state" type="text" placeholder="IN" class="form-control input-md" required="">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cost">ZIP</label>  
  <div class="col-md-4">
  <input id="zip" name="zip" type="text" placeholder="47907" class="form-control input-md" required="">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cost">Certificate</label>  
  <div class="col-md-4">
  <input id="cert" name="cert" type="text" placeholder="Please upload your signed reimbursment certificate" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="cost">Username</label>  
  <div class="col-md-4">
  <input id="username" name="username" type="text" placeholder="mdaniels" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="cost">Password</label>  
  <div class="col-md-4">
  <input id="password1" name="password1" type="password" placeholder="*****" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="cost">Reenter Password</label>  
  <div class="col-md-4">
  <input id="password2" name="password2" type="password" placeholder="*****" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</div>

</fieldset>
</form>


		

	

<?php include '../../../smallfooter.php';?>
