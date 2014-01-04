<!DOCTYPE html>
<html>
<head>
  <title><?php print $cabecalho_title;?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

    <!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ?#!watch? to the browser URL, then refresh the page. -->
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="img/favicon.png">
  
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
</head>

<header class="container">

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="navbar-header"> 
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">100 inc&ecirc;ndio</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="index.php">100 inc&ecirc;ndio</a></div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.php"><span class="glyphicon glyphicon-home text-primary"></span> Home</a></li>
						<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-pencil text-primary"></span> Cadastros<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
								<li class="divider"></li>
								<li><a href="#">One more separated link</a></li>
								</ul>
						</li>
                        <li><a href="#"> <span class="glyphicon glyphicon-file text-primary"></span> Relat&oacute;rios</a></li>
                        <li><a href="formulario_contato.php"><span class="glyphicon glyphicon-envelope text-primary"></span> Contato</a></li>
					</ul>
				
				
		       <?php 
		       if($_SESSION['nivel_usuario'] == 0) { ?>
		       <ul class="nav navbar-nav navbar-right">
					<li><a href="formulario_cadastro.php">Registrar</a></li>
                  	<li class="divider-vertical"></li>
					<li class="dropdown">
						<a class="dropdown-toggle" href="#" data-toggle="dropdown">Entrar <strong class="caret"></strong></a>
						<div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
							<form role="form" method="post" action="verifica_usuario.php" accept-charset="UTF-8" name="" id="">
								<div class="input-group">	
									<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
									<input  class="form-control" placeholder="usuario" id="usuario" name="usuario" type="text">
								</div>
								
								<div class="input-group">
									<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
									<input class="form-control" placeholder="senha" id="senha" name="senha" type="password">
								</div>
								
								<a class="btn btn-link" href="gerar_nova_senha.php">Esqueci minha senha</a>
					
								<div class="form‐actions">
									<input name="entrar" value="login" type="hidden">
									<button type="submit" class="btn btn-primary btn-block"><span class="btn-label"><i class="glyphicon glyphicon-ok"></i></span> Entrar</button>
								</div>								
							</form>
						</div>
					</li>
				</ul>	
		       <?php } ?>
				
			   <?php if($_SESSION['nivel_usuario'] == 1) { ?>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span
                    class="glyphicon glyphicon-user text-primary"> <?php print $_SESSION['nome'];?><strong class="caret"></strong></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="configuracoes.php"><span class="glyphicon glyphicon-cog text-primary"></span> Configura&ccedil;&otilde;es</a></li>
                            <li><a href="formulario_suporte.php"><span class="glyphicon glyphicon-envelope text-primary"></span> Suporte</a></li>
                            <li class="divider"></li>
                            <li><a href="logout.php"><span class="glyphicon glyphicon-off text-primary"></span> Sair</a></li>
                        </ul>
                    </li>
                </ul>
		       <?php } ?>

				
             		
				</div>
								
</nav>
	<br>
	<br>
	<br>
	<br>
</header>