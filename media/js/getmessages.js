$( document ).ready(function() {

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
	}, 5000);
});