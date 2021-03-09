<?php
     include('connection.php');


    //grounds 
    //grass = 1;
    //tree = 2;
    //wather = 3;

    $a=array(1,2,3,4,5);
    $random_keys=array_rand($a,3);
    //echo $a[$random_keys[0]]."<br>";
    //echo $a[$random_keys[1]]."<br>";
    //echo $a[$random_keys[2]];

    $a=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
    print_r(array_rand($a,1));

     $chunk = 1;

     $sql = "SELECT * FROM chunk";
     $result = mysqli_query($conn,$sql) or die("Error returning data");
     while ($register = mysqli_fetch_array($result)){
     $chunksit = $register['chunksit'];

     if($chunksit == 'ative'){
          

          $randtile12 = array($tileaa, $tileaa, $tileaa, 1, 2, 3);
          $tileab = array_rand($randtile12,1);

          $randtile13 = array($tileab,$tileab,$tileab, 1, 2, 3);
          $tileac = array_rand($randtile13,1);

          $tileac = (rand(1,2));
          $tile14 = (rand(1,2));
          $tile15 = (rand(1,2));


          $chunksitnew = 'ative';

          $sql = "UPDATE chunk SET chunksit = '{$chunksitnew}'";

          if ($conn->query($sql) === TRUE) {
          //echo "Record updated successfully";
          } else {
          //echo "Error updating record: " . $conn->error;
          }

          $sql = "INSERT INTO tile (tilenum)
          VALUES ('$tileaa')";
     
          if (mysqli_query($conn, $sql)) {
          //echo "New record created successfully";
          } else {
          //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }


          $sql = "INSERT INTO tile (tilenum)
          VALUES ('$tileab')";
     
          if (mysqli_query($conn, $sql)) {
          //echo "New record created successfully";
          } else {
          //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
          
          $sql = "INSERT INTO tile (tilenum)
          VALUES ('$tileac')";
     
          if (mysqli_query($conn, $sql)) {
          //echo "New record created successfully";
          } else {
          //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }

          $sql = "INSERT INTO tile (tilenum)
          VALUES ('$tile14')";
     
          if (mysqli_query($conn, $sql)) {
          //echo "New record created successfully";
          } else {
          //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }

          $sql = "INSERT INTO tile (tilenum)
          VALUES ('$tile15')";
     
          if (mysqli_query($conn, $sql)) {
          //echo "New record created successfully";
          } else {
          //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
     }

     }
?>