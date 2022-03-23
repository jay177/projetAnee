<!DOCTYPE html>
<html lang="fr">
<head>
    <title>contact</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/styleA.css">
</head>
<body>

   






    <div class="cont">
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="javascript/anime.js"></script>
    
    </div>
    



    <div class="bloc">
     <?php

    include("include.php");

    ?>
        <video autoplay="autoplay" muted='' loop="" src="image/tog.mp4"></video>
        <form class="form" id="form">
        <div class="header">
	    <h2>Contact Us</h2>
            <div class="input-group">
     
             <label>email</label>
             <input type="email" required id="email" value="">

             <label for="tel">tél</label>
             <input type="number" required placeholder="ex 0678543456" id="tel" value="">

     
             <label>votre nom</label>
             <input type="nom" required value="" id="nom">

             <label>joindre un fichier</label>
             <input type="file" >

             <label for="commme">votre commentaire</label>
     
             <textarea id="comme" name="comme" rows="10" cols="25" placeholder="votre commentaire"></textarea>
             
       
             <button id="id2">soumetre</button>
     
            </div>
             
             
         </form>
    </div>
   




</body>
</html>