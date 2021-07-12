<table class="table table-bordered table-hover" align="center" width="900px" bgcolor="#3897f0">
	
		<tr bgcolor="#3897f0" border="1">
			<th>S.N</th>
			<th>Name</th>
			<th>Profile</th>
			<th>Country</th>
			<th>Gender</th>
			<th>Delete</th>
		</tr>
		<?php 
		include("includes/connection.php");
		$sel_users = "select * from users ORDER by 1 DESC";
		$run_users = mysqli_query($con,$sel_users);
		
		$i=0; 
		while($row_users = mysqli_fetch_array($run_users)){
			
			$user_id = $row_users['user_id'];
			$user_name = $row_users['user_name'];
			$user_image= $row_users['user_image'];
			$user_country = $row_users['user_country'];
			$user_gender = $row_users['user_gender'];
			$user_reg_date = $row_users['user_reg_date'];
			$i++;
		?>
		<tr align="center">
			<td><?php echo $i; ?></td>
			<td><?php echo $user_name; ?></td>
			<td><img src="../users/<?php echo $user_image;?>" width='50' height='50'/></td>
			<td><?php echo $user_country; ?></td>
			<td><?php echo $user_gender; ?></td>
			<td><a href="delete_user.php?delete=<?php echo $user_id;?>">Delete</a></td>
		</tr>
		<?php } ?>

</table>
