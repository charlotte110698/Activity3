<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blank
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
<header style="background-color: white; width:100%;height: 90px">

<meta charset="utf-8">
<title>Homepage</title>

	<div class="wrapper">
		<div class="logo">
			<img src="http://localhost/pascual/wordpress/wp-content/uploads/2021/05/logo1-1.png">
			<ul class="nav-area">
				<li><a href="http://localhost/pascual/wordpress/">HOME</a></li>
				<li><a href="http://localhost/pascual/wordpress/?page_id=101">SHOP</a></li>
				<li><a href="http://localhost/pascual/wordpress/?page_id=74">ABOUT</a></li>
				<li><a href="blog.php">BLOG</a></li>
				<li><a href="http://localhost/pascual/wordpress/?page_id=9">CONTACT US</a></li>
			</ul>

		<div class="social">
			<a href=""><img src="http://localhost/pascual/wordpress/wp-content/uploads/2021/05/fb.jpg" style="height: 45px; width:50px; float:right;position: absolute;margin-top:1px;margin-left: 210px;"></a>
			<a href=""><img src="http://localhost/pascual/wordpress/wp-content/uploads/2021/05/twitter-1.png" style="height: 38px; width:35px; float:right;position: absolute;margin-top:3px;margin-left: 260px;"></a>
			<a href=""><img src="http://localhost/pascual/wordpress/wp-content/uploads/2021/05/insta-1.jpg" style="height: 40px; width:45px; float:right;position: absolute;margin-top:3px;margin-left: 300px;"></a>
		</div>
		<div class="search-box">
		<input style="margin-top: -50px; width: 240px; float: right; margin-left: 150px;" class="search-txt" type="text" name=""placeholder="Type to search">
		<a href=""><img class="search-btn" src="http://localhost/pascual/wordpress/wp-content/uploads/2021/05/ce6535a5-1.png" style="position: absolute;width: 30px; height: 28px; float: left;margin-top: 50px; border-radius: 20%; margin-left: 270px;"></a>
		<a href="http://localhost/pascual/wordpress/?page_id=104"><img src="http://localhost/pascual/wordpress/wp-content/uploads/2021/05/loginicon.png" style="position: absolute;width: 30px; height: 30px; float: left;margin-top:50px; border-radius: 20%;margin-left: 350px; background-color: lightgray;"></a>
		<a href="http://localhost/pascual/wordpress/?page_id=102"><img src="http://localhost/pascual/wordpress/wp-content/uploads/2021/05/carte-1.png" style="position: absolute;width: 30px; height: 30px; float: left;margin-top:50px; border-radius: 20%;margin-left: 400px; background-color: lightgray;"></a>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	