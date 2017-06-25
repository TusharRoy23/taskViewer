<?php
	class Index extends CI_Controller
	{
		
		function __construct()
		{
			parent:: __construct();
			$this->load->model('select_task_list_model');
		}

		function index(){
			$data['title'] = "Task List";
			$data['taskLists'] = $this->select_task_list_model->fetch_results_of_task();
			$data['edit_or_delete'] = "";
			$this->session->set_flashdata('msg',"");

			$this->load->view('home_view', $data);
		}

	}
?>