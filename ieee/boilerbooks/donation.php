<?php 
	session_start();
	if (!isset($_SESSION['user']))
	{
		header("Location: index.php");
		die();
	}
?>
<?php 
	$title = 'Kyle Rakos';
	include '../../header.php';
?>

<div class="container">
	<h1 class = "text-center"><a href="loggedin.php">Boiler Books</a></h1>
  <h4 class = "text-center">The ultimate expense and income tracking system for student organizations</h4>
  <ul class="nav nav-tabs">
    <li><a href="request/newpurchase.php">Request Purchase</a></li>
    <li><a href="completepurchase.php">Complete Purchase</a></li>
    <li><a href="approve/approvepurchase.php">Approve Purchase</a></li>
    <li><a href="viewmypurchases.php">View My Purchases</a></li>
	<li><a href="committeeexpenses.php">View Committee Expenses</a></li>
	<li class="active"><a href="donation.php">Receive Donation</a></li>
  </ul>
</div>


	<form class="form-horizontal" action="donationprocessing.php" method="post">>
<fieldset>

<!-- Form Name -->
<legend></legend>

<!-- Text input-->
<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Committee">Committee</label>
  <div class="col-md-4">
    <select id="committee" name="committee" class="form-control">
      <option value="Aerial Robotics">Aerial Robotics</option>
      <option value="Computer Society">Computer Society</option>
      <option value="EMBS">EMBS</option>
      <option value="Learning">Learning</option>
      <option value="Racing">Racing</option>
      <option value="ROV">ROV</option>
      <option value="Rocket">Rocket</option>
    </select>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="item">Source</label>  
  <div class="col-md-4">
  <input id="source" name="source" type="text" placeholder="Provost, PESC, Northrop, etc." class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="reason">Amount</label>  
  <div class="col-md-4">
  <input id="amount" name="amount" type="text" placeholder="$1500.00" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="vendor">Item</label>  
  <div class="col-md-4">
  <input id="vendor" name="vendor" type="text" placeholder="If donation list item" class="form-control input-md">
    
  </div>
</div>




<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="category">Type</label>
  <div class="col-md-4">
    <select id="category" name="category" class="form-control">
      <option value="BOSO">BOSO</option>
      <option value="Cash">Cash</option>
      <option value="Discount">Discount</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="category">Status</label>
  <div class="col-md-4">
    <select id="category" name="category" class="form-control">
      <option value="Received">Received</option>
      <option value="Expected">Expected</option>
    </select>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="comments">Comments</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="comments" name="comments"></textarea>
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


		
<?php 
	include '../../smallfooter.php';
?>