<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>jobify</title>
    <link rel="stylesheet" href="style.css">
    <!-- from fonts.google.com -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<style>
    /* #######################Section 1 header######################################### */
    body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("../storage/app/public//image/hero.jpg");
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

.hero-text button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 10px 25px;
  color: black;
  background-color: #ddd;
  text-align: center;
  cursor: pointer;
}

.hero-text button:hover {
  background-color: #555;
  color: white;
}

/* hero image */

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
li:hover{
    font-weight: bold;
}

body{
    font-family: 'Poppins', sans-serif;
    background-color: #25274d;
}

.navbar{
    display: flex;
    align-items: right;
    padding: 20px;
}
nav{
    flex: 1;
    text-align: right;
    /* background-color: #563434; */
    

}

/* .bimg1{
    background-images: url("C:\xampp\htdocs\jobify\public\storage\images\slide1.jpg");
} */
nav ul{
    display: inline-block;
    list-style-type: none;
    
}
nav ul li{
    display: inline-block;
    margin-right: 20px;
}
a{
    text-decoration: none;
    color: rgb(196, 187, 187);
}
p{
    color: rgb(196, 187, 187);
}

.row{
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    justify-content: space-around;
    
}
.col2{
    
    flex-basis: 50%;
    min-width: 300px;
    text-align: center;
    color: white;
    
    /* background-color: #c38888; */
    /* margin: 1px; */

    
}
.col2 img{
    padding: 50px 0;/* padding: 50px 1; */
    min-width: 100%;
    
}
.col2 h1{
    font-size: 50px;
    line-height: 60px;
    margin: 25px;
}
.btn{
    display: inline-block;
    background: #ff523b;
    color: #fff;
    padding: 8px 30px; /* padding from left and right */
    margin: 30px 0;
    border-radius: 30px;
    transition: background 0.5s;
}
.btn:hover{
    background: #563434;
}
.header{
    /* background: radial-gradient(#fff,#967b7b); */

}
.header .row{
    margin-top: 40px;
}
.categories{
    margin: 70px 0;
}
.col3{
    flex-basis: 30%;
    min-width: 300px;
    margin-bottom: 0px;
}
.col3 img{
    width: 100%;
}
.small-container{
    max-width: 1080px;
    margin: auto;
    padding-left: 25px;
    padding-right: 25px;
}
.col4{
    flex-basis: 25%;
    padding: 10px;
    min-width: 200px;
    margin-bottom: 50px;
    transition: transform 0.5s;

}
.col4 img{
    width: 100%;

}
.title{
    text-align: center;
    margin: 0 auto 80px;
    position: relative;
    line-height: 60px;
    color: #555
}
.title::after{
    content: '';
    background: #ff523b;
    width: 80px;
    height: 5px;
    border-radius: 5px;
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);


}
h4{
    color: #555;
    font-weight: normal;
}
.col4 p{
    font-size: 14px;
}
.rating .fa{
    color: #ff523b;
}
.col4:hover{
    transform: translateY(-5px);
}
.offer{
    /* background: radial-gradient(#fff,#967b7b); */
    margin-top: 80px;
    padding: 30px 0
}
.col2 .offer-img{
    padding: 50px;
}
small{
    color: #555;
}


/* #######################Section 2 Companies*/
.topr{
    text-align: center;
    color:white;
    /* background: radial-gradient(orange,#fff); */
}

#slideshow {
    overflow: hidden;
    height: 510px;
    width: 100%;
    margin: 0 auto;
    /* background: radial-gradient(rgb(237, 224, 224), rgb(187, 109, 109)); */

}
 
/* Style each of the sides
with a fixed width and height */
 
.slide >img {
    float:left;
    height: 510py;
    width: 800px;
}
/* .slide > img{
    width: 100%;
}
  */
/* Add animation to the slides */
 
.slide-wrapper {
     
    /* Calculate the total width on the
  basis of number of slides */
    width: calc(800px * 10);
     
    /* Specify the animation with the
  duration and speed */
    animation: slide 5s ease infinite;
    /* background: radial-gradient(rgb(237, 224, 224), rgb(123, 119, 119)); */

}
 
 
@keyframes slide {
     
    /* Calculate the margin-left for
  each of the slides */
    10% {
        margin-left: 0px;
    }
    30% {
        margin-left: calc(-800px * 1);
    }
    50% {
        margin-left: calc(-800px * 2);
    }
    70% {
        margin-left: calc(-800px * 3);
    }
    100% {
        margin-left: calc(-800px * 4);
    }
}







/* #######################Section 3 Employees porfolio */
html {
    box-sizing: border-box;
  }
  
  *, *:before, *:after {
    box-sizing: inherit;
  }
.row{
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    justify-content: space-around; }
  
.column {
    float: left;
    width: 33.3%;
    margin-bottom: 16px;
    padding: 0 8px;
  }
  
/* 
.column {
      width: auto;
      display: block;
    } */
  
