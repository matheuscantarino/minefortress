<?php
    include('connection.php');
    $chunk = 1;

    $sql = "SELECT * FROM chunk";
    $result = mysqli_query($conn,$sql) or die("Error returning data");
    while ($register = mysqli_fetch_array($result)){
      $chunksit = $register['chunksit'];

      if($chunksit == 'ative'){


      ///GERA O TILE A.A
      $tileaa = mt_rand(1, 100);
      if ($tileaa <= 50){
          $tileaa = 1;
      }
      if(($tileaa > 50) && ($tileaa <= 75)){
          $tileaa = 2;
      }
      if(($tileaa > 75) && ($tileaa <= 90)){
          $tileaa = 3;
      }
      if(($tileaa > 90) && ($tileaa <= 100)){
          $tileaa = 4;
      }

      ///GERA O TILE A.B
      $tileab = mt_rand(1, 100);
      if ($tileab <= 50){
        $tileab = $tileaa;
      }
      if(($tileab > 50) && ($tileab <= 75)){
        $tileab = 2;
      }
      if(($tileab > 75) && ($tileab <= 90)){
        $tileab = 3;
      }
      if(($tileab > 90) && ($tileab <= 100)){
        $tileab = 4;
      }

      ///GERA O TILE A.C
      $tileac = mt_rand(1, 100);
      if ($tileac <= 50){
        $tileac = $tileab;
      }
      if(($tileac > 50) && ($tileac <= 75)){
        $tileac = 2;
      }
      if(($tileac > 75) && ($tileac <= 90)){
        $tileac = 3;
      }
      if(($tileac > 90) && ($tileac <= 100)){
        $tileac = 4;
      }

      ///GERA O TILE A.D
      $tilead = mt_rand(1, 100);
      if ($tilead <= 50){
        $tilead = $tileac;
      }
      if(($tilead > 50) && ($tilead <= 75)){
        $tilead = 2;
      }
      if(($tilead > 75) && ($tilead <= 90)){
        $tilead = 3;
      }
      if(($tilead > 90) && ($tilead <= 100)){
        $tilead = 4;
      }


      ///ENVIA OS TILES PARA O DATABASE
      $sql = "INSERT INTO tile (tilenum)
      VALUES ('$tileaa')";
     
      if (mysqli_query($conn, $sql)) {
      } else {
          //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      $sql = "INSERT INTO tile (tilenum)
      VALUES ('$tileab')";
     
      if (mysqli_query($conn, $sql)) {
      } else {
          //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      $sql = "INSERT INTO tile (tilenum)
      VALUES ('$tileac')";
     
      if (mysqli_query($conn, $sql)) {
      } else {
          //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }

        $chunksitnew = 'ative';

        $sql = "UPDATE chunk SET chunksit = '{$chunksitnew}'";
     }
    }
?>