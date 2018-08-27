<!DOCTYPE html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> The cv builder!! </title>
  <link rel="stylesheet" href="./mystyle.css">
</head>
<body background="20171029_120452.jpg">
  <header>
  <div class="container">
    <div id="branding">
      <h1><span class="highlight">Advanced</span> ONLINE RESUME BUILDER </h1>
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
        <h1>Proven Resume Templates</h1>
        <p>No more worries about how to make your resume. We guide you through the process of writing each section, step-by-step, down to the smallest part. Our resume generator does all of the hard work. Remember, your work experiences and education are unique.  </p>
        <img src="20180415_052859.png" >
      </div>
    </section>
    <section id="register">
      <div class="container">
       <h1>Register to access </h1>
        <form action="myregister.php" method="POST">
          <div class="formgroup">
          <div class="design">Username:<br>
          <input type="text" placeholder="Enter your username...." name="username"><br>
          E-mail id:<br>
          <input type="text" placeholder="Enter email id ...." name="email_id"><br>
          Firstname:<br>
           <input type="text" placeholder="Enter firstname ...." name="firstname"><br>
           Surname:<br>
            <input type="text" placeholder="Enter surname...." name="surname"><br>
          Password:<br>
          <input type="password" placeholder="Enter password...." name="password"><br>
          Password Again:<br>
           <input type="password" placeholder="Enter password again ...." name="password_again"><br>
          <button type="submit" class="button_1">Register</button>
        </div>
      </div>
        </form>
        </div>
        </form>
      </div>
    </section>
   
 <?php
 
 
include 'dbconnect.php';

if(!isset($_SESSION['user_id'])&&empty($_SESSION['user_id']))
	{if( isset($_POST['username']) && isset($_POST['email_id']) && isset($_POST['password']) && isset($_POST['password_again'])&& isset($_POST['firstname'])&& isset($_POST['surname']))
       {
       	$username=$_POST['username'];
        $email_id=$_POST['email_id'];
        $firstname=$_POST['firstname'];
        $surname=$_POST['surname'];
        $password=$_POST['password'];
        $password_again=$_POST['password_again'];
        $password_hash=md5($password);
        if(!empty($username) && !empty($email_id) && !empty($password) && !empty($password_again))
          {if($password != $password_again)
           {
           	echo "password do not match";
           }
            else
           { 
           $query("SELECT `Username` FROM `my_users` WHERE '$username'=`Username`");
            $query_run=mysql_query($query);
            if (mysql_num_rows($query_run)==1)
             {
             	echo "Oops!!!! This username'.$username.' already exists\n";
             	echo "Please<a href='myindex.php'>Login</a>";
             }
             else
             {
             	$query("INSERT INTO `my_users`(`Username`,`Email_id`,`Password`,`Firstname`,`Surname`) VALUES( '".mysql_real_escape_string($username)."', '".mysql_real_escape_string($email_id)."', '".mysql_real_escape_string($password_hash)."','$firstname','$surname' )");

                if($query_run=mysql_query($query))
                  {
                 printf(" user id is $user_id and username $username ");

                 	header('Location:register_success.php');

                  }
                else
                  {
                  	echo "Sorry, cannot register now. Please try later";
                  }
             }                                          	
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




