<!-- <!DOCTYPE html>
<html>
    <head>
        <title>Contact Form</title>
    </head>
    <style>
        body{
                background-color: green;
                    
            }
    </style>
    <body >
        <div class="flexcontainer"> 

 
        <div style="background-color:Lightgreen;border:2px solid black;"><form action="{{ route ('sendmail2', $companys->id) }}" method="post">
 
        @csrf
        <h1 style="text-align:center;background-color:yellow;border:2px solid black;">Enter Your Application to send mail to {{$companys->cname}}</h1>
        <!-- <label for="exampleInputEmail1">Send to:</label> -->
        <!-- <div style="margin-bottom:150px;padding-left:550px;">
        <input type="hidden" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$companys->cemail}}"><br><br> 
        <input type="hidden" name="company_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$companys->id}}"><br><br> 

        <label for="exampleInputEmail1">cc:</label>
        <input type="email" name="cc" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter cc"><br><br>

        <label for="exampleInputEmail1">bcc:</label>
        <input type="email" name="bcc" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter bcc"><br><br>

        <label for="exampleInputEmail1">Subject:</label>
        <input type="text" name="subject" class="form-control" id="subject" placeholder="Enter your subject here"><br><br>

        <label for="mail">Mail:</label><br>
        <textarea  class="form-control" name="body" id="mail" rows="8" placeholder="Type ypur mail here ....."></textarea>

        <br><br> 
        <button type="submit" class="btn bta-primary">send</button>
        </div>
        </div>
        </form>
    </body>
    
</html> --> -->
<!-- ############################################################################## -->
<!DOCTYPE html>
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
    </style>    
</head>
<body>
<div class="container contact">
<div><form action="{{ route ('sendmail2', $companys->id) }}" method="post">
 @csrf

	<div class="row">
		<div class="col-md-3">
			<div class="contact-info">
				<img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
                <h2>Contact Company</h2>
				
			</div>
		</div>
		<div class="col-md-9">
			<div class="contact-form">

				<div class="form-group">
                    <!-- <label for="exampleInputEmail1">Send to:</label> -->
                    <div class="col-sm-10"> 
                    <h2>Enter Your Application to send mail to: {{$companys->cname}}</h2>	             
                    <input type="hidden" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$companys->cemail}}"><br><br> 
                    <input type="hidden" name="company_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$companys->id}}"><br><br> 
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
					<!-- <button type="submit" class="btn btn-default">Send</button> -->
                    <a href="#">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <button type="submit" class="btn btn-default">Send</button>
                    </a>
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>
</form>

</body>
</html>

<!-- ############################################################### -->
<!-- <a href="#">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <button type="submit" class="btn btn-default">Send</button>
    </a> -->

