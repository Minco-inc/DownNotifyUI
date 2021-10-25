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
  <a href="" style="font-family: 'DiscordHeavy'; font-size: 30px; background-color: #7289da; color: #fff;" class="active">DownNotify Dashboard<span style="font-family: 'DiscordThin'; font-size: 15px;">Customize Account</span></a>
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
</div>
<br><br>
<h1 style="color: white; top: -10px; float: left; padding-right: 20px; font-family: 'Ubuntu';">Heartbeat Monitor <span style="font-size: 12px; color: #7289da;">Toggle's the heartbeat monitoring.</span></h1>
<label class="switch" style=" top: 25px;">
  <input type="checkbox" checked>
  <span class="slider round"></span>
</label>
<br><br>
<div>
<h1 style="color: white; top: -10px; float: left; padding-right: 500px; font-family: 'Ubuntu';">DownNotify Backend <span style="font-size: 12px; color: #7289da;">Configure server backend monitoring.</span></h1>
<label class="switch" style="right: 480px; top: 50px;">
  <input type="checkbox" checked>
  <span class="slider round"></span>
</label>
</div>
<br><br>
<div>
<h1 style="color: white; top: -10px; float: left; padding-right: 500px; font-family: 'Ubuntu';">Experimental <span style="font-size: 12px; color: #7289da;">Warning! this option cause some damages to settings, exprerimental is harmfull!</span></h1>
<label class="switch" style="right: 350px; top: 60px;">
  <input type="checkbox">
  <span class="slider round"></span>
</label>
</div>
<br><br>
<div>
<h1 style="color: white; top: -10px; float: left; padding-right: 500px; font-family: 'Ubuntu';">Cache Website Files  <span style="font-size: 12px; color: #7289da;">Toggle Website cache files.</span></h1>
<label class="switch" style="right: 700px; top: 70px;">
  <input type="checkbox" checked>
  <span class="slider round"></span>
</label>
</div>
        <!-- START Bootstrap-Cookie-Alert -->
        <div class="alert text-center cookiealert" role="alert" style="font-size: 24px; font-family: arial; padding: 20px;">
    <b>Do you like cookies?</b> &#x1F36A; We use cookies to ensure you, get the best experience on our website. <a href="/information#cookie" target="_blank">Learn more</a><button type="button" style="border-radius: 8px; border: solid #7289da; background-color: #7289da; color: #fff;" class="btn btn-primary btn-sm acceptcookies">
        I accept
    </button>
</div>
</html>