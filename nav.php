<?php include 'conexao.php' ?>
<nav class="navbar navbar-expand-lg navbar-light bg-dark" data-bs-theme="dark">
      <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/asset-15.png" alt="" width="32" height="32" class="d-inline-block align-text-top">
                TenisWord
              </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="nav nav-tabs" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
              </li>              
              <li class="nav-item">
                <a href="lanc.php" class="nav-link">Lançamentos</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Categorias
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="categorias.php?cat=Nike">Nike</a></li>
                  <li><a class="dropdown-item" href="categorias.php?cat=Adidas">Adidas</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="categorias.php?cat=Mizuno">Mizuno</a></li>
                </ul>
              </li>              
            </ul>
            <form class="d-flex" role="search" style="margin-left: 15px; margin-top: 3px;">
              <input class="form-control me-2" type="search" placeholder="Pesquisar..." aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
            
          </div>
            <ul class="nav nav-pills justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" href="#">Contato</a>
                </li>

                <?php if(empty($_SESSION['ID'])) { ?>
                <li class="nav-item">
                <a class="nav-link active" href="login.php">Login</a>
                </li>

                <?php } else {
                $consulta_usuario = $cn->query("select nm_usuario from tbl_usuario where cd_usuario = '$_SESSION[ID]' ");
                $exibe_usuario = $consulta_usuario->fetch(PDO::FETCH_ASSOC);
                ?>

                <li class="nav-item"><a class="nav-link active" href="#"><?php echo $exibe_usuario['nm_usuario']; ?></a></li>
                <li class="nav-item"><a class="nav-link active" href="sair.php">Sair</a></li>
                <?php } ?>
            
            </ul>
        </div>
</nav>