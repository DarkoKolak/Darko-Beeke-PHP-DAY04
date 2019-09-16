<!DOCTYPE html>
<html>
<head>
	<title>kk</title>
</head>
<body>
	<?php 
	class Author
		{
			public $id;
			public $name;
			public $surname;
			public $birthDate;
			
			function __construct($ida,$firstname,$lastname,$DateofBirth)
			{
			$this->id = $ida;
			$this->name = $firstname;
			$this->surname = $lastname;
			$this->birthDate = $DateofBirth;

			}

			public  function delete(){
				$mysqli = new mysqli("localhost","root","","cr11_darko_kolak_biglibrary");

				if ($mysqli->connect_errno) {
					echo "no f***** connection to our database" .$mysqli->connect_error;
				}

				$beekesql="DELETE FROM author where authorId = " .$this->id;

				$result = $mysqli->query($beekesql);

			}


		}

$mysqli = new mysqli("localhost","root","","cr11_darko_kolak_biglibrary");
$id = $_GET['id'];
$name = $_GET['name'];
$surname = $_GET['surname'];
$birthDate = $_GET['date'];

$objekt = new Author($id,$name,$surname,$birthDate);

$objekt->delete();
echo "i was here";



	 ?>

</body>
</html>