<?php

session_start();

?>



<!DOCTYPE html>
<html>
    <head>
        <title>Registration</title>
        <?php include 'css/style.php' ?>
        <?php include 'links/links.php' ?>
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
                location.replace("portfolio.php");
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


    <div class="card bg-light">
            <article class="card-body mx-auto" style="max-width: 400px">
                <h4 class="card-title mt-3 text-center"> Create Account</h4>
                <p class="text-center">Get Started With Your Free Account</p>
                
                <p class="divider-text">
                    <span class="bg-light">OR</span>
                </p>
                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                   
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                        </div>
                        <input name="email" class="form-control" placeholder="Email ID" type="email" required>
                    </div>
                   
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i>
                            </span>
                        </div>
                        <input class="form-control" placeholder="Password" type="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary btn-black w-100">Login Now</button>
                    </div>
                    <p class="text-center">Registration Here <a href="regis.php">Register</a></p>
                </form>
            </article>
        </div>
        
    </body>
</html>
