<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php 

  	$connectiontoDb = new mysqli("localhost","root","","Darkos Library");
    // web server will be different from "localhost", but some web servers can handle "localhost"

  	$sql = "SELECT * from author";
    // like a string that is q query

  	$result = $connectiontoDb->query($sql) or die(mysqli_error());
    // stops the process

  	// $row = $result->fetch_assoc();
    // not actually needed, because it is in line 26

      if($result->num_rows > 0) {
        // this displays everything on the screen
        // also possible: "for each"
        while($row = $result->fetch_assoc()) {
           echo "<table>
            <tr>
                <td>" .$row['authorId']."</td> 
                <td>".$row['name']."</td>
                <td>" .$row['surname']."</td>
                <td>" .$row['birthDate']."</td>
                <td>
                <a href='update.php?id=" .$row['authorId']."&name=".$row['name']."&surname=" .$row['surname']."&date=".$row['birthDate']." '><button type='button'>Buy</button></a>
                <a href='delete.php?id=" .$row['authorId']."&name=".$row['name']."&surname=" .$row['surname']."&date=".$row['birthDate']."'><button type='button'>Delete</button></a>
                </td>
            </tr> 
            </table>" ;
         }
     } else  {
         echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
     }

  ?>

</body>
</html>

<!-- this is using the get-method -->
<!-- if there is a relation between tables, and you want to update them: update based on the foreign key. use two queries. edit author of book four: if you just do that, all books from that author will be changed. just give user option to edit the book, not the author. but for example if you have car rental, several tables need to be able to be updated. -->