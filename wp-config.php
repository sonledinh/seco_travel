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
define( 'DB_NAME', 'seco_data' );

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
define( 'AUTH_KEY',         'Xh.2,Hj,s!g3rS;q2DM@*JR(xmwd}Eh>ErW?CgQ~lYv,_3<_d*wc^DA,oWDaXOnX' );
define( 'SECURE_AUTH_KEY',  '7|E V-X@#e$]5v>;UZBn{N@wFhoc.Is>,0wl>!z)&3:irvSmi99lbM?zRkM[1Am%' );
define( 'LOGGED_IN_KEY',    'ozPezE:Z}YbS8/ZRDd:0>?&Qe5D1(&Mu}G+_th]YcQg]V?(yWrRitD4}/n8YFc.M' );
define( 'NONCE_KEY',        'BTtKRm/`i|QWmy{1y!vX,3{dfY~:-Jp[-Y+t z!*;sdk0sz%uKcF~xC^IM$G5U4F' );
define( 'AUTH_SALT',        '&dunaQedq&+&LE:PM?2THav^I/kc3<)_<7S^$5>wVs4{BN%1x=MmJppv>zG3%FoB' );
define( 'SECURE_AUTH_SALT', '-D2lMrCUd9SI9`rgFY9|803:OByG$^xpUzxT}Me/ke^H/305:Qmc|Z*E@hmvjZ#Z' );
define( 'LOGGED_IN_SALT',   'tOH8!229cV6jdY|>z=~<XmfsvrHvAtVl$B.|Z!l2Gh,M:7v3%0b0O8~RaT&*wkWK' );
define( 'NONCE_SALT',       '8g[pijo6WJq ]I#I.JS)R~U0K!8 S^@P#MV3:CQYe:Os/n<5)Oo5erHc}#qaM<~A' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

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
