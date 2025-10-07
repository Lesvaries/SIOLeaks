<body>
    <header class="navbar navbar-expand-lg navbar-light bg-light main-header">
        <div class="container header-container">
            <div class="d-flex align-items-center justify-content-between w-100 header-content">
                <!-- Logo -->
                <a href="index.php?section=index" class="navbar-brand logo">
                    <img src="./public/assets/img/icon/icon_header.png" alt="Logo" height="40">
                </a>

                <!-- Bouton toggle pour mobile (Bootstrap) -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav"
                    aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Menu de navigation -->
                <nav class="navbar-collapse collapse nav-menu" id="mainNav">
                    <ul class="d-flex align-items-center ms-auto">

                        <li class="nav-item">
                            <a href="index.php?section=index" class="nav-link">Accueil</a>
                        </li>

                        <li class="nav-item">
                            <a href="index.php?section=cours" title="Cours" class="nav-link">Cours</a>
                        </li>

                        <li class="nav-item">
                            <a href="index.php?section=about" title="About" class="nav-link">About us</a>
                        </li>

                        <li class="nav-item">
                            <a href="index.php?section=contact" title="Contact" class="nav-link">Contact</a>
                        </li>

                        <?php if (!$connected): ?>
                            <li class="nav-item">
                                <a href="index.php?section=sign-up" title="SignUp" class="nav-link">S'inscrire</a>
                            </li>
                            <li class="nav-item">
                                <a href="index.php?section=login" class="nav-link">Se connecter</a>
                            </li>
                        <?php else: ?>
                            <li class="nav-item">
                                <a href="index.php?section=profile" class="nav-link"><?= htmlspecialchars($_SESSION['username']) ?></a>
                            </li>
                            <?php if ($roleSessionUser == 1): ?>
                                <li class="nav-item">
                                    <span class="nav-link text-muted">Admin</span>
                                </li>
                            <?php endif; ?>
                            <li class="nav-item">
                                <a href="index.php?section=logout" class="nav-link">Se déconnecter</a>
                            </li>
                        <?php endif; ?>

                    </ul>
                </nav>
            </div>
        </div>
    </header>