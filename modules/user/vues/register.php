<form method="post" action="index.php?module=user&action=register" enctype="multipart/form-data" >
    <p><strong><a href="index.php"><img src="style/image/home.png" class="icon" /></a>: Inscription</strong></p>
    <h2><img src="style/image/emerald.png" class="icon" />Inscription</h2>
            
    <fieldset><legend>Identifiants</legend>
        <label for="reg_pseudo">Pseudo :</label>  <input name="reg_pseudo" type="text" id="reg_pseudo" required autofocus />
        <?php if (isset($errors['pseudo'])) echo '<img src="style/image/alert.png" class="icon" title="'.$errors['pseudo'].'" />'; ?><br />
                    
        <label for="password">Mot de Passe :</label><input type="password" name="password" id="password" required />
        <?php if (isset($errors['password'])) echo '<img src="style/image/alert.png" class="icon" title="'.$errors['password'].'" />'; ?><br />
                    
        <label for="confirm">Confirmation :</label><input type="password" name="confirm" id="confirm" required />
        <?php if (isset($errors['confirm_password'])) echo '<img src="style/image/alert.png" class="icon" title="'.$errors['confirm_password'].'" />'; ?><br />
    </fieldset>
            
    <fieldset><legend>Contacts</legend>
        <label for="email">Adresse E-Mail :</label><input type="text" name="email" id="email" required />
        <?php if (isset($errors['email'])) echo '<img src="style/image/alert.png" class="icon" title="'.$errors['email'].'" />'; ?><br />
    </fieldset>
            
    <p><center><input type="submit" value="S'inscrire" class="btn btn-green"></center></p>
</form>