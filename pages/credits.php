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
	<p>Hi! My name is Maxim Dikov, I am 15 years old <br>and I live in Vienna. I began to make programs when I was 9. First, I wrote<br> some small games on scratch, but then, I began to learn Visual Basic and I liked it. I was <br>very interested in programming. I also <br>learned c# and tried to make <br>some applications using C++, but it was too hard. When I was 11<br>, I began to make small websites and web applications. Simultaneously <br>I began to work with linux and after some years, <br>I was abe to build linux server systems. When I was 13 I made my first commercial software and sold <br>it to a small company. Last years I made <br>some small websites, but some time ago I realized - I want to make Engines. <br>My first experience was a C# compiler - <a href="https://sourceforge.net/projects/petacompiler/">Peta Compiler</a>.<br> It was too<br> complicated to create game engines, but yesterday I understood - it is<br> much easier to create a web engines - like <br>phpBB or wordpress, so I immediately began to work.<br> Now, I am ready with the first release. Hopefully, you like my project! <br>Languages I speak: German, English, Russian and a bit French.<br> Maxim Dikov 2019.</p>

</div>
<?php include $base_dir = __DIR__.'/modules/security.php';?>