<?php/*
 * Arquivo: form_contato.php
 * Criado por: Rafaela Vilela
 * Versao: v.1
 * Data: 01.jan.2014
 * Objetivo: Formulario para contato
 * Campos do form: nome, email, mensagem
 * Parametros: $error / $msg
 */?>
<body>
<?php 
	$cabecalho_title = "100 incendio - Contato";
	include("_menu_cabecalho.php");
?>
	<div class="container">

<?php
	//  sucesso - verde
    if ($error == 1) echo "<div class=\"alert alert-success\">".@$msg."</div>";  
  	
    //  erro - vermelho
    if ($error == -1)  echo "<div class=\"alert alert-danger\">".@$msg."</div>"; 
?>
	
        <div class="page-header">
            <h1>Contato</h1>
        </div>

        <form method="POST" action="send_contato.php" class="form-horizontal">
            <div class="control-group">
                <label class="control-label" for="input1">Nome</label>
                <div class="controls">
                    <input  class="form-control" type="text" name="contact_name" id="input1" placeholder="nome">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="input2">Email</label>
                <div class="controls">
                    <input  class="form-control" type="text" name="contact_email" id="input2" placeholder="email@email.com">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="input3">Mensagem</label>
                <div class="controls">
                    <textarea  class="form-control" name="contact_message" id="input3" rows="5" class="span5" placeholder="Mensagem"></textarea>
                </div>
            </div>
            <br>
            <div class="form-actions">
                <input type="hidden" name="save" value="contact">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
                                
        </form>
        
    </div>
    <?php include("_menu_rodape.php");?>
</body>
