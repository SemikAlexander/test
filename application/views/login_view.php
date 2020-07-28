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
<div class = "u5-login-form">
  <h2>АВТОРИЗАЦИЯ</h2>
  <form action = "" method = "POST">
    <div class = "u5-user-form">
      <input type = "text" name = "login" required = "">
      <label>Ваш логин</label>
    </div>
    <div class = "u5-user-form">
      <input type = "password" name = "password" required = "">
      <label>Ваш пароль</label>
    </div>
      <input type="submit" value="Вход">
  </form>
</div>
<?php error_reporting(0); extract($data); ?>
<?php if($login_status=="access_granted") { ?>
  <META HTTP-EQUIV="Refresh" CONTENT="3; URL=http://test.ru/main2">
  <div class="alert success">
    <span class="closebtn">×</span>  
    <strong>
      Выполнено!
    </strong> 
    Авторизация прошла успешно!
  </div>
<?php 
} 
elseif($login_status=="access_denied") { ?>
  <div class="alert">
    <span class="closebtn">×</span>  
    <strong>
      Ошибка!
    </strong> 
    Логин и/или пароль введены неверно!
  </div>
  <?php 
} ?>

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