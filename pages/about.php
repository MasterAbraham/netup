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
	<p>netUP Engine is a free open-sourced PHP-based <br>web engine to make dvelopment of small websites easier and <br>flexible. All websites you develop will be<br> crossplatform and optimized. netUP Engine has <br>also some security features, <br>so you can be sure - yor website <br>is under protection. <br>More about <a href="/?page=Features">Features</a></p>
</div>
<?php include $base_dir = __DIR__.'/modules/security.php';?>