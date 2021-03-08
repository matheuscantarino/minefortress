<?php 
//include('index.php');
// Define que o arquivo terá a codificação de saída no formato CSS
//header("Content-type: text/css");

$cvbodyfundo = 'white';
$cor_fundo = '#f8db95';
$cvboxshadow = '3px 3px 3px 5px rgba(0, 0, 0, 0.2)';
?>
body {
background: <?php echo $cor_fundo; ?>;
}
.cvbody{
    height: 94%;
    width: 38%;
    position:absolute;
    top: 3%;
    left: 2%;
    background: <?php echo $cvbodyfundo; ?>;
    box-shadow: <?php echo $cvboxshadow; ?>;
}
form{
    position: absolute;
    left: 40%;
}