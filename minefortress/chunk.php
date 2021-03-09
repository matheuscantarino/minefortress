<?php
     include('connection.php');
     $chunknum = 1;
     $sql = "SELECT * FROM tile WHERE tilechunk = '{$chunknum}'";
     $result = mysqli_query($conn,$sql) or die("Error returning data");
     while ($register = mysqli_fetch_array($result)){
          $tileaa = $register['tile11'];
          $tileab = $register['tile12'];
          $tileac = $register['tile13'];
          $tile14 = $register['tile14'];
          $tile15 = $register['tile15'];
          echo $tileaa . '|' . $tileab . '|' . $tileac . '|' . $tile14 . '|' . $tile15;
     }

     
?>