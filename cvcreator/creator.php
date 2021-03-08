<?php 
    $cor_fundo = $_POST['backgroundtheme'];
    $professionalname = $_POST['professionalname'];
    $cvbodyfundo = 'white';
    $cvboxshadow = '3px 3px 3px 5px rgba(0, 0, 0, 0.2)';
    $cvleftboxfundo = '#222933';
?>
<html>
    <style>
        body {background-color: <?php echo $cor_fundo; ?>;}
        form {
            position: absolute;
            left: 60%;
        }
        h1 {
            color:white;
            font-size: 18px;
            margin-top: 70%;
            margin-left: 30%;
        }
        .cvbody {
        height: 94%;
        width: 38%;
        position:absolute;
        top: 3%;
        left: 2%;
        background-color: <?php echo $cvbodyfundo; ?>;
        box-shadow: <?php echo $cvboxshadow; ?>;
        }
        .cvleftbox {
            position: absolute;
            height: 100%;
            width: 35%;
            background: <?php echo $cvleftboxfundo; ?>;
            z-index: 5;
            color: 'white';
        }
        .cvphoto{
            position: absolute;
            left: 19%;
            top: 2%;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border-style: solid;
            border-width: 1px;
            border-color: black;
            overflow: hidden;
        }
        .cvphoto img{
            width: 100%;
            height: 100%;
        }
    </style>


    <div class = "cvbody">
        <div class = "cvleftbox">
            <div class = "cvphoto">
                <img src="shopping.png">
            </div>
            <h1><?php echo $professionalname;?></h1>
        </div>
    </div>
    <form name="signup" method="POST" action="creator.php"><br>
        <select name="backgroundtheme" id="backgroundtheme">
            <option value="#f8db95">Yellow Pastel</option>
            <option value="#c8e9fc">Blue Pastel</option>
        </select>
        <label for="uname">Insira seu nome</label>
        <input type="text" id="professionalname" name="professionalname">
            <button>Action</button>
    </form>
</html>