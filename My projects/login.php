<?php

session_start();

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- bootstrap 4 -->
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    

    <title>Login Page</title>
   <link rel="stylesheet" href="login.css">
   
      
  </head>
  <body>

  <?php
    
    include 'conn.php';

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password']; 

        $email_search = " select * from registration where email='$email' ";
        $query = mysqli_query($con,$email_search);

        $email_count = mysqli_num_rows($query);

        if($email_count){
            $email_pass = mysqli_fetch_assoc($query);

            $db_pass = $email_pass['password'];

            $_SESSION['username'] = $email_pass['username'];

            $pass_decode = password_verify($password, $db_pass);

            if($pass_decode){
                echo "Login Successful";
                ?>
                <script>
                location.replace("index.php");
                </script>
                <?php
            }else{
                echo "Password Incorrect";
            }
            }else{
                echo "Invalid Email";
                
        }
    }
    
    ?>
<?php include 'header_navbar.php'; ?>
    
      <section class="form my-4 mx-5">
          <div class="container21">
            <div class="brt">
              <div class="row no-gutters"> 
              
              <div class="col-lg-5">
                  <img src="indexItems/dr51.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="col-lg-7 px-5 pt-5">
                      <h1 class="font-weight-bold py-3"> Logo </h1>
                      <h4> Sign Into Your Account </h4>
                      <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                      <div class="form-row">
                          <div class="col-lg-7">
                              <input name="email" placeholder="Email ID" class="form-control my-3 p-3" type="email" required>
                          </div>
                          </div>
                        
                          
     <div class="form-row">
        <div class="col-lg-7">
            <input class="form-control my-3 p-3" placeholder="Password" type="password" name="password" Required>
                 </div>
                    </div>
                      
     <div class="form-row">
        <div class="col-lg-7">
            <button type="submit" name="submit" class="btn1 mt-3 mb-5">Login Now</button>
               </div>
                  </div>
                      
                          <a href="#">Forgot Password </a>
                          <p>Don't Have An Account? <a href="regis.php">Register here</a></p>
                      
                      
                      </form>
                  
                  </div>
                  
              </div>
            </div>
          </div>

      </section>
          

           <!--footer-->
            
             <footer class="footer mt-5">
                 <div class="text-center py-5">
                     <h2 class="py-3">MedStore.com</h2>
                     <div class="mx-auto heading-line"></div>
                 </div>
                 <div class="container">
                     <div class="container">
                         <div class="row mb-3">
                             <div class="col-lg-8 offset-lg-2 text-center">
                         <p>Who we are - India's most convenient online pharmacy
                             Medstore.com, India Ki Pharmacy, is brought to you by the Dadha & Company – one of India’s most trusted pharmacies, with over 100 years’ experience in dispensing quality medicines.</p>
                                 
                    <div class="justify-content-center">
                        <i class="fab fa-facebook fa-2x"></i>
                        <i class="fab fa-twitter fa-2x"></i>
                        <i class="fab fa-instagram fa-2x"></i>
                                          
                                 </div>
                     </div>
                         
                         </div>
                         <div class="copyright text-center py-3 border-top text-light">
                             <p>&copy; Copy Right MedStore.com</p>
                         </div>
                     </div>
            
                         </div>
            </footer>
            
            <!--End Of Footer-->
           
       
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>