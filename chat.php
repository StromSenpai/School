<?include 'assets/php/connect.php'; 
include 'assets/php/auth.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/Style.css">
    <title>Чат</title>
</head>
<body>
    <?include 'assets/php/header.php'?>
<div class="head">
    Чат
</div>
<div class="container">
    <div class="block">

        <div class="container-chat">
            Имя с кем общаетесь
            <div class="chat-block">
                <ul>
                    <li>
                       <div class="get-mess">
                            получение сообщения
                            <div class="mess-date-get">
                           время
                       </div>
                       </div>
                      
                    </li>
                    <li>
                    <div class="sell-mess">
                            отправка сообщения
                            <div class="mess-date-sell">
                           время
                       </div>
                       </div>
                     
                    </li>
                </ul>
            </div>
            <div class="">
            <form action="">
                <label>
                    <input type="text" name="textMessage" id="message" placeholder="Сообщение" >
                </label>
                <label>
                    <input type="button" value="Отправить" class="link">
                </label>
            </form>
            </div>
        </div>
    </div>
</div>
<?include 'assets/php/footer.php'?>
</body>
</html>
