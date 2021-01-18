<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package NewsCredTest
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body>
<header>
    <nav class="navbar navbar-expand-lg primary__nav">
      <div class="container">
        <a class="navbar-brand" href="#">Logo</a> <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#places">Places</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#people">People</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#purpose">Pupose</a>
            </li>
            <li class="nav-item search-li"><img alt="Search" src="<?php echo get_template_directory_uri(); ?>/images/svg/seach.svg" width="20"></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="sub__nav">
      <div class="container d-flex align-items-center justify-content-between">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Blog</a>
          </li>
          <li class="breadcrumb-item">
            <a href="#">Places</a>
          </li>
        </ol>
        <small><span class="text-yellow">EXPLORE DESTINATIONS</span> | SUBSCRIBE  <img width="15" src="<?php echo get_template_directory_uri(); ?>/images/svg/envelop.svg" alt="Subscribe"></small>
      </div>
    </div>
</header>
