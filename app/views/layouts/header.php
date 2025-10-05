

<body>
    <header class="main-header">
        <div class="header-container">
            <div class="header-content">
            <a href="index.php?section=index" class="logo"> <img src="./public/assets/img/icon/icon_header.png" alt="Logo"> </a>

            <nav class="nav-menu">
                <ul>

                    <li>
                        <a href="index.php?section=index">Accueil</a>
                    </li>

                    <li>
                        <a href="index.php?section=cours" title="Cours">Cours</a>
                    </li>

                    <li>
                        <a href="index.php?section=about" title="About">About us</a>
                    </li>

                    <li>
                        <a href="index.php?section=contact" title="Contact">Contact</a>
                    </li>

                    <?php
                    if($connected == false )
                    {
                        echo "
                            <li>
                                <a href='index.php?section=sign-up' title='SignUp'>S'inscrire</a>
                            </li>
                        ";
                    }
                    ?>
                    
                    <?php
                    if($connected == false )
                    {
                        echo "
                            <li>
                                <a href='index.php?section=login'>Se connecter</a>
                            </li>
                        ";                        }
                    else
                    {
                        echo "
                            <li>
                                <a class='nav-link' href='index.php?section=logout'>Se déconnecter</a>
                            </li>
                        ";
                    }
                    ?>

                    <?php
                    if($connected == true )
                    {

                        echo "
                            <li>
                                <a href='index.php?section=profile'> <i class='fa-solid fa-circle-user'></i></a>
                            </li>
                        ";
                    }
                    if($connected == true )
                    {
                        if($roleSessionUser == 1 )
                        {
                            echo "
                                <li>
                                    <p>Admin</p>
                                </li>
                            ";
                        }
                    }


                    ?>


                </ul>
            </nav>

            </div>
        </div>
    </header>


</body>