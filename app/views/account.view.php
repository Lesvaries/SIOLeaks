<?php
// Récupération des informations du compte
$wusrAcc   = $account['username'];
$wemailAcc = $account['email'];
$wCreationDate  = $account['created_at'];
?>

<!-- Affichage -->
<h1>Profil de <?php echo htmlspecialchars($wusrAcc); ?></h1>
<p>Email : <?php echo htmlspecialchars($wemailAcc); ?></p>
<p>Date de création du compte : <?php echo htmlspecialchars($wCreationDate); ?></p>