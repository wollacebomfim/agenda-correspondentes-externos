<?php 
include_once './conexao/conexao.php';



$pesquisa = filter_input(INPUT_POST, 'pesquisa', FILTER_SANITIZE_STRING);

$querySelect = $conexao->query("SELECT * FROM agenda WHERE uf LIKE '%$pesquisa%'");

while($registros = $querySelect->fetch_assoc()):
    $id = $registros['id'];
    $titulo = $registros['titulo'];
    $uf = $registros['uf'];
    $cidade = $registros['cidade'];
    $responsavel = $registros['responsavel'];
    $oab = $registros['oab'];
    $correspondente = $registros['correspondente'];

    
    
echo "<tr>";
echo "<td>$titulo</td><td>$uf</td><td>$correspondente</td><td>$cidade</td><td>$oab</td><td>$responsavel</td><td><a href=info.php?id=$id' target='_blank'><i class='material-icons'>search</td>";
echo "</tr>";
endwhile;
?>