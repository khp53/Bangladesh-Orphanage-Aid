<?php 
if(isset($add))
{
	$sql=mysqli_query($con,"select * from orphanage_details where id='$id'");
	if(mysqli_num_rows($sql))
	{
	echo "This painting has been already added";	
	}		
	else
	{	
	mysqli_query($con,"insert into orphanage_details values('$id','$no','$name','$details','$location')");	
	echo "Orphanage added successfully";
	}
}
?>

<form method="post" enctype="multipart/form-data">
<table class="table table-bordered">
	
	<tr>	
		<th>Orphanage id</th>
		<td><input type="text" name="id"  class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Orphanage no</th>
		<td><input type="text" name="no"  class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Name</th>
		<td><input type="text" name="name"  class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Details</th>
		<td><textarea name="details"  class="form-control"></textarea>
		</td>
	</tr>
	
	<tr>	
		<th>Location</th>
		<td><input type="text" name="location"  class="form-control"/>
		</td>
	</tr>
	
	<tr>
		<td colspan="2">
			<input type="submit" class="btn btn-primary" value="Add Orphanage" name="add"/>
		</td>
	</tr>
</table> 
</form>