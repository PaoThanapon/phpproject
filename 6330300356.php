<!DOCTYPE html>
<html>
<body>
<?php
function hello($name){
    echo "Hello $name";
}
      $item = array (
        array(1,"paper",10,'https://static.wikia.nocookie.net/minecraft/images/b/b2/Paper.png'),
        array(2,"bucket",10,'https://static.wikia.nocookie.net/minecraft_gamepedia/images/f/fc/Bucket_JE2_BE2.png'),
        array(3,"carrot",10,'https://static.wikia.nocookie.net/minecraft_gamepedia/images/4/4e/Carrot_JE3_BE2.png'),
        array(4,"cookie",10,'https://static.wikia.nocookie.net/minecraft_gamepedia/images/b/b3/Cookie_JE2_BE2.png'),
        array(5,"bone",10,'https://static.wikia.nocookie.net/minecraft_gamepedia/images/3/3a/Bone_JE3_BE2.png'),
        array(6,"bread",10,'https://static.wikia.nocookie.net/minecraft_gamepedia/images/4/44/Bread_JE3_BE3.png'),
        array(7,"apple",10,'https://static.wikia.nocookie.net/minecraft_gamepedia/images/a/af/Apple_JE3_BE3.png'),
        array(8,"cake",10,'https://static.wikia.nocookie.net/minecraft_gamepedia/images/9/9a/Cake_%28item%29_JE3_BE3.png'),
        array(9,"fish",10,'https://static.wikia.nocookie.net/minecraft_gamepedia/images/5/53/Cooked_Cod_JE4_BE3.png'),
        array(10,"gold",10,'https://static.wikia.nocookie.net/minecraft_gamepedia/images/8/8a/Gold_Ingot_JE4_BE2.png')
      );
     
      echo "</table>";
      echo "<table border='8'>";
      echo "<tr><td>เมนู</td><td>ชื่อ</td><td>ราคา</td><td>รูปประกอบ</td>";
      for($i=0;$i<10;$i++){
        $r=rand(0,256);
        $g=rand(0,256);
        $b=rand(0,256);
       
        $three=3;
        echo "<tr>
        <td><p style='color:rgb($r,$g,$b)'>" .$item[$i][0]. "</p></td>
        <td><p style='color:rgb($r,$g,$b)'>" .$item[$i][1]. "</p></td>
        <td><p style='color:rgb($r,$g,$b)'>" .$item[$i][2]. "</p></td>
        <td><img src=".$item[$i][3]." width=200 height=150></td>
        </tr>";
      }
      
?>
</body>
</html>