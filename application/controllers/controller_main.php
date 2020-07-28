<?php
require_once 'application/models/taskDB.php';

class Controller_Main extends Controller
{
	function __construct()
	{
		$this->model = new TasksDB();
		$this->view = new View();
	}
	function action_index()
	{	
		$data = $this->model->get_all_tasks();
		$this->view->generate('main_view.php', 'main_view.php', $data);
	}
}