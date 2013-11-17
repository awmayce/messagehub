<?php defined('SYSPATH') or die('No direct script access.');

class Controller_ChangePassword extends Controller {

	public function action_index()
	{
		$user = Auth::instance()->get_user();
		$post = $this->request->post();

		$password = $user->password;
		$currentpassword = Auth::instance()->hash_password($post['currentpassword']);

		$newpassword = Auth::instance()->hash_password($post['newpassword']);

		if($password === $currentpassword)
		{
			if($post['newpassword'] === $post['repeatpassword'])
			{
				$query = DB::update('users')->set(array('password' => $newpassword))->where('username', '=', $user->username);
				$result = $query->execute();

				header("Location: ".URL::site('profile'));
				die();
			}
			else
			{
				$error = "Password do not match";
				header("Location: ".URL::site('profile'));
			}
		}
		else 
		{
			$error = "Password is not the same as your current password";
			header("Location: ".URL::site('profile'));
		}
	}

}