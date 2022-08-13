<!DOCTYPE html>
<html>
<head>
 <title>Contact Form</title>
</head>

<body >
<div class="flexcontainer"> 
  
 
 <div><form action="{{ route ('sendmail', $companys->id) }}" method="post">
 @csrf

 <!-- <label for="exampleInputEmail1">Send to:</label> -->
 <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="$employees->cemail"><br><br> 

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



