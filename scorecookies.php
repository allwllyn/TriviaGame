function saveScore() {
 var date = new Date();
  date.setMonth(date.getMonth()+5);
  var expires = "; expires=" + date.toGMTString();
  document.cookie = "score=" + lvl + expires + "; path=/";
}

function loadScore() {

  var cookiearray = document.cookie.split(';');
  for (var i = 0; i < cookiearray.length; i++) {
    var name = cookiearray[i].split('=')[0];
    var value = cookiearray[i].split('=')[1];
    if (name == "score") {
      alert("Prior score found. Loading score...");
      lvl = value;
    }
  }
}