<!doctype html>
<html>
   <head>
     <title>Оценивание работы</title>
     <?php
     require_once $_SERVER['DOCUMENT_ROOT'].'/connect/head.php';
     ?>
   </head>
   <body>
     <div class="shapka">
       <?php
       require_once $_SERVER['DOCUMENT_ROOT'].'/connect/top.php';
       ?>
     </div>
	 <div class="content">
	   <a href="download.php">Загрузить данные</a> <br>
	   <a href="show.php">Показать таблицу с данными</a> <br>
	   <a href="delete.php">Удалить все данные из таблицы</a> <br>
     </div>
   </body>
</html>