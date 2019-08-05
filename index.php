<?php
$accesskey = '123';
include './config.php';
include './pages.php';
?>
<script>
	<?php echo('var styleurl = "./styles/" + "'.$style.'" + "/style.css";'); ?>
	document.write("<link rel = 'stylesheet' type = 'text/css' href = "+styleurl+" />");
</script>

<?php
if($header == "true"){
include './objects/header.php';
}
?>

<?php
$page = $_GET['page'];
$pagetoload = $notfound;


foreach($pages AS $pagename => $pageurl) {
	//$attempts ++;
	if (!isset($page)) {
  	  header("Location: /?page=Home");
	}
	
	if($page == $pagename){

			$pagetoload = "./pages/".$pageurl;
		
	}
	if(is_array ($pageurl)){
      foreach($pageurl AS $upagename => $upageurl) {
        	if($page == $upagename){

			$pagetoload = "./pages/".$upageurl;
		
		}
      }
    }


}
include $pagetoload;

?>

<?php
if($footer == "true"){
include './objects/footer.php';
}
?>
<style>
*{
	font-family: 'Arial';
}
</style>