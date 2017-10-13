<?php
$isbn=$_GET['isbn'];
$connect=mysqli_connect("localhost",'root','','lms');

$query="select * from BookMaster where ISBN='$isbn'";
$result=mysqli_query($connect,$query);
if($result->num_rows==1)
{
	$query="select * from BookMaster where ISBN='$isbn' and Copy>0";
	$result=mysqli_query($connect,$query);
	if($result->num_rows>=1)
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
		<th>Action</th>
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
		<td>
		<a href='requestbookcode.php?bid=".$row['BookId']."' class='btn btn-primary'>Request</a>
		</td>
	  	</tr>
		</tbody>
		</table>"; 
	}
	else
	{
	echo "Book is not enough";
	}
}
else
{
	echo "Book Not Found with ISBN NO $isbn";
}?>
