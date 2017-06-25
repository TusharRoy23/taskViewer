<?php 
	class Create_task extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('insert_task_model');
			$this->load->model('select_task_list_model');
		}

		function index(){
			$data['title'] = "Create A Task";
			$data['error_or_success'] = '';
			$this->session->set_flashdata('msg',"");
			$this->load->view('create_task_view', $data);
		}

		function insert_a_task(){
			$data['title'] = "Create A Task";
			$now = new DateTime();
			$date= $now->format('Y-m-d');

			if ($this->input->post('create_task')) {
				$task_name = $this->input->post('task_name');
				$task_description = $this->input->post('task_description');

				$this->form_validation->set_rules("task_name", "Task Name", "trim|required");
				$this->form_validation->set_rules("task_description", "Task Description", "trim|required");

				if ($this->form_validation->run() == FALSE){
					$data['error_or_success'] = 'error';
					$this->session->set_flashdata('msg',"Your Task Name or Description is Empty !!");
					$this->load->view('create_task_view', $data);
				}

				else{
					$task_form = array(
							'name' => $task_name,
							'description' => $task_description,
							'dateCreated' => $date,
							'dateUpdated' => $date
						);

					$this->insert_task_model->insert_a_task($task_form);
					$data['error_or_success'] = 'success';

					$this->session->set_flashdata('msg',"You just created a task.");
					$this->load->view('create_task_view', $data);

				}
			}
			else{
				$data['error_or_success'] = 'error';
				$this->session->set_flashdata('msg',"Please Write Something !!");
				$this->load->view('create_task_view', $data);
			}
		}

		function edit_or_delete_a_task(){
			$this->load->model('delete_task_list_model');
			
			$edit_or_delete_a_task = $this->input->post('edit_or_delete_a_task');
			$taskListId = $this->input->post('taskListId');



			if($edit_or_delete_a_task == 'Edit'){
				$data['title'] = "Update A Task";

				$data['selected_task'] = $this->select_task_list_model->select_a_task_using_task_id($taskListId);

				$data['error_or_success'] = '';
				$this->session->set_flashdata('msg',"");
				$this->load->view('update_task_view', $data);
			}

			elseif ($edit_or_delete_a_task == 'Delete') {
				$data['title'] = "Task List";
				$data['edit_or_delete'] = "delete";
				$this->delete_task_list_model->delete_a_task($taskListId);
				$this->session->set_flashdata('msg',"Row Deleted");
				$data['taskLists'] = $this->select_task_list_model->fetch_results_of_task();
				$this->load->view('home_view', $data);
			}
		}

		function edit_successful(){
			$this->load->model('update_task_list_model');

			if ($this->input->post('update_task')) {
				$task_name = $this->input->post('task_name');
				$task_description = $this->input->post('task_description');
				$task_id = $this->input->post('task_id');

				$now = new DateTime();
				$date= $now->format('Y-m-d');

				$this->form_validation->set_rules("task_name", "Task Name", "trim|required");
				$this->form_validation->set_rules("task_description", "Task Description", "trim|required");

				if ($this->form_validation->run() == FALSE){
					$data['title'] = "Update A Task";
					$data['error_or_success'] = 'error';
					$this->session->set_flashdata('msg',"Your Task Name or Description is Empty !!");
					$data['selected_task'] = $this->select_task_list_model->select_a_task_using_task_id($task_id);
					$this->load->view('update_task_view', $data);
				}
				else{
					$data['title'] = "Task List";
					$task_form = array(
							'name' => $task_name,
							'description' => $task_description,
							'dateUpdated' => $date
						);

					$this->update_task_list_model->update_a_task($task_form, $task_id);
					$data['error_or_success'] = 'success';
					$data['edit_or_delete'] = "edit";
					$this->session->set_flashdata('msg',"A row is Updated");
					$data['taskLists'] = $this->select_task_list_model->fetch_results_of_task();
					$this->load->view('home_view', $data);
				}
			}
			else{
				$data['taskLists'] = $this->select_task_list_model->fetch_results_of_task();
				$data['edit_or_delete'] = "";
				$data['title'] = "Task List";
				$this->session->set_flashdata('msg',"");
			}
		}
	}
?>
