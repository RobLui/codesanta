  var textfield = document.getElementById("code");
  var inputfield = document.getElementById("repo");
  var button = document.getElementById("go");
  var loader = document.getElementById("loader");
  var loadertext = document.getElementById("loadertext");

  textfield.addEventListener("keyup", function (evt) {
      CodeFieldChanged(evt);
  }, false);

  textfield.addEventListener("change", function (evt) {
      CodeFieldChanged(evt);
  }, false);

  function CheckTheCode()
  {
      var code= textfield.value;
      var repoURL= inputfield.value;
      if(code == "")
      {
          Error("The code field cannot be empty!");
      }
      else if(code.length>128)
      {
          Error("Due to API limitations the code cannot be longer than 128chars");
      }
      else
      {
          ErrorFixed();
          HideInputField();
          $.ajax({
              type: "POST",
              url: './checkcode.php',
              data: {codetocheck: code, urltocheck: repoURL.replace("https://github.com/", "")},
              success: function(response) {
                  var RESPONSE=JSON.parse(response);
                  console.log(RESPONSE);
                  if(RESPONSE["repos"]!=0)
                  {
                      ShowResponseText("Your code hass occurences in "+RESPONSE["repos"]+" Github repositorie(s).<br>","gitrepo");
                  }
                  if(RESPONSE["forks"]!=0)
                  {
                      ShowResponseText("Your code repository has "+RESPONSE["forks"]+" fork(s).","gitfork");
                  }
                  if(RESPONSE["forks"]!=0)
                  {
                      ShowResponseText("Your code repository has "+RESPONSE["pulls"]+" closed pull request(s).","gitpull");
                  }
                  if(RESPONSE["questions"]!=0) 
                  {
                      ShowResponseText("Your code has occurences in "+RESPONSE["questions"]+" Stack question(s).<br>","stack");
                  }
                  ShowResponseText("Your code has occurences in "+RESPONSE["avgsimilarity"]+"% of our archive.<br>","archive");
                  if(RESPONSE["identicalfiles"]!=0)
                  {
                      ShowResponseText("Your code looks almost identical with "+RESPONSE["identicalfiles"]+" file(s) of our archive.","identical")
                  }
                  showCheatvalue(RESPONSE["cheatvalue"]);
                  MakePageReadyForReload();
              }
          })
      }
  }
  function ShowResponseText(texttodisplay,sort)
  {
      loader.classList.add("nodisplay"); //remove loaderanimation from the page
      loadertext.classList.add("nodisplay");
      if(sort=="gitrepo")
      {
          var responsetext=document.getElementById("responsetextgitrepo");
          responsetext.innerHTML=texttodisplay;
          document.getElementsByClassName("alert")[0].classList.remove("nodisplay"); //
      }
      if(sort=="gitfork")
      {
          var responsetext=document.getElementById("responsetextgitfork");
          responsetext.innerHTML=texttodisplay;
          document.getElementsByClassName("alert")[1].classList.remove("nodisplay"); //
      }
      if(sort=="gitpull")
      {
          var responsetext=document.getElementById("responsetextgitpull");
          responsetext.innerHTML=texttodisplay;
          document.getElementsByClassName("alert")[2].classList.remove("nodisplay"); //
      }
      if(sort=="stack")
      {
          var responsetext=document.getElementById("responsetextstack");
          responsetext.innerHTML=texttodisplay;
          document.getElementsByClassName("alert")[3].classList.remove("nodisplay"); //
      }
      if(sort=="archive")
      {
          var responsetext=document.getElementById("responsetextarchive");
          responsetext.innerHTML=texttodisplay;
          document.getElementsByClassName("alert")[4].classList.remove("nodisplay"); //
      }
      if(sort=="identical")
      {
          var responsetext=document.getElementById("responsetextidentical");
          responsetext.innerHTML=texttodisplay;
          document.getElementsByClassName("alert")[5].classList.remove("nodisplay"); //
      }
  }
  function HideInputField()
  {
      textfield.classList.add("nodisplay");
      inputfield.classList.add("nodisplay");
      button.classList.add("nodisplay");
      loader.classList.remove("nodisplay");
      loadertext.classList.remove("nodisplay");

  }
  function MakePageReadyForReload()
  {
      document.getElementById("restart").classList.remove("nodisplay");
  }
  function Error(errortext)
  {
      var error=document.getElementById("error");
      error.innerHTML=errortext;
      error.classList.remove("novisibile");
  }
  function ErrorFixed()
  {
      var error=document.getElementById("error");
      if(!error.classList.contains("novisibile"))
      {
          error.innerHTML="Error";
          error.classList.add("novisibile");
      }
  }
  function showCheatvalue(cheatvalue)
  {
      document.getElementsByClassName("circle")[0].classList.remove("nodisplay");
      document.getElementById("cheatvalue").innerHTML=cheatvalue+"%";
  }
  function CodeFieldChanged(evt)
  {
      if(textfield.value.length>128)
      {
          Error("Due to API limitations the code cannot be longer than 128chars");
      }
      if(textfield.value.length<128)
      {
          ErrorFixed();
      }
  }
