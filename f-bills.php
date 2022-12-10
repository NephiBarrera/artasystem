<!DOCTYPE html>
<html lang="en">

<head>
  <title>fBills - Well Worn Thirsty Mole</title>
  <meta property="og:title" content="fBills - Well Worn Thirsty Mole" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="utf-8" />
  <meta property="twitter:card" content="summary_large_image" />
  <script src='https://cdn.firebase.com/js/client/2.2.1/firebase.js'></script>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
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
    <link href="./f-bills.css" rel="stylesheet" />

    <div class="f-bills-container">
      <header data-thq="thq-navbar" class="f-bills-navbar-interactive">
        <img alt="image" src="public/playground_assets/logo-200h.png" class="f-bills-image" />
        <div data-thq="thq-navbar-nav" data-role="Nav" class="f-bills-desktop-menu">
          <nav data-thq="thq-navbar-nav-links" data-role="Nav" class="f-bills-nav"></nav>
        </div>
        <div data-thq="thq-navbar-btn-group" class="f-bills-btn-group"></div>
        <div data-thq="thq-burger-menu" class="f-bills-burger-menu">
          <svg viewBox="0 0 1024 1024" class="f-bills-icon">
            <path d="M128 554.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 298.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 810.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667z"></path>
          </svg>
        </div>
        <div data-thq="thq-mobile-menu" class="f-bills-mobile-menu">
          <div data-thq="thq-mobile-menu-nav" data-role="Nav" class="f-bills-nav1">
            <div class="f-bills-container1">
              <img alt="image" src="https://presentation-website-assets.teleporthq.io/logos/logo.png" class="f-bills-image1" />
              <div data-thq="thq-close-menu" class="f-bills-menu-close">
                <svg viewBox="0 0 1024 1024" class="f-bills-icon02">
                  <path d="M810 274l-238 238 238 238-60 60-238-238-238 238-60-60 238-238-238-238 60-60 238 238 238-238z"></path>
                </svg>
              </div>
            </div>
            <nav data-thq="thq-mobile-menu-nav-links" data-role="Nav" class="f-bills-nav2">
              <span class="f-bills-text">About</span>
              <span class="f-bills-text01">Features</span>
              <span class="f-bills-text02">Pricing</span>
              <span class="f-bills-text03">Team</span>
              <span class="f-bills-text04">Blog</span>
            </nav>
            <div class="f-bills-container2">
              <button class="f-bills-login button">Login</button>
              <button class="button">Register</button>
            </div>
          </div>
          <div class="f-bills-icon-group">
            <svg viewBox="0 0 950.8571428571428 1024" class="f-bills-icon04">
              <path d="M925.714 233.143c-25.143 36.571-56.571 69.143-92.571 95.429 0.571 8 0.571 16 0.571 24 0 244-185.714 525.143-525.143 525.143-104.571 0-201.714-30.286-283.429-82.857 14.857 1.714 29.143 2.286 44.571 2.286 86.286 0 165.714-29.143 229.143-78.857-81.143-1.714-149.143-54.857-172.571-128 11.429 1.714 22.857 2.857 34.857 2.857 16.571 0 33.143-2.286 48.571-6.286-84.571-17.143-148-91.429-148-181.143v-2.286c24.571 13.714 53.143 22.286 83.429 23.429-49.714-33.143-82.286-89.714-82.286-153.714 0-34.286 9.143-65.714 25.143-93.143 90.857 112 227.429 185.143 380.571 193.143-2.857-13.714-4.571-28-4.571-42.286 0-101.714 82.286-184.571 184.571-184.571 53.143 0 101.143 22.286 134.857 58.286 41.714-8 81.714-23.429 117.143-44.571-13.714 42.857-42.857 78.857-81.143 101.714 37.143-4 73.143-14.286 106.286-28.571z"></path>
            </svg><svg viewBox="0 0 877.7142857142857 1024" class="f-bills-icon06">
              <path d="M585.143 512c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286 65.714 146.286 146.286 146.286 146.286-65.714 146.286-146.286zM664 512c0 124.571-100.571 225.143-225.143 225.143s-225.143-100.571-225.143-225.143 100.571-225.143 225.143-225.143 225.143 100.571 225.143 225.143zM725.714 277.714c0 29.143-23.429 52.571-52.571 52.571s-52.571-23.429-52.571-52.571 23.429-52.571 52.571-52.571 52.571 23.429 52.571 52.571zM438.857 152c-64 0-201.143-5.143-258.857 17.714-20 8-34.857 17.714-50.286 33.143s-25.143 30.286-33.143 50.286c-22.857 57.714-17.714 194.857-17.714 258.857s-5.143 201.143 17.714 258.857c8 20 17.714 34.857 33.143 50.286s30.286 25.143 50.286 33.143c57.714 22.857 194.857 17.714 258.857 17.714s201.143 5.143 258.857-17.714c20-8 34.857-17.714 50.286-33.143s25.143-30.286 33.143-50.286c22.857-57.714 17.714-194.857 17.714-258.857s5.143-201.143-17.714-258.857c-8-20-17.714-34.857-33.143-50.286s-30.286-25.143-50.286-33.143c-57.714-22.857-194.857-17.714-258.857-17.714zM877.714 512c0 60.571 0.571 120.571-2.857 181.143-3.429 70.286-19.429 132.571-70.857 184s-113.714 67.429-184 70.857c-60.571 3.429-120.571 2.857-181.143 2.857s-120.571 0.571-181.143-2.857c-70.286-3.429-132.571-19.429-184-70.857s-67.429-113.714-70.857-184c-3.429-60.571-2.857-120.571-2.857-181.143s-0.571-120.571 2.857-181.143c3.429-70.286 19.429-132.571 70.857-184s113.714-67.429 184-70.857c60.571-3.429 120.571-2.857 181.143-2.857s120.571-0.571 181.143 2.857c70.286 3.429 132.571 19.429 184 70.857s67.429 113.714 70.857 184c3.429 60.571 2.857 120.571 2.857 181.143z"></path>
            </svg><svg viewBox="0 0 602.2582857142856 1024" class="f-bills-icon08">
              <path d="M548 6.857v150.857h-89.714c-70.286 0-83.429 33.714-83.429 82.286v108h167.429l-22.286 169.143h-145.143v433.714h-174.857v-433.714h-145.714v-169.143h145.714v-124.571c0-144.571 88.571-223.429 217.714-223.429 61.714 0 114.857 4.571 130.286 6.857z"></path>
            </svg>
          </div>
        </div>
      </header>
      <div class="f-bills-banner">
        <div class="f-bills-btn-group1"></div>
        <div class="f-bills-hero">
          <div class="f-bills-container3">
            <div class="f-bills-sidebar">
              <nav class="f-bills-nav3">
                <svg viewBox="0 0 1024 1024" class="f-bills-icon10">
                  <path d="M128 554.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 298.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 810.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667z"></path>
                </svg>
                <span class="f-bills-text05"><a href="f-bills.php"><b>BILLS</b></a></span>
                <span class="f-bills-text06"><a href="f-payment-history.php">PAYMENT HISTORY</a></span>
                <span class="f-bills-text07">
                  <a href="f-browse-apartments.php">
                    <span>BROWSE</span>
                    <br />
                    <span>APARTMENTS</span>
                  </a>
                </span>
                <span class="f-bills-text11">
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
                <span><a href="f-logout.php">LOG OUT</a></span>
              </nav>
              <div class="f-bills-profile">
                <img alt="image" src="https://freepngimg.com/thumb/categories/3027.png" class="f-bills-image2" />
                <div class="f-bills-container4">
                  <span id="name" class="f-bills-text20" style="font-size: 12px;">Name</span>
                  <span class="f-bills-text21">Tenant</span>
                </div>
              </div>
            </div>
          </div>
          <div class="f-bills-container5" style=" margin-bottom: 20px;"">
            <h1 class="f-bills-text22">&nbsp; BILLS</h1>


            <div class="f-bills-container6" style="height: auto;  margin-bottom: 20px;"">
              <ul id="list" style="margin-left: 50px; margin-top: 20px; margin-bottom: 20px;">
                <!-- <h1 id="header" class="f-bills-text23">Emal</h1> -->
                <!-- <span id="date" class="f-bills-text24">Due Date:&nbsp;</span>
                <span id="unit" class="f-bills-text25">Unit No.:</span>
                <span id="rent" class="f-bills-text26">Rent Fee:</span>
                <span id="status" class="f-bills-text27">Status:</span> -->
              </ul>
              <br>
            </div>
          </div>
        </div>
      </div>
      <!-- <footer class="f-bills-footer">
        <span class="f-bills-text28">
          © 2022 Apartment Rental Tracking System
        </span>
        <div class="f-bills-icon-group1"></div>
      </footer> -->
    </div>
  </div>
  <script data-section-id="navbar" src="https://unpkg.com/@teleporthq/teleport-custom-scripts"></script>
