<!DOCTYPE html>
<html lang="en">

<head>
  <title>ARTA - Browse Apartments</title>
  <meta property="og:title" content="aBrowseApartments - Well Worn Thirsty Mole" />
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

<body>
  <div>
    <link href="./a-browse-apartments.css" rel="stylesheet" />

    <div class="a-browse-apartments-container">
      <header data-thq="thq-navbar" class="a-browse-apartments-navbar-interactive">
        <a href="index.php">
          <img alt="image" src="public/playground_assets/logo-300h.png" class="a-browse-apartments-image" />
        </a>
        <div data-thq="thq-navbar-nav" data-role="Nav" class="a-browse-apartments-desktop-menu">
          <nav data-thq="thq-navbar-nav-links" data-role="Nav" class="a-browse-apartments-nav"></nav>
        </div>
        <div data-thq="thq-navbar-btn-group" class="a-browse-apartments-btn-group">
          <a href="a-login.php">
            <button class="a-browse-apartments-login button">Login</button>
          </a>
          <a href="a-signup.php">
            <button class="button">Sign Up</button>
          </a>
        </div>
      </header>
      <div class="a-browse-apartments-banner">
        <h1 class="a-browse-apartments-text5">Browse Apartments</h1>
        <div class="a-browse-apartments-btn-group1"></div>
        <div class="a-browse-apartments-gallery">



            <script>
              function unit1(num) {
                localStorage.setItem("unit", num);
                window.location.href = "a-browse-view.php";
                // window.alert(num);
                return false;
              }
            </script>
            

        <!-- <form action="a-browse-view.php" style="display: inline;"> -->

          <div class="gallery-card1-gallery-card gallery-card1-root-class-name" onclick="unit1(1)">
            <img alt="image" src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/4aecba63-a849-4176-8a41-2ace4ad9f62b/dt4o2a-daef74bc-09d9-4564-a83e-ef2e74f0c6c2.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzRhZWNiYTYzLWE4NDktNDE3Ni04YTQxLTJhY2U0YWQ5ZjYyYlwvZHQ0bzJhLWRhZWY3NGJjLTA5ZDktNDU2NC1hODNlLWVmMmU3NGYwYzZjMi5qcGcifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6ZmlsZS5kb3dubG9hZCJdfQ.mqxJ2E--knbivRcX5Rbhncnze6yFrbyMPv0rek_zCfU" class="gallery-card1-image" />
            <h2 class="gallery-card1-text"><span>Apartment Unit 1</span></h2>
            <span class="gallery-card1-text1"><span>4-5 People</span></span>
          </div>


          <div class="gallery-card1-gallery-card gallery-card1-root-class-name1" onclick="unit1(2)">
            <img alt="image" src="https://friendshipvillage.org/dist/assets/img/tahoma-ko.png" class="gallery-card1-image" />
            <h2 class="gallery-card1-text"><span>Apartment Unit 2</span></h2>
            <span class="gallery-card1-text1"><span>1-3 People</span></span>
          </div>


          <div class="gallery-card1-gallery-card gallery-card1-root-class-name2" onclick="unit1(3)">
            <img alt="image" src="https://medialibrarycf.entrata.com/13886/MLv3/4/22/2022/3/26/16627/5af1321b671eb2.18354802219.jpg" class="gallery-card1-image" />
            <h2 class="gallery-card1-text"><span>Apartment Unit 3</span></h2>
            <span class="gallery-card1-text1"><span>5-7 People</span></span>
          </div>


          <div class="gallery-card1-gallery-card gallery-card1-root-class-name3" onclick="unit1(4)">
            <img alt="image" src="https://i.pinimg.com/originals/d1/da/15/d1da15bdaf357e55c623f0b049b8bba2.jpg" class="gallery-card1-image" />
            <h2 class="gallery-card1-text"><span>Apartment Unit 4</span></h2>
            <span class="gallery-card1-text1"><span>1-3 People</span></span>
          </div>


          <div class="gallery-card1-gallery-card gallery-card1-root-class-name4" onclick="unit1(5)">
            <img alt="image" src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/54ca4138-23b5-4871-98bd-116699c62fb3/ddk5ue0-41eaf051-c739-423e-a8e7-e34b376bf897.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzU0Y2E0MTM4LTIzYjUtNDg3MS05OGJkLTExNjY5OWM2MmZiM1wvZGRrNXVlMC00MWVhZjA1MS1jNzM5LTQyM2UtYThlNy1lMzRiMzc2YmY4OTcuanBnIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.uCoG5oq4uOKpK2-O1ddKkIVt4s3GiPY2Nubl0tBw3M0" class="gallery-card1-image" />
            <h2 class="gallery-card1-text"><span>Apartment Unit 5</span></h2>
            <span class="gallery-card1-text1"><span>2-4 People</span></span>
          </div>


        </div>
      </div>
      <footer class="a-browse-apartments-footer">
        <span class="a-browse-apartments-text6">
          © 2022 Apartment Rental Tracking System
        </span>
        <div class="a-browse-apartments-icon-group1"></div>
      </footer>
    </div>
  </div>
  <script data-section-id="navbar" src="https://unpkg.com/@teleporthq/teleport-custom-scripts"></script>
</body>

</html>