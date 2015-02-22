<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'fb7903js_agma');

/** Имя пользователя MySQL */
define('DB_USER', 'fb7903js_agma');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'as210100');

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
define('AUTH_KEY',         '_F:& 8Ik~6@fcM`H3,8bll<+_D<[gHy9,lx7~{KM}rw&yL AD3.80~*gz/A6f/o2');
define('SECURE_AUTH_KEY',  'Aeg=Ts_UR$D-mYm||?p9N8H|{-C)oY`EiyBE4:|FMo%@L?LgRH%Cp0MP{L,V6k>|');
define('LOGGED_IN_KEY',    '8I#{sac]xrc&q^OOqW=`4:)B-5m+~:3BQBw)t~{0z]dS(@j_`jxcFhH@#uo#T|Hf');
define('NONCE_KEY',        'zv)!lg$+0 FeX4-i<pq**+1zR+$P=5N5`*s-b3(&Io37+]bU1+19B-@XL7b !&++');
define('AUTH_SALT',        '{6}g6&ym[;z^HdA %L<Q3MgQ$_Yf#fX<2)KqL#h[((_C-cn|+;.o;..9UeKfW`FS');
define('SECURE_AUTH_SALT', 'pQDc 8f>JTl:CR7kl@siUzBO,G$q-I23ByL[d-k&|yP9,g&/2+8nB_-#o>u&.O>x');
define('LOGGED_IN_SALT',   'D@9wDhJ6 +RwEAr(2SLAD/&|L[$uwD!$]y_YsU.:u+Kl _%3he2!q!-T0s_&f]l^');
define('NONCE_SALT',       '&wO)@1[h$ T|v8JX/-4}X>?<_i9*1`N#vL(v.5g+SVj$#./2vq9)9Z.am(x[$QOX');

define('WP_SITEURL', 'http://agma.pro');
define('WP_HOME', 'http://agma.pro');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'st_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
