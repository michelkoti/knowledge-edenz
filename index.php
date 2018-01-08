<?php 
require 'class/connection.php';
session_start();

?>

<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Knowledge base</title>
        <meta name="description" content="Content developed to help service desk.">
        <link rel="stylesheet" href="CSS/main.css?v=<?php echo filemtime('CSS/main.css'); ?>">
        <link rel="stylesheet" href="CSS/table_fields.css?v=<?php echo filemtime('CSS/table_fields.css'); ?>">
		<link rel="shortcut icon" href="Images/knowledge.ico" type="image/x-ico">
        <script type="text/javascript" language="javascript" src="JavaScript/script.js?v=<?php echo filemtime('JavaScript/script.js'); ?>"></script> 
    </head>
    <body>

		<header class="container dark">
			<div class="wrapper" id="top_div" data-position="fixed">
				<div id="top_left">
			<!--		
				Colocar aqui o nome do usuário logado
				<p>Michel Koti</p>
			-->	
				</div>
				<div id="top_right">
					<a href="insert.php" target="frame_results"><input id="insert_button" type="button" name="insert" value="Insert" /></a>
				</div>
			</div>
		</header>
		<section class="container black">
			<article >
				<div id="logo_left">
					<a href="index.php" target="_self"><img alt="Knowledge base" src="Images/knowledge_short3.jpg" /></a>
				</div>
				<div id="logo_right">
					<form id="frm_search" action="links.php" method="post" target="frame_results">
						<input id="textstyle" type="text" name="textbox" placeholder="Search" autocomplete="off" class="search" onkeypress="links.php" />
					</form>
				</div>
				<div id="clear">
				</div>
			</article>
		</section>	
		<nav class="container black">
			<div class="wrapper">
				<ul>
					<li><a href="links.php?id=0" target="frame_results">All</a></li>
					<li><a href="links.php?id=1" target="frame_results">Infrastructure</a></li>
					<li><a href="links.php?id=2" target="frame_results">Systems</a></li>
					<li><a href="links.php?id=4" target="frame_results">Database</a></li>
					<li><a href="links.php?id=3" target="frame_results">Security</a></li>

				</ul>
			</div>
		</nav>
		<section class="wrapper" id="outerbox" method="post">
			<div id="sliderbox">
				<div id="slider_image">
					<a href="links.php?id=1" id="images" target="frame_results"><img alt="Infrastructure" src="Images/infrastructure4.png"/></a>
					<a href="links.php?id=2" id="images" target="frame_results"><img alt="Systems" src="Images/systems4.png"/></a>
					<a href="links.php?id=3" id="images" target="frame_results"><img alt="Security" src="Images/security5.png"/></a>
					<a href="links.php?id=4" id="images" target="frame_results"><img alt="Database" src="Images/database4.png"/></a>
				</div>
			</div>
		</section>
		<iframe name="frame_results" id="frame_results" class="container" src="welcome.php" allowtransparency="false"></iframe>
		<nav class="container shadow">
			<div class="wrapper">
				<ul>
					<li><a href="#">About</a></li>
					<li><a href="#">Find Us</a></li>
					<li><a href="#">Contact</a></li>
					<li><a href="#">FAQ</a></li>
					<li><a href="references.php?project=knowledge" target="frame_results">References</a></li>

				</ul>
			</div>
		</nav>
		
    <footer align="center">
        <p>EDENZ College 2017<br>IT Software Development Course - Level 7</p>
    </footer>

    </body>
</html>
