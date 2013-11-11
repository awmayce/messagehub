<div class='container add_friend'>
  <div class='jumbotron'>
    <div class="row">
    <?php foreach($result as $result): ?>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="holder.js/180x180" alt="..." class="img-circle">
            <div class="caption">
              <h3 style="text-align:center;"><?php echo $result['username']; ?></h3>
              <p><a href="<?php echo URL::site('friends/send_request/'.$result['id']) ?>" class="btn btn-primary">Send Request</a></p>
            </div>
          </div>
        </div>
    <?php endforeach ?>
  </div>
  </div>
</div>