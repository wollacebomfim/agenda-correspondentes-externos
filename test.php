<div class="form-field">
<label for="cargo">Selecione a UF</label>
<select name="cargo" required>
<option value="" disabled selected >Selecione a UF</option>
<?php
include_once "./conexao/conexao.php";
$sql = "SELECT * FROM agenda2";
$resultado = mysqli_query($conexao, $sql);
while($dados = mysqli_fetch_array($resultado)){
  echo   "<option value=\"".$dados["uf"]."\">".$dados["uf"]."</option>";
}
?>
</select>
</div>   