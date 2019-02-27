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
define('DB_NAME', 'testWordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'T/~od8RdoU.jR0Q/1L^7TEp^8D-Ib)I@5pc=ewnQW_/5=DE7o`:/|O}|kPEyr]]|');
define('SECURE_AUTH_KEY',  'J#ueS]D]r|U6zytLs2 FH#:wavlCn7,fTT,q$hT+x/#{`~mtH3kF/QGw> kw3]<s');
define('LOGGED_IN_KEY',    'V|23oE[#E9fgWB_W@e&SS>5s6b]4bV:rTrN(uq-=a+ehMWg}5!ge2v`Q|f{KhUMQ');
define('NONCE_KEY',        'Jp[{8DHlI_.e}nX?5Es[}NX=t,M!WZny{VW;Sf71[d7-cWO<b4tS>oy_2P Rs!(`');
define('AUTH_SALT',        'TR[e<].#C~~>C7QP%7RES4II&Z_32-?%B>*kp:h06FcM5=u!6:4N~dr#3|Xz3)mq');
define('SECURE_AUTH_SALT', ':JjHKkWg>f:`]KJ&I,Z.G{ao0/&e5 (XST1^t`q0qef4PsSs3%C.~#Lh<i-.uDr)');
define('LOGGED_IN_SALT',   ' _p(gY .UbE[RF2]tdrF/p>T*]_f5MOWw>|C|+g_>KI.|OP&e[U[k@@_:HJ+9cf.');
define('NONCE_SALT',       '7(,M|!5u}!rNh@mOfX~PCkLEP4aP&FDv $m<?AiS9eq;*c6Ij+R73!B^A$>d9TF6');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
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
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
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