<?php
  if($_POST) {
    $name = $_POST['name'];
    $comment = $_POST['comment'];
    $image = $_POST['img'];
    $handle = fopen("comments.php", "a");
    fwrite($handle, '<div class="chat"><img src="users.png" alt="..." width="30px"><b class="title">'.$name.'</b><p class="text">'.$comment.'</p></div>');
    fclose($handle);
  }
?>
<!DOCTYPE html>
<html lang="in">
   <head>
      <meta charset="UTF-8">
      <title>Page title</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="stylesheet" href="style.css">
   </head>
   <body>
      <div class="respon">
         <div class="form">
            <b>Kirim Komentar Kamu :</b>
            <form action="" method="post">
               <input type="text" name="name" placeholder="Nama Kamu..." required>
               <textarea rows="10" cola="30" name="comment" placeholder="Komentar..." required></textarea>
               <input type="submit" value="Post comment">
            </form>
         </div>
         <div class="com">
            <b>Komentar Orang Orang :</b>
            <?php
               include "comments.php";
            ?>
         </div>
      </div>
   </body>
</html>