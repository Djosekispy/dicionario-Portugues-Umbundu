  <?php
 include_once 'css/estelizar.php';
 include_once 'conexoes/conectar.php';
  ?>
  <!DOCTYPE html>
  <html>
    <head>
     <meta charset="utf-8">
      <title>Dicionário</title>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body class="blue">
 
<header >
	<div id="tema">
		<b class="hide-on-small-only">Dicionario</b>
		<b> Português-Umbundo</b>
		
	</div>
	<form id="formulario" action="conexoes/read.php" method="GET">
    <input type="text" name="pesquisa" id="inserir">	
    <button type="submit" name="Procurar" id="botao">
    	Procurar
    </button>	
	</form>
</header>

<div class="grey lighten-5" >
	<table style="width: 100%;">

<?php

$sql = "SELECT * FROM palavras";
  $saida = mysqli_query($conectar,$sql);
  if($saida):
     
     while($dados = mysqli_fetch_array($saida)):
     
 
?>


      <ul class="collapsible" style=" margin-bottom: 0px; margin-top: 0px;">
    <li>
      <div class="collapsible-header"><?php
        $termo = $dados['termo'];
        $sentido = $dados['sentido'];
       echo $termo; ?></div>
      <div class="collapsible-body">
        <i><?php echo $sentido; ?></i></div>
    </li>
  </ul>
 
    <?php   
  endwhile;
endif;
    ?>
				
	</table>
</div>
  
    







      <script type="text/javascript" src="js/jquery.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
       <script type="text/javascript">

       	 $(document).ready(function(){
 M.AutoInit();
     $(".dropdown-trigger").dropdown();
    $('.sidenav').sidenav();
  });
     
       </script>
    </body>
  </html>