<!DOCTYPE html>
<html>

<head>
    <title>Instagram Profilepictrue Viewer</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   

    <!-- CSS Styling -->
    <link href="css/instagramSearch.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/nav-style.css" rel="stylesheet">
   
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- js files -->
    <script src="js/InstagramSearch.js"></script>
    <script src="js/util/nav.js"></script>
    
   

</head>

<body>

<!-- includes nav-bar -->
<div class="topnav" id="myTopnav">
         <a href="index.php" >Home</a>
         <a href="sites/login.php" >Login</a>
         <a href="sites/kontakt.php"  >Kontakt</a>
         <a href="sites/user-panel.php"  >User Panel</a>
         <a href="javascript:void(0);" class="icon" onclick="navFunction()">
             <i class="fa fa-bars"></i>
         </a>
    </div>


    <form class="form-inline" onsubmit="return false;">
        <div class="form-group">
            <label for="userName">Instagram Username:</label>
            <input type="text" class="form-control" id="userName">
            <button type="button" id="showImageButton" class="btn btn-default">Show Image</button>
        </div>
        
    </form>

    <div id="errorMessageBox" class="alert alert-danger" role="alert"></div>

    <div id="imageContainer">
        <img id="profileImageContainer">
    </div>

  
  
</body>

</html>