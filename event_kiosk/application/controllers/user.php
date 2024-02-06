<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->Model('UserModel', 'user');
	}
	//update user details-both walk-in and pre-registered attendees
	public function update_user()
	{
		if ($param = $this->input->post()) {
			$result = $this->user->update_user($param);
			echo json_encode($result);
		} else {
			echo json_encode(['Invalid input']);
		}
	}
	//check whether a pre registered user exists with given id
	public function check_user()
	{
		if ($param = $this->input->post()) {
			$result = $this->user->check_user($param);
			echo json_encode($result);
		} else {
			echo json_encode(['Invalid input']);
		}
	}
    //fetch user details corresponding to given unique user id
	public function get_user_details()
	{
		if ($param = $this->input->post()) {
			$result = $this->user->get_user_details($param);
			echo $this->load->view('badge',$result,TRUE);
		} else {
			echo json_encode(['Invalid input']);
		}
	}
}
