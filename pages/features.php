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
	<p>here are some features  and reasons, why <br>you  should use netUP engine!</p>
	<hr>

	<p>Url abstraction - Visitors will never see a real<br> path and file extension of a page.</p>
	<p>Flexible settings, so youcan <br>esely customize a website.</p>
	<p>You can easely add/delete <br>or edit pages with just one File</p>
	<p>While you are visiting all this pages <br>- you are actually staying on index page. <br>It means you browser needs less resources, <br>than on a common website.</p>
	<p>This engine is full open-sourced, so you are<br> allowed to modify delete and customize everything you want.</p>
		<p>You dont need any permission <br>or license to use this engine.</p>


</div>
<?php include $base_dir = __DIR__.'/modules/security.php';?>