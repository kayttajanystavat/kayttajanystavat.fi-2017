<!doctype html>
<html lang="fi">
<head>
  <meta charset="utf-8">
  <title>Käyttäjän Ystävät Ry</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Käytettävyysalan poikkitieteellinen opiskelijajärjestö">
  <link rel="icon" href="pics/kay_logo_32x32.png" type="image/favicon">
  <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="styles.css">
  <!--[if IE]>
  	<link rel="stylesheet" type="text/css" href="all-ie-only.css" />
  <![endif]-->
</head>
<body>
  <header class="main-header">
    <div class="topbar">
      <button class="menuBtn" aria-controls="mobile-nav"><i class="material-icons" onclick="openNav()">menu</i></button>
      <img src="pics/kay_logo.png" alt="kaylogo">
    </div>
    <nav class="main-nav">
      <ul>
        <li><a href="#events">Tapahtumat</a></li>
        <li><a href="#join">Liity jäseneksi</a></li>
        <li><a href="#contact">Yhteystiedot</a></li>
      </ul>
    </nav>
    <nav class="mobile-nav" id="mobile-nav">
      <a role="menuitem" href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a role="menuitem" href="#events">Tapahtumat</a>
      <a role="menuitem" href="#join">Liity jäseneksi</a>
      <a role="menuitem" href="#contact">Yhteystiedot</a>
    </nav>
    <div role="banner">
      <img class="topphoto" id="topphoto" src="pics/topphoto.jpg" alt="Käyttäjän ystävät pöhisemässä">
    </div>
  </header>
  <main class="main-content">
    <div class="wrappertop">
      <section class="info">
        <p>Käyttäjälähtöisestä suunnittelusta kiinnostuneiden  opiskelijoiden yhdistys ja kohtauspaikka.</p>
        <p>Innostumme erityisesti palvelumuotoilusta, käyttökokemuksista ja käyttäjätutkimuksista.</p>
      </section>

      <section class="events" id="events">
        <?php include('./events.php'); ?>
      </section>

      <section class="verkostoidu" id="verkostoidu">
        <h2>Verkostoidu tapahtumissamme</h2>
        <p>Käyttäjän ystävät järjestää erilaisia tapahtumia ja workshoppeja jäsenilleen. Suosituimpia ovat ekskursiot  eli yritysvierailut alan yrityksiin.
          Vierailuilla tutustutaan muun muassa palvelumuotoiluun, käyttöliittymäsuunnitteluun ja käyttäjätutkimuksiin ja ne ovat oiva tilaisuus kuulla alasta sen ammattilaisilta  ja verkostoitua muiden kiinnostuneiden kanssa.
          Yritysvierailujen ja workshoppien lisäksi järjestämme myös piknikkejä ja rentoja afterwork-tilaisuuksia.
          Suurin osa tapahtumista on maksuttomia jäsenillemme.
          Liity jäseneksi tästä
        </p>
      </section>
    </div>
    <div class="wrapperbotm">
      <section class="join" id="join">
        <h2>Liity Jäseneksi</h2>
        <p>Tule tapaamaan mielenkiintoisia ihmisiä ja verkostoidu kanssamme</p>
        <p><a href="/liity" class="btn">Liity Jäseneksi</a></p>
      </section>

      <section class="moreinfo" id="moreinfo">
        <p>Käyttäjän ystävät ry on vuonna 2001 perustettu käyttäjälähtöisen suunnittelun opiskelijoiden poikkitieteellinen yhdistys.

        Yhdistys kokoaa yhteen samanhenkisiä käytettävyydestä, UI- ja UX-suunnittelusta sekä palvelumuotoilusta
        Suurin osa jäsenistämme on Helsingin yliopiston, Aalto yliopiston tai Metropolia ammattikorkeakoulun opiskelijoita tai jo valmistuneita, mutta kaikki alasta kiinnostuneet ovat tervetulleita jäseneksemme.

        Liittymällä  <a href="https://www.facebook.com/groups/kayttajanystavat">Facebook-ryhmäämme</a> saat ajankohtaista tietoa yhdistyksen toiminnasta.</p>
      </section>
    </div>
  </main>
  <footer class="contact" id="contact">
    <h2>Ota yhteyttä</h2>
    <ul>
      <li>hallitus@kayttajanystavat.fi</li>
      <li>PL 69, 02151 Espoo</li>
      <li>Y- tunnus 1741700-5 (YTJ)</li>
    </ul>
    <div class="somef">
      <a href="https://www.facebook.com/groups/kayttajanystavat/"><img class="footerimg" src="pics/facebook.png" alt="Facebook"></a>
      <a href="https://twitter.com/kayttajanystava"><img class="footerimg" src="pics/twitter.png" alt="Twitter"></a>
      <a href="https://www.linkedin.com/groups/4095106/profile"><img class="footerimg" src="pics/linkedin.png" alt="LinkedIn"></a>
    </div>
  </footer>
  </div>
  <script>
  /* Open mobile navigation */
  function openNav() {
    document.querySelector(".mobile-nav").style.width = "250px";
  }
  /* Close mobile navigation */
  function closeNav() {
    document.querySelector(".mobile-nav").style.width = "0";
  }
  </script>
</body>
</html>
