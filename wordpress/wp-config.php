<?php

/**
##############################################
#	DATABASE SETTINGS
##############################################
*/
define('DB_NAME', 'name_of_your_database');
define('DB_USER', 'db_username');
define('DB_PASSWORD', 'db_password');
define('DB_HOST', '127.0.0.1:3306 or localhost:/var/run/mysqld/mysqld.sock');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_general_ci');

// Table prefix. Leave unchanged if you don't know what you're doing.
// This setting gives you ability to have multiple wp instalation in one DB
// Each set of tables then has different prefix.
$table_prefix  = 'wp_';

/**
##############################################
#	SECURITY KEYS
##############################################
*/
// Use online salt generator: https://api.wordpress.org/secret-key/1.1/salt/
define('AUTH_KEY',         't`DK%X:>xy|e-Z(BXb/f(Ur`8#~UzUQG-^_Cs_GHs5U-&Wb?pgn^p8(2@}IcnCa|');
define('SECURE_AUTH_KEY',  'D&ovlU#|CvJ##uNq}bel+^MFtT&.b9{UvR]g%ixsXhGlRJ7q!h}XWdEC[BOKXssj');
define('LOGGED_IN_KEY',    'MGKi8Br(&{H*~&0s;{k0<S(O:+f#WM+q|npJ-+P;RDKT:~jrmgj#/-,[hOBk!ry^');
define('NONCE_KEY',        'FIsAsXJKL5ZlQo)iD-pt??eUbdc{_Cn<4!d~yqz))&B D?AwK%)+)F2aNwI|siOe');
define('AUTH_SALT',        '7T-!^i!0,w)L#JK@pc2{8XE[DenYI^BVf{L:jvF,hf}zBf883td6D;Vcy8,S)-&G');
define('SECURE_AUTH_SALT', 'I6`V|mDZq21-J|ihb u^q0F }F_NUcy`l,=obGtq*p#Ybe4a31R,r=|n#=]@]c #');
define('LOGGED_IN_SALT',   'w<$4c$Hmd%/*]`Oom>(hdXW|0M=X={we6;Mpvtg+V.o<$|#_}qG(GaVDEsn,~*4i');
define('NONCE_SALT',       'a|#h{c5|P &xWs4IZ20c2&%4!c(/uG}W:mAvy<I44`jAbup]t=]V<`}.py(wTP%%');

/**
##############################################
#	URL SETTINGS
##############################################
*/
// Plain old simple: this is the URL you want your users to type in their browser.
// Leave out slash "/" at the end.
//define('WP_HOME', 'http://www.your_domain.com/wordpress');

// Defines URL where your wordpress files reside. Setting this disables the WP address field
// in Administration panel. Also, leave out slash "/" at the end.
//define('WP_SITEURL', 'http://www.your_domain.com/wordpress');

// Cookie domain. If you're using CDNs or have static content somewhere else it is best not
// to serve cookies there.
//define('COOKIE_DOMAIN', 'www.your_domain.com');

// Manually set your wp-content directory. This directory holds your themes, plugins, uploads
// Leave out slash "/" at the end.
//define('WP_CONTENT_URL', 'http://www.your_domain.com/wordpress/wp-content');

// Manually set your plugins directory.
// Leave out slash "/" at the end. 
//define( 'WP_PLUGIN_URL', 'http://www.your_domain.com/wordpress/wp-content/plugins');

// Manually set uploads directory. Path should ALWAYS be relative
//define( 'UPLOADS', '/blog/wp-content/uploads' );

/**
##############################################
#	REVISIONS AND AUTOSAVE
##############################################
*/
// Be nice to your sysadmin and set this to false. She/he will appreciate it.
// It is possible to set maximum number of revisions - change "false" to the number of wanted
// revisions. 
define('WP_POST_REVISIONS', false );

// Auto-save interval. Pretty self-explanatory. Keep in mind time is set in seconds.
define('AUTOSAVE_INTERVAL', 160 );

