
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Diaspora To You</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="stylings.css" rel="stylesheet">
      <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
      
  </head>
  <body>

  <nav role="navigation" class="navbar navbar-custom navbar-fixed-top">
      
          <div class="container-fluid">
            
              <div class="navbar-header">
              
                  <a class="navbar-brand" href="index.php">Diaspora To You</a>

                  <button type="button" class="navbar-toggle" data-target="#navbarCollapse" data-toggle="collapse">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  
                  </button>
              </div>
              <div class="navbar-collapse collapse" id="navbarCollapse">      
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="databases.php">Databases</a></li>
                        <li><a href="research.php">Research</a></li>
                    <li><a href="community.php">Community</a></li>
                        <li><a href="consultations.php">Consultations</a></li>
                    <li><a href="contact.php">Contact us</a></li>
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="#loginModal" data-toggle="modal">Login</a></li>
                  </ul>
              
              </div>
          </div>
      
      </nav>
    
    
         <div class="jumbotron" id="myContainer">
          <h1 left-align>Contact Us</h1>
        
      
            <p><form>
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname"><br>
 <label for="email">Email Address:</label><br>
  <input type="text" id="email" name="email"><br>
 <label for="message">Message:</label><br>
  <textarea id="w3review" name="w3review" rows="4" cols="50"></textarea>
              <br>
  <input type="submit" value="Submit">
             </form>
             
                <h3 left-align>Requests</h3>
                        <p><form>
             
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname"><br>
 <label for="birth">Year of Birth:</label><br>
  <input type="text" id="contract" name="contract"><br>

 <label for="birth">Port of Departure:</label><br>
  <input type="text" id="depart" name="depart"><br>
             

 <label for="birth">Port of Arrival:</label><br>
  <input type="text" id="arrival" name="arrival"><br>       

<label for="birth">Contract Number:</label><br>
  <input type="text" id="contract" name="contract"><br> 
             
             
 <label for="message"></label><br>
              <label for="message">Additional Information:</label><br>

  <textarea id="w3review" name="w3review" rows="4" cols="50"></textarea>
              <br>
  <input type="submit" value="Submit">
             </form>

 </div>
      
    <!-- Footer-->
      <div class="footer">
          <div class="footer">
          <div class="container">
              <p>Anish Kishan Kanhai - L00162138 (Atlantic Technological University)<?php $today = date("Y"); echo $today?>.</p>
          </div>
      </div>
           </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="javascript.js"></script>
  </body>
</html>