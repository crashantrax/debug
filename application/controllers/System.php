<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class System extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['pagename'] = 'Login';
		$data['content'] = 'login';
		$this->load->view('pages/login',$data);
	}
	public function register()
	{
		$data['pagename'] = 'Register';
		$data['content'] = 'registration';
		$this->load->view('pages/register',$data);
	}
	public function dashboard()
	{
		$data['pagename'] = 'Dashboard';
		$data['content'] = 'AdminDashboard';
		$this->load->view('pages/dashboard',$data);
	}
}
