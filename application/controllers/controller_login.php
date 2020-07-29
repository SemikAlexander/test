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
			$res = $this->model->user_exist($login, $password);
			$data["login_status"] = $res;
			/*if($login == "admin" && $password == "123")
			{
				$data["login_status"] = "access_granted";
			}
			else{
				$data["login_status"] = "access_denied";
			}*/
		}
		else{
			$data["login_status"] = "";
		}
			
		$this->view->generate('login_view.php', 'login_view.php', $data);
	}
}