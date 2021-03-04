<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'bikcraft_db' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'wpdb_user' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '123456' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'x0I/@mHzZY-s!W8+?wTGiIdHObL``At2%Ry23^VvZhn|5PSk6%(,(-A{F-Yd3C>Z' );
define( 'SECURE_AUTH_KEY',  'RdrDb6!;^rI$Z[WXGE%=Fx<C0F1hq;y!kjOZfv!w8F!d)n1r>Cp6pz<hGvwK5DOz' );
define( 'LOGGED_IN_KEY',    'qeTeW!_Y,kj5?PBDC*K6tNaL/xQq jy.{<Xs4*cKC|fRn*IT%$)a~u~H>Hc+9/qX' );
define( 'NONCE_KEY',        'Zl,K5c!vE2D]F*dFWj`W@Yuu>Hu,P8e,>V`lQ0s`9|nW;}/>Cm4r<1@[Vomf_MP7' );
define( 'AUTH_SALT',        '.z1d-H^=ZA{G7;2>Z4T3r(]8cCc=@TqhP2&tUanRoAf]dwG=Zm<O?iJ9Q;l+Hag7' );
define( 'SECURE_AUTH_SALT', '=^ivVw,:l1J/)>K}AVB5W?(;o7_Lw$|<qbs$(VtHjQoXb(c?f;6yzMRt=Z:?0LBs' );
define( 'LOGGED_IN_SALT',   '5O[A^]dv*gmVFp>0iGkr4vZ`rg<Xl5rR/&^N1|)ezFXovFR^%N^p$*w)I+s:O3{0' );
define( 'NONCE_SALT',       'voe! c$W)p,yv)-cBYHcl{>Zane)%8|+L{|@,seYH]Fc0%c7HRx8,a>yI ChMg}G' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
