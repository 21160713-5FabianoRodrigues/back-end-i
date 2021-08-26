<?php
	//include('dados/dados.php');
?>
<section id="topo">

    <figure id="mousse-esquerda">
    	<a href="index.php?id=1&&pagina=pages/produto_detalhe.php">
        	<img align="" src="imagens/brigadeiro.jpg" width="135%" height="90%"/>
    	</a>
        <figcaption><?=$conteudo[0]["titulo"];?></figcaption>
    </figure>

	 <figure id="mousse-direita">
	 	<a href="index.php?id=2&&pagina=pages/produto_detalhe.php">
	        <img src="imagens/queijadinha.png" width="50%" height="50%" />
	    </a>
	        <figcaption><?=$conteudo[1]["titulo"];?></figcaption>
	 </figure>
	 <figure id="mousse-esquerda">
	 	<a href="index.php?id=3&&pagina=pages/produto_detalhe.php">
        	<img align="" src="imagens/abobora.jpg" width="60%" height="20%"/>
        </a>
        <figcaption><?=$conteudo[2]["titulo"];?></figcaption>
    </figure>

	 <figure id="mousse-direita">
	 	<a href="index.php?id=4&&pagina=pages/produto_detalhe.php">
	        <img src="imagens/cocada.jpg" width="70%" height="30%" />
	    </a>
	        <figcaption><?=$conteudo[3]["titulo"];?></figcaption>
	 </figure>
	  <BR>	 
</section>