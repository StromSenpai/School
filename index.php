<?include 'assets/php/connect.php'; 
include 'assets/php/auth.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <link rel="stylesheet" href="assets/css/Style.css">
    <title>Главная страница</title>
   
</head>
<body>
    <?include 'assets/php/header.php'?>
    <?include 'assets/php/blog.php'?>
    <?include 'assets/php/footer.php'?>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script>
       $(document).ready(function(){
         
         $('#show_more').click(function(){
     var btn_more = $(this);
     var count_show = parseInt($(this).attr('count_show'));
     var count_add  = $(this).attr('count_add');
     btn_more.val('Подождите...');
              
     $.ajax(
         {
                 url: "assets/php/add_blog.php", 
                 type: "post",
                 dataType: "json",
                 data:
                 { 
                     "count_show":   count_show,
                     "count_add":    count_add
                 },
                 success: function(data)
                 {
         if(data.result == "success")
         {
             $('#start').append(data.html);
                 btn_more.val('Показать еще');
                 btn_more.attr('count_show', (count_show+3));
         }
         else
         {
             btn_more.val('Больше нечего показывать');
         }
                 }
             });
         });
     });     
    </script>
       </body>
</html>