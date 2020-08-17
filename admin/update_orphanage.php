<?php 
$id=$_GET['id'];
$sql=mysqli_query($con,"select * from orphanage_details where id='$id'");
$res=mysqli_fetch_assoc($sql);

extract($_REQUEST);
if(isset($update))
{
mysqli_query($con,"update orphanage_details set id='$id',no='$no',name='$name',details='$details',location='$location' where id='$id' ");
header('location:dashboard.php?option=orphanages');
}

?>

<form method="post" enctype="multipart/form-data">
<table class="table table-bordered">
	
	<tr>	
		<th>Orphanage ID</th>
		<td><input type="text"  name="id" value="<?php echo $res['id']; ?>"  class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Orphanage No</th>
		<td><input type="text" name="no" value="<?php echo $res['no']; ?>"  class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Name</th>
		<td><input type="text" name="name"  value="<?php echo $res['name']; ?>" class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Details</th>
		<td><textarea name="details"  class="form-control"><?php echo $res['details']; ?></textarea>
		</td>
	</tr>
    <tr>	
		<th>Location</th>
		<td><textarea name="location"  class="form-control"><?php echo $res['location']; ?></textarea>
		</td>
	</tr>
	
	<tr>
		<td colspan="2">
			<input type="submit" class="btn btn-primary" value="Update Orphanage Details" name="update"/>
		</td>
	</tr>
</table> 
</form>