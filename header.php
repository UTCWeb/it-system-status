<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package iPanelThemes Knowledgebase
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php
if ( is_front_page() ) {
  //echo "<META HTTP-EQUIV='REFRESH' CONTENT='30'>" ;
}
?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>
<?php wp_title( '|', true, 'right' ); ?>
</title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- Add Brandbar --> 
<script type="text/javascript" src="//www.utc.edu/_resources/brandbar/utc-brandbar-nojq.js"></script>
<div id="page" class="hfeed site">
<div id="content" class="site-content container">
<h2>
  <?php bloginfo( 'name' ); ?>
</h2>
<ol id="breadcrumbs" class="breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#">
  <li typeof="v:Breadcrumb"> <a rel="v:url" property="v:title" href="https://blog.utc.edu/itstatus/">Home</a> </li>
</ol>
