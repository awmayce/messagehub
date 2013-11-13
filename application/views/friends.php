<script type="text/javascript">

$( document ).ready(function() {

  $("#search_user").keyup(function(){
    var search = "http://messagehub.co.uk/finduser/user_id/"+$(this).val();

    var grbData = $.ajax({
      type : "GET",
      url : search,
      data : "",
      success: function (data) {
        var result = data;
        $('.result').html("<table class='user-search table-hover'>"+result+"</table>");
      }
    });
  });

});

</script>



<div class='container'>
	<div class='btn btn-primary pull-right' href='#add_friend' data-toggle='modal'>Add Friend</div>

  <div class='jumbotron'>
    <div class="row">
    <?php foreach($friend as $friend): ?>
      <?php $friend_user = ORM::factory('user')->where('id', '=', $friend->friendid)->find('username'); ?>
        <div class="col-sm-4">
          <div class="thumbnail">
            <?php
              $location = URL::base('http').'media/images/user_avatar/'.md5($friend_user->username).'.jpg';
              if(@file_get_contents($location)) {
                //$source = URL::base('http').'media/images/user_avatar/'.md5($friend_user->username).'.jpg';
                echo "<img src='".$location."' class='img-circle'>";
              } else {
                $placeholder = URL::base('http').'media/images/user_avatar/placeholder.png';
                echo "<img src='".$placeholder."' class='img-circle'>";
              }
            ?>
            
            <div class="caption">
              <h3 style="text-align:center;"><?php echo HTML::anchor(URL::site('profile/user/'.$friend->friendid), $friend_user->username); ?></h3>
              <p><a href="<?php echo URL::site('main/message/'.$friend_user->id) ?>" class="btn btn-primary">Message</a>
                 <a href="<?php echo URL::site('friends/remove/'.$friend_user->id) ?>" class="btn btn-default">Remove Friend</a></p>
            </div>
          </div>
        </div>
    <?php endforeach ?>
  </div>
  </div>
</div>




<div class="modal fade" id="add_friend" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Add Friend</h4>
        </div>
        <div class="modal-body">
          <table>
            <tr>
              <td><?php echo form::label('search_user', 'Seach by Username') ?></td>
              <td><?php echo form::input('search_user', '', array('class' => 'form-control', 'id' => 'search_user')) ?></td>
            </tr>
          </table>
          <div class="result">
            <p>Search in the box above to find people you know</p>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->