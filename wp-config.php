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
define('DB_NAME', 'cora');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'TT/nwN&%v{r6Lp.=$v,2bH89._[9!]%{X;;`u8R[{VNev_BbL*I(2sl1BRcW^dK-');
define('SECURE_AUTH_KEY',  'i|cAmF-:0?al6cO:o3oU<ru4|gp^PQ0}N[r{05 C?16J1P_W3x|W<=2>yfHz+vfB');
define('LOGGED_IN_KEY',    'cEF26*eYso}W{9?gDF)#O) vWxJVl(&>jH[VR9~JYmJI}G5(H&[ELU*ANJ<GFZ@g');
define('NONCE_KEY',        ',Oh9P2H<eZ<;|JQe})mi.v);ujUHSd0a>+7@$<D_V4F*Kt69?DW{u!EB`s$=0.p;');
define('AUTH_SALT',        'K3u@~PxpI^)F-ob`(,w<aVv>N^_j}_4IU?eW`ob,OVgBk/!G;R7w&>+lSV5RE8}7');
define('SECURE_AUTH_SALT', 'TefR*L?RVw2Gi@8[:VV&RdCWAB!U!;xE@$W3LXGiQ.h=}_XC$y.t&~Ee?H[zt9 }');
define('LOGGED_IN_SALT',   'zc8%N#?j<`~fL*~;}LLRu2?Zd;58#L8sR.;i{WyzB_(?wp{]}CYYj;AKM-|7#S X');
define('NONCE_SALT',       'ii}`).3S#|<JVJMYd5QG%q:6=)g<dv+kWPP5MG*TA)(X4d7GcPpHRoD/wn?9^,1~');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_2K16hagO2';

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
