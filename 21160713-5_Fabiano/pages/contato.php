<?php include('function/test_input.php'); ?>
<head>
	<style>
		.error {color: #FF0000;}
	</style>
</head>

<body>  
<?php
// define variables 
$nameErr = $emailErr = $genderErr = "";
$name = $email = $comment =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Informe o nome!";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Informe o email";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }
}
?>


<h2>Formulário de contato</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])."?pagina=pages/contato.php";?>">  
  <fieldset>
	  <input type="text" name="name" placeholder="Seu nome">
	  <span class="error">* <?php echo $nameErr;?></span>
	  <br><br>
	  <input type="text" name="email" placeholder="Seu Email">
	  <span class="error">* <?php echo $emailErr;?></span>
	  <br><br>
	  <textarea name="comment" rows="5" cols="40" placeholder="Seu Comentário"></textarea>
	  <br><br>
	  <input type="submit" name="submit" value="Enviar">  
	</fieldset>
</form>
<?php
echo "<br>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $comment;
echo "<br>";
?>
  <div>
    <h1>
        Peça pelo Whatsapp!  
    </h1>
      <img src="imagens/zap.png" align="center" width="10%" height="10%">
    <h1>
      21 99832-5555  
    </h1>
  </div>
</body>
</html>
