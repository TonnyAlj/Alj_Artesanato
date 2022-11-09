<!DOCTYPE html>

    <?php
        error_reporting(E_ERROR | E_PARSE);
        session_start();
    ?>

<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>ALJ Artesanato</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="./"><img src="imagens/logo.png" alt="Alj Artesanatos"/></a>

                <div class="d-flex">
                    <?php
                        if(isset($_SESSION['alj_artesanato_user_id'])) {
                            $login_page = 'logout.php';
                            $login_name = 'Logout';
                        }else {
                            $login_page = '?pg=login.php';
                            $login_name = 'Login';
                        }

                        if(isset($_SESSION['alj_artesanato_user_id'])) {
                            $cds_page = '?pg=usuario/carrinho.php';
                            $cds_name = '<i class="bi bi-cart4" style="padding: 8px 16px"></i>';
                        }else {
                            $cds_page = '?pg=usuario/form.php';
                            $cds_name = 'Cadastre-se';
                        }
                    ?>
                    <li><a class="btn" href="<?= $login_page?>"><?= $login_name ?></a></li>
                    <li><a class="btn" href="<?= $cds_page?>"><?= $cds_name ?></a></li>
                </div>
            </div>    
        </nav>
    </header>

    <nav class="principal">
        <?php include 'menu.php'; ?>
    </nav>

    <aside>
        <div class="titulo">
            <p>Seja Bem vindo <b><?php echo  $_SESSION["alj_artesanato_user_nome"]; ?></b> ao ALJ Artesanatos!</p>
        </div>
    </aside>

    <main>
        <?php
            if($_GET['pg'])
                include $_GET['pg'];
            else
                include 'anuncio/list.php';
        ?>
    </main>

    <footer>
       <div> Todos os direitos reservados a @ALJArtesanato </div>
       <div> Medianeira-PR &nbsp;&nbsp;&nbsp;
            <?php
            $agora = date('d/m/Y');
            echo $agora;
            ?>
       </div>
    </footer>
    
</body>
</html>