<?php
if ($session_id != 0)
{
    erreur('', ALREADY_REGISTRED);
}
else
{
    $db = DBFactory::getMysqlConnexionWithPDO();
    $register = new Register($db);

    if (isset($_POST['reg_pseudo']))
    {
        $register->checkPseudo(Security::DB($_POST['reg_pseudo']));
        $register->checkPassword(Security::DB($_POST['password']), Security::DB($_POST['confirm']));
        $register->checkMail(Security::DB($_POST['email']));
        
        if ($register->err_pseudo == NULL && $register->err_pass == NULL && $register->err_confirm_pass == NULL && $register->err_email == NULL)
        {
            $register->newUser();
            header('Location: index.php');
        }
    }
    ?>

    <form method="post" action="index.php?page=register" enctype="multipart/form-data">
        <p><strong><a href="./index.php"><img src="style/image/home.png" class="icon" /></a>: Inscription</strong></p>
        <h2><img src="style/image/emerald.png" class="icon" />Inscription</h2>
        
        <fieldset><legend>Identifiants</legend>
            <label for="reg_pseudo">Pseudo :</label>  <input name="reg_pseudo" type="text" id="reg_pseudo" required autofocus />
            <?php if (isset($register->err_pseudo)) echo '<img src="style/image/alert.png" class="icon" title="'.$register->err_pseudo.'" />'; ?><br />
            
            <label for="password">Mot de Passe :</label><input type="password" name="password" id="password" required />
            <?php if (isset($register->err_pass)) echo '<img src="style/image/alert.png" class="icon" title="'.$register->err_pass.'" />'; ?><br />
            
            <label for="confirm">Confirmation :</label><input type="password" name="confirm" id="confirm" required />
            <?php if (isset($register->err_confirm_pass)) echo '<img src="style/image/alert.png" class="icon" title="'.$register->err_confirm_pass.'" />'; ?><br />
        </fieldset>
        
        <fieldset><legend>Contacts</legend>
            <label for="email">Adresse E-Mail :</label><input type="text" name="email" id="email" required />
            <?php if (isset($register->err_email)) echo '<img src="style/image/alert.png" class="icon" title="'.$register->err_email.'" />'; ?><br />
        </fieldset>
        
        <p><center><input type="submit" value="S'inscrire" / class="btn btn-green"></center></p>
    </form>
<?php 
} 
?>