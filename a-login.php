<!DOCTYPE html>
<html lang="en">

<head>
  <title>ARTA - Log In</title>
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
        
      </header>
      <div class="a-login-hero">
        <img alt="image" src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/apartment-living-room-design-ideas-hbx040122nextwave-013-1656022467.jpg?crop=0.675xw:1.00xh;0,0&amp;resize=640:*" class="a-login-image2" />
        <div class="a-login-container3">
          <h1 class="a-login-text5">Log In</h1>
          <!-- <input type="text" id="email" placeholder="Email" class="a-login-textinput input" /> -->
          <input type="text" id="myText" placeholder="Email" class="a-login-textinput input">
          
          <label for="">

            <input type="password" id="password" placeholder="Password" class="a-login-textinput1 input" />
            <br>
            <input type="checkbox" onclick="hide()"> Show Password
          </label>
            
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

<script>
  function hide() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

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
                    } 
                    else if (
                      String(email).endsWith("tenant1@gmail.com") ||
                      String(email).endsWith("tenant2@gmail.com") ||
                      String(email).endsWith("tenant3@gmail.com") ||
                      String(email).endsWith("tenant4@gmail.com") ||
                      String(email).endsWith("tenant5@gmail.com"))
                    {
                      window.alert("Welcome Tenant");
                      window.location.href = "g-bills.php";
                    }
                    else {
                      window.alert("Cannot determine if user is tenant or landlord\n" +
                      "Landlord: has format 'landlord_num@gmail.com'\n" +
                      "Tenant: ends with '_tenantX@gmail.com'");
                      window.location.href = "a-login.php";
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