<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wp');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'nomondial9283');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'anton4949');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'eEID=-)B]{k%zF:aEP.6pNs9Ch0L68Gii}Rj*&xOC=$1MOp&H%Y41Yz<*2hs*WYQ');
define('SECURE_AUTH_KEY',  '|+Fc+*IX37}4a13(y@.E,apvkg|w%BgfTE,=&A%/< #nXD;XE{rK@M}#lYj)B@-D');
define('LOGGED_IN_KEY',    '3}u~uSBC!os1j40@,0,Hq78^o{zk8[J/@GP?</ msIi-t~TF6Th@ -{qA9MXAo|9');
define('NONCE_KEY',        'D)x>BH,WI,+bCx>=R%tK$lFQva2b I/ri&]=]bH+KQ!J@Q6rSUl]CTpC#63e&NVB');
define('AUTH_SALT',        'J!gPsfg61/DU`Z}T TxNHDF!X=fMKG|W):oj/aJoX1D+6$hv+noQtFkngd<?,[XY');
define('SECURE_AUTH_SALT', 'H!qZ2oY?Eqyu>e. L=17MPQ/*>OF|T }phWi@!C5`,?)T/NnBLm@G`/>A(J,H]?9');
define('LOGGED_IN_SALT',   '%{0<m P3&__sVT$M0Zpc:-mmzKmK=w^@KI]PK%_RSa?y8y&F1v@-EK@-`ai===T>');
define('NONCE_SALT',       'kH-lw %9t+HWR@xnz/,*9gc-73;C$R$yDfL5HEYd>|pgt5paqV,H~*t#El@I0vrF');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');