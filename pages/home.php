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
	<h2><?php echo($pagename); ?></h2>
	<p>Hi! Welcome to netUp Engine!</p>
	<hr>
	<p>To edit settings - edit config.php</p>
	<p>To add/delete or edit pages - edit pages.php</p>
	<p>To edit this page - edit /pages/home.php<br>
	To edit header - open header.php<br>
	To edit footer - open footer.php
	</p>
	<p>Thanks for choosing netUP engine!</p>
</div>
<?php include $base_dir = __DIR__.'/modules/security.php';?>