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
   <!-- 
		<link rel="stylesheet" href="CSS/main.css?v=<?php echo filemtime('CSS/main.css'); ?>">
   -->
		<link rel="stylesheet" href="CSS/table_fields.css?v=<?php echo filemtime('CSS/table_fields.css'); ?>">		
    	<script type="text/javascript" language="javascript" src="JavaScript/script.js?v=<?php echo filemtime('JavaScript/script.js'); ?>"></script> 

	</head>
	
	<body>
  		<header>
			<h4>   
				<p>References</p>
			</h4>	
		</header>		
		<section class="container">
			<article >				
			<?php 
			
			if ( $result->num_rows == 0 ){ // User doesn't exist
    			$_SESSION['message'] = "There is no available content!";
    			//header("location: error.php");
			}
			else { 				
    			while ($row = $result->fetch_assoc()) {
					echo('<li class="tab"><a href="'.$row["link_so"].'" target="_blank">'.$row["title_so"].' - Accessed on '.strftime("%d/%m/%Y", strtotime($row["date_so"])).'</a></li>');
    			}
			}
			?>				
			</article>
		</section>	
	</body>
</html>

