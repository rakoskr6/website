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
	<li><a href="donation.php">Receive Donation</a></li>
  </ul>
</div>

<div class = "container">
<h2>Coming soon!</h2>
</div>



		
<?php 
	include '../../smallfooter.php';
?>