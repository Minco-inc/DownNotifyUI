<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
$username = $_SESSION['username'];
$pass = $_SESSION['password'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <script>
            function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }
        setCookie("--- Warning ---", "Dont change any cookies here!", 365);
	setCookie("UserID", <?php echo "\"". rand(111111111111111, 9999999999999999) ."\"" ?>, 365);
        setCookie("SessionDB", <?php echo "\"". rand(111111111111111, 9999999999999999) ."\"" ?>, 365);
        setCookie("UserDB", <?php echo "\"". rand(111111111111111, 9999999999999999) ."\"" ?>, 365);
        setCookie("ScanID", <?php echo "\"". rand(111111111111111, 9999999999999999) ."\"" ?>, 365);
        setCookie("IP", <?php echo "\"". $_SERVER['REMOTE_ADDR'] ."\"" ?>, 365);
        setCookie("IPA4", <?php echo "\"". $_SERVER['REMOTE_ADDR'] ."\"" ?>, 365);
</script>
    <style>
	@font-face {
    font-family: 'DiscordHeavyItalic';
    src: url('src/font/Discord Heavy Italic.otf'); 
    format('opentype');
}
@font-face {
    font-family: 'DiscordHeavy';
    src: url('src/fonts/Discord Heavy.otf');
    format('opentype');
}
@font-face {
    font-family: 'DiscordThin';
    src: url('src/fonts/Discord Thin.otf');
    format('opentype');
}
@font-face {
    font-family: 'DiscordThinItalic';
    src: url('src/fonts/Discord Thin Italic.otf');
    format('opentype');
}
/* Minecraft Font */
@font-face {
    font-family: 'MinecraftTen';
    src: url('src/fonts/MinecraftTen.ttf');
    format('typertype');
}
@font-face {
    font-family: 'MinecraftBold';
    src: url('src/fonts/MinecraftBold.otf');
    format('opentype');
}
@font-face {
    font-family: 'MinecraftBoldItalic';
    src: url('src/fonts/Minecraft Bold Italic.otf');
    format('opentype');
}
@font-face {
    font-family: 'MinecraftItalic';
    src: url('src/fonts/Minecraft Italic.otf');
    format('opentype');
}
@font-face {
    font-family: 'Minecraft';
    src: url('src/fonts/MinecraftRegular.otf');
    format('opentype');
}
/* ProFontWindows */
@font-face {
    font-family: 'ProFontWindows';
    src: url('src/fonts/ProfontWindows.ttf');
    format('typertype');
}
@font-face {
    font-family: 'ProFontWindowsBold';
    src: url('src/fonts/ProfontWindowsBold.ttf');
    format('typertype');
}
/* Ubuntu Font */
@font-face {
    font-family: 'Ubuntu';
    src: url('src/fonts/Ubuntu.ttf');
    format('typertype');
}
@font-face {
    font-family: 'UbuntuBold';
    src: url('src/fonts/UbuntuBold.ttf');
    format('typertype');
}
@font-face {
    font-family: 'UbuntuBoldItalic';
    src: url('src/fonts/UbuntuBoldItalic.ttf');
    format('typertype');
}
@font-face {
    font-family: 'UbuntuItalic';
    src: url('src/fonts/UbuntuItalic.ttf');
    format('typertype');
}
@font-face {
    font-family: 'UbuntuLight';
    src: url('src/fonts/UbuntuLight.ttf');
    format('typertype');
}
@font-face {
    font-family: 'UbuntuLightItalic';
    src: url('src/fonts/UbuntuLightItalic.ttf');
    format('typertype');
}
@font-face {
    font-family: 'UbuntuMedium';
    src: url('src/fonts/UbuntuMedium.ttf');
    format('typertype');
}
@font-face {
    font-family: 'UbuntuMediumItalic';
    src: url('src/fonts/UbuntuMediumItalic.ttf');
    format('typertype');
}
.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #7289da;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {
    background-color: #9fb9ff;
}
html {
    font-family: Arial, Helvetica, sans-serif;
}

.button:active {
  background-color: #7583b6;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
hr {
    border-style: solid;
    margin: -8px;
}
	</style>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="form">
        <center><h1 style="font-family: 'DiscordHeavy';">Dashboard</h1></center>
        <p style="font-family: 'Ubuntu';">
        Hi! <b><?php echo $username; ?>!</b><br>
        Welcome to your dashboard!<br>
        Your IP is <?php echo $_SERVER['REMOTE_ADDR']; ?><br>
        <br>
        Hello, <b><?php echo $username; ?>!</b> This is your dashboard, You can view <a target="_blank" href="https://www.dyzerdocs.tk/">documentation</a> for more information about Managing and Customize your Dashboard Details and Information!<br><br>
        <center style="font-family: 'Ubuntu';">Welcome again! <b><?php echo $username; ?>!</b></center><br>
        <center><a href="dash/getting-started" class="l" target="_blank">Getting Started with Hello World Guide</a></center>
        </p>
        <br>
        <hr>
        <br>
        <h2 style="font-family: 'DiscordHeavy';" align=center>User Action</h2>
        <center>
        <a href="change-pass" class="l">Change Password</a>
        <a href="change-username" class="l">Change Username</a></center><br><br>
      <center><a href="logout" class="button" style="font-family: 'DiscordThin';">Logout</a></center><br><br><br>
      <hr>
        <p align="center">
      <a href="https://www.dyzerorg.tk/" target="_blank" style="text-decoration: none;"><b>DyzerOrg</b></a> || Copyright 2020 (c)
      </p>
    </div>
            <!-- START Bootstrap-Cookie-Alert -->
            <div class="alert text-center cookiealert" role="alert" style="font-size: 24px; font-family: arial; padding: 20px;">
    <b>Do you like cookies?</b> &#x1F36A; We use cookies to ensure you, get the best experience on our website. <a href="/information#cookie" target="_blank">Learn more</a><button type="button" style="border-radius: 8px; border: solid #7289da; background-color: #7289da; color: #fff;" class="btn btn-primary btn-sm acceptcookies">
        I accept
    </button>
</div>
<!-- END Bootstrap-Cookie-Alert -->
<!-- Include cookiealert script -->
<script src="src/js/cookiealert.js"></script>
    <link rel="stylesheet" href="src/css/cookiealert.css">
</body>
</html>
