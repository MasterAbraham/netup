<?php
include '/config.php';
?>
<script>
	<?php echo('var styleurl = "./styles/" + "'.$style.'" + "/style.css";'); ?>
	document.write("<link rel = 'stylesheet' type = 'text/css' href = "+styleurl+" />");
</script>
<script>
	<?php echo('var styleurl = "./styles/" + "'.$style.'" + "/footer.css";'); ?>
	document.write("<link rel = 'stylesheet' type = 'text/css' href = "+styleurl+" />");
</script>


<footer class="footer" id="footer">
	<div id="copy" class = "copy">
		&copy; <?php echo($copyright); //Would you kindly not to earse copyrights! Please! I want people to know I made this engine ! Please, dont earse copyright! ?> | Powered by netUP Engine
		
	</div>
</footer>
<?php include $base_dir = __DIR__.'/modules/security.php';?>