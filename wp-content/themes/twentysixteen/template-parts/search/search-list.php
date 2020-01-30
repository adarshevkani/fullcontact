<!-- Search list query -->
<?php
	$email=$_REQUEST['type'];
	global $wpdb;
	$searchResult=$wpdb->get_results("SELECT post_id FROM `fc_postmeta` WHERE `meta_key` = 'full_name' AND `meta_value` LIKE '%$email%'");

 if($searchResult){
 ?>
<ul style="padding-top: 50px;">
	<h4>Search Results</h4>
<?php
	foreach ($searchResult as $value) { ?>
		<li>
			<a href="<?php echo get_permalink($value->post_id); ?>"><?php echo the_field("full_name",$value->post_id); ?></a>		
		</li>
	<?php } ?>
</ul>
<?php }else{
	echo "No Contacts Found";
}
?>
