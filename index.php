<!doctype html>
<html lang="en">
<head>
    <?php 
 	include'includes/links.php';
 	?>
	<meta charset="utf-8">
	<title>Team Tokyo's Assignment 2</title>
	
</head>
<body>
	<!-- Include navigation bar -->
	 <div class=headerbox>
  		<header>
    		<h1>TEAM TOKYO</h1>
    		<span>CSC 174 Assignment 2</span>
  		</header>

  		<?php
  		include "includes/nav.php";
  		?>
  	</div>
  	<div class="container">	
  		<div class="slides">
  		<ul class="rslides">
		  <li><img src="images/charlie.jpg" alt=""></li>
		  <li><img src="images/masaru.jpg" alt=""></li>
		  <li><img src="images/valerie.jpg" alt=""></li>
		</ul>
		</div>

  		<div class="flex-display">
	  		<div class=intro1>
	  			<h2>Charlie Lu</h2>
	  			<span><em>Coder</em></span>
	  			<p>I choose to be the coder for the first assignment because it was my least confident role.</p>
	  		</div>
	  		<div class=intro2>
	  			<h2>Masaru Fujimaki</h2>
	  			<span><em>Information Architect</em></span>
	  			<p>Based on the experience that I had in the previous internship project, I believe that I am able to perform well as an information architect.</p>
	  		</div>
	  		<div class=intro3>
	  			<h2>Valerie Wang</h2>
	  			<span><em>Design Artist</em></span>
	  			<p>I choose to become a Design Artist not only to make our website pretty, but to help the team make smarter decisions.</p>
	  		</div>
	  	</div>
  	</div>
  
<?php
    include 'includes/footer.php';
    include 'includes/scripts.php';
    ?>

</body>
</html>