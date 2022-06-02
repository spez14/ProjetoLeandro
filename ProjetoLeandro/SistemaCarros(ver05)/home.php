<!-- Inclui o header 
 -->


<!-- Aplica o estilo do form -->

<style>  
        div {
            background-color: #bcb4ac;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 30px;
            border-radius: 10px;
            text-align: center;
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
        a {
            text-decoration: none;
            color: White;
            border: 3px solid #e6dbd1;
            border-radius: 10px;
            padding: 10px;
        }
        a:hover{
               background-color: #e0bfa0;
        }
</style>

<body>
<div>
                <!-- Texto Principal -->
        <h1>Sistema de Cadastro de Veículos</h1>

<!-- Formulário para realizar o login -->
        
                <a href="tela_de_login.php">Login</a>
                <a href="formcadastrousuario.php">Cadastre-se</a>
        
        
        <?php include "footer.php" ?>
</div>
</body>


 

    



        