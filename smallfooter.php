
	<footer>
	
		<div class="container">
			<div class="row">
				<?php 
				// Add something to footer if certain page
				if ($title == "Kyle's Projects") {
					echo "<div class='col-lg-6'>";
				}
				else {
					echo "<div class='col-lg-12'>";
				}
				?>
			
					<p class="copyright text-muted small">Copyright &copy; Kyle Rakos  <?php echo date("Y"); ?>. All Rights Reserved</p>

				<?php 
				// Add something to footer if certain page
				if ($title == "Kyle's Projects") {
					echo "</div>";
					echo "<div class='col-lg-6'>";
					echo "<p class='copyright text-muted small text-right'>Thanks to <a href='http://mattmolo.com/'>Matt Molo</a> for project page inspiration and code</p>";
				}
				?>


				</div>
			</div>
		</div>
	</footer>



</body>

</html>
