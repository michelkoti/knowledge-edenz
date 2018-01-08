<?php	
//require 'class/connection.php'; ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  		<title>Search</title>
    	<meta name="description" content="Content developed to help service desk.">
<!--    	<link rel="stylesheet" href="CSS/main.css?v=<?php echo filemtime('CSS/main.css'); ?>"> -->
        <link rel="stylesheet" href="CSS/table_fields.css?v=<?php echo filemtime('CSS/table_fields.css'); ?>">		
    	<script type="text/javascript" language="javascript" src="JavaScript/script.js?v=<?php echo filemtime('JavaScript/script.js'); ?>"></script> 

	</head>	
	<body>
  		<header>
			<form id="form_01" method="post"> 				
            <table>
                <tr>
                    <td width="15%">
					<label>Title:</label><br>
                		<input type="text" id="field0" required placeholder="Short description..." value="" name="field0"><br>
					</td>
                    <td rowspan="3">					
					<label>Description:</label><br>
					<textarea id="field1" required value="" name="field1" placeholder="Detailed description..."></textarea><br>	
					
					</td>
                </tr>
                <tr>
                    <td>
					<label>Type:</label><br>
                	<select id="type" required name="field2">
                		<option value="">Choose</option>               
                   		<option value="1">Infrastructure</option>
                   		<option value="2">Systems</option>
                   		<option value="3">Database</option>  
						<option value="4">Security</option>  					
               		</select><br>
					</td>
				</tr>
                <tr>
                    <td>
					<input id="insert_button" type="submit" value="Submit" name="submit_add" onclick="consist()">
					</td>
                </tr>
            </table>
				
			</form>		
			<?php 
				//Output results will come here
				require 'class/connection.php';
			?>
		</header>
	</body>
</html>
