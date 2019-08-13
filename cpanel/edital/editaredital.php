<?php
session_start();
if (!$_SESSION["usuarioNome"]) header("Location: ../index.php");

?>

<!DOCTYPE html>
<!-- saved from url=(0053)http://getbootstrap.com.br/docs/4.1/examples/sign-in/ -->
<html lang="pt-br"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<title>Painel Administrativo</title>

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link rel="shortcout icon" type="logo/x-icon" href="../imagens/favicon.png"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   
	<link rel="stylesheet" href="../css/signin.css">
	<link href="https://fonts.googleapis.com/css?family=Markazi+Text:500" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">  
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

</head>

<body style="background:#eaeaea91;">


	<nav style="background-color: white;" class="navbar fixed-top navbar-light navbar-expand-lg" id="mainNav">

		<div class="container">
			<div style="width: 5%; min-width:100px; margin: 0 auto;"><a href="../../index.php" style=""><img " src="../imagens/GRIFRO.png" alt=" GRIFRO" class="navbar-brand imagem-responsiva" ></a></div>

			<div class="sair" style="font-size: 25px; right: 0;">
				<a href="../sair.php">
					<i class="fas fa-sign-out-alt"></i>
				</a>
			</div>
		</div>
	</nav>

	<br><br>
	<div style="background-color: white;">
		<br>
		<hr>
		<h3 class="container text-danger"><?php echo $_SESSION['usuarioNome'];	?></h3>
		<hr>
		<ul class="container nav nav-tabs">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Atividades</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="../atividade/inseriratividade.php">Inserir Atividade</a>
					<a class="dropdown-item" href="../atividade/editaratividade.php">Atualizar Atividade</a>
					<a class="dropdown-item" href="../atividade/excluiratividade.php">Remover Atividade</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Enquetes</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="../enquete/inserirenquete.php">Inserir Enquete</a>
					<a class="dropdown-item" href="../enquete/editarenquete.php">Atualizar Enquete</a>
					<a class="dropdown-item" href="../enquete/excluirenquetes.php">Remover Enquete</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle nav-link " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Notícias</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="../noticia/inserirnoticia.php">Inserir Notícia</a>
					<a class="dropdown-item" href="../noticia/editarnoticia.php">Editar Notícia</a>
					<a class="dropdown-item" href="../noticia/excluirnoticia.php">Remover Notícia</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Editais</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="inseriredital.php">Inserir Edital</a>
					<a class="dropdown-item" href="editaredital.php">Atualizar Edital</a>
					<a class="dropdown-item" href="excluiredital.php">Remover Edital</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Eventos</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="../evento/inserirevento.php">Inserir Evento</a>
					<a class="dropdown-item" href="../evento/editarevento.php">Editar Evento</a>
					<a class="dropdown-item" href="../evento/excluirevento.php">Remover Evento</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Membros</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="../membro/inseremembro.php">Inserir Membro</a>
					<a class="dropdown-item" href="../membro/editamembro.php">Atualizar Membro</a>
					<a class="dropdown-item" href="../membro/excluimembro.php">Remover Membro</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Planos de Mandato</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="../mandato/inseremandato.php">Inserir Plano</a>
					<a class="dropdown-item" href="../mandato/editamandato.php">Atualizar Plano</a>
					<a class="dropdown-item" href="../mandato/excluimandato.php">Remover Plano</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Estatuto</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="../estatuto/insereestatuto.php">Inserir Estatuto</a>
					<a class="dropdown-item" href="../estatuto/editaestatuto.php">Atualizar Estatuto</a>
					<a class="dropdown-item" href="../estatuto/excluiestatuto.php">Remover Estatuto</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Admnistradores</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="../adm/insereadm.php">Inserir Adm</a>
					<a class="dropdown-item" href="../adm/editaadm.php">Atualizar Adm</a>
					<a class="dropdown-item" href="../adm/excluiadm.php">Remover Adm</a>
				</div>
			</li>
		</ul>
	</div>
	<div style="background: #253f55;">
		<h3 style="color: white; padding: 10px;" class="container text-center">Atualizar Dados</h3>
	</div>
	<div class="container">
		<?php
		include "../conexao.php";
		$sql = "SELECT * FROM editais ORDER BY idEdital DESC";
		$query = mysqli_query($con, $sql);

		while ($edital = mysqli_fetch_array($query)) { ?>
			<form method="post" action="updateedital.php">
				<div class="list-group">
					<br class="clearBoth">
					<div class="d-flex w-100 justify-content-between">
						<h5 class="mb-2"><?php echo $edital["titulo"]; ?></h5>
					</div>	
					<p class="mb-1 text-muted"><?php echo $edital["subtitulo"]; ?></p>
				</div>
				<!--<button type="button" class="btn btn-info">Atualizar</button>-->
				<INPUT TYPE="hidden" NAME="idEdital" VALUE="<?php echo $edital['idEdital']; ?>" />
				<button class="btn btn-info">Atualizar</button>
				<hr>
			</form>	
		<?php } ?>
	</div>
	<footer class="final" style="background-color: #253f55;">
		<center>
			Desenvolvido por: <a href="https://twitter.com/vitu_xisto"><b>Vituriano</b></a>,
			<a href=""><b>Nícolas</b></a>, 
			<a href=""><b>Luís</b></a>,
			<a href=""><b>Saimor</b></a> e 
			<a href=""><b>Lucas</b></a>
		</center>
	</footer>
</body>
</html>