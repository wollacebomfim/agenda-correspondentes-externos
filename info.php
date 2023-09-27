<?php
  session_start();
  require_once './conexao/conexao.php';
  include_once './incluir/lerusuario.php';
?>
    <html>
    <head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"/>
    </head>
<?php include_once "./incluir/topo.php"; ?>
<body>
<br><br>
<div class="row container">
<fieldset class="formulario">
<h3 class="center">Dados do correspondente</h3>
    
        <div class="input-field col s2">
        <i class="material-icons prefix">home</i>
        <input  id="first_name" type="text" value="<?php echo $dados['uf']; ?>" readonly>
        <label for="first_name">UF</label>
        </div>

        <div class="input-field col s9">
        <i class="material-icons prefix">domain</i>
        <input  id="first_name" type="text" value="<?php echo $dados['titulo']; ?>" readonly>
        <label for="first_name">Titulo</label>
        </div>

        <div class="input-field col s9">
        <i class="material-icons prefix">person</i>
        <input  id="first_name" type="text" value="<?php echo $dados['correspondente']; ?>" readonly>
        <label for="first_name">Correspondente</label>
        </div>

        <div class="input-field col s9">
        <i class="material-icons prefix">person</i>
        <input  id="first_name" type="text" value="<?php echo $dados['responsavel']; ?>" readonly>
        <label for="first_name">Responsavel</label>
        </div>

        <div class="input-field col s6">
        <i class="material-icons prefix">library_books</i>
        <input  id="first_name" type="text" value="<?php echo $dados['escritorio']; ?>" readonly>
        <label for="first_name">Escritorio</label>
        </div>

        
        <div class="input-field col s3">
        <i class="material-icons prefix">featured_play_list</i>
        <input  id="first_name" type="text" value="<?php echo $dados['tipoderegime']; ?>" readonly>
        <label for="first_name">Tipo de regime</label>
        </div>

        <div class="input-field col s3">
        <i class="material-icons prefix">library_books</i>
        <input  id="first_name" type="text" value="<?php echo $dados['tipodecontrato']; ?>" readonly>
        <label for="first_name">Tipo de contrato</label>
        </div>
   

      
        <div class="input-field col s6">
        <i class="material-icons prefix">library_books</i>
        <input  id="first_name" type="text" value="<?php echo $dados['cpf']; ?>" readonly>
        <label for="first_name">CPF / CNPJ</label>
        </div>

        <div class="input-field col s6">
        <i class="material-icons prefix">library_books</i>
        <input  id="first_name" type="text" value="<?php echo $dados['oab']; ?>" readonly>
        <label for="first_name">OAB</label>
        </div>

   

        <div class="input-field col s3">
        <i class="material-icons prefix">local_phone</i>
        <input  id="first_name" type="text" value="<?php echo $dados['telefone']; ?>" readonly >
        <label for="first_name">Telefone Fixo</label>
        </div>

        <div class="input-field col s3">
        <i class="material-icons prefix">local_phone</i>
        <input  id="first_name" type="text" value="<?php echo $dados['telefonecel1']; ?>" readonly>
        <label for="first_name">Telefone Celular 1</label>
        </div>

        <div class="input-field col s3">
        <i class="material-icons prefix">local_phone</i>
        <input  id="first_name" type="text" value="<?php echo $dados['telefonecel2']; ?>" readonly>
        <label for="first_name">Telefone Celular 2</label>
        </div>

        <div class="input-field col s3">
        <i class="material-icons prefix">local_phone</i>
        <input  id="first_name" type="text" value="<?php echo $dados['telefonecel3']; ?>" readonly>
        <label for="first_name">Telefone Celular 3</label>
        </div>

        <div class="input-field col s3">
        <i class="material-icons prefix">smartphone</i>
        <input  id="first_name" type="text" value="<?php echo $dados['whatsapp']; ?>" readonly>
        <label for="first_name">WhatsApp</label>
        </div>

        <div class="input-field col s10">
        <i class="material-icons prefix">library_books</i>
        <input  id="first_name" type="text" value="<?php echo $dados['endereco']; ?>" readonly>
        <label for="first_name">Endereço</label>
        </div>

        <div class="input-field col s12">
        <i class="material-icons prefix">email</i>
        <textarea id="textarea1" class="materialize-textarea" readonly><?php echo $dados['emailfinanceiro']; ?></textarea>
        <label for="textarea1">Email do financeiro</label>
        </div>

        <div class="input-field col s12">
        <i class="material-icons prefix">email</i>
        <textarea id="textarea1" class="materialize-textarea" readonly><?php echo $dados['email']; ?></textarea>
        <label for="textarea1">Email do correspondente</label>
        </div>

        <br>

        







</fieldset>
<br><br>
<center><a href="consulta.php" class="btn-large brown">voltar</a></center>
</div>
</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
$("#pesquisa").keyup(function(){
        var pesquisa = $("#pesquisa").val();
        $.post('read.php', {pesquisa: pesquisa}, function(data){
            $("#resultado").html(data);
            

    });
});
</script>
</html>



