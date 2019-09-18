<!DOCTYPE html>
<html>
<body>
<div id="content">
<h1>The XMLHttpRequest Object halloooooooooooo</h1>
<button type="button" onclick="loadDoc()">Change Content</button>
</div>
<script>
function loadDoc() {
 var xhttp = new XMLHttpRequest();
 xhttp.onreadystatechange = function() {
   if (this.readyState == 4 && this.status == 200) {
     document.getElementById("content").innerHTML =
     this.responseText;
     // responseText is keyword - nicht ändern
   }
 };
 xhttp.open("GET", "darko.txt", true);
 xhttp.send();
}
</script>
</body>
</html>