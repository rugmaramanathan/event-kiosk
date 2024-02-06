<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	//load home page
	public function index()
	{
		$this->load->view('home');		
	}
	//load webcam
	public function load_camera(){
		echo $this->load->view('webcam',[],TRUE);
	}
}
