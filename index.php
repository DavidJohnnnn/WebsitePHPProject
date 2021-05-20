<!--

All images used were taken from the following website and placed in the public domain:

https://live.staticflickr.com/7675/16662196134_44e1bf8836_b.jpg
https://www.flickr.com/photos/132795455@N08/16662196134
"Snow Covered Mountain Landscape" by Image Catalog is marked under CC0 1.0. To view the terms, visit https://creativecommons.org/licenses/cc0/1.0/


https://www.flickr.com/photos/63339095@N05/8441280651
"Peeling Paint - Free texture / background" by Karen Kleis is marked under CC PDM 1.0. To view the terms, visit https://creativecommons.org/publicdomain/mark/1.0/

 -->

<?php
  $tabTitle = "I'm David John";
  $favicon = "initial_favicon.ico";
  $pageID= "001-indexPage";
  include 'header.php';

  include 'titleBar.php';

  $quoteHTML = '<div class="card mb-3 indexQuote displayNone qtextShadow"><h5 class="card-title"><a href="https://github.com/DavidJohnnnn/My-Own-Website">"EVERYTHING<br>YOU CAN IMAGINE<br>IS REAL"<br>&nbsp;&nbsp;&nbsp;- Picasso</a></h5></div>';
  include 'lgContainerDiv.php';


  $position = "Shitotsu";
  $cardTitle = "Purpose";
  $cardText = 'My name is David and this is my website. This website contains some useful information about me. I am an Electrical Engineering Graduate from the University of Toronto, St. George Campus (BASc) in search of programming and web development work. You can explore this website to learn more about me.
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

  $FeaturedImgIndex = "FeaturedImgIndex";
  $paragraph = "If you want to get in contact, you can reach me on Linked In.";
  $link = "https://www.linkedin.com/in/david-j-john/";
  $linkText = "Here I am!";
  include 'featuredTextDiv.php';

  include 'footer.php';
?>
