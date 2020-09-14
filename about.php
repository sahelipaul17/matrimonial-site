<html>
<head>
<title></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
    
    
<body>
<section class="header" box-sizing: border-box;>  
<nav class="navbar navbar-expand-lg  navbar-dsrk by-dark">
  <div class="logo"> 
        <img src="vivah.png">
    </div>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
   <ul class="navbar-nav mr-auto">
      
     <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
        <div class="dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Language</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
           <li><a class="dropdown-item" href="#">Hindi</a></li>
            <li><a class="dropdown-item" href="#">Bengali</a></li>
             <li><a class="dropdown-item" href="#">Kannada</a></li>
            <li><a class="dropdown-item"  href="#">Malayalee</a></li>
            <li><a class="dropdown-item" href="#">Marathi</a></li>
            <div class="dropdown-divider"></div>
            <li><a class="dropdown-item"  href="#">Punjabi</a></li>
            <li><a class="dropdown-item" href="#">Orya</a></li>
            <li><a class="dropdown-item" href="#">Tamil</a></li>
            <li><a class="dropdown-item" href="#">Telugu</a></li>
            <li><a class="dropdown-item"  href="#">Sindhi</a></li>  
          </ul>
     </div>
    </ul>
    
  
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="about.php">About Us</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Help
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Help</a>
            <a class="dropdown-item" href="#">Contact Us</a>
          <a class="dropdown-item" href="#">My Request</a>
          <a class="dropdown-item" href="#">Security Tips</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Need Help? </a>
        </div>
      </li>
        
      </ul>
    <form class="form-inline my-1 my-lg-0">
      <input class="form-control mr-sm-1" type="location" placeholder="location" aria-label="Location"> 
               

      <input class="form-control mr-sm-1" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-danger my-1 my-sm-0" type="submit">Search</button>
    </form>
  </div>
    <button class="open-button" onclick="openForm()">Open Form</button>
    <div class="form-popup" id="myForm">
  <form action="/page.php" class="form-container">
    <h1>Login</h1>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" class="btn">Login</button>
    <button type="submit" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>
        
    </nav>

  <div class="jumbotron">
  <h1 class="display-4">Vivah.com</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
</div>


    </section>
    </body>

</html>