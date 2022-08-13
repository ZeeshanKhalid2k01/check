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

        <title>Add Your Company</title>
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
        <H1 style="border:1px solid black; background-color: #999;text-align: center; margin-top:-1px;">Add Your Company</H1>
        @if (session('status'))
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{ session('status') }}
        </div> 
        @endif

        <div style="text-align: left;"><a href="http://localhost/jobify/public/"> <button class="btnh" >&#8592:<i class="fa fa-home"></i></button></div></a>
        <div style="margin-top:100px"></div>
        <!-- END -->
        <form action="{{ route ('company.store') }}" method="post">
            @csrf
            <label for="cname">Company Name: &nbsp;</label>
            <input type="text" id="cname" name="cname" placeholder="Enter your Company name"><br><br>

                        
            <label for="cemail">Email: &nbsp;</label>
            <input type="text" id="cemail" name="cemail" placeholder="example@example.com"><br><br>
            
            <label for="designation">Designation: &nbsp;</label>
            <input type="text" id="designation" name="designation" placeholder="What will be designation"><br><br>
                        
            <label for="city">City: &nbsp;</label>
            <input type="text" id="city" name="city" placeholder="enter your City"><br><br>
            
            <label for="jobtype">Jobtype:</label>
            <select id="jobtype" name="jobtype">
                <option value="remote">Remote</option>
                <option value="full-time">Full-time</option>
                <option value="hybrid">Hybrid</option>
            </select>

            <label for="province">Choose a province:</label>
            <select id="province" name="province">
                <option value="punjab">Punjab</option>
                <option value="sindh">Sindh</option>
                <option value="balochistan">Balochistan</option>
                <option value="nwfp">NWFP</option>
                <option value="any">Any</option>
            </select>
            
            <label for="salary">Salary: &nbsp;</label>
            <input type="text" id="salary" name="salary" placeholder="Type Salary"><br><br>


            <input type="submit" value="Add">
        </form>
    </body>
</HTML>