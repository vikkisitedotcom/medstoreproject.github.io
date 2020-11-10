<?php

session_start();

if(!isset($_SESSION['username'])){
  echo "You are logged out";
  header('location:login.php');
}

?>


<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title> online medicine store </title>
        <!-----------Page-Icon-------------->
       <?php include 'links.php'; ?> 
       
        <link rel="stylesheet" href="css/style.css">
                    

    </head>
    
    <body>
    <?php include 'header_navbar.php'; ?>
        
      
        <!--First slider-->
            
            
            
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="indexItems/ad%20banner7.webp" height="660px" class="d-block w-100" alt="banner4">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
    <div class="carousel-item">
      <img src="indexItems/ad%20banner6.jpg" height="660px" class="d-block w-100" alt="banner9">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
    <div class="carousel-item">
      <img src="indexItems/ad%20banner8.jpg" height="660px" class="d-block w-100" alt="banner10">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
      <div class="carousel-item">
      <img src="indexItems/ad%20banner9.png" height="660px" class="d-block w-100" alt="banner10">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
      <div class="carousel-item">
      <img src="indexItems/ad%20banner10.png" height="660px" class="d-block w-100" alt="banner10">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
      <div class="carousel-item">
      <img src="indexItems/banner4.jpg" height="660px" class="d-block w-100" alt="banner10">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
            
        <!--End First slider-->
            
            <!------------Second-Navbar----------------->

        <section class="second">
            <div class="dlr">
                
               <div class="gen" style="color: rgb(128, 191, 255);">
                   <i class="fa fa-certificate fa-2x"></i>
                </div>
                <div class="mn3">
                    
                    <h4>Genuine Medicines</h4>
                    
                </div>
                    
                    <div class="car" style="color: rgb(128, 191, 255);"> <i class="fa fa-car fa-2x"></i> </div>
                     
                
                <div class="mn1">
                    
                    <h4>Timely Delivery</h4>
                    
                </div>
                
                 
               <div class="inr" style="color: rgb(128, 191, 255);">
                  <i class="fa fa-inr fa-2x"></i>
                </div>
                <div class="mn2">
                    
                    <h4>Easy Returns</h4>
                    
                </div>
                
                 
               <div class="sec" style="color: rgb(128, 191, 255);">
                   <i class="fa fa-lock fa-2x"></i>
                </div>
                <div class="mn4">
                    
                    <h4>Secure Payments</h4>
                    
                </div>
                
                <div class="delivery">
                    
                    <h5><span class="hrs2">Delivery in</span><span class="hrs3"> 24-48</span><span class="hrs">HRS</span></h5>
                    
                </div>
                
            </div>
            
            
            </section>
    
            
            <!-----------End-Of-Second-Navbar----------------->
            
                   
        <!-----------Slider-Product--------------->
       
        <div class="owl-carousel owl-theme">
            <div class="item py-2">
                <div class="product">
                    <a href="#"><img src="indexItems/pro1.jpg" alt="product" class="img-fluid"></a>
                    <div class="text-center">
                        <h6>Fever</h6>
                        <div class="text-success" style="font-size: 12px;" >
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                </div>
                        <div class="py-2">
                            <span>Rs:99</span>
                        </div>
                        <button type="submit" class="btn btn-primary" style="font-size: 12px;">Buy Now
                            </button>
            </div>
                </div>
            </div>
            
            <div class="item py-2">
                <div class="product">
                    <a href="#"><img src="indexItems/pro2.jpg" alt="product" class="img-fluid"></a>
                    <div class="text-center">
                        <h6>Fever</h6>
                        <div class="text-success" style="font-size: 12px;" >
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                </div>
                        <div class="py-2">
                            <span>Rs:99</span>
                        </div>
                        <button type="submit" class="btn btn-primary" style="font-size: 12px;">Buy Now
                            </button>
            </div>
                </div>
            </div>
            
            
            <div class="item py-2">
                <div class="product">
                    <a href="#"><img src="indexItems/pro3.jpg" alt="product" class="img-fluid"></a>
                    <div class="text-center">
                        <h6>Fever</h6>
                        <div class="text-success" style="font-size: 12px;" >
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                </div>
                        <div class="py-2">
                            <span>Rs:99</span>
                        </div>
                        <button type="submit" class="btn btn-primary" style="font-size: 12px;">Buy Now
                            </button>
            </div>
                </div>
            </div>
            
            
            <div class="item py-2">
                <div class="product">
                    <a href="#"><img src="indexItems/pro4.png" alt="product" class="img-fluid"></a>
                    <div class="text-center">
                        <h6>Fever</h6>
                        <div class="text-success" style="font-size: 12px;" >
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                </div>
                        <div class="py-2">
                            <span>Rs:99</span>
                        </div>
                        <button type="submit" class="btn btn-primary" style="font-size: 12px;">Buy Now
                            </button>
            </div>
                </div>
            </div>
            
            
            <div class="item py-2">
                <div class="product">
                    <a href="#"><img src="indexItems/pro5.png" alt="product" class="img-fluid"></a>
                    <div class="text-center">
                        <h6>Fever</h6>
                        <div class="text-success" style="font-size: 12px;" >
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                </div>
                        <div class="py-2">
                            <span>Rs:99</span>
                        </div>
                        <button type="submit" class="btn btn-primary" style="font-size: 12px;">Buy Now
                            </button>
            </div>
                </div>
            </div>
            
            
            <div class="item py-2">
                <div class="product">
                    <a href="#"><img src="indexItems/pro16.jpg" alt="product" class="img-fluid"></a>
                    <div class="text-center">
                        <h6>Fever</h6>
                        <div class="text-success" style="font-size: 12px;" >
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                </div>
                        <div class="py-2">
                            <span>Rs:99</span>
                        </div>
                        <button type="submit" class="btn btn-primary" style="font-size: 12px;">Buy Now
                            </button>
            </div>
                </div>
            </div>
            
            
            <div class="item py-2">
                <div class="product">
                    <a href="#"><img src="indexItems/pro18.jpg" alt="product" class="img-fluid"></a>
                    <div class="text-center">
                        <h6>Fever</h6>
                        <div class="text-success" style="font-size: 12px;" >
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                </div>
                        <div class="py-2">
                            <span>Rs:99</span>
                        </div>
                        <button type="submit" class="btn btn-primary" style="font-size: 12px;">Buy Now
                            </button>
            </div>
                </div>
            </div>
            
            
            
            <div class="item py-2">
                <div class="product">
                    <a href="#"><img src="indexItems/pro17.jpg" alt="product" class="img-fluid"></a>
                    <div class="text-center">
                        <h6>Fever</h6>
                        <div class="text-success" style="font-size: 12px;" >
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                </div>
                        <div class="py-2">
                            <span>Rs:99</span>
                        </div>
                        <button type="submit" class="btn btn-primary" style="font-size: 12px;">Buy Now
                            </button>
            </div>
                </div>
            </div>
            
            
            
            <div class="item py-2">
                <div class="product">
                    <a href="#"><img src="indexItems/pro9.jpg" alt="product" class="img-fluid"></a>
                    <div class="text-center">
                        <h6>Fever</h6>
                        <div class="text-success" style="font-size: 12px;" >
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                </div>
                        <div class="py-2">
                            <span>Rs:99</span>
                        </div>
                        <button type="submit" class="btn btn-primary" style="font-size: 12px;">Buy Now
                            </button>
            </div>
                </div>
            </div>
            
            
            
        </div>
            <!--------End-Of-Product-Slider---------->
            
            
            <!----------Second Slider----------->
    
   
        
        
            
            
            <!--------------------End Of Second Slider------------------->
            
            <!--Services Section-->
            
