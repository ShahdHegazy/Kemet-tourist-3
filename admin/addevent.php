<?php include("header.php");?>



<section class="contact " id="contact ">

<h1 class="heading ">
    <span>A</span>
    <span>D</span>
    <span>D</span>
    <span>E</span>
    <span>V</span>
    <span>E</span>
    <span>N</span>
    <span>T</span>
  </h1>






<div class="bgded overlay" style="background-image:url('images/abg.png');" width=100px norepeat>
  <div id="pageintro" class="hoc clear"> 
    <article>
        <br><br><br>
        <br><br><br>
        <br><br><br>
      <h3 class="heading">Event System</h3>
      <p>The application / is an application for booking for any event.</p>
 
    </article>
  </div>
</div>



<div class="wrapper row2">
  <section id="ctdetails" class="hoc container clear"> 
   <div class="one_quarter1"> &nbsp;&nbsp; </div>
   <article class="three_quarter">
<br>
<br>
      
<div class="row ">



<form method="post" action=""  enctype="multipart/form-data">
<div class="contents">
<div class="content ">
            <h3 align="center"> ENTER EVENT INFORMATIONS</h3> </div>
    <br> <br> <br>
</div>
<fieldset>
    <div class="inputBox ">
    <input type="text " placeholder="name " name="Event_Name" required> <br> <br> <br>
            <input type="text " placeholder="Description " name="Event_Description" required><br> <br> <br>
    </div>
    <div class="inputBox ">
    
            <input type="file" name="upload" required class="form-control">
    </div>
    
    <button type="submit " class="btn " name="submit" value="ADD"> ADD </button>
</fieldset>
</form>

</div>
      

 
  </section>
  
</section>






<?php 	
if(@$_POST['submit'] and $_POST['submit']=='ADD' )
{
include("connection.php");

$Event_Name=$_POST['Event_Name'];
$Event_Description=$_POST['Event_Description'];


$filetempname=$_FILES['upload']['tmp_name'];
$filename=$_FILES['upload']['name'];
$type=$_FILES['upload']['type'];
$error=$_FILES['upload']['error'];

$random=rand(0,99);
$url=date('d-m-y').$random.$filename;
$uploadDirectory=dirname(__FILE__).'/uploaded/';
$datapage['page_image']   = $uploadDirectory.$url;

$destination=$uploadDirectory.date('d-m-y').$random.$filename;
move_uploaded_file($filetempname, $destination);
$PG_Photo='uploaded/'.date('d-m-y').$random.$filename;

$sql1="INSERT INTO `event` ( `Event_Name`, `Event_Description`, `Photo`) 
VALUES ('$Event_Name', '$Event_Description', '$PG_Photo');";
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