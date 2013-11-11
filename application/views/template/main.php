<html>
	<head>
		<title><?php echo @$title ?> | MessageHub</title>
		<?php echo HTML::style('../../media/css/bootstrap.min.css') ?>
		<?php echo HTML::style('../../media/css/style.css') ?>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	     <?php echo HTML::script('http://code.jquery.com/jquery.js') ?>
	</head>
	<body class="<?php echo @$title ?>">
		<nav class="navbar navbar-default" role="navigation">
		  <!-- Brand and toggle get grouped for better mobile display -->
		  <div class="navbar-header">
		    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
		      <span class="sr-only">Toggle navigation</span>
		      <span class="icon-bar"></span>
		      <span class="icon-bar"></span>
		      <span class="icon-bar"></span>
		    </button>
		    <a class="navbar-brand" href="#">MessageHub</a>
		  </div>

		  <!-- Collect the nav links, forms, and other content for toggling -->
		  <div class="collapse navbar-collapse navbar-ex1-collapse">
		    <ul class="nav navbar-nav">
		      <li class='<?php echo @$nav_messages ?>'><?php echo HTML::anchor(URL::site('main'), 'Messages') ?></li>
		      <li class='<?php echo @$nav_friends ?>'><?php  echo HTML::anchor(URL::site('friends'), 'Friends') ?></li>
		    </ul>
		    <?php $location = URL::base('http').'media/images/user_avatar/'.md5($user->username).'.jpg'; ?>
		    <ul class="nav navbar-nav navbar-right">
		      <li class="dropdown">
		        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
		        	<?php if(@file_get_contents($location)) {
		                echo "<img src='".$location."' class='img-circle'>";
		              } else {
		                $placeholder = URL::base('http').'media/images/user_avatar/placeholder.png';
		                echo "<img src='".$placeholder."' class='img-circle'>";
		              } ?>
		        	<?php echo $user->username." <span class='badge'>".$notification."</span>" ?>
		        </a>
		        <ul class="dropdown-menu">
		        	<li><?php echo HTML::anchor(URL::site('friends/requests'), 'Requests <span class="badge">'.$notification.'</span>'); ?>
		         	<li><?php echo HTML::anchor(URL::site('user/logout'), 'Logout') ?></li>
		        </ul>
		      </li>
		    </ul>
		  </div><!-- /.navbar-collapse -->
		</nav>

		<?php echo @$content ?>

		 
	     <!-- Include all compiled plugins (below), or include individual files as needed -->
	     <?php echo HTML::script('/media/js/bootstrap.min.js') ?>
	     <?php echo HTML::script('/media/js/holder.js') ?>


	<?php echo HTML::Script('media/js/custom.js') ?>
	</body>

</html>