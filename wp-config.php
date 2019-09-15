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
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'WordPress');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'WordPress');

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
define('AUTH_KEY',         'AiJt??rkfB6jiCs#^>25=GF>p_5QqO4VO3_utDFx -s/]~Z@[qEz7aJXU;MlDw h');
define('SECURE_AUTH_KEY',  '?@t_ZDn_lSOW<Ih8hOzn;@pPrU|,{C|7IQwkp8;a!-%=r@N,T.&nE;$8pf*ZS-8U');
define('LOGGED_IN_KEY',    '`}TB0@8 yG&J8I(W|jrR$l>v#S5MTH7:=2fG?rjIQK^rpA4LdYV8J93=7DG>))U3');
define('NONCE_KEY',        '0ZEK0F[n97@}e]xZ46l]!h49Q{4ng$~ mvK`}hNZT[ WZXQI[+WZzV}?k<025Qa3');
define('AUTH_SALT',        '<^W)F3?fBs|%amH$b(]SRHR#$}9:@IYE|D>Q]0faR(@`l5!D*t7kBtuD/|I*hSWy');
define('SECURE_AUTH_SALT', 'w-6>e66xu#<rkGr%$tNvR,^15BHiG@=@|LOMCuYQEg]]&*=W!6(L[[i1EGr=nZS_');
define('LOGGED_IN_SALT',   '/03< p-L^D<V86s}yRP%i*XW}c8`g?;0&CLJpeRo~EDm{)ud.eMVa&>A+9Tlpu)q');
define('NONCE_SALT',       '0#rDI&Z:-J@-lpx_{>;k/h QdNC<w/QUU[3nvefJym!J (7%2Yar;X3_>iM3Gw<t');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_rc_';

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
