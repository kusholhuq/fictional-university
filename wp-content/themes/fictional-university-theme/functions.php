<?php
function university_files(){
  wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  wp_enqueue_style('font-awesome', '//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('university_main_styles',get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'university_files');

add_filter('ai1wm_exclude_content_from_export', 'ignoreCertainFiles');
function ignoreCertainFiles($exclude_filters){
  $exclude_filters[] = 'themes/fictional-university-theme/node_modules';
  return $exclude_filters;
}

?>
