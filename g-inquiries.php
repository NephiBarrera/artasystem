<!DOCTYPE html>
<html lang="en">

<head>
  <title>Landlord - Manage Inquiries</title>
  <meta property="og:title" content="gInquiries - Well Worn Thirsty Mole" />
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
    <link href="./g-inquiries.css" rel="stylesheet" />

    <div class="g-inquiries-container">
      <header data-thq="thq-navbar" class="g-inquiries-navbar-interactive">
        <img alt="image" src="logo-200h.png" class="g-inquiries-image" />
        <div data-thq="thq-navbar-nav" data-role="Nav" class="g-inquiries-desktop-menu">
          <nav data-thq="thq-navbar-nav-links" data-role="Nav" class="g-inquiries-nav"></nav>
        </div>


        <div data-thq="thq-navbar-nav" data-role="Nav" class="g-inquiries-desktop-menu">
          <nav data-thq="thq-navbar-nav-links" data-role="Nav" class="g-inquiries-nav"></nav>
        </div>
        <div data-thq="thq-navbar-btn-group" class="g-inquiries-btn-group"></div>
        <div data-thq="thq-burger-menu" class="g-inquiries-burger-menu">
          <svg viewBox="0 0 1024 1024" class="g-inquiries-icon">
            <path d="M128 554.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 298.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 810.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667z"></path>
          </svg>
        </div>
        <div data-thq="thq-mobile-menu" class="g-inquiries-mobile-menu">
          <div data-thq="thq-mobile-menu-nav" data-role="Nav" class="g-inquiries-nav1">
            <div class="g-inquiries-container1">
              <h2 id="titular">APARTMENT RENTAL <br>TRACKING SYSTEM</h2>
              <div data-thq="thq-close-menu" class="g-inquiries-menu-close">
                <svg viewBox="0 0 1024 1024" class="g-inquiries-icon02">
                  <path d="M810 274l-238 238 238 238-60 60-238-238-238 238-60-60 238-238-238-238 60-60 238 238 238-238z"></path>
                </svg>
              </div>
            </div>

            <link rel="stylesheet" href="./g-concerns.css">
            <nav data-thq="thq-mobile-menu-nav-links" data-role="Nav" class="g-concerns-nav2">
              <a href="g-bills.php" style="padding: 15px 0px;">
                <span class="g-concerns-text">BILLS</span>
              </a>
              <a href="g-payment-history.php" style="padding: 15px 0px;">
                <span class="g-concerns-text01">PAYMENT HISTORY</span>
              </a>
              <a href="g-browse-apartments.php" style="padding: 15px 0px;">
                <span class="g-concerns-text02">BROWSE APARTMENTS</span>
              </a>
              <a href="g-inquiries.php" style="padding: 15px 0px;">
                <span class="g-concerns-text03">INQUIRIES</span>
              </a>
              <a href="g-concerns.php" style="padding: 15px 0px;">
                <span class="g-concerns-text04">CONCERNS</span>
              </a>
              <a href="g-logout.php" style="padding: 15px 0px;">
                <span class="g-concerns-text04">LOG OUT</span>
              </a>
            </nav>

          </div>

        </div>






      </header>
      <div class="g-inquiries-hero">
        <div class="g-inquiries-container3" style="width: auto;">
          <div class="g-inquiries-sidebar" style="width: auto;">
            <nav class="g-inquiries-nav3" style="width: auto;">
              <span class="g-inquiries-text05"><a href="g-bills.php">BILLS</a></span>
              <span class="g-inquiries-text06"><a href="g-payment-history.php">PAYMENT HISTORY</a></span>
              <span class="g-inquiries-text07">
                <a href="g-browse-apartments.php">
                  <span>BROWSE</span>
                  <br />
                  <span>APARTMENTS</span>
                </a>
              </span>
              <span class="g-inquiries-text11">
                <a href="g-inquiries.php">
                  <span><b>INQUIRIES</b></span>
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
            <div class="g-inquiries-profile">
              <img alt="image" src="https://w7.pngwing.com/pngs/526/292/png-transparent-building-management-house-apartment-kisumu-building-building-company-service.png" class="g-inquiries-image2" />
              <div class="g-inquiries-container4">
                <span id="name" class="g-inquiries-text20">Name</span>
                <span class="g-inquiries-text21">Landlord</span>
              </div>
            </div>
          </div>
        </div>
        <div class="g-inquiries-container5">
          <h1 class="g-inquiries-text22">&nbsp;INQUIRIES</h1>
          <div class="g-inquiries-container6" style="width: 600px;">

            <ul id="list" style="margin-left: 50px; margin-top: 20px; margin-bottom: 20px;">

            </ul>
            <!-- <h1 id="email" class="g-inquiries-text23">Email</h1>
            <span id="date" class="g-inquiries-text24">Date:&nbsp;</span>
            <span id="unit" class="g-inquiries-text25">Unit No.:</span>
            <div class="g-inquiries-container7">
              <span id="rent" class="g-inquiries-text26">Rent Fee:</span>
            </div>
            <span id="status" class="g-inquiries-text27">Status:</span> -->
            
            <div class="g-inquiries-container8">
              <!-- <button id="confirm" class="g-inquiries-button button">
                APPROVE
              </button>
              <button id="confirm" class="g-inquiries-button1 button">
                DECLINE
              </button> -->
            </div>
          </div>
        </div>
      </div>
      <!-- <footer class="g-inquiries-footer">
        <span class="g-inquiries-text28">
          © 2022 Apartment Rental Tracking System
        </span>
        <div class="g-inquiries-icon-group1"></div>
      </footer> -->
      <div class="g-inquiries-btn-group1"></div>
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
      document.getElementById("name").textContent = nameX;
      document.getElementById("titular").textContent = nameX + " \n(Landlord)";
      // document.getElementById("name").style.fontSize = 10;


      //ASSIGNING TO A LIST
      var stdNo = 0;

      var today = new Date();
      // var date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
      var date = today.getDate() + '-' + '1' + '-' + '2023';
      var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
      var dateTimedue = date + ' ' + time;

      function addItemsToList(em, duedate, unitno, price, stat, app) {
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
        var decline = document.createElement("button");

        // header.innerHTML = 'Bills-' + (stdNo++);

        header.innerHTML = em;
        date.innerHTML = "Date: " + duedate;
        unit.innerHTML = "Unit No.: " + unitno;
        rent.innerHTML = "Rent Fee: " + price;
        status.innerHTML = "Status: " + stat;
        decline.innerHTML = "DECLINE";
        approve.innerHTML = "APPROVE";

        // space.innerHTML = "     " + space.value;
        status.style.color = "maroon";
        status.style.fontWeight = "700";
        // status.style.marginBottom = "10px";

        //for the approve btn
        approve.classList.add("g-inquiries-button1");
        approve.style.backgroundColor = "black";
        approve.style.color = "white";
        approve.style.fontSize = "20px";
        approve.style.marginBottom = "40px";

        approve.addEventListener("click", function() {
          // INSERT DATA INTO DB
          // window.confirm(duedate);
          set(ref(database, 'inquiries/' + duedate), {
            email: em,
            date: duedate,
            unit: unitno,
            price: price,
            status: "APPROVED"
          })

          //send to bills2
          set(ref(database, 'bills/' + dateTimedue), {
            email: em,
            date: duedate,
            due_date: dateTimedue,
            unit: unitno,
            price: price,
            status: "UNPAID"
          })

          window.confirm("Inquiry for " + em + " successfully approved");
          window.location.href = "g-bills.php";
          
        })
        
        //for the decline btn
        decline.classList.add("g-inquiries-button");
        decline.style.color = "black";
        decline.style.backgroundColor = "lightgrey";
        decline.style.marginLeft = "2px";
        //if got declined
        decline.addEventListener("click", function() {
          set(ref(database, 'inquiries/' + duedate), {
            email: em,
            date: duedate,
            unit: unitno,
            price: price,
            status: "DECLINED"
          })
          window.confirm("Inquiry for " + em + " successfully declined");
          window.location.href = "g-inquiries.php";
          
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
        ul.appendChild(decline)

      }


  // GETTING THE LANDLORD NUMBER
  var landlordNum = 0;
      if (nameX.endsWith("1landlord@gmail.com")) {
            landlordNum = 1;
          };
          if (nameX.endsWith("2landlord@gmail.com")) {
            landlordNum = 2;
          };
          if (nameX.endsWith("3landlord@gmail.com")) {
            landlordNum = 3;
          };
          if (nameX.endsWith("4landlord@gmail.com")) {
            landlordNum = 4;
          };
          if (nameX.endsWith("5landlord@gmail.com")) {
            landlordNum = 5;
          };
          if (nameX.endsWith("6landlord@gmail.com")) {
            landlordNum = 6;
          };
          if (nameX.endsWith("7landlord@gmail.com")) {
            landlordNum = 7;
          };
          if (nameX.endsWith("8landlord@gmail.com")) {
            landlordNum = 8;
          };
          if (nameX.endsWith("9landlord@gmail.com")) {
            landlordNum = 9;
          };
          if (nameX.endsWith("10landlord@gmail.com")) {
            landlordNum = 10;
          };
          if (nameX.endsWith("11landlord@gmail.com")) {
            landlordNum = 11;
          };
          if (nameX.endsWith("12landlord@gmail.com")) {
            landlordNum = 12;
          };
          if (nameX.endsWith("13landlord@gmail.com")) {
            landlordNum = 13;
          };
          if (nameX.endsWith("14landlord@gmail.com")) {
            landlordNum = 14;
          };
          if (nameX.endsWith("15landlord@gmail.com")) {
            landlordNum = 15;
          };
          if (nameX.endsWith("16landlord@gmail.com")) {
            landlordNum = 16;
          };
          if (nameX.endsWith("17landlord@gmail.com")) {
            landlordNum = 17;
          };
          if (nameX.endsWith("18landlord@gmail.com")) {
            landlordNum = 18;
          };
          if (nameX.endsWith("19landlord@gmail.com")) {
            landlordNum = 19;;
          };
          if (nameX.endsWith("20landlord@gmail.com")) {
            landlordNum = 20;
          };


      const dbRef = ref(database, 'inquiries');

      onValue(dbRef, (snapshot) => {
        snapshot.forEach((childSnapshot) => {
          // const childKey = childSnapshot.key;
          // console.log(childSnapshot.val().date);
          // const childData = childSnapshot.val();

          let unitz = childSnapshot.val().unit;
          
          if (unitz == landlordNum) {
            let em = childSnapshot.val().email;
            let dateDue = childSnapshot.val().date;
            let price = childSnapshot.val().price;
            let stats = childSnapshot.val().status;
            let approve = childSnapshot.val().unit;

            if (stats != "APPROVED") {
              if (stats != "DECLINED") {
                addItemsToList(em, dateDue, unitz, price, stats, app);
              }
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


<style>
          @media (max-width: 600px) {
            .g-inquiries-container {
              width: 400px;
            }
            .g-inquiries-banner {
              width: 300px;
            }

            .g-inquiries-container3 {
              display: none;
              visibility: hidden;
            }

            .g-inquiries-container5 {
              width: 300px;
            }
            .g-inquiries-container6 {
              width: 250px;
              max-width: 300px;
              margin-left: 0;
            }

            .g-inquiries-text22 {
              margin-left: -12px;
            }
            #list{
              width: 200px;
              max-width: 200px;
              font-size: 10px;
            }
            button{
              font-size: 10px;
              margin: 0;
              margin-top: -50px;
            }
            

            .g-inquiries-container6 {
              width: auto;
              padding-right: 12px;
              padding-left: -24px;
            }
          }
        </style>

</html>
