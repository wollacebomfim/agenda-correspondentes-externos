<?php
  session_start();
  require_once './conexao/conexao.php';
  include_once "./incluir/seguranca.php";
?>
<html>
<head>
<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
</head>

<?php include_once "./incluir/topo.php"; ?>
<body>
<br>
<!--
    <div class="input-field col s6">
    <i class="material-icons prefix">date_range</i>
    <select class="js-example-basic-single form-control" name="datacontrato" id="datacontrato">
    <option value="" disabled selected>Selecione a data</option>
    <option value="">O contratoAntes de 22/03/2020</option>
    <option value="Para os contratos firmados após 22/03/2020, será bastante desafiador comprovar que a pandemia da Covid-19 e/ou seus efeitos caracterizam eventos supervenientes extraordinários e/ou imprevisíveis, o que pode obstar a aplicação dos institutos da força maior/caso fortuito ou das teorias da imprevisão/onerosidade excessiva. Nesses casos, tem-se que demonstrar que as partes não possuíam, nem deviam possuir, a ciência dos riscos envolvidos no momento da assinatura do termo contratual, não sendo suficiente a alegação genérica de que foram afetadas pela pandemia.<br><br>Nesse sentido, a jurisprudência nacional já reconheceu que “o estado de pandemia não pode, por si só, servir de apoio para revisão dos negócios firmados.” (TJ-SP - AI: 20931483620208260000 SP 2093148-36.2020.8.26.0000, Relator: Afonso Bráz, Data de Julgamento: 26/06/2020, 17ª Câmara de Direito Privado, Data de Publicação: 26/06/2020).">Depois de 22/03/2020</option>
    </select>
    <label for="dataaditivo">Data do contrato</label>
    </div>
 -->

   
 <div class="input-field col s6">
 <i class="material-icons prefix">date_range</i>
  <select class="js-example-basic-single form-control" id="cliente" name="datacotrato">
  <option value="" disabled selected> Selecione a data</option>
   <option value="">Antes de 22/03/2020</option>
   <option value="Para os contratos firmados após 22/03/2020, será bastante desafiador comprovar que a pandemia da Covid-19 e/ou seus efeitos caracterizam eventos supervenientes extraordinários e/ou imprevisíveis, o que pode obstar a aplicação dos institutos da força maior/caso fortuito ou das teorias da imprevisão/onerosidade excessiva. Nesses casos, tem-se que demonstrar que as partes não possuíam, nem deviam possuir, a ciência dos riscos envolvidos no momento da assinatura do termo contratual, não sendo suficiente a alegação genérica de que foram afetadas pela pandemia.<br><br>Nesse sentido, a jurisprudência nacional já reconheceu que “o estado de pandemia não pode, por si só, servir de apoio para revisão dos negócios firmados.” (TJ-SP - AI: 20931483620208260000 SP 2093148-36.2020.8.26.0000, Relator: Afonso Bráz, Data de Julgamento: 26/06/2020, 17ª Câmara de Direito Privado, Data de Publicação: 26/06/2020)."> Depois de 22/03/2020</option>
   <label for="dataaditivo">Data do contrato</label>
</select>












<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
$('select').on('change', function(){ 
  if( $(this).find('option:selected').text().indexOf('Depois') > 0) {
    alert('Para os contratos firmados após 22/03/2020, será bastante desafiador comprovar que a pandemia da Covid-19 e/ou seus efeitos caracterizam eventos supervenientes extraordinários e/ou imprevisíveis, o que pode obstar a aplicação dos institutos da força maior/caso fortuito ou das teorias da imprevisão/onerosidade excessiva.Nesses casos, tem-se que demonstrar que as partes não possuíam, nem deviam possuir, a ciência dos riscos envolvidos no momento da assinatura do termo contratual, não sendo suficiente a alegação genérica de que foram afetadas pela pandemia.');
  }
});
</script>













<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('select').formSelect();
  });
</script>




</body>


<?php include_once "./incluir/rodape.php"; ?>
</html>


