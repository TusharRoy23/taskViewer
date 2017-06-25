<?php 
	class Update_task_list_model extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		function update_a_task($task_form, $task_id){
			$this->db->where('id', $task_id);
			$this->db->update('taskinformation', $task_form);
		}
	}
?>