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
            <form name="frmpesquisa" method="get" action="busca.php" class="d-flex" role="search" style="margin-left: 15px; margin-top: 3px;">
              <input name="txtbuscar" class="form-control me-2" type="text" placeholder="Pesquisar...">
              <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
            
          </div>
            <ul class="nav nav-pills justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" href="#">Contato</a>
                </li>

                <?php if(empty($_SESSION['ID'])) { ?>
                <li class="nav-item"><a class="nav-link active" href="login.php">Login</a></li>
                <?php } else { if($_SESSION['Status'] == 0) {
                    $consulta_usuario = $cn->query("select nm_usuario from tbl_usuario where cd_usuario = '$_SESSION[ID]'");
                    $exibe_usuario = $consulta_usuario->fetch(PDO::FETCH_ASSOC);                
                ?>
                    <li class="nav-item"><a class="nav-link"  href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                    </svg> <?php echo $exibe_usuario['nm_usuario']; ?></a></li>
                    <li class="nav-item"><a class="nav-link active" href="sair.php">Sair</a></li>
                <?php } else { ?>
                    <li class="nav-item"><a class="nav-link"  href="adm.php"><button class="btn btn-sm btn-danger">Administrador</button></a></li>
                    <li class="nav-item"><a class="nav-link active" href="sair.php">Sair</a></li>
                
                
                <?php } } ?>
            
            </ul>
        </div>
</nav>