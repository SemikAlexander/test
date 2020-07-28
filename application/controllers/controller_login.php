<?php
require_once 'application/models/taskDB.php';

class Controller_Login extends Controller
{
	function __construct()
	{
		$this->model = new TasksDB();
		$this->view = new View();
	}
	function action_index()
	{
		if(isset($_POST['login']) && isset($_POST['password']))
		{
			$login = $_POST['login'];
			$password =$_POST['password'];
			if($login == "admin" && $password == "123")
			{
				//$task_data = $this->model->get_all_tasks();
				$data["login_status"] = "access_granted";
			}
			else{
				$data["login_status"] = "access_denied";
			}
		}
		else{
			$data["login_status"] = "";
		}
			
		$this->view->generate('login_view.php', 'login_view.php', $data);
	}
}