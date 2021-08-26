
<?php 
	if (!empty($_GET['id']) && $_GET['id'] == 1) 
	{
	?>

	<div align="center">    	
        <img src="imagens/brigadeiro.jpg" width="50%" height="50%"/>    	        
        <h3> <?php echo substr($conteudo[0]["detalhe"],0, 200);?></h3>    
    </div>		

<?php
	}elseif (!empty($_GET['id']) && $_GET['id'] == 2 ) {
?>		
		<div align="center">    	
	        <img src="imagens/queijadinha.png" width="40%" height="40%"/>    	        
	        <h3> <?php echo substr($conteudo[1]["detalhe"],0, 300);?></h3>    
	    </div>	

<?php	
	}elseif (!empty($_GET['id']) && $_GET['id'] == 3 ) {
?>		
		<div align="center">    	
	        <img src="imagens/abobora.jpg" width="25%" height="25%"/>    	        
	        <h3> <?php echo substr($conteudo[2]["detalhe"],0, 300);?></h3>    
	    </div>	
<?php	    
	}elseif (!empty($_GET['id']) && $_GET['id'] == 4 ) {
?>		
		<div align="center">    	
	        <img src="imagens/cocada.jpg" width="30%" height="30%"/>    	        
	        <h3> <?php echo substr($conteudo[3]["detalhe"],0, 300);?></h3>    
	    </div>	

<?php	    
	}
 ?>
  <BR>	