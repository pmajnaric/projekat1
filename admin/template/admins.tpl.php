<?php
 $admin_users= new Admin_users();
?>

   <table id="admins">
  <caption>Administratori stranice</caption>
  <tr>
    <th>User_id</th>
    <th>Username</th>
    <th>Password</th>
  </tr>
 
  <?php if($admin_users->select())
		{
   			if(!empty($k)): ?>

			<tr>
				<td><?php foreach($k as $v): ?>
					<?=$v?><br/>
					<?php endforeach; ?>
				</td>
			</tr>

			<?php endif;
		}
	?>
 
  

</table>