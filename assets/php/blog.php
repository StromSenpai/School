<?include 'connect.php';?>
<div class="head">
        <h1>
            Блог
        </h1>
    </div>
    <div class="container">
        <ul id="start">
        <?php
          $messages = $mysqli->query("SELECT * FROM `messages` ORDER BY `date` DESC LIMIT 4");
          $newsData = array();
          while($result = $messages->fetch_array()){
              $newsData[] = $result;
          }
            foreach($newsData as $oneNews):
            
            ?>
                <li class="list">
                    <div class="block">
                        <div class="head-content">
                                <? $id = $oneNews['userid']; 
                                
                                $user = $mysqli->query("SELECT * FROM `user` WHERE `UID` = '$id' "); 
                                $result = $user->fetch_array();
                                $roleid = $result['role'];
                                $rolename = $mysqli->query("SELECT * FROM `roles` WHERE `roleid` = '$roleid'");
                                $namerole = $rolename->fetch_assoc();

                                 echo $result['Name'];?>
                                
                        </div>
                        <div class="role">
                                     <?echo $namerole['roleName'];?>
                                 </div>
                        <div class="content">
                            <? echo $oneNews['messages'];?>
                        </div>
                        <div class="date-content">
                            Время: <?echo $oneNews['date'];?>
                        </div>
                    </div>
                    <?
         if (isset($_SESSION['UID']))
        {
            $idmess = $oneNews['id'];
            $role = $_SESSION['role'];
            if ($role == 'A'){
                ?>
                  <div class='btn'> 
                      <form action='assets/php/delblog.php' method="POST">
                      <label>
                          <input type="hidden" name="idmess" value="<?echo $idmess; ?>">
                      <input type='submit' value='Удалить блог' class="link">
                      </label>
                      </form>
                  </div>    
                <?
            }
        }
            ?>
                </li>
                <?endforeach;?>
        </ul>
        <div class="actions">
        <div class="btn">
        <input id="show_more" count_show="4" count_add="4" type="button" class="link" value="Показать еще" />
        </div>
        <? if (isset($_SESSION['UID']))
        {
            $role = $_SESSION['role'];
            if ($role == "A" || $role == "D" || $role == "T"){
                ?>
                  <div class="btn"> 
                      <a href="create-blog.php" class="link">
                          Написать блог
                      </a>
                  </div>    
                <?
            }
        }
            ?>
            </div>
    </div>
  
      
      