<section class="services py-5 text-center">
<div class="container10">
<div class="row">
                        
                        <!--Single Service-->

<div class="col-10 mx-auto col-md-6 col-lg-4 my-3">
  <span class="service-icon">
    <i class="fas fa-globe fa-2x"></i>
  </span>
    <h4 class="font-weight-bold text-uppercase">
          World wide shipping.
</h4>
    <p class="text-capitalize"> India Ki Pharmacy, is brought to you by the Dadha & Company – one of India’s most trusted pharmacies, with over 100 years’ experience in dispensing quality medicines.
     </p>
</div>
                        
                        <!--End Single Service-->
                        
                        <!--Single Service-->

<div class="col-10 mx-auto col-md-6 col-lg-4 my-3">
  <span class="service-icon">
    <i class="fa fa-inr fa-2x"></i>
  </span>
<h5 class="font-weight-bold text-uppercase">
  30 days money back.
</h5>
<p class="text-capitalize"> India Ki Pharmacy, is brought to you by the Dadha & Company – one of India’s most trusted pharmacies, with over 100 years’ experience in dispensing quality medicines.
</p>
    </div>
                
                        <!--End Single Service--> 
                        
                        <!--Single Service-->

<div class="col-10 mx-auto col-md-6 col-lg-4 my-3">
  <span class="service-icon">
     <i class="fas fa-stamp fa-2x"></i>
  </span>
<h5 class="font-weight-bold text-uppercase">
 Certified by central government.
</h5>
     <p class="text-capitalize"> India Ki Pharmacy, is brought to you by the Dadha & Company – one of India’s most trusted pharmacies, with over 100 years’ experience in dispensing quality medicines.
     </p>
        </div>
                        
                        <!--End Single Service-->
  </div>
   </div>
</section>
            
            <!--End Services Section-->
            
            
            
            
            <!--Features Products-->
            

            
         
            
 <!--Best Seller Section-->
