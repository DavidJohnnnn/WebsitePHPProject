<!--

All images used were taken from the following website and placed in the public domain:

https://www.flickr.com/photos/8572247@N03/11864257173
"Star-forming Complex 30 Doradus from the Hubble Space Telescope" by HubbleColor {Zolt} is marked under CC PDM 1.0. To view the terms, visit https://creativecommons.org/publicdomain/mark/1.0/

 -->

<?php
  $tabTitle = "My History";
  $favicon = "back_favicon.ico";
  $pageID= "002-Page";
  include 'header.php';

  include 'titleBar.php';

  $pageClass = "pg2LgContainer";
  $quoteHTML = '
  <div class="card border-success mb-3 boxQuote displayNone">
    <h5 class="card-title">
      Hang on to your youthful enthusiasms — you’ll be able to use them better when you’re older.
      <br>
      <small style="font-size: 1.3rem">
        ― Seneca
      </small>
    </h5>
  </div>';
  include 'lgContainerDiv.php';

  $position = "Ichi";
  $cardTitle = "My History";
  $cardText = '
  This page focuses on some of my highlights over the past few years that I feel are relevant.
  <br>
  <br>
  <small>
    This element is something I made myself using some Bootstrap and a lot of custom CSS and JavaScript (you can see more if you search the css, js and html files for "RevealCard".
    <a href="https://github.com/DavidJohnnnn/My-Own-Website" class="btn btn-outline-info btn-sm" role="button" aria-pressed="true" onclick="window.open(this.href); return false;">Check out the repo</a>
    <br>
    <br>
    Press this section again to close.
  </small>';
  include 'revealCard.php';

?>

  <!-- Place to display my projects -->
  <section class="FourBlock">
    <div class="container-fluid">

      <div class="row">

        <div class="col-md-6 FourBlockTrnstn">
          <h5 class="card-title FourBlockTrnstn">
            Capstone Engineering Design Project
          </h5>
          <h5 class="card-subtitle mb-2 text-muted">
            9/2018 - 4/2019
          </h5>
          <p class="card-text FourBlockTrnstn">
            <ul>
              <li>
                Led a team with three fellow students & myself, working with three U of T Professors to create a software deliverable; a game to be paired with a consumer EEG headset. This game had psychology research applications.
              </li>
              <li>
                Conducted meetings, coordinated team schedules & compiled detailed records for the project duration.
              </li>
              <li>
                Designed software details, game mechanics & game storyboard prior to the instantiation in Java (through Processing IDE) & MATLAB (through EEGLAB, a MATLAB toolbox).
              </li>
              <li>
                Conducted extensive independent research on the operation of the EEG headset & MATLAB’s signal processing functions.
              </li>
              <li>
                Compiled our project details, team activities & distribution of work into a technically written 50 page report.
              </li>
              <li>
                <u>Leveraged Knowledge</u> in Java, Processing IDE, Git, GitHub, MATLAB, EEGLAB, Signal Processing.
              </li>
              <li>
                <em>
                  Earned a Certificate of Distinction for being one of the top 20 Electrical and Computer Engineering Capstone Design Projects for the school year.
                </em>
              </li>
            </ul>

          </p>
        </div>
        <div class="col-md-6">

        </div>
      </div>

      <div class="row">
        <div class="col-md-6">

        </div>
        <div class="col-md-6">
          <h5 class="card-title">
            Professional Experience Year: IESO
          </h5>
          <h5 class="card-subtitle mb-2 text-muted">
            5/2017 - 8/2018
          </h5>
          <p class="card-text">
            <i>
              The Market Assessment & Compliance Division of the Independent Electricity System Operator (IESO) is responsible for monitoring and enforcing compliance with the Market Rules for the Ontario Electricity Market to ensure the reliable operation of Ontario’s power system. These “reliability standards” apply to Ontario Electricity Market participants such as electricity generators and transmitters.
            </i>
            <ul>
              <li>
                Assisted in the evaluation of evidence provided by market participants (mostly technical documents on generation and transmission facilities) as proof of their compliance with the reliability standards.
              </li>
              <li>
                Compiled these evaluations through technically written reports & presented these reports at team meetings.
              </li>
              <li>
                Assisted in assessing the impact of possible breaches of reliability standards on the reliability of Ontario’s power system.
              </li>
            </ul>

          </p>
        </div>

      </div>

      <div class="row">
        <div class="col-md-6">
          <h5 class="card-title">
            This Resume Website
          </h5>
          <h5 class="card-subtitle mb-2 text-muted">
            2020 - Present
          </h5>
          <p class="card-text">
            <ul>
              <li>
                Built this website writing with my own code and Bootstrap templates, using HTML, CSS, and Javascript (jQuery) to style and animate the site.
              </li>
              <li>
                Devising and writing out the majority of the animations that you can see using a few neat tricks I discovered through some trial and error.
              </li>
              <li>
                Designing the style of the website through even more trial and error.
              </li>
              <li>
                <a href="https://davidjjohn.ca/" onclick="window.open(this.href); return false;">Main resume website</a> (see <a href="https://github.com/DavidJohnnnn/My-Own-Website" onclick="window.open(this.href); return false;">repo</a>): <u>Utilized</u> HTML, CSS, JavaScript, JQuery, Bootstrap.
              </li>
              <li>
                <a href="https://websitenodeproject.herokuapp.com/" onclick="window.open(this.href); return false;">Replicated website in Node.js and Express.js</a> (see <a href="https://github.com/DavidJohnnnn/MyWebsiteNode" onclick="window.open(this.href); return false;">repo</a>): <u>Utilized</u> HTML, EJS, CSS, JavaScript, JQuery, Node.js, Express.js, Bootstrap, Heroku.
              </li>
              <li>
                <a href="https://github.com/DavidJohnnnn/WebsitePHPProject" onclick="window.open(this.href); return false;">Replicated website in PHP</a>: <u>Utilized</u> HTML, CSS, JavaScript, JQuery, Bootstrap, PHP.
              </li>

            </ul>
          </p>
        </div>
        <div class="col-md-6">

        </div>
      </div>

      <div class="row">
        <div class="col-md-6">

        </div>
        <div class="col-md-6">
          <h5 class="card-title">
            ISS Location Web Application
          </h5>
          <h5 class="card-subtitle mb-2 text-muted">
            Node.js application personal project
          </h5>
          <h5 class="card-subtitle mb-2 text-muted">
            4/2021 - Present
          </h5>
          <p class="card-text">
            <ul>
              <li>
                This is a web application that, when refreshed, displays the current location of the ISS on an embedded Google map.
              </li>
              <li>
                The real-time latitude and longitude of the ISS over the world is retrieved from a free API located <a href="https://api.wheretheiss.at/v1/satellites/25544" onclick="window.open(this.href); return false;">here</a>.
              </li>
              <li>
                <u>Utilized</u> HTML, EJS, CSS, JavaScript, JQuery, Node.js, Express.js, Bootstrap, Heroku (launched on the Heroku platform <a href="https://salty-shore-94100.herokuapp.com/" onclick="window.open(this.href); return false;">here</a> with the GitHub repo <a href="https://github.com/DavidJohnnnn/ISSAPIProject" onclick="window.open(this.href); return false;">here</a>).
              </li>

            </ul>
          </p>
        </div>

      </div>

      <div class="row">
        <div class="col-md-6">
          <h5 class="card-title">
            Countries Info Web Application
          </h5>
          <h5 class="card-subtitle mb-2 text-muted">
            Node.js application personal project
          </h5>
          <h5 class="card-subtitle mb-2 text-muted">
            5/2021 - Present
          </h5>
          <p class="card-text">
            <ul>

              <li>
                This is a web Application that displays information about countries through a RESTful API called <a href="https://restcountries.eu/" onclick="window.open(this.href); return false;">restcountries.eu/</a>.
              </li>
              <li>
                The application lets users to search for countries by name, country code, region, regional bloc, capital city, calling code and language.
              </li>
              <li>
                <u>Utilized</u> HTML, EJS, CSS, JavaScript, JQuery, Node.js, Express.js, Bootstrap, Heroku (launched on the Heroku platform <a href="https://countriesapplication.herokuapp.com/" onclick="window.open(this.href); return false;">here</a> with the GitHub repo <a href="https://github.com/DavidJohnnnn/CountriesApplication" onclick="window.open(this.href); return false;">here</a>).
              </li>

            </ul>
          </p>
        </div>
        <div class="col-md-6">

        </div>
      </div>

    </div>

  </section>

<?php
  include 'footer.php';
?>
