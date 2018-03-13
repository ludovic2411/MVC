<?php

 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
     <title>Antiquité, Décorations, Belgique-meubles industriels</title>
   </head>
   <body>
     <header>
       <section class="card">
         <h2 class="Didier">Didier</h2>
         <h2 class="Motte">Motte</h2>
         <p class="presentation"></i>Antiquités .Décoration .Aménagement d'intérieur</p>
         <p class="phone-number"> <i class="fas fa-phone"><a href="+32 495/20.59.34"></a>+32 495/20.59.34</i></p>
         <nav class="nav">
           <ul>
             <li><button type="button" name="button-presentation"> <a href="presentation.php">Présentation</a></button></li>
             <li><button type="button" name="button-stock"><a href="stock.php">Le stock</a></button></li>
             <li> <button type="button" name="button-contact"><a href="contact.php">Contact</a></button></li>
           </ul>
         </nav>
       </section>
     </header>
     <?php
     //afficher le stock
      //include '/views/stock.php';
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
