<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Profile extends Controller_Layout {

	public function action_index() 
	{
		$user = Auth::instance()->get_user();
		View::bind_global('user', $user);

		$this->template->title = "profile ".$user->username;
		$this->template->nav_profile = 'active';
		$this->template->content = View::factory('profile');
	}

	public function action_user() 
	{
		$profile_id = $this->request->param('id');

		$profile = ORM::factory('user')->where('id', '=', $profile_id)->find();

		View::bind_global('profile', $profile);

		$this->template->title = "profile ".$profile->username;
		$this->template->content = View::factory('user-profile');
	}

}