<?php 
        //Inclusão de página com o conteúdo do cabeçalho
   
?>

<style>  

        div {
            background-color: #bcb4ac;
            padding: 20px;
            margin: 200px auto;
        }
        h1  {text-align: center;
            /*color:#219bff;*/
            color: #000000;
            font-size: 50px;} 
        form {text-align: center;}
        label {display: table-cell;
                font-size: 20px;}
        input {font-size: 20px;}
        footer {text-align: center;
                font-size: 20px}
        body {
                background-color: #e6dbd1
        }
        legend {
                text-align: center;
        }
</style>
        <a href="index.php">Voltar</a>
        <h1>Sistema de Gerenciamento de veículos</h1>
        <!-- Início do Formulário de cadastro de alunos -->
        <fieldset>
                <legend>Formulário de Cadastro de usuários</legend><br><br>
                <form action="cadastrousuario.php" method="post">
                        <!-- 
                            name
                            password
                            email
                            tel
                        -->
                        <label for="name"></label>
                        <input type="text" name="name" id="name" placeholder="Nome"><br><br>

                        <label for="password"></label>
                        <input type="text" name="password" id="password" placeholder="Senha"><br><br>

                        <label for="email"></label>
                        <input type="text" name="email" id="email" placeholder="E-mail"><br><br>

                        <label for="tel"></label>
                        <input type="text" name="tel" id="tel" placeholder="Telefone"><br><br>
  
                        <input type="submit" value="CADASTRAR USUÁRIO">
                </form>
        </fieldset>
        <!-- Fim do Formulário de cadastro de veículos -->
        
<?php include "footer.php" ?>