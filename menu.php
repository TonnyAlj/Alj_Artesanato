<?php
    session_start();
    if(isset($_SESSION['alj_artesanato_user_nome']) and isset($_SESSION['alj_artesanato_user_email'])) :
?>

<div class="titulo">
    Meus Links
</div>
<ul>
    <li><a href="./?pg=usuario/meus_anuncios.php">Anúncios</a></li>
    <li><a href="./?pg=anuncio/form.php&action=insert">Quero Anunciar</a></li>
</ul>

<?php
    endif;
?>

<div class="titulo">Categorias</div>
<ul>
    <?php
        include "conexao.php";

        $sql = "SELECT * from tb_categoria ORDER BY nome";

        $result = mysqli_query($_conn, $sql);

        while($cat = mysqli_fetch_array($result)):
    ?>
    <li><a href="./?pg=anuncio/list.php&categoria=<?= $cat['id']?>"><?= $cat["nome"]?></a></li>

    <?php
        endwhile;
    ?>
</ul>