<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Badger's Recipe Page</title>
<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" media="print" type="text/css" href="print.css" />
</head>
<body>
<div id="wrapper">
<div id="header">
	<?php include "header.inc.php"; ?>
</div>
<div id="content">
	<div id="nav">
		<?php include "nav.inc.php"; ?>
	</div>
	
	<div id="main">
		<?php 
			if(!isset($_REQUEST['content']))
			{
				include "main.inc.php";
			}else{
				$content = $_REQUEST['content'];
				$nextpage = $content.".inc.php";
				include $nextpage;
			}
?>
	</div>
	<div id="news">
		<?php include "news.inc.php"; ?>
	</div>
	</div>
	<div id="footer">
	<?php include "footer.inc.php"; ?>
	</div>
</div>
</body>
</html>