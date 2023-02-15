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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '@DkuQWSArf7%l:?F:EdoF3W-OnrjF@cR^!5Ue#!;NJwmtyKs=fd<|q{cs1^RMn@H' );
define( 'SECURE_AUTH_KEY',  '5L`:W(2:68Z#.).y;#q9!yUtJ0fcIb=fjTi@#$82$qwZ;0YPh6{_~$C6<<I0z[Jv' );
define( 'LOGGED_IN_KEY',    'Uuy^FLNhQO`JxAckc!6e^iwt*^to:k.Z2@QT+vi{dYQEX!Ch_Xt.Y<1?Q=eST9FL' );
define( 'NONCE_KEY',        'SGz-HirsqNRmzXdK~ddw+)bLJ+>#D![pgHC7~s8;5f5jw-FLT%7,rD( 6-X;^z>g' );
define( 'AUTH_SALT',        '<=R!xNp+DYl_0> 4j?k<Sc0EODVYm1R`|%gBxLY},DX>yh^VA,>+C~<%]HBTq8z9' );
define( 'SECURE_AUTH_SALT', 'HM 0e;HPFY1%d*342A6}wR$9eX7#.4}(]c,`b9WF8et2Ro2Ex5!W=adx[+0Wo&sk' );
define( 'LOGGED_IN_SALT',   '`44~=zi5zjO$R)br ~CFq|La*RUEsUQ<{ yopn iKp|ZF5BXLVt^]hl` B@c$wcW' );
define( 'NONCE_SALT',       '%Op.+k9)[ knSn8,[_lltk3Ht1}ApP1U$yI;!5k;&ERloU$#0:9c ,36sMRe_KCy' );
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
define( 'WP_DEBUG', true );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
