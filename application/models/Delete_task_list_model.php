<?php
	class Delete_task_list_model extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		function delete_a_task($taskListId = ''){
			$this->db->where('id', $taskListId);
			$this->db->delete('taskinformation');
		}
	}
?>