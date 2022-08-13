<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Redstore | Ecommerce</title>
    <link rel="stylesheet" href="style.css">
    <!-- from fonts.google.com -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<style>
    /* #######################Section 1 header######################################### */


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

.bimg1{
    background-image: url("C:\Users\Administrator\Downloads\rag-doll-lined-up-one-red-through-magnifying-glass.jpg");
}
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
    color: #555;
}
p{
    color: #555;
}
.container{
  
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
    background: radial-gradient(#fff,#967b7b);

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
    background: radial-gradient(#fff,#967b7b);
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
    background:radial-gradient(white,black);
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
    width: 400px;
}
/* .slide > img{
    width: 100%;
}
  */
/* Add animation to the slides */
 
.slide-wrapper {
     
    /* Calculate the total width on the
  basis of number of slides */
    width: calc(728px * 4);
     
    /* Specify the animation with the
  duration and speed */
    animation: slide 10s ease infinite;
    /* background: radial-gradient(rgb(237, 224, 224), rgb(123, 119, 119)); */

}
 
 
@keyframes slide {
     
    /* Calculate the margin-left for
  each of the slides */
    20% {
        margin-left: 0px;
    }
    40% {
        margin-left: calc(-728px * 1);
    }
    60% {
        margin-left: calc(-728px * 2);
    }
    80% {
        margin-left: calc(-728px * 3);
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
    box-shadow: 0 4px 8px 0 rgba(4, 6, 5, 0.2);
    background: radial-gradient(rgb(129, 125, 125), rgb(14, 13, 13));
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
    background: radial-gradient(rgb(35, 25, 25), black );
    height: 500px;
}
.footer{
    height: 400px;
    padding-top: 100px;
    background: radial-gradient(rgb(237, 224, 224), rgb(123, 119, 119));
}
</style>
<body>

    <!-- /* #######################Section 1 header######################################### */ -->

    <div class="header">
        <div class="container">
            <div class="navbar">
                <div >
                    <img src="C:\Users\US\Desktop\project\images\logoBG.png" width="125px">
                </div>
        
                <nav >
                    <ul>
                        
                        <li> <a href="file:///C:/Users/US/Desktop/project/web2.html">Home</a></li>
                        <li> <a href="http://localhost/jobify/public/employee/create">Upload CV</a></li>
                        <li> <a href="http://localhost/jobify/public/company/create">Add Job</a></li>
                        <li> <a href="">Contact Us</a></li>
                        <li> <a href="">About Us</a></li>
                        
                    </ul>
                </nav>
                <!-- <img src="C:\Users\US\Desktop\project\images\cartnav1bg.png" width="30px" height="30px" > -->
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col2">
                    <p style="background-image: url('C:\Users\Administrator\Downloads\rag-doll-lined-up-one-red-through-magnifying-glass.jpg')">
                    <h1>Lets see latest Jobs </h1>
                    <p>Success isstent<br>hard work gains succes come.</p>
                    <a href="http://localhost/jobify/public/listscompany/read"class="btn">Find Job &#8594;</a></p>
                </div>
                <!-- <div class="col2">
                    <img src="C:\Users\US\Desktop\project\images\cartBG.png">
                </div> -->
                <div class="col2 bimg2">
                    <h1>Make life better</h1>
                    <p>Success isn't always acy. Consistent<br>hard work gais will come.</p>
                    <a href="http://localhost/jobify/public/employee/readonly"class="btn">Find Employee &#8594;</a>
                </div>
            </div>
        </div>

    </div>


    
    <!-- /* #######################Section 2 Companies*/ #################################################################3-->
    <h1 class="topr">Top Recruiters</h1>
    <div style="background:radial-gradient(white,black)">
       
        <div id="slideshow"  >
            <div class="slide-wrapper" >

                <!-- Define each of the slides and write the content -->
                <div class="slide">
                        <img src="C:\Users\Administrator\Downloads\pexels-vietnam-photographer-9973155.jpg"  height="510py"  >
                </div>
                <div class="slide">
                        <img src="C:\Users\Administrator\Downloads\pexels-afif-kusuma-9843189.jpg" >
                </div>
                <div class="slide">
                        <img src="C:\Users\Administrator\Downloads\pexels-cottonbro-4820662.jpg"  >
                </div>
                <div class="slide">
                        <img src="C:\Users\US\Desktop\project\images\c4.png" height="510py" >
                </div>
            </div>
        </div>
    </div>    
    <!-- /* #######################Section 3 Employees porfolio################################################################ */ -->
    <br>
    <div class="row">
        <div class="column">
            <div class="card">
                <p style="text-align:center; padding-top: 10px;"><img src="C:\Users\US\Desktop\project\images\pf2.jpg" alt="Jane" ></p>
                <div class="container">
                    <h2>Jane Doe</h2>
                    <p class="title">CEO & Founder</p>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    <p>example@example.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>
    
        <div class="column">
            <div class="card">
                <p style="text-align:center; padding-top: 10px;"><img src="C:\Users\US\Desktop\project\images\pf2.jpg" alt="Jane" ></p>
                <div class="container">
                    <h2>Jane Doe</h2>
                    <p class="title">CEO & Founder</p>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    <p>example@example.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <p style="text-align:center; padding-top: 10px;"><img src="C:\Users\US\Desktop\project\images\pf2.jpg" alt="Jane" ></p>
                <div class="container">
                    <h2>Jane Doe</h2>
                    <p class="title">CEO & Founder</p>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    <p>example@example.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>
    </div>
        <!-- feature products
        <div class="small-container">
            <h2 class="title">Feature Products</h2>
            <div class="row">
                <div class="col4">
                    <img src="C:\Users\US\Desktop\project\images\perfume6.jpg"width="200px" height="400px" >
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
                    <img src="C:\Users\US\Desktop\project\images\cream1.jpeg"width="200px" height="400px" >
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
                    <img src="C:\Users\US\Desktop\project\images\shampoo1.jpeg"width="200px" height="400px" >
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
                    <img src="C:\Users\US\Desktop\project\images\cream3.jpeg"width="200px" height="400px" >
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
                    <img src="C:\Users\US\Desktop\project\images\perfum12.jpeg"width="200px" height="400px" >
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
                    <img src="C:\Users\US\Desktop\project\images\hairgel3.jpeg"width="200px" height="400px" >
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
                    <img src="C:\Users\US\Desktop\project\images\cream4.jpeg"width="200px" height="400px" >
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
                    <img src="C:\Users\US\Desktop\project\images\cream5.jpeg"width="200px" height="400px" >
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
                    <img src="C:\Users\US\Desktop\project\images\oil1.jpeg"width="200px" height="400px" >
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
                    <img src="C:\Users\US\Desktop\project\images\oil3.jpeg"width="200px" height="400px" >
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
                    <img src="C:\Users\US\Desktop\project\images\oil2.jpeg"width="200px" height="400px" >
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
                    <img src="C:\Users\US\Desktop\project\images\oil5.jpeg"width="200px" height="400px" >
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
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col3">
                        <div class="footer-widget">
                            <h3>Get in Touch</h3>
                            <div class="contact-info">
                                <p><i class="fa fa-map-marker"></i>123 E Store, Los Angeles, USA</p>
                                <p><i class="fa fa-envelope"></i>email@example.com</p>
                                <p><i class="fa fa-phone"></i>+123-456-7890</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col3">
                        <div class="footer-widget">
                            <h3>Follow Us</h3>
                            <div class="contact-info">
                                <div class="social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col3">
                        <div class="footer-widget">
                            <h3>Company Info</h3>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms & Condition</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
</body>
</html>