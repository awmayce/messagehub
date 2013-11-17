<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller {

	public function action_index()
	{
		if(Auth::instance()->logged_in())
		{
			header('location:'.URL::site('main'));
		}
		if($_POST)
		{
			$post = $this->request->post();
			$remember = isset($post['remember']);
			$success = Auth::instance()->login($post['username'], $post['password'], $remember);

			if($success)
			{
				header('location:'.URL::site('profile'));
				die();
			}
			else
			{
				$fail = "Username and Password do not match";
			}
		}

		$this->response->body(View::factory('auth/login')->bind('fail', $fail));
	}

	public function action_register() 
	{
		if(Auth::instance()->logged_in())
		{
			header('location:'.URL::site('main'));
		}

		if($_POST) {
			$post = $this->request->post();
			$username_unique = ORM::factory('user')->where('username', '=', $post['username'])->find_all();
			$email_unique = ORM::factory('user')->where('email', '=', $post['email'])->find_all();
			if(isset($post['username']) and isset($post['username']) and isset($post['password']) and isset($post['fullname'])) 
			{
				if(count($username_unique) == '0') //Start username validation
				{
					if(filter_var($post['email'], FILTER_VALIDATE_EMAIL)) //Start email validation
					{
						if(count($email_unique) == '0')
						{
							if($post['password'] === $post['repeat'])
							{
								if (isset($_FILES['avatar']))
					            {
					                $filename = $this->_save_image($_FILES['avatar'], $post['username']);
					            }
					            else
					            {
					            	echo 'Failed';
					            }

								$newuser = ORM::factory('user');
								$newuser->username = $post['username'];
								$newuser->password = $post['password'];
								$newuser->email    = $post['email'];
								$newuser->gender = $post['gender'];
								$newuser->full_name = $post['fullname'];
								$newuser->country = $post['country'];
								$newuser->save();

								$role = ORM::factory('role')->where('name', '=', 'login')->find();
								$newuser->add('roles', $role);

								header('Location:'.URL::site('user'));
								die();
							}
							else
							{
								$error = "Passwords do not match";
							}
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
					$error = 'Username already exists!';
				}			
			}
			else 
			{
				$error = "All fields are required";
			}
		}

		$this->response->body(View::factory('auth/register')->bind('fail', $error));
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

	public function action_logout()
	{
		Auth::instance()->logout();
		header('location:'.URL::site('user'));
		die();
	}

} // End Welcome
