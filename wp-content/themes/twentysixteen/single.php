<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header();
$id = get_the_ID();
 ?>
<!-- User Data -->
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="searchResults">
			<h1>User Details</h1>
			<?php if(get_field("full_name", $id)) { ?>
				<h2>Name: <?php echo the_field("full_name", $id); ?></h2>
			<?php }?>
			<?php if(get_field("email", $id)) { ?>
				<h2>Email: <?php echo the_field("email", $id); ?></h2>
			<?php }?>
			<?php if(get_field("phone", $id)) { ?>
				<h2>Phone: <?php echo the_field("phone", $id); ?></h2>
			<?php } ?>
			<?php if(get_field("gender", $id)) { ?>
				<h2>Gender: <?php echo the_field("gender", $id); ?></h2>
			<?php } ?>
			<?php if(get_field("location", $id)) { ?>
				<h2>Location: <?php echo the_field("location", $id); ?></h2>
			<?php } ?>
			<?php if(get_field("organization", $id)) { ?>
				<h2>Organization: <?php echo the_field("organization", $id); ?></h2>
			<?php } ?>
			<?php if(get_field("twitter", $id)) { ?>
				<h2>Twitter: <?php echo the_field("twitter", $id); ?></h2>
			<?php } ?>
			<?php if(get_field("linkedin", $id)) { ?>
				<h2>Linkedin: <?php echo the_field("linkedin", $id); ?></h2>
			<?php } ?>

			<button id="delete" data-id="<?php echo $id; ?>">Delete User</button>
		</div>
	</main><!-- .site-main -->
</div><!-- .content-area -->

<script type="text/javascript">
	$( document ).ready(function() {
	$("body").on("click","#delete",function(){
		if(confirm("Are you sure ?")){
		var ajaxurl = "/fullcontact/wp-admin/admin-ajax.php";
		var id= $(this).attr("data-id");
		 $.post( ajaxurl,  {
                      'action'  :   'delete_user',
                      'type' :   id,
                    },function(output){
                        $('.searchResults').html(output);
                    });
		 }
	});
	});
</script>
<?php get_footer(); ?>
