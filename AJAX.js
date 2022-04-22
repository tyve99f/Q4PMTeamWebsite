function story(sentence) {
  if (sentence =="") {
    document.getElementByID("").innerHTML ="";
    return;
  }
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("").innerHTML = this.responseText;
  }
  xhttp.open("POST", "lobby.php?q="+sentence);
  xhttp.send();
}
