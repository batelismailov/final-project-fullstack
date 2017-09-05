<?php
require_once('db.php');

if(isset($_POST['name']))
{
	$sql=sprintf("insert into `users` values(null,'%s','%s','%s','%s','%s','asda','%s','%s')",$_POST['name'],$_POST['lastname'],$_POST['title'],$_POST['phone'],$_POST['address'],$_POST['email'],$_POST['about_me']);
	if($mysqli->query($sql) === TRUE)
	{
		echo "info recorded successfully";
	}
	else
	{
		echo "ERROR  occured";
		
	}
}

?>


<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
        <!--<link rel="stylesheet" href="css/custom.css">!-->
        <style>
        body {
    font-family: 'Open Sans' , sans-serif;
}

table, th, td {
    border: 1px solid black;
}

h1 {color: green}

#BasicInfo {
    padding-bottom: 20px;
    border-bottom: 2px solid #283593;
}

#Social_Networks {
    padding-bottom: 20px;
    border-bottom: 2px solid #283593;
}

#Experiance{
     padding-bottom: 20px;
    border-bottom: 2px solid #283593;
}

#Skills{
    padding-bottom: 20px;
    border-bottom: 2px solid #283593;
}

#Education{
    padding-bottom: 20px;
    border-bottom: 2px solid #283593;
}

#Hobbies{
    padding-bottom: 20px;
    border-bottom: 2px solid #283593;
}

#Languages{
    padding-bottom: 20px;
    border-bottom: 2px solid #283593;
}
/*
#BasicInfo input:nth-child(1) {
    display:list-item;
}
*/


        </style>
        <script src="js/vendor/modernizr-2.8.3.min.js"></script> 
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        
       
<h2>Registration Form</h2>

<form method="post" action="">
  <section id="BasicInfo">
      <h2>Basic Info</h2>
      <input type="text" placeholder="ID" name="id" >
    <input type="text" placeholder="Name" name="name" required>
    <input type="text" placeholder="Last Name" name="lastname" required>
      <input type="text" placeholder="Title" name="title" required>
    <input type="tel" placeholder="Phone" name="phone" required>
     <input type="text" placeholder="Address" name="address" required>
    <input type="email" placeholder="Email" name="email" required>
      <input type="text" placeholder="About me" name="about_me" required>
	  <button type="submit" value="Submit" width="50px" height="20px"/>
        </section>
        </form>
        <section id="Social_Networks">
            <h2>Social Networks</h2>
         <input type="text" placeholder="Facebook link" id="facebook_link" >   
        <input type="text" placeholder="Website Link" id="website_link" >
        <input type="text" placeholder="Linkedin Link" id="linkedin_link" >
        <input type="text" placeholder="Medium Link" id="medium_link" >
        <input type="text" placeholder="Instagram" id="instagram" >
        <input type="text" placeholder="Google Plus Link" id="google_plus_link" >
        </section>
        
        <section id="Experiance">
        <h2>Experiance</h2>
        <input type="text" placeholder="Title" id="title[1]">
        <input type="text" placeholder="Sub Title" id="sub_title[1]" >
        <input type="text" placeholder="Work Dates" id="work_dates[1]" >
        <input type="text" placeholder="Desription" id="description[1]">
        <br><br/>
        
            
        <input type="text" placeholder="Title" id="title[2]">
        <input type="text" placeholder="Sub Title" id="sub_title[2]" >
        <input type="text" placeholder="Work Dates" id="work_dates[2]" >
        <input type="text" placeholder="Desription" id="description[2]">
        <br><br/> 
        
        <input type="text" placeholder="Title" id="title[3]">
        <input type="text" placeholder="Sub Title" id="sub_title[3]" >
        <input type="text" placeholder="Work Dates" id="work_dates[3]" >
        <input type="text" placeholder="Desription" id="description[3]"> 
        <br><br/>
        </section>
        
        <section id="Skills">
        <h2>Skills</h2>
        <h4>Pro Skils</h4>
        <input type="text" placeholder="First Skill Name" id="skill_name1">
        <input type="text" placeholder="Skill Value (Number)" id="skill_value1">
        <input type="text" placeholder="Second Skill Name" id="skill_name2">
        <input type="text" placeholder="Skill Value (Number)" id="skill_value2">
        <input type="text" placeholder="Third Skill Name" id="skill_name3">
        <input type="text" placeholder="Skill Value (Number)" id="skill_value3">
        <input type="text" placeholder="Forth Skill Name" id="skill_name4">
        <input type="text" placeholder="Skill Value (Number)" id="skill_value4">
        <br><br/>
            
        <h4>Per Skils</h4>
        <input type="text" placeholder="First Skill Attribute" id="skill_attribute1">
        <input type="text" placeholder="Skill Value (Number)" id="skill_value1">
        <input type="text" placeholder="Second Skill Attribute" id="skill_attribute2">
        <input type="text" placeholder="Skill Value (Number)" id="skill_value2">
        <input type="text" placeholder="Third Skill Attribute" id="skill_attribute3">
        <input type="text" placeholder="Skill Value (Number)" id="skill_value3">
        <input type="text" placeholder="Forth Skill Attribute" id="skill_attribute4">
        <input type="text" placeholder="Skill Value (Number)" id="skill_value4">
        <br><br/>
        
        </section>
        <section id="Education">
        <h2>Education</h2>
        <input type="text" placeholder="Title" id="title1">
        <input type="text" placeholder="Place" id="place1">
        <input type="text" placeholder="Education Date" id="education_date1">
        <input type="text" placeholder="Description" id="description1">
        <br><br/>
            
         <input type="text" placeholder="Title" id="title2">
        <input type="text" placeholder="Place" id="place2">
        <input type="text" placeholder="Education Date" id="education_date2">
        <input type="text" placeholder="Description" id="description2">
        <br><br/>
        </section>
        
        <section id="Hobbies_And_Languages">
        <section id="Hobbies">
        <h2>Hobbies</h2>
        <input type="checkbox" id="sport">Sport<br> 
        <input type="checkbox" id="reading">Reading<br> 
        <input type="checkbox" id="swimming">Swimming<br> 
        <input type="checkbox" id="programming">Programming<br> 
        <input type="checkbox" id="watching_movies">Watching Movies<br>
        <input type="checkbox" id="gaming">Gaming<br>
        </section>
            
        <section id="Language">
        <h2>Languages</h2>  
         <input type="text" placeholder="First Language Name" id="language_name1">
        <input type="text" placeholder="Language Value (Number)" id="language_value1">
        <input type="text" placeholder="Second Language Name" id="language_name2">
        <input type="text" placeholder="Language Value (Number)" id="language_value2">
        <input type="text" placeholder="Third Language Name" id="language_name3">
        <input type="text" placeholder="Language Value (Number)" id="language_value3">
        <input type="text" placeholder="Forth Language Name" id="language_name4">
        <input type="text" placeholder="Language Value (Number)" id="language_value4">
        </section>
        
        </section>
    <section id="EndOfRegistration">
      <a href="file:///C:\Users\Administrator\Desktop\Projects\Fullstack_PHP_Project\UserList\index.html">Return to UsersList</a>
        
      <button type="submit"  id='registerBtn' class="signupbtn">Register</button>
    </section>



            
            
        
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/register.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
