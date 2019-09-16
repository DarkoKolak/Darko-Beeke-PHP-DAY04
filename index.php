<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>






	<?php 


					$connectiontoDb = new mysqli("localhost","root","","cr11_darko_kolak_biglibrary");
					$sql = "SELECT * from author";

					$result = $connectiontoDb->query($sql) or die(mysqli_error());

					$row = $result->fetch_assoc();

					            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo  "<table>
                   <tr>
                       <td>" .$row['authorId']."</td> <td>".$row['name' ]."</td>
                       <td>" .$row['surname']."</td>
                       <td> " .$row['birthDate']."</td>
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