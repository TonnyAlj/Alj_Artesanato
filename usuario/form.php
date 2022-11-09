<h2>Cadastrar-se</h2>

<form action="usuario/user.controller.php" method="POST"> 

    <label for="nome">Nome</label> 
    <input type="text" name="nome" class="form-control mb-2"/> 
    
    <label for="nascimento">Data de Nascimento</label> 
    <input type="date" name="nascimento" class="form-control mb-2"/> 
    
    <label for="sexo">Sexo</label> 
    <select name="sexo" class="form-control mb-2"> 
        <option value="F">Feminino</option> 
        <option value="M">Masculino</option> 
    </select> 
    
    <label for="email">E-mail</label> 
    <input type="mail" name="email" class="form-control mb-2"/> 
    
    <label for="telefone">Telefone</label> 
    <input type="tel" name="telefone" class="form-control mb-2"/> 
    
    <label for="cidade">Cidade</label> 
    <input type="text" name="cidade" class="form-control mb-2"/> 
    
    <label for="estado">Estado</label> 
    <input type="text" name="estado" class="form-control mb-2"/> 
    
    <label for="pais">País</label> 
    <input type="text" name="pais" placeholder="Brasil" class="form-control mb-2"/> 
    
    <label for="cep">CEP</label> 
    <input type="text" name="cep" class="form-control mb-2"/> 
    
    <label for="senha1">Senha</label> 
    <input type="password" name="senha1" class="form-control mb-2"/> 
    
    <label for="senha2">Confirmar senha</label> 
    <input type="password" name="senha2" class="form-control mb-2"/> 
    
    <button type="submit" class="btn">Cadastrar</button>

</form>