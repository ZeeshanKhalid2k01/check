<!DOCTYPE html>
<html>
<head>
 <title>Contact Form</title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}
</style>
<body >
<a href="http://localhost/jobify/public/"><button class="btn"><i class="fa fa-home"></i></button></a>
<div class="flexcontainer"> 
  
 
 <div><form action="{{ route ('sendmail3') }}" method="post">
 @csrf
 
 <!-- <label for="exampleInputEmail1">Send to:</label> -->
 <input type="hidden" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="shanu.khalid7373@gmail.com"><br><br> 

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
 </form>
</body>
</html>



