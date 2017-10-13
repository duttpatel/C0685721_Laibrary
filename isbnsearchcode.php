<?php
$isbn=$_GET['isbn'];
$connect=mysqli_connect("localhost",'root','','lms');

$query="select * from BookMaster where ISBN='$isbn'";

$result=mysqli_query($connect,$query);
if($result->num_rows==1)
{
$row=mysqli_fetch_assoc($result);
echo "<table class='table'>
	<thead>
		<th>#</th>
		<th>Book Tilte</th>
		<th>Book Author</th>
		<th>Book Publisher</th>
		<th>Book Edition</th>
		<th>Book ISBN</th>
		<th>Book Price</th>
		<th>Book Copy</th>
	</thead>
	<tbody>
	<tr>
			<td>".
			$row['BookId']."
			</td>
			<td>".
			$row['Title']."
			</td>

			<td>".
			$row['Author']."
			</td>
			
     		 <td>".
			$row['Publisher']."
			</td>
			<td>".
			$row['Edition']."
			</td>
			<td>".
			$row['ISBN']."
      </td>
      <td>".
			$row['Price']."
			</td>
      <td>".
			$row['Copy']."
      </td>
	  </tr>
	</tbody>
</table>"; 
}
else
{
	echo "Book Not Found with ISBN NO $isbn";
}?>
