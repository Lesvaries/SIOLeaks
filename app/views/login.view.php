<?php
include_once('app/views/layouts/header.php');
?>

<body>
    <section class="container">
        <div class="login">
            <h1>Se Connecter</h1>
            <form action="index.php?section=cnxAuth" method="POST" name="FormCnx">
                <div class="errorMsg">
                    <label><p><?php echo $msgCnx?></p></label>
                </div>
                <div class="form-username">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="wlogin" placeholder="Votre username ou email" required>
                </div>
                <div class="form-pswd">
                    <label for="pswd">Mot de passe</label>
                    <input type="password" id="pswd" name="wpswd" placeholder="Votre mot de passe" required>
                </div>
                <div class="form-submit">
                    <button class="btn-submit" type="submit">Valider</button>
                </div>
            </form>
        </div>
    </section>
</body>