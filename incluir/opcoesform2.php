
<script>
$('select').on('change', function(){ 
  if( $(this).find('option:selected').text().indexOf('Devendo') > 0) {
    alert('O Cliente esta devendo pelo jQuery!');
  }
});
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<select class="js-example-basic-single form-control" id="cliente" name="cliente">
   <option value="Selecione o Cliente"> Selecione o Cliente</option>
   <option value="Selecione o Cliente2"> Selecione o Cliente 2 Devendo</option>
   <option value="Selecione o Cliente3"> Selecione Devendoo Cliente</option>
   <option value="Selecione o Cliente4"> Selecione o Cliente</option>
</select>


