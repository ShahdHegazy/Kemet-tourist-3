
  <?php include("header.php");?>
  <section class="contact " id="contact ">

<h1 class="heading ">
    <span>C</span>
    <span>H</span>
    <span>A</span>
    <span>N</span>
    <span>G</span>
    <span>E</span>
    <br>
    <span>S</span>
    <span>T</span>
    <span>U</span>
    <span>T</span>
    <span>A</span>
    <span>S</span>
   
</h1>
</section>
 
  <!-- ////////////////////////// -->
  <br> <br> <br> <br>
  <section class="contact " id="contact ">
<div class="row ">
<form method="post" action="" id="contactform" enctype="multipart/form-data">
        <div class="inputBox ">
        <select name="Status">
       <br> <option value="Accept">Accept</option> <br>
        <option value="Reject">Reject</option> <br>
      
    </select><br>
    <input type="submit" name="submit"  class="btn " value="Change">
       
    </form>

</div>

</section>
  <!-- ///////////////////////// -->

              
            
            
      
         
         
<?php 	
if(@$_POST['submit'] and $_POST['submit']=='Change' )
{
include("connection.php");
$id=$_GET['id'];
$Status=$_POST['Status'];

$sql1="UPDATE `booking` SET `status`='$Status' WHERE  `Booking_ID`= $id";
if(mysqli_query($con,$sql1))
{
?>
<script type="text/javascript">
alert("Event has been successfully added");

</script>
<?php
}
}?>
	
	
  </article>

</div>
<?php include("footer.php");?>
