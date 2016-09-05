<?php

 //$admin_users= new Admin_users();
 //$k[]=$admin_users->selectAdmin();
 //print_r($k);
$k[]=App::DB()->select("*","admin_users","");
//print_r($k);
?>
   
   
   <table id="admins">
  <caption>Administratori stranice</caption>
  <tr>
    <th>User_id</th>
    <th>Username</th>
    <th>Password</th>
  </tr>
 
  <?php
	   //koliko kontam ovde nesto ne stima..pff
	   if(!empty($k)): ?>
			<tr>
				<td><?php foreach($k as $v):print_r($v); ?>
					<?=$v?><br/>
					<?php endforeach; ?>
				</td>
				
			</tr>

	<?php endif;?>
 
  

</table>