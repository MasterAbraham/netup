<?php
include './config.php';
$pagename = $_GET['page'];
?>
<script>
	<?php echo('var styleurl = "./styles/" + "'.$style.'" + "/pagestyles/home.css";'); ?>
	document.write("<link rel = 'stylesheet' type = 'text/css' href = "+styleurl+" />");
</script>
<title><?php echo($name); ?> - <?php echo($pagename); ?></title>
<div class="page" id="page">
	<h2>Sorrry</h2>
	<p>This page does<br>not exist...</p>
	</p>
</div>
<?php include $base_dir = __DIR__.'/modules/security.php';?>