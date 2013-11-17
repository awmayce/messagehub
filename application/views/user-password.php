<div class="container">
	<div class="jumbotron">
			<?php echo Form::open(NULL); ?>
			<h2 class="form-signin-heading">Change Password</h2>
				<ul class="nav nav-pills">
				  <li><?php echo HTML::anchor('profile', 'Details'); ?></li>
				  <li><?php echo HTML::anchor('profile/edit', 'Edit'); ?></li>
				  <li class="active"><?php echo HTML::anchor('profile/password', 'Change Password'); ?></li>
				</ul>

		<div class="password profile">
			
			<?php if(isset($fail)): ?>
		        <div class="alert alert-danger">
		          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		          <?php echo $fail ?>
		        </div>
		    <?php endif ?>
			
			<?php echo Form::label('currentpassword', 'Enter your current password', array('class' => 'form-control')) ?>
			<?php echo form::password('currentpassword', '', array('class' => 'form-control')) ?>

			<?php echo Form::label('newpassword', 'Enter your new password', array('class' => 'form-control')) ?>
			<?php echo form::password('newpassword', '', array('class' => 'form-control')) ?>

			<?php echo Form::label('repeatpassword', 'Repeat password', array('class' => 'form-control')) ?>
			<?php echo form::password('repeatpassword', '', array('class' => 'form-control')) ?>

		    <?php echo Form::submit('changepassword', 'Change Password', array('class' => 'form-control btn btn-primary')) ?>
			<?php echo form::close() ?>
		</div>
	</div>
</div>