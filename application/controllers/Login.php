<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{
	public function index()
	{
		if(isset($_POST['btn_login']))
		    {
				$this->load->library('session');
				$this->session->set_userdata('Login','Aktif');
				redirect(site_url('Welcome'));
			}			
			else
			{
				$this->load->library('session');
				$this->session->unset_userdata('Login');
				//redirect(site_url('Login'));
			}
		$this->load->view('VLogin');
	}
}
?>