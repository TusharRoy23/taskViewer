<?php
	class Insert_task_model extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		function insert_a_task($task_form_data){
			$this->db->insert('taskinformation', $task_form_data);
		}
	}
?>