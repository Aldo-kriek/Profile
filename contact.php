<?php

    include 'connect.php';
    session_start(); 


if(isset($_POST['submit']))
{
    $first_name= $_POST['first_name'];
    $last_name= $_POST['last_name'];
    $contact_number= $_POST['contact_number'];
    $email= $_POST['email'];
    $area= $_POST['area'];
    $valet= $_POST['valet'];
    $comments= $_POST['comments'];
    
    $sql = "INSERT INTO feedback (first_name, last_name, contact_number, email, area, valet, comments) values 
    ('$first_name', '$last_name', '$contact_number', '$email', '$area', '$valet', '$comments')";

    $result = mysqli_query($con,$sql);

    if($result)
    {
        header('location:index.php');
    }
    else
    {
        die(mysqli_error($con));
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
	
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" href="style.css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    
</head>
<body>




<div class="wrapper">
    <div class="sidebar">
        <h2>sidebar</h2>
        <ul>
            <li><a href="home.php"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="services.php"><i class="fas fa-address-card"></i>Services</a></li>
            <li><a href="contact.php"><i class="fas fa-address-book"></i>Contact</a></li>
            <li><a href="logout.php"><i class="fas fa-sign-out"></i>Logout</a></li>
         
        </ul> 
   
    </div>
    <div class="main_content">
        <div class="header"><center><b>CONTACT</b></center></div>  
        <div class="info">
          
          <div class="shead"><br><h2>Please leave a message below and i will get back to you.</h2> </div>
         
      </div>
    </div>
</div>
<article class='article'>
<form method="post">

<br><br><br><br>
<div class='bck'>
<div class='form_div'>

<div id= "form_contain"></div>

    <div class="form-group" >
        <label> First Name :</label>
        <input type="text" id='txtbk2'class="form-control" placeholder="Please enter your first name" name="first_name" required autocomplete='off' >
    </div>

    <div class="form-group">
        <label> Last Name :</label>
        <input type="text" id='txtbk3' class="form-control" placeholder="Please enter your last name" name="last_name" required autocomplete="off" >
    </div>

    <div class="form-group">
        <label> Contact Number :</label>
        <input type="text" id='txtbk2'class="form-control" placeholder="Please enter your contact number" name="contact_number" required autocomplete="off" >
    </div>

    <div class="form-group">
        <label> Email :</label>
        <input type="text" id='txtbk3' class="form-control" rows="6" cols="100"placeholder="Please enter your email address" name="email" required autocomplete="off" >
    </div>

    <div class="form-group">
        <label> Area :</label>
        <input type="text" id='txtbk2' class="form-control" placeholder="Please enter your area details" name="area" required autocomplete="off" >
    </div>

    <div class="form-group10" >
        
        <label for="">Valet</label>
            <select id='txtbk' name="valet"  class="form-control" required class="sel my-5" >
                <option value="" >Please select option</option>
                <option value="android">ANDROID</option>
                <option value="html">HTML</option>
                <option value="css">CSS</option>
                <option value="php">PHP</option>
                <option value="java">JAVA</option>
                <option value="JAVASCRIPT">JAVASCRIPT</option>
                <option value="jquery">JQUERY</option>
                <option value="react">REACT</option>
                <option value="mysql">MYSQL</option>
            </select>
            </div>

    <div class="form-group">
        <label> Message :</label>
        <textarea id='txtbk2' class="textbackground" input type='text 'name="comments" rows="6" required cols="100" placeholder="Please enter a message or comment " autocomplete="off" ></textarea>
    </div>
    </div>
    <div class="btns">
        <center><button type="submit" class="btn btn-primary" name="submit" >Submit</button></center>
    </div>
        
</article>
   
    </form>
    

<script>
    




         // Validate first_name
        function validatefirst_name(field)
        {
            return (field =="") ? "No first name was entered. \n" : ""
        }

         // Validate last_name
        function validatelast_name(field)
        {
            return (field =="") ? "No last name was entered. \n" : ""
        }

         // Validate contact_number
        function validatecontact_number(field)
        {
            if (field == "") return "no contact number was entered. \n"
            else if (field.length <5)
            return "contact number must be atleast 5 digits. \n"
            else if (/[^0-9]/.test(field))
            return "Only 0-9, is allowed in contact numbers.\n"
            return ""
        }

         // Validate contact_number
        function validatecontact_number(field)
        {
            if(field == "" || isNaN (field)) return "Contact number was not entered.\n"
            else if (field <5 || field > 10)
            return "Contact number must be between 5 and 10 digits.\n"
            return""
        }

        // Validate Email
        function validateemail(field)
        {
            if(field == "" ) return "No email was entered.\n"
            else if (!((field.indexOf(".") > 0 ) && (field.indexOf("@") > 0)) || /[^a-zA-Z0-9.@_-]/.test(field))
            return "email address is invalid.\n"
            return""
        }

         // Validate Area
        function validatearea(field) 
        {
            return (field =="") ? "No area name was entered. \n" :""
        }

             // Validate Area
             function validatevalet(field) 
        {
            return (field =="") ? "No valet was selected. \n" :""
        }

             // Validate Area
             function validatemessage(field) 
        {
            return (field =="") ? "No message was entered. \n" :""
        }






    </script>




</body>
</html>