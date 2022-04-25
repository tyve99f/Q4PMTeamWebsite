//Idle timer template
let inactivityTime = function () {
  console.log('Inactivity Timer Start');
  let time;
  window.onload = resetTimer;
  document.onmousemove = resetTimer;
  document.onclick = resetTimer;
  document.onkeypress = resetTimer;
  //resets timer whenever keyboard or mouse is interacted with
  function logout() {
    console.log("You have been kicked out for inactivity.");
  }
  function resetTimer() {
    clearTimeout(time);
    time = setTimeout(logout, 4000000); //amount of milliseconds allowed until the logout() function is called
  }
};
inactivityTime();



/*Leaving notes on plans for when a player is kicked: 
(we can move these to a planning document if needed)
- Preg_match() for player ids at the start of each round and assign their sentences as null.
- If a player is disconnected before submitting their first sentence remove their story and treat the room as if it had one less player
- If a story's last sentence is assigned to a player that has left the game alert the player in the penultimate round that their sentence will end the story
- Attempt to reassign all null sentences to the other players
- Hold an extra round at the end of the game to fill in all null sentences

*/

function openMenu() { //opens the hamburger menu
  document.getElementById("burger").style.width = "250px"; // sets the width of the menu to 250.
  document.getElementById("burger").style.borderWidth = "5px"; // sets the width of the border to 5.
}

function closeMenu() { // closes the hamburger menu
  document.getElementById("burger").style.width = "0"; // sets the width of the menu to 0.
  document.getElementById("burger").style.borderWidth = "0"; // sets the width of the border to 0 as well.
}