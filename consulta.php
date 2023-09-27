<?php
  session_start();
  require_once './conexao/conexao.php';
?>
    <html>
    <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"/>
        <style>
            .footer {
    position:absolute;
    bottom:0;
    width:100%;
}
        </style>
    </head>
<?php include_once "./incluir/topo.php"; ?>
<body>
    
    <br>
    
        <center>
        
        <form action="read.php" >
        <div class="row container">
      
        <div class="input-field col s8">
        <i class="material-icons prefix">domain</i>
        <input type="text" name="pesquisa" id="pesquisa" placeholder="EXEMPLO PE, PA, RJ, PB....">
        <label for="pesquisa">Pesquise a UF</label>
        </div></div>
      
        
        


        </form>
        </center>




        
        <div class="row container">
       
        <table class="striped">
             <div id="resultado">
</div>
</div>
</div>



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




</html>



