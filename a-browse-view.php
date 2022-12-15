<!DOCTYPE html>
<html lang="en">

<head>
  <title>ARTA - View Apartments</title>
  <meta property="og:title" content="aBrowseView - Well Worn Thirsty Mole" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="utf-8" />
  <meta property="twitter:card" content="summary_large_image" />

  <style data-tag="reset-style-sheet">
    html {
      line-height: 1.15;
    }

    body {
      margin: 0;
    }

    * {
      box-sizing: border-box;
      border-width: 0;
      border-style: solid;
    }

    p,
    li,
    ul,
    pre,
    div,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    figure,
    blockquote,
    figcaption {
      margin: 0;
      padding: 0;
    }

    button {
      background-color: transparent;
    }

    button,
    input,
    optgroup,
    select,
    textarea {
      font-family: inherit;
      font-size: 100%;
      line-height: 1.15;
      margin: 0;
    }

    button,
    select {
      text-transform: none;
    }

    button,
    [type="button"],
    [type="reset"],
    [type="submit"] {
      -webkit-appearance: button;
    }

    button::-moz-focus-inner,
    [type="button"]::-moz-focus-inner,
    [type="reset"]::-moz-focus-inner,
    [type="submit"]::-moz-focus-inner {
      border-style: none;
      padding: 0;
    }

    button:-moz-focus,
    [type="button"]:-moz-focus,
    [type="reset"]:-moz-focus,
    [type="submit"]:-moz-focus {
      outline: 1px dotted ButtonText;
    }

    a {
      color: inherit;
      text-decoration: inherit;
    }

    input {
      padding: 2px 4px;
    }

    img {
      display: block;
    }

    html {
      scroll-behavior: smooth
    }
  </style>
  <style data-tag="default-style-sheet">
    html {
      font-family: Inter;
      font-size: 16px;
    }

    body {
      font-weight: 400;
      font-style: normal;
      text-decoration: none;
      text-transform: none;
      letter-spacing: normal;
      line-height: 1.15;
      color: var(--dl-color-gray-black);
      background-color: var(--dl-color-gray-white);

    }
  </style>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" data-tag="font" />
  <!--This is the head section-->
  <!-- <style> ... </style> -->
  <link rel="stylesheet" href="./style.css" />
</head>

<style>
            @media (max-width: 600px) {
              .a-browse-view-container8 {
                margin-top: -450px;
              }
              #title {
                text-align: center;
                margin-left: 50px;
              }
              #info {
                text-align: left;
                
              }
              
            /* .a-browse-view-container4 {
              display: none;
              visibility: hidden;
            } */
            .a-browse-view-image2 {
              margin-top: 100px;
            }
            /* .a-browse-view-container5{
              margin-top: -70px;
            } */
          }
</style>

<body>
  <div>
    <link href="./a-browse-view.css" rel="stylesheet" />

    <div class="a-browse-view-container">
      <header data-thq="thq-navbar" class="a-browse-view-navbar-interactive">
        <a href="index.php">
          <img alt="image" src="public/playground_assets/logo-200h.png" class="a-browse-view-image" />
        </a>
        <div data-thq="thq-navbar-nav" data-role="Nav" class="a-browse-view-desktop-menu">
          <nav data-thq="thq-navbar-nav-links" data-role="Nav" class="a-browse-view-nav"></nav>
        </div>
        <div data-thq="thq-navbar-btn-group" class="a-browse-view-btn-group">
          <a href="a-login.php">
            <button class="a-browse-view-login button">Login</button>
          </a>
          <a href="a-signup.php">
            <button class="button">Sign Up</button>
          </a>
        </div>
       
      </header>
      <div class="a-browse-view-banner">
        <div class="a-browse-view-btn-group1"></div>
        <div class="a-browse-view-hero">
          <div class="a-browse-view-container3">
            <div class="a-browse-view-container4">
              <img id="img1" alt="image" src="https://play.teleporthq.io/static/svg/default-img.svg" class="a-browse-view-image2" />
            </div>
            <div class="a-browse-view-container5">
              <img id="img2" alt="image" src="https://play.teleporthq.io/static/svg/default-img.svg" class="a-browse-view-image3" />
              <img id="img3" alt="image" src="https://play.teleporthq.io/static/svg/default-img.svg" class="a-browse-view-image4" />
              <img id="img4" alt="image" src="https://play.teleporthq.io/static/svg/default-img.svg" class="a-browse-view-image5" />
            </div>
          </div>
          <div class="a-browse-view-container6">
            <div class="a-browse-view-container7">
              <div class="a-browse-view-container8">
                <h1 id="title" class="a-browse-view-text05">Title</h1>
                <span id="info" class="a-browse-view-text06">
                  <span>Details</span>
                  <br />
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- <footer class="a-browse-view-footer">
        <span class="a-browse-view-text09">
          © 2022 Apartment Rental Tracking System
        </span>
        <div class="a-browse-view-icon-group1"></div>
      </footer> -->

      <link rel="stylesheet" href="./a-home.css">
      <header data-thq="thq-navbar" class="a-home-navbar-interactive" style="margin-top: 2em;">
        <span class="a-home-text6">
          © 2022 Apartment Rental Tracking System
        </span>
      </header>
    </div>
  </div>
  <script data-section-id="navbar" src="https://unpkg.com/@teleporthq/teleport-custom-scripts"></script>
