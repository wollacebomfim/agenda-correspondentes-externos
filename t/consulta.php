<?php
  session_start();
  require_once './conexao/conexao.php';
?>
    <html>
    <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"/>
    </head>
<?php include_once "./incluir/topo.php"; ?>
<body>


   
<br>
        <center>
        <form action="read.php" >
        <div class="row container">
        <div class="input-field col s8">
        <i class="material-icons prefix">domain</i>
        <input type="text" name="pesquisa" id="pesquisa" placeholder="PESQUISE A COMARCA">
        <label for="pesquisa">Pesquise a comarca</label>
        </div></div></div>
        </form>
        </center>
<fieldset class="formulario">
    <table class="striped">
        <div id="resultado">
                  <thead>
                  <tr>
                    <th>Titulo</th>
                    <th>UF</th>
                    <th>Correspondente</th>
                    <th>Cidade</th>
                    <th>OAB</th>
                    <th>Responsável</th>
                    <th>Ver</th>
</tr>
</thead>

</table>
</div>
</div>
</div>
<fieldset>
</body>



<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
$(document).ready(function(){
$('#pesquisa').keyup(function(){

    $('form').submit(function(){
        var dados = $(this).serialize();

        $.ajax({
            url: 'read.php',
            method: 'post',
            dataType: 'html',
            data: dados,
            success: function(data){
                $('#resultado').empty().html(data);
            }
        });

        return false;
    });

    $('form').trigger('submit');

});
});
</script>
<script type="text/javascript">

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('select').formSelect();
  });
  </script>
<?php include_once "./incluir/rodape.php"; ?>
</html>



