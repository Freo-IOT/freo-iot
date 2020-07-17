<?php 
$ToEmail = 'admin@fremantle.associates'; 
$EmailSubject = 'Site contact form'; 
$mailheader ="From:".$_POST["email"]."\r\n"; 
$mailheader .="Reply-To:".$_POST["email"]."\r\n"; 
$mailheader .="Content-type: text/html; charset=iso-8859-1\r\n"; 
$MESSAGE_BODY ="<b>Name: </b>".$_POST["name"]."<br>"; 
$MESSAGE_BODY .="<b>Email: </b>".$_POST["email"]."<br>"; 
$MESSAGE_BODY .="<b>Mobile: </b>".$_POST["mobile"]."<br>"; 

$MESSAGE_BODY .="<b>Message:</b><br>".nl2br($_POST["message"]).""; 
mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
?>

<DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fremantle.Associates</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
      crossorigin="anonymous">
    <link href="contact.css" rel="stylesheet">
    <meta name="format-detection" content="telephone=no" />
  </head>

  <body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="contact.js"></script>

    <div class="container" style="background:transparent;">
      <br>
      <br>
      <div class="jumbotron" style="background:transparent; background-color: rgba(255, 255, 255, 0.8);">

        <h1>
          Fremantle . Associates
          <br>
          <i class="fas fa-anchor"></i>
          <i class="fas fa-hands-helping"></i>
          <i class="fas fa-atom"></i>
          <i class="fas fa-cloud"></i>
          <i class="fas fa-code"></i>
          <i class="fab fa-docker"></i>
          <i class="fas fa-ship"></i>
        </h1>
        <p>
          <br>
          <b>Fremantle Associates Pty Ltd</b>
          <br> ABN: 24 627 213 227
          <br> ACN: 627 213 227
          <br>

        </p>
        <div class="col-md-9">
          <div class="form-area" style="background:transparent;">
              <br>
              <h3 style="margin-bottom: 25px; text-align: left;"> <i class="fas fa-thumbs-up"></i>&nbsp;&nbsp;Thanks!</h3>
              We'll get back to you shortly.
          </div>
        </div>

    </div>
    <div style="margin-bottom: 25px; text-align: center;">
      <font color="white">
        <i class="far fa-copyright"></i> 2018
        <i class="fas fa-anchor"></i> Fremantle Associates Pty Ltd
        <i class="fas fa-ship"></i>

        <br>
        <i class="fas fa-people-carry"></i>
        Made by hand
        <i class="fas fa-handshake"></i> with bootstrap
        <i class="fab fa-css3-alt"></i> fontawesome
        <i class="fas fa-flag"></i> and php
        <i class="fas fa-frog"></i>
      </font>
    </div>

    </div>
    </div>
    <div class="container">


  </body>

  </html>