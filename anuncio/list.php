<h2>Anúncios</h2>

<?php

    $sql = "SELECT 
                tb_anuncio.id,
                tb_anuncio.destaque,
                tb_anuncio.descricao,
                tb_anuncio.foto,
                tb_categoria.nome AS categoria,
                tb_usuario.nome,
                tb_usuario.telefone 
                FROM tb_anuncio 
                INNER JOIN tb_usuario 
                    ON tb_anuncio.id_usuario = tb_usuario.id 
                INNER JOIN tb_categoria 
                    ON tb_anuncio.id_categoria = tb_categoria.id";

    if ( $_GET["categoria"]     ) {
        $sql .= " WHERE id_categoria = " . $_GET["categoria"];
    }

    $result = mysqli_query($_conn, $sql);
?>

<div class="row row-col-3">

    <?php
        while ($anuncio = mysqli_fetch_array($result)) : 
    ?>
    <div class="col m-1">
        <div  class="card" style="width: 16rem;">

            <div class="card-header">
                <b><?= $anuncio["destaque"]?></b>
            </div>
            <img src="<?= $anuncio["foto"]?>">
            <div class="card-body">
                <p>
                    <?= $anuncio["categoria"]?>
                </p>
                <p>
                    <?= $anuncio["descricao"]?>
                </p>
            </div>
            <div class="card-footer">
                <span>Contato: <?= $anuncio["nome"]?> (<?= $anuncio["telefone"]?>)</span>
            </div>

        </div>
    </div>
    <?php
     endwhile; 
    ?>

</div>