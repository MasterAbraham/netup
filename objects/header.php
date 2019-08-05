<?php
include '/config.php';
?>
<script>
	<?php echo('var styleurl = "./styles/" + "'.$style.'" + "/style.css";'); ?>
	document.write("<link rel = 'stylesheet' type = 'text/css' href = "+styleurl+" />");
</script>
<script>
	<?php echo('var styleurl = "./styles/" + "'.$style.'" + "/header.css";'); ?>
	document.write("<link rel = 'stylesheet' type = 'text/css' href = "+styleurl+" />");
</script>

 <?php

foreach($pages AS $pagename => $pageurl) {

    if(is_array ($pageurl)){
      echo("<div class='dropdown'><button class='dropbtn'>".$pagename."</button><div class='dropdown-content'>");
      foreach($pageurl AS $upagename => $upageurl) {
        echo "<a href='/?page=".$upagename."'>".$upagename."</a>";
      }
      echo"</div></div>";
    }else{
    echo("<a href='/?page=".$pagename."'><div class='dropdown'><button class='dropbtn' >".$pagename."</button></div></a>");
    }
}
?> 
<div class="header" id="header">
	<div id = "logo" class="logo">
		<h2><?php echo($name);?></h2>
	</div>
</div>
<?php include __DIR__.'/modules/security.php';?>