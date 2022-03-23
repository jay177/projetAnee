<?php session_start();?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style4.css">
   
</head>
<body>
<?php

include("include.php");

?>
   <section>
       <div class="box">
           <div class="imgbx">
               <img src="image/2.jpeg" alt="">
               <h2>Click again to Close</h2>
               <div class="content">
                   <h3>Image caption One</h3>
                   <p>I hope you enjaoy my work it was really long and Frustrating but it was worth it </p>
               </div>
           </div>
       </div>
       <div class="box">
        <div class="imgbx">
            <img src="image/7.jpeg" alt="">
               <h2>Click again to Close</h2>
               <div class="content">
                   <h3>Image caption One</h3>
                   <p>I hope you enjaoy my work it was really long and Frustrating but it was worth it </p>
               </div>
        </div>
    </div>
    <div class="box">
        <div class="imgbx">
            <img src="image/4.png" alt="">
               <h2>Click again to Close</h2>
               <div class="content">
                   <h3>Image caption One</h3>
                   <p>I hope you enjaoy my work it was really long and Frustrating but it was worth it </p>
               </div>
        </div>
    </div>
    <div class="box">
        <div class="imgbx">
            <img src="image/11.png" alt="">
               <h2>Click again to Close</h2>
               <div class="content">
                   <h3>Image caption One</h3>
                   <p>I hope you enjaoy my work it was really long and Frustrating but it was worth it </p>
               </div>
        </div>
    </div>
    <div class="box">
        <div class="imgbx">
            <img src="image/9.jpeg" alt="">
               <h2>Click again to Close</h2>
               <div class="content">
                   <h3>Image caption One</h3>
                   <p>I hope you enjaoy my work it was really long and Frustrating but it was worth it </p>
               </div>
        </div>
    </div>
    <div class="box">
        <div class="imgbx">
            <img src="image/1a.jpg" alt="">
            <h2>Click again to Close</h2>
            <div class="content">
                <h3>Image caption One</h3>
                <p>I hope you enjaoy my work it was really long and Frustrating but it was worth it </p>
            </div>
        </div>
    </div>
    <div class="box">
        <div class="imgbx">
            <img src="image/3.jpeg" alt="">
            <h2>Click again to Close</h2>
            <div class="content">
                <h3>Image caption One</h3>
                <p>I hope you enjaoy my work it was really long and Frustrating but it was worth it </p>
            </div>
        </div>
    </div>
    <div class="box">
        <div class="imgbx">
            <img src="image/5.jpeg" alt="">
            <h2>Click again to Close</h2>
            <div class="content">
                <h3>Image caption One</h3>
                <p>I hope you enjaoy my work it was really long and Frustrating but it was worth it </p>
            </div>
        </div>
    </div>
    <div class="box">
        <div class="imgbx">
            <img src="image/10.jpeg" alt="">
            <h2>Click again to Close</h2>
            <div class="content">
                <h3>Image caption One</h3>
                <p>I hope you enjaoy my work it was really long and Frustrating but it was worth it </p>
            </div>
        </div>
    </div>
    <div class="box">
        <div class="imgbx">
            <img src="image/12.png" alt="">
            <h2>Click again to Close</h2>
            <div class="content">
                <h3>Image caption One</h3>
                <p>I hope you enjaoy my work it was really long and Frustrating but it was worth it </p>
            </div>
        </div>
    </div>
    <div class="box">
        <div class="imgbx">
            <img src="image/13.jpg" alt="">
            <h2>Click again to Close</h2>
            <div class="content">
                <h3>Image caption One</h3>
                <p>I hope you enjoy my work it was really long and Frustrating but it was worth it </p>
            </div>
        </div>
    </div>
    </section>
    <!-- fin de galleri -->
    <?php 
$pdo = new PDO("mysql:host=localhost;dbname=tog", "root", "root", array(PDO::ATTR_ERRMODE => PDO:: ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

//$pdo->exec("INSERT INTO commentaire (pseudo, message, date_heure_message) VALUES ('$_POST[pseudo]', '$_POST[message]', NOW())");
if($_POST){
    $pdo->exec("INSERT INTO commentaire (pseudo, message, date_heure_message) VALUES ('$_POST[pseudo]', '$_POST[message]', NOW())");
 }
// suppression commentaire

    if(isset($_GET['dellet'])){
        $req = "DELETE FROM `commentaire` WHERE `commentaire`.`id_commentaire` = ?";
        $remov = ($pdo->prepare($req));
        $remov->execute([$_GET['dellet']]);
    }

    
?>



<form action="lightBox.php" method="post">
    <input type="text" name="pseudo" placeholder="Pseudo">
    <br><br>
    <textarea name="message"  cols="30" rows="10" placeholder="Message"></textarea>
    <br><br>
    <input type="submit" name="submit_new_com">
</form>



<?php 
//affichage de commentaire
    $response = $pdo->query('SELECT * FROM commentaire ORDER BY date_heure_message DESC');
    while($commentaires = $response->fetch()){
        echo '<div class="comm">' . 'pseudo : ' . $commentaires['pseudo'] . '<br> content: ' . $commentaires['message'] . '<br><a href="lightBox.php?dellet=' . $commentaires['id_commentaire'] . '">supprimer</a><br> <br>' . "</div>";
    }
?> 
<!-- <form entype="multiport/form-data"></form>
<input type="file" name="img"> -->
<?php

// $_FILES['img']
// $nom = $_FILES['img']['name'];
// $tmp = $_FILES['img']['tmp_name'];
// $lien = "img/" . $nom;
// move_uploaded_file($tmp,$lien);
// $up = ("INSERT INTO table (image) VALUES ($lien)");

?>



   <script src="javascript/anime.js"></script>

</body>
</html>