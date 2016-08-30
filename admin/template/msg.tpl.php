<?php
<<<<<<< HEAD
=======

>>>>>>> 36a2ae9fee7ebb6becfe0a6e7f9fce81777a7776
$err=Msg::getErr();
Msg::clearErr();
?>

<?php if(!empty($err)): ?>
<div class="error" >
	<?php foreach($err as $v): ?>
	<?=$v?><br/>
	<?php endforeach; ?>
</div>


<?php endif;
<<<<<<< HEAD
=======

>>>>>>> 36a2ae9fee7ebb6becfe0a6e7f9fce81777a7776
$msg=Msg::getMsg();
Msg::clearMsg();
?>


<?php if(!empty ($msg)): ?>
<div class="msg">
<?php foreach($msg as $w):?>
<?=$w?><br/>
<?php endforeach; ?>
</div>


<<<<<<< HEAD
<?php endif;?>
=======
<?php endif;?>

>>>>>>> 36a2ae9fee7ebb6becfe0a6e7f9fce81777a7776
