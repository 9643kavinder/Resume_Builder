<!DOCTYPE html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Log in to  cv builder... </title>
  <link rel="stylesheet" href="./mystyle.css">
</head>
<body background="o-SUCCESS-facebook.jpg">
	<header>
  <div class="container">
    <div id="branding">
      <h1><span class="highlight">The World's Smartest Resume Builder
 </span>for the success destined professionals</h1>
    </div>
    <nav>
      <ul>
        <li class="current"><a href="add_entry.php">Home</a></li>
        <li><a href="logout.php">logout</a></li>
        
      </ul>
    </nav>
  </div>
    </header>
    <section id="showcase">
      <div class="container">
        <h1>Basic Information</h1>
        <p></p>
         <img src="20180609_060352.png" >
      </div>

    </section>
    <section id="register">
      <div class="container">
        

        <form action="add_entry.php" method="POST">
          <div class="formgroup">
          <div class="design">
          Firstname:<br>
           <input type="text" placeholder="Enter your firstname ...." name="firstname"><br>
           Surname:<br>
            <input type="text" placeholder="Enter your surname...." name="surname"><br>
            Sex:<br>
          <input type="text" placeholder="Enter your gender...." name="sex"><br>
              Marital Status:<br>
          <input type="text" placeholder="Enter your marital status...." name="marital_status"><br>
              Nationality<br>
          <input type="text" placeholder="Enter your nationality...." name="nationality"><br>
              Contact:<br>
          <input type="text" placeholder="Enter your contact...." name="contact"><br>
              Photo upload:<br>
          <input type="text" placeholder="Enter your gender...." name="sex"><br>
              
              
          E-mail id:<br>
          <input type="text" placeholder="Enter email id ...." name="email_id"><br>
              
         
          <button type="submit" class="button_1">Next</button>
        </div>
      </div>
        
      </form>
    </div>
          
     
    </section>
   
<?php

include 'dbconnect.php';
session_start();
if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']))
{

if(isset($_POST['title'])&&isset($_POST['description']))
	
{
	$title=$_POST['title'];
	$description=$_POST['description'];
	if(!empty($title)&&!empty($description))
	{
		
             session_start();
               $query="INSERT INTO `my_info(`Sex`,`Marital_Status`,`Nationality`,`Contact`) VALUES('".mysql_real_escape_string($title)."','".mysql_real_escape_string($description)."','".$_SESSION['user_id']."')";
			$query_run=mysql_query($query);
		    
			
        }
			
	}
}}else
{
	echo "First you need to log in";
}

?>	





</body>
</html>







