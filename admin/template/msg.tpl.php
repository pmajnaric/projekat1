<?php

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

$msg=Msg::getMsg();
Msg::clearMsg();
?>


<?php if(!empty ($msg)): ?>
<div class="msg">
<?php foreach($msg as $w):?>
<?=$w?><br/>
<?php endforeach; ?>
</div>


<?php endif;?>

