<!DOCTYPE HTML>
<HTML>
    <head>
        <!-- For Success alert that appears after deletion -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



        <title>Add Employee</title>
        <style>
            body{
                background-image: url('https://ssgnet.com/wp-content/uploads/2015/09/blue-red-background.jpg');
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
                text-align: center;
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
        <H1 style="border:1px solid black; background-color: #999;text-align: center; margin-top:-1px;">Add Your Data</H1>
        @if (session('status'))
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{ session('status') }}
        </div> 
        @endif


       <div style="text-align: left;"><a href="http://localhost/jobify/public/"> <button class="btnh" >&#8592:<i class="fa fa-home"></i></button></div></a>
        <div style="margin-top:100px"></div>
        <!-- END -->
        <form action="{{ route ('employee.store') }}" method="post">
            @csrf
            <label for="name">Name: &nbsp;</label>
            <input type="text" id="name" name="name" placeholder="enter your full name"><br><br>
            
            <label for="age">Age: &nbsp;</label>
            <input type="text" id="age" name="age" placeholder="enter your age"><br><br>
            
            <label for="phoneNO">Phone NO: &nbsp;</label>
            <input type="text" id="phoneNO" name="phoneNO" placeholder="enter your phone number"><br><br>
            
            <label for="email">Email: &nbsp;</label>
            <input type="text" id="email" name="email" placeholder="enter your Email"><br><br>
            
            <label for="city">City: &nbsp;</label>
            <input type="text" id="city" name="city" placeholder="enter your City"><br><br>
            
            <label for="province">Choose a province:</label>
            <select id="province" name="province">
                <option value="punjab">Punjab</option>
                <option value="sindh">Sindh</option>
                <option value="balochistan">Balochistan</option>
                <option value="nwfp">NWFP</option>
                <option value="any">Any</option>
            </select>
            
            <label for="expertise">Expertise: &nbsp;</label>
            <input type="text" id="expertise" name="expertise" placeholder="Enter your field"><br><br>

            <label for="experience">experience: &nbsp;</label>
            <input type="text" id="experience" name="experience" placeholder="NIL\ no of years"><br><br>

            <ul><li> <a href="http://127.0.0.1:8000/file/upload-file">Upload CV</a></li></ul>
            <input type="submit" value="Add">
        </form>
    </body>
</HTML>