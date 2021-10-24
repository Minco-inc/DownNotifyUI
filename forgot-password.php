<html>
  <head>
  <title>Forgot Password - DownNotify</title>
  <script src="https://kit.fontawesome.com/3a6bf539fa.js" crossorigin="anonymous"></script>
  <style>
        body {
    background: #23272A;
    color: #fff;
}
.form {
    margin: 50px auto;
    border-radius: 10px;
    width: 500px;
    padding: 30px 25px;
    color: #fff;
    background: #2C2F33;
}
h1.login-title {
    color: #666;
    color: #fff;
    margin: 0px auto 25px;
    font-size: 25px;
    font-weight: 300;
    text-align: center;
}
.login-input {
    font-size: 15px;
    border: 2px solid #ddd;
    padding: 24px;
    color: #fff;
    margin-bottom: 25px;
    padding-left: 34px;
    height: 25px;
    animation-duration: 0.8s;
    width: calc(100% - 39px);
}
.login-input:focus {
    border-color: #7289da;
    border-padding: 3px;
    color: #fff;
    outline: none;
}
.login-button {
    color: #fff;
    background: #55a1ff;
    border: 0;
    outline: 0;
    color: #fff;
    width: 100%;
    height: 50px;
    font-size: 16px;
    text-align: center;
    cursor: pointer;
}
.link {
    font-size: 15px;
    color: #fff;
    text-align: center;
    margin-bottom: 0px;
}
a {
    font-size: 15px;
    color: #fff;
    text-align: center;
    margin-bottom: 0px;
}
a:active {
    color: #fff;
}
h3 {
    font-weight: normal;
    color: #fff;
    text-align: center;
}
.l {
    font-family: 'Ubuntu';
    text-decoration: none;
    padding: 10px;
    background-color: #7289da;
    border-radius: 5px;
}
.l:hover {
    background-color: #aab6ff;
    color: #fff;
}
.l:active {
    background-color: #616894;
    color: #fff;
}
@font-face {
    font-family: 'DiscordHeavyItalic';
    src: url('fonts/Discord Heavy Italic.otf'); 
    format('opentype');
}
@font-face {
    font-family: 'DiscordHeavy';
    src: url('fonts/Discord Heavy.otf');
    format('opentype');
}
@font-face {
    font-family: 'DiscordThin';
    src: url('fonts/Discord Thin.otf');
    format('opentype');
}
@font-face {
    font-family: 'DiscordThinItalic';
    src: url('fonts/Discord Thin Italic.otf');
    format('opentype');
}
/* Minecraft Font */
@font-face {
    font-family: 'MinecraftTen';
    src: url('fonts/MinecraftTen.ttf');
    format('typertype');
}
@font-face {
    font-family: 'MinecraftBold';
    src: url('fonts/MinecraftBold.otf');
    format('opentype');
}
@font-face {
    font-family: 'MinecraftBoldItalic';
    src: url('fonts/Minecraft Bold Italic.otf');
    format('opentype');
}
@font-face {
    font-family: 'MinecraftItalic';
    src: url('fonts/Minecraft Italic.otf');
    format('opentype');
}
@font-face {
    font-family: 'Minecraft';
    src: url('fonts/MinecraftRegular.otf');
    format('opentype');
}
/* ProFontWindows */
@font-face {
    font-family: 'ProFontWindows';
    src: url('fonts/ProfontWindows.ttf');
    format('typertype');
}
@font-face {
    font-family: 'ProFontWindowsBold';
    src: url('fonts/ProfontWindowsBold.ttf');
    format('typertype');
}
/* Ubuntu Font */
@font-face {
    font-family: 'Ubuntu';
    src: url('fonts/Ubuntu.ttf');
    format('typertype');
}
@font-face {
    font-family: 'UbuntuBold';
    src: url('fonts/UbuntuBold.ttf');
    format('typertype');
}
@font-face {
    font-family: 'UbuntuBoldItalic';
    src: url('fonts/UbuntuBoldItalic.ttf');
    format('typertype');
}
@font-face {
    font-family: 'UbuntuItalic';
    src: url('fonts/UbuntuItalic.ttf');
    format('typertype');
}
@font-face {
    font-family: 'UbuntuLight';
    src: url('fonts/UbuntuLight.ttf');
    format('typertype');
}
@font-face {
    font-family: 'UbuntuLightItalic';
    src: url('/fonts/UbuntuLightItalic.ttf');
    format('typertype');
}
@font-face {
    font-family: 'UbuntuMedium';
    src: url('fonts/UbuntuMedium.ttf');
    format('typertype');
}
@font-face {
    font-family: 'UbuntuMediumItalic';
    src: url('fonts/UbuntuMediumItalic.ttf');
    format('typertype');
}
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');
* {
    font-family: 'Roboto', sans-serif;
}
.button {
  display: inline-block;
  padding: 15px 50px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #7289da;
  border: none;
  box-shadow: 0 9px #999;
}
.button:hover {
    background-color: #9fb9ff;
}
.button:active {
  background-color: #7583b6;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
  </style>
  </head>
  <body>
  <form class="form" method="post" name="forget-pass">
    <h1 class="login-title" style="font-family: 'DiscordHeavy';">Forget Password</h1>
    <p class="link" style="font-family: 'Ubuntu';">We send to your email for a link for confirmation, please enter your email.</p><br>
    <i class="fa fa-at" style="font-size: 20px; position: relative; top: 35px; left: 10px; color: lightgray;"></i><input type="text" class="login-input" name="email" style="font-family: 'Ubuntu'; color: #000;" placeholder="Email Address">
    <center><input type="submit" name="submit" style="font-family: 'DiscordThin'; float: right;" value="Recover" class="button"></center>
    <p class="link" style="font-family: 'Ubuntu';">Want to cancel? <a href="login.php">Cancel now</a>!</p>
    <br><br>
  </form>
  </body>
  <footer>
  <!-- START Bootstrap-Cookie-Alert -->
            <div class="alert text-center cookiealert" role="alert" style="font-size: 24px; font-family: arial; padding: 20px;">
    <b>Do you like cookies?</b> &#x1F36A; We use cookies to ensure you, get the best experience on our website. <a href="/information#cookie" target="_blank">Learn more</a><button type="button" style="border-radius: 8px; border: solid #7289da; background-color: #7289da; color: #fff;" class="btn btn-primary btn-sm acceptcookies">
        I accept
    </button>
</div>
<!-- END Bootstrap-Cookie-Alert -->
<!-- Include cookiealert script -->
<script src="js/script.js"></script>
    <link rel="stylesheet" href="css/cookiealert.css">
  </footer>
</html>
