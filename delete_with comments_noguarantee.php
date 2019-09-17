<!DOCTYPE html>
<html>
<head>
	<title>kA</title>
</head>
<body>

	<?php 
	class Author{
		public $id;
		public $name;
		public $surname;
		public $birthDate;
		
		function __construct($ida,$firstname,$lastname,$DateofBirth){
		// every time i want to change sth, i need to use these parameters
			$this->id = $ida;
			$this->name = $firstname;
			$this->surname = $lastname;
			$this->birthDate = $DateofBirth;
		}

		public  function delete(){
			$mysqli = new mysqli("localhost","root","","Darkos Library");

			if ($mysqli->connect_errno) {
				echo "no f***** connection to our database" .$mysqli->connect_error;
			}

			$beekesql="DELETE FROM author where authorId = " .$this->id;

			$result = $mysqli->query($beekesql);
		}
	}

// $mysqli = new mysqli("localhost","root","","Darkos Library");
// because the connection inside the function on line 25 only has function scope

if (!isset($_GET['id'];)){
	echo "We need the id, please!"
}
else{
$id = $_GET['id'];
}
// needed for better security. user should not be able to break the system by leaving out the id
$name = $_GET['name'];
$surname = $_GET['surname'];
$birthDate = $_GET['date'];
// we get these not from the database, but from the previous page
// not really secure
// always check: do we have id

$objekt = new Author($id,$name,$surname,$birthDate);

$objekt->delete();
// for this function we do not need the connection on line 37
// SO IN CONCLUSION WE DO NOT NEED THE NEW CONNECTION IN THIS CASE; ONLY IF WE WANTED TO DO ANOTHERR QUERY

echo "i was here";

	?>

</body>
</html>