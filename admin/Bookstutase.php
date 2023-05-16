<?php include("header.php");?>



<section class="contact " id="contact ">

<h1 class="heading ">
    <span>B</span>
    <span>O</span>
    <span>O</span>
    <span>K</span>
    <span>I</span>
    <span>N</span>
    <span>G</span>-
   
  </h1>









<?php
				
include("connection.php");

// $query="SELECT * FROM  user, booking where booking.user_name=user.user_name";

// include("connection.php");

$query=$query="SELECT * FROM user,booking WHERE booking.user_name=user.user_name";
$sql=mysqli_query($con,$query); 
if(mysqli_num_rows($sql)>0)
{
	
?>

 <h2 class="heading" style="font-size:30"> All availability status </h2>
      <p class="nospace btmspace-15">Please select an appointment to update status</p>
      <table class="w3-table-all">
    <thead>
      <tr class="w3-red">
        <th>Booking </th> <br>
        <th>username</th> <br> 
    </th>Status</th> <br>
		 <th>Update</th> <br>
		
      </tr>
    </thead>
<?php
while($row=mysqli_fetch_array($sql))
{ 
?>

    <tr>
      <td><?php echo  $row['Booking_ID'];?> </td>
      <td><?php echo  $row['user_name'];?> </td>

      <td><?php echo  $row['status'];?> </td> 

		 <td><a class="btn " href="Bookstutas1.php?id=<?php echo  $row['Booking_ID'];?>">Update<a></td>
		 
    </tr>
    
	
<?php 
}
?>
</table>
    </div>
<?php
}
else
echo "<h2>There are no dates recorded in the database</h2>";	


?>
	 
  </section>

 </article>

</div>
<?php include("footer.php");?>