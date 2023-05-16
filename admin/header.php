<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KEMET</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    
    <link rel="stylesheet" href="css/gallerysty.css">
</head>

<body>

    <!-- header section starts  -->

    <header>

        <div id="menu-bar" class="fas fa-bars"></div>

        <img class="logo" src="images/logo.png" width="120px">

         <nav class="navbar">
            <a href="admincpanel.php">Home</a>
             <a href="addevent.php">Add</a>
            <a href="updateevent.php">Update</a>
            <a href="Bookstutase.php">Booking</a>
            <a href="updateevent.php">Delete</a>
			 
 </nav>  

      <!-- <div class="icons">

            <i class="fas fa-user" id="login-btn"></i>
        </div>   -->



    </header>

    <!-- header section ends -->

    <!-- login form container  -->

    <div class="login-form-container">

        <i class="fas fa-times" id="form-close"></i>

        <form action="server.php" method="post">
            <h3>Login</h3>
            <input type="email" class="box" name="Useremail" placeholder="enter your email">
            <input type="password" class="box" name="Password" placeholder="enter your password">
            <input type="submit" value="login now" class="btn"> 
            <input type="checkbox" id="remember">
            <label for="remember">remember me</label>
            <p>forget password? <a href="#">click here</a></p>
            <p>don't have and account? <a href="signup.php">register now</a></p>
        </form>

    </div>
    <!-- ENDLOGIN -->

