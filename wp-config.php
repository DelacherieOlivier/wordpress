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
define( 'DB_NAME', 'olivierdelacherie' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'olivier.delacher' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '16uz199U' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'ipabdd.iut-lens.univ-artois.fr' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'R&WfnYNlx[(KZauuzboB!sm@4xx*%%lySIZvuC)5k3F_~lM;Gb:;IQ.P{5TbkVAh' );
define( 'SECURE_AUTH_KEY',  '&yLk~V1C|ZK$F3gL8+O&MQ1np2iPw#Ie*VaprP3~zdG~,;ta#)dQTL[LlRox4&0-' );
define( 'LOGGED_IN_KEY',    'b75|}`eLK`usmIoqVwZq5Smo8g]{Zoj%C?w9Y/^I~@WEGH~~{B>N!q%R*]*MZQ0g' );
define( 'NONCE_KEY',        '%?L-qTVZebH#))/MR)=,u2KeU,*cF.U7xSl{VOg #VX2GeNhBNN{O{9FQ~8t9dkD' );
define( 'AUTH_SALT',        'DVs8(g#Vhy?-Ai~@U)VF^rwmt:~<>l%PH8=$u?/>T2:jU*oD}~361p?:P.>CP@@.' );
define( 'SECURE_AUTH_SALT', '*+WFST7OPU/1#)M}.>AppI)X4YA(53R;f?irJZ#AH`7,[^B}QVPc*F#||@T [hO$' );
define( 'LOGGED_IN_SALT',   'f*pU2+5@]:>qKpPn,[/85%ZbG:]aG5Cn[xyF1/@v!w8*|Jp_SFpOOB{vuOfB^YQ(' );
define( 'NONCE_SALT',       '^k0ltio.&6]`CQKLqd8W^e{@k=Hg3iT2G:^QOGGNtx9ny-ajO|((;(9p)b}GRq8*' );
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

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
