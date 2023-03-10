<?php
    include("../config/cabecalho.php");
?>

<div class="container">
    <h1>Cadastro de fornecedor</h1>
    <form action="" method="POST">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" required placeholder="Informe o nome do fornecedor">

        <label for="razaosocial">Razão Social</label>
        <input type="text" name="razaosocial" id="razaosocial" required placeholder="Informe a razão social do fornecedor">

        <label for="cnpj">CNPJ</label>
        <input type="text" name="cnpj" id="cnpj" required placeholder="Informe o CNPJ do fornecedor">

        <label for="tipoempresa">Tipo da Empresa</label>
        <input type="text" name="tipoempresa" id="tipoempresa" required placeholder="Informe o tipo de empresa do fornecedor">

        <label for="cpf">CPF</label>
        <input type="text" name="cpf" id="cpf" required placeholder="Informe o CPF do fornecedor">

        <a href="TelaListagemFornecedor.php"><button type="submit" class="btn btn-outline-primary">Cadastrar</button></a>
    </form>

    <?php
        
        include("../conexao.php");

        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $nome = $_POST["nome"];
            $razaosocial = $_POST["razaosocial"];
            $cnpj = $_POST["cnpj"];
            $tipoempresa = $_POST["tipoempresa"];
            $cpf = $_POST["cpf"];

            $sql = "SELECT * FROM fornecedores WHERE razaosocial = :razao AND cpf = :cpf AND cnpj = :cnpj";
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":razao", $razaosocial);
            $stmt->bindValue(":cpf", $cpf);
            $stmt->bindValue(":cnpj", $cnpj);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($row){
                die("Fornecedor já existente");
            }else {
                $sql = "INSERT INTO fornecedores(nome,razaosocial,cnpj,tipoempresa,cpf) VALUES (:nome, :razaosocial, :cnpj, :tipoempresa, :cpf)";
                $stmt = $conexao->prepare($sql);
                $stmt->execute([
                    "nome" => $nome,
                    "razaosocial" => $razaosocial,
                    "cnpj" => $cnpj,
                    "tipoempresa" => $tipoempresa,
                    "cpf" => $cpf
                ]);

                if($stmt->rowCount() > 0){
                    echo "<div class='sucess'>Fornecedor cadastrado</div>";
                }else{
                    echo "<div class='error'>Erro ao cadastratar o Fornecedor</div>";
                }

                $conexao = null;
            }
        }
    ?>

</div>

<?php
    include("../config/rodape.php");
?>