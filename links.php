<?php 
require 'class/connection.php';

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  		<title>Search</title>
    	<meta name="description" content="Content developed to help service desk.">

<!--		<link rel="stylesheet" href="CSS/main.css?v=<?php echo filemtime('CSS/main.css'); ?>"> -->
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
			
			
			if ( $result->num_rows == 0 ){ // User doesn't exist
    			echo('Your search <b>'.$textbox.'</b> returned no results!');
			//	$_SESSION['message'] = "There is no available content!"; 				
			}
			else { 				
	    		// fetch associative array 	
    			while ($row = $result->fetch_assoc()) { 
 					echo('<li class="tab"><a href="results.php?id_ct='.$row["id_ct"].'">'.$row["link_ct"].'</a></li>');
					//header("location: results.php");	
    			}
			}

			
			?>
		</section>
	</body>
 
</html>

