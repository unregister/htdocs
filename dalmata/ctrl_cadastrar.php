<?php	include "config.php";		$nome = trim($_POST['nome']);	$sobrenome  = trim($_POST['sobrenome']);	$email = trim($_POST['email']);	$usuario = trim($_POST['usuario']);	$info = trim($_POST['info']);		/* Vamos checar algum erro nos campos */	if ((!$nome) || (!$sobrenome) || (!$email) || (!$usuario)){		$msg = "ERRO: <br /><br />";			if (!$nome){			$msg = "Nome � requerido.<br />";		}				if (!$sobrenome){			$msg = "Sobrenome � requerido.<br />";		}				if (!$email){			$msg = "Email � um campo requerido.<br />";		}				if (!$usuario){			$msg = "Nome de Usu�rio � requerido.<br />";		}		
		if (isset($msg)) {
			$error = -1;
			include("form_cadastro.php");
			exit;
		}	}	else{	/* Vamos checar se o nome de Usu�rio escolhido e/ou Email j� existem no banco de dados */				$sql_email_check = mysql_query("SELECT COUNT(usuario_id) FROM usuarios WHERE email='{$email}'");		$sql_usuario_check = mysql_query("SELECT COUNT(usuario_id) FROM usuarios WHERE usuario='{$usuario}'");				$eReg = mysql_fetch_array($sql_email_check);		$uReg = mysql_fetch_array($sql_usuario_check);				$email_check = $eReg[0];		$usuario_check = $uReg[0];			if (($email_check > 0) || ($usuario_check > 0)){			$msg = "<strong>ERRO</strong>: <br />";				if ($email_check > 0){				$msg = "Este email j� est� sendo utilizado.<br />";				unset($email);			}						if ($usuario_check > 0){				$msg = "Este nome de usu�rio j� est� sendo utilizado.<br />";				unset($usuario);			}					if (isset($msg)) {
				$error = -1;
				include("form_cadastro.php");
				exit;
			}		}				else{		/* Se passarmos por esta verifica��o ilesos � hora de		finalmente cadastrar os dados. Vamos utilizar uma fun��o para gerar a senha de		forma rand�mica*/						function makeRandomPassword(){				$salt = "abchefghjkmnpqrstuvwxyz0123456789";				srand((double)microtime()*1000000);				$i = 0;				while ($i <= 7){				$num = rand() % 33;				$tmp = substr($salt, $num, 1);				$pass = $pass . $tmp;				$i++;				}				return $pass;			} #makeRandomPassword						$senha_randomica   =  makeRandomPassword();			$senha = md5($senha_randomica);						// Inserindo os dados no banco de dados			$info = htmlspecialchars($info);			$sql = mysql_query("INSERT INTO usuarios (nome, sobrenome, email, usuario, senha, info, data_cadastro)			VALUES ('$nome', '$sobrenome', '$email', '$usuario', '$senha', '$info', now())") or die( mysql_error());							if (!$sql){				$msg = "Ocorreu um erro ao criar sua conta, entre em contato.";
				$error = -1;
				include("form_cadastro.php");
				exit;			}			else{				$usuario_id = mysql_insert_id();								// Enviar um email ao usu�rio para confirma��o e ativar o cadastro!				$headers = "MIME-Version: 1.0\n";				$headers .= "Content-type: text/html; charset=iso-8859-1\n";				$headers .= "From: 100incendio <100incendio@100incendio.com.br>";								$subject = "100incendio: Confirma��o de cadastro";								#=================================  msg: cadastro  =================================				$message  = "Ol�  {$nome} {$sobrenome},<br />				Obrigado por se cadastrar em nosso site, <a href='www.100incendio.com.br/ '>				http://localhost:100/100incendio/</a>!<br /> <br />				Para confirmar o cadastramento automaticamente e come�ar a navegar no site, visite o seguinte endere�o: <br /> <br />				<a href='http://localhost:100/dalmata/ativar.php?id= {$usuario_id}&code={$senha}'>				http://localhost:100/100incendio/ativar.php?id={$usuario_id}&code={$senha}				</a>				<br /> <br />				Se isto n�o funcionar, copie este link na barra de endere�os do seu navegador.<br />								Os seus dados de usu�rio s�o:<br > <br />				<strong>Usu�rio</strong>: {$usuario}<br />				<strong>Senha</strong>: {$senha_randomica}<br /> <br />								Esta � uma mensagem autom�tica, por favor n�o responda!<br />					Se voc� precisar de ajuda, por favor contate o administrador do site: contato@100incendio.com.br.<br />				Obrigado!<br /> <br />				<strong>100inc�ndio.com.br</strong> <br />				<a href='http://www.100incendio.com.br'>http://www.100incendio.com.br</a><br />";				#=================================  msg: cadastro  =================================								$envio = mail($email, $subject, $message, $headers);
		
				if($envio) {		
					$error = 1;					$msg = "Foi enviado para seu email - ( ".$email." ) - um pedido de confirma��o de cadastro, por favor verifique e sigas as instru��es! {$senha_randomica} - <a href='http://localhost:100/dalmata//ativar.php?id= {$usuario_id}&code={$senha}'>http://localhost:100/dalmata/ativar.php?id={$usuario_id}&code={$senha}</a>";
					include("form_cadastro.php");			
				}				else {
					$error = -1;					$msg = "N�o foi enviado email. Por favor, entre em contato: contato@100incendio.com.br";
					include("form_cadastro.php");
				}
					}#if-else erro criar conta		}}?>