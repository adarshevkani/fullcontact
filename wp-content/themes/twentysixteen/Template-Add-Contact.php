<?php
/**
Template name: Add User
 */
acf_form_head();
get_header(); ?>
<style type="text/css">
	#genderid,#location,#title,#organization,#twitter,#linkedin{
		display: none;
	}
</style>
	<!-- Form For USer Adding  -->
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<h1><?php echo the_title(); ?>	
			<div class="searchResults">
				<div class="initial">
					<?php
			
					acf_form(array(
						'post_id'		=> 'new_post',
						'post_title'	=> false,
						'post_content'	=> false,
						'new_post'		=> array(
							'post_type'		=> 'post',
							'post_status'	=> 'publish'
						),
						'return'		=> home_url('home'),
						'submit_value'	=> 'ADD USER'
					));
					
					?>
				</div>
			</div>
			
		</main><!-- .site-main -->
	</div><!-- .content-area -->
	<!-- Script For Api Call -->
	<script type="text/javascript">
		$(document).ready(function(){
			$("body").on("blur","#acf-field_5e3196a62abd7",function(){
				var email = $(this).val();
				 var ajaxurl = "/fullcontact/wp-admin/admin-ajax.php";
                    $.post( ajaxurl,  {
                      'action'  :   'fetch_userData',
                      'type' :   email,
                    },function(output){
					 var data = output;
					 var fdata= JSON.parse(data);
					 var identifier=fdata.gender;
					 // console.log(identifier);
					 if(identifier){
					 	// alert("Data Found");
					 	$("#genderid").show().find(":input").val(identifier);
					 	$("#location").show().find(":input").val(fdata.location);
					 	$("#title").show().find(":input").val(fdata.title);
					 	$("#organization").show().find(":input").val(fdata.organization);
					 	$("#twitter").show().find(":input").val(fdata.twitter);
					 	$("#linkedin").show().find(":input").val(fdata.linkedin);
					 	$("#full_name").find(":input").val(fdata.fullName);


					 }
                    });
			});
		});
	</script>

<?php get_footer(); ?>
