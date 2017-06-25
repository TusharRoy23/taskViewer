<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title;?></title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
		<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js'); ?>" ></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js'); ?>" ></script>
	</head>
	<body>
		<div class="container">
			<h2 style="text-align: center;"><?php echo $title; ?></h2>
			<br />
			<a href="<?php echo base_url('index/index'); ?>" class="btn btn-danger">Task List</a>
			<br />
			<div class="container">
				<?php if($error_or_success == 'error'): ?>
						<div class="alert alert-warning">
							<strong>
								<?php echo $this->session->flashdata('msg'); ?>	
							</strong>
						</div>
				<?php elseif($error_or_success == 'success'): ?>
						<div class="alert alert-success">
							<strong>
								<?php echo $this->session->flashdata('msg'); ?>	
							</strong>
						</div>
				<?php endif; ?>
				<?php
				 	echo form_open('create_task/edit_successful'); 
				?>
						<h4>Task Name</h4>
						<div class="form_group">
							<input type="text" name="task_name" class="form-control" value="<?php echo $selected_task['name']; ?>">
							<span style="color: red; font-weight: bold;"><?php echo form_error('task_name'); ?></span><br />
						</div>
						<h4>Task Description</h4>
						<div class="form_group">
							<textarea class="form-control" name="task_description" rows="8"><?php echo $selected_task['description']; ?></textarea>
							<span style="color: red; font-weight: bold;"><?php echo form_error('task_description'); ?></span><br />
						</div>
						<div class="form_group">
								<input type="submit" name="update_task" class="btn btn-primary">
						</div>
						<input type="hidden" name="task_id" value="<?php echo $selected_task['id']; ?>">
				<?php
					echo form_close(); 
				?>
			</div>
		</div>
	</body>
</html>