<div class="container">
    <div class="block">      
            <?
            include 'connect.php';
            include 'auth.php';
            if (isset($_SESSION['UID'])){?>
                <div class="kab-photo">
                <img src="/assets/images/icolog.png" alt="" class="photo">
            </div>
            <div class="kab-content">
            <?echo $_SESSION["Name"];?>
           <? }
            else{
           ?>
          Вы не авторизованны <a href="/login.php">войти?</a>
           <?
            }
            ?>
        </div>
        <?  if (isset($_SESSION['UID'])){
          $role =  $_SESSION['role'];
                $sql = $mysqli->query("SELECT `roleName` FROM `roles` WHERE `roleid` = '$role'");
                $result = mysqli_fetch_assoc($sql);
              
           ?>
        <div class="kab-role">
      <?echo $result['roleName'];?>
            </div>
            <div class="actions-kab">
                <div class="act"><input type="button" value="Изменить" id="change" class="link"></div>
                <div class="act">
                    <form action="assets/php/exit.php" method="POST">
                        <label> 
                            <input type="submit" value="Выйти" id="exit"  class="link">
                        </label>
                    </form> 
                </div>
            </div>
            <?}?>
    </div>
</div>