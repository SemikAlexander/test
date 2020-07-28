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
				$data = $this->model->get_all_tasks();
				$this->view->generate('main_view.php', 'main_view.php', $data);
			}
			else{
				$data["login_status"] = "access_denied";
				$this->view->generate('login_view.php', 'login_view.php', $data);
			}
		}
		else
			$this->view->generate('login_view.php', 'login_view.php');
	}
}