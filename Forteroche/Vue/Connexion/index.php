<?php $this->titre = "Billet simple pour l'Alaska - Connexion Administrateur" ?>

<p>Vous devez être connecté pour accéder à cette zone.</p>

<form action="connexion/connecter" method="post">
    <input name="login" type="text" placeholder="Login" required autofocus>
    <input name="mdp" type="password" placeholder="Mot de passe" required>
    <button type="submit">Connexion</button>
</form>

<?php if (isset($msgErreur)): ?>
    <p><?= $msgErreur ?></p>
<?php endif; ?>