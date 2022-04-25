//sends sentence to php file to update database when submitted
function submit(sentence) {
  if (sentence =="") {
    document.getElementByID("").innerHTML ="";
    return;
  }
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("").innerHTML = "Sentence has been submitted. Please wait while the round finishes.";
  }
  xhttp.open("POST", "lobby.php?q="+sentence);
  xhttp.send();
}

//obtains and prints full story from database when game ends
function story() {
  const xhttp = new XMLhttpRequest();
  xhttp.onload = function() {
    document.getElementByID("").innerHTML = this.responceText;  //
  }
  xhttp.open("Post", "lobby.php?q=");
  xhttp.send();
}

