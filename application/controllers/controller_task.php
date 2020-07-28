<?php
require_once 'application/models/taskDB.php';

class Controller_Task extends Controller
{
	function __construct()
	{
		$this->model = new TasksDB();
		$this->view = new View();
	}
	function action_index()
	{
		if(isset($_POST['text_task']) && isset($_POST['name_user']) && isset($_POST['email_user']))
		{
			$text_task = strip_tags($_POST['text_task']);
			$name_user = strip_tags($_POST['name_user']);
			$email_user = strip_tags($_POST['email_user']);
			$res = $this->model->add_task($text_task, $name_user, $email_user);
			if($res == true)
				$data["add_task_status"] = "task_added";
			else
				$data["add_task_status"] = "task_error";
			$this->view->generate('task_view.php', 'task_view.php', $data);
		}
		else
		{
			$this->view->generate('task_view.php', 'task_view.php');
		}
	}
}