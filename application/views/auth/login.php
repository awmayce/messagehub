<!DOCTYPE html>
<html lang="en">
  <head>

    <title>Login | MessageHub</title>

    <!-- Bootstrap core CSS -->
    <?php echo HTML::style('/media/css/bootstrap.min.css') ?>
    <?php echo HTML::style('/media/css/style.css') ?>

    <!-- Custom styles for this template -->
    <?php echo HTML::style('/media/css/signin.css') ?>
  </head>

  <body class="login">

    <div class="container">

      

      <form class="form-signin" action="" method="post">
        <h2 class="form-signin-heading">Sign in</h2>
        <?php if(isset($fail)): ?>
        <div class="alert alert-danger">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <?php echo $fail ?>
        </div>
      <?php endif ?>
        <?php echo form::input('username', '', array('placeholder' => 'Username', 'class' => 'form-control','autofocus')) ?>
        <?php echo form::password('password', '', array('placeholder' => 'Password', 'class' => 'form-control')) ?>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <a href="<?php echo URL::site('user/register') ?>" class="btn btn-lg btn-default btn-block">Register</a>
      </form>

    </div> <!-- /container -->

    <?php echo HTML::script('http://code.jquery.com/jquery.js') ?>
    <?php echo HTML::script('/media/js/bootstrap.min.js') ?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
