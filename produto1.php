<?php
    if(isset($_POST['submit']))
    {
     /*
        print_r($_POST['nome']);
        print_r($_POST['telefone']);
       */
        
        include_once('config.php');
        
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $pedido = $_POST['pedido'];
        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,telefone,email,pedido)VALUES('$nome','$telefone','$email','$pedido')");
        


    }

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title> Flores de Meninas</title>

	<link rel="stylesheet" type="text/css" href="produto1.css">


	<nav id="logo">
		<div class="fotologo">
			<img src="imagens/Logo3_files/Logo2_Redonda.png" alt="Logo" width=200 height=200>
		</div>
	</nav>

	<nav id="marca">
		<p> <a class="navtext" target="_self" href="Index.html">Home</a>
			<a class="navtext" href="Lingerie/Lingerie.html">Lingeries</a>
			<a class="navtext" href="Contato.html">Contato</a>

		</p>

	</nav>
	
</head>

<body>
	<div id="divpoderosa">
		<div class="slideshow-container">

			<div class="mySlides fade">
				<div class="numbertext">1 / 3</div>
				<img src="imagens/imagens_prod1/prod.1.jpeg" alt="fotoproduto" width="100%">

			</div>

			<div class="mySlides fade">
				<div class="numbertext">2 / 3</div>
				<img src="imagens/imagens_prod1/prod.1(1).jpeg" alt="fotoproduto" width="100%">

			</div>

			<div class="mySlides fade">
				<div class="numbertext">3 / 3</div>
				<img src="imagens/imagens_prod1/prod.2(2).jpeg" alt="fotoproduto" width="100%">

			</div>

			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a>

		</div>
		<br>

		<div class="ponto">
			<span class="dot" onclick="currentSlide(1)"></span>
			<span class="dot" onclick="currentSlide(2)"></span>
			<span class="dot" onclick="currentSlide(3)"></span>
		</div>
		<div class="descricaoproduto">
			<h1>Biquíni cortininha xadrez</h1>
			<ul>
				<li>Tamanho:G</li>
			</ul>
			<ul>
				<li>Descrição:</li>
				<li>Cortininha comum</li>
				<li>Calcinha detalhe na lateral direita</li>
				<li>Estampado</li>
				<li>Código do produto: 89L</li>
			</ul>
				<ul>
				<li>Preço: R$ 80,00</li>
			</ul>

			<form action="produto1.php" method="POST">
				<fieldset>
					<legend>Fazer o pedido</legend>
					<ul>
			   <li><label>Nome:</label><input type="text" id="nome" name="nome"  placeholder="Digite seu nome" required></li>
				<li><label>Telefone:</label><input type="number" name="telefone" id="telefone"  placeholder="Digite seu Telefone" required></li>
				<li><label>E-mail:</label><input type="email" name="email" id="email" placeholder="Digite seu E-mail" required></li>
				<li><label>Pedido:</label><textarea type="text" name="pedido" id="pedido" placeholder="Faça seu pedido" required></textarea></li>
			</ul>
				<button id="enviar" name="submit" type="submit">Enviar</button>
			</fieldset>
			</form>
		</div>
		<script type="text/javascript" src="produtos.js"></script>
	</div>
	<footer>
		<div class="rodape">

			<p><img src="imagens/ícones/gostar.png" alt="gostar" height="15" width="15"><strong>Curta
					nossas páginas</strong></p>
			<p><img src="imagens/ícones/facebook.png" alt="facebook" height="15"
					width="15"><strong>Floresdemeninas</strong></p>
			<p><img src="imagens/ícones/instagram.png" alt="instagram" height="15"
					width="15"><strong>@floresdemeninass2</strong>

			<p><strong>Contato</strong></p>

			<p><img src="imagens/ícones/gmail.png" height="20" alt="gmail"><strong>
					lojafloresdemeninas<br>@gmail.com</strong></p>
			<p><img src="imagens/ícones/whatsapp.png" height="20" alt="icon">
				<a rel="noopener noreferrer" href="https://wa.me/message/XBEJCY345WO7I1" target="_blank"><strong>21
						98410-5810</strong></a>
			</p>

			<strong>Aceitamos os cartões</strong><br>
			<p><img src="imagens/bandeiras/icones-cartao.png.png" alt="bandeira"> </p>

		</div>
	</footer>


</body>

</html>