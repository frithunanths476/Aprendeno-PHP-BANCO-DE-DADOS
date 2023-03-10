<?php
    include("../config/cabecalho.php");
?>

<div class="container">
    <h1>Registro de usuário</h1>
    <form action="" method="POST" >
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" required placeholder="Informe o seu nome">

        <label for="login">Login</label>
        <input type="text" name="login" id="login" required placeholder="Informe o login">

        <label for="email">E-Mail</label>
        <input type="email" name="email" id="email" required placeholder="Informe o seu E-mail">

        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" required placeholder="Informe a sua senha">

        <button type="submit" class="btn btn-outline-primary"><a href="TelaListagem.php">Cadastrar</a></button>
    </form>

    <?php
        //conectar com o banco
        include("../conexao.php");

        //formulario foi enviado?
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $nome = $_POST["nome"];
            $login = $_POST["login"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];

            $query = "SELECT * FROM usuario WHERE login = :login and email = :email";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(":login", $login);
            $stmt->bindValue(":email", $email);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($result){
                die("Usuário já existente");
            }else {
                $sql = "INSERT INTO usuario(nome,login,email,senha) VALUES (:nome, :login, :email, :senha)";
            $stmt = $conexao->prepare($sql);
            $stmt->execute([
                "nome" => $nome,
                "login" => $login,
                "email" => $email,
                "senha" => $senha
            ]);

            if($stmt->rowCount() > 0){
                echo "<div class='sucess'>Usuário cadastrado com sucesso</div>";
            }else{
                echo "<div class='error'>Erro ao cadastrar o Usuário</div>";
            }

            //fechar a conexao
            $conexao = null;
            }

            
        }
    ?>

</div>

<?php
    include("../config/rodape.php");
?>
