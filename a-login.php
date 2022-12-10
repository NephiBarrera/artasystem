<!DOCTYPE html>
<html lang="en">

<head>
  <title>aLogin - Well Worn Thirsty Mole</title>
  <meta property="og:title" content="aLogin - Well Worn Thirsty Mole" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="utf-8" />
  <meta property="twitter:card" content="summary_large_image" />

  <script type="module">
    // Import the functions you need from the SDKs you need
    import {
      initializeApp
    } from "https://www.gstatic.com/firebasejs/9.14.0/firebase-app.js";
    import {
      getAnalytics
    } from "https://www.gstatic.com/firebasejs/9.14.0/firebase-analytics.js";

    import {
      getAuth,
      signInWithEmailAndPassword
    } from "https://www.gstatic.com/firebasejs/9.14.0/firebase-auth.js";

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

    // Initialize Firebase
    const app = initializeApp(firebaseConfig);
    const auth = getAuth();

    const analytics = getAnalytics(app);

    signInWithEmailAndPassword(auth, email, password)
      .then((userCredential) => {
        // Signed in 
        const user = userCredential.user;
        // ...
      })
      .catch((error) => {
        const errorCode = error.code;
        const errorMessage = error.message;
      });
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
    <link href="./a-login.css" rel="stylesheet" />

    <div class="a-login-container">
      <header data-thq="thq-navbar" class="a-login-navbar-interactive">
        <a href="index.php">
          <img alt="image" src="public/playground_assets/logo-200h.png" class="a-login-image" />
        </a>
        <div data-thq="thq-navbar-nav" data-role="Nav" class="a-login-desktop-menu">
          <nav data-thq="thq-navbar-nav-links" data-role="Nav" class="a-login-nav"></nav>
        </div>
        <div data-thq="thq-navbar-btn-group" class="a-login-btn-group">
          <a href="a-login.php">
            <button class="a-login-login button">Login</button>
          </a>
          <a href="a-signup.php">
            <button class="button">Sign Up</button>
          </a>
        </div>
        <div data-thq="thq-burger-menu" class="a-login-burger-menu">
          <svg viewBox="0 0 1024 1024" class="a-login-icon">
            <path d="M128 554.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 298.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 810.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667z"></path>
          </svg>
        </div>
        <div data-thq="thq-mobile-menu" class="a-login-mobile-menu">
          <div data-thq="thq-mobile-menu-nav" data-role="Nav" class="a-login-nav1">
            <div class="a-login-container1">
              <img alt="image" src="https://presentation-website-assets.teleporthq.io/logos/logo.png" class="a-login-image1" />
              <div data-thq="thq-close-menu" class="a-login-menu-close">
                <svg viewBox="0 0 1024 1024" class="a-login-icon02">
                  <path d="M810 274l-238 238 238 238-60 60-238-238-238 238-60-60 238-238-238-238 60-60 238 238 238-238z"></path>
                </svg>
              </div>
            </div>
            <nav data-thq="thq-mobile-menu-nav-links" data-role="Nav" class="a-login-nav2">
              <span class="a-login-text">About</span>
              <span class="a-login-text1">Features</span>
              <span class="a-login-text2">Pricing</span>
              <span class="a-login-text3">Team</span>
              <span class="a-login-text4">Blog</span>
            </nav>
            <div class="a-login-container2">
              <button class="a-login-login1 button">Login</button>
              <button class="button">Register</button>
            </div>
          </div>
          <div class="a-login-icon-group">
            <svg viewBox="0 0 950.8571428571428 1024" class="a-login-icon04">
              <path d="M925.714 233.143c-25.143 36.571-56.571 69.143-92.571 95.429 0.571 8 0.571 16 0.571 24 0 244-185.714 525.143-525.143 525.143-104.571 0-201.714-30.286-283.429-82.857 14.857 1.714 29.143 2.286 44.571 2.286 86.286 0 165.714-29.143 229.143-78.857-81.143-1.714-149.143-54.857-172.571-128 11.429 1.714 22.857 2.857 34.857 2.857 16.571 0 33.143-2.286 48.571-6.286-84.571-17.143-148-91.429-148-181.143v-2.286c24.571 13.714 53.143 22.286 83.429 23.429-49.714-33.143-82.286-89.714-82.286-153.714 0-34.286 9.143-65.714 25.143-93.143 90.857 112 227.429 185.143 380.571 193.143-2.857-13.714-4.571-28-4.571-42.286 0-101.714 82.286-184.571 184.571-184.571 53.143 0 101.143 22.286 134.857 58.286 41.714-8 81.714-23.429 117.143-44.571-13.714 42.857-42.857 78.857-81.143 101.714 37.143-4 73.143-14.286 106.286-28.571z"></path>
            </svg><svg viewBox="0 0 877.7142857142857 1024" class="a-login-icon06">
              <path d="M585.143 512c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286 65.714 146.286 146.286 146.286 146.286-65.714 146.286-146.286zM664 512c0 124.571-100.571 225.143-225.143 225.143s-225.143-100.571-225.143-225.143 100.571-225.143 225.143-225.143 225.143 100.571 225.143 225.143zM725.714 277.714c0 29.143-23.429 52.571-52.571 52.571s-52.571-23.429-52.571-52.571 23.429-52.571 52.571-52.571 52.571 23.429 52.571 52.571zM438.857 152c-64 0-201.143-5.143-258.857 17.714-20 8-34.857 17.714-50.286 33.143s-25.143 30.286-33.143 50.286c-22.857 57.714-17.714 194.857-17.714 258.857s-5.143 201.143 17.714 258.857c8 20 17.714 34.857 33.143 50.286s30.286 25.143 50.286 33.143c57.714 22.857 194.857 17.714 258.857 17.714s201.143 5.143 258.857-17.714c20-8 34.857-17.714 50.286-33.143s25.143-30.286 33.143-50.286c22.857-57.714 17.714-194.857 17.714-258.857s5.143-201.143-17.714-258.857c-8-20-17.714-34.857-33.143-50.286s-30.286-25.143-50.286-33.143c-57.714-22.857-194.857-17.714-258.857-17.714zM877.714 512c0 60.571 0.571 120.571-2.857 181.143-3.429 70.286-19.429 132.571-70.857 184s-113.714 67.429-184 70.857c-60.571 3.429-120.571 2.857-181.143 2.857s-120.571 0.571-181.143-2.857c-70.286-3.429-132.571-19.429-184-70.857s-67.429-113.714-70.857-184c-3.429-60.571-2.857-120.571-2.857-181.143s-0.571-120.571 2.857-181.143c3.429-70.286 19.429-132.571 70.857-184s113.714-67.429 184-70.857c60.571-3.429 120.571-2.857 181.143-2.857s120.571-0.571 181.143 2.857c70.286 3.429 132.571 19.429 184 70.857s67.429 113.714 70.857 184c3.429 60.571 2.857 120.571 2.857 181.143z"></path>
            </svg><svg viewBox="0 0 602.2582857142856 1024" class="a-login-icon08">
              <path d="M548 6.857v150.857h-89.714c-70.286 0-83.429 33.714-83.429 82.286v108h167.429l-22.286 169.143h-145.143v433.714h-174.857v-433.714h-145.714v-169.143h145.714v-124.571c0-144.571 88.571-223.429 217.714-223.429 61.714 0 114.857 4.571 130.286 6.857z"></path>
            </svg>
          </div>
        </div>
      </header>
      <div class="a-login-hero">
        <img alt="image" src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/apartment-living-room-design-ideas-hbx040122nextwave-013-1656022467.jpg?crop=0.675xw:1.00xh;0,0&amp;resize=640:*" class="a-login-image2" />
        <div class="a-login-container3">
          <h1 class="a-login-text5">Log In</h1>
          <!-- <input type="text" id="email" placeholder="Email" class="a-login-textinput input" /> -->
          First Name: <input type="text" id="myText" placeholder="Email" class="a-login-textinput input">
          <input type="text" id="password" placeholder="Password" class="a-login-textinput1 input" />
          <div class="a-login-btn-group1">
            <button id="loginBtn" class="a-login-button button">Log In</button>
            <!-- <button class="a-login-button button" id="login">Log In</button> -->
          </div>
        </div>
      </div>
      <footer class="a-login-footer">
        <span class="a-login-text6">
          © 2022 Apartment Rental Tracking System
        </span>
        <div class="a-login-icon-group1"></div>
      </footer>
    </div>
  </div>
  <script data-section-id="navbar" src="https://unpkg.com/@teleporthq/teleport-custom-scripts"></script>

  <script type="module">
    import {
      initializeApp
    } from "https://www.gstatic.com/firebasejs/9.14.0/firebase-app.js";
    import {
      getDatabase,
      set,
      ref
    } from "https://www.gstatic.com/firebasejs/9.14.0/firebase-database.js";
    import {
      getAnalytics
    } from "https://www.gstatic.com/firebasejs/9.14.0/firebase-analytics.js";

    import {
      getAuth,
      createUserWithEmailAndPassword,
      signInWithEmailAndPassword
    } from "https://www.gstatic.com/firebasejs/9.14.0/firebase-auth.js";

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

    // Initialize Firebase
    const app = initializeApp(firebaseConfig);
    const analytics = getAnalytics(app);
    const database = getDatabase(app);
    const auth = getAuth();
    // function getUserInput(){


    document.getElementById("loginBtn").addEventListener("click", function() {

      var email = document.getElementById("myText").value;
      var password = document.getElementById("password").value;
      // document.getElementById("demo").innerHTML = x;

      //  confirm(String(email).endsWith("@gmail.com") + " akdhs");

      if (String(email).length == 0 || String(password).length == 0) {
        window.alert("Input " + email + " necessary information." + password);

      } else {
        if (String(email).endsWith("@gmail.com")) {
          
          // INSERT DATA INTO DB
          set(ref(database, 'user_log'), {
            email: email,
            password: password
          })

          signInWithEmailAndPassword(auth, email, password)
            .then((userCredential) => {
              // Signed in 
              const user = userCredential.user;
              // ...
              if (String(email) == "landlord_1@gmail.com" ||
                      String(email) == "landlord_2@gmail.com" ||
                      String(email) == "landlord_3@gmail.com" ||
                      String(email) == "landlord_4@gmail.com" ||
                      String(email) == "landlord_5@gmail.com") {
                      window.alert("Welcome Landlord");
                      window.location.href = "g-bills.php";
                    } else {
                      window.alert("Welcome Tenant");
                      window.location.href = "f-bills.php";
                    }

              // checkWhere(email);
              // window.location.href = "g-bills.php";


              //one way login
            })
            .catch((error) => {
              const errorCode = error.code;
              const errorMessage = error.message;
              // ..
              window.alert("Error occurred. Try again.");
            });
        } else {
          window.alert("Email should only end with '@gmail.com'");
        }
      }
    });
    // function myFunction() {

      // function checkWhere (email) {
      // }

    // }
    // document.getElementById("register").addEventListener("click", function() {
    //   var em = document.getElementById("email2").textContent;
    //   confirm("gsdhsahd ");
    //   confirm(em);
    // });
    // }
  </script>
  <!-- </form> -->


</body>

</html>