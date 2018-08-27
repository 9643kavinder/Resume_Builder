</body>
</html>

<!DOCTYPE html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Log in to cv builder... </title>
  <link rel="stylesheet" href="./mystyle.css">
</head>
<body background="o-SUCCESS-facebook.jpg"><header>
  <div class="container">
    <div id="branding">
      <h1><span class="highlight">CV Builder </span>for  success destined professionals</h1>
    </div>
    <nav>
      <ul>
        <li class="current"><a href="myregister.php">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="login_form.php">Sign in</a></li>
      </ul>
    </nav>
  </div>
    </header>
    <section id="showcase">
      <div class="container">
        <h1>Create your professional resume in 15 minutes</h1>
        <p>My resume builder takes away all of the stress and difficulty that comes with making a resume. I created a cleanly formatted and persuasive resume that landed me more interviews, and employment soon after.</p>
         <img src="20180410_200245.png" >
      </div>

    </section>
    <section id="register">
      <div class="container">
        <h1>Login to access </h1>

        <form action="?php echo $current_file; ?" method="POST"><div class="formgroup">
          <div class="design">Username:<br>
          <input type="text" placeholder="Enter your username...." name="username"><br>
          
          Password:<br>
          <input type="password" placeholder="Enter password...." name="password"><br>
          
          <button type="submit" class="button_1">Log in</button>
           <a href="myregister.php">Don't have an account yet?<br> Create Account here!!!</a>
        </div></div>
      </form>
    </div>
          
     
    </section>
    


<?php
//echo "Please<a href='myregister.php'>Register</a>";
include 'dbconnect.php';
include_once 'userdata.inc.php';
if(isset($_POST['username'])&& isset($_POST['password']))
  {$username=$_POST['username'];
   $password=$_POST['password'];  
   $password_hash=md5($password);
   if(!empty($username) && !empty($password))
   	{
   		$query="SELECT `ID` FROM `my_users` WHERE `NAME`='$username' AND `PASSWORD`='$password_hash'";
        if($query_run = mysql_query($query))
        {
          $query_num_rows=mysql_num_rows($query_run);
        
        if ($query_num_rows==0)
             {
             	echo "Invalid Data Entered !!!";
             	echo "Please<a href='myregister.php'>Register</a>";
             }
             else if($query_num_rows==1)
             { 
             $user_id=mysql_result($query_run,0,'ID');
             echo $user_id;
             	$_SESSION['user_id']=$user_id;
             	header('Location:myindex.php');

             }
        }             
     }
     else
       	{
       		echo "Please enter all details asked here!!";
       	}
   }
 ?>
 




</body>
</html>