</body>


<!-- FOR GETTING THE NAME -->
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
      // document.getElementById("name").style.fontSize = 10;


      //ASSIGNING TO A LIST
      var stdNo = 0;

      var today = new Date();
      // var date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
      var date = today.getDate() + '-' + '1' + '-' + '2023';
      var todaytoday = today.getDate() + '-' + (today.getMonth()+1) + '-' + today.getFullYear();
      var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
      var dateTimedue = date + ' ' + time;

      var realDay = todaytoday + ' ' + time;



      function addItemsToList(em, date, unitno, price, stat, app) {
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
        date.innerHTML = "Due Date: " + dateTimedue;
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
        status.style.marginBottom = "40px";

        approve.addEventListener("click", function() {
          // INSERT DATA INTO DB
          // window.confirm(duedate);
          set(ref(database, 'bills/' + dateTimedue), {
            email: em,
            date: date,
            unit: unitno,
            price: price,
            status: "PAID"
          })

          //send to payment hist
          set(ref(database, 'pay_history/' + dateTimedue), {
            email: em,
            paid_date: realDay,
            due_date: dateTimedue,
            unit: unitno,
            price: price,
            status: "PAID"
          })

          window.confirm("Inquiry for " + em + " successfully approved");
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
        // ul.appendChild(approve)
        // ul.appendChild(decline)

      }

      const dbRef = ref(database, 'bills');

      onValue(dbRef, (snapshot) => {
        snapshot.forEach((childSnapshot) => {
          // const childKey = childSnapshot.key;
          // console.log(childSnapshot.val().date);
          // const childData = childSnapshot.val();
          let em = childSnapshot.val().email;
          // if (String(em) == String(nameX)) {
          let date = childSnapshot.val().date;
          // let dateDue = childSnapshot.val().due_date;
          let price = childSnapshot.val().price;
          let stats = childSnapshot.val().status;
          let unitz = childSnapshot.val().unit;
          let approve = childSnapshot.val().unit;

          if (stats != "PAID") {
            addItemsToList(em, date, unitz, price, stats, app);
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