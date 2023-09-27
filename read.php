<?php 

require_once './conexao/conexao.php';

$pesquisa = filter_input(INPUT_POST, 'pesquisa', FILTER_SANITIZE_STRING);
$query = mysqli_query($conexao, "SELECT DISTINCT * FROM agenda2 WHERE uf='$pesquisa' ORDER BY cidade ASC");
//$query = mysqli_query($conexao, "SELECT DISTINCT * FROM agenda2 WHERE '%$pesquisa%' LIKE '%$pesquisa%'");
//$query = mysqli_query($conexao, "SELECT DISTINCT * FROM agenda2.uf WHERE uf LIKE '%$pesquisa%' ORDER BY cidade ASC");
$num   = mysqli_num_rows($query);
echo '  <fieldset class="formulario">
        <div id="resultado">
        <table>
            <thead>
                <tr>
                
                <th>UF</th>
                <th>Cidade</th>
                <th>Correspondente</th>
              
                <th>Responsável</th>
                <th>Ver</th>
                </tr>
            </thead>

            <tbody>
            </div>
            </fieldset>
    ';
if($num >0){
    while($row = mysqli_fetch_assoc($query)){
   
    echo    '<tr>';
    echo    '<td>'.$row["uf"].'</td><td>'.$row["cidade"].'</td><td>'.$row["correspondente"].'</td><td>'.$row["responsavel"].'</td><td><a href="info.php?id='.$row["id"].'"><i class="material-icons">search</td>';
    echo    '</tr>';
    }
}else{
    echo "Pesquisando...";
}
