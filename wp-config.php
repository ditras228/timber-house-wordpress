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
define( 'DB_NAME', 'timber-wp' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ':uMy ]7/%%zqLE^.i&c_5&s`$+}W*a%vg|$)OU]T!8)wpue).#sBaWMjsOi${t2l' );
define( 'SECURE_AUTH_KEY',  'L[Bz&1!aljgv4ct ws%UU3dd(s*HIJcS..|[Kl|hsT5}>(d_{EQayPi-)4HKeE:z' );
define( 'LOGGED_IN_KEY',    'xbm4/ nAQP$gl%]`4mII|b>rl73(-2rbs:P})~RxT>YBr%{(xP9CDd&H@{|A9ekf' );
define( 'NONCE_KEY',        'eZw!ZU@*N-)*@yioBbTL6P{1<OaT.]=i+Y{I[oRYt.N5M$x5s+^(J/_j~+1y;d8s' );
define( 'AUTH_SALT',        'E=1/ymPvP<03bf9Jh(`X-Gcw+>Fh5QbHenI}UgO)Eh3mC{[wB9S/J{LBfDHZUuWY' );
define( 'SECURE_AUTH_SALT', 'yZA31Ndb^x[cD=lNO6#:,d4{D/YPFEwdB5rHQ[vB7?_=h<mL>~DCDK%WsHFA9-+Y' );
define( 'LOGGED_IN_SALT',   'f8NP*%5%{%czyfeKG&{/K+z%$ n,<:JCU%8@X iwy#0 BU<Ov[iZH!;]zxg!&g^%' );
define( 'NONCE_SALT',       'CC-mby-(Z&|)MJ8E!qzasTk.A;q|6_lZ6hm*:`q>.g$gYZIVv^L|I GcNQ q{O`k' );

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
