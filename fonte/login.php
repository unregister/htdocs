							<?php 
								 $login = $_POST['login'];
								 $entrar = $_POST['entrar'];
								 $senha = md5($_POST['senha']);
								 $connect = mysql_connect('localhost','root','1234');
								 $db = mysql_select_db('tutorial');
								 if (isset($entrar)) 
									{
									    
									    $verifica = mysql_query("SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'") or die(mysql_error($connect));
										if (mysql_num_rows($verifica)<=0)
										{
											echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
										    die();
										}
										else
										{
											setcookie("login",$login);
											header("Location:index.php");
										}
									}
								 
							?>