﻿<form method="post" action="index.php" class="login">
    <h2 class="login-name"><img src="style/image/member.png" class="icon" />Connexion</h2>

    <fieldset class="login-pseudo">
        <label for="pseudo"><h1>Identifiant</h1></label>
        <input name="pseudo" label="false" type="text" id="pseudo", placeholder="Minecraft" required />
        <?php if (isset($errors['pseudo'])) echo '<img src="style/image/alert.png" class="icon" title="'.$errors['pseudo'].'" />'; ?><br />
        <div class="clear"></div>
    </fieldset>
                            
    <fieldset>
        <label for="password"><h1>Mot de passe</h1></label>
        <input type="password" name="password" id="password" label="false" placeholder="*****" required />
        <?php if (isset($errors['password'])) echo '<img src="style/image/alert.png" class="icon" title="'.$errors['password'].'" />'; ?><br />
        <div class="clear"></div>
    </fieldset>
                            
    <input type="submit" value="Connexion" class="btn btn-green"/>
                            
    <div class="login-footer">
        <a id="forgetpassword" href="index.php?page=forgetPassword">Mot de passe oublié ?</a>
    </div>
</form>