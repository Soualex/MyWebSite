<?php
 
// Identifiants pour la base de données. Nécessaires a PDO2.
define('SQL_DSN',      'mysql:dbname=minecraft;host=localhost');
define('SQL_USERNAME', 'root');
define('SQL_PASSWORD', '');

// Constantes
define('ERR_IS_CO','Vous ne pouvez pas accéder à cette page si vous êtes connecté');
define('ERR_IS_NOT_CO','Vous ne pouvez pas accéder à cette page si vous n\'êtes pas connecté');
define('ALREADY_LOGIN','Vous êtes déjà connecté');
define('ALREADY_REGISTRED','Vous êtes déjà inscrit');
define('EMPTY_FIELD','Veulliez remplir ce champ');
define('CHAR_FORBIDDEN','Ce champs contient des caractères interdits');
define('LOW_LEVEL','Vous n\'avez pas un rang assez élevé pour acceder à cette');

// Définistion des rangs :
define('VISITEUR',1);
define('MEMBRE',2);
define('MODO',3);
define('ADMIN',4);

// Chemins à utiliser pour accéder aux vues/modeles/librairies
$module = empty($module) ? !empty($_GET['module']) ? $_GET['module'] : 'news' : $module;
define('VUE_DIR',    'modules/'.$module.'/vues/');
define('MODELE_DIR', 'modeles/');
define('LIB_DIR',    'libs/');

?>