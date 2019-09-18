<!DOCTYPE html>
<html>
<body>
<div id="content">
<h1>Sooooooongs</h1>
<button type="button" onclick="loadDoc()">Change Content</button>
</div>
<div id="songs"></div>

<script>
function loadDoc() {
 var xhttp = new XMLHttpRequest();
 xhttp.onreadystatechange = function() {
   if (this.readyState == 4 && this.status == 200) {
   	myfunction(this);
   }
 };
 xhttp.open("GET", "songs.xml", true);
 xhttp.send();
}

function myfunction(xml){
	var i; 
	var beeke = xml.responseXML;
	var table = "<tr><th>title</th><th>artist</th><th>country</th><th>genre</th><th>year</th></tr>";
	var darko = beeke.getElementsByTagName("song");
	for (i=0;i<darko.length;i++){
		table+="<tr><td>"+darko[i].getElementsByTagName("title")[0].childNodes[0].nodeValue+"</td><td>"+darko[i].getElementsByTagName("artist")[0].childNodes[0].nodeValue+"</td><td>"+darko[i].getElementsByTagName("country")[0].childNodes[0].nodeValue+"</td><td>"+darko[i].getElementsByTagName("genre")[0].childNodes[0].nodeValue+"</td><td>"+darko[i].getElementsByTagName("year")[0].childNodes[0].nodeValue+"</td></tr>";
	} 
document.getElementById("songs").innerHTML=table;
}
</script>
</body>
</html>