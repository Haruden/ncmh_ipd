<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Records extends CI_Controller {

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
		$this->load->view('welcome_message');
	}

    public function admission(){
        $data['title'] = "Admission";

        $this->load->view('templates/header', $data);
        $this->load->view('records/admission');
    }

	public function pav_one(){
        $data['title'] = "Pavillion 1 Queue";

        $this->load->view('templates/header', $data);
        $this->load->view('records/pav_one_queue');
    }
   
    public function pav_one_waiting(){
        $data['title'] = "Pavillion 1 Waiting Room";

        $this->load->view('templates/header', $data);
        $this->load->view('records/pav_one_waiting');
    }
}
