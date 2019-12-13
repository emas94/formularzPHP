<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="style/style.css" />
    <title>Formularz Smartbees</title>
  </head>
  <body>
    <div class="contactForm">
      <form
        id="contactForm__form"
        action="?action=save"
        name="send"
        method="POST"
      >
        <div class="contactForm__firstName">
          <label for="firstName">Imię</label>
          <input
            type="text"
            id="firstName"
            name="firstName"
            placeholder="Podaj swoje imię"
          />
        </div>
        <div class="contactForm__lastName">
          <label for="lastName">Nazwisko</label>
          <input
            type="text"
            id="lastName"
            name="lastName"
            placeholder="Podaj swoje nazwisko"
          />
        </div>
        <div class="contactForm__email">
          <label for="email">Email:</label>
          <input
            type="email"
            name="email"
            id="email"
            placeholder="Podaj email"
          />
          </div>
        <div class="contactForm__message">
          <label for="message">Wiadomość</label>
          <textarea name="message" id="message" cols="30" rows="5"></textarea>
        </div>
 
        <button type="submit" id="contactForm__btn" name="submit">
          Wyślij
        </button>

      </form>
      </div>
      <div class="container">
      <?php
error_reporting(0);
if ($_GET['action'] == "submissions") {
      @include('./selectData.php');
 } ?>
      </div>
      <?php
      if(isset($_POST['firstName'])){
if ($_GET['action'] == "save") {
@include('./addToTable.php');
  }
}
?>
<?php
if ($_GET['action'] == "createDB") {
@include('./createTable.php');
}     
?>
    <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.js"
      integrity="sha256-ywN/tj+hfHxivU0KIDrKwL6lu3A8rrt2vnPIRkiM9z8="
      crossorigin="anonymous"
    ></script>

    <script src="code/code.js"></script>
  </body>
</html>
