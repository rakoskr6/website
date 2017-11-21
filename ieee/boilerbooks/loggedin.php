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
<html>



<div class="container">
	<h1 class = "text-center"><a href="loggedin.php">Boiler Books</a></h1>
  <h4 class = "text-center">The ultimate expense and income tracking system for student organizations</h4>
  <ul class="nav nav-tabs">
    <li><a href="request/newpurchase.php">Request Purchase</a></li>
    <li><a href="completepurchase.php">Complete Purchase</a></li>
    <li><a href="approve/approvepurchase.php">Approve Purchase</a></li>
    <li><a href="viewmypurchases.php">View My Purchases</a></li>
	<li><a href="committeeexpenses.php">View Committee Expenses</a></li>
	<li><a href="donation.php">Receive Donation</a></li>
  </ul>
</div>

<div class = "container">
<h2>Welcome to Boiler Books!</h2>
<p>Welcome to IEEE's new expense and income tracking system. This will be used to keep track of all purchases for IEEE.
You should have access to the the tools that you need. If you think you should have access to something else send us an email!</p>
</div>


<div class="container">
	<div class = "row">
		<div class="col-md-1">
			<a class="btn btn-info" href = "user/changepassword.php" roll = "button">Change Password</a>
		</div>
		<div class="col-md-10">
			<p>.</p>
		</div>
		<div class="col-md-1">
			<a href = "user/signout.php" class="btn btn-info" roll="button">Sign Out</a>
		</div>
	</div>
</div>
</html>	
<?php 
	include '../../smallfooter.php';
?>