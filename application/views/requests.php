<div class='container add_friend'>
  <div class='jumbotron'>
    <div class="row">
    <?php foreach($requests as $requests): ?>
       <?php $friend_user = ORM::factory('user')->where('id', '=', $requests->sender)->find('username'); ?>
        <div class="box">
          <h3><?php echo $friend_user->username; ?></h3>
          
	      <div class='buttons'>
	          <a href="<?php echo URL::site('friends/accept/'.$friend_user->id) ?>" class="btn btn-primary">Accept</a>
	          <a href="<?php echo URL::site('friends/decline/'.$friend_user->id) ?>" class="btn btn-default">Decline</a>
	      </div>
        </div>
    <?php endforeach ?>
  </div>
  </div>
</div>