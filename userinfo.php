
<?php
    
    
$con = mysqli_connect('localhost','root');
    if($con){
        echo "Connection successful";
    }else{
      echo "No Connection";
    }

    
  mysqli_select_db($con,'youtubeuserdata');
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $country = $_POST['country'];
    $subject = $_POST['subject'];
    
    
    $query = "insert into userinfodata (firstname,lastname,country,subject) value ('$firstname','$lastname','$country','$subject')";
    
    
    mysqli_query($con,$query);
    echo "$query";
    
    
    header('location:index.php');
   