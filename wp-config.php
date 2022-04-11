<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'mySocial1' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'sd4|7[@|<h<phLIs5[loT0CedAz<qF&+vTp-Q8fv4ZSPx1t]LR |x-G)#R1Xy;bx' );
define( 'SECURE_AUTH_KEY',  '06DA6%PK@7,nUj31sp5:Y{a[)E%vj&H&ybkatd*$a!anY _4[B_,1[Yrqelf@K_Z' );
define( 'LOGGED_IN_KEY',    'FxG#use}On-?I-y**shLxJ(7l~Uz@ l(D[?6.N#,s7k<`rP]8r!YksBye]UEgiu{' );
define( 'NONCE_KEY',        'ihdz<4by86Lhcs7M^NEoA/D+BEj:~rUhyMm>/37wXh}g.AYlE1`ud5i7ekz{taye' );
define( 'AUTH_SALT',        '(%T^={X/2;i)OZ5< ;[BAXmdgwM{5AOTyH*o`w:jz?x!< &wJ^^ew7Su:Gq/PX;0' );
define( 'SECURE_AUTH_SALT', '~}tB|.[$m>+FDiOxcrksw^x x#Pup (cM|$)]`CwU7w&-OjooN- mC=Hs!ezAN+R' );
define( 'LOGGED_IN_SALT',   'uqhM5_=Cx%Xsv:H0=K9,|.(5D;#VGHcQx)K14`KbT&)@;4C9Cn%>{1S j=|`B;63' );
define( 'NONCE_SALT',       'JytO}<lPy|VBe[tY2qk,4)6k~`*.d,D3W$I@^frj{LkpRncvq8/(URJo^=,9g{xz' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
