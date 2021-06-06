<?php
/**
 * A WordPress fő konfigurációs állománya
 *
 * Ebben a fájlban a következő beállításokat lehet megtenni: MySQL beállítások
 * tábla előtagok, titkos kulcsok, a WordPress nyelve, és ABSPATH.
 * További információ a fájl lehetséges opcióiról angolul itt található:
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 *  A MySQL beállításokat a szolgáltatónktól kell kérni.
 *
 * Ebből a fájlból készül el a telepítési folyamat közben a wp-config.php
 * állomány. Nem kötelező a webes telepítés használata, elegendő átnevezni
 * "wp-config.php" névre, és kitölteni az értékeket.
 *
 * @package WordPress
 */

// ** MySQL beállítások - Ezeket a szolgálatótól lehet beszerezni ** //
/** Adatbázis neve */
define( 'DB_NAME', 'SAP' );

/** MySQL felhasználónév */
define( 'DB_USER', 'root' );

/** MySQL jelszó. */
define( 'DB_PASSWORD', '' );

/** MySQL  kiszolgáló neve */
define( 'DB_HOST', 'localhost' );

/** Az adatbázis karakter kódolása */
define( 'DB_CHARSET', 'utf8mb4' );

/** Az adatbázis egybevetése */
define('DB_COLLATE', '');

/**#@+
 * Bejelentkezést tikosító kulcsok
 *
 * Változtassuk meg a lenti konstansok értékét egy-egy tetszóleges mondatra.
 * Generálhatunk is ilyen kulcsokat a {@link http://api.wordpress.org/secret-key/1.1/ WordPress.org titkos kulcs szolgáltatásával}
 * Ezeknek a kulcsoknak a módosításával bármikor kiléptethető az összes bejelentkezett felhasználó az oldalról.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', 'uuBtmc AbIY~xNmgko~ia_|!RD57qL:./p5C}S8ku,)o ^@%9RW6!8$V2?*_^!;4' );
define( 'SECURE_AUTH_KEY', 'xi3dJ):fi>t$xwC8Pk3f6(<RNril2&Zx0ge0P?xP@c-h##6OZig~8g]A2nolYlmf' );
define( 'LOGGED_IN_KEY', '|*B4).]<|0mZ2l+K%Ji3;O@/(0xkG_(DM>N$oXn^H7V+0H5#^X]F^8!{)t,qDjC%' );
define( 'NONCE_KEY', 'Fn^<R!y?srUCOR^BGWs9HDFf)3,Std3Wsf?kxf{z:0hykxwJ&Kt!=itD<V<=;6Cd' );
define( 'AUTH_SALT',        'o*P1vBdQX :s<fv jy7AG_?`FuIQ)~[r$-ql;||S.K_<q) CF0HA}dI4qH=|:6Uk' );
define( 'SECURE_AUTH_SALT', 'x:`m#!)}oIj.CCK)l8WyFH<OPo )-;oF5! 5PdX+( ,#n{ln-{s*GT:0u0.o..9!' );
define( 'LOGGED_IN_SALT',   'qubU~p#/S0pBUM>*,$j5k+1wH{Rm2D@~dtcLyv;|nRIt%kuxuFpW3P*BVW8AM3v9' );
define( 'NONCE_SALT',       'zXgNpx~CN`d,:k6zQONUL(LQ9;KxW+y-YB$nzYTTrX[$A^$(`O2[;;7.M#Q+$N`6' );

/**#@-*/

/**
 * WordPress-adatbázis tábla előtag.
 *
 * Több blogot is telepíthetünk egy adatbázisba, ha valamennyinek egyedi
 * előtagot adunk. Csak számokat, betűket és alulvonásokat adhatunk meg.
 */
$table_prefix = 'wp_';

/**
 * Fejlesztőknek: WordPress hibakereső mód.
 *
 * Engedélyezzük ezt a megjegyzések megjelenítéséhez a fejlesztés során.
 * Erősen ajánlott, hogy a bővítmény- és sablonfejlesztők használják a WP_DEBUG
 * konstansot.
 */
define('WP_DEBUG', false);

/* Ennyi volt, kellemes blogolást! */

/** A WordPress könyvtár abszolút elérési útja. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Betöltjük a WordPress változókat és szükséges fájlokat. */
require_once(ABSPATH . 'wp-settings.php');
