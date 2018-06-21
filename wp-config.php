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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'devit');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '%k3&Xn^jPSAMO#!|MTh-sW#o8/,tb_BQbFHxy(r1m8FjjKU%pLK._SY[W`fu)dYT');
define('SECURE_AUTH_KEY',  'Yy#cALwr```piM5t?yQeF[N @nvV#DLJ8QjM2!YD`k@^QtGHkoE}g.H5m CBD5/W');
define('LOGGED_IN_KEY',    '7r NswHRS#y_6khepuY[kiT(d*>M73Bq;!E<M%`n*p:Ezm$3+,]f;i0T23i|$Nc{');
define('NONCE_KEY',        'j/xzlpCYfd&M~Q n>l#0ZEQmL=f4_&sMFMDCH<R4GX@w?E2ppnW)3p-cqPB&#!l,');
define('AUTH_SALT',        'Rc$.e9{kC5^ejS*%R3f]O{}=s4G]xIVe>ckYlR#mDh! =M7^1b,/bBvXgvZL2QZQ');
define('SECURE_AUTH_SALT', 'szRFif2cq9wyd#>]mpF5AW.Q%dhqK{dFl/Dp7v3)@_i?[S}Y8jA8`Jn~v%nxe#Z`');
define('LOGGED_IN_SALT',   'Hi>`T*~s3 ,0r:!*jQhkai;7YT%ca?XP_a FmPHTfj!$=vfsgh0S`1;lGbn[*`7C');
define('NONCE_SALT',       'Maf/S/_g7_Rv<HK)Q]/izVjC}}p3N{f%&/M+xWzzrIpT@9Hw5THkE(c4-C63>i@V');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
