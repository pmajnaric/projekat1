 <table id="admins">
  <caption>Administratori stranice</caption>
  <tr>
     <th>Username</th>
     <th>Edit/Delete</th>
  </tr>
 
  <?php
	   
	   if(!empty($admins)): ;?>
	   
		<?php foreach($admins as $v): ?>
			<tr>
				<td><?=$v['username']?></td>
				<td>	
				<a href='admins.php?action=edit&id="<?=$v['idadmin_users']?>"'>Edit</a> 
				<a href='admins.php?action=delete&id="<?=$v['idadmin_users']?>"'>Delete</a>
				
				</td>
			</tr>
		<?php endforeach; ?>

	<?php endif;?>
 
  
  

</table>


