<div class="container">
    <div class="grade">
        <h2>Login</h2>
        <form action="src/autenticar_login.php" method="POST">
            <label for="input_login">Login</label>
            <input autocomplete="off" required class="input" type="text" name="login" id="input_Login">
          
            <label for="input_senha">Senha</label>
            <input required class="input" type="password" name="senha" id="input_senha">
</br>
            <?php if (isset($_GET['erro'])) { ?>
                <span class="error"><?php echo $_GET['erro'] ?></span>
            <?php } ?>
            
            <input style="float: right; margin-top: 20px" class="botao" type="submit" value="Fazer login">
        </form>
    </div>
</div>