.card {
    box-shadow: 4px 4px 4px 0px rgba(80, 223, 223, 0.2);
    /* background: radial-gradient(#fff,#967b7b); */
  }
  
.container {
    padding: 0 16px;
  }
  
/* .container::after, .row::after {
    content: "";
    clear: both;
    display: table;
  } */
  
.title {
    color: rgb(61, 21, 21);
  }
  
.button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    margin-left: 180px;
    padding: 10px;
    border-radius: 20px;
  }
  
.button:hover {
    background-color: #555;
  }
h2{
    text-align: center;
}


/* ###############################contact ###############################3 */
.contact{
    /* background: radial-gradient(#fff,#967b7b); */
    height: 500px;
}
.footer{
    height: 200px;
    padding-top: 50px;
    background-color:black;
    color:white;
    /* background: radial-gradient(rgb(237, 224, 224), rgb(123, 119, 119)); */
}

</style>
<body style="">

    <!-- /* #######################Section 1 header######################################### */ -->

    <div class="header">
        <div class="container">
            <div class="navbar">
                <div >
                    <!-- <img src="storage\images\logo.jpg" width="125px"> -->
                    <img src="../storage/app/public/image/logojobify.png" width="125px">
                </div>
        
                <nav >
                    <ul>
                        
                        <li> <a href="http://localhost/jobify/public/">Home</a></li>
                        <li> <a href="http://127.0.0.1:8000/file/upload-file">Upload CV</a></li>
                        <li> <a href="http://localhost/jobify/public/company/create">add Job</a></li>
                        <li> <a href="http://localhost/jobify/public/employee/create">add Services</a></li>
                        <li> <a href="http://localhost/jobify/public/contactus">Contact Us</a></li>
                        <li> <a href="http://localhost/jobify/public/aboutus">About Us</a></li>
                        
                    </ul>
                </nav>
                <!-- <img src="C:\Users\US\Desktop\project\image\cartnav1bg.jpg" width="30px" height="30px" > -->
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col2">
                    <p style="background-image: url('C:\xampp\htdocs\jobify\public\storage\image\c4.jpg')">
                    <h1>Lets see latest Jobs </h1>
                    <p>Success isstent<br>hard work gains succes come.</p>
                    <a href="http://localhost/jobify/public/listscompany/read"class="btn">Find Job &#8594;</a></p>
                </div>
                <!-- <div class="col2">
                    <img src="C:\Users\US\Desktop\project\image\cartBG.jpg">
                </div> -->
                <div class="col2 bimg2">
                    <h1>Make life better</h1>
                    <p>Success isn't always acy. Consistent<br>hard work gais will come.</p>
                    <a href="http://localhost/jobify/public/listsemployee/read"class="btn">Find Employee &#8594;</a>
                </div>
            </div>
        </div>
    </div>


    
    <!-- /* #######################Section 2 Companies*/ #################################################################3-->
    <h1 class="topr">Why You Waiting....</h1>
    <div style="background:radial-gradient(white,black)">
       
        <div id="slideshow"  >
            <div class="slide-wrapper" >

                <!-- Define each of the slides and write the content -->
                <div class="slide">
                        <img src="../storage/app/public/image/slide1.jpg"  height="510px" width="310" >
                </div>
                <div class="slide">
                        <img src="../storage/app/public//image/slide2.jpg" height="510px" width="310" >
                </div>
                <div class="slide">
                        <img src="../storage/app/public//image/slide3.jpg"  height="510px" width="310" >
                </div>
                <div class="slide">
                        <img src="../storage/app/public//image/slide4.jpg" height="510px" width="310" >
                </div>
                <div class="slide">
                        <img src="../storage/app/public//image/slide5.jpg" height="510px" width="310" >
                </div>
            </div>
        </div>
    </div>    
    <!-- /* #######################Section 3 Employees porfolio################################################################ */ -->
    <br><h1 class="topr">We Are Verified By....</h1><br>
    <div class="row">
        <div class="column">
            <div class="card">
                <p style="text-align:center; padding-top: 10px;"><img src="../storage/app/public//image/company1.jpg"height="168px" width="274px"></p>
                <div class="container ">
                    <h2>Athena Consultants</h2>
                    <p class="title">Consultant Agency</p>
                    <p style="color:white;">Jobify is the best for services.</p>
                    <a href="http://localhost/jobify/public">learn more</a>
                    <!-- <p><button class="button">Contact</button></p> -->
                </div>
            </div>
        </div>
    
        <div class="column">
            <div class="card">
                <p style="text-align:center; padding-top: 10px;"><img src="../storage/app/public//image/company2.jpg" height="160px" width="274px" ></p>
                <div class="container">
                    <h2>Pixel Bits</h2>
                    <p class="title">Web Software House</p>
                    <p style="color:white;">Jobify is the best for finding hard working employees.</p>
                    <!-- <p>example@example.com</p> -->
                    <a href="http://localhost/jobify/public">learn more</a>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <p style="text-align:center; padding-top: 10px;"><img src="../storage/app/public//image/company4.jpg"height="160px" width="274px"></p>
                <div class="container">
                    <h2>Electronic Smart Technologies</h2>
                    <p class="title">Tech Softwarehouse</p>
                    <p style="color:white;">Jobify is the best for finding hard working employees.</p>
                    <!-- <p>example@example.com</p> -->
                    <a href="https://apkeagle.com/">learn more</a>
                </div>
            </div>
        </div>
    </div>
        <!-- feature products
        <div class="small-container">
            <h2 class="title">Feature Products</h2>
            <div class="row">
                <div class="col4">
                    <img src="C:\Users\US\Desktop\project\image\perfume6.jpg"width="200px" height="400px" >
                    <h4>Golden Label Perfume</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>$50.00</p>
                </div>

                <div class="col4">
                    <img src="C:\Users\US\Desktop\project\image\cream1.jpeg"width="200px" height="400px" >
                    <h4>Golden Label Perfume</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>$50.00</p>
                </div>

                <div class="col4">
                    <img src="C:\Users\US\Desktop\project\image\shampoo1.jpeg"width="200px" height="400px" >
                    <h4>Golden Label Perfume</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>$50.00</p>
                </div>


                <div class="col4">
                    <img src="C:\Users\US\Desktop\project\image\cream3.jpeg"width="200px" height="400px" >
                    <h4>Golden Label Perfume</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>$50.00</p>
                </div>
            </div>
            <h2 class="title">Latest Products</h2>
            <div class="row">
                <div class="col4">
                    <img src="C:\Users\US\Desktop\project\image\perfum12.jpeg"width="200px" height="400px" >
                    <h4>Golden Label Perfume</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>$50.00</p>
                </div>

                <div class="col4">
                    <img src="C:\Users\US\Desktop\project\image\hairgel3.jpeg"width="200px" height="400px" >
                    <h4>Golden Label Perfume</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>$50.00</p>
                </div>

                <div class="col4">
                    <img src="C:\Users\US\Desktop\project\image\cream4.jpeg"width="200px" height="400px" >
                    <h4>Golden Label Perfume</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>$50.00</p>
                </div>


                <div class="col4">
                    <img src="C:\Users\US\Desktop\project\image\cream5.jpeg"width="200px" height="400px" >
                    <h4>Golden Label Perfume</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>$50.00</p>
                </div>
                <div class="col4">
                    <img src="C:\Users\US\Desktop\project\image\oil1.jpeg"width="200px" height="400px" >
                    <h4>Golden Label Perfume</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>$50.00</p>
                </div>

                <div class="col4">
                    <img src="C:\Users\US\Desktop\project\image\oil3.jpeg"width="200px" height="400px" >
                    <h4>Golden Label Perfume</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>$50.00</p>
                </div>

                <div class="col4">
                    <img src="C:\Users\US\Desktop\project\image\oil2.jpeg"width="200px" height="400px" >
                    <h4>Golden Label Perfume</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>$50.00</p>
                </div>


                <div class="col4">
                    <img src="C:\Users\US\Desktop\project\image\oil5.jpeg"width="200px" height="400px" >
                    <h4>Golden Label Perfume</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>$50.00</p>
                </div>
            </div>

        </div> -->

        <!-- offer################################################################################################ -->

        <div class="hero-image">
            <div class="hero-text">
            
                <p>Start Searching...</p>
                <button>View</button>
            </div>
        </div>


        <hr style="color:white;">
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col3">
                        <div class="footer-widget">
                            <h3>Get in Touch</h3>
                            <div class="contact-info">
                                <p><i class="fa fa-map-marker"></i>47040, Wah Cantt, Pakistan</p>
                                <p><i class="fa fa-envelope"></i>jobify123@gmail.com</p>
                                <p><i class="fa fa-phone"></i>+82-3190403610</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col3">
                        <div class="footer-widget">
                            <h3>Follow Us</h3>
                            <div class="contact-info">
                                <div class="social">
                                    <a href=""><i class="fa fa-twitter"></i></a>
                                    <a href=""><i class="fa fa-facebook-f"></i></a>
                                    <a href=""><i class="fa fa-linkedin-in"></i></a>
                                    <a href=""><i class="fa fa-instagram"></i></a>
                                    <a href=""><i class="fa fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col3">
                        <div class="footer-widget">
                            <h3>Company Info</h3>
                            <ul>
                                <li><a href="http://localhost/jobify/public/aboutus">About Us</a></li>
                                <li><a href="http://localhost/jobify/public/privacypolicy">Privacy Policy</a></li>
                                <li><a href="http://localhost/jobify/public/termsandconditions">Terms & Condition</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr style="color:white; ">
                <pre style="text-align:center; font-size:12px"><br>Jobify Copyright 2022&#9400:</pre>
                </div>
            </div>
        </div>
</body>
</html>