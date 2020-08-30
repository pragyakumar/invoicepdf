<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'invoicedb');
if(isset($_POST['submit']))
{
	$InvoiceID=$_POST['InvoiceID'];
	$itemName=$_POST['itemName'];
	$amount=$_POST['amount'];
	$tax=$_POST['tax'];
	
$sql=mysqli_query($con,"insert into item(InvoiceID, itemName, amount, tax) values('$InvoiceID','$itemName','$amount','$tax')");
header('location:index.php');
}

?>
<!DOCTYPE html>
<html>
<body>

<h2>Add Client</h2>

<form class="form-horizontal row-fluid" name="insertproduct" method="post" enctype="multipart/form-data">
								
<div class="control-group">
<label class="control-label" for="basicinput">Invoice ID</label>
<div class="controls">
<input type="text"    name="InvoiceID"  placeholder="Enter Invoice ID" class="span8 tip" required>
</div>
</div>


<div class="control-group">
<label class="control-label" for="basicinput">Item Name</label>
<div class="controls">
<input type="text"    name="itemName"  placeholder="Enter  Item Name" class="span8 tip" required>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">Amount </label>
<div class="controls">
<input type="text"    name="amount"  placeholder="Enter amount" class="span8 tip" required>
</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">Tax</label>
<div class="controls">
<input type="text"    name="tax"  placeholder="Enter tax amount" class="span8 tip" required>
</div>
</div>










	<div class="control-group">
											<div class="controls">
												<button type="submit" name="submit" class="btn">SUBMIT</button>
											</div>
										</div>
									</form>



</body>
</html>
