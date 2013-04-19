<div class="login">
    <h2 class="login-name"><img src="style/image/member.png" class="icon" />Mon Compte</h2>
                
    <p><?php echo $user_name; ?><br />
    <?php echo $rank_name; ?></p>
                
    <a href="index.php?page=profile"><img src="style/image/parametre.png" title="Paramètres du Compte" /></a>
    <a href="index.php?page=changePassword"><img src="style/image/changePassword.png" title="Changer de Mot de Passe" /></a>
    <a href="index.php?module=user&action=logout"><img src="style/image/deconnexion.png" title="Déconnexion" /></a>
</div>