<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Palamayanan Farmer-Partner's Association</title>
  <link rel="stylesheet" href="style.css">
  
</head>
<body>
  <div class="shade"></div>

  <div class="wrap">
    <section class="brand">
      <div>
        <div class="top">
          <img src="../images/logo.png" alt="Association logo">
          <div class="caption"><b>Municipality of Catigbian</b>Province of Bohol</div>
        </div>
        <h1>Palamayanan Farmer-Partner's Association</h1>
        <p class="tagline">Equipment registration, membership and real-time tracking system</p>
      </div>
      <div class="chips">
        <span style="position: relative; left: -5px; top: 0px; height: 34.8438px; transform: translate(0px, 1px);" data-selected="true" data-label-id="0">Member records</span>
        <span style="width: 167px; position: relative; left: 1px; top: 1px; height: 34.8438px; transform: translate(0px, 0px);" data-selected="true" data-label-id="0">Equipment borrowing</span>
        <span style="position: relative; left: 390px; top: -42px; width: 159px; height: 34.8438px" data-metatip="true" data-selected="true" data-label-id="0" >Farm land records</span>
        <span style="position: relative; left: 352px; top: -42px; height: 34.8438px" data-selected="true" data-label-id="0">Live GPS tracking</span>
        
      </div>
    </section>

    <!-- Sign-in card -->
    <main class="card">
      <h2>Welcome back</h2>
      <div class="sub">Sign in to your account</div>

      <label>Username
        <input type="text" id="username" placeholder="Enter your username" autocomplete="username">
      </label>
      <label class="field">Password
        <input type="password" id="password" placeholder="Enter your password" autocomplete="current-password">
        <button type="button" class="eye" id="eye">Show</button>
      </label>

      <div class="row">
        <span class="remember"><input type="checkbox" id="remember"><label for="remember">Remember me</label></span>
        <a href="#">Forgot password?</a>
      </div>

      <button class="btn" id="signin">Sign in</button>
      <div class="message" id="message" role="status"></div>
      <p class="help">Not a member yet? Visit the association office to register.</p>
    </main>
  </div>

  <script>
    // ---------- Elements ----------
    const username = document.getElementById("username");
    const password = document.getElementById("password");
    const message = document.getElementById("message");

    // ---------- Show / hide password ----------
    document.getElementById("eye").onclick = function () {
      const hidden = password.type === "password";
      password.type = hidden ? "text" : "password";
      this.textContent = hidden ? "Hide" : "Show";
    };

    // ---------- Sign-in → navigate to signin.html ----------
    document.getElementById("signin").onclick = function () {
      window.location.href = "signin.html";
    };
  </script>hahahahahah
</body>
</html>