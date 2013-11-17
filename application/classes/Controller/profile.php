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

	public function action_edit()
	{
		$user = Auth::instance()->get_user();

		if($_POST) {
			$post = $this->request->post();
			$email_unique = ORM::factory('user')->where('email', '=', $post['email'])->find_all();
			if(isset($post['fullname']) and isset($post['email'])) 
			{
				if(filter_var($post['email'], FILTER_VALIDATE_EMAIL)) //Start email validation
				{
					if(count($email_unique) == '0')
					{
						if (isset($_FILES['avatar']))
			            {
			                $location = 'media/images/user_avatar/'.md5($user->username).'.jpg';
	          				if(@file_get_contents($location)) {
	          					unlink($location);
	          				}
			                $filename = $this->_save_image($_FILES['avatar'], $user->username);
			            }

						$update = DB::update('users')->set(array('email' => $post['email'], 'full_name' => $post['fullname']))->where('username', '=', $user->username);
						$execute = $update->execute();

						header('Location:'.URL::site('profile'));
						die();
					}
					else 
					{
						$error = "Email already exists!";
					}
				}
				else
				{
					$error = "Invalid email address";
				}
			}
			else 
			{
				$error = "All fields are required";
			}
		}

		$this->template->title = "profile ".$user->username;
		$this->template->nav_profile = 'active';
		$this->template->content = View::factory('user-edit')
			->bind('fail', $error);
	}

	protected function _save_image($image, $user)
    {
    	$user = md5($user);
        if (
            ! Upload::valid($image) OR
            ! Upload::not_empty($image) OR
            ! Upload::type($image, array('jpg', 'jpeg', 'png', 'gif')))
        {
            return FALSE;
        }
 
        $directory = DOCROOT.'media/images/user_avatar/';
 
        if ($file = Upload::save($image, NULL, $directory))
        {
            $filename = $user.'.jpg';
 
            Image::factory($file)
                ->resize(200, 200, Image::AUTO)
                ->save($directory.$filename);
 
            // Delete the temporary file
            unlink($file);
 
            return $filename;
        }
 
        return FALSE;
    }

	public function action_password()
	{
		$user = Auth::instance()->get_user();
		$post = $this->request->post();

		if($_POST) {
			$password = $user->password;
			$currentpassword = Auth::instance()->hash_password($post['currentpassword']);

			$newpassword = Auth::instance()->hash_password($post['newpassword']);

			if($password === $currentpassword)
			{
				if($post['newpassword'] === $post['repeatpassword'])
				{
					$len_newpassword = strlen($post['newpassword']);
					if($len_newpassword > '6') {
						$query = DB::update('users')->set(array('password' => $newpassword))->where('username', '=', $user->username);
						$result = $query->execute();

						header("Location: ".URL::site('profile'));
						die();
					}
					else {
						$error = "Password must be longer then 6 characters";
					}
				}
				else
				{
					$error = "Password do not match";
				}
			}
			else 
			{
				$error = "Password is not the same as your current password";
			}
		}

		$this->template->title = "profile ".$user->username;
		$this->template->nav_profile = 'active';
		$this->template->content = View::factory('user-password')
			->bind('fail', $error);
	}

}