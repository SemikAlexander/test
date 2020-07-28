<?php
class TasksDB extends Model{

    public function email_vaildation($email){
		if(filter_var($email, FILTER_VALIDATE_EMAIL))
			return true;
		elseif(empty($email))
			return false;
		else
			return false;
	}

    public function get_all_tasks(){
        $db = new SQLite3('tasks.db');
        $result = $db->query('SELECT task.id_task, task.name_user, task.email_user, task.task_text, task.status_task FROM task');
        $tasks_array = array();
        $i = 0;
        while($row = $result->fetchArray(SQLITE3_ASSOC)){
            $tasks_array[$i] = [
                'id_task' => $row['id_task'],
                'name_user' => $row['name_user'],
                'email_user' => $row['email_user'],
                'task_text' => $row['task_text'],
                'status_task' => $row['status_task'],
            ];
            $i++;
        }
        return $tasks_array;
    }

    public function add_task($task_text, $name_user, $email_user){
        $db = new SQLite3('tasks.db');
        $query = $db->query('INSERT INTO task(task_text, name_user, email_user, status_task) VALUES(\''.$task_text.'\', \''.$name_user.'\', \''.$email_user.'\', \'F\')');
        if(!$query)
            return false;
        else
            return true;
    }

    public function task_status($id_task, $status_task){
        $db = new SQLite3('tasks.db');
        $query = $db->query('UPDATE task SET status_task = \''.$status_task.'\' WHERE task.id_task = '.$id_task.'');
    }
}