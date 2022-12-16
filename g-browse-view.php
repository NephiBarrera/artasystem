<!DOCTYPE html>
<html lang="en">

<head>
  <title>Tenant - View Apartments</title>
  <meta property="og:title" content="fBrowseView - Well Worn Thirsty Mole" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="utg-8" />
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
    <link href="./g-browse-view.css" rel="stylesheet" />

    <style>
      @media (max-width: 600px) {
        .g-browse-view-container03 {
          display: none;
          visibility: hidden;
        }

        .g-browse-view-container03,
        .g-browse-view-container09,
        g-browse-view-container10,
        g-browse-view-container11 {
          width: 400px;
        }

        .g-browse-view-hero {
          height: auto;
          width: 400px;
        }

        .g-browse-view-hero1 {
          width: 400px;
        }

        #title {
          margin-top: 130%;
          margin-left: 0px;
          margin-right: 0px;
          text-align: center;
        }

        #info {
          width: max-content;
          margin-left: -120px;
        }

        #inquire {
          width: 100%;
          margin-left: -90px;
        }

        .g-browse-view-container07 {
          margin-top: 50px;
          margin-left: -100px;
        }

        .g-browse-view-container08 {
          margin-left: -100px;
        }

        .g-browse-view-image3 {
          width: 330px;
          margin-left: 120px;
        }

        .g-browse-view-container08 {
          margin-left: 20px;
        }

        #img2,
        #img3,
        #img4 {
          width: 110px;
        }
      }
    </style>
    <div class="g-browse-view-container">
      <header data-thq="thq-navbar" class="g-browse-view-navbar-interactive">
        <img alt="image" src="logo-200h.png" class="g-browse-view-image" />
        <a href="g-browse-apartments.php">
          <button style="background-color: aliceblue; border-radius: 5px;">Back</button>
        </a>
      </header>
      <div class="g-browse-view-hero">
        <div class="g-browse-view-container03" style="width: auto;">
          <div class="g-browse-view-sidebar" style="width: auto;">
            <nav class="g-browse-view-nav3" style="width: auto;">
              <span class="g-bills-text05"><a href="g-bills.php">BILLS</a></span>
              <br>
              <span class="g-browse-view-text06"><a href="g-payment-history.php">PAYMENT HISTORY</a></span>
              <span class="g-browse-view-text07">
                <a href="g-browse-apartments.php">
                  <span>BROWSE</span>
                  <br />
                  <span>APARTMENTS</span>
                </a>
              </span>
              <span class="g-browse-view-text11">
                <a href="g-inquiries.php">
                  <span>INQUIRIES</span>
                  <br />
                </a>
              </span>
              <span>
                <a href="g-browse-view.php">
                  <span>CONCERNS</span>
                  <br />
                  <br />
                  <br />
                </a>
              </span>
              <span><a href="g-logout.php">LOG OUT</a></span>
            </nav>
            <div class="g-browse-view-profile">
              <img alt="image" src="https://freepngimg.com/thumb/categories/3027.png" class="g-browse-view-image2" />
              <div class="g-browse-view-container04">
                <span id="name" class="g-browse-view-text20">Name</span>
                <span class="g-browse-view-text21">Tenant</span>
              </div>
            </div>
          </div>
        </div>

        <div class="g-browse-view-container09" style="width: 250px; margin-right:-40px;">
          <div class="g-browse-view-container10" style="width: 250px; margin-right:-40px;">
            <div class="g-browse-view-container11" style="width: 250px; margin-right:-40px;">
              <h1 id="title" class="g-browse-view-text22">Title</h1>
              <span id="info" class="g-browse-view-text23" style="width: 250px; margin-right:-40px;">
                <span>Details</span>
                <br />
              </span>
              <button id="inquire" class="g-browse-view-button button" style="width: 200px;">
                INQUIRE
              </button>
            </div>
          </div>
        </div>


        <div class="g-browse-view-container05">
          <div class="g-browse-view-hero1">
            <div class="g-browse-view-container06">
              <div class="g-browse-view-container07">
                <img  data-enlargable  id="img1" alt="image" src="https://play.teleporthq.io/static/svg/default-img.svg" class="g-browse-view-image3"/>
              </div>
              <div class="g-browse-view-container08" style="margin-top: -100px;">
                <img id="img2" alt="image" src="https://play.teleporthq.io/static/svg/default-img.svg" class="g-browse-view-image4"  />
                <img id="img3" alt="image" src="https://play.teleporthq.io/static/svg/default-img.svg" class="g-browse-view-image5"  />
                <img id="img4" alt="image" src="https://play.teleporthq.io/static/svg/default-img.svg" class="g-browse-view-image6"  />


              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- <footer class="g-browse-view-footer">
        <span class="g-browse-view-text26">
          © 2022 Apartment Rental Tracking System
        </span>
        <div class="g-browse-view-icon-group1"></div>
      </footer> -->
    <div class="g-browse-view-btn-group1"></div>
  </div>
  </div>
  <script data-section-id="navbar" src="https://unpkg.com/@teleporthq/teleport-custom-scripts"></script>
