<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_Layout {

	public function action_index()
	{
		$user = Auth::instance()->get_user();

		$messageTime = ORM::factory('message')->where('sender', '=', $user)->or_where('reciever', '=', $user)->order_by('date', 'DESC')->find("sender", "reciever");

		if ($messageTime->sender == $user)
		{
			$friend = $messageTime->reciever;
		}
		elseif ($messageTime->reciever == $user)
		{
			$friend = $messageTime->sender;
		}
		else
		{
			header("Location: ".URL::site('friends'));
			die();
		}

		header("Location: ".URL::site('main/message/'.$friend));
		die();
	}

	public function action_message()
	{
		$user = Auth::instance()->get_user();
		$friend_id = $this->request->param('id');
		$friend = ORM::factory('user', $friend_id);

		$check_friends = ORM::factory('friend')->where('userid', '=', $user)->and_where('friendid', '=', $friend_id)->find('id');

		$conversation = ORM::factory('conversation')
			->where('user', '=', $user)
			->or_where('friend', '=', $user)
			->find_all();

		$conversation_id = ORM::factory('conversation')
			->where('user', '=', $user)
			->and_where('friend', '=', $friend)
			->find('id');

		if($conversation_id == '')	{
			$conversation_id = ORM::factory('conversation')
				->where('user', '=', $friend)
				->and_where('friend', '=', $user)
				->find('id');
			if($conversation_id == '') {
				if ($check_friends == '') {
					header("Location: ".URL::site('friends'));
					die();
				}
				else {
					$new_conversation = ORM::factory('conversation');
					$new_conversation->user = $user;
					$new_conversation->friend = $friend_id;
					$new_conversation->save();
					header("Location:".URL::site('main/message/'.$friend_id));
					die();
				}
			}
		}

		if ($check_friends == '') {
			echo "You must be friends with this user before you can chat with them <a href=".URL::site('main/message').">click here to go back</a>";
			$delete_conversation = ORM::factory('conversation', $conversation_id);
			$delete_conversation->delete();
		}

		$this->template->title = "messages ".$friend->username;
		$this->template->nav_messages = 'active';
		$this->template->content = View::factory('messages')
			->bind('conversation', $conversation)
			->bind('conversation_id', $conversation_id)
			->bind('message', $message)
			->bind('friend', $friend);
	}

	public function action_getmessage()
	{
		$user = Auth::instance()->get_user();
		$friend_id = $this->request->param('id');
		$friend = ORM::factory('user', $friend_id);

		$conversation_id = ORM::factory('conversation')
			->where('user', '=', $user)
			->and_where('friend', '=', $friend)
			->find('id');

		if($conversation_id == '')	{
			$conversation_id = ORM::factory('conversation')
				->where('user', '=', $friend)
				->and_where('friend', '=', $user)
				->find('id');
		}

		$message = ORM::factory('message')
			->where('conversation', '=', $conversation_id)
			->order_by('date', 'ASC')
			->limit('20')
			->find_all();

		foreach ($message as $message) {
			if ($message->sender == $user) {
					$class = 'message-message-user';
				}
				else {
					$class = 'message-message-friend';
				}
			$message = "<div class=".$class.">".htmlentities($message->body)."</div>";
			echo $message;
		}
		
	}

	public function action_send()
	{
		$friend_id = $this->request->param('id');
		$user = Auth::instance()->get_user();
		$friend = ORM::factory('user', $friend_id);

		$conversation_id = ORM::factory('conversation')
			->where('user', '=', $user)
			->and_where('friend', '=', $friend)
			->find('id');

		if($conversation_id == '')	{
			$conversation_id = ORM::factory('conversation')
				->where('user', '=', $friend)
				->and_where('friend', '=', $user)
				->find('id');
		}

		$date = date_create();

		$post = $this->request->post();

		if(empty($post['send-message'])) {
			header("Location:".URL::site('main/message/'.$friend_id));
			die();
		}

		$send = ORM::factory('message');
		$send->sender = $user;
		$send->reciever = $friend_id;
		$send->conversation = $conversation_id;
		$send->body = htmlentities($this->request->post('send-message'));
		$send->date = date_timestamp_get($date);
		$send->save();

		header("Location:".URL::site('main/message/'.$friend_id));
		die();
	}

}