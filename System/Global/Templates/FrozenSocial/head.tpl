<!DOCTYPE html>
<html lang="es-MX">

<head>
  <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
  <meta name="robots" content="index, follow" />
  <title><?php echo SITE_NAME; ?></title>
  <link rel="stylesheet" href="<?php echo URL_PATH; ?>/plugins/system/rokbox/themes/clean/rokbox-style.css" type="text/css" />
  <script type="text/javascript" src="<?php echo URL_PATH; ?>/js/jQuery.js"></script>
  <script type="text/javascript" src="<?php echo URL_PATH; ?>/js/jquery.showMessage.js"></script>
  <script type="text/javascript" src="<?php echo URL_PATH; ?>/js/chat.js"></script>
	<?php
		if(isset($_COOKIE['u_login:s:a:true']))
			echo '<link rel="stylesheet" href="'.URL_PATH.'/css/style.css" type="text/css" />'."\n";
		elseif(isset($_GET['page']) && $_GET['page'] == 'registro')
			echo '<script type="text/javascript" src="'.URL_PATH.'/js/registro.js"></script>'."\n";
		if(!isset($_COOKIE['u_login:s:a:true']))
			echo '<script type="text/javascript" src="'.URL_PATH.'/js/login.js"></script>'."\n";
	?>
  <link rel="stylesheet" href="<?php echo URL_PATH; ?>/components/com_gantry/css/gantry.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo URL_PATH; ?>/components/com_gantry/css/grid-12.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo URL_PATH; ?>/components/com_gantry/css/joomla.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo URL_PATH; ?>/templates/rt_tachyon_j15/css/joomla.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo URL_PATH; ?>/templates/rt_tachyon_j15/css/body.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo URL_PATH; ?>/templates/rt_tachyon_j15/css/header-dark.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo URL_PATH; ?>/templates/rt_tachyon_j15/css/accent-orange.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo URL_PATH; ?>/templates/rt_tachyon_j15/css/footer-dark.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo URL_PATH; ?>/templates/rt_tachyon_j15/css/typography.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo URL_PATH; ?>/templates/rt_tachyon_j15/css/extensions.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo URL_PATH; ?>/templates/rt_tachyon_j15/css/thirdparty.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo URL_PATH; ?>/templates/rt_tachyon_j15/css/demo-styles.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo URL_PATH; ?>/templates/rt_tachyon_j15/css/splicemenu.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo URL_PATH; ?>/templates/rt_tachyon_j15/css/template.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo URL_PATH; ?>/modules/mod_roknewspager/themes/light/roknewspager.css" type="text/css" />
  <style type="text/css">
    <!--
		#rt-top a, #rt-header a, #rt-navigation a, 
		.menutop ul li > .item:hover, .menutop ul li.active > .item, 
		.menutop ul li.f-menuparent-itemfocus > .item 
		{
			color:#63B8F9;
		}
		a, .readonstyle-link .readon span, .readonstyle-link 
		.readon .button, #more-articles, .roktabs-links ul li.active span, 
		.roktabs-links ul li.active:hover span, .promo 
		.rt-module-surround:hover .title 
		{
			color:#0B86E5;
		}
		.rokbox-clean #rokbox-close, .rokbox-clean 
		#rokbox-arrows #rokbox-previous, .rokbox-clean 
		#rokbox-arrows #rokbox-next 
		{
			background-color:#0B86E5;
		}
		body, .inputbox, body #roksearch_search_str, body
		#roksearch_results h3, body #roksearch_results 
		.roksearch_header, body #roksearch_results 
		.roksearch_row_btm, body #roksearch_results 
		.roksearch_row_btm span 
		{
			color:#555;
		}
		#rt-bottom a, #rt-footer a, #rt-copyright a, .box4 a 
		{
			color:#63B8F9;
		}
		body .qtip a, #community-wrap .submenu li a 
		{
			color:#0B86E5;
		}

		body #rt-logo 
		{
			width:196px;height:41px;
		}


    -->
  </style>
  <script type="text/javascript" src="<?php echo URL_PATH; ?>/components/com_gantry/js/mootools-1.2.5.js"></script>
  <script type="text/javascript" src="<?php echo URL_PATH; ?>/media/system/js/caption.js"></script>
  <script type="text/javascript" src="<?php echo URL_PATH; ?>/plugins/system/rokbox/rokbox-mt1.2.js"></script>
  <script type="text/javascript" src="<?php echo URL_PATH; ?>/plugins/system/rokbox/themes/clean/rokbox-config.js"></script>
  <script type="text/javascript" src="<?php echo URL_PATH; ?>/components/com_gantry/js/gantry-totop-mt1.2.js"></script>
  <script type="text/javascript" src="<?php echo URL_PATH; ?>/templates/rt_tachyon_j15/js/gantry-splicemenu-mt1.2.js"></script>
  <script type="text/javascript" src="<?php echo URL_PATH; ?>/templates/rt_tachyon_j15/js/gantry-pillanim-mt1.2.js"></script>
  <script type="text/javascript" src="<?php echo URL_PATH; ?>/components/com_gantry/js/gantry-inputs-mt1.2.js"></script>
  <script type="text/javascript" src="<?php echo URL_PATH; ?>/components/com_gantry/js/gantry-smartload-mt1.2.js"></script>
  <script type="text/javascript" src="<?php echo URL_PATH; ?>/templates/rt_tachyon_j15/js/gantry-module-scroller-mt1.2.js"></script>
  <script type="text/javascript" src="<?php echo URL_PATH; ?>/modules/mod_rokminievents/tmpl/js/rokminievents-mt1.2.js"></script>
  <script type="text/javascript" src="<?php echo URL_PATH; ?>/modules/mod_rokminievents/tmpl/js/rokslider-mt1.2.js"></script>
  <script type="text/javascript" src="<?php echo URL_PATH; ?>/modules/mod_roknewspager/tmpl/js/roknewspager-mt1.2.js"></script>
  <script type="text/javascript" src="<?php echo URL_PATH; ?>/components/com_community/assets/joms.jquery.js"></script>
  <script type="text/javascript" src="<?php echo URL_PATH; ?>/components/com_community/assets/script-1.2.js"></script>
  <script type="text/javascript" src="<?php echo URL_PATH; ?>/modules/mod_roktabs/tmpl/roktabs-mt1.2.js"></script>
  <script type="text/javascript">
  
				var SpliceMenuSettings = {
					'arrow': {duration: 200, transition: Fx.Transitions.Sine.easeOut},
					'subpanel': {duration: 200, transition: Fx.Transitions.Sine.easeOut}
				}
			
					InputsExclusion.push('.content_vote','#rt-popup','#rt-popuplogin','#vmMainPage','#community-wrap')
					window.addEvent('domready', function() {new GantrySmartLoad({'offset': {'x': 200, 'y': 200}, 'placeholder': '/feb11/templates/rt_tachyon_j15/images/blank.gif', 'exclusion': ['ul.menutop,div.roktabs-wrapper,span.image,div.fusion-submenu-wrapper,.module-content ul.menu .image,.roknewspager-div a,.feature-block .image-full, .controls']}); });
					window.addEvent("domready", function() {
						new ScrollModules('rt-feature', {duration: 600, transition: Fx.Transitions.Quint.easeInOut, autoplay: 0, delay: 5000});
					});
					window.addEvent("domready", function(){ new SmoothScroll(); });

					window.addEvent('domready', function() {new GantryPill('ul.menutop', {duration: 200, transition: Fx.Transitions.Sine.easeOut, color: false})});

  </script>
</head>