<?php 
/* Database connection */
require 'class/connection.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  		<title>Results</title>
    	<meta name="description" content="Content developed to help service desk.">
  <!--  	<link rel="stylesheet" href="CSS/main.css?v=<?php echo filemtime('CSS/main.css'); ?>"> -->
        <link rel="stylesheet" href="CSS/table_fields.css?v=<?php echo filemtime('CSS/table_fields.css'); ?>">
		<script type="text/javascript" language="javascript" src="JavaScript/script.js?v=<?php echo filemtime('JavaScript/script.js'); ?>"></script> 

	</head>

	<body>
  		<header>			
			<h4>
				<p>Results</p>
			</h4>	
		</header>		
		
  		<section>
			<?php 
			
			//Query located on connection.php 			
			if ( $result->num_rows == 0 ){ // User doesn't exist
    			$_SESSION['message'] = "There is no available content!";
				//header("location: error.php");
			}
			else { 				
   				while ($row = $result->fetch_assoc()) {	
					echo('
					<nav class="container">
						<div class="wrapper">
							<h3>'.$row["link_ct"].'</h3>
							<p>'.$row["content_ct"].'</p>
						</div>
					</nav>
					');
						
    			}
			}
			?>
		</section> <!-- /form -->
	</body>
</html>
