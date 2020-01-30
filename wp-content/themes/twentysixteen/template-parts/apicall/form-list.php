<!-- User Delete -->
<?php
	echo $postid=$_REQUEST['type'];
	$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL,"https://api.fullcontact.com/v3/person.enrich");
			curl_setopt($ch, CURLOPT_POST, 1);
			$authorization = "Authorization: Bearer Ghw4N5aHpeduLFODAueRLK1SOrnDZ8X4";
			curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization ));
			curl_setopt($ch, CURLOPT_POSTFIELDS,
			            '{"email":"'.$postid.'"}');
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

			$server_output = curl_exec($ch);
			print_r($server_output);

			curl_close ($ch);


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
