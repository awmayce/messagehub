<?php defined('SYSPATH') or die('No direct script access.');

class Controller_MakeRead extends Controller {

	public function action_user()
	{
		$user = Auth::instance()->get_user();
		$friend_id = $this->request->param('id');

	    $query = DB::update('messages')
			->set(array('read' => '1'))
			->where('sender', '=', $friend_id)
			->and_where('reciever', '=', $user)
			->and_where('read', '=', NULL);
		$query->execute();
	}
}