<!DOCTYPE html>
<html lang="en">

<head>
  <title>Landlord - Manage Bills</title>
  <meta property="og:title" content="gBills - Well Worn Thirsty Mole" />
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
    <link href="./g-bills.css" rel="stylesheet" />

    <div class="g-bills-container">
      <header data-thq="thq-navbar" class="g-bills-navbar-interactive">
        <img alt="image" src="public/playground_assets/logo-200h.png" class="g-bills-image" />
        <div data-thq="thq-navbar-nav" data-role="Nav" class="g-bills-desktop-menu">
          <nav data-thq="thq-navbar-nav-links" data-role="Nav" class="g-bills-nav"></nav>
        </div>


        <style>
          @media (max-width: 600px) {
            .g-bills-banner {
              width: 600px;
            }

            .g-bills-container3 {
              display: none;
              visibility: hidden;

            }

            .g-bills-container5 {
              width: 500px;
            }

            .g-bills-container6 {
              width: 400px;
            }

            .g-bills-text22 {
              margin-left: -12px;
            }

            .g-bills-container6 {
              width: auto;
              padding-right: 12px;
              padding-left: -24px;
            }
          }
        </style>
        <div data-thq="thq-navbar-nav" data-role="Nav" class="g-bills-desktop-menu">
          <nav data-thq="thq-navbar-nav-links" data-role="Nav" class="g-bills-nav"></nav>
        </div>
        <div data-thq="thq-navbar-btn-group" class="g-bills-btn-group"></div>
        <div data-thq="thq-burger-menu" class="g-bills-burger-menu">
          <svg viewBox="0 0 1024 1024" class="g-bills-icon">
            <path d="M128 554.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 298.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 810.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667z"></path>
          </svg>
        </div>
        <div data-thq="thq-mobile-menu" class="g-bills-mobile-menu">
          <div data-thq="thq-mobile-menu-nav" data-role="Nav" class="g-bills-nav1">
            <div class="g-bills-container1">
              <h2 id="titular">APARTMENT RENTAL <br>TRACKING SYSTEM</h2>
              <div data-thq="thq-close-menu" class="g-bills-menu-close">
                <svg viewBox="0 0 1024 1024" class="g-bills-icon02">
                  <path d="M810 274l-238 238 238 238-60 60-238-238-238 238-60-60 238-238-238-238 60-60 238 238 238-238z"></path>
                </svg>
              </div>
            </div>

            <link rel="stylesheet" href="./g-bills.css">
            <nav data-thq="thq-mobile-menu-nav-links" data-role="Nav" class="g-bills-nav2">
              <a href="g-bills.php" style="padding: 15px 0px;">
                <span class="g-bills-text">BILLS</span>
              </a>
              <a href="g-payment-history.php" style="padding: 15px 0px;">
                <span class="g-bills-text01">PAYMENT HISTORY</span>
              </a>
              <a href="g-browse-apartments.php" style="padding: 15px 0px;">
                <span class="g-bills-text02">BROWSE APARTMENTS</span>
              </a>
              <a href="g-inquiries.php" style="padding: 15px 0px;">
                <span class="g-bills-text03">INQUIRIES</span>
              </a>
              <a href="g-concerns.php" style="padding: 15px 0px;">
                <span class="g-bills-text04">CONCERNS</span>
              </a>
              <a href="g-logout.php" style="padding: 15px 0px;">
                <span class="g-bills-text04">LOG OUT</span>
              </a>
            </nav>

          </div>

        </div>






      </header>
      <div class="g-bills-banner">
        <div class="g-bills-btn-group1"></div>
        <div class="g-bills-hero">
          <div class="g-bills-container3" style="width: auto;">
            <div class="g-bills-sidebar" style="width: auto;">
              <nav class="g-bills-nav3" style="width: auto;">

                <span class="g-bills-text05"><a href="g-bills.php"><b>BILLS</b></a></span>
                <span class="g-bills-text06"><a href="g-payment-history.php">PAYMENT HISTORY</a></span>
                <span class="g-bills-text07">
                  <a href="g-browse-apartments.php">
                    <span>BROWSE</span>
                    <br />
                    <span>APARTMENTS</span>
                  </a>
                </span>
                <span class="g-bills-text11">
                  <a href="g-inquiries.php">
                    <span>INQUIRIES</span>
                    <br />
                  </a>
                </span>
                <span>
                  <a href="g-concerns.php">
                    <span>CONCERNS</span>
                    <br />
                    <br />
                    <br />
                  </a>
                </span>
                <span><a href="g-logout.php">LOG OUT</a></span>
              </nav>
              <div class="g-bills-profile">
                <img alt="image" src="https://w7.pngwing.com/pngs/526/292/png-transparent-building-management-house-apartment-kisumu-building-building-company-service.png" class="g-bills-image2" />
                <div class="g-bills-container4">
                  <span id="name" class="g-bills-text20">Name</span>
                  <span class="g-bills-text21">Landlord</span>
                </div>
              </div>
            </div>
          </div>
          <div class="g-bills-container5">
            <h1 class="g-bills-text22">&nbsp; BILLS</h1>
            <div class="g-bills-container6" style="width: 600px;">

              <ul id="list" style="margin-left: 50px; margin-top: 20px; margin-bottom: 20px;">

              </ul>
              <!-- <h1 id="email" class="g-bills-text23">Emal</h1>
                <span id="date" class="g-bills-text24">Due Date:&nbsp;</span>
                <span id="unit" class="g-bills-text25">Unit No.:</span>
                <div class="g-bills-container7">
                  <span id="rent" class="g-bills-text26">Rent Fee:</span>
                </div>
                <span id="status" class="g-bills-text27">Status:</span> -->
              <!-- <button id="confirm" class="g-bills-button button">
                  CONFIRM PAYMENT
                </button> -->
            </div>
          </div>
        </div>
      </div>
      <!-- <footer class="g-bills-footer">
        <span class="g-bills-text28">
          © 2022 Apartment Rental Tracking System
        </span>
        <div class="g-bills-icon-group1"></div>
      </footer> -->
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
    set,
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
      // window.confirm(nameX);
      document.getElementById("name").textContent = nameX;
      // document.getElementById("name").style.fontSize = 10;


      //ASSIGNING TO A LIST
      var stdNo = 0;

      var today = new Date();
      // var date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
      var date = today.getDate() + '-' + '1' + '-' + '2023';
      var todaytoday = today.getDate() + '-' + (today.getMonth() + 1) + '-' + today.getFullYear();
      var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
      var dateTimedue = date + ' ' + time;

      var realDay = todaytoday + ' ' + time;



      // window.confirm(landlordNum + tenantNum);



      function addItemsToList(em, date, unitno, price, stat, app, dateDue) {
        var ul = document.getElementById("list");
        // var non =
        var header = document.createElement("h2");

        // var email = document.createElement("li");
        var date = document.createElement("p");
        var unit = document.createElement("p");
        var rent = document.createElement("p");
        var status = document.createElement("p");
        var space = document.createElement("p");
        var approve = document.createElement("button");
        // var decline = document.createElement("button");

        // header.innerHTML = 'Bills-' + (stdNo++);

        header.innerHTML = em;
        // date.innerHTML = "Date Approved: " + duedate;
        date.innerHTML = "Due Date: " + dateDue;
        unit.innerHTML = "Unit No.: " + unitno;
        rent.innerHTML = "Rent Fee: " + price;
        status.innerHTML = "Status " + stat;
        approve.innerHTML = "CONFIRM PAYMENT";

        // space.innerHTML = "     " + space.value;
        status.style.color = "maroon";
        status.style.fontWeight = "700";
        // status.style.marginBottom = "10px";

        //for the approve btn
        approve.classList.add("g-bills-button");
        approve.style.backgroundColor = "black";
        approve.style.color = "white";
        approve.style.fontSize = "20px";
        approve.style.marginBottom = "40px";

        approve.addEventListener("click", function() {
          // INSERT DATA INTO DB
          // window.confirm(duedate);
          set(ref(database, 'bills/' + dateDue), {
            email: em,
            date: date,
            due_date: dateDue,
            unit: unitno,
            price: price,
            status: "PAID"
          })

          //send to payment hist
          set(ref(database, 'pay_history/' + dateDue), {
            email: em,
            paid_date: realDay,
            due_date: dateDue,
            unit: unitno,
            price: price,
            status: "PAID"
          })

          window.confirm("Payment for " + em + " successfully confirmed");
          window.location.href = "g-bills.php";

        })




        // decline.style.height="15px";



        ul.appendChild(header);
        // ul.appendChild(email);
        ul.appendChild(date);
        ul.appendChild(unit);
        ul.appendChild(rent);
        ul.appendChild(status);
        // ul.appendChild(approve);
        ul.appendChild(approve)
        // ul.appendChild(decline)

      }



      // GETTING THE LANDLORD NUMBER
      var landlordNum = 0;
      var tenantNum;
      if (String(nameX) == "landlord_1@gmail.com") {
        landlordNum = 1;
        tenantNum = "_tenant1@gmail.com"
      }
      if (String(nameX) == "landlord_2@gmail.com") {
        landlordNum = 2;
        tenantNum = "_tenant2@gmail.com"
      }
      if (String(nameX) == "landlord_3@gmail.com") {
        landlordNum = 3;
        tenantNum = "_tenant3@gmail.com"
      }
      if (String(nameX) == "landlord_4@gmail.com") {
        landlordNum = 4;
        tenantNum = "_tenant4@gmail.com"
      }
      if (String(nameX) == "landlord_5@gmail.com") {
        landlordNum = 5;
        tenantNum = "_tenant5@gmail.com"
      }

      const dbRef = ref(database, 'bills');

      onValue(dbRef, (snapshot) => {
        snapshot.forEach((childSnapshot) => {
          // const childKey = childSnapshot.key;
          // console.log(childSnapshot.val().date);
          // const childData = childSnapshot.val();
          let em = childSnapshot.val().email;
          // if (String(em) == String(nameX)) {
          if (String(em).endsWith(tenantNum)) {

            let date = childSnapshot.val().date;
            let dateDue = childSnapshot.val().due_date;
            let price = childSnapshot.val().price;
            let stats = childSnapshot.val().status;
            let unitz = childSnapshot.val().unit;
            let approve = childSnapshot.val().unit;

            if (stats != "PAID") {
              addItemsToList(em, date, unitz, price, stats, app, dateDue);
            }
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