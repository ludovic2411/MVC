<?php

 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
     <link rel="stylesheet" href="/MVC/assets/css/MVC-style.css">
     <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
     <title>Antiquité, Décorations, Belgique-meubles industriels</title>
   </head>
   <body>
    <?php
    include 'main-header.php';
     ?>
     <?php
     //afficher le stock
      include 'stocks/Stock-index.php';
      ?>
      <section class="Quotes">
        <p class="quote">"L'ennui naquit un jour de l'uniformité"</p>
        <p class="author">-Antoine Houdar de la Motte</p>
      </section>
      <?php
      //afficher le footer
      include 'footer.php';
       ?>
   </body>
 </html>
