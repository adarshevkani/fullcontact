<?php
/**
Template name: Search User
 */
acf_form_head();
get_header(); ?>
<!-- Search Form -->
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<h1><?php echo the_title(); ?>	
		<input type="text" name="email" required="required" id="email" placeholder="Enter Name For Search">
		<button id="search">Search</button>
		<!-- <a href="JavaScript:Void(0);" id="search">Search</a> -->
		<div class="searchResults">
			
		</div>
	</main><!-- .site-main -->
</div><!-- .content-area -->

<script type="text/javascript">
	$( document ).ready(function() {
	    $("body").on("click","#search",function(){
	    	 var ajaxurl = "/fullcontact/wp-admin/admin-ajax.php";
	    	 var email = $("#email").val();
                    $.post( ajaxurl,  {
                      'action'  :   'fetch_users',
                      'type' :   email,
                    },function(output){
                        $('.searchResults').html(output);
                    });
	    });
	});
</script>

<?php get_footer(); ?>
