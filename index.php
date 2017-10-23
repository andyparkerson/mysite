<?php
	setlocale(LC_MONETARY, 'en_US');
?>
<html>
	<head>
		<link rel="stylesheet" href="mysite.css">
	</head>
	<body>
		<div id='box'> 
			<div class='rectangle'></div>
			<div class='value'><?php echo '$ ' . number_format(12845.14, 2) ?></div>
		</div>
	</body>
</head>