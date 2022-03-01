<header class="header">
<div class="logo">
    <img src="" alt="логотип">
    <div class="header-Name">
<h3>Школьный портал</h3>
</div>
</div>
<div class="right">
<div class="header-link">
    <a href="index.php" class="link">Главная</a>
    <a href="chat.php" class="link">Чат</a>
    <a href="lk.php" class="link">Личный кабинет</a>
    <a href="" class="link">Обучение</a> 
</div>
<div class="login">
   <div class="icolog"> 
   <?
            if (isset($_SESSION['UID'])){
            ?> <a href="lk.php" id="name" class="name"> 
                
                <img src="assets/images/<?echo $_SESSION['img'];?>" alt="логин">       
            </a>
            
            <?
            }
            else{
           ?>
          <a href="login.php"><img src="assets/images/icolog.png" alt="логин"></a> 
           <?
            }
            ?>
    </div>
    <div>
    <? if (isset($_SESSION['UID'])){
            ?> <a href="lk.php" id="name" class="name"> 
                <?echo $_SESSION['Name'];?></a>     
            <?
            }
            else{
           ?>
           <a id="name" class="name" href="login.php">Войти</a> 
           <?
            }
            ?>
    </div>
    </div>
    </div>
</header>