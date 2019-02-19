<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Boolean</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <body>
    <div class="header">
      <div class="header_left">
        <img src="{{ asset('img/logo.png') }}">
      </div>
      <div class="header_right">
        <ul>
          <li><a href="{{ route('home') }}">HOME</a></li>
          <li><a href="#">CORSO</a></li>
          <li><a href="#">METODO</a></li>
          <li><a href="#">DOPO IL CORSO</a></li>
          <li><a href="#">FAQ</a></li>
          <li><a href="#">Iscriviti</a></li>
        </ul>
      </div>
    </div>
    <div class="main">
      <div class="main_left">
        <h1>Diventa sviluppatore web</h1>
        <p>6 mesi di corso <b>intensivo online in diretta</b>  per imparare da zero il mestiere di web developer e <b>trovare un nuovo lavoro</b> nelle aziende top del settore</p>
      </div>
      <div class="main_right">
        <img src="{{ asset('img/pc.png')}}">
      </div>
    </div>
    <div class="sponsor">
      <h2>I nostri studenti sono stati assunti da</h2>
      <div class="sponsor_image">
        <ul>
          <li><img src="{{ asset('img/facile.png') }}"></li>
          <li><img src="{{ asset('img/oneday.png') }}"></li>
          <li><img src="{{ asset('img/cayenne.png') }}"></li>
          <li><img src="{{ asset('img/softec.png') }}"></li>
          <li><img src="{{ asset('img/fabbrica_digitale.png') }}"></li>
        </ul>
      </div>
    </div>
    <div class="footer">
      <div class="footer_top">
        <img src="{{ asset('img/logo.png') }}">
        <div class="contact">
          <a href="#">ciao@boolean.careers</a> <br>
          <a href="#">02-40031288</a> <br>
          <a href="#">+39 327-9578239</a>
        </div>
        <div class="static_page">
          <a href="#">Privacy Policy</a> <br>
          <a href="#">Lavora con noi!</a>
        </div>
        <div class="social">
          <i class="fab fa-facebook"></i>
          <i class="fab fa-linkedin"></i>
          <i class="fab fa-whatsapp"></i>
        </div>
      </div>
      <div class="footer_bottom">
        <small>Boolean** (my_new_job > my_old_job) // returns true </small>
        <small>Boolean SRLS - Piazzale Giovanni dalle Bande Nere, 9 - 20146, Milano - P.IVA: 10214930967</small>
      </div>
    </div>
  </body>
</html>
