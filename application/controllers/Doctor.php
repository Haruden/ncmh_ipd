<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor extends CI_Controller {

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

    public function queue(){
        $data['title'] = "Doctor's Queue";

        $this->load->view('templates/header', $data);
        $this->load->view('doctor/queue');
    }

	public function trans_in(){
		$data['title'] = "Transfer In Notes";

        $this->load->view('templates/header', $data);
        $this->load->view('doctor/trans_in');
	}

	public function trans_in_out(){
		$data['title'] = "Transfer In/Out Notes";

        $this->load->view('templates/header', $data);
        $this->load->view('doctor/trans_in_out');
	}

	public function progress_notes(){
		$data['title'] = "Progress Notes";

        $this->load->view('templates/header', $data);
        $this->load->view('doctor/progress_notes');
	}

	public function doctors_order(){
		$data['title'] = "Doctors Order";

        $this->load->view('templates/header', $data);
        $this->load->view('doctor/doctors_order');
	}

	public function physical_exam(){
		$data['title'] = "Physical Examination";

        $this->load->view('templates/header', $data);
        $this->load->view('doctor/physical_exam');
	}
    
    public function neuro_exam(){
		$data['title'] = "Neurological Examination";

        $this->load->view('templates/header', $data);
        $this->load->view('doctor/neuro_exam');
	}

}
