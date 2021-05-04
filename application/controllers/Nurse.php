<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nurse extends CI_Controller {

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
        $data['title'] = "Nurse's Queue";

        $this->load->view('templates/header', $data);
        $this->load->view('nurse/queue');
    }

	public function patient_list()
	{
		$data['title'] = "Patient List";

		$this->load->view('templates/header', $data);
		$this->load->view('nurse/patient_list', $data);
	}

// Links under Nurses Notes

	public function nurses_notes(){
		$data['title'] = "Nurse's Notes";

        $this->load->view('templates/header', $data);
        $this->load->view('nurse/nurses_notes/nurses_notes');
	}

	public function doctors_orders(){
		$data['title'] = "Doctor's Orders";

        $this->load->view('templates/header', $data);
        $this->load->view('nurse/nurses_notes/doctors_orders');
	}

	public function medication_sheet(){
		$data['title'] = "Medication Sheet";

        $this->load->view('templates/header', $data);
        $this->load->view('nurse/nurses_notes/medication_sheet');
	}

// Links under Patient Info

	public function patient_info(){
		$data['title'] = "Patient Info";

        $this->load->view('templates/header', $data);
        $this->load->view('nurse/patient_info/primary_info');
	}

	public function primary_info(){
		$data['title'] = "Patient Info";

        $this->load->view('templates/header', $data);
        $this->load->view('nurse/patient_info/primary_info');
	}

	public function patient_id()
	{
		$data['title'] = "Patient Identification";

		$this->load->view('templates/header', $data);
		$this->load->view('nurse/patient_info/identification', $data);
	}

	// Links under Vital Signs

	public function vital_signs(){
		$data['title'] = "Vital Signs";

        $this->load->view('templates/header', $data);
        $this->load->view('nurse/vital_signs/vital_signs');
	}
}
