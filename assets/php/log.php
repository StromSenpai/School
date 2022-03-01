<?include 'connect.php'?>
<div class="container">
    <div class="block">
    <div class="head">
   Авторизация
    </div>
        <div class="login-content">
            <form action="assets/php/auth.php" method="POST" class="auth-form">
              <label><input type="text" name="login" id="login" class="input-auth" placeholder="Логин"></label>
              <label><input type="password" name="pass" id="pass" class="input-auth" placeholder="Пароль"></label>
             <label><input type="submit" value="Подтвердить" class="link"></label>
             </form>
        </div>
    </div>
</div>