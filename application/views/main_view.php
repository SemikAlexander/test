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
          width: 100px;
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
        
    </style>
</head>
<body>
  <a href="/login">
    <button class="button" style="vertical-align:middle"><span>ВХОД </span></button>
  </a>
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
          echo '<tr><td>'.$row['name_user'].'</td>'.'<td>'.$row['email_user'].'</td>'.'<td>'.$row['task_text'].'</td><td>Выполнено</td></tr>';
        else
          echo '<tr><td>'.$row['name_user'].'</td>'.'<td>'.$row['email_user'].'</td>'.'<td>'.$row['task_text'].'</td><td>Не выполнено</td></tr>';
      }
    ?>
  </table>
</body>