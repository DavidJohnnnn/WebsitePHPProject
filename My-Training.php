<!--

All images used were taken from the following website and placed in the public domain:

https://www.flickr.com/photos/54563451@N08/9557945702
"ticktrefoil flower with dew, MD, PG County_2013-08-20-12.44.12 ZS PMax" by Sam Droege is marked under CC PDM 1.0. To view the terms, visit https://creativecommons.org/publicdomain/mark/1.0/

https://www.flickr.com/photos/128972682@N04/15868152963
"Cool and Awesome Nature in HD" by Ⓔⓛⓘⓢⓔ ❀❁ is marked under CC0 1.0. To view the terms, visit https://creativecommons.org/licenses/cc0/1.0/

https://www.flickr.com/photos/48660975@N02/19663096295
"Background" by redcctshirt is marked under CC0 1.0. To view the terms, visit https://creativecommons.org/licenses/cc0/1.0/

https://live.staticflickr.com/7675/16662196134_44e1bf8836_b.jpg
https://www.flickr.com/photos/132795455@N08/16662196134
"Snow Covered Mountain Landscape" by Image Catalog is marked under CC0 1.0. To view the terms, visit https://creativecommons.org/licenses/cc0/1.0/


 -->

<?php

  $tabTitle = "My Training";
  $favicon = "006Favicon.ico";
  $pageID= "003-Page";
  include 'header.php';

  include 'titleBar.php';

  $pageClass = "pg3LgContainer";
  $quoteHTML = '';
  include 'lgContainerDiv.php';

  $position = "Ichi";
  $cardTitle = "My Training";
  $cardText = '
  This page deals with my university program and the skills I have picked up through both my university experience as well as learning on my own time.
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

  <!-- Div Section containing Education Section -->
  <section>
    <div class="container-fluid" style="text-align: left; margin: 100px auto; width: 90%; ">
      <div class="card" style="border-width: 3px; border-style: solid none;">
        <div class="card-body" style="background-color: #eaeaea;">

          <h5 class="card-title" style="font-size: 6rem;">Education</h5>
          <p class="card-text" style="font-size: 1.25rem;">
            Graduated from the University of Toronto, St. George Campus with a Bachelor of Applied Science in Electrical Engineering (May 2019)
            <br><br>
            <ul>
              <li>
                I entered the University of Toronto in 2014 and had a professional experience year between my third and fourth year at the Independent Electricity System Operator.
              </li>
              <li>
                I spent a lot of time on different projects individually and on teams being both project leader and project member. I met a lot of great and interesting people, a few of which became lifetime friends.
              </li>
              <li>
                I also refined my ability to work on my own especially during my work experience considering how different the field is to conventional U of T engineering subjects. Additionally after I graduated, I did a number of online courses in order to gain more knowledge and understanding for Java, Python, databases and web dev.
              </li>
            </ul>
          </p>

        </div>
      </div>
    </div>
  </section>

  <!-- Bootstrap Carousel containing Skills listing -->
  <section style="margin: 250px 0 100px;">
    <div id="carouselExampleInterval" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-interval="5000">
          <div class="card FeaturedUsers First">
            <h2 class="FeatTitleUsers">Programming</h2>
            <p class="FeatPghUsers">
              Proficient: Java, Python, HTML, CSS, JavaScript, PostgreSQL, MATLAB, JQuery, Git
              <br><br>
              Familiar: Bootstrap, EJS, C/C++, Node.js, Express.js, PHP, APIs, Bash Shell scripting, TCP/IP, UDP, DNS, JSON, XML
            </p>
          </div>
        </div>
        <div class="carousel-item">
          <div class="card FeaturedUsers Second">
            <h2 class="FeatTitleUsers">Applications and OSs</h2>
            <p class="FeatPghUsers">
              Google Workspace, Microsoft Office, Microsoft Outlook, Atom, IntelliJ IDEA, Github Desktop, Slack, Hyper, Heroku, PgAdmin4, Processing IDE, Postman, SQL Shell (Psql), Wireshark, Notepad++, SVN
              <br><br>
              Windows, Mac OSX, Linux
            </p>
          </div>
        </div>
        <div class="carousel-item" data-interval="2000">
          <div class="card FeaturedUsers Third">
            <h2 class="FeatTitleUsers">Other Relevant University Courses</h2>
            <p class="FeatPghUsers">
              Introduction to Databases, Computer Networks, Internetworking, Algorithms and Data Structures, Leadership in Project Management, The Art of Ethical & Equitable Decision Making in Engineering
            </p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>

<?php
  include 'footer.php';
?>
