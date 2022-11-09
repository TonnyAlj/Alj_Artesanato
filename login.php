<h2>Login</h2>

<form method="POST" action="validar_login.php">
    <div class="login">
        <label class="form-label">E-mail</label>
        <input type="text" name="usuario" class="form-control mb-2">

        <label class="form-label">Senha</label>
        <input type="password" name="senha" class="form-control mb-2">

        <button type="submit" class="btn w-100" style="background-color:orangered; color:white">Enviar</button>

        <?php
            if($_GET['msg'] == true) :
        ?>
         <p class="alert alert-danger text-center my-3"><?= $_GET['msg'];?></p>
        <?php
            endif;
        ?>
        
    </div>
</form>
