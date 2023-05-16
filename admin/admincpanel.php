<?php  
session_start();

if(isset($_SESSION['user_name']))
include("header.php") ;
else
header("location:index.php");	
?>



<div class="bgded overlay" style="background-image:url('images/abg.png');" width=100px>
  <div id="pageintro" class="hoc clear"> 
    <article>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br> <br>
      <h3 class="heading">Event System</h3>
      <p>The application / is an application for booking for any event.</p>
 
    </article>
  </div>
</div>

<br> <br> <br>

<section class="gallery " id="gallery ">

<h1 class="heading ">
    <span>W</span>
    <span>E</span>
    <span>L</span>
    <span>C</span>
    <span>O</span>
    <span>M</span>
    <span>E</span>
    <br><br>
    <span>A</span>
    <span>D</span>
    <span>M</span>
    <span>I</span>
    <span>N</span>
    
</h1>
    
</section>


  		   <?php
	
    if(isset($_SESSION['user_name']))
    {

      
      
        
      
        // echo ' <h2> Wellcome ' . $_SESSION['user_name'].'</h2><br/>';
        
    }
    else
    {
        header("location:index.php");
    }
?>
 
 
		  </ul>
		</li>
    
      </ul>
	  <h2>
 
  </section>
  
  
  </article>

</div>
<br> <br> <br> <br>
<?php include("footer.php");?>