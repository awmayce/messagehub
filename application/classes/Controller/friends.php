<?php defined('SYSPATH') or die('No direct script access.');

Class Controller_Friends extends Controller_Layout {

	public function action_index()
	{
		$user = Auth::instance()->get_user()->id;
		$friend = ORM::factory('friend')->where('userid', '=', $user)->find_all();

		$this->template->title = 'Friends';
		$this->template->nav_friends = 'active';
		$this->template->content = View::factory('friends')
			->bind('friend', $friend);
	}

	/*public function action_add_friend()
	{
		$search = $this->request->post('search_user');

		$result = DB::select()->from('users')
			->where('username', 'LIKE', '%'.$search.'%')
			->limit('20')
			->execute()
			->as_array();

		$this->template->title = 'Add friends';
		$this->template->nav_friends = 'active';
		$this->template->content = View::factory('find_friends')
			->bind('result', $result);
	}*/

	public function action_send_request()
	{
		$friend_id = $this->request->param('id');

		//echo $friend_id;

		$send = ORM::factory('request');

		$send->sender = Auth::instance()->get_user();
		$send->reciever = $friend_id;

		$send->save();

		header('Location:'.URL::site('friends'));
		die();
	}

	public function action_requests()
	{
		$user = Auth::instance()->get_user();
		$requests = ORM::factory('request')->where('reciever', '=', $user)->and_where('confirmed', '=', '0')->find_all();

		$this->template->title = 'Friend Requests';
		$this->template->nav_friends = 'active';
		$this->template->content = View::factory('requests')
			->bind('requests', $requests);
	}

	public function action_accept()
	{
		$partner_id = $this->request->param('id');
		$user = Auth::instance()->get_user();

		$request = ORM::factory('request')->where('sender', '=', $partner_id)->and_where('reciever', '=', $user)->and_where('confirmed', '=', '0')->find('id');
		$request->confirmed = '1';
		$request->save();

		$friend = ORM::factory('friend');
		$friend->userid = $user;
		$friend->friendid = $partner_id;
		$friend->save();

		$friend = ORM::factory('friend');
		$friend->userid = $partner_id;
		$friend->friendid = $user;
		$friend->save();

		header('location:'.URL::site('friends'));
		die();
	}

	public function action_decline()
	{
		$partner_id = $this->request->param('id');
		$user = Auth::instance()->get_user();

		$request = ORM::factory('request')->where('sender', '=', $partner_id)->and_where('reciever', '=', $user)->find('id');


		$decline = ORM::factory('request', $request->id);
		$decline->delete();

		header('location:'.URL::site('friends'));
		die();
	}

	public function action_remove()
	{
		$partner_id = $this->request->param('id');
		$user = Auth::instance()->get_user();

		$friend = ORM::factory('friend')->where('userid', '=', $partner_id)->and_where('friendid', '=', $user)->find('id');
		$delete = ORM::factory('friend', $friend->id);
		$delete->delete();

		$table = ORM::factory('friend')->where('userid', '=', $user)->and_where('friendid', '=', $partner_id)->find('id');
		$delete = ORM::factory('friend', $table->id);
		$delete->delete();

		header('location:'.URL::site('friends'));
		die();
	}

}