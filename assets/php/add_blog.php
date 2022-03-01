<?php
include 'connect.php';
include 'auth.php';
$countView = (int)$_POST['count_add'];
$startIndex = (int)$_POST['count_show']; 
 
$sql = $mysqli->query("SELECT * FROM `messages` ORDER BY `date` DESC LIMIT $startIndex, $countView");
$newsData = array();
while($result = $sql->fetch_array()){
    $newsData[] = $result;
}
 
if(empty($newsData)){
    echo json_encode(array(
        'result'    => 'finish'
    ));
}else{
    $html = "";
        
               
               
                foreach($newsData as $oneNews){
                    $id = $oneNews['userid']; 
                    $idmess = $oneNews['id'];
                    $user = $mysqli->query("SELECT * FROM `user` WHERE `UID` = '$id' "); 
                    $result = $user->fetch_array();
                    $roleid = $result['role'];
                    $rolename = $mysqli->query("SELECT * FROM `roles` WHERE `roleid` = '$roleid'");    
                    $namerole = $rolename->fetch_assoc();
                    if (isset($_SESSION['UID']))
                    {
                      
                       $role = $_SESSION['role'];
                       if ($role == 'A'){
    $html .= "
    <li class='list'>
    <div class='block'>
        <div class='head-content'>
                {$result['Name']}
               
        </div>
        <div class='role'>
        {$namerole['roleName']}
    </div>
        <div class='content'>
                {$oneNews['messages']}
        </div>
        <div class='date-content'>
         Время: {$oneNews['date']}
        </div>
    </div>
    <div class='btn'> 
    <form action='assets/php/delblog.php' method='POST'>
    <label>
        <input type='hidden' name='idmess' value='{$idmess}'>
    <input type='submit' value='Удалить блог' class='link'>
    </label>
    </form>
</div>    
</li>
    ";
             }    
             else{
                $html .= "
                <li class='list'>
                <div class='block'>
                    <div class='head-content'>
                            {$result['Name']}
                           
                    </div>
                    <div class='role'>
                    {$namerole['roleName']}
                </div>
                    <div class='content'>
                            {$oneNews['messages']}
                    </div>
                    <div class='date-content'>
                     Время: {$oneNews['date']}
                    </div>
                </div>
                </li>";
            } 
        }
    else{
        $html .= "
        <li class='list'>
        <div class='block'>
            <div class='head-content'>
                    {$result['Name']}
                   
            </div>
            <div class='role'>
            {$namerole['roleName']}
        </div>
            <div class='content'>
                    {$oneNews['messages']}
            </div>
            <div class='date-content'>
             Время: {$oneNews['date']}
            </div>
        </div>
        </li>";
    }
    }
    echo json_encode(array(
        'result'    => 'success',
        'html'      =>  $html
    ));
}
?>