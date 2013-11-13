<div class="container">
	<div class="jumbotron">
		<h2>User Profile</h2>
		<ul class="nav nav-pills">
		  <li class="active details"  onclick="profilePills('details')"><a href="#">Details</a></li>
		  <li class="edit"><a href="#" onclick="profilePills('edit')">Edit</a></li>
		  <li class="password"><a href="#" onclick="profilePills('password')">Change Password</a></li>
		</ul>

		<div class="details profile">
			<?php
	          $location = URL::base('http').'media/images/user_avatar/'.md5($user->username).'.jpg';
	          if(@file_get_contents($location)) {
	            echo "<img src='".$location."' class='img'>";
	          } else {
	            $placeholder = URL::base('http').'media/images/user_avatar/placeholder.png';
	            echo "<img src='".$placeholder."' class='img'>";
	          }
	        ?>

	        <div class="details-text">
		        <h3>   <?php echo $user->full_name ?></h3>
		        <p>	   <?php echo $user->username ?></p>
		        <small><?php echo $user->country ?></small><br />
		        <small><?php echo $user->gender ?></small>
		    </div>

	    </div>

	    <div class="hidden edit profile">

	    </div>

	    <div class="hidden password profile">

	    </div>

	</div>
</div>