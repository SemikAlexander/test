<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks</title>
    <style>
        body{
          background-color: #000000;
        }
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }
        th {
          border: 1px solid #FFFFFF;
          text-align: center;
          padding: 8px;
          color: #FFFFFF;
          background-color: #000000;
        }
        td {
          border: 1px solid #FFFFFF;
          text-align: center;
          padding: 8px;
          color: #FFFFFF;
          background-color: #000000;
        } 
        tr:nth-child(even) {
          background-color: #000000;
        }
        .button {
          display: inline-block;
          border-radius: 4px;
          background-color: #000000;
          border: none;
          color: #FFFFFF;
          text-align: center;
          font-size: 14px;
          padding: 10px;
          width: 115px;
          transition: all 0.5s;
          cursor: pointer;
          margin: 5px;
          float: right;
        }
        .button span {
          cursor: pointer;
          display: inline-block;
          position: relative;
          transition: 0.5s;
        }
        .button span:after {
          content: '\00bb';
          position: absolute;
          opacity: 0;
          top: 0;
          right: -20px;
          transition: 0.5s;
        }
        .button:hover span {
          padding-right: 25px;
        }
        .button:hover span:after {
          opacity: 1;
          right: 0;
        }
        .container {
          display: block;
          margin-left: 40%;
          cursor: pointer;
          font-size: 22px;
          -webkit-user-select: none;
          -moz-user-select: none;
          -ms-user-select: none;
          user-select: none;
        }
        .container input {
          opacity: 0;
          cursor: pointer;
          height: 0;
          width: 0;
        }
        .checkmark {
          float: left;
          height: 25px;
          width: 25px;
          background-color: #eee;
        }
        .container:hover input ~ .checkmark {
          background-color: #ccc;
        }
        .container input:checked ~ .checkmark {
          background-color: #2196F3;
        }
        .checkmark:after {
          content: "";
          display: none;
        }
        .container input:checked ~ .checkmark:after {
          display: block;
        }
        .container .checkmark:after {
          float: left;
          width: 10px;
          height: 15px;
          border: solid white;
          border-width: 0 3px 3px 0;
          -webkit-transform: rotate(45deg);
          -ms-transform: rotate(45deg);
          transform: rotate(45deg);
        }
        .input[type = submit] {
          background-color: white;
          color: black;
          border: 2px solid #555555;
        }

        .input[type = submit]:hover {
          background-color: #555555;
          color: white;
        }
    </style>
</head>
<body>
  <a href="/task">
    <button class="button">
      <span>ДОБАВИТЬ </span>
    </button>
  </a>
  <form action = "" method = "POST">
    <table>
      <tr>
        <th>ИМЯ</th>
        <th>EMAIL</th>
        <th>ЗАДАНИЕ</th>
        <th>СТАТУС</th>
      </tr>
      <?php
        foreach($data as $row){
          if($row['status_task'] == 'T')
            echo '<tr><td>'.$row['name_user'].'</td>'.'<td>'.$row['email_user'].'</td>'.'<td>'.$row['task_text'].'</td><td><label class="container"><input type="checkbox" name="status_task[]" value = "'.$row['id_task'].'" checked="checked"><span class="checkmark"></span></label></td></tr>';
          else
            echo '<tr><td>'.$row['name_user'].'</td>'.'<td>'.$row['email_user'].'</td>'.'<td>'.$row['task_text'].'</td><td><label class="container"><input type="checkbox" name="status_task[]" value = "'.$row['id_task'].'"><span class="checkmark"></span></label></td></tr>';
        }
      ?>
    </table>
    <input type="submit" value="Выполнено">
  </form>
</body>