<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- FONT: LATO -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <!-- FONT: FONTAWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

    <!-- JS: JQUERY -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- JS: MOMENT -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js"></script>

    <!-- JS: HANDLEBARS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.0/handlebars.min.js" charset="utf-8"></script>
    <!-- TEMPLATE: MESSAGE MENU -->
    <script id="item-template" type="text/x-handlebars-template">
      <div class="pagamento" data-id={{id}}>

        <p>Prenotazione n. {{prenotazione_id}} Prezzo: {{price}} Codice pagante: {{pagante_id}}
        <button type="button" name="button">CANCELLA PAGAMENTO</button>
        </p>
      </div>

    </script>

    <!-- CSS: MY STYLE -->
    <link rel="stylesheet" href="style.css">
    <!-- JS: MY SCRIPT -->
    <script src="script.js" charset="utf-8"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <!-- IMG: ICON -->
    <!-- <link rel="shortcut icon" href="img/me_icon.gif"> -->
    <title>DBHotel</title>
  </head>
  <body>
    <div class="container">
      <div class="accepted">
        <h2>ACCEPTED</p>
      </div>
      <div class="pending">
        <h2>PENDING</p>
      </div>
      <div class="rejected">
        <h2>REJECTED</p>
      </div>


    </div>

  </body>
</html>