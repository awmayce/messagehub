<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Conversations extends Controller {

	public function action_index()
	{
		$user = Auth::instance()->get_user();

		$conversation = ORM::factory('conversation')
			->where('user', '=', $user)
			->or_where('friend', '=', $user)
			->find_all();

		foreach ($conversation as $conversation) {
			//echo "<div class='recent-box'>";
				if ($conversation->user == $user) {
					$friend_user = ORM::factory('user')->where('id', '=', $conversation->friend)->find('username');
					
					$isRead = ORM::factory('message')
								->where('sender', '=', $friend_user->id)
								->and_where('reciever', '=', $user)
								->order_by('read', 'ASC')
								->limit('1')
								->find('read');

					//echo $isRead->read;

					if($isRead->read === NULL) {
						echo "<div class='recent-box new'><h3>".HTML::anchor(URL::site('main/message/'.$friend_user->id), $friend_user->username)."</h3></div>";
					}
					else {
						echo "<div class='recent-box'><h3>".HTML::anchor(URL::site('main/message/'.$friend_user->id), $friend_user->username)."</h3></div>";
					}
				}
				else {
					$friend_user = ORM::factory('user')->where('id', '=', $conversation->user)->find('username');
					
					$isRead = ORM::factory('message')
								->where('sender', '=', $friend_user->id)
								->and_where('reciever', '=', $user)
								->limit('1')
								->find('read');
				
					if($isRead->read === NULL) {
						echo "<div class='recent-box new'><h3>".HTML::anchor(URL::site('main/message/'.$friend_user->id), $friend_user->username)."</h3></div>";
					}
					else {
						echo "<div class='recent-box'><h3>".HTML::anchor(URL::site('main/message/'.$friend_user->id), $friend_user->username)."</h3></div>";
					}
				}
			//echo "</div>";
		}
	}
}