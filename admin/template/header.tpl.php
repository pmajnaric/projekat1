<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
		<title><?= App::getTitle()?></title>
		<link rel="icon"  href="../gfx/planeta-1.ico"/>
		<!--slika za browswer moze biti max 24px kockasta ili ikona(.ico)-->
<?php
	
		foreach(App::getCss() as $key=>$val)
		{
			echo"<link rel=\"stylesheet\" type=\"text/css\" href=\"css/{$val}.css?".time()."\">";
		}
?>

</head>
<body>