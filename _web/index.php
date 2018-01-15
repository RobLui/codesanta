<!doctype html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="keywords" content="CodeSanta,Cheat-Santa,Bad Santa,Santa Checker,Santa Code,Search SantaCode,Copy-Paste"/>
    <meta name="description" content="CodeSanta is a website that finds cadeaukes in other projects. Find copy-pasted cadeaukes and unmask the Cheat-Santa, you always wanted to find!"/>
    <meta name="subject" content="CodeSanta: The Hunt for duplicate cadeaukes">
    <meta name="language" content="EN">
    <meta name="robots" content="index" />
    <meta name="topic" content="CodeSanta: The Hunt for duplicate cadeaukes">
    <meta name="summary" content="CodeSanta: The Hunt for duplicate cadeaukes">
    <meta name="author" content="Robbert Luit">
    <meta name="publisher" content="Robbert Luit">
    <meta name="url" content="http://www.codesanta.be">
    <meta name="identifier-URL" content="http://www.codesanta.be">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache">

    <meta name="og:title" content="CodeSanta: The Hunt for duplicate cadeaukes">
    <meta name="og:site_name" content="CodeSanta: The Hunt for duplicate cadeaukes">
    <meta property="og:type" content="website" />
    <meta name="og:url" content="http://www.codesanta.be">
    <meta name="og:image" content="http://www.codesanta.be/assets/images/logo.png"/>
    <meta name="og:site_name" content="CodeSanta"/>
    <meta name="og:description" content="CodeSanta is a website that finds cadeaukes in other projects. Find copy-pasted cadeaukes and unmask the Cheat-Santa, you always wanted to find!"/>

    <meta property="twitter:card" content="summary" />
    <meta property="twitter:title" content="CodeSanta: The Hunt for duplicate cadeaukes">
    <meta property="twitter:description" content="CodeSanta is a website that finds cadeaukes in other projects. Find copy-pasted cadeaukes and unmask the Cheat-Santa, you always wanted to find!"/>
    <meta property="twitter:image" content="http://www.codesanta.be/assets/images/logo.png" />
    <meta property="twitter:url" content="http://www.codesanta.be" />

    <title>CodeSanta: EX-CodePolice</title>

    <link rel="icon" type="image/png" href="assets/images/alessandro.png">
    <link rel="canonical" href="http://codesanta.be" />
    <link rel="stylesheet" href="assets/css/style.min.css">
</head>

<body>

  <noscript>
      <p id="errorscript">The CodePolice needs Javascript to be enabled to find cadeaukes!</p>
  </noscript>

  <div class="circle nodisplay">
      <p id="textcheat">Cheatvalue:</p>
      <p id="cheatvalue">100%</p>
  </div>

  <a class="white-bg no-underline" href="/">
    <h1>C<img class="inside" src="assets/images/alessandro.png" alt="o" title="o">deS<img class="inside" src="assets/images/santasgirl.png" alt="a" title="a">nt<img class="inside" src="assets/images/santasgirl.png" alt="a" title="a"></h1>
  </a>
  
  <div id="loadertext" class="nodisplay">
      <h3>We are crawling The Internet to find out if there is a Cheat-Santa among us!</h3>
      <small>Note: Due to the size of "Santa's belly", this might take a while...</small>
  </div>

  <div id="loader" class="nodisplay">
      <span class="loader"><span class="loader-inner"></span></span>
  </div>

  <p id="error" class="novisibile">Error</p>
  <div class="margin-top-4">
    <img class="text-center" src="assets/images/alessandro.png" alt="Alessandro">

    <textarea name="code" class="code-textarea" id="code" rows="10" placeholder="Enter cadeaukescode here!"></textarea>
    <input type="text" id="repo" placeholder="Enter a Github cadeaukes link here! So Santa Alessandro can spot duplicate cadeaukes for you!">
    <button id="go" onclick="CheckTheCode()">Ask Santa Alessandro to check de cadeaukes!</button>
  </div>

  <div class="alert nodisplay git">
      <p id="responsetextgitrepo"></p>
  </div>
  <div class="alert nodisplay git">
      <p id="responsetextgitfork"></p>
  </div>
  <div class="alert nodisplay git">
      <p id="responsetextgitpull"></p>
  </div>
  <div class="alert nodisplay stack">
      <p id="responsetextstack"></p>
  </div>
  <div class="alert nodisplay archive">
      <p id="responsetextarchive"></p>
  </div>
  <div class="alert nodisplay identical">
      <p id="responsetextidentical"></p>
  </div>

  <a href="javascript:window.location.reload(true)" class="nodisplay" id="restart" title="Search Again">Search for more cadeaukes</a>

  <div id="footer">
      &copy; <?= date("Y");?>
      <a class="color-white hover-black" href="https://www.robbertluit.be" target="_blank" title="Robbert Luit">Modified Santa version by Robbert Luit</a> 
      --
      <a class="color-white hover-black" href="https://www.alessandroaussems.be" target="_blank" title="Alessandro Aussems">Original by Alessandro Aussems</a>
  </div>

  <!-- SCRIPTS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/main.js"></script>
</body>
</html>