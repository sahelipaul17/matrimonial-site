<!DOCTYPE html>
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
    <form class="form-inline my-1 my-lg-0" action="login.php" method="get">
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

  
 </section>
    <script>
        
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

    <section class="my-5">
    
    <div class="py-5">
       
        <div class="find_someone_head"><h1 class="text-center">Find your Patner</h1></div>
        <div class="alert alert-danger text-center" role="alert" style="height:100px;">
            <h5>Your story is waiting to start! </h5>
            <button type="button" class="btn btn-outline-danger">Get Started</button>
</div>
        </div>
       <div class="container">
           <div class="row">
        <div class="col-sm-4" style="background-color:#87CEFA";>
            
         <a href="javascript:void(0);" class="sign_up" onclick="return show_layer('registration', this);" type="registration"><span></span></a>
         <div class="special_someone_wrap">
			<h3>
				<a href="javascript:void(0);" onclick="return show_layer('registration', this);" type="registration">Sign up ></a>
			</h3>
                </div>
			<div>Register for free &amp; put up your Profile</div>
		
         
               </div>
               
        <div class="col-sm-4">
            
		<a href="javascript:void(0);" class="interact" onclick="return show_layer('registration', this);" type="registration"><span></span></a>
		<div class="special_someone_wrap">
			<h3>
				<a href="javascript:void(0);" onclick="return show_layer('registration', this);" type="registration">Connect ></a>
			</h3>
			<div>Select &amp; Connect with Matches you like</div>
		</div>
	
               </div>
        <div class="col-sm-4" style="background-color:#87CEFA";>
           
		<a href="javascript:void(0);" class="connect" onclick="return show_layer('registration', this);" type="registration"><span></span></a>
		<div class="special_someone_wrap">
			<h3>
				<a href="javascript:void(0);" onclick="return show_layer('registration', this);" type="registration">Interact ></a>
			</h3>
			<div>Become a Premium Member &amp; Start a Conversation</div>
		</div>
	</div>
     </div>
    </div>
        
 </section>
    
     

   <section class="my-5" style="background-color:beige";>
    <h1 class="text-center">Happy Wedding!</h1>
     <div class="py-5">
      <div class="row">
         <div class="col-md-3">
            <div class="feature-box">
             <div class="feature-img">
                 <img src="img/couple4.jpg">
              </div>
               
                 
               
             </div>
          </div>
         <div class="col-md-3">
               <div class="feature-box">
             <div class="feature-img">
                 <img src="img/couple%201.jpg">
              </div>
             </div>
          </div>
         <div class="col-md-3">
               <div class="feature-box">
             <div class="feature-img">
                 <img src="img/couple%202.jpg">
               </div>
             
             </div>
          </div>
         <div class="col-md-3">
               <div class="feature-box">
             <div class="feature-img">
                 <img src="img/couple%203.jpg">
              </div>
               
             </div>
          </div>
      </div>
      </div> 
    </section> 
  
    <section class="my-5">
       
       <div class="py-5"style="background-color:grey";>
           <h1 class="text-center">SignUp towards New Step!!</h1>
           <div class="w-50 m-auto">
          <form action="userinfo.php" method="post">
      <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Country</label>
      </div>
      <div class="col-75">
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Subject</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
</form>
    </div>
   </div>
</section>     
    

    
  <section class="my-5" style="box-sizing: border-box;">
     <h1 class="text-center">FeedBack</h1>
    <div class="py-5">
        <div class="row">
        
    <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="effort.jpg" alt="Avatar" style="width:300px;height:200px;">
    </div>
    <div class="flip-card-back">
      <h1>Ashmita & Joe</h1>
      <p>Architect & Engineer</p>
      <p>We love Vivah.com</p>
    </div>
  </div>
</div>
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="img/cover3.jpg" alt="Avatar" style="width:300px;height:200px;">
    </div>
    <div class="flip-card-back">
      <h1>Jacie & Vivek</h1>
      <p>Fashion-Designer & Docter</p>
      <p>We love Vivah.com .We are happy married now for 4 years. </p>
    </div>
  </div>
</div>
<div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="Poses.jpg" alt="Avatar" style="width:300px;height:200px;">
    </div>
    <div class="flip-card-back">
      <h1>Ankita & Sourav</h1>
      <p>Advocate & Engineer</p>
      <p>We love Vivah.com .We are happy married now for 5 years.</p>
    </div>
  </div>
</div>
  <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="pos2.jpg" alt="Avatar" style="width:300px;height:200px;">
    </div>
    <div class="flip-card-back">
      <h1>Ankita & Sourav</h1>
      <p>Advocate & Engineer</p>
      <p>We love Vivah.com .We are happy married now for 5 years.</p>
    </div>
  </div>
</div>          
  <div class="flip-card">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="pose3.jpg" alt="Avatar" style="width:300px;height:200px;">
    </div>
    <div class="flip-card-back">
      <h1>Ankita & Sourav</h1>
      <p>Advocate & Engineer</p>
      <p>We love Vivah.com .We are happy married now for 5 years.</p>
    </div>
  </div>
</div>          
            
            
            
            
            
            
            
            
            
 </div>
</div>
</section>
  
    
 


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    

    
 <section class="my-5">
     <h1 class="text-center">More About Vivah.com </h1>
        <div class="py-5">
             <div class="row">
            <div class="col-lg-6 col-md-4 col-12 text-center" style="background-color:grey";>
              <h2>Your story is waiting to happen!</h2>
                 
            <div class="">
              <button type="button" class="booking-btn">Get Started</button>
                 </div>
                 </div>
            
              <div class="col-lg-6 col-md-4 col-12">
              
              <h3>Vivah.com- join 5 Million Members with their Bio-data and Photos</h3>
              <p>
                Vivah.com,one of India's best known brands and the world's largest matrimonial service was founded with a simple objective - to help people find happiness. The company pioneered online matrimonials in 1996 and continues to lead the exciting matrimony category after more than a decade. By redefining the way Indian brides and grooms meet for marriage, Shaadi.com has created a world-renowned service that has touched over 35 million people.  
                </p>
               </div>
            </div>
           
          </div>
     
            
     
          
    </section>   
    
   
    
    
    
    
    
<section class="my-5 text-center" style="color:white;background-color:#33485a; height:50vh">
<div class="py-4">
    <div class="row">
    
    <div class="col-md-3">
        <h4>Features</h4>
        <p>Deals & Offers</p>
        <p>customer & Reviews</p>
        <p>Cancelation</p>
        <p>Terms & policy</p>
        </div>
    <div class="col-md-3">
        <h4>Quick Contact</h4>
        <p><i class="fa fa-phone-square"></i>+91 8234562700</p>
         <p><i class="fa fa-phone-square"></i>hello@vivah.com</p>
         <p><i class="fa fa-phone-square"></i>xyz road, ABC city</p>
        </div>
    <div class="col-md-3">
    <h4>Follow Us on</h4>
        <p>facebook.com/vivah ltd</p>
        <p>twitter.com/vivah</p>
        <p>instagram/vivah</p>
    </div>
         <div class="col-md-3">
    <h4>Follow Us on</h4>
        <p>facebook.com/vivah ltd</p>
        <p>twitter.com/vivah</p>
        <p>instagram/vivah</p>
    </div>
         
       <hr>
    <div class="copyright p-3 bg-dark text-white text-center"><p>@2020 vivah.com,World's No.1 Lifepartner Service</p> </div>
    <div class="creator p-3 bg-dark text-white text-center" style="float:right;"><p>created by <a href="sahelideveloper.com">sahelideveloper.com</a></p></div>
    </div>
    </div>
    </section>



</body>
</html>