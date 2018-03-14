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
     <nav class="language"></nav>
     <header class="main-header">
       <section class="card">
         <section class="logo">
           <a href="index.php"><img src="/MVC/assets/img/touchwood-logo-sans-slogan-nobelBold.png" alt=""></a>
         </section>
         <p class="presentation">Antiquités .Décoration .Aménagement d'intérieur</p>
         <p class="phone-number"> <i class="fas fa-phone"><a class="phone-number" href="+32 495/20.59.34">+32 495/20.59.34</a></i></p>
         <section class="nav">
           <ul>
             <li><button type="button" name="button-presentation"> <a href="presentation.php">Présentation</a></button></li>
             <li><button type="button" name="button-stock"><a href="stock.php">Le stock</a></button></li>
             <li><button type="button" name="button-contact"><a href="contact.php">Contact</a></button></li>
           </ul>
         </section>
       </section>
     </header>
     <?php
     //afficher le stock
      include 'views/stocks/stock-page1.php';
      ?>
      <section class="Quotes">
        <p class="quote">"L'ennui naquit un jour de l'uniformité"</p>
        <p class="author">-Antoine Houdar de la Motte</p>
      </section>
      <?php
      //afficher le footer
      include 'views/footer.php';
       ?>
   </body>
 </html>
