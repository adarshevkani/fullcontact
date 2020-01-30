<?php
/**
Template name: Home
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<h2>Home</h2>

			<p>By Clicking On The <b>Add User</b> Link You Will Navigate To The Add User Page, From There You Can Add Users. By Entering Data In Email Field And Clicking Outside the Input Box The API Call To Full Contact Will Execute And If The Email Id Was There In Full Contact Database The Remaining Fields Will Get Auto Populated. </p>

			<p>By Clicking On The <b>Manage User</b> Link You Will Navigate To The Search Page, And From There By Clicking On The Search Results You Will Navigate To The Detal Page of User, From There You Can View The User Details And If You Needed You Can Delete An User too.</p>

			<p>By Clicking On The <b>All Users</b> Link You Will Navigate To The Page Where The All Users Are Listed. And From There By Clicking On Any User You Will Navigate To The Detal Page of User, From There You Can View The User Details And If You Needed You Can Delete An User too. </p>

			<p>From Any Page By Clicking On The Full Contact Text You Will Navigate To Home</p>

			<a href="/fullcontact/add-user/">ADD USER</a>
			</br>
			<a href="/fullcontact/user-search/">MANAGE USERS</a>	
			</br>
			<a href="/fullcontact/all-users/">ALL USERS</a>	

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
