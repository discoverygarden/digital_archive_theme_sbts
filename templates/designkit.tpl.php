/**
 * This template should be overridden by implementing themes to establish
 * the styles they would like to use with DesignKit settings. The following
 * template is provided as a simple example of how you can generate CSS
 * styles from DesignKit settings.
 *
 * .designkit-color { color: [?php print $foreground ?]; }
 * .designkit-bg { background-color: [?php print $background ?]; }
 */

a.active,
.flex-direction-nav a::before,
.flex-direction-nav a,
.flex-control-paging li a.flex-active {
  color: <?php print $highlight ?>;
}

#main-menu ul li a,
#main-menu ul li a.active,
#secondary-menu ul li a,
#secondary-menu ul li a.active {
  color: <?php print $mainmenu ?>;
}

.flex-control-paging li a.flex-active {
  background: <?php print $highlight ?>;
}

body a,
a.tabs-primary__tab-link,
a.tabs-primary__tab-link.is-active {
  color: <?php print $links ?>;
}

body p {
  color: <?php print $text ?>;
}

.slideshow-region-wrapper {
  background: <?php print $slideshow ?>;
}

.flexslider .slides li .info-content-wrapper {
  background: <?php $bg_color = designkit_colorshift($slideshow, '#ffffff', .5); print digital_archive_theme_hextorgb($bg_color, 0.8); ?>;
  color: <?php print (designkit_colorhsl($slideshow, 'l') > .5) ? '#fff' : '#000' ?>;
}

body.designkit {
  background: <?php print $background ?>;
}

.inner-div-header,
.header-content-wrapper {
  background: <?php print $header ?>;
}

.bottom-wrapper {
  background: <?php print $bottomwrapper ?>;
}

#main {
  background: <?php print $content ?>;
}

#footer {
  background: <?php print $footer ?>;
}

#page-title {
  color: <?php print (designkit_colorhsl($pagetitle, 'l') > .5) ? '#fff' : '#000' ?>;
}