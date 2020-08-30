<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'invoicedb');
if(isset($_POST['submit']))
{
	$clientID=$_POST['clientID'];
	$name=$_POST['name'];
	$company=$_POST['company'];
	$address=$_POST['address'];
	$phone=$_POST['phone'];
$sql=mysqli_query($con,"insert into clients(clientID, name, company, address, phone) values('$clientID','$name','$company','$address','$phone')");
header('location:additem.php');
}

?>
<!DOCTYPE html>
<html>
<body>

<h2>Add Client</h2>

<form class="form-horizontal row-fluid" name="insertproduct" method="post" enctype="multipart/form-data">
								
<div class="control-group">
<label class="control-label" for="basicinput">Client ID</label>
<div class="controls">
<input type="text"    name="clientID"  placeholder="Enter Client ID" class="span8 tip" required>
</div>
</div>


<div class="control-group">
<label class="control-label" for="basicinput">Name</label>
<div class="controls">
<input type="text"    name="name"  placeholder="Enter  Name" class="span8 tip" required>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">Company</label>
<div class="controls">
<input type="text"    name="company"  placeholder="Enter Company" class="span8 tip" required>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">Address</label>
<div class="controls">
<input type="text"    name="address"  placeholder="Enter Address" class="span8 tip" required>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">Phone Number</label>
<div class="controls">
<input type="text"    name="phone"  placeholder="Enter Phone Number" class="span8 tip" required>
</div>
</div>









	<div class="control-group">
											<div class="controls">
												<button type="submit" name="submit" class="btn">NEXT</button>
											</div>
										</div>
									</form>



</body>
</html>
