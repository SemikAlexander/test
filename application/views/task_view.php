<style>
      @import url("https://fonts.googleapis.com/css2?family=Exo+2&display=swap");
      body {
          background: #101010;
      }
      .u5-login-form {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 400px;
        padding: 40px;
        transform: translate(-50%, -50%);
        background: #393939d1;
        box-sizing: border-box;
        box-shadow: 0 15px 25px rgba(0, 0, 0, 0.6);
        border-radius: 10px;
        font-family: "Exo 2", sans-serif;
      }
      .u5-login-form h2 {
        margin: 0 0 30px;
        padding: 0;
        color: #fff;
        text-align: center;
      }
      .u5-login-form .u5-user-form {
        position: relative;
      }
      .u5-login-form .u5-user-form input {
        width: 100%;
        padding: 10px 0;
        font-size: 16px;
        color: #fff;
        margin-bottom: 30px;
        border: none;
        border-bottom: 1px solid #fff;
        outline: none;
        background: transparent;
      }
      .u5-login-form .u5-user-form label {
        position: absolute;
        top: 0;
        left: 0;
        padding: 10px 0;
        font-size: 16px;
        color: #fff;
        pointer-events: none;
        transition: 0.5s;
      }
      .u5-login-form .u5-user-form input:focus ~ label,
      .u5-login-form .u5-user-form input:valid ~ label {
        top: -20px;
        left: 0;
        color: #ffffff;
        font-size: 12px;
      }
      .u5-login-form form input[type = submit] {
        position: relative;
        display: inline-block;
        padding: 10px 20px;
        color: #ffffff;
        font-size: 16px;
        text-decoration: none;
        text-transform: uppercase;
        overflow: hidden;
        transition: 0.5s;
        margin-top: 40px;
        letter-spacing: 4px;
      }
      .u5-login-form input[type = submit] :hover {
        background: #ff0000;
        color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 5px #ff0000, 0 0 25px #ff0000, 0 0 50px #ff0000,
        0 0 100px #ff0000;
      }
      input[type = submit]{
        background-color: #313131;
        border: none;
        color: white;
        padding: 16px 32px;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
      }
      input[type = submit]:hover {
        background: #ff0000;
        color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 5px #ff0000, 0 0 25px #ff0000, 0 0 50px #ff0000,
        0 0 100px #ff0000;
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
      .alert {
        position: fixed;
        bottom: 0;
        padding: 20px;
        background-color: #f44336;
        color: white;
        opacity: 1;
        transition: opacity 0.6s;
        margin-bottom: 15px;
      }

      .alert.success {background-color: #4CAF50;}
      .alert.info {background-color: #2196F3;}
      .alert.warning {background-color: #ff9800;}

      .closebtn {
        margin-left: 15px;
        color: white;
        font-weight: bold;
        float: right;
        font-size: 22px;
        line-height: 20px;
        cursor: pointer;
        transition: 0.3s;
      }

      .closebtn:hover {
        color: black;
      }

</style>
<a href="/main2">
  <button class="button" style="vertical-align:middle"><span>НАЗАД </span></button>
</a>
<div class = "u5-login-form">
  <h2>ДОБАВЛЕНИЕ ЗАДАНИЯ</h2>
  <form action = "" method = "POST">
    <div class = "u5-user-form">
      <input type = "text" name = "text_task" required = "">
      <label>Текст задания</label>
    </div>
    <div class = "u5-user-form">
      <input type = "text" name = "name_user" required = "">
      <label>Имя</label>
    </div>
    <div class = "u5-user-form">
      <input type="email" id="email" name="email_user" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required = "">
      <label>Email</label>
    </div>
      <input type="submit" value="Добавить">
  </form>
</div>
<?php error_reporting(0); extract($data); ?>
<?php if($add_task_status=="task_added") { ?>
  <div class="alert success">
    <span class="closebtn">×</span>  
    <strong>Выполнено!</strong> Задание было успешно добавлено!
  </div>
  <?php 
  } 
elseif($add_task_status=="task_error") { ?>
    <div class="alert">
      <span class="closebtn">×</span>  
      <strong>Ошибка!</strong> При добавлении задания обнаружена ошибка!
    </div>
    <?php 
  } 
?>
<script>
  var close = document.getElementsByClassName("closebtn");
  var i;
  for (i = 0; i < close.length; i++) {
    close[i].onclick = function(){
      var div = this.parentElement;
      div.style.opacity = "0";
      setTimeout(function(){ div.style.display = "none"; }, 600);
    }
  }
</script>