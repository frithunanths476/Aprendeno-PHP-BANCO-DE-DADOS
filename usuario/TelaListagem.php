<?php

    include("../config/cabecalho.php");
    include("../conexao.php");

    $sql = "SELECT id, nome, login, email FROM usuario";

    $resultado = $conexao->query($sql);

    if($resultado->rowCount() > 0){
        echo "<table border=1>";
        echo "
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Login</th>
                <th>E-Mail</th>
                <th>Editar</th>
                <th>Deletar</th>
            </tr>
        ";
        foreach($resultado as $row){
            echo "<tr>";
            echo "<td>" .$row['id']. "</td>";
            echo "<td>" .$row['nome']. "</td>";
            echo "<td>" .$row['login']. "</td>";
            echo "<td>" .$row['email']. "</td>";
            echo '<td><a href="TelaEditar.php?id='.$row['id'].'">Editar</a></td>';
            echo '<td><a href="deletar.php?id='.$row['id'].'">Deletar</a></td>';
            echo "</tr>";
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
    <a href="TelaRegistro.php"><button type="submit" class="btn btn-outline-primary">Cadastrar</button></a>
</body>
</html>