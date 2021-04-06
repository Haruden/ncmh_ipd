<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Doctor extends CI_Controller
{

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

	public function queue()
	{
		$data['title'] = "Doctor's Queue";

		$this->load->view('templates/header', $data);
		$this->load->view('doctor/queue', $data);
	}

	public function patient_list()
	{
		$data['title'] = "Patient List";

		$this->load->view('templates/header', $data);
		$this->load->view('doctor/patient_list', $data);
	}

	public function patient_info()
	{
		$data['title'] = "Patient Info";

		$this->load->view('templates/header', $data);
		$this->load->view('doctor/patient_info/primary_info', $data);
	}

	public function patient_id()
	{
		$data['title'] = "Patient Identification";

		$this->load->view('templates/header', $data);
		$this->load->view('doctor/patient_info/identification', $data);
	}

	public function vital_signs()
	{
		$data['title'] = "Vital Signs";

		$this->load->view('templates/header', $data);
		$this->load->view('doctor/vitals/vital_signs', $data);
	}

	public function doctors_notes()
	{
		$data['title'] = "Doctors Notes";

		redirect('/Doctor/transfer_notes');
	}

	// public function trans_in()
	// {
	// 	$data['title'] = "Transfer In Notes";

	// 	$this->load->view('templates/header', $data);
	// 	$this->load->view('doctor/doctors_notes/trans_in');
	// }

	// public function trans_out()
	// {
	// 	$data['title'] = "Transfer Out Notes";

	// 	$this->load->view('templates/header', $data);
	// 	$this->load->view('doctor/doctors_notes/trans_out');
	// }

	public function transfer_notes()
	{
		$data['title'] = "Transfer Notes";

		$this->load->view('templates/header', $data);
		$this->load->view('doctor/doctors_notes/transfer_notes' , $data);
	}

	public function progress_notes()
	{
		$data['title'] = "Progress Notes";

		$this->load->view('templates/header', $data);
		$this->load->view('doctor/doctors_notes/progress_notes', $data);
	}

	public function doctors_order()
	{
		$data['title'] = "Doctors Order";

		$this->load->view('templates/header', $data);
		$this->load->view('doctor/doctors_notes/doctors_order', $data);
	}

	public function medication()
	{
		$data['title'] = "Medication";

		$this->load->view('templates/header', $data);
		$this->load->view('doctor/medication/medication_view');
	}

	// public function discharge(){
	// 	$data['title'] = "Discharge";

	//     redirect('/Doctor/mental_status_exam');
	// }

	public function mental_status_exam()
	{
		$data['title'] = "Mental Status Examination";

		$this->load->view('templates/header', $data);
		$this->load->view('doctor/discharge/mental_status_exam', $data);
	}

	public function physical_exam()
	{
		$data['title'] = "Physical Examination";

		$this->load->view('templates/header', $data);
		$this->load->view('doctor/discharge/physical_exam', $data);
	}

	public function neuro_exam()
	{
		$data['title'] = "Neurological Examination";

		$this->load->view('templates/header', $data);
		$this->load->view('doctor/discharge/neuro_exam', $data);
	}
}
