<?php

     include('connection.php');

     //$tilenum = (rand(1,2));

     //if ($tilenum == 1){
     //     $tilename = 'grass';
     //}
     //if($tilenum == 2){
     //     $tilename = 'desert';
     //}

     //$sql = "INSERT INTO tile (tilename, tilenum)
     //VALUES ('$tilename', '$tilenum')";
 
     //if (mysqli_query($conn, $sql)) {
         //echo "New record created successfully";
     //} else {
         //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     //}

     $chunk = 1;

     $sql = "SELECT * FROM chunk";
     $result = mysqli_query($conn,$sql) or die("Error returning data");
     while ($register = mysqli_fetch_array($result)){
     $chunksit = $register['chunksit'];

     if($chunksit == 'inative'){
          $tile11 = (rand(1,2));
          $tile12 = (rand(1,2));
          $tile13 = (rand(1,2));
          $tile14 = (rand(1,2));
          $tile15 = (rand(1,2));

          echo $tile11?><br>
     <?php echo $tile12?><br>
     <?php echo $tile13?> <br>
     <?php echo $tile14?> <br>
     <?php echo $tile15?> <br> <?php

          $chunksitnew = 'ative';

          $sql = "UPDATE chunk SET chunksit = '{$chunksitnew}'";

          if ($conn->query($sql) === TRUE) {
          //echo "Record updated successfully";
          } else {
          //echo "Error updating record: " . $conn->error;
          }
     }

     }
?>