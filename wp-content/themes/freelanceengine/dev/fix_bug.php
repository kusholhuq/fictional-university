<?php
function fre_fix_skill_country_can_not_save(){
	remove_role(FREELANCER);
	add_role(FREELANCER,'FREELANCER', $args); // add can_edit_post on the argument.
	$t =  $admin_role_set = get_role( FREELANCER )->capabilities;
echo '<pre>';
var_dump($admin_role_set);
echo '</pre>';

$sql = "DELETE
FROM  wp_users u
INNER JOIN wp_usermeta ON u.ID = wp_usermeta.user_id WHERE u.id = 0";
global $wpdb;
$wpdb->query($sql);
}
add_action('wp_footer','fre_fix_skill_country_can_not_save');