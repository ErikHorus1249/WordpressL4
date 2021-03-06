<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'shop' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '.Owqse-S#a$#{Z8vM%Mk`^2YB)fO?qLRNKy]|El;KoH^t}*^(*/,)6m{QsQG~e8#' );
define( 'SECURE_AUTH_KEY',  'Oo4LOhd|%K9u; @~5^W>R$EwjVUnqtoDd.luTm=Xy%v:7O5qMSuLz&83?o6B.#~M' );
define( 'LOGGED_IN_KEY',    '}$KgzSKr`>}00B0zYzr=V>[3rr97v*1_wer:V;`xYe5{UQi>Y%JIK}q4L$2o8[wJ' );
define( 'NONCE_KEY',        'N,&ZX|7XKGa0c:R]0;[HQBmcoAg3ke$o65TXn)L6&(&~Pe++-3As;pF#_/DZv:U9' );
define( 'AUTH_SALT',        '63rmF/>[?A5?]aVDKVIPR7oI_<C2`8d3SO?Ah[|nUhGO3 c6q}$(3Us81Jqj$yRC' );
define( 'SECURE_AUTH_SALT', 'F-;e*Vltb;2<-vAB 6^5wo&VcGU8f!V8!MQbA0Iy2d=ptFbGT#iv~7kClHr_eA00' );
define( 'LOGGED_IN_SALT',   '-kQjkvonpkpjn7j0~ZZCOz,)D6qBgv:KOu5$l3_?dM)WNF&di}UUh1BEALlg0_ft' );
define( 'NONCE_SALT',       'U&?IRirEM$VV0dnv<!6weI3 j$VxLT6!i}HSh-0N2k_,Z!6N}7kh4s@/rD 8zxI_' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'tbl_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');

define('FTP_USER','root');

define('FTP_PASS','');

define('FTP_HOST','localhost');

define('FS_METHOD', 'direct');