<section class="seller py-5">
    <div class="container12">
    
        <!--Section Title-->

     <div class="row">
     <div class="col-10 mx-auto col-sm-6 text-center">
      <h1 class="text-capitalize product-title">
        Best Seller Products
             </h1>
        </div>
         </div>
     <!--End Of Section Title-->
        <!--row-->
        <div class="row">
            <div class="col-sm-6">
                <div class="seller-item">
                    <img src="indexItems/doctore61.jpg" alt="" class="img-fluid photo">
                    <p> Medicines Store </p>
                </div>
            </div>
            <!--End Of Col-->
            <div class="col-sm-6 d-flex flex-column justify-content-between">
                <!--row-->
                <div class="row">
                    <!--img-1-->
                    <div class="col-sm-6">
                        <div class="seller-item">
                    <img src="indexItems/med20.jpg" alt="" class="img-fluid seller-img">
                            <p>Door To Door Delivery</p>
                        </div>
                    </div>
             <!--End Of img-1-->
                
                                <!--img-1-->
                    <div class="col-sm-6">
                        <div class="seller-item">
                    <img src="indexItems/medd1.jpg" alt="" class="img-fluid seller-img">
                            <p>Door To Door Delivery</p>
                        </div>
                    </div>
             <!--End Of img-1-->
                </div>
                <!--End Of Row-->
                <div class="row">
                                <!--img-1-->
                    <div class="col-sm-6">
                        <div class="seller-item">
                    <img src="indexItems/medd2.jpg" alt="" class="img-fluid seller-img img-top">
                            <p>Door To Door Delivery</p>
                        </div>
                    </div>
             <!--End Of img-1-->
            
                
                                <!--img-1-->
                    <div class="col-sm-6">
                        <div class="seller-item">
                    <img src="indexItems/medd3.jpg" alt="" class="img-fluid seller-img  img-top">
                            <p>Door To Door Delivery</p>
                        </div>
                    </div>
                    <!--End Of img-1-->
                </div>
            </div>
                    
                </div>  
            </div>
            </section>
        
        
            <!--End Of Best Seller Section-->
            
            <!--About Section-->

            <section id="about-sec">
                <div class="container11">
                    <div class="row align-items-center">
                        <div class="col-lg-5 text-center">
                            <img src="indexItems/dr8.jpg" width="450" height="150" class="img-fluid watch-img">
                        </div>
                        <div class="col-lg-7 text-lg-left text-center text-color about-text">
                            <h1>MedStore.com</h1>
                            
          <p class="text"> Who we are - India's most convenient online pharmacy
MedStore.com, India Ki Pharmacy, <br>is brought to you by the Dadha & Company – one of India’s most trusted pharmacies, with over 100 years’<br> experience in dispensing quality medicines. At MedStore.com, we help you look after your own health effortlessly as well as take care of<br> loved ones wherever they may reside in India. You can buy and send medicines from any corner of the country - with just a few clicks of the mouse.
                            </p>
                            
                            
                        </div>
                    </div>
                </div>
            </section>
        
            
 <!--End Of About Section-->
           <!--------Neswletter----------------->
    <section id="subscribe" class="py-10">
        <div class="container">
            <div class="row align-items-center my-5">
                <div class="col-sm-10 mx-auto-text-center my-5">
                    <h2 class="display-3 mb-5 text-white text-center"> Newsletter. </h2>
        <form class="form-inline d-flex justify-content-center">
    <input type="email" class="form-control" w-35 placeholder="Enter Email" id="email">  
  <button type="submit" class="btn btn-dark ml-2">Subscribe</button>
</form>
                </div>
            </div>
        </div>
    </section>

        
        
            <!-----------------Articale-Section------------------------->

            <div class="container13">
<h1>Health Articales</h1>
<div class="row">
<div class="col-md-3">
<div class="product-top">
    <img src="indexItems/h3.jpg">
    <div class="product11">
        <h3>[Vol 36] Medi-Scene: Your Weekly Health News Update</h3>
        <h2>12th October</h2>
    </div>
    </div>
    </div>
    
    <div class="col-md-3">
<div class="product-top">
    <img src="indexItems/dr1.jpg">
        <div class="product11">
            <h3>[Vol 37] Medi-Scene: Your Weekly Health News Update</h3>
            <h2>13th October</h2>
    </div>
    </div>
    </div>
    
    <div class="col-md-3">
<div class="product-top">
    <img src="indexItems/h6.jpg">
    <div class="product11">
        <h3>Highway To Health – World Heart Day 2020</h3>
        <h2>14th October</h2>
    </div>
    </div>
    </div>
    
    <div class="col-md-3">
<div class="product-top">
    <img src="indexItems/h5.jpg">
    <div class="product11">
        <h3>
[Vol 38] Medi-Scene: Your Weekly Health News Update</h3>
        <h2>15th October</h2>
    </div>
    </div>
                </div>
            </div>
            
            <!----------------End-Of-Articale-Section------------------------->
            
               <script>
           $(document).ready(function(){
  $(".owl-carousel").owlCarousel({
      loop:true,
      nav:true,
      dots:false,
      responsive:{
          0:{
              items: 1
          },
          600:{
              items: 3
          },
          1000:{
              items: 5
          }
        }
  });
               
});

        </script>
        
        
 <?php include 'footer.php'; ?>
        
        

    </body>
    
    
</html>
    