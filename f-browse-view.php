<!DOCTYPE html>
<html lang="en">

<head>
  <title>fBrowseView - Well Worn Thirsty Mole</title>
  <meta property="og:title" content="fBrowseView - Well Worn Thirsty Mole" />
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
    <link href="./f-browse-view.css" rel="stylesheet" />

    <div class="f-browse-view-container">
      <header data-thq="thq-navbar" class="f-browse-view-navbar-interactive">
        <img alt="image" src="public/playground_assets/logo-200h.png" class="f-browse-view-image" />
        <div data-thq="thq-navbar-nav" data-role="Nav" class="f-browse-view-desktop-menu">
          <nav data-thq="thq-navbar-nav-links" data-role="Nav" class="f-browse-view-nav"></nav>
        </div>
        <div data-thq="thq-navbar-btn-group" class="f-browse-view-btn-group"></div>
        <div data-thq="thq-burger-menu" class="f-browse-view-burger-menu">
          <svg viewBox="0 0 1024 1024" class="f-browse-view-icon">
            <path d="M128 554.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 298.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 810.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667z"></path>
          </svg>
        </div>
        <div data-thq="thq-mobile-menu" class="f-browse-view-mobile-menu">
          <div data-thq="thq-mobile-menu-nav" data-role="Nav" class="f-browse-view-nav1">
            <div class="f-browse-view-container01">
              <img alt="image" src="https://presentation-website-assets.teleporthq.io/logos/logo.png" class="f-browse-view-image1" />
              <div data-thq="thq-close-menu" class="f-browse-view-menu-close">
                <svg viewBox="0 0 1024 1024" class="f-browse-view-icon02">
                  <path d="M810 274l-238 238 238 238-60 60-238-238-238 238-60-60 238-238-238-238 60-60 238 238 238-238z"></path>
                </svg>
              </div>
            </div>
            <nav data-thq="thq-mobile-menu-nav-links" data-role="Nav" class="f-browse-view-nav2">
              <span class="f-browse-view-text">About</span>
              <span class="f-browse-view-text01">Features</span>
              <span class="f-browse-view-text02">Pricing</span>
              <span class="f-browse-view-text03">Team</span>
              <span class="f-browse-view-text04">Blog</span>
            </nav>
            <div class="f-browse-view-container02">
              <button class="f-browse-view-login button">Login</button>
              <button class="button">Register</button>
            </div>
          </div>
          <div class="f-browse-view-icon-group">
            <svg viewBox="0 0 950.8571428571428 1024" class="f-browse-view-icon04">
              <path d="M925.714 233.143c-25.143 36.571-56.571 69.143-92.571 95.429 0.571 8 0.571 16 0.571 24 0 244-185.714 525.143-525.143 525.143-104.571 0-201.714-30.286-283.429-82.857 14.857 1.714 29.143 2.286 44.571 2.286 86.286 0 165.714-29.143 229.143-78.857-81.143-1.714-149.143-54.857-172.571-128 11.429 1.714 22.857 2.857 34.857 2.857 16.571 0 33.143-2.286 48.571-6.286-84.571-17.143-148-91.429-148-181.143v-2.286c24.571 13.714 53.143 22.286 83.429 23.429-49.714-33.143-82.286-89.714-82.286-153.714 0-34.286 9.143-65.714 25.143-93.143 90.857 112 227.429 185.143 380.571 193.143-2.857-13.714-4.571-28-4.571-42.286 0-101.714 82.286-184.571 184.571-184.571 53.143 0 101.143 22.286 134.857 58.286 41.714-8 81.714-23.429 117.143-44.571-13.714 42.857-42.857 78.857-81.143 101.714 37.143-4 73.143-14.286 106.286-28.571z"></path>
            </svg><svg viewBox="0 0 877.7142857142857 1024" class="f-browse-view-icon06">
              <path d="M585.143 512c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286 65.714 146.286 146.286 146.286 146.286-65.714 146.286-146.286zM664 512c0 124.571-100.571 225.143-225.143 225.143s-225.143-100.571-225.143-225.143 100.571-225.143 225.143-225.143 225.143 100.571 225.143 225.143zM725.714 277.714c0 29.143-23.429 52.571-52.571 52.571s-52.571-23.429-52.571-52.571 23.429-52.571 52.571-52.571 52.571 23.429 52.571 52.571zM438.857 152c-64 0-201.143-5.143-258.857 17.714-20 8-34.857 17.714-50.286 33.143s-25.143 30.286-33.143 50.286c-22.857 57.714-17.714 194.857-17.714 258.857s-5.143 201.143 17.714 258.857c8 20 17.714 34.857 33.143 50.286s30.286 25.143 50.286 33.143c57.714 22.857 194.857 17.714 258.857 17.714s201.143 5.143 258.857-17.714c20-8 34.857-17.714 50.286-33.143s25.143-30.286 33.143-50.286c22.857-57.714 17.714-194.857 17.714-258.857s5.143-201.143-17.714-258.857c-8-20-17.714-34.857-33.143-50.286s-30.286-25.143-50.286-33.143c-57.714-22.857-194.857-17.714-258.857-17.714zM877.714 512c0 60.571 0.571 120.571-2.857 181.143-3.429 70.286-19.429 132.571-70.857 184s-113.714 67.429-184 70.857c-60.571 3.429-120.571 2.857-181.143 2.857s-120.571 0.571-181.143-2.857c-70.286-3.429-132.571-19.429-184-70.857s-67.429-113.714-70.857-184c-3.429-60.571-2.857-120.571-2.857-181.143s-0.571-120.571 2.857-181.143c3.429-70.286 19.429-132.571 70.857-184s113.714-67.429 184-70.857c60.571-3.429 120.571-2.857 181.143-2.857s120.571-0.571 181.143 2.857c70.286 3.429 132.571 19.429 184 70.857s67.429 113.714 70.857 184c3.429 60.571 2.857 120.571 2.857 181.143z"></path>
            </svg><svg viewBox="0 0 602.2582857142856 1024" class="f-browse-view-icon08">
              <path d="M548 6.857v150.857h-89.714c-70.286 0-83.429 33.714-83.429 82.286v108h167.429l-22.286 169.143h-145.143v433.714h-174.857v-433.714h-145.714v-169.143h145.714v-124.571c0-144.571 88.571-223.429 217.714-223.429 61.714 0 114.857 4.571 130.286 6.857z"></path>
            </svg>
          </div>
        </div>
      </header>
      <div class="f-browse-view-hero">
        <div class="f-browse-view-container03">
          <div class="f-browse-view-sidebar">
            <nav class="f-browse-view-nav3">
              <svg viewBox="0 0 1024 1024" class="f-browse-view-icon10">
                <path d="M128 554.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 298.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 810.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667z"></path>
              </svg>
              <span class="f-bills-text05"><a href="f-bills.php">BILLS</a></span>
              <span class="f-browse-view-text06"><a href="f-payment-history.php">PAYMENT HISTORY</a></span>
              <span class="f-browse-view-text07">
                <a href="f-browse-apartments.php">
                  <span>BROWSE</span>
                  <br />
                  <span>APARTMENTS</span>
                </a>
              </span>
              <span class="f-browse-view-text11">
                <a href="f-inquiries.php">
                  <span>INQUIRIES</span>
                  <br />
                </a>
              </span>
              <span>
                <a href="f-browse-view.php">
                  <span>CONCERNS</span>
                  <br />
                  <br />
                  <br />
                </a>
              </span>
              <span><a href="f-logout.php">LOG OUT</a></span>
            </nav>
            <div class="f-browse-view-profile">
              <img alt="image" src="https://freepngimg.com/thumb/categories/3027.png" class="f-browse-view-image2" />
              <div class="f-browse-view-container04">
                <span id="name" class="f-browse-view-text20">Name</span>
                <span class="f-browse-view-text21">Tenant</span>
              </div>
            </div>
          </div>
        </div>
        <div class="f-browse-view-container05">
          <div class="f-browse-view-hero1" style="margin-top: 100px;">
            <div class="f-browse-view-container06">
              <div class="f-browse-view-container07">
                <img id="img1" alt="image" src="https://play.teleporthq.io/static/svg/default-img.svg" class="f-browse-view-image3" />
              </div>
              <div class="f-browse-view-container08" style="margin-top: -100px;">
                <img id="img2" alt="image" src="https://play.teleporthq.io/static/svg/default-img.svg" class="f-browse-view-image4" />
                <img id="img3" alt="image" src="https://play.teleporthq.io/static/svg/default-img.svg" class="f-browse-view-image5" />
                <img id="img4" alt="image" src="https://play.teleporthq.io/static/svg/default-img.svg" class="f-browse-view-image6" />
              </div>
            </div>
            <div class="f-browse-view-container09">
              <div class="f-browse-view-container10">
                <div class="f-browse-view-container11">
                  <h1 id="title" class="f-browse-view-text22">Title</h1>
                  <span id="info" class="f-browse-view-text23">
                    <span>Details</span>
                    <br />
                  </span>
                  <button id="inquire" class="f-browse-view-button button">
                    INQUIRE
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- <footer class="f-browse-view-footer">
        <span class="f-browse-view-text26">
          © 2022 Apartment Rental Tracking System
        </span>
        <div class="f-browse-view-icon-group1"></div>
      </footer> -->
      <div class="f-browse-view-btn-group1"></div>
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
    document.getElementById("title").textContent = "Unit 3";
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
    document.getElementById("title").textContent = "Unit 4";
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
    document.getElementById("title").textContent = "Unit 5";
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

