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
        <form action="loginUsuario.php" method="post">
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


 <!--       <div class="container">
      <div class="row d-flex justify-content-center">
          
          <div class="col-md-6">
              <div class="card p-3 px-5 py-5 mt-3 align-items-center">
        <span class="car">Sistema de Cadastro de Veículos</span>
        <span class="signin mt-3">Entre com seu nome de usuário</span>
           <input type="text" name="username" id="username" required class="btn btn1 btn-light  mt-3" placeholder="Usuário"> 
      
      <input type="text" name="username" id="username" required class="btn btn1 btn-light  mt-3" placeholder="Senha"/>
      
      <button type="button" class="btn btn2 btn-light mt-3">ENTRAR</button>
      <span class="forgot mt-4">Esqueci minha senha</span>
      <span class="account mt-4">Não tem uma conta?      <span class="signup">SE CADASTRE</span></span>
      
      
       </div> 
          </div>
          
      </div>
    </div>

-->

    



        