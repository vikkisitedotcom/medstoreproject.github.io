<!DOCTYPE html>
<html>
    <head>
        <title>Registration</title>
        <?php include 'cssdata/style.php' ?>
        <?php include 'links/links.php' ?>
    </head>
    <body>
        
<!-------PHP-CODE------------>
        
        <?php
    
    include 'conn.php';
    
        if(isset($_POST['submit'])){
        $username = mysqli_real_escape_string($con, $_POST['username']) ;
        $email = mysqli_real_escape_string($con, $_POST['email']) ;
        $mobile = mysqli_real_escape_string($con, $_POST['mobile']) ;
        $password = mysqli_real_escape_string($con, $_POST['password']) ;
        $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']) ;
            
            $pass = password_hash($password, PASSWORD_BCRYPT);
            $cpass = password_hash($cpassword, PASSWORD_BCRYPT);
            
            $emailquery = " select * from registration where email='$email' ";
            $query = mysqli_query($con,$emailquery);
            
            $emailcount = mysqli_num_rows($query);
            
            if($emailcount>0){
                echo "email already exists";
            }else{
                if($password === $cpassword){
                    
                    $insertquery = "insert into registration values(id,'$username','$email','$mobile','$pass','$cpass')";
                    
                    $iquery = mysqli_query($con, $insertquery);
                    
                    if($con){
                        ?>

                    <script>
                        alert("Inserted Successfully");
                    </script>

                        <?php
                    }else{
                        ?>
                        <script>
                            alert("No Inserted");
                            </script>
                    <?php
                    }
                    
                }else{
                    ?>
                    <script>
                        alert("Password Are Not Matching");
                        </script>
                <?php
                }
            }
            
            
            
        }
        ?>
        
<!----x---PHP-CODE-----x------->        
        
        
        
        
        
        
        <div class="card bg-light">
            <article class="card-body mx-auto" style="max-width: 400px">
                <h4 class="card-title mt-3 text-center"> Create Account</h4>
                <p class="text-center">Get Started With Your Free Account</p>
                
                <p class="divider-text">
                    <span class="bg-light">OR</span>
                </p>
                <form action="" method="POST">
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-user"></i>
                            </span>
                        </div>
                        <input name="username" class="form-control" placeholder="Full Name" type="text" required>
                    </div><!----Form-group------->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                        </div>
                        <input name="email" class="form-control" placeholder="Email Address" type="email" required>
                    </div>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-phone"></i></span>
                        </div>
                        <input name="mobile" class="form-control" placeholder="Phone Number" type="number" required>
                    </div>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock">
                                </i>
                            </span>
                        </div>
                        <input class="form-control" placeholder="Create Password" type="password" name="password" value="" required>
                    </div>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i>
                            </span>
                        </div>
                        <input class="form-control" placeholder="Repeat Password" type="password" name="cpassword" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary btn-black w-100">Create Account</button>
                    </div>
                    <p class="text-center">Have An Account ? <a href="login.php">Log In</a></p>
                </form>
            </article>
        </div>
        
    </body>
</html>













