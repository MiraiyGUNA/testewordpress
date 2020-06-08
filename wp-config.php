<?php
/**
 * A configuração de base do WordPress
 *
 * Este ficheiro define os seguintes parâmetros: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, e ABSPATH. Pode obter mais informação
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} no Codex. As definições de MySQL são-lhe fornecidas pelo seu serviço de alojamento.
 *
 * Este ficheiro contém as seguintes configurações:
 *
 * * Configurações de  MySQL
 * * Chaves secretas
 * * Prefixo das tabelas da base de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Definições de MySQL - obtenha estes dados do seu serviço de alojamento** //
/** O nome da base de dados do WordPress */
define( 'DB_NAME', 'testewordpress_db' );

/** O nome do utilizador de MySQL */
define( 'DB_USER', 'root' );

/** A password do utilizador de MySQL  */
define( 'DB_PASSWORD', '' );

/** O nome do serviddor de  MySQL  */
define( 'DB_HOST', 'localhost' );

/** O "Database Charset" a usar na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O "Database Collate type". Se tem dúvidas não mude. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação.
 *
 * Mude para frases únicas e diferentes!
 * Pode gerar frases automáticamente em {@link https://api.wordpress.org/secret-key/1.1/salt/ Serviço de chaves secretas de WordPress.org}
 * Pode mudar estes valores em qualquer altura para invalidar todos os cookies existentes o que terá como resultado obrigar todos os utilizadores a voltarem a fazer login
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'iY*@slxU931T|x4YR}}xYZ3.Q7E<`j-9w$SD 4CAwKrx)R`SW?JP)2m}n%G6~w(G' );
define( 'SECURE_AUTH_KEY',  '&0J nwPS$17HBq3OTB@.w_kVzQ{b7H?0AX-D]jK;z.yDM&6I@1h[ )^u6gve.B&3' );
define( 'LOGGED_IN_KEY',    'wjai+&Gx#ZN_X%VV.7:T3%ap20lidZ@/HRldi0zNzR@wbwQG/Nf5]v>q&*F{j@`}' );
define( 'NONCE_KEY',        'B0o;Ul$i,smo4rwS0N#!uOQ3O3~Hl,Ta.:2>V*]Ym3j2TGiRr$E ]|l1MP1-|DOP' );
define( 'AUTH_SALT',        'aiUdkbj9~aT.8T~cx*OmQ$}o2tKVVf/)H[V+-j3b,4*.k`v,0P5hU$IvaYiy+BKu' );
define( 'SECURE_AUTH_SALT', '^H.=6l83&j9WIV&Em-w/O^NDf]-)WN.y&JaWrD!Z?{[7+y|.Tzz8%-WaT6$=@6UN' );
define( 'LOGGED_IN_SALT',   'P2VF58^VK(])z1Y!zEeaFFH.Z1@FF;iL/(N=ns%j=!43: /~-Kq!isn4d}B=tA.i' );
define( 'NONCE_SALT',       'z[<J5g?cVuo! x}zB_-sUv%DQ^IAXX9A1:s~Q]V>^*;n583 pRW:i,IJ.2g5B}ju' );

/**#@-*/

/**
 * Prefixo das tabelas de WordPress.
 *
 * Pode suportar múltiplas instalações numa só base de dados, ao dar a cada
 * instalação um prefixo único. Só algarismos, letras e underscores, por favor!
 */
$table_prefix = 'wp_';

/**
 * Para developers: WordPress em modo debugging.
 *
 * Mude isto para true para mostrar avisos enquanto estiver a testar.
 * É vivamente recomendado aos autores de temas e plugins usarem WP_DEBUG
 * no seu ambiente de desenvolvimento.
 *
 * Para mais informações sobre outras constantes que pode usar para debugging,
 * visite o Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* E é tudo. Pare de editar! */

/** Caminho absoluto para a pasta do WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Define as variáveis do WordPress e ficheiros a incluir. */
require_once(ABSPATH . 'wp-settings.php');
