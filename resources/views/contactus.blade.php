<!DOCTYPE html>
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <style>
body{
		background-color: #25274d;
	}
	.contact{
		padding: 4%;
		height: 400px;
	}
	.col-md-3{
		background: #ff9b00;
		padding: 4%;
		border-top-left-radius: 0.5rem;
		border-bottom-left-radius: 0.5rem;
	}
	.contact-info{
		margin-top:10%;
	}
	.contact-info img{
		margin-bottom: 15%;
	}
	.contact-info h2{
		margin-bottom: 10%;
	}
	.col-md-9{
		background: #fff;
		padding: 3%;
		border-top-right-radius: 0.5rem;
		border-bottom-right-radius: 0.5rem;
	}
	.contact-form label{
		font-weight:600;
	}
	.contact-form button{
		background: #25274d;
		color: #fff;
		font-weight: 600;
		width: 25%;
	}
	.contact-form button:focus{
		box-shadow:none;
	}
    .btnh {
                /* background-color: yellow; */
                border: none;
                color: black;
                padding: 12px 16px;
                font-size: 16px;            
                cursor: pointer;
                border:2px solid black;
                text-align: left;

                }

                /* Darker background on mouse-over */
                .btnh:hover {
                background-color: yellow;
                }   
    </style>    
</head>
<body>
<div style="text-align: left;"><a href="http://localhost/jobify/public/home"> <button class="btnh" >&#8592:<i class="fa fa-home"></i></button></div></a>

<div class="container contact">
<div><form action="{{ route ('sendmail3') }}" method="post">
 @csrf

	<div class="row">
		<div class="col-md-3">
			<div class="contact-info">
				<img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
				<h2>Contact Us</h2>
				<h4>We would love to hear from you !</h4>
			</div>
		</div>
		<div class="col-md-9">
			<div class="contact-form">

				<div class="form-group">
                    <!-- <label for="exampleInputEmail1">Send to:</label> -->
                    <div class="col-sm-10">          
                    <input type="hidden" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="shanu.khalid7373@gmail.com"><br><br> 
				    </div>
				</div> 

				<div class="form-group">
                <label for="exampleInputEmail1">cc:</label>
				  <div class="col-sm-10">          
                  <input type="email" name="cc" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter cc"><br><br>
				  </div>
				</div>


				<div class="form-group">
                <label for="exampleInputEmail1">bcc:</label>
				  <div class="col-sm-10">
                  <input type="email" name="bcc" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter bcc"><br><br>
				  </div>
				</div>

                <div class="form-group">
                <label for="exampleInputEmail1">Subject:</label>
				  <div class="col-sm-10">
                  <input type="text" name="subject" class="form-control" id="subject" placeholder="Enter your subject here"><br><br>
				  </div>
				</div>

				<div class="form-group">
                <label for="mail">Mail:</label><br>
				  <div class="col-sm-10">
                  <textarea  class="form-control" name="body" id="mail" rows="8" placeholder="Type ypur mail here ....."></textarea>
				  </div>
				</div>


				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">Send</button>
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>
</form>

</body>
</html>