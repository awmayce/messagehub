<!DOCTYPE html>
<html lang="en">
  <head>

    <title>Register | MessageHub</title>

    <!-- Bootstrap core CSS -->
    <?php echo HTML::style('/media/css/bootstrap.min.css') ?>
    <?php echo HTML::style('/media/css/style.css') ?>

    <!-- Custom styles for this template -->
    <?php echo HTML::style('/media/css/signin.css') ?>
  </head>

  <body class="register">

    <div class="container">

      

      <?php echo Form::open(NULL, array('enctype' => 'multipart/form-data', 'class' => 'form-signin')); ?>
        <h2 class="form-signin-heading">Register here:</h2>
        <?php if(isset($fail)): ?>
        <div class="alert alert-danger">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <?php echo $fail ?>
        </div>
      <?php endif ?>
        <?php echo form::input('username', '', array('placeholder' => 'Choose a username', 'class' => 'form-control','autofocus')) ?>
        <?php echo form::input('email', '', array('placeholder' => 'Enter a valid email address', 'class' => 'form-control')) ?>
        <?php echo form::password('password', '', array('placeholder' => 'Enter a password', 'class' => 'form-control')) ?>
        <?php echo form::password('repeat', '', array('placeholder' => 'Repeat password', 'class' => 'form-control')) ?>
        <?php echo form::file('avatar', array('class' => 'form-control', 'id' => 'avatar')) ?>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
      <?php echo Form::close(); ?>

    </div> <!-- /container -->

    <?php echo HTML::script('http://code.jquery.com/jquery.js') ?>
    <?php echo HTML::script('/media/js/bootstrap.min.js') ?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
