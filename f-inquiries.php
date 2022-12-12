<!DOCTYPE html>
<html lang="en">

<head>
  <title>Tenant - Inquiries</title>
  <meta property="og:title" content="fInquiries - Well Worn Thirsty Mole" />
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
    <link href="./f-inquiries.css" rel="stylesheet" />

    <div class="f-inquiries-container">
      <header data-thq="thq-navbar" class="f-inquiries-navbar-interactive">
        <img alt="image" src="public/playground_assets/logo-200h.png" class="f-inquiries-image" />
        <div data-thq="thq-navbar-nav" data-role="Nav" class="f-inquiries-desktop-menu">
          <nav data-thq="thq-navbar-nav-links" data-role="Nav" class="f-inquiries-nav"></nav>
        </div>
      </header>
      <div class="f-inquiries-hero">
        <div class="f-inquiries-container3" style="width: auto;">
          <div class="f-inquiries-sidebar" style="width: auto;">
            <nav class="f-inquiries-nav3" style="width: auto;">
              <span class="f-inquiries-text05"><a href="f-bills.php">BILLS</a></span>
              <span class="f-inquiries-text06"><a href="f-payment-history.php">PAYMENT HISTORY</a></span>
              <span class="f-inquiries-text07">
                <a href="f-browse-apartments.php">
                  <span>BROWSE</span>
                  <br />
                  <span>APARTMENTS</span>
                </a>
              </span>
              <span class="f-inquiries-text11">
                <a href="f-inquiries.php">
                  <span><b>INQUIRIES</b></span>
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
              <span><a href="f-logout.php">LOG OUT</a></span>
            </nav>
            <div class="f-inquiries-profile">
              <img alt="image" src="https://freepngimg.com/thumb/categories/3027.png" class="f-inquiries-image2" />
              <div class="f-inquiries-container4">
                <span id="name" class="f-inquiries-text20">Name</span>
                <span class="f-inquiries-text21">Tenant</span>
              </div>
            </div>
          </div>
        </div>
        <div class="f-inquiries-container5">
          <h1 class="f-inquiries-text22">&nbsp;INQUIRIES</h1>
          <div class="f-inquiries-container6">
            <!-- <h1 id="email" class="f-inquiries-text23">Email</h1>
            <span id="date" class="f-inquiries-text24">Date:&nbsp;</span>
            <span id="unit" class="f-inquiries-text25">Unit No.:</span>
            <span id="rent" class="f-inquiries-text26">Rent Fee:</span>
            <span id="status" class="f-inquiries-text27">Status:</span> -->
            <ul id="list" style="margin-left: 50px; margin-top: 20px; margin-bottom: 20px;">
            </ul>
          </div>
        </div>
      </div>
      <!-- <footer class="f-inquiries-footer">
        <span class="f-inquiries-text28">
          © 2022 Apartment Rental Tracking System
        </span>
        <div class="f-inquiries-icon-group1"></div>
      </footer> -->
      <div class="f-inquiries-btn-group1"></div>
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
    onValue
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
      // document.getElementById("name").style.fontSize = 10;


      //ASSIGNING TO A LIST
      var stdNo = 0;

      function addItemsToList(em, duedate, unitno, rentfee, stat) {
        var ul = document.getElementById("list");
        // var non =
        var header = document.createElement("h2");

        // var email = document.createElement("li");
        var date = document.createElement("p");
        var unit = document.createElement("p");
        var rent = document.createElement("p");
        var status = document.createElement("p");
        var space = document.createElement("p");

        // header.innerHTML = 'Bills-' + (stdNo++);

        header.innerHTML = em;
        date.innerHTML = "Due Date: " + duedate;
        unit.innerHTML = "Unit No.: " + unitno;
        rent.innerHTML = "Rent Fee (Monthly): " + rentfee;
        status.innerHTML = "Status " + stat;
        // space.innerHTML = "     " + space.value;
        status.style.color = "maroon";
        status.style.fontWeight = "700";
        status.style.marginBottom = "20px";



        ul.appendChild(header);
        // ul.appendChild(email);
        ul.appendChild(date);
        ul.appendChild(unit);
        ul.appendChild(rent);
        ul.appendChild(status);
        ul.appendChild(space);

      }

      const dbRef = ref(database, 'inquiries');

      onValue(dbRef, (snapshot) => {
        snapshot.forEach((childSnapshot) => {
          // const childKey = childSnapshot.key;
          // console.log(childSnapshot.val().date);
          // const childData = childSnapshot.val();

          let em = childSnapshot.val().email;
          // if (String(em) == String(nameX)) {

          if (em == nameX) {
            let dateDue = childSnapshot.val().date;
            let price = childSnapshot.val().price;
            let stats = childSnapshot.val().status;
            let unitz = childSnapshot.val().unit;
            let spec = "||||||||||||||||||||||||||";
            addItemsToList(childSnapshot.val().email, dateDue, unitz, price, stats);
          }
          // }
          // ...
        });
      }, {
        onlyOnce: true
      });

    } else {
      console.log("No data available");
    }
  }).catch((error) => {
    console.error(error);
  });
</script>

</html>