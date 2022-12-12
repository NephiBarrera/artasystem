<!DOCTYPE html>
<html lang="en">

<head>
  <title>Tenant - Log Out</title>
  <meta property="og:title" content="fLogout - Well Worn Thirsty Mole" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="utf-8" />
  <meta property="twitter:card" content="summary_large_image" />

  <script language='javascript' type='text/javascript'>
    function DisableBackButton() {
      window.history.forward()
    }
    DisableBackButton();
    window.onload = DisableBackButton;
    window.onpageshow = function(evt) {
      if (evt.persisted) DisableBackButton()
    }
    window.onunload = function() {
      void(0)
    }
  </script>


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
    <link href="./f-logout.css" rel="stylesheet" />

    <div class="f-logout-container">
      <header data-thq="thq-navbar" class="f-logout-navbar-interactive">
        <img alt="image" src="public/playground_assets/logo-200h.png" class="f-logout-image" />
        <div data-thq="thq-navbar-nav" data-role="Nav" class="f-logout-desktop-menu">
          <nav data-thq="thq-navbar-nav-links" data-role="Nav" class="f-logout-nav"></nav>
        </div>
      </header>
      <div class="f-logout-hero">
        <div class="f-logout-container3" style="width: auto;">
          <div class="f-logout-sidebar" style="width: auto;">
            <nav class="f-logout-nav3" style="width: auto;">
              <span class="f-logout-text05"><a href="f-bills.php">BILLS</a></span>
              <span class="f-logout-text06"><a href="f-payment-history.php">PAYMENT HISTORY</a></span>
              <span class="f-logout-text07">
                <a href="f-browse-apartments.php">
                  <span>BROWSE</span>
                  <br />
                  <span>APARTMENTS</span>
                </a>
              </span>
              <span class="f-logout-text11">
                <a href="f-inquiries.php">
                  <span>INQUIRIES</span>
                  <br />
                </a>
              </span>
              <span>
                <a href="f-concerns.php">
                  <span>CONCERNS</span>
                  <br />
                  <br />
                  <br />
                </a>
              </span>
              <span><a href="f-logout.php"><b>LOG OUT</b></a></span>
            </nav>
            <div class="f-logout-profile">
              <img alt="image" src="https://freepngimg.com/thumb/categories/3027.png" class="f-logout-image2" />
              <div class="f-logout-container4">
                <span id="name" class="f-logout-text20">Name</span>
                <span class="f-logout-text21">Tenant</span>
              </div>
            </div>
          </div>
        </div>
        <div class="f-logout-container5">
          <h1 class="f-logout-text22">LOG OUT</h1>
          <span id="date" class="f-logout-text23">
            Please confirm your request to log out
          </span>
          <div class="f-logout-container6"></div>
          <div class="f-logout-container7">
            <div class="f-logout-container8">
              <button id="stayBtn" class="f-logout-button button">STAY</button>
            </div>
            <a href="index.php">
              <button class="f-logout-button1 button">LOG OUT</button>
            </a>
          </div>
        </div>
      </div>
      <!-- <footer class="f-logout-footer">
        <span class="f-logout-text24">
          © 2022 Apartment Rental Tracking System
        </span>
        <div class="f-logout-icon-group1"></div>
      </footer> -->
      <div class="f-logout-btn-group1"></div>
    </div>
  </div>
  <script data-section-id="navbar" src="https://unpkg.com/@teleporthq/teleport-custom-scripts"></script>
</body>

<script type="module">
  import {
    initializeApp
  } from "https://www.gstatic.com/firebasejs/9.14.0/firebase-app.js";
  import {
    getDatabase,
    ref,
    child,
    get,
    onValue,
    set
  } from "https://www.gstatic.com/firebasejs/9.14.0/firebase-database.js";

  // import { } from 'firebase/database';
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyDwNGOBDNeeoe4qd09OuxGSc_x1uF9dA6E",
    authDomain: "apartment-rta.firebaseapp.com",
    databaseURL: "https://apartment-rta-default-rtdb.firebaseio.com",
    projectId: "apartment-rta",
    storageBucket: "apartment-rta.appspot.com",
    messagingSenderId: "468740486079",
    appId: "1:468740486079:web:bd7268f32d03283102670a",
    measurementId: "G-8YSBMVV73F"
  };

  // window.confirm("jsed");
  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const database = getDatabase(app);
  const dbRef = ref(getDatabase());

  get(child(dbRef, "user_log/email")).then((snapshot) => {
    if (snapshot.exists()) {
      console.log(snapshot.val());
      var nameX = snapshot.val();
      document.getElementById("name").textContent = nameX;
      // document.getElementById("fromfrom").textContent = nameX;
      // var message = document.getElementById("message").value;
      // document.getElementById("name").style.fontSize = 10;

      document.getElementById("stayBtn").addEventListener("click", function() {
        // window.confirm("aasdnsajd");
        if (String(nameX) == "landlord_1@gmail.com" ||
          String(nameX) == "landlord_2@gmail.com" ||
          String(nameX) == "landlord_3@gmail.com" ||
          String(nameX) == "landlord_4@gmail.com" ||
          String(nameX) == "landlord_5@gmail.com") {
          window.alert("Welcome Back Landlord");
          window.location.href = "g-bills.php";
        } else {
          window.alert("Welcome Back Tenant");
          window.location.href = "f-bills.php";
        }
      })

    } else {
      console.log("No data available");
    }
  }).catch((error) => {
    console.error(error);
  });
</script>

</html>