</body>

<script>
  var unit = innerHTML = localStorage.getItem("unit");

  if (unit == 1) {
    document.getElementById("title").textContent = "Unit 1";
    var st1 = "1 Master Bedroom";
    document.getElementById("info").textContent = "The unit has 2 Bedrooms with \n" +
      "2 Shower Room. The area covers \n" +
      "50 sq. meter Living Room that can accomodate \n" +
      "4-5 person. There is a  \n" +
      "2 stair-connected floor. The landlord is \n" +
      "Hiyasden Labios and her contact number in \n 09297611062";

    document.getElementById("img1").src = "./assets/img/unit1a.jpg"
    document.getElementById("img2").src = "./assets/img/unit1b.jpg"
    document.getElementById("img3").src = "./assets/img/unit1c.jpg"
    document.getElementById("img4").src = "./assets/img/unit1d.jpg"

  }

  if (unit == 2) {
    document.getElementById("title").textContent = "Unit 2";
    var st1 = "1 Master Bedroom";
    document.getElementById("info").textContent = "A one Master Bedroom with " +
      "1 Shower. The has is " +
      "20 sq. meter Living Room that can accomodate \n" +
      "1-3 person. The apartment is  \n \n" +
      "Studio Type. The \n" +
      "Landlord is Mae Reyes. Her \n" +
      "Contact number is 09557737654";

    document.getElementById("img1").src = "./assets/img/unit2a.jpg"
    document.getElementById("img2").src = "./assets/img/unit2b.jpg"
    document.getElementById("img3").src = "./assets/img/unit2c.jpg"
    document.getElementById("img4").src = "./assets/img/unit2d.jpg"
  }

  if (unit == 3) {
    document.getElementById("title").textContent = "Unit 1";
    var st1 = "1 Master Bedroom";
    document.getElementById("info").textContent = "The unit has 2 small Bedrooms\n" +
      " sharing a single Shower. The area is \n" +
      "80 sq. meter Living Room that can accomododate \n" +
      "5-7 person. \n" +
      "There is a 2 stair floor and the landlord is\n" +
      " JJ Borantes\n" +
      " and her Contact number is 09552147298";

    document.getElementById("img1").src = "./assets/img/unit3a.jpg"
    document.getElementById("img2").src = "./assets/img/unit3b.jpg"
    document.getElementById("img3").src = "./assets/img/unit3c.jpg"
    document.getElementById("img4").src = "./assets/img/unit3d.jpg"
  }

  if (unit == 4) {
    document.getElementById("title").textContent = "Unit 1";
    var st1 = "1 Master Bedroom";
    document.getElementById("info").textContent = "A 1 Bedroom and \n" +
      "1 Shower unit. Spanning for \n" +
      "30 sq. meter Living Room ideal for \n" +
      "1-3 person. The unit is \n" +
      "Studio Type and the \n" +
      "Landlord is Josha Diestro and his \n" +
      "Contact number is 09124502687";

    document.getElementById("img1").src = "./assets/img/unit4a.jpg"
    document.getElementById("img2").src = "./assets/img/unit4b.jpg"
    document.getElementById("img3").src = "./assets/img/unit4c.jpg"
    document.getElementById("img4").src = "./assets/img/unit4d.jpg"
  }

  if (unit == 5) {
    document.getElementById("title").textContent = "Unit 1";
    var st1 = "1 Master Bedroom";
    document.getElementById("info").textContent = "A 2 Small Bedroom unit with \n" +
      "2 Shower. The area spans up to \n" +
      "40 sq. meters ideal for \n" +
      "2-4 person living space. The unit is \n" +
      "Studio Type and the \n" +
      "Landlord is May Santos \n" +
      "with her Contact number is 09127625153";

    document.getElementById("img1").src = "./assets/img/unit5a.jpg"
    document.getElementById("img2").src = "./assets/img/unit5b.jpg"
    document.getElementById("img3").src = "./assets/img/unit5c.jpg"
    document.getElementById("img4").src = "./assets/img/unit5d.jpg"
  }
</script>

</html>