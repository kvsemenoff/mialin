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
define('DB_NAME', 'mialin');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '!. W;1!5qAs52P})i)S=bE8B.XqIr?RhOS%0:i9OPV1AXw  -/Lk+E]K*CkMc:3$');
define('SECURE_AUTH_KEY',  'G]j0Sc~cV;_<iR4W$F7,q>CanSYSF9>Mso[-a+P|}r-f8Ud%o^GNr0UA7Zu+<KTQ');
define('LOGGED_IN_KEY',    '^T2=-RtqVB1[)Q8}6,r#?7/%C-tK.o|.V!b ~rQ(*%g{.zx:/_[+W5)85,P|$]SO');
define('NONCE_KEY',        'CL6oG|{Db0:cyP]<Y+zgoyI]ctt,D3NSeJ0{I7$39uAK9kL[+WAW(4/-6({Gv1p}');
define('AUTH_SALT',        '5Njw+)iPK_@AOkfnRw0NFl8-%P;c,:/lQi(A#=}vswsFpPZBF_3RNHZJi^4B~9VV');
define('SECURE_AUTH_SALT', '<QMLl?VU4XXk8uiQ:n}~oEr+S0il*pL1E-3YT3%HJ>Eg|&kk%1@>.*B|`]]{*?M~');
define('LOGGED_IN_SALT',   'gQ-A-ai!G2(*AEFS>TZ3Y>JUYHDc&bJybn?!z@v9,9}JM,(fRfz,WzF/|Kam0Le4');
define('NONCE_SALT',       'RoENXMb:9ZvZTU`6B;2)/mO{> }9)xFexV82S#ta9oY&-0O._rr~!+d+~YGdT|<D');

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
