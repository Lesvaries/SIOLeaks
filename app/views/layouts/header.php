<body>
  <header class="navbar navbar-expand-lg navbar-light main-header">
    <div class="container header-container">
      <div class="d-flex align-items-center justify-content-between w-100 header-content">
        
        <!-- Logo -->
        <a href="index.php?section=index" class="navbar-brand logo">
          <img src="./public/assets/img/icon/icon_header.png" alt="Logo du site de cours SIO" height="40">
        </a>

        <!-- Bouton toggle pour mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav"
          aria-controls="mainNav" aria-expanded="false" aria-label="Ouvrir le menu de navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu de navigation -->
        <nav class="navbar-collapse collapse nav-menu" id="mainNav" role="navigation" aria-label="Menu principal">
            <ul class="d-flex align-items-center ms-auto" role="menubar">
                <li class="nav-item" role="menuitem">
                    <a href="index.php?section=index" class="nav-link">Accueil</a>
                </li>
                <li class="nav-item" role="menuitem">
                    <a href="index.php?section=cours" class="nav-link">Cours</a>
                </li>

            <?php if (!$connected): ?>
                <li class="nav-item" role="menuitem">
                    <a href="index.php?section=sign-up" class="nav-link">S'inscrire</a>
                </li>
                <li class="nav-item" role="menuitem">
                    <a href="index.php?section=login" class="nav-link">Se connecter</a>
                </li>
            <?php else: ?>
                <li class="nav-item" role="menuitem">
                    <a href="index.php?section=account" class="nav-link">
                    <?= htmlspecialchars($_SESSION['username']) ?>
                    </a>
                </li>
            <?php if ($roleSessionUser == 1): ?>
                <li class="nav-item" role="menuitem">
                  <span class="nav-link">Admin</span>
                </li>
            <?php endif; ?>
                <li class="nav-item" role="menuitem">
                    <a href="index.php?section=logout" class="nav-link">Se déconnecter</a>
                </li>
            <?php endif; ?>
                <!-- Button Dark Theme -->
                <li class="nav-item" role="menuitem">
                    <button onclick="toggle()" id="theme-toggle" class="btn btn-themme">
                        <i class="fas fa-sun" id="theme-icon"></i>
                    </button>
                </li>
                
          </ul>
        </nav>
      </div>
    </div>
  </header>