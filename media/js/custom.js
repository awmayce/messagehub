$(document).ready(function() {
  // Messages Height
	var messages = $(window).height()-$(".navbar.navbar-default").height()-$(".message-area-info").height()-$(".message-area-send").height();
	$(".message-area-messages").css("height", messages-23);	

	$(window).resize(function() {
		var messages = $(window).height()-$(".navbar.navbar-default").height()-$(".message-area-info").height()-$(".message-area-send").height();
		$(".message-area-messages").css("height", messages-23);
	});

  // Send on Enter
  $('#send_message').keypress(function(e){
    if(e.which == 13){
         $('form').submit();
     }
  });

  // Add Friend Animation
  $(".user-search a").hide();

  // Animate background color of new conversation when new message
  setInterval(function(){
    $(".recent .new").css('background', 'black').delay(4000).css('background', 'white');
  }, 2000);
});