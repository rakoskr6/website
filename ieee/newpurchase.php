<?php 
	$title = 'Kyle Rakos';
	include '../header.php';
?>


   
    <!-- Page Content -->

	<form class="form-horizontal" action="newpurchaseprocessing.php" method="post">>
<fieldset>

<!-- Form Name -->
<legend>IEEE New Purchase</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="item">Item Being Purchased</label>  
  <div class="col-md-4">
  <input id="item" name="item" type="text" placeholder="Resistors, screws, etc." class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="reason">Reason Being Purchased</label>  
  <div class="col-md-4">
  <input id="reason" name="reason" type="text" placeholder="For testing, building claw, etc." class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="vendor">Vendor</label>  
  <div class="col-md-4">
  <input id="vendor" name="vendor" type="text" placeholder="McMaster, Digikey, etc." class="form-control input-md" required="">
    
  </div>
</div>

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

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="cost">Cost</label>  
  <div class="col-md-4">
  <input id="cost" name="cost" type="text" placeholder="$156.56" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="comments">Comments</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="comments" name="comments"></textarea>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="category">Category</label>
  <div class="col-md-4">
    <select id="category" name="category" class="form-control">
      <option value="Electrical">Electrical</option>
      <option value="Mechanical">Mechanical</option>
      <option value="Software">Software</option>
    </select>
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


		

	

    </div>
    <!-- /.banner -->

    <!-- Footer -->
    <footer>
	
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <p class="copyright text-muted small">Copyright &copy; Kyle Rakos 2015. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/js/bootstrap.min.js"></script>

<?php include '../../smallfooter.php';?>

</html>
