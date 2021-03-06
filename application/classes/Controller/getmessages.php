<?php defined('SYSPATH') or die('No direct script access.');

Class Controller_GetMessages extends Controller {

	public function action_user()
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
			->find_all();

		$countMessages = count($message);

		if($countMessages < 20) {
			$offset = 0;
		}
		else {
			$offset = $countMessages-'20';
		}
		
		$message = ORM::factory('message')
			->where('conversation', '=', $conversation_id)
			->order_by('date', 'ASC')
			->limit('20')
			->offset($offset)
			->find_all();

		foreach ($message as $message) {
			if ($message->sender == $user) {
					$class = 'message-message-user';
				}
				else {
					$class = 'message-message-friend';
				}
			$message = "<div class=".$class.">".Text::auto_link(HTML::entities($message->body))."</div>";
			echo $message;
		}
		
	}

}