/**
##############################################
#	FTP SETTINGS
##############################################
*/
// Available methods are: direct (don't use it if not necessary), ssh2, ftpext, ftpsockets
// If possible, prefered way should be ssh2, if not, use ftpext instead.
define('FS_METHOD', 'ftpext');
define('FTP_BASE', '/path/to/wordpress/');
define('FTP_CONTENT_DIR', '/path/to/wordpress/wp-content/');
define('FTP_PLUGIN_DIR ', '/path/to/wordpress/wp-content/plugins/');
define('FTP_PUBKEY', '/home/username/.ssh/id_rsa.pub');
define('FTP_PRIKEY', '/home/username/.ssh/id_rsa');
define('FTP_USER', 'username');
define('FTP_PASS', 'password');
define('FTP_HOST', 'ftp.example.org');
define('FTP_SSL', false);

/**
##############################################
#	ADVANCED SETTINGS
##############################################
*/
// Use if you know what you're doing. If set to true, this should make admin area
// a bit faster they say.
define('CONCATENATE_SCRIPTS', false);

/**
##############################################
#	SSL SETTINGS
##############################################
*/
// Forcing SSL secure logins. EVERY WP SITE SHOULD USE THIS!!
define('FORCE_SSL_LOGIN',false);

// Forcing SSL secure logins to administration area. EVERY WP SITE SHOULD USE THIS!!
define('FORCE_SSL_ADMIN',false);

/**
##############################################
#	LOGGING AND DEBUGGING
##############################################
*/
@ini_set('log_errors','Off');
@ini_set('display_errors','Off');
@ini_set('error_reporting', E_ALL );
@ini_set('error_log','/home/example.com/logs/php_error.log');
define('WP_DEBUG', false);
define('WP_DEBUG_LOG', false);
define('WP_DEBUG_DISPLAY', false);

// This one is the killer :)
if (WP_DEBUG) {
  define('WP_DEBUG_LOG', true);
  define('WP_DEBUG_DISPLAY', false);
  @ini_set('display_errors',0);
}

/**
##############################################
#	MEMORY AND CACHING
##############################################
*/
define('WP_MEMORY_LIMIT', '128M');

// Memory limit for administration area.. so they say in docs.
define('WP_MAX_MEMORY_LIMIT', '256M');

// Enable caching - W3TC (probably other caching plugins too) automagically enables this one.
define('WP_CACHE', true);

/**
##############################################
#	TRASH SETTINGS
##############################################
*/
// Empty trash every 30 days. To disable trash set the number of days to 0.
define('EMPTY_TRASH_DAYS', 30 );

/**
##############################################
#	DATABSE QUERIES
##############################################
*/
define('SAVEQUERIES', true);

/**
Put this in the footer of your theme:

<?php
if (current_user_can('administrator')){
    global $wpdb;
    echo "<pre>";
    print_r($wpdb->queries);
    echo "</pre>";
}
?>
*/

// Used for automatic database optimization/repair. Script can be found at
// {$your_site}/wp-admin/maint/repair.php
// Set this to true ONLY if necessary.
define('WP_ALLOW_REPAIR', false);

/**
##############################################
#	LANGUAGE SETTINGS
##############################################
*/
define('WPLANG', 'en_EN');
define('WP_LANG_DIR', $_SERVER['DOCUMENT_ROOT'].'wordpress/wp-content/languages');

/**
##############################################
#	CRON SETTINGS
##############################################
*/
// 
define('ALTERNATE_WP_CRON', false);
define('DISABLE_WP_CRON',true);

// Run cron every n seconds
define('WP_CRON_LOCK_TIMEOUT',60);

/**
##############################################
#	FILE PERMISSIONS
##############################################
*/
// Don't change this if you don't know what you're doing.
//define('FS_CHMOD_DIR', (0755 & ~ umask()));
//define('FS_CHMOD_FILE', (0644 & ~ umask()));

/**
##############################################
#	ADVANCED RESTRICTIONS
##############################################
*/
// In case you have enormous global tables (user table for example) set this to true
// Alters on large tables take a long time to finish.
define('DO_NOT_UPGRADE_GLOBAL_TABLES', false);

// Disable/enable file edit in administration area
define('DISALLOW_FILE_EDIT',false);

// Practically the same as above.
define('DISALLOW_FILE_MODS',false);

define('ABSPATH', dirname(__FILE__).'/');
require_once(ABSPATH.'wp-settings.php');
?>
