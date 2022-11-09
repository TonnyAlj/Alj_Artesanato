<?php
    include 'conexao.php';
?>

<h2>Novo anúncio</h2>

<form method="POST" action="anuncio/controller.php" enctype="multipart/form-data"> 
    <label>Categoria</label> 
    <select name="categoria" class="form-select mb-2">
        <option value=""></option>
        <?php
            $sql = 'SELECT * FROM tb_categoria ORDER BY nome';
            $result = $_conn->query($sql);
            while($cat = mysqli_fetch_array($result)) :
        ?>
            <option value="<?= $cat['id'] ?>"><?= $cat['nome']?></option>
        
        <?php endwhile; ?>
    </select> 

    <label>Destaque</label> 
    <input type="text" name="destaque" class="form-control mb-2"/> 

    <label>Preço</label> 
    <input type="number" name="preco" class="form-control mb-2"/> 

    <label >Descrição</label> 
    <textarea name="descricao" class="form-control mb-2"></textarea>

    <label>Imagem</label>
    <input type="file" name="foto" class="form-control mb-2">
    
    <button type="submit" class="btn">Confirmar</button>

</form>