<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/3a6bf539fa.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="cookiealert.css" />
<script src="script.js"></script>
<script>
function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>
</head>
<body>

<div class="topnav">
  <a href="" style="font-family: 'DiscordHeavy'; font-size: 30px; background-color: #7289da; color: #fff;" class="active">DownNotify Dashboard<span style="font-family: 'DiscordThin'; font-size: 15px;">Customize Account Settings</span></a>
  <div id="myLinks">
    <a href="index.php"><i class="fa fa-home"></i> Home</a>
    <a href="acc_mgt.php"><i class="fa fa-user"></i> User Account</a>
    <a href="settings.php"><i class="fa fa-wrench"></i> Settings</a>
    <a href="docs.php"><i class="fa fa-book"></i> Documentation</a>
    <hr>
    <a href="discord.php"><i class="fab fa-discord"></i> Discord Official Server</a>
    <a href="https://www.minco.kro.kr/"><i class="fa fa-link"></i> MincoMK Official Website</a>
    <a href="https://www.dyzer.tk"><i class="fa fa-link"></i> Dyzer Official Website</a>
    <hr>
    <a href="logout.php"><i class="fa fa-user"></i> Logout</a>
  </div>
  <a href="javascript:void(0)" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
  </a>
</div>
<br><br>
<center>
<form method="post" name="change-password">
<h1 style="color: #fff; position: relative; left: 15px;">Change your password</h1>
<i class="fa fa-lock" style="color: lightgray; font-size: 25px; position: relative; left: 40px; top: 3px;"></i>
<input class="input" type="password" name="current-password" placeholder="Current Password"/><br><br>
<i class="fa fa-key" style="color: lightgray; font-size: 25px; position: relative; left: 40px; top: 3px;"></i>
<input class="input" type="password" name="new-password" placeholder="New Password"/><br><br>
<i class="fa fa-key" style="color: lightgray; font-size: 25px; position: relative; left: 40px; top: 3px;"></i>
<input class="input" type="password" name="retype-password" placeholder="Retype Password"/><br><br>
<input class="button" type="submit" value="Change"  style="position: relative; left: 10px;"/>
</form>
</center>
<br><br><br><br>
<center>
<form method="post" name="change-email">
<h1 style="color: #fff; position: relative; right: 5px;">Change your Email</h1>
<i class="fa fa-at" style="color: lightgray; font-size: 25px; position: relative; left: 40px; top: 3px;"></i>
<input class="input" type="email" name="current-email" placeholder="Current Email"/><br><br>
<i class="fa fa-at" style="color: lightgray; font-size: 25px; position: relative; left: 40px; top: 3px;"></i>
<input class="input" type="password" name="new-email" placeholder="New Email"/><br><br>
<i class="fa fa-lock" style="color: lightgray; font-size: 25px; position: relative; left: 40px; top: 3px;"></i>
<input class="input" type="password" name="password" placeholder="Password"/><br><br>
<input class="button" type="submit" value="Change"  style="position: relative; left: 10px;"/>
</form>
</center>
<br><br><br><br><br>
<center>
<form method="post" name="change-username">
<h1 style="color: #fff; position: relative; right: 5px;">Change your Username</h1>
<i class="fa fa-at" style="color: lightgray; font-size: 25px; position: relative; left: 40px; top: 3px;"></i>
<input class="input" type="email" name="current-name" placeholder="Current Username"/><br><br>
<i class="fa fa-at" style="color: lightgray; font-size: 25px; position: relative; left: 40px; top: 3px;"></i>
<input class="input" type="password" name="new-name" placeholder="New Username"/><br><br>
<i class="fa fa-lock" style="color: lightgray; font-size: 25px; position: relative; left: 40px; top: 3px;"></i>
<input class="input" type="password" name="password" placeholder="Password"/><br><br>
<input class="button" type="submit" value="Change"  style="position: relative; left: 10px;"/>
</form>
</center>
<br><br><br><br><br>
        <!-- START Bootstrap-Cookie-Alert -->
        <div class="alert text-center cookiealert" role="alert" style="font-size: 24px; font-family: arial; padding: 20px;">
    <b>Do you like cookies?</b> &#x1F36A; We use cookies to ensure you, get the best experience on our website. <a href="/information#cookie" target="_blank">Learn more</a><button type="button" style="border-radius: 8px; border: solid #7289da; background-color: #7289da; color: #fff;" class="btn btn-primary btn-sm acceptcookies">
        I accept
    </button>
</div>
</html>