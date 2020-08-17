<script>
	function delOrph(id)
	{
		if(confirm("You want to delete this Orphanage from index?"))
		{
		window.location.href='delete_orphanage.php?id='+id;	
		}
	}
</script>
<table class="table table-bordered table-striped table-hover">
	<h1>Orphange Details</h1><hr>
	<tr>
	<td colspan="8"><a href="dashboard.php?option=add_orphanages" class="btn btn-success">Add New Orphanage</a></td>
	</tr>
	<tr style="height:40">
		<th>Orphanage Id</th>
		<th>Orphanage No</th>
		<th>Name</th>
		<th>Details</th>
		<th>Location</th>
		<th>Update</th>
		<th>Delete</th>
	</tr>
<?php 
$i=1;
$sql=mysqli_query($con,"select * from orphanage_details");
while($res=mysqli_fetch_assoc($sql))
{
$id=$res['id'];	
?>
<tr>
		<td><?php echo $res['id']; ?></td>
		<td><?php echo $res['no']; ?></td>
		<td><?php echo $res['name']; ?></td>
		<td><?php echo $res['details']; ?></td>
		<td><?php echo $res['location']; ?></td>

		<td><a href="dashboard.php?option=update_orphanage&id=<?php echo $id; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>

		
		<td><a href="#" onclick="delOrph('<?php echo $id; ?>')"><span class="glyphicon glyphicon-remove" style='color:red'></span></a></td>
	</tr>	
<?php 	
}
?>	
	
</table>