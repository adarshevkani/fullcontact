<!-- User Delete -->
<?php
	$postid=$_REQUEST['type'];
	 wp_delete_post($postid,true);
	 echo "User Deleted";
?>
</br><a href="/fullcontact">Back To Home</a>
