<?php
session_start();

?>
        <html>
        <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        </head>

<body>
<form action="./funcao/cadastrarusuario.php" method="POST">
<center>
<?php include_once "./incluir/background2.php"; ?>
<div class="row">
<div class="col s12 m4 offset-m4">
<div class="card">
<div class="card-action white lighten-1 black-text">

<h3>Cadastro</h3>
</div>

        <?php if(isset($_SESSION['status_cadastro'])): ?>
        <div class="notification is-sucess">
        <center><p class='center green-text'>Cadastro efetuado, volte ao login !</p></center>
        </div>
        <?php endif; unset($_SESSION['status_cadastro']); ?>
      

        <?php if(isset($_SESSION['usuario_existe'])): ?>
        <div class="notification is-info">
        <center><p class='center red-text'>O Email escolhido já existe, informe outro !</p></center>
        </div>
        <?php endif; unset($_SESSION['usuario_existe']); ?>
        



<div class="card-content">
<div class="form-field">
<label for="nome">Seu nome completo</label>
<input name="nome" type="text"  placeholder="SEU NOME COMPLETO" required>
</div><br>
                    
                            
<div class="form-field">
<label for="usuario">Seu E-mail</label>
<input name="usuario" type="email"  placeholder="SEU E-MAIL" required>
</div><br>

<div class="form-field">
<label for="senha">CPF (somente numeros)</label>
<input name="senha" type="text"  minlength="11" maxlength="11" size="11" placeholder="INSIRA SEU CPF" required onkeypress="return onlynumber();">
</div><br>                      
<br>                                
<center>
<a href="login.php"class="btn-large red">Voltar ao login</button></a>
<button type="submit" class="btn-large blue">Cadastrar</button>
</center>
</div>
</div>
</div>
</div>
</div>
</form>
<script type="text/javascript">
function onlynumber(evt) {
   var theEvent = evt || window.event;
   var key = theEvent.keyCode || theEvent.which;
   key = String.fromCharCode( key );
   //var regex = /^[0-9.,]+$/;
   var regex = /^[0-9.]+$/;
   if( !regex.test(key) ) {
      theEvent.returnValue = false;
      if(theEvent.preventDefault) theEvent.preventDefault();
   }
}
</script>
             
</body>
</html>