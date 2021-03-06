<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'try5' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'KOhhF:88-x{&%g][U8-.-o.fi+-Gxo^Zycj_5.i!{J{kyTzSbr1<49ufGqY_2<4`' );
define( 'SECURE_AUTH_KEY',  'av{= rM/q~vHyte=0_*12z7dtHU[l=h#n6B^2yZW{ydvzqBrIbikdGdDvoUi.7G-' );
define( 'LOGGED_IN_KEY',    '8,%vLAe5RP(R],FWv>f`8~j#ziHvXNBS`e=H%v];&.5(8=spSk:>B+--r&;*Ykix' );
define( 'NONCE_KEY',        '49i=M;v(eD)=(wBv-cdH>0:Pn:Y|%q>_PrEL]aC^,w4R`[y*^^Z>4dfVlfn.-,#k' );
define( 'AUTH_SALT',        '-Fx1%Ope8|(Cz.3CvW-!+`Ud]jm{DH0n/hb%>#co=DkljSU#H}6]!259[?EY3@|`' );
define( 'SECURE_AUTH_SALT', 'gRjr*?{Je]|.P h#0m!+*tyX,aGg$#?!+Kc^d}#M[3)Q5Es VRbG80|qfXG<FzAg' );
define( 'LOGGED_IN_SALT',   'Jqn0(G6Hwq=WVD]$t#FN]#b,No]x!op AZMM0vV;5-% n(pPXyLsn}4:.6g jIE6' );
define( 'NONCE_SALT',       '3Hu#?U%7Ky@?/w:,l)14FtGD>45q1]&8y.^&1w$H]); )JymnKUYqeCOB>=NbmN<' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
