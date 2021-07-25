<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package travel
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<header>
      <div class="header-top">
         <div class="container">
            <p> 024.73 07 50 60(Hà Nội) | 028.44 50 60 70(HCM) | 024.44 50 60 90 (Hạ Long)</p>
         </div>
      </div>
      <div class="header-menu">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-md-3">
                  <div class="logo"><a href=""><img src="<?php echo __BASE_URL__ ?>/images/logo.png" class="img-fluid"></a></div>
               </div>
               <div class="col-md-9">
                  <div class="h-menu">
                     <ul>
                        <li><a href="" class="active">Home</a></li>
                        <li><a href="">Special Price</a></li>
                        <li><a href="">Testimonial</a></li>
                        <li><a href="">Blog</a></li>
                        <li><a href="">Contact Us</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header> 