</body>

<script>
  var unit = innerHTML = localStorage.getItem("unit");

  var path = "g-browse-view.php";
  function viewImg(src, path) {
    localStorage.setItem("source", src);
    localStorage.setItem("from", path);
    window.location.href = "z-image-view.html";
    // window.alert(num);
    return false;
  }

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

    document.getElementById("img1").src = "./assets/img/unit1a.jpg"
    document.getElementById("img2").src = "./assets/img/unit1b.jpg"
    document.getElementById("img3").src = "./assets/img/unit1c.jpg"
    document.getElementById("img4").src = "./assets/img/unit1d.jpg"

    // setting view image
    document.getElementById("img1").addEventListener("click", function(){viewImg("./assets/img/unit1a.jpg",path)});
    document.getElementById("img2").addEventListener("click", function(){viewImg("./assets/img/unit1b.jpg",path)});
    document.getElementById("img3").addEventListener("click", function(){viewImg("./assets/img/unit1c.jpg",path)});
    document.getElementById("img4").addEventListener("click", function(){viewImg("./assets/img/unit1d.jpg",path)});
  
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

    // setting view image
    document.getElementById("img1").addEventListener("click", function(){viewImg("./assets/img/unit2a.jpg",path)});
    document.getElementById("img2").addEventListener("click", function(){viewImg("./assets/img/unit2b.jpg",path)});
    document.getElementById("img3").addEventListener("click", function(){viewImg("./assets/img/unit2c.jpg",path)});
    document.getElementById("img4").addEventListener("click", function(){viewImg("./assets/img/unit2d.jpg",path)});
  
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

    // setting view image
    document.getElementById("img1").addEventListener("click", function(){viewImg("./assets/img/unit3a.jpg",path)});
    document.getElementById("img2").addEventListener("click", function(){viewImg("./assets/img/unit3b.jpg",path)});
    document.getElementById("img3").addEventListener("click", function(){viewImg("./assets/img/unit3c.jpg",path)});
    document.getElementById("img4").addEventListener("click", function(){viewImg("./assets/img/unit3d.jpg",path)});
  
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

    // setting view image
    document.getElementById("img1").addEventListener("click", function(){viewImg("./assets/img/unit5a.jpg",path)});
    document.getElementById("img2").addEventListener("click", function(){viewImg("./assets/img/unit4b.jpg",path)});
    document.getElementById("img3").addEventListener("click", function(){viewImg("./assets/img/unit4c.jpg",path)});
    document.getElementById("img4").addEventListener("click", function(){viewImg("./assets/img/unit4d.jpg",path)});
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

    // setting view image
    document.getElementById("img1").addEventListener("click", function(){viewImg("./assets/img/unit5a.jpg",path)});
    document.getElementById("img2").addEventListener("click", function(){viewImg("./assets/img/unit5b.jpg",path)});
    document.getElementById("img3").addEventListener("click", function(){viewImg("./assets/img/unit5c.jpg",path)});
    document.getElementById("img4").addEventListener("click", function(){viewImg("./assets/img/unit5d.jpg",path)});
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
        set(ref(database, 'inquiries/' + dateTime), {
          email: nameX,
          date: dateTime,
          // unit: unit;
          price: "Php 15,000 (monthly)",
          status: "Inquiry was being processed by the landlord",
          unit: unit
        })

        window.confirm("Inquiry for Unit " + unit + " was successfully forwarded");
        window.location.href = "g-inquiries.php";

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