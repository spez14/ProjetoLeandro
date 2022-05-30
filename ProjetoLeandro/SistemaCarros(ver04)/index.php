<!-- Inclui o header 
<?php require_once "header.php"; ?> -->


<!-- Aplica o estilo do form -->

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
</style>

<body>
<div>
                <!-- Texto Principal -->
        <h1>Sistema de Cadastro de Veículos</h1>

<!-- Formulário para realizar o login -->
        <form action="painelUsuario.php" method="post">
                <!-- Campo de input do usuário -->
                <p> <label for="name"></label>
                <input type="text" name="name" id="name" required placeholder="Insira seu usuário"></p>
                <!-- Campo de input da senha -->
                <p> <label for="password"></label>
                <input type="password" name="password" id="password" required placeholder="Insira sua senha"></p>
                <!-- Botão de submit -->
                <input type="submit" value="Entrar" name="submit" id="submit"> 
        </form> 

        <?php include "footer.php" ?>
</div>
</body>


 

    



        