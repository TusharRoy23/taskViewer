<html>
	<head>
		<title><?php echo $title;?></title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
		<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js'); ?>" ></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js'); ?>" ></script>
	</head>
	<body>
		<div class="container" style="margin-top: 3%;">
			<h2 style="text-align: center;"><?php echo $title; ?></h2>
			<br />
			<?php if($edit_or_delete == 'delete'): ?>
						<div class="alert alert-warning">
							<strong>
								<?php echo $this->session->flashdata('msg'); ?>	
							</strong>
						</div>
				<?php elseif($edit_or_delete == 'edit'): ?>
						<div class="alert alert-success">
							<strong>
								<?php echo $this->session->flashdata('msg'); ?>	
							</strong>
						</div>
				<?php endif; ?>
			<div>
				<a href="<?php echo site_url('create_task/index')?>" class="btn btn-lg btn-success">Create A Task</a>
			</div>
			<br>
			<div class="table-responsive">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th rowspan="2" style="text-align: center;">SL.</th>
							<th rowspan="2" style="text-align: center;">Name</th>
							<th rowspan="2" style="text-align: center;">Description</th>
							<th rowspan="2" style="text-align: center;">Created At</th>
							<th rowspan="2" style="text-align: center;">Updated At</th>
							<th colspan="3" style="text-align: center;">Action</th>
						</tr>
						<tr>
							<th style="text-align: center;">Update</th>
                            <th style="text-align: center;">Delete</th>
						</tr>
					</thead>
					<tbody>
						
						<?php if($taskLists):
								$i = 1; 
								foreach($taskLists as $taskList):
									$attributes = array('name' => 'task-list');
									echo form_open('create_task/edit_or_delete_a_task', $attributes);
						?>
									<tr>
										<td style="text-align: center;"><?php echo $i++; ?></td>
										<td style="text-align: center;"><?php echo $taskList['name']; ?></td>
										<td style="text-align: center;"><?php echo $taskList['description']; ?></td>
										<td style="text-align: center;"><?php echo $taskList['dateCreated']; ?></td>
										<td style="text-align: center;"><?php echo $taskList['dateUpdated'] ?></td>
										<td style="text-align: center;">
											<input type="submit" name="edit_or_delete_a_task" value="Edit" class="btn btn-primary btn-sm">
										</td>
										<td style="text-align: center;">
											<input type="submit" name="edit_or_delete_a_task" value="Delete" class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure???')">
										</td>
										<input type="hidden" name="taskListId" value="<?php echo $taskList['id']; ?>">
									</tr>

							<?php
									echo form_close(); 
								endforeach; ?>

						<?php else:
								echo "<h3 style='text-align: center; color: red;'>No Task List<h3>";
							endif;
						?>

					</tbody>
				</table>
			</div>
		</div>
	</body>
</html>