
<table class="table table-bordered table-striped table-hover">
	<h1>Donation Details</h1><hr>
	<tr>
		<th>Sr No</th>
		<th>Name</th>
		<th>Email</th>
		<th>Mobile Number</th>
		<th>Address</th>
		<th>Amount</th>
		<th>Type</th>
	</tr>

<?php
$i=1;
$sql=mysqli_query($con,"select * from donation_details");
while($res=mysqli_fetch_assoc($sql))
{
$oid=$res['id'];

?>
<tr>
		<td><?php echo $i;$i++; ?></td>
		<td><?php echo $res['name']; ?></td>
		<td><?php echo $res['email']; ?></td>
		<td><?php echo $res['phone']; ?></td>
		<td><?php echo $res['address']; ?></td>
		<td><?php echo $res['money']; ?></td>
		<td><?php echo $res['payment']; ?></td>
	</td>
	</tr>
<?php
}

?>
</table>
