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
  $cardTitle = "MY HISTORY";
  $cardText = '
  This page focuses on some of my highlights over the past few years that I feel are relevant.
  <br>
  <br>
  <small>
    This element is something I made myself using some Bootstrap and a lot of custom CSS and JavaScript (you can see more if you search the css, js and html files for "RevealCard".
    <a href="https://github.com/DavidJohnnnn/My-Own-Website" class="btn btn-outline-info btn-sm" role="button" aria-pressed="true">Check out the repo</a>
    <br>
    <br>
    Press this section again to close.
  </small>';
  include 'revealCard.php';

?>

  <section class="FourBlock">
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
              <b><em>
                Earned a Certificate of Distinction for being one of the top 20 Electrical and Computer Engineering Capstone Design Projects for the school year.
              </em></b>
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
          The Market Assessment & Compliance Division (MACD) of the Independent Electricity System Operator (IESO) is responsible for monitoring & enforcing compliance with the Market Rules for the Ontario Electricity Market, which include criteria & standards established by the IESO, the North American Electric Reliability Corporation (NERC) & the Northeast Power Coordinating Council (NPCC), to ensure the reliable operation of Ontario’s power system, referred to as the IESO-controlled grid. Collectively I will refer to these rules as “reliability standards”. These reliability standards apply to participants within the Ontario Electricity Market (“Market Participants” or MPs for short).
          <ul>
            <li>
              Assisted in thoroughly evaluating the evidence provided by MPs as proof of compliance with the reliability standards: MPs provide exhaustive information on their power facilities (equipment testing documents, single line diagrams, etc) & part of my work was scrutinizing this information for any potential non-compliance with the reliability standards.
            </li>
            <li>
              Recorded my findings in technically written reports & later presented these findings at team meetings.
            </li>
            <li>
              Assisted in assessing the impact of possible breaches of reliability standards on the reliability of the IESO-controlled grid.
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
              Built this website writing with my own code and Bootstrap templates, using HTML, CSS, and Javascript (J-Query) to style and animate the site.
            </li>
            <li>
              Devising and writing out the majority of the animations that you can see using a few neat tricks I discovered through some trial and error.
            </li>
            <li>
              Designing the style of the website through even more trial and error.
            </li>
          </ul>
        </p>
      </div>
      <div class="col-6-md">

      </div>
    </div>
  </section>

<?php
  include 'footer.php';
?>
