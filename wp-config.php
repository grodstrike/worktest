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
define('DB_NAME', 'deltdelt_ter');

/** Имя пользователя MySQL */
define('DB_USER', 'deltdelt_ter');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'Zzzzzzz1');

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
define('AUTH_KEY',         'Ih0s%AH|8jZ xvXW.^XKbp0k#z*aVK8BQefAQhSdq sdz<x~#d!gYv?}TxcE,(g7');
define('SECURE_AUTH_KEY',  'tAgTMw&;8[_F f+p;)-[{]X9^zx+{XdK!XA7_a$W_CGn,f]j!M!=9sX=>Yu3H<%i');
define('LOGGED_IN_KEY',    '-n04WI~QIY^+4AwcZ^9mCSB-&:H<L1UDcnpI`bj)Q$7OPNW]8j.WRF3H*^>h/(RN');
define('NONCE_KEY',        'E3R[UP2,<7]yPKr3NXCc~ZI~&]w8~<,G):Vh&~iOE06eX5uY.`< I(@hm@y$&k%n');
define('AUTH_SALT',        '>$/my(zjZklv,j97RrL /!Ex1z8momSTt+!-drS E92NCU:C-tFm0:7A!:6QstdQ');
define('SECURE_AUTH_SALT', 'dx`t,)EU&}^62X*TUGwP0+G_5kiWaS-%#oX&Y+kw<mVZ[xGUiS7)H/Lsm2dUGj$(');
define('LOGGED_IN_SALT',   ':w=[c:Lw;%T-0ChY`oF{u]bftZv`Jj|AE^2I_`i5XM9Mp49EjGj%;B,B fja$<sh');
define('NONCE_SALT',       'VrY-oQQw}Wtd{Iy@cJqSF,4eE(CVgJ%W;lVJN`TUx89BFn+c7SYX46BD2=<l[rBg');

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
