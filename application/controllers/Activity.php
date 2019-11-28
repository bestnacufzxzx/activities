<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activity extends CI_Controller {

	function __construct (){
		parent::__construct();
	// 	$this->load->helper('url');
		$this->load->model('activities_mode');
		$this->load->helper(array('form'));

	}
	
	function index()
    
    {
		$this->load->helper('date');

		$activity_data = $this->activities_mode->get_all();
		$data['activity_data'] = $activity_data;

		$this->load->view('layout/head');
		$this->load->view('layout/menu');
		// $this->load->view('layout/header');
		$this->load->view('activity/content', $data);
		$this->load->view('layout/footer');
		$this->load->view('layout/foot');
	}

	function insert(){
		$this->load->view('layout/head');
		$this->load->view('layout/menu');
		// $this->load->view('layout/header');
		$this->load->view('activity/insert/content');
		$this->load->view('activity/insert/script');
		$this->load->view('layout/footer');
		$this->load->view('layout/foot');
	}
	function update($activity_id){
		$activity_data = $this->activities_mode->get($activity_id);
		$data['activity_data'] = $activity_data;
		
		$this->load->view('layout/head');
		$this->load->view('layout/menu');
		// $this->load->view('layout/header');
		$this->load->view('activity/update/content', $data);
		$this->load->view('layout/footer');
		$this->load->view('layout/foot');
	}
	// function delete(){
	// 	$this->load->view('layout/head');
	// 	$this->load->view('layout/menu');
	// 	// $this->load->view('layout/header');
	// 	$this->load->view('activity/delete/content');
	// 	$this->load->view('layout/footer');
	// 	$this->load->view('layout/foot');
	// }

	function delete($activity_id){
		$result = $this->activities_mode->delete($activity_id);
		if($result){
			redirect('activity');
		}else{

		}

	}

	function save(){

		$this->load->library('form_validation');

		$this->form_validation->set_rules('activity_name', 'activity_name', 'required');
		
		if ($this->form_validation->run() == FALSE){
			if (empty($activity_id)){
				$this->insert();
			}else{
				$this->update();
			}
		}else{
			
			$activity_id = $this->input->post('activity_id');
			$activity_name = $this->input->post('activity_name');
			$start_date = $this->input->post('start_date');
			$end_date = $this->input->post('end_date');

			$data = array(
				'activity_id' => $activity_id,
				'activity_name' => $activity_name,
				'start_date' => $start_date,
				'end_date' => $end_date
			);
			$result = false;
			if (empty($activity_id)){
				$result = $this->activities_mode->insert($data);
			}else{
				$result = $this->activities_mode->update($data);
			}

			if($result){
				redirect('activity');
			}else{

			}
		}
	}

}
