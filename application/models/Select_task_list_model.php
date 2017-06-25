<?php
	class Select_task_list_model extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		function fetch_results_of_task(){
			$query = $this->db->get('taskinformation');
			if ($query->num_rows() > 0) {
				return $query->result_array();
			}
			else
				return 0;
		}

		function select_a_task_using_task_id($taskListId){
			$this->db->where('id', $taskListId);
			$query = $this->db->get('taskinformation');
			if ($query->num_rows() > 0) {
				return $query->row_array();
			}
			else
				return 0;
		}
	}
?>