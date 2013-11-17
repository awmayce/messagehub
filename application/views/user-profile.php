<div class="container">
	<div class="jumbotron">
		<h2>User Profile</h2>

		<div class="proofile details">
			<?php
	          $location = URL::base('http').'media/images/user_avatar/'.md5($profile->username).'.jpg';
	          if(@file_get_contents($location)) {
	            echo "<img src='".$location."' class='img'>";
	          } else {
	            $placeholder = URL::base('http').'media/images/user_avatar/placeholder.png';
	            echo "<img src='".$placeholder."' class='img'>";
	          }
	        ?>

	        <div class="details-text">
		        <h3>   <?php echo $profile->full_name ?></h3>
		        <p>	   <?php echo $profile->username ?></p>
		        <small><?php echo $profile->country ?></small><br />
		        <small><?php echo $profile->gender ?></small>
		    </div>

	    </div>

	</div>
</div>