<script type="module">
  import {
    initializeApp
  } from "https://www.gstatic.com/firebasejs/9.14.0/firebase-app.js";
  import {
    getDatabase,
    ref,
    child,
    get,
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
      // document.getElementById("name").style.fontSize = 10;



      var today = new Date();
      // var date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
      var date = today.getDate() + '-' + (today.getMonth() + 1) + '-' + today.getFullYear();
      var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
      var dateTime = date + ' ' + time;


      document.getElementById("inquire").addEventListener("click", function() {
        // window.confirm(dateTime);

        // const dbRef2 = ref(getDatabase());
        set(ref(database, 'inquiries/'+dateTime), {
          email: nameX,
          date: dateTime,
          // unit: unit;
          price: "Php 15,000 (monthly)",
          status: "Inquiry was being processed by the landlord",
          unit: unit
        })

        window.confirm("Inquiry for Unit "+unit+ " was successfully forwarded");
        window.location.href="f-inquiries.php";

        // set(ref(database, 'inquiries' + dateTime), {
        //   email: nameX,
        //   date: dateTime,
        //   price: "Php 15,000 (monthly)",
        //   status: "Inquiry was being processed by the landlordRR",
        //   unit: "1"
        // });


      })
    } else {
      console.log("No data available");
    }
  }).catch((error) => {
    console.error(error);
  });
</script>

</html>
