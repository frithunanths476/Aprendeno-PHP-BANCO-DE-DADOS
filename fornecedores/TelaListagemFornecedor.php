<?php

    include("../config/cabecalho.php");
    include("../conexao.php");

    $sql = "SELECT id, nome, razaosocial, cnpj, tipoempresa, cpf FROM fornecedores";

    $resultado = $conexao->query($sql);

    if($resultado->rowCount() > 0){
        echo "<table border=1";
        echo "
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Razão Social</th>
                <th>CNPJ</th>
                <th>Tipo Empresa</th>
                <th>CPF</th>
                <th>Editar</th>
                <th>Deletar</th>
            </tr>
        ";
        foreach($resultado as $row){
            echo "<tr>";
            echo "<td>" .$row['id']. "</td>";
            echo "<td>" .$row['nome']. "</td>";
            echo "<td>" .$row['razaosocial']. "</td>";
            echo "<td>" .$row['cnpj']. "</td>";
            echo "<td>" .$row['tipoempresa']. "</td>";
            echo "<td>" .$row['cpf']. "</td>";
            echo '<td><a href="TelaEditarFornecedor.php?id='.$row['id'].'">Editar</a></td>';
            echo '<td><a href="ExcluirFornecedor.php?id='.$row['id'].'">Deletar</a></td>';
            echo "<tr>";
        }
        echo "</table>";
    }

    include("../config/rodape.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="../ligacao.php"><button type="submit" class="btn btn-outline-primary">Voltar</button></a>
    <a href="cadastro.php"><button type="submit" class="btn btn-outline-primary">Cadastrar</button></a>
</body>
</html>