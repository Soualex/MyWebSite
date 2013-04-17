<?php
 
// Identifiants pour la base de donn�es. N�cessaires a PDO2.
define('SQL_DSN',      'mysql:dbname=minecraft;host=localhost');
define('SQL_USERNAME', 'root');
define('SQL_PASSWORD', '');

// Constantes
define('ERR_IS_CO','Vous ne pouvez pas acc�der � cette page si vous �tes connect�');
define('ERR_IS_NOT_CO','Vous ne pouvez pas acc�der � cette page si vous n\'�tes pas connect�');
define('ALREADY_LOGIN','Vous �tes d�j� connect�');
define('ALREADY_REGISTRED','Vous �tes d�j� inscrit');
define('EMPTY_FIELD','Veulliez remplir ce champ');
define('CHAR_FORBIDDEN','Ce champs contient des caract�res interdits');
define('LOW_LEVEL','Vous n\'avez pas un rang assez �lev� pour acceder � cette');

// D�finistion des rangs :
define('VISITEUR',1);
define('MEMBRE',2);
define('MODO',3);
define('ADMIN',4);

// Chemins � utiliser pour acc�der aux vues/modeles/librairies
$module = empty($module) ? !empty($_GET['module']) ? $_GET['module'] : 'news' : $module;
define('VUE_DIR',    'modules/'.$module.'/vues/');
define('MODELE_DIR', 'modeles/');
define('LIB_DIR',    'libs/');

?>