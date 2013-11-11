<?php defined('SYSPATH') or die('No direct script access.');

Class Controller_Layout extends Controller_Template {

	public $template = 'template/main';
	
	public function before()
	{
		if (!Auth::instance()->logged_in())
		{
			header('Location:'.URL::site('user'));
			die();
		}
		$user = Auth::instance()->get_user();

		$requests = ORM::factory('request')->where('reciever', '=', $user)->and_where('confirmed', '=', '0')->find_all();
		$requests = count($requests);

		$notification = $requests;

		view::bind_global('notification', $notification);
		view::bind_global('user', $user);
		return parent::before();
	}

	public function after()
	{
		return parent::after();
	}

}