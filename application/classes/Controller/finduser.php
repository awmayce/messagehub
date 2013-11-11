<?php defined('SYSPATH') or die('No direct script access.');

Class Controller_finduser extends Controller {

	public function action_user_id()
	{
		$friend_id = ORM::factory('friend')->where('userid', '=', Auth::instance()->get_user())->find('friendid');
		$search = $this->request->param('id');

		foreach ($friend_id as $friend_id) {
			echo $friend_id;
		}

		if ($search == NULL) {
			echo "";
		}
		else {
			$result = DB::select()->from('users')
				->where('username', 'LIKE', '%'.$search.'%')
				->limit('5')
				->execute()
				->as_array();

			foreach ($result as $result) {
				if ($result['id'] == Auth::instance()->get_user()) {
					echo "";
				}
				else {
					$username = $result['username'];
					$link = URL::site('friends/send_request/'.$result['id']);

					echo "<tr><td><div class='user-search'>".$username."</td><td><a href=".$link." class='btn btn-primary pull-right'> + </a></div></td></tr>";	
				}	
			}
		}	
	}
}
