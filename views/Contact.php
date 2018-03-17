<?php

 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/MVC/assets/css/MVC-style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
     <title>Contact</title>
   </head>
   <body>
     <?php
     include 'header.php';
      ?>
      <section class="container">
      <section "Contact">
        <h2>CONTACT</h2>
        <p>Le magasin est ouvert le samedi matin de 10h00 à 12h30 ou sur rendez-vous.</p>
        <button class="mail"type="button" name="email"><a href="dmotte@skynet.be">dmotte@skynet.be</a></button>
        <section "address">
          <p>+32 495 20.59.34</p>
          <p>Rue Saint Georges 35</p>
          <p>B-1400 Nivelles</p>
          <p>Belgique.</p>
          <p>Retrouvez nos mises à jour en vous<button type="button" name="facebook"><a href="https://www.facebook.com/antiquites.decoration"></a></button></p>
        </section>
      </section>
      <section class="maps">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2532.588861582122!2d4.325204434109408!3d50.59759460007292!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c232d3694f6cf7%3A0xaa0250fb6205aea4!2sDidier+Motte+Antiquit%C3%A9s+%2F+D%C3%A9coration+%2F+Fabrication!5e0!3m2!1sfr!2sbe!4v1521019085700" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      <section class="itinéraire">
        <form class="from" action="index.html" method="post">
          <p><input type="text" name="from" value="">
            <input type="submit" name="search_destination" value="Itinéraire">
          </p>
        </form>
      </section>
    </section>
  </section>
  <?php
  include 'footer.php';
   ?>
   </body>
 </html>
