<?php

    session_start();

    include '../conexao.php';

    $categoria = $_POST['categoria'];
    $destaque = $_POST['destaque'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];

    $sql = "INSERT INTO tb_anuncio(id_usuario, id_categoria, descricao, destaque, preco) 
    VALUES (" . $_SESSION['alj_artesanato_user_id'] . ", $categoria, '$descricao', '$destaque', $preco)";

    if($result = mysqli_query($_conn, $sql)) {
        echo  "O anúncio foi cadastrado com sucesso!";
        Header("Location: ../?pg=user/meus_anuncios.php");
    }
    else {
        echo "Erro ao inserir anúncio: " . mysqli_error($_conn);
    }

    echo "<br/></br><a href=\"../?pg=anuncio/form.php&action=insert\">[VOLTAR]</a>"
?>