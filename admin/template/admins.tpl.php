   
   
   <table id="admins">
  <caption>Administratori stranice</caption>
  <tr>
     <th>Username</th>
  </tr>
 
  <?php
	   //koliko kontam ovde nesto ne stima..pff
	   if(!empty($admins)): ;?>
	   
		<?php foreach($admins as $v): ?>
			<tr>
				<td><?=$v['username']?></td>
			</tr>
		<?php endforeach; ?>

	<?php endif;?>
 
  

</table>