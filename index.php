<html> 
<title>PHP from Scratch</title>
<h2>My first PHP website</h2>
<body>
	
	<?php                                                  
		     
		                                              
		$array = ["Jose", "Maria","Joao"];                 
		                                                   
		foreach ($array as $key) {                         
				                                           
			echo "<li>$key<li/>";                          
			if ($key == "Joao") {                          
				echo "<strong>Achamos o Joao!</strong>";   
			}else{                                         
				echo "Ainda nao achamos o Joao.";          
			}                                            
		}     
		echo "Data de hoje: ".date('d/m/Y'); 
        echo "E agora sao".date('H:i:s');                          
		                  
	?>                                                     
</body>















</html>  