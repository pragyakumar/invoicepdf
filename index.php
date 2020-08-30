<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'invoicedb');
?>
<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
h1 {text-align: center;}
h3 {text-align: center;}
tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h1>Invoice Generator</h1>
<h3><a href="addclient.php">ADD</a></h3>  

<table>
  <thead>
										<tr>
											
											
											<th> Invoice Id</th>
											<th>Client ID</th>
											<th>Action</th>
											
											
										
										</tr>
									</thead>
									
									
  <tbody>
<?php 

$query=mysqli_query($con,"select invoiceID, clientID from invoice ");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>										
										<tr>
										
											<td><?php echo htmlentities($row['invoiceID']);?></td>
											<td><?php echo htmlentities($row['clientID']);?></td>
									
						
											
										     <td><a href="invoice-db.php?invoiceID=<?php echo htmlentities($row['invoiceID']);?>">Invoice PDF</a>
											
											</td>
											</tr>

<?php }?>
										</tbody>
								</table>

</body>
</html>
