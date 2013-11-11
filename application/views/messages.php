<?php if(isset($friend)): ?>
<script type="text/javascript">
$( document ).ready(function() {

// Populate with messages
var grbData = $.ajax({
    type : "GET",
    url : "<?php echo URL::site('getmessages/user/'.$friend) ?>",
    data : "",
    success: function (data) {
        var message_body = data;
		$('.message-area-messages').html("<p>"+message_body+"</p>");
		$(".message-area-messages").scrollTop($(".message-area-messages")[0].scrollHeight);
    }
});

// Mark Messages as read
var grbData = $.ajax({
    type : "GET",
    url : "<?php echo URL::site('makeread/user/'.$friend) ?>"
});

// Populate Conversations list
var grbData = $.ajax({
    type : "GET",
    url : "<?php echo URL::site('conversations') ?>",
    data : "",
    success: function (data) {
        var conversation = data;
		$('.recent').html(conversation);
    }
});

	
	// Repeat every 5 seconds
	setInterval(function(){
	  	var grbData = $.ajax({
		        type : "GET",
		        url : "<?php echo URL::site('getmessages/user/'.$friend) ?>",
		        data : "",
		        success: function (data) {
		            var message_body = data;


					$('.message-area-messages').html("<p>"+message_body+"</p>");
					$(".message-area-messages").scrollTop($(".message-area-messages")[0].scrollHeight);
		        }
		});

		var grbData = $.ajax({
		    type : "GET",
		    url : "<?php echo URL::site('conversations') ?>",
		    data : "",
		    success: function (data) {
		        var conversation = data;
				$('.recent').html(conversation);
		    }
		});

		var grbData = $.ajax({
		        type : "GET",
		        url : "<?php echo URL::site('makeread/user/'.$friend) ?>"
		});
	}, 5000);
});
</script>
<?php endif ?>

<div class='area'>
	<div class='recent'></div>
	<div class='message-area'>
		<?php if(isset($friend)): ?>
			
			<div class="message-area-info"><?php echo "Messages to ".$friend->username ?></div>

			<div class="message-area-messages"></div>

			<div class="message-area-send">
				<?php
					echo form::open('main/send/'.$friend);
					echo form::textarea('send-message', '', array('placeholder' => 'Write something...', 'rows' => '4', 'id' => 'send_message'));
					echo form::submit('send', 'Send', array('class' => 'btn btn-default'));
					echo form::close();
				?>
			</div>
			
		<?php endif ?>
	</div>
</div>