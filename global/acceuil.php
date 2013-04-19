<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
    <head>
        <title>Les Finals History</title>
        <meta name="title" content="Les Finals History" />
        <meta name="description" content="Serveur Minecraft en 1.4.7 des Finals History. Factions disponibles et pleins d'autres joyeusetées !" />
        <meta name="keywords" content="serveur, minecraft, craftbukkit, bukkit, craft, jeu, game, Finals History" />
        <meta http-equiv="content-type" content="text/html" charset="utf-8" />
        <link rel="stylesheet" href="style/global.css" />
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    
    <body>
    
        <center><img src="style/image/header.png" /></center>
        
        <div id="core">
        
            <div id="nav"><ul>
            
                <li><a href="index.php">Acceuil</a></li>
                
                <?php
                switch($user_rank)
                {   
                    case 1;
                    echo '<li><a href="index.php?module=user&action=register">Inscription</a></li>';
                    break;
                    
                    case 2:
                    echo '<li><a href="index.php?module=support">Support</a></li>';
                    break;
                    
                    case 3:
                    echo '<li><a href="index.php?page=support">Support</a></li>';
                    break;
                    
                    case 4:
                    echo '<li><a href="index.php?page=support">Support</a></li>';
                    echo '<li><a href="index.php?page=admin">Administration</a></li>';
                    break;
                }
                ?>
                
            </ul></div>
            
            <div class="page"><?php echo $contenu; ?></div>
            
            <div class="right">
                <?php include('modules/user/panel.php'); ?>
                
                <a href="mailto:soualexdueptsix@gmail.com" title="Envoyer un E-Mail à l'administrateur"><img src="style/image/mail.png"/></a>
                <a href="download/minecraft.exe" title="Télécharger Minecraft"><img src="style/image/dlminecraft.png"/></a>
                <a href="index.php?page=chat" title="Accéder au Tchat"><img src="style/image/chat.png"/></a>
                <a href="#core" title="Facebook - Les Finals History" target="_blank"><img src="style/image/facebook.png"/></a>
                <a href="#core" title="Twitter - Les Finals History" target="_blank"><img src="style/image/twitter.png"/></a><br />
                <a href="#core" title="YouTube - Les Finals History" target="_blank"><img src="style/image/youtube.png"/></a>
            </div>
                
            <div class="footer">
                <p>Copyright : Les Finals Hisory 2012<br />
                Tous droits réservés</p>
            </div>
        </div>  
    </body>
</html>