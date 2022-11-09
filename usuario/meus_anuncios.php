<h2>Meus anúncios</h2>

<?php include "conexao.php";

    $sql = "SELECT 
        tb_anuncio.id,
        tb_anuncio.descricao, 
        tb_anuncio.destaque, 
        tb_categoria.nome AS categoria, 
        tb_usuario.nome,
        tb_usuario.telefone
        FROM tb_anuncio 
        INNER JOIN tb_usuario 
        ON tb_anuncio.id_usuario = tb_usuario.id 
        INNER JOIN tb_categoria 
        ON tb_anuncio.id_categoria = tb_categoria.id 
        WHERE tb_anuncio.id_usuario = " . $_SESSION["alj_artesanato_user_id"];
    
    $result = mysqli_query($_conn, $sql);

?>
<table class="table table-hover">
    <tr>
        <th>Categoria</th>
        <th>Destaque</th>
        <th>Descrição</th>
        <th></th>
    </tr>
    <?php
    while ($anuncio = mysqli_fetch_array($result)) : 
    ?>
        <tr>
            <td><?= $anuncio["categoria"] ?></td>
            <td><?= $anuncio["destaque"] ?></td>
            <td><?= $anuncio["descricao"] ?></td>
            <td>
                <button class="btn primario"><i class="fas fa-edit"></i></button>
                <button class="btn primario"><i class="fas fa-trash-alt"></i></button>
            </td>
        </tr>
    <?php   
    endwhile;
    ?>

</table>