<!DOCTYPE html>
<html>
<head>
	<title>Woooohooo</title>
</head>
<body>

	<div> Testing Darkos memory</div>
	<div id="darko">
		
	</div>
	<button type="button" onclick="darko()">Click me</button>


	<script type="text/javascript">
		
		function darko(){

			var beeke = new XMLHttpRequest();
			beeke.onreadystatechange = function(){
				if (this.readyState ==4 && this.status ==200){
					
					document.getElementById("darko").innerHTML=
					this.responseText;
				}
			};
			beeke.open("GET","beeke.txt",true);
			beeke.send();
		}


	</script>

</body>
</html>