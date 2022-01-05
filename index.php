<!DOCTYPE html>
<html lang="de">
<head>

   <meta charset="utf-8">
   
   <title>D&H - Verleih</title>
   <link rel="icon" href="./img/logo.jpg"  type="image/x-icon">
 
   <meta name="description" content="Verleih von Musikinstrumenten">
   <meta http-ewuiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <br>

</head>

<body class="bg-dark text-white">

    <!-- Background Image -->
    <div id="intro-example" class="p-5 bg-image" style="background-image: url('img/bg01.jpg');">

    <!-- Navigation-Bar -->
    <?php include ("main/header.php"); ?>

    <!-- Carousel -->
    <br><br><br>

    <div id="carouselInstruments" class="carousel carousel-white slide" data-bs-ride="carousel">

      <div class="carousel-inner text-white">

        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselInstruments" data-bs-slide-to="0" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselInstruments" data-bs-slide-to="1" class="active" aria-current="true" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselInstruments" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-item" data-bs-interval="4000">
          <div class="carousel-caption d-none d-md-block">
            <img src="./img/piano.jpg" class="d-block w-100" alt="...">
            <h5>Pianos</h5>
            <p>Some representative placeholder content for the third slide.</p>
            <a href="products.php#pianos"><button type="button" class="btn btn-outline-light btn-lg">Gehe zu Pianos</button></a>
          </div>
        </div>

        <div class="carousel-item active" data-bs-interval="4000">
          <div class="carousel-caption d-none d-md-block">
            <img src="./img/drums.jpg" class="d-block w-100" alt="...">
            <h5>Schlagzeuge</h5>
            <p>Some representative placeholder content for the second slide.</p>
            <a href="products.php#drums"><button type="button" class="btn btn-outline-light btn-lg">Gehe zu Schlagzeugen</button></a>
          </div>
        </div>

        <div class="carousel-item" data-bs-interval="4000">
          <div class="carousel-caption d-none d-md-block">
            <img src="./img/guitar.jpg" class="d-block w-100" alt="...">
            <h5>Gitarren</h5>
            <p>Some representative placeholder content for the first slide.</p>
            <a href="products.php#guitars"><button type="button" class="btn btn-outline-light btn-lg">Gehe zu Gitarren</button></a>
          </div>
        </div>

      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#carouselInstruments" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>

      <button class="carousel-control-next" type="button" data-bs-target="#carouselInstruments" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>

    </div>

    <!-- Infos -->

<!--
    <div class="container">
      <h2 class="col-le-1 p-1 bg-dark" align-items-center>Infos zum Verleih</h2>

      <h4>Über 1800 Instrumente warten auf Ihren Einsatz!</h4>
      <p>
        Mit weit über 1800 verschiedenen Mietinstrumenten und 30 Jahren Erfahrung sind wir Deutschland's großer Allround-Instrumentenverleih für alle Musikinstrumente in den Bereichen Klassik, Jazz und Rock.      
        Unsere Musikinstrumente, Backline und umfangreiche Bühnen- und Orchesterausstattung können Sie für Proben, Konzerte, Konzertreisen / Orchester Tourneen, Studioaufnahmen, Musikfestivals, TV-Shows, Theater- und Filmproduktionen, Fotoshootings, Werbung, Castings / Auditions mieten. Natürlich vermieten wir unsere Instrumente und alles Zubehör auch zu vielen anderen Anlässen wie Messe, Firmenveranstaltung, Ausstellungseröffnung / Vernissage, Sportveranstaltung, Vereinsfeier, Hochzeit, Geburtstagsfeier und auch Trauerfeier.
      </p>

      <h4>Vermietung von Musikinstrumenten jeder Art, Backline & Zubehör - alles aus einer Hand!</h4>
      <p>
        Mieten Sie Schlaginstrumente / Schlagzeug, Percussion, Pauken, Streichinstrumente, Tasteninstrumente, Holz- & Blechblasinstrumente, Konzertharfen, keltische Harfen, Zupfinstrumente, Konzertgitarren, Westerngitarren, Akustikgitarren, Halbakustikgitarren, E-Gitarren und E-Bässe, professionelle Backline für Jazz & Rock, klassische Orchesterinstrumente, Musikerstühle / Orchesterstühle & Chorstühle, Notenpulte / Orchester-Notenpulte, Dirigentenpulte, Dirigentenpodeste, Pultleuchten, Tontechnik und vieles mehr.
      </p>

      <h4>Instrumente mieten für klassische Orchester und Chöre aus aller Welt.</h4>
      <p>  
        Wir sind der führende Instrumentenverleih für klassische Orchesterinstrumente und Orchesterzubehör in Deutschland. Seit 1992 statten wir nationale und internationale Sinfonieorchester, Philharmonische Orchester, Blasorchester, Jugendorchester, Hochschulrorchester, Ensembles und Chöre mit klassischen Orchesterinstrumenten und entsprechendem Zubehör aus. Ebenso begleiten wir auch deren Konzertreisen und Tourneen mit speziellen Fahrzeugen für den Orchestertransport und unseren geschulten Mitarbeitern innerhalb von Deutschland und Europa. Egal ob Berlin, Hamburg, München, Frankfurt, oder auch Prag, Paris, Barcelona und Amsterdam.
        Von uns können Sie einfach alle für eine Konzertreise / Orchestertournee nötigen klassischen Musikinstrumente und jegliches Orchesterzubehör mieten und gleichzeitig sicher und absolut zuverlässig transportiert bekommen.
      </p>   

      <p> 
            Sie erhalten alle Mietgegenstände, Zubehör und Transport-Services aus einer Hand und haben bei uns immer einen festen Ansprechpartner!
            Auf Wunsch transportieren wir die gemieteten Instrumente innerhalb von Berlin, Deutschland und Europa und unser erfahrenes Stageservice Team übernimmt den gesamten Auf- und Abbau auf der Bühne vor Ort - zu jeder Zeit!
            Ihre Sicherheit ist uns sehr wichtig! Daher werden unsere elektrisch betriebenen Mietgegenstände und Musikinstrumente regelmäßig gemäß der gesetzlich vorgeschriebenen DGUV Vorschrift 3 - Unfallverhütungsvorschrift überprüft und verfügen stets über eine aktuelle Prüfplakette und das dazugehörige Prüfprotokoll.
            Alle Instrumente / Mietgegenstände sind während der gesamten Mietdauer gemäß unserer AGB versichert!
            Infektionsschutz: Alle Musikinstrumente und Mietgegenstände werden von uns vor und nach jedem Einsatz aufwendig gegen Viren und Bakterien desinfiziert.
            Wir bieten spezielle Preisnachlässe für unsere Stammkunden.
      </p> 
        
      <p>
        In unserem umfangreichen Instrumentenverleih besitzen wir preisgünstige Musikinstrumente ebenso, wie beste Markeninstrumente namhafter Hersteller oder Manufakturen. Sollten wir ein ganz spezielles Instrument einmal nicht in unserem Bestand haben, werden wir es dank weltweit bester Kontakte in kürzester Zeit für Sie besorgen.
        <br>
        <a href="contact.php">Kontaktieren Sie uns</a> - wir helfen Ihnen gern!
      </p>

    </div>
-->

    <!-- footer -->
    <?php include ("main/footer.php"); ?>

</body>

</html>
