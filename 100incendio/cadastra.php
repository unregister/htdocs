<?phpinclude "config.php";$nome = trim($_POST['nome']);$sobrenome  = trim($_POST['sobrenome']);$email = trim($_POST['email']);$usuario = trim($_POST['usuario']);$info = trim($_POST['info']);/* Vamos checar algum erro nos campos */if ((!$nome) || (!$sobrenome) || (!$email) || (!$usuario)){echo "ERRO: <br /><br />";if (!$nome){echo "Nome � requerido.<br />";}if (!$sobrenome){echo "Sobrenome � requerido.<br /> <br />";}if (!$email){echo "Email � um campo requerido.<br /><br />";}if (!$usuario){echo "Nome de Usu�rio � requerido.<br /><br />";}echo "Preencha os campos abaixo: <br /><br />";include "formulario_cadastro.php";}else{/* Vamos checar se o nome de Usu�rio escolhido e/ou Email j� existem no banco de dados */$sql_email_check = mysql_query("SELECT COUNT(usuario_id) FROM usuarios WHERE email='{$email}'");$sql_usuario_check = mysql_query("SELECT COUNT(usuario_id) FROM usuarios WHERE usuario='{$usuario}'");$eReg = mysql_fetch_array($sql_email_check);$uReg = mysql_fetch_array($sql_usuario_check);$email_check = $eReg[0];$usuario_check = $uReg[0];if (($email_check > 0) || ($usuario_check > 0)){echo "<strong>ERRO</strong>: <br /><br />";if ($email_check > 0){echo "Este email j� est� sendo utilizado.<br /><br />";unset($email);}if ($usuario_check > 0){echo "Este nome de usu�rio j� est� sendoutilizado.<br /><br />";unset($usuario);}include "formulario_cadastro.php";}else{/* Se passarmos por esta verifica��o ilesos � hora definalmente cadastrar os dados. Vamos utilizar uma fun��o para gerar a senha deforma rand�mica*/function makeRandomPassword(){$salt = "abchefghjkmnpqrstuvwxyz0123456789";srand((double)microtime()*1000000);$i = 0;while ($i <= 7){$num = rand() % 33;$tmp = substr($salt, $num, 1);$pass = $pass . $tmp;$i++;}return $pass;}$senha_randomica   =  makeRandomPassword();$senha = md5($senha_randomica);// Inserindo os dados no banco de dados$info = htmlspecialchars($info);$sql = mysql_query("INSERT INTO usuarios(nome, sobrenome, email, usuario, senha, info, data_cadastro)VALUES('$nome', '$sobrenome', '$email', '$usuario', '$senha', '$info', now())")or die( mysql_error());if (!$sql){echo "Ocorreu um erro ao criar sua conta, entre em contato.";}else{$usuario_id = mysql_insert_id();// Enviar um email ao usu�rio para confirma��o e ativar o cadastro!$headers = "MIME-Version: 1.0\n";$headers .= "Content-type: text/html; charset=iso-8859-1\n";$headers .= "From: 100 inc�ndio <rafaelavilela@100incendio.com.br>";$subject = "Confirma��o de cadastro - http://localhost:8888/100incendio/";$mensagem  = "Prezado  {$nome} {$sobrenome},<br />Obrigado pelo seu cadastro em nosso site, <a href='http://localhost:8888/100incendio/ '>http://localhost:8888/100incendio/</a>!<br /> <br />Para confirmar seu cadastro e ativar sua conta em nosso site, podendo acessar ��reas exclusivas, por favor clique no link abaixo ou copie e cole na barra deendere�o do seu navegador.<br /> <br /><a href='http://localhost:8888/100incendio/ativar.php?id= {$usuario_id}&code={$senha}'>http://localhost:8888/100incendio/ativar.php?id={$usuario_id}&code={$senha}</a><br /> <br />Ap�s a ativa��o de sua conta, voc� poder� ter acesso ao conte�do exclusivoefetuado o login com os seguintes dados abaixo:<br > <br /><strong>Usuario</strong>: {$usuario}<br /><strong>Senha</strong>: {$senha_randomica}<br /> <br />Obrigado!<br /> <br />Webmaster<br /> <br /> <br />Esta � uma mensagem autom�tica, por favor n�o responda!";$envio = mail($email, $subject, $mensagem, $headers);

if($envio)echo "Foi enviado para seu email - ( ".$email." ) - um pedido deconfirma��o de cadastro, por favor verifique e sigas as instru��es! {$senha_randomica} - <a href='http://localhost:8888/100incendio//ativar.php?id= {$usuario_id}&code={$senha}'>http://localhost:8888/100incendio/ativar.php?id={$usuario_id}&code={$senha}</a>";
else echo "N�o foi enviado email";
}}}?>