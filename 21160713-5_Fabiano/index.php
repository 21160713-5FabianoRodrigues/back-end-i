<?php
	include('dados/dados.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/estilo.css">
	<title>Doces Da Lú</title>	    
</head>
<body>
	<header class="main_header">
		<div class="main_header_content">
			<a href="#" class="logo"><img src="imagens/logotopo.png" height="100" alt="Doces da Lú" title="Doces da Lú">
			</a>
			<nav class="main_header_content_menu">
				<ul>
					<li><a href="index.php?pagina=pages/home.php">Home</a></li>
					<li><a href="index.php?pagina=pages/quem_somos.php">Quem Somos</a></li>
					<li><a href="index.php?pagina=pages/contato.php">Contato</a></li>
					<li><a href="index.php?pagina=pages/localizacao.php">Localização</a></li>					
				</ul>
			</nav>
		</div>
	</header>
	<main>
		<div class="main_cta">
			<article class="main_cta_content">
                <div class="main_cta_content_spacer"
					<header>
						<h1><?=$ola['frase1']?></h1>
				    </header>
						<p><?=$ola['frase2']?></p>						
				</div>
            </article>
        </div>
	</main>

		<?php
		
			if (isset($_GET["pagina"]) && !empty($_GET["pagina"])){
				$pagina = $_GET["pagina"];
				include($pagina);
			}else{
				include("pages/home.php");
				//echo"Pagina Principal Home";
			}			
		?>
	
	<div id="receita">
		<footer class="main_header">
			<p>Desenvolvido por <a href="#"><?=$aluno['nome'] .' - '. $aluno['ra']; ?> </a></p>
		</footer>
	</div>
</body>
</html>	