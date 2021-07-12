<table class="table table-bordered table-hover" align="center" width="900px" bgcolor="#3897f0">
	
		<tr bgcolor="#3897f0" border="1">
			<th>S.N</th>
			<th>Content</th>
			<th>Author</th>
			<th>Date</th>
			<th>Delete</th>
		</tr>
		<?php 
		include("includes/connection.php");
		$sel_posts = "select * from posts ORDER by 1 DESC";
		$run_posts = mysqli_query($con,$sel_posts);
		
		$i=0; 
		while($row_posts = mysqli_fetch_array($run_posts)){
			
			$post_id = $row_posts['post_id']; 
			$user_id = $row_posts['user_id'];
			$post_content = $row_posts['post_content'];
			$post_date = $row_posts['post_date'];
			$i++;
			
			$sel_user = "select * from users where user_id='$user_id'"; 
			$run_user= mysqli_query($con,$sel_user); 
			
			while($row_users= mysqli_fetch_array($run_user)){
			
			$user_name = $row_users['user_name'];
			
		?>
		<tr align="center">
			<td><?php echo $i; ?></td>
			<td><?php echo $post_content; ?></td>
			<td><?php echo $user_name; ?></td>
			<td><?php echo $post_date; ?></td>
			<td><a href="index.php?view_posts&delete=<?php echo $post_id;?>">Delete</a></td>
		</tr>
		<?php } }?>

</table>
				
<?php 
	
	if(isset($_GET['delete'])){
	
	$delete_id = $_GET['delete']; 
	
	$delete = "delete from posts where post_id='$delete_id'"; 
	$run_del = mysqli_query($con,$delete); 
	
		if($run_del){
		
		echo "<script>alert('Post has been Deleted!')</script>";
		echo "<script>window.open('index.php?view_posts','_self')</script>";
		}
	
	}


?>