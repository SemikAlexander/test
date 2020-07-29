<?php
require_once 'application/models/taskDB.php';

class Controller_Main2 extends Controller
{
	function __construct()
	{
		$this->model = new TasksDB();
		$this->view = new View();
	}
	function action_index()
	{	
		$data = $this->model->get_all_tasks();
		$this->view->generate('main2_view.php', 'main2_view.php', $data);
	}

	function status_changed(){
		$status = $_POST['status_task'];
		for($i = 0; $i < $status; $i++){
			$res = $this->model->task_status($status[$i], 'T');
			$data = $this->model->get_all_tasks();
			$this->view->generate('main2_view.php', 'main2_view.php', $data);
		}
